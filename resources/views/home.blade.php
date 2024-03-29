<x-app-layout>
    <div class="home-page">
        @include('components.post.post-upload')

        <div class="title">
            <h1 class="text-center">Latest Post</h1>
        </div>
        <div class="content space-y-6">
            @include('components.post.post-card')
        </div>
    </div>
</x-app-layout>
