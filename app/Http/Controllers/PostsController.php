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
        $post = Post::find($id);
        $post->update($request->all());
        return $post;
    }
    public function destroy($id)
    {
        return Post::destroy($id);
    }

    public function search($title)
    {
        return Post::where('title', 'like', '%' . $title . '%')->get();
    }
}
