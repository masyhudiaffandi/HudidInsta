<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        // Create comment
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->id(); // assuming you have authentication
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
    public function destroy(string $id)
    {
        //
    }
}
