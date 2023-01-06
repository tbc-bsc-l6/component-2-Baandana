@extends('layouts.app-new')
@section('content')
    <h2> Full list of Cds</h2>

    @foreach ($products->chunk(4) as $chunk)
        <div class="grid grid-cols-4">
            @foreach ($chunk as $product)
                @include('product', ['product' => $product])
            @endforeach
        </div>
    @endforeach
@endsection
