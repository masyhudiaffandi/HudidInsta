<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $request->post_id;
        $comment->content = $request->content;
        $comment->save();

        return back()->with('success', 'Comment added successfully!');
    }
    public function destroy(string $id)
    {
        //
    }
}
