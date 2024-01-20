<div>
    <div>
    @foreach($dataArr as $data)
        <div class='flex'>
            {{json_encode($data)}}
        </div>
    @endforeach
    </div>
</div>
