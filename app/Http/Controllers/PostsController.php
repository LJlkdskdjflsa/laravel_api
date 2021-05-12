<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{
    /**
     * @OA\Get(
     * path="/api/posts",
     * summary="post index",
     * description="get all post information to show on the post index page",
     * operationId="postShow",
     * tags={"posts"},
     * @OA\RequestBody(
     *    required=false
     * ),
     * @OA\Response(
     *    response=200,
     *    description="OK",
     *    @OA\JsonContent(
     *       @OA\Property(
     *          property="message",
     *          type="string",
     *          example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function index()
    {
        $vote_post = DB::table('posts')
            ->leftJoin('votes', 'votes.post_id', '=', 'posts.id')
            ->leftJoin('users', 'users.id', '=', 'posts.user_id')
            ->leftJoin('commands', 'commands.post_id', '=', 'posts.id')
            ->select('posts.id',
                'posts.title',
                'posts.user_id',
                'users.name as author_name',
                DB::raw(' COUNT(commands.content) AS commands_count'),
                //command sum

                //vote sum
/*                DB::raw(' COUNT(votes.status) FILTER ( WHERE votes.status = 1 ) AS "likes"'),
                DB::raw(' COUNT(votes.status) FILTER ( WHERE votes.status = 0 ) AS "dislikes"'),*/

                'posts.created_at',
                'posts.updated_at',
            )
            ->groupBy('posts.id','votes.post_id','users.name')
            ->orderBy('posts.id')
            ->get();
        return response()->json($vote_post, Response::HTTP_OK);
    }

    /**
     * @OA\Get(
     * path="/api/posts/{id}",
     * summary="Show",
     * description="The infomation about the post",
     * operationId="show",
     * tags={"posts"},
     *     @OA\Parameter(
     *         description="the post id to show",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *           type="integer",
     *           format="int64"
     *         )
     *     ),
     * @OA\Response(
     *    response=200,
     *    description="Success"
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Not authorized"),
     *    )
     * )
     * )
     */
    public function show($id)
    {
        return Post::find($id);
    }


    /**
     * @OA\Post(
     * path="/api/posts",
     * summary="Store",
     * description="create new posts",
     * operationId="store",
     * tags={"posts"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass post content",
     *    @OA\JsonContent(
     *       required={"title","content"},
     *       @OA\Property(property="title", type="string",example="Post 1 title"),
     *       @OA\Property(property="content", type="string", example="the post 1 is a test post"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="OK",
     *    @OA\JsonContent(
     *       @OA\Property(
     *          property="message",
     *          type="string",
     *          example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function store(Request $request)
    {
        if(auth()->check()){
            $request ->validate([
                'title' => 'required',
                'content' => 'required',
            ]);
            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'user_id' => auth()->id(),
            ]);
            $first_command = $this->first_command($post->id);

            $response = [
                'post' => $post,
                'first_command' => $first_command,
            ];
            return $response;
        }
    }

    /**
     * @OA\Put(
     * path="/api/posts/{id}",
     * summary="Update",
     * description="update post",
     * operationId="update",
     * tags={"posts"},
     * @OA\Parameter(
     *     description="the post id to update ",
     *     in="path",
     *     name="id",
     *     required=true,
     *       @OA\Schema(
     *       type="integer",
     *       format="int64"
     *     )
     * ),
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass post content",
     *    @OA\JsonContent(
     *       required={"title","content"},
     *       @OA\Property(property="title", type="string",example="Post 1 title updated"),
     *       @OA\Property(property="content", type="integer", example="the post 1 is a test post updated"),
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="OK",
     *    @OA\JsonContent(
     *       @OA\Property(
     *          property="message",
     *          type="string",
     *          example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        if(auth()->check()) {
            if(Post::check($id)){
                $post = Post::find($id);
                if(auth()->id() == $post->user_id){
                    $post->update([
                        'title' => $request->title,
                        'content' => $request->content,
                    ]);
                    return response()->json($post, Response::HTTP_ACCEPTED);
                }else{
                    return response()->json("You are not the user who create this post,please edit your own commands", Response::HTTP_UNAUTHORIZED);
                }
            }
            return response()->json("the post id not found", Response::HTTP_NOT_FOUND);
        }else{
            return response()->json("You are not user please log in", Response::HTTP_UNAUTHORIZED);
        }
    }

    /**
     * @OA\Delete(
     * path="/api/posts/{id}",
     * summary="Delete",
     * description="delete post",
     * operationId="destroy",
     * tags={"posts"},
     * @OA\Parameter(
     *     description="the post id to delete ",
     *     in="path",
     *     name="id",
     *     required=true,
     *       @OA\Schema(
     *       type="integer",
     *       format="int64"
     *     )
     * ),
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="OK",
     *    @OA\JsonContent(
     *       @OA\Property(
     *          property="message",
     *          type="string",
     *          example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function destroy($id)
    {
        if(auth()->check()) {
            if(Post::check($id)){
                $post = Post::find($id);
                if(auth()->id() == $post->user_id){
                    $post->destroy($id);
                    return response()->json(null, Response::HTTP_NO_CONTENT);
                }else{
                    return response()->json("You are not the user who create this post,please edit your own commands", Response::HTTP_UNAUTHORIZED);
                }
            }
            return response()->json(
                [
                'error' => 'cannot find the post id'
                ],
                Response::HTTP_NOT_FOUND);
        }else{
            return response()->json(
                [
                    'error' => 'You are not user please log in'
                ],
                Response::HTTP_UNAUTHORIZED);
        }
    }

    /**
     * @OA\Get(
     * path="/api/posts/{title_words}",
     * summary="Search",
     * description="search post",
     * operationId="search",
     * tags={"posts"},
     * @OA\Parameter(
     *     description="the post title to search",
     *     in="path",
     *     name="id",
     *     required=true,
     *       @OA\Schema(
     *       type="integer",
     *       format="int64"
     *     )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="OK",
     *    @OA\JsonContent(
     *       @OA\Property(
     *          property="message",
     *          type="string",
     *          example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function search($title)
    {
        return Post::where('title', 'like', '%' . $title . '%')->get();
    }

    //function
    public function first_command($post_id)
    {
        if(auth()->check()){

            $post_id = (int)$post_id;
            $cammand = Command::create([
                'user_id' => auth()->id(),
                'post_id' => $post_id,
                'content' => 'first',
                'likes'=>0,
                'dislikes'=>0,
            ]);

            return "success";
        }
    }
}
