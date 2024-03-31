<div>
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
        <div class="flex items-end justify-center max-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
          <!-- This element is to trick the browser into centering the modal contents. -->
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​


          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            {{-- start progress bar --}}
            @if (!empty($konten_reply))
                <div wire:loading wire:target="storeCommentPost({{ $post->id }})" class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" style="width: 100%">
                    </div>
                </div>
            @endif
            {{-- end progress bar --}}
            <form>
                <div class="bg-white px-2 pt-2 sm:p-6">
                    {{-- start posting end comments --}}
                    <div class="items-center justify-end p-1 shadow-sm sm:flex">
                        <button
                                wire:click="closeModalCommentReply()"
                                type="button"
                                class="text-medium font-bold text-gray-700 sm:order-last sm:mb-0">x</button>
                    </div>
                    <ol class="relative mt-3 border-s border-gray-200 dark:border-gray-700">
                        <li class="mb-3 ms-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img class="rounded-full shadow-lg" src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Thomas Lean image"/>
                            </span>
                            <div class="items-start justify-between bg-white shadow-sm sm:flex">
                                <p class="mb-3 text-sm font-normal text-gray-500 lex dark:text-gray-600">
                                    {{ auth()->user()->name }} .
                                    {{ \Carbon\Carbon::parse($created_at)->translatedFormat('j M') }}
                                </p>
                            </div>
                            <div class="p-1 text-xs font-normal rounded-lg bg-white text-gray-500">
                                {{ $konten }}?{{ $konten_post }}

                                {{-- postingan pertama --}}
                                <div class="mt-2 p-3 text-xs font-medium text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:border-gray-500 dark:text-gray-300">
                                    <div class="items-center mb-3 sm:flex">
                                        @php
                                            foreach ($comment as $item) {
                                                $post = $item->post;
                                                $itemPostKeterangan = $item->post->keterangan;
                                                $itemPostCreatedAt = $item->post->created_at;
                                                $userPost = $item->post->user->name;
                                            }
                                        @endphp
                                    <time class="mb-1 text-xs space-x-1 font-normal text-gray-400 sm:order-last sm:mb-0">
                                        {{ \Carbon\Carbon::parse($itemPostCreatedAt)->translatedFormat('j M') }}
                                    </time>
                                    <div class="text-sm mx-2 font-normal text-gray-500">
                                        {{ $userPost }}
                                    </div>
                                </div>
                                <div class="px-2.5 mb-2">
                                    <div class="text-sm mx-2 font-semibold text-gray-500 lex">
                                        <a href="{{ route('dashboard') }}" class="font-normal">
                                            {{ $itemPostKeterangan }}
                                        </a>
                                    </div>
                                    <p class="text-sm font-medium">
                                    </p>
                                </div>
                                </div>
                                {{-- end postingan pertama --}}
                            </div>
                        </li>
                        <li class="ms-6 mb-3">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <img class="rounded-full shadow-lg" src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Thomas Lean image"/>
                            </span>
                            {{-- start comment-reply --}}
                                <textarea
                                    id="konten_reply"
                                    rows="4"
                                    wire:model="konten_reply"
                                    wire:model.live="konten_reply"
                                    class="block p-2.5 w-full text-sm text-gray-700 rounded-lg border border-gray-600 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Tambahkan Postingan lainnya">
                                </textarea>
                                @error('konten_reply') <span class="text-red-500">{{ $message }}</span>@enderror
                                <input id="id_comment"value="{{ $item['id'] }}" type="hidden">

                            {{-- end comment-reply --}}
                        </li>
                    </ol>
                    {{-- end posting end comments --}}
                </div>
                @if (!empty($konten_reply))
                    <div
                        wire:loading
                        wire:target="storeCommentPost({{ $post->id }})"
                        class="bg-gray-50 px-2 py-2 sm:flex sm:flex-row-reverse">
                        <span class="text-green-600">Sending...</span>
                    </div>
                @endif
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button
                                    wire:loading.attr="disable"
                                    wire:loading.class="bg-green-400"
                                    wire:click="storeReplyComment({{ $post['id'] }})"
                                    type="button"
                                    class="inline-flex bg-blue-600 justify-center w-full rounded-md border border-transparent
                                    px-4 py-2  text-base leading-6 font-medium text-white shadow-sm
                                    focus:outline-none focus:border-blue-700 focus:shadow-outline-blue
                                    transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                Posting
                            </button>
                        </span>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>
<script>
    document.addEventListener('livewire:load', function () {
        const messageTextarea = document.querySelector('[x-ref="message"]');
        @this.focusTextarea && messageTextarea.focus();
    });

</script>

