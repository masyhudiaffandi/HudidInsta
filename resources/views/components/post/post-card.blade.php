@if (isset($posts) && $posts->count() > 0)
    @foreach ($posts as $post)
        <div class="post-card max-w-md mx-auto bg-white rounded-md shadow-md mt-6">
            <div class="post-card-header flex justify-between w-full items-center p-2">
                <p>{{ $post->user->name }}</p>
                @include('components.post.post-card.post-control')
            </div>
            <div class="post-card-content">
                <div class="content-image">
                    <img src="{{ asset('storage/images/posts/'.$post->image) }}" class="w-full" alt="">
                </div>
                <div class="content-feedback p-2 flex items-center">
                    <div class="feedback-like">
                        <form action="{{ route('posts.like', $post->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="focus:outline-none">
                                @if ($post->likes->contains('user_id', auth()->user()->id))
                                    <i class="fa-solid fa-heart fa-xl text-red-500" style="color: red"></i>
                                @else
                                    <i class="fa-regular fa-heart fa-xl text-black"></i>
                                @endif
                            </button>
                        </form>
                        <span>{{ $post->likes->count() }} Likes</span>
                    </div>
                </div>
                
                <div class="contet-caption px-2">
                    <p>
                        <span class="font-semibold">{{ $post->user->name }}</span>
                        {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="post-not-found flex items-center justify-center h-96">
        <p class="text-center">Tidak ada post yang ditemukan.</p>
    </div>
@endif

