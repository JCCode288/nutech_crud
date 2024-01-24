<section class="container px-4 mx-auto h-screen overflow-x-hidden w-full">
    <div class="sm:flex sm:items-center sm:justify-between">
        <h2 class="text-lg font-medium text-gray-800 dark:text-white">Product List</h2>
        <form class="relative mt-6" action="/" method="get">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>

            <input type="text" name="search"
                class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-red-400 dark:focus:border-red-300 focus:ring-red-300 focus:ring-opacity-40 focus:outline-none focus:ring"
                placeholder="Search" />
        </form>

        <div class="flex items-center mt-4 gap-x-3">
            <button id="excel-download"
                onclick="exportToExcel('{{ json_encode($dataArr, null, 3) }}', '{{ csrf_token() }}')"
                class="w-1/2 px-5 py-2 text-sm text-gray-200 transition-colors duration-200 bg-green-900 border rounded-lg sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-green-800 dark:text-white dark:border-gray-700 flex">
                <span><img class="h-5 w-5 bg-cover" src="{{ @asset('/storage/excel.png') }}" /></span> Download Table
            </button>
            <a href="/product/create">
                <button
                    class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-[#F13B2F] rounded-lg sm:w-auto gap-x-2 hover:bg-red-600 dark:hover:bg-[#F13B2F] dark:bg-red-600">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3098_154395)">
                            <path
                                d="M13.3333 13.3332L9.99997 9.9999M9.99997 9.9999L6.66663 13.3332M9.99997 9.9999V17.4999M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94616 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.4999H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832"
                                stroke="currentColor" stroke-width="1.67" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_3098_154395">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Add Product</span>
                </button>
            </a>
        </div>
    </div>

    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden w-full border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">
                                        <span>No.</span>
                                    </div>
                                </th>

                                <th scope="col"
                                    class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Product Name
                                </th>
                                <th scope="col"
                                    class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Stock
                                </th>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Product Base Price
                                </th>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Product Selling Price
                                </th>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Product Image
                                </th>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Uploaded by
                                </th>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Product Category
                                </th>


                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Edit</span>
                                </th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            @foreach ($dataArr as $product)
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="font-normal text-gray-800 dark:text-white ">
                                                        {{ $loop->index + 1 }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="px-12 py-4 text-sm font-normal text-gray-800 dark:text-white whitespace-nowrap">
                                        {{ $product->name }}
                                    </td>
                                    <td
                                        class="px-12 py-4 text-sm font-normal text-gray-800 dark:text-white whitespace-nowrap">
                                        {{ $product->stock }}
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        {{ $product->product_price }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        {{ $product->selling_price }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        @if ($product->image_path)
                                            <div class="w-16 h-16 overflow-hidden">
                                                <img class="w-full h-full object-cover"
                                                    src="{{ @asset('storage/' . $product->image_path) }}"
                                                    title="{{ $product->name . '_image' }}"
                                                    alt="{{ $product->name }}" />
                                            </div>
                                        @else
                                            <div class="w-16 h-16 overflow-hidden">
                                                <img class="w-full h-full object-cover"
                                                    src="{{ @asset('/storage/default_img.png') }}"
                                                    title="{{ $product->name . '_image' }}"
                                                    alt="{{ $product->name }}" />
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        {{ $product->uploader->name }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        {{ $product->category->name }}</td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <a href="{{ '/product/edit/' . $product->id }}">
                                            <button
                                                class="p-2 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100 hover:text-gray-600">
                                                <img src="{{ asset('storage/edit.png') }}" title="edit-btn"
                                                    alt="edit-btn" />
                                                <span class="">Edit</span>
                                            </button>
                                        </a>
                                    </td>
                                    <td class="flex p-4 text-sm whitespace-nowrap">
                                        <a>
                                            <button
                                                class="p-2 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-red-700 my-auto"
                                                onclick="deleteProduct('{{ $product->id }}', '{{ $product->name }}',
                                                '{{ csrf_token() }}')">
                                                <img src="{{ asset('storage/delete.png') }}" title="edit-btn"
                                                    alt="edit-btn" class="mr-1">
                                                <span class="">Del</span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            <div class="flex items-center justify-between mt-6">
                                @if ($prevPage)
                                    <a href="{{ $prevPage }}"
                                        class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 rtl:-scale-x-100">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                        </svg>

                                        <span>
                                            Previous
                                        </span>
                                    </a>
                                @endif

                                <x-main.filter :categories="$categories" />

                                @if ($nextPage)
                                    <a href="{{ $nextPage }}"
                                        class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                        <span>
                                            Next
                                        </span>

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 rtl:-scale-x-100">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
</section>
