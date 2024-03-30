<x-app-layout>
    <div class="home-page mt-6 md:px-2 px-6  max-w-md mx-auto sm:px-6 lg:px-8 ">
        <div class="title">
            <div class="header flex justify-between items-center">
                <h1 class="font-semibold text-2xl">Latest Post</h1>
                @include('components.post.post-upload')
            </div>
        </div>
        <div class="content space-y-6">
            @include('components.post.post-card')
        </div>
    </div>
</x-app-layout>
