<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all()
    {
        $posts = Post::all()->toArray();
        
        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $posts
            ]
        );
        
    }

    public function store(Request $request)
    {

        Post::create($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );

    }

    public function edit($id)
    {
        $post = Post::find($id);

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $post->toArray()
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        
        $post->update($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );
    }
}
