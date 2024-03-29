<div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="user_id" value="{{ Auth::user()->id }}" class="hidden">
                    <input type="file" name="image">
                    <input type="text" name="caption">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>