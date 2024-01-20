<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Login</h2>

    <form method="post" action='/login'>
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2 w-fit h-fit">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="email">Email Address</label>
                <input id="email" type="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                @error('email')
                    <x-exception.text :message="$message" />
                @enderror
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="password">Password</label>
                <input id="password" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" name="password">
                @error('password')
                    <x-exception.text :message="$message" />
                @enderror
            </div>
        </div>

        <a class="text-gray-700 dark:text-gray-200" href="/register">doesn't have an account? register here.</a>

        <div class="flex justify-end mt-6">
            <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" type="submit">Login</button>
        </div>
    </form>

</section>
