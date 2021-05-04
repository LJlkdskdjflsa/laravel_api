<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return Post::all();
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
    public function show($id)
    {
        return Post::find($id);
    }
    public function update(Request $request, $id)
    {
        if(auth()->check()) {
            $post = Post::find($id);
            if(auth()->id() == $post->user_id){

                $post->update([
                    'title' => $request->title,
                    'content' => $request->content,
                ]);
                return $post;
            }else{
                return "You are not the user who create this post,please edit your own post";
            }
        }else{
            return "You are not user please log in";
        }
    }
    public function destroy($id)
    {

        if(auth()->check()) {
            $post = Post::find($id);
            if(auth()->id() == $post->user_id){

                $post->destroy($id);
                return "post has been destroyed";
            }else{
                return "You are not the user who create this post,please edit your own post";
            }
        }else{
            return "You are not user please log in";
        }
    }

    public function search($title)
    {
        return Post::where('title', 'like', '%' . $title . '%')->get();
    }
}
