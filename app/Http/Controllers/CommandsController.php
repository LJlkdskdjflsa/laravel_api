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
    public function show($id)
    {
        $response = Command::where('post_id',$id)->get();
        return response()->json($response, Response::HTTP_OK);
    }

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
