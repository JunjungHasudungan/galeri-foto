<div>
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
        <div class="flex items-end justify-center max-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
          <!-- This element is to trick the browser into centering the modal contents. -->
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <ol class="relative border-s border-gray-200 dark:border-gray-700">                  
                        <li class="mb-10 ms-6">            
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img class="rounded-full shadow-lg" src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Thomas Lean image"/>
                            </span>
                            <div class="items-start bg-white shadow-sm sm:flex">
                                <p class="mb-3 text-sm font-normal text-gray-500 lex dark:text-gray-600">
                                    {{$author->name }} . {{ \Carbon\Carbon::parse($created_at)->translatedFormat('j M') }}
                                </p>
                            </div>
                            <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                                @php
                                    foreach($post as $item) {
                                        $isi_kontent = $item->keterangan;
                                    }
                                @endphp
                                <div class="text-sm font-normal text-gray-500 dark:text-gray-300">
                                    {{ $isi_kontent }} 
                                </div>
                            </div>
                        </li>
                        <li class="mb-10 ms-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img class="rounded-full shadow-lg" src="{{ asset('assets/media/avatars/300-4.jpg') }}" alt="Thomas Lean image"/>
                            </span>
                            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                                <div class="items-center justify-between mb-3 sm:flex">
                                    <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Membalas 
                                        <span class="font-semibold text-gray-900 dark:text-white hover:underline">  {{ $author->name }} </span>
                                    </div>
                                </div>
                                <textarea   
                                    id="message" 
                                    rows="4" 
                                    class="block p-2.5 w-full text-sm text-gray-700 rounded-lg border border-gray-600 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Postingn balasan anda...">
                                </textarea>
                            </div>
                        </li>
                    </ol>
                </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button
                                wire:click.prevent="storeCommentPost()"
                                type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent
                                px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm
                                hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green
                                transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Simpan
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModalCreate()"
                                type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2
                                bg-gray-600 text-base  text-white leading-6 font-medium text-whiteshadow-sm
                                hover:bg-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue
                                transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>
@push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        const messageTextarea = document.querySelector('[x-ref="message"]');
        @this.focusTextarea && messageTextarea.focus(); 
    });
</script>
@endpush