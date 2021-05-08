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
