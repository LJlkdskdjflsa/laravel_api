<?php

namespace App\Http\Controllers;

use App\Models\Command;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class CommandsController extends Controller
{

    public function index()
    {
        return Command::all();
    }

    /**
     * @OA\Get(
     * path="/api/posts/{post_id}/commands",
     * summary="post index",
     * description="get all command information of a post",
     * operationId="show",
     * tags={"commands"},
     *     @OA\Parameter(
     *         description="ID of post to return its command",
     *         in="path",
     *         name="post_id",
     *         required=true,
     *         @OA\Schema(
     *           type="integer",
     *           format="int64"
     *         )
     *     ),
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
    public function show($id)
    {
        $response = Command::where('post_id',$id)->get();
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * @OA\Post(
     * path="/api/commands",
     * summary="Store",
     * description="create new command",
     * operationId="store",
     * tags={"commands"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass command content",
     *    @OA\JsonContent(
     *       required={"content","post_id"},
     *       @OA\Property(property="content", type="string",example="it is good"),
     *       @OA\Property(property="post_id", type="integer", example=1),
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
                'content' => 'required',
                'post_id' => 'required',
            ]);
            $post_id = (int)$request->post_id;
            $response = Command::create([
                'user_id' => auth()->id(),
                'post_id' => $post_id,
                'content' => $request->content,
            ]);
            return response()->json($response, Response::HTTP_CREATED);
        }
    }

    /**
     * @OA\Delete(
     * path="/api/commands/{id}",
     * summary="Delete",
     * description="delete a command",
     * operationId="destroy",
     * tags={"commands"},
     * @OA\Parameter(
     *     description="the command id to delete ",
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
    public function destroy($id)
    {
        if(auth()->check()) {
            if(Command::check($id)){
                $command = Command::find($id);
                if(auth()->id() == $command->user_id){
                    $command->destroy($id);
                    return response()->json(null, Response::HTTP_NO_CONTENT);
                }else{
                    return response()->json("You are not the user who create this command,please edit your own commands", Response::HTTP_UNAUTHORIZED);
                }
            }
            return response()->json("the command id not found", Response::HTTP_NOT_FOUND);
        }else{
            return response()->json("You are not user please log in", Response::HTTP_UNAUTHORIZED);
        }
    }
}
