@if(@isset(Auth::user()->id))
<div class="upload-form pt-6">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8 glass">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 ">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input 
                            type="text" 
                            name="user_id" 
                            value="{{ Auth::user()->id }}" 
                            class="hidden"
                        >
                    <input type="file" name="image">
                    <div class="mt-4">
                        <x-input-label for="Caption" :value="__('Caption')" />
                        <x-text-input id="caption" name="caption" class="block mt-1 w-full" type="text" required />
                        <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                    </div>
                    <x-primary-button class="mt-4">Upload</x-primary-button>
                </form>
            </div>
        </div>
    </div>
@else
    <p class="text-center">Anda belum login</p>
@endif