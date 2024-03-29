@if (isset($posts) && $posts->count() > 0)
@foreach ($posts as $post)
<div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <img src="{{ asset('storage/'.$post->image) }}" width="40%">
            </div>
        </div>
    </div>
</div>
@endforeach
@else
    <p>Tidak ada post yang ditemukan.</p>
@endif