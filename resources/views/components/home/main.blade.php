<!-- resources/views/components/home/main-content.blade.php -->
<div class="home-page mt-16 py-6 md:px-2 px-6 max-w-md mx-auto sm:px-6 lg:px-8 ">
    @include('components.home.header', [
        'pageTitle' => $pageTitle,
    ])

    <div class="content space-y-6">
        {{ $slot }}
    </div>
</div>
