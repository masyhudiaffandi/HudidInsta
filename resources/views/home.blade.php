<x-app-layout>
    <x-home.main pageTitle="Latest Post">
        @if (isset($posts) && $posts->count() > 0)
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        @else
            <div class="post-not-found flex items-center justify-center h-96">
                <p class="text-center">Tidak ada post yang ditemukan.</p>
            </div>
        @endif
    </x-home.main>
</x-app-layout>
