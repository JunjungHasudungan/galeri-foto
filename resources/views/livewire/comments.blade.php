<div>
    <div class="px-2">
        @forelse ($listComment as $comment)
            @if ($comment->user_id == auth()->user()->id)
                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    <li class="mb-10 mr-2">
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
                                <p class="text-sm font-medium"></p>
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
                        </div>
                    </li>
                </ol>
            @endif
        @empty
            <p>Tidak ada Komentar / Balasan..</p>
        @endforelse
    </div>
</div>
