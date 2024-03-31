<div class="items-center border-t border-gray-200 rounded-b w-full">
    <div class="items-center border-t border-gray-200 rounded-b w-full">
        <form action="{{ route('comments.store', $post->id) }}" method="post">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input type="hidden" name="user_id" value="{{ $post->user->id }}">
            <textarea name="content" class="w-full rounded-md border border-gray-300 bg-gray-50 p-2" placeholder="Add a comment..." required></textarea>
            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-blue-900 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500 w-full">
                Submit
            </button>
        </form>
    </div>
    
</div>