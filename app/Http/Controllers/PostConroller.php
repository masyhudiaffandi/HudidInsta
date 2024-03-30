<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostConroller extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('home', compact('posts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'caption' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->file('image')->storeAs('public/images/posts', $imageName);

        $post = new Post([
            'user_id' => $request->user_id,
            'caption' => $request->caption,
            'image' => $imageName
        ]);
        $post->save();

        return back()->with('success', 'Image uploaded successfully!')
                     ->with('image', $imageName);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'user_id' => 'required',
            'caption' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->file('image')->storeAs('images/posts', $imageName, 'public');
            $post->image = $imageName;
        }

        $post->update([
            'user_id' => $request->user_id,
            'caption' => $request->caption,
            'image' => $post->image
        ]);

        return back()->with('success', 'Image updated successfully!')
                     ->with('image', $post->image);
    }

    public function destroy(string $id) 
    {
      $post = Post::findOrFail($id);

      if(auth()->user()->id !== $post->user_id){
         abort(403); 
      }
    
      $post->delete();
      
      return back()->with('success', 'Post deleted successfully!');
    }
    
}
