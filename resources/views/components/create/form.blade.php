<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">{{ $title }}</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 gap-6 mt-4">
            @if ($product)
                <input id="id" type="hidden" name="id" value="{{ $product->id }}" />
                @error('id')
                    <small class='text-red-500'>{{ $mesasge }}</small>
                @enderror
                @session('errorNotFound')
                    <small class='text-red-500'>{{ session('errorNotFound') }}</small>
                @endsession
            @endif
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ $product ? $product->name : null }}"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                @error('name')
                    <small class='text-red-500'>{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="stock">Stock</label>
                <input id="stock" name="stock" type="text" value="{{ $product ? $product->stock : null }}"
                    class="appearance-none block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                @error('stock')
                    <small class='text-red-500'>{{ $message }}</small>
                @enderror

            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="product_price">Product Price</label>
                <input id="product_price" name="product_price" type="text"
                    value="{{ $product ? $product->product_price : null }}"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
                @error('product_price')
                    <small class='text-red-500'>{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="category_id">Category</label>
                <select id="category_id" name="category_id" type="select"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    <option disabled selected default>Select Your Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $product && $category->id === $product->category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <small class='text-red-500'>Category must be valid.</small>
                @enderror
            </div>
        </div>
        <br />
        <div>
            <label class="text-gray-700 dark:text-gray-200" for="uploadImg">Upload File<span
                    class="font-bold dark:text-white text-gray-800">*</span></label>
            <input id="uploadImg" type="file" name="image" accept="image/png, image/jpeg, image/jpg"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" />
            <small class='font-bold dark:text-white text-gray-800'>
                *image must be in format jpg, jpeg, png or webp. max 100 kb.
            </small>
            @error('image')
                <small class='text-red-500'>{{ $message }}</small>
            @enderror
        </div>

        </div>

        <div class="flex justify-end mt-6">
            <button
                class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>
