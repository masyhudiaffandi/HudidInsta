<div class="post-card max-w-md mx-auto bg-white rounded-md shadow-md mt-6">
    @include('components.post.post-card.header', ['userName' => $post->user->name])
    <div class="post-card-content">
        <div class="content-image">
            <img src="{{ asset('storage/images/posts/'.$post->image) }}" class="w-full" alt="">
        </div>
        <div class="content-feedback p-2 px-3 flex items-center gap-4">
            @auth
                @include('components.post.post-card.like-button', [
                    'likeRoute' => route('posts.like', $post->id),
                    'isLiked' => $post->likes->contains('user_id', auth()->user()->id)
                ])
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">
                    <i class="fa-regular fa-heart fa-xl text-black"></i>
                </a>
            @endauth
            <div class="feedback-comment">
                @include('components.post.post-card.feedback')
            </div>
        </div>
        @include('components.post.post-card.like-count', ['likeCount' => $post->likes->count()])
        <div class="contet-caption px-3 pb-3">
            <p>
                <span class="font-semibold">{{ $post->user->name }}</span>
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
