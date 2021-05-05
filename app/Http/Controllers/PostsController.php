<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostsController extends Controller
{
    public function index()
    {
        return Post::all();
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
            return Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'user_id' => auth()->id(),
            ]);
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
            return response()->json("the post id not found", Response::HTTP_NOT_FOUND);
        }else{
            return response()->json("You are not user please log in", Response::HTTP_UNAUTHORIZED);
        }
    }

    public function search($title)
    {
        return Post::where('title', 'like', '%' . $title . '%')->get();
    }
}
