<form class="flex items-center gap-2">
    <div>

        <select
            class="mt-2 w-fit placeholder-gray-400/70 dark:placeholder-gray-500 rounded-lg border border-gray-200 bg-white px-5 py-1 text-gray-700 focus:border-green-800 focus:outline-none focus:ring focus:ring-green-800 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-green-800"
            name="category_id">
            <option
                class="flex disabled border-gray-200 bg-white px-5 py-1 text-gray-700 focus:border-green-800 focus:outline-none focus:ring  focus:ring-green-800 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:focus:border-green-800"
                disabled selected>
                select category
            </option>
            @foreach ($categories as $category)
                <option
                    class="border-gray-200 bg-white px-5 py-1 text-gray-700 focus:border-green-800 focus:outline-none focus:ring  focus:ring-green-800 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:focus:border-green-800"
                    value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <button
            class="px-6 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform dark:bg-red-700 bg-[#F13B2F] rounded-lg hover:bg-red-600 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-80">
            Filter
        </button>
    </div>
</form>
