<!-- resources/views/components/post/post-card/feedback.blade.php -->
<div class="post-feedback">
    @foreach ($post->comments as $comment)
        <div class="comment">
            <span class="font-semibold">{{ $comment->user->name }}</span>
            <p>{{ $comment->content }}</p>
        </div>
    @endforeach
</div>
