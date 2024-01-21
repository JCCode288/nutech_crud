<form class="flex items-center gap-2 max-w-screen-2xl">
    <div>

        <select
            class="mt-2 w-fit placeholder-gray-400/70 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
            name="category_id">
            <option
                class="flex disabled border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring  focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:focus:border-blue-300"
                disabled selected>
                select category
            </option>
            @foreach ($categories as $category)
                <option
                    class="border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring  focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:focus:border-blue-300"
                    value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <button
            class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform dark:bg-gray-900 bg-gray-200 rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-80">
            Filter
        </button>
    </div>
</form>
