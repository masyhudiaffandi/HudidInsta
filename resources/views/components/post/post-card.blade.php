@if (isset($posts) && $posts->count() > 0)
    @foreach ($posts as $post)
        <div class="post-card">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="post-header py-4 flex justify-between">
                    <div class="post-author">
                        <p class="font-bold">{{ $post->user->name }}</p>
                    </div>
                    @include('components.post.post-card.post-control')
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 text-gray-900">
                        <div class="post-image w-46">
                            <img src="{{ asset('storage/'.$post->image) }}" class="w-full">
                        </div>
                        @include('components.post.post-card.post-feedback')
                        <div class="post-caption mt-4">
                            <p class="space-x-6">
                                <span class="font-bold">
                                    {{ $post->user->name }}
                                </span>
                                {{ $post->caption }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center">Tidak ada post yang ditemukan.</p>
@endif
