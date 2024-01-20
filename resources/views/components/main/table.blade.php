<div>
    <div>
    @foreach($products as $product)
        <div class='flex'>
            {{json_encode($product)}}
        </div>
    @endforeach
    </div>
</div>
