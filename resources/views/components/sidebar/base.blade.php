<aside
    class="flex sticky flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">

    <div class="flex flex-col justify-between flex-1 mt-6">
        <form class="relative mt-6" action="/" method="get">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>

            <input type="text" name="search"
                class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                placeholder="Search" />
        </form>

        <x-sidebar.nav />
        @auth
            <a href="#" class="flex relative flex-col items-start mx-1">
                <small class="mx-2 font-medium text-gray-800 dark:text-gray-300">Logged User</small>
                <span class="mx-2 font-medium text-gray-800 dark:text-gray-200">{{ auth()->user()->name }}</span>
            </a>
        @endauth
    </div>
</aside>
