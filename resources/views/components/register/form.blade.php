<section class="w-screen h-screen p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h1 class="text-2xl text-gray-800 dark:text-gray-200 p-4 font-semibold hidden sm:inline-block">Register Page
    </h1>
    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">
            <h3 class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Welcome!</h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Create account</p>

            <form method="post" action='/register'>
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2 w-fit h-fit">
                    <div>
                        <input id="email" type="email" name="email"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-50 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            placeholder="Email Address" />
                        @error('email')
                            <x-exception.text :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <input id="name" type="name" name="name"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-50 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            placeholder="Name" />
                        @error('name')
                            <x-exception.text :message="$message" />
                        @enderror
                    </div>

                    <div>
                        <input id="password" type="password"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-50 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                            name="password" placeholder="Password" />
                        @error('password')
                            <x-exception.text :message="$message" />
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button
                        class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                        type="submit">Register</button>
                </div>


            </form>
        </div>

        <div class="flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
            <span class="text-sm text-gray-600 dark:text-gray-200">Already have an account?</span>

            <a href="/login" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:underline">Login
                Here</a>
        </div>
    </div>
</section>
