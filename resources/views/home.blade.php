<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
    @foreach($products as $product)
        <div>
            @verbatim
            <div>{{ JSON.stringify($product) }}</div>
            @endverbatim
        </div>
    @endforeach
</body>
</html>
