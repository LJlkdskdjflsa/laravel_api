<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoteController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    /**
     * @OA\Post(
     * path="/api/vote",
     * summary="Store",
     * description="create new vote",
     * operationId="store",
     * tags={"votes"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="the vote contents",
     *    @OA\JsonContent(
     *       required={"post_id","command_id","status"},
     *       @OA\Property(property="post_id", type="integer",example=1),
     *       @OA\Property(property="command_id", type="integer", example=1),
     *       @OA\Property(property="status", type="integer", example=1),
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
                'post_id' => 'required',
                'status' => 'required',
            ]);
            return Vote::create([
                'post_id' => $request->post_id,
                'command_id' => $request->command_id,
                'status' => $request->status,
                'user_id' => auth()->id(),
            ]);
        }
    }

    public function show(Vote $vote)
    {
        //
    }

    public function edit(Vote $vote)
    {
        //
    }

    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * @OA\Delete (
     * path="/api/vote/{id}",
     * summary="Store",
     * description="delete vote",
     * operationId="destroy",
     * tags={"votes"},
     * security={{"bearer_token":{}}},
     * @OA\Parameter(
     *     description="the vote id to delete",
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
    public function destroy($id)
    {
        if(auth()->check()) {
            if(Vote::check($id)){
                $vote = Vote::find($id);
                if(auth()->id() == $vote->user_id){
                    $vote->destroy($id);
                    return response()->json('delete success', Response::HTTP_NO_CONTENT);
                }else{
                    return response()->json(
                    [
                        'error' => 'You are not the user who vote,please edit your own vote'
                    ],
                    Response::HTTP_UNAUTHORIZED);
                }
            }
            return response()->json(
                [
                    'error' => 'cannot find the vote id'
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
}
