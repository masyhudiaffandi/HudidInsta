<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Post $post, Request $request)
    {
        $request->user()->likes()->create([
            'post_id' => $post->id,
        ]);

        return back()->with('success', 'Post liked!');
    }

    public function unlike(Post $post, Request $request)
    {
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back()->with('success', 'Post unliked!');
    }
}
