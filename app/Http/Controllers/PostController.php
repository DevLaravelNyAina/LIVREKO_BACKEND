<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) 
        {
            $validated['image'] = $request->file('image')->store('posts', 'public');
        }

        $post = Post::create([
            'description' => $validated['description'],
            'statu'       => $validated['statu'],
            'image'       => $validated['image'],
            'user_id'     => Auth::id(), 
        ]);
        return response()->json([
            'message'=>'publié',
            'post'=>$post->load('users')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
