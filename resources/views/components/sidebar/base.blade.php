<aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">

    <div class="flex flex-col justify-between flex-1 mt-6">
        <x-sidebar.nav />

        @auth
        <a href="#" class="flex items-center px-4 -mx-2">
            <span class="mx-2 font-medium text-gray-800 dark:text-gray-200">John Doe</span>
        </a>
        @endauth
    </div>
</aside>