<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    

   

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('image', 'public');
        };

        Post::create($data);

        return redirect()->route('article.dashboard')
            ->with('success', 'Post created successfully.');
    }

   

   

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('article.dashboard')
            ->with('success', 'Post deleted successfully.');
    }

    public function edit(Post $post)
{
    return view('posts.edit', compact('post'));
}

public function update(UpdatePostRequest $request, Post $post)
{
    $data = $request->validated();

    if ($request->hasFile('image')) {
        // Hapus gambar lama
        Storage::disk('public')->delete($post->image_path);
        
        // Simpan gambar baru
        $data['image_path'] = $request->file('image')->store('image', 'public');
    }

    $post->update($data);

    return redirect()->route('article.dashboard')
        ->with('success', 'Post updated successfully.');
}

}
