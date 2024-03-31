<div>
    <div>
        @if ($modal_comment_reply)
            @include('livewire.pages.comments._modalReplyComment')
        @endif

        @if ($modal_reply_comment_to_reply)
            @include('livewire.pages.comments._modalReplyCommentToReply')
        @endif

    </div>
    <div class="px-2">
        @forelse ($listComment as $comment)
            @if ($comment->user_id == auth()->user()->id)
                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    <li class="mb-10 mr-2 ms-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <img class="rounded-full shadow-lg" src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Thomas Lean image"/>
                        </span>
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                            <div class="items-center mb-3 sm:flex">
                                <time class="mb-1 text-xs space-x-1 font-normal text-gray-400 sm:order-last sm:mb-0">
                                    {{ \Carbon\Carbon::parse($comment->post->created_at)->translatedFormat('j M') }}
                                </time>
                                <div class="text-sm mx-2 font-semibold text-gray-500 lex dark:text-gray-300">
                                    {{ auth()->user()->name }}
                                </div>
                            </div>
                            <div class="px-2.5 mb-2">
                                {{ $comment->konten }}
                            </div>

                            {{-- postingan user pertama --}}
                            <div class="p-3 text-xs font-medium text-gray-500 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">
                                <div class="items-center mb-3 sm:flex">
                                <time class="mb-1 text-xs space-x-1 font-normal text-gray-400 sm:order-last sm:mb-0">
                                    {{ \Carbon\Carbon::parse($comment->post->created_at)->translatedFormat('j M') }}
                                </time>
                                <div class="text-sm mx-2 font-normal text-gray-500 lex dark:text-gray-300">
                                    {{ $comment->post->user->name }}
                                </div>
                            </div>
                            <div class="px-2.5 mb-2">
                                <div class="text-sm mx-2 font-semibold text-gray-500 lex dark:text-gray-300">
                                    <a href="{{ route('dashboard') }}" class="font-normal hover:font-bold">
                                        {{ $comment->post->keterangan }}
                                    </a>
                                </div>
                                <p class="text-sm font-medium">
                                </p>
                            </div>
                            </div>
                            {{-- end postingan user pertama --}}

                            {{-- tombol comment dan like --}}
                            <div class="mt-2 space-x-4 flex flex-row items-start self-end">
                                <div class="flex flex-row space-x-1 p-2">
                                    <button wire:click="openModalToReplyComment({{$comment->post->id}})"
                                            type="button" class="text-blue-700 hover:red-700 hover:text-white font-medium text-xs rounded-lg p-2 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-blue-400 dark:hover:ring-blue-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="blue"  viewBox="0 0 50 50" width="16px" height="16px"><path d="M 25 4.0625 C 12.414063 4.0625 2.0625 12.925781 2.0625 24 C 2.0625 30.425781 5.625 36.09375 11 39.71875 C 10.992188 39.933594 11 40.265625 10.71875 41.3125 C 10.371094 42.605469 9.683594 44.4375 8.25 46.46875 L 7.21875 47.90625 L 9 47.9375 C 15.175781 47.964844 18.753906 43.90625 19.3125 43.25 C 21.136719 43.65625 23.035156 43.9375 25 43.9375 C 37.582031 43.9375 47.9375 35.074219 47.9375 24 C 47.9375 12.925781 37.582031 4.0625 25 4.0625 Z M 25 5.9375 C 36.714844 5.9375 46.0625 14.089844 46.0625 24 C 46.0625 33.910156 36.714844 42.0625 25 42.0625 C 22.996094 42.0625 21.050781 41.820313 19.21875 41.375 L 18.65625 41.25 L 18.28125 41.71875 C 18.28125 41.71875 15.390625 44.976563 10.78125 45.75 C 11.613281 44.257813 12.246094 42.871094 12.53125 41.8125 C 12.929688 40.332031 12.9375 39.3125 12.9375 39.3125 L 12.9375 38.8125 L 12.5 38.53125 C 7.273438 35.21875 3.9375 29.941406 3.9375 24 C 3.9375 14.089844 13.28125 5.9375 25 5.9375 Z"/>
                                            <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                    <label class="text-base item-center self-center">
                                        {{ count($comment->replies) }}
                                    {{-- 0 --}}
                                    </label>
                                </div>
                                <div class="flex flex-row space-x-1 p-2">
                                    <button
                                            wire:click="closeModalCommentReply()"
                                            type="button" class="text-blue-700 focus:outline-none focus:ring-blue-300 rounded-lg hover:red-700 hover:text-white font-medium text-xs p-2 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-blue-400">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 18 18">
                                        <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                        <label class="text-base item-center self-center">
                                            {{ count($comment->likeCommentReply) }}
                                        </label>
                                </div>
                            </div>
                            {{-- end tombol comment dan like --}}
                        </div>
                    </li>

                    {{-- if has comment reply --}}
                    @if (count($comment->replies) > 0 )
                        @php
                            foreach ($comment->replies as $reply) {
                                $item = $reply;
                            }
                            $user = \App\Models\User::where('id', $reply->user_id)->first();
                        @endphp
                            <li class="mb-10 mr-2 ms-6">
                                <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                    <img class="rounded-full shadow-lg" src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Thomas Lean image"/>
                                </span>
                                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                                    <div class="items-center mb-3 sm:flex">
                                        <time class="mb-1 text-xs space-x-1 font-normal text-gray-400 sm:order-last sm:mb-0">
                                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('j M') }}
                                        </time>
                                        <div class="text-sm mx-2 font-semibold text-gray-500 lex dark:text-gray-300">
                                            {{ $user->name }}                                        
                                        </div>
                                    </div>
                                    
                                    <div class="px-2.5 mb-2"> {{ $item->konten_reply }} </div>

                                    {{-- tombol comment dan like --}}
                                    <div class="mt-2 space-x-4 flex flex-row items-start self-end">
                                        <div class="flex flex-row space-x-1 p-2">
                                            <button wire:click="openModalReplyComment({{ $reply->id }} )"
                                                    type="button" class="text-blue-700 hover:red-700 hover:text-white font-medium text-xs rounded-lg p-2 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-blue-400 dark:hover:ring-blue-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="blue"  viewBox="0 0 50 50" width="16px" height="16px"><path d="M 25 4.0625 C 12.414063 4.0625 2.0625 12.925781 2.0625 24 C 2.0625 30.425781 5.625 36.09375 11 39.71875 C 10.992188 39.933594 11 40.265625 10.71875 41.3125 C 10.371094 42.605469 9.683594 44.4375 8.25 46.46875 L 7.21875 47.90625 L 9 47.9375 C 15.175781 47.964844 18.753906 43.90625 19.3125 43.25 C 21.136719 43.65625 23.035156 43.9375 25 43.9375 C 37.582031 43.9375 47.9375 35.074219 47.9375 24 C 47.9375 12.925781 37.582031 4.0625 25 4.0625 Z M 25 5.9375 C 36.714844 5.9375 46.0625 14.089844 46.0625 24 C 46.0625 33.910156 36.714844 42.0625 25 42.0625 C 22.996094 42.0625 21.050781 41.820313 19.21875 41.375 L 18.65625 41.25 L 18.28125 41.71875 C 18.28125 41.71875 15.390625 44.976563 10.78125 45.75 C 11.613281 44.257813 12.246094 42.871094 12.53125 41.8125 C 12.929688 40.332031 12.9375 39.3125 12.9375 39.3125 L 12.9375 38.8125 L 12.5 38.53125 C 7.273438 35.21875 3.9375 29.941406 3.9375 24 C 3.9375 14.089844 13.28125 5.9375 25 5.9375 Z"/>
                                                    <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                                </svg>
                                                <span class="sr-only">Icon description</span>
                                            </button>
                                            <label class="text-base item-center self-center">
                                                {{ count($comment->replies) }}
                                            {{-- 0 --}}
                                            </label>
                                        </div>
                                        <div class="flex flex-row space-x-1 p-2">
                                            <button
                                                    wire:click="closeModalCommentReply()"
                                                    type="button" class="text-blue-700 focus:outline-none focus:ring-blue-300 rounded-lg hover:red-700 hover:text-white font-medium text-xs p-2 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-blue-400">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 18 18">
                                                <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                                </svg>
                                                <span class="sr-only">Icon description</span>
                                            </button>
                                                <label class="text-base item-center self-center">
                                                    {{ count($comment->likeCommentReply) }}
                                                </label>
                                        </div>
                                    </div>
                                    {{-- end tombol comment dan like --}}
                                </div>
                            </li>
                    @endif
                    {{-- end if comment reply --}}
                </ol>
            @endif
        @empty
            <p>Tidak ada Komentar / Balasan..</p>
        @endforelse
    </div>
</div>
