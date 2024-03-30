<div class="feedback-like space-y-2">
    <form action="{{ $likeRoute }}" method="POST">
        @csrf
        <button type="submit" class="focus:outline-none">
            @if ($isLiked)
                <i class="fa-solid fa-heart fa-xl text-red-500" style="color: red"></i>
            @else
                <i class="fa-regular fa-heart fa-xl text-black"></i>
            @endif
        </button>
    </form>
</div>
