@extends('layouts.master')


@section('last_sec')
<div class="last_bottom">
    <div class="row">

        <form action="">

            <label for="product_name">Product Name</label>
            <input type="text" name="product_name">
            <label for="product_price">Product Price</label>
            <input type="text" name="product_price">
            <input type="submit">
        </form>

    </div>
</div>
@endsection

@push('bottom')

    <link rel="stylesheet" href="{{ 'css/bottom.css' }}">

@endpush

