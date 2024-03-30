<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;    
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggleLike(Post $post)
    {
        $user = auth()->user();

        $existingLike = Like::where('user_id', $user->id)
            ->where('post_id', $post->id)
            ->first();

        if ($existingLike) {
            $existingLike->delete();
            $message = 'Post unliked successfully.';
        } else {
            $like = new Like();
            $like->user_id = $user->id;
            $like->post_id = $post->id;
            $like->save();
            $message = 'Post liked successfully.';
        }

        return back()->with('success', $message);
    }
}
