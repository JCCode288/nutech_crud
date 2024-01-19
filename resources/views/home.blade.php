<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
    <main>
        @foreach($products as $product)
        <div>
            <div>
                <div>name</div>
                <div>{{ $product->name }}</div>
            </div>
            <div>
                <div>stock</div>
                <div>{{ $product->stock }}</div>
            </div>
            <div>
                <div>base price</div>
                <div>{{ $product->product_price }}</div>
            </div>
            <div>
                <div>selling price</div>
                <div>{{ $product->selling_price }}</div>
            </div>
            <div>
                <div>image</div>
                @if(is_null($product->image_path))
                <div>No Image</div>
                @else
                <div>{{ $product->image_path }}</div>
                @endif
            </div>
            <div>
                <div>uploader</div>
                <div>{{ $product->uploader->name}}</div>
            </div>
            <div>
                <div>category</div>
                <div>{{ $product->category->name }}</div>
            </div>
        </div>
        @endforeach
    </main>
</body>
</html>
