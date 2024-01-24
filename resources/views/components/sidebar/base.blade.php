<aside
    class="flex sticky flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-[#F13B2F] border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">

    <div class="flex flex-col justify-between flex-1 mt-6">
        <div class="flex w-full text-gray-100 text-lg font-semibold justify-center gap-2 align-center">
            <img class="antialiased" src="{{ @asset('/storage/handbag.png') }}" />
            <h2>SIMS Web App</h2>
        </div>
        <hr class="my-4 border-gray-200 dark:border-gray-600" />
        <x-sidebar.nav />
        @auth
            <a href="#" class="flex relative flex-col items-start mx-1 antialiased">
                <small class="mx-2 font-medium text-gray-200">Logged User</small>
                <span class="mx-2 font-medium text-gray-200">{{ auth()->user()->name }}</span>
            </a>
        @endauth
    </div>
</aside>
