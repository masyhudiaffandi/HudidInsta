<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow p-4 space-y-4">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Komentar
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="space-y-4 h-36 overflow-y-scroll">
                @if(isset($post->comments) && $post->comments->count() > 0)
                    @foreach ($post->comments as $comment)
                        <div class="comment-group">
                            <div class="comment-content flex gap-2">
                                <p>
                                    <span class="font-bold">{{ $comment->user->name }}</span>
                                    {{ $comment->content }}
                                </p>
                            </div>
                            <div class="comment-info">
                                <p class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Tidak ada komentar</p>
                @endif
            </div>
            @include('components.post.post-card.comment-form')
        </div>
    </div>
</div>
