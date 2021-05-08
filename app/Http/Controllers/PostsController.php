<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Post;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{
    public function index()
    {
        $vote_post = DB::table('posts')
            ->leftJoin('votes', 'votes.post_id', '=', 'posts.id')
            ->leftJoin('users', 'users.id', '=', 'posts.user_id')
            ->select('posts.id',
                'posts.title',
                'posts.user_id',
                'users.name',
                DB::raw(' COUNT(votes.status) FILTER ( WHERE votes.status = 1 ) AS "likes"'),
                DB::raw(' COUNT(votes.status) FILTER ( WHERE votes.status = 0 ) AS "dislikes"'),
                'posts.created_at',
                'posts.updated_at',
            )
            ->groupBy('posts.id','votes.post_id','users.name')
            ->orderBy('posts.id')
            ->get();
        return response()->json($vote_post, Response::HTTP_ACCEPTED);

    }
    public function show($id)
    {
        return Post::find($id);
    }
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
