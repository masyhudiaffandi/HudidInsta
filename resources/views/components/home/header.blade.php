<!-- resources/views/components/home/header-with-title.blade.php -->
<div class="title">
    <div class="header flex justify-between items-center">
        <div class="header-title bg-white py-2 px-5 rounded-md shadow-sm">
            <h1 class="text-md font-bold">{{ $pageTitle }}</h1>
        </div>
        @include('components.post.post-upload')
    </div>
</div>