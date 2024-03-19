<div>
    @for ($i = 0; $i < 3; $i++)
        <div class="w-full p-4 mb-3 text-start bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-row">
                <img class="object-cover w-75 rounded-lg h-45 md:h-45 md:w-48" src="{{ asset('/assets/media/product/books/4.png')}}" alt="">
                <div class="px-2 w-full  flex-col">
                    <div class="space-y-4 mt-2">
                        <a href="#" class="mb-8 p-3">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-5 space-x-4 flex flex-row items-start self-end">
                <div class="flex flex-row space-x-4 p-2">
                    <button type="button" class="text-blue-700  hover:red-700 hover:text-white font-medium text-sm p-2.5 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-red-500">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                    <label class="text-base item-center self-center items-stretch">10</label>
                </div>
                <div class="flex flex-row space-x-4 p-2">
                    <button type="button" class="text-blue-700 focus:outline-none focus:ring-blue-300  hover:red-700 hover:text-white font-medium text-sm p-2.5 text-center inline-flex items-center  dark:text-blue-500 dark:hover:text-white  dark:hover:bg-red-500">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                    <label class="text-base item-center self-center items-stretch">1</label>
                </div>
            </div>
        </div>
    @endfor
</div>
