<section class="w-full h-full p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <form action="/login" method="post"
        class="flex max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-2xl dark:bg-gray-800 lg:max-w-4xl  border-opacity-[1%]">
        @csrf
        <div class="hidden bg-contain lg:block lg:w-1/2 bg-no-repeat"
            style="background-image: url('{{ asset('storage/login-img.png') }}');">
        </div>

        <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
            <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
                Welcome back!
            </p>



            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="email">Email
                    Address</label>
                <input id="email"
                    class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                    type="email" name="email" placeholder="Your Email" />
                @error('email')
                    <x-exception.text :message="$message" />
                @enderror
            </div>

            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                    for="email">Password</label>
                <input id="password"
                    class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                    type="password" name="password" placeholder="Your Password" />
                @error('password')
                    <x-exception.text :message="$message" />
                @enderror
            </div>

            <div class="mt-6">
                <button
                    class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                    type="submit">
                    Sign In
                </button>
            </div>
            <div class="w-full flex my-4">
                <span class="text-sm text-gray-600 dark:text-gray-200 mx-auto">Don't have an account? </span>
            </div>
            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                <a href="/register"
                    class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline hover:bg-none hover:text-blue-600 focus:text-blue-800">Register
                    Here</a>

                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
            </div>
        </div>
    </form>
</section>
