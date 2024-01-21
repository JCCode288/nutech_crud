<aside
    class="flex sticky flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">

    <div class="flex flex-col justify-between flex-1 mt-6">
        <x-sidebar.nav />
        @auth
            <a href="#" class="flex relative flex-col items-start mx-1">
                <small class="mx-2 font-medium text-gray-800 dark:text-gray-300">Logged User</small>
                <span class="mx-2 font-medium text-gray-800 dark:text-gray-200">{{ auth()->user()->name }}</span>
            </a>
        @endauth
    </div>
</aside>
