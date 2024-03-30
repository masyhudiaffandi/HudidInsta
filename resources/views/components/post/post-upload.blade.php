<button id="openModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  <i class="fa-solid fa-upload" style="color: #ffffff;"></i>
</button>
 
<div id="myModal" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center hidden z-50">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto transform transition-all duration-300 scale-0">
    @if(@isset(Auth::user()->id))
      <div class="upload-form">
          <div class="max-w-xl mx-auto sm:px-2 glass">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 md:p-6 text-gray-900 ">
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
                          <div class="flex justify-between mt-4">
                            <x-primary-button class="bg-green-500 hover:bg-green-700">Upload</x-primary-button>
                            <button id="cancelModal" type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    @else
      <div class="error-not-logged-in p-4 flex justify-between">
        <div class="error-message flex space-x-2 justify-center items-center">
          <p class="text-center">Anda belum login!</p>
          <a href="/login" class="text-blue-500">login sekarang?</a>
        </div>
        <div class="flex justify-between">
          <button id="cancelModal" type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">X</button>
        </div>
      </div>
      
    @endif
  </div>
</div>

<script>
 const openModal = document.getElementById('openModal');
 const modal = document.getElementById('myModal');
 const closeModal = document.getElementById('cancelModal');
 const modalOverlay = document.querySelector('.modal-overlay');
 const modalContainer = document.querySelector('.modal-container');

 openModal.addEventListener('click', function () {
   modal.classList.remove('hidden');
   modalContainer.classList.add('scale-100');
 });

 closeModal.addEventListener('click', function () {
   closeModalFunction();
 });

 modalOverlay.addEventListener('click', function (e) {
   if (e.target === modalOverlay) {
     closeModalFunction();
   }
 });

 document.addEventListener('keydown', function (e) {
   if (e.key === 'Escape') {
     closeModalFunction();
   }
 });

 function closeModalFunction() {
   modalContainer.classList.remove('scale-100');
   modal.classList.add('hidden');
 }
</script>
