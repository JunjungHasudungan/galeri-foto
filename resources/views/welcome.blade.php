<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

            @php
                $listPost  = \App\Models\Post::with('user')->get();
                $index = 0;
            @endphp

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                </div>

                <div class="mt-8">
                    <div class=" gap-6 lg:gap-8 space-y-4">
                        @forelse ($listPost as $key => $post)
                            @continue($key == 1)
                                <a href="/login" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                    <div>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{ $post->user->name }} . {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('j M') }}
                                        </p>
        
                                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                            {{ $post->keterangan }}
                                        </p>
                                        <div class="mt-3 space-x-4 flex flex-row items-start self-end">
                                            <div class="flex flex-row space-x-1 p-2">
                                                <button   
                                                    wire:click="navigateToRoute('{{ route('login') }}')"
                                                    type="button" class="text-blue-700 hover:red-700 hover:text-white font-medium text-xs rounded-lg p-2 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-blue-400 dark:hover:ring-blue-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="blue"  viewBox="0 0 50 50" width="16px" height="16px"><path d="M 25 4.0625 C 12.414063 4.0625 2.0625 12.925781 2.0625 24 C 2.0625 30.425781 5.625 36.09375 11 39.71875 C 10.992188 39.933594 11 40.265625 10.71875 41.3125 C 10.371094 42.605469 9.683594 44.4375 8.25 46.46875 L 7.21875 47.90625 L 9 47.9375 C 15.175781 47.964844 18.753906 43.90625 19.3125 43.25 C 21.136719 43.65625 23.035156 43.9375 25 43.9375 C 37.582031 43.9375 47.9375 35.074219 47.9375 24 C 47.9375 12.925781 37.582031 4.0625 25 4.0625 Z M 25 5.9375 C 36.714844 5.9375 46.0625 14.089844 46.0625 24 C 46.0625 33.910156 36.714844 42.0625 25 42.0625 C 22.996094 42.0625 21.050781 41.820313 19.21875 41.375 L 18.65625 41.25 L 18.28125 41.71875 C 18.28125 41.71875 15.390625 44.976563 10.78125 45.75 C 11.613281 44.257813 12.246094 42.871094 12.53125 41.8125 C 12.929688 40.332031 12.9375 39.3125 12.9375 39.3125 L 12.9375 38.8125 L 12.5 38.53125 C 7.273438 35.21875 3.9375 29.941406 3.9375 24 C 3.9375 14.089844 13.28125 5.9375 25 5.9375 Z"/>
                                                        <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                                    </svg>
                                                    <span class="sr-only">Icon description</span>
                                                </button>
                                                <label class="text-base item-center self-center"> {{ count($post->comments) ?? 0 }} </label>
                                            </div>
                                            <div class="flex flex-row space-x-1 p-2">
                                                <button 
                                                    type="button" 
                                                    class="text-blue-700 focus:outline-none focus:ring-blue-300 rounded-lg hover:red-700 hover:text-white font-medium text-xs p-2 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-blue-400">
                                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="{{ count($post->likes ) > 0 ?  'red' :  'gray'}}" viewBox="0 0 18 18">
                                                    <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                                                    </svg>
                                                    <span class="sr-only">Icon description</span>
                                                </button>
                                                    <label class="text-base item-center self-center"> {{ count($post->likes) ?? 0}} </label>
                                                    <div wire:loading.delay.longest> 
                                                        <span class="text-white"></span>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @break($key == 10)
                        @empty
                            <a href="/" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div>
                                    <h2 class="mt-1 text-sm font-medium text-gray-900 dark:text-white">Data Post Belum ada..</h2>
                                </div>
                            </a>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
