@extends('layouts.master')

@section('title', 'Home')


@section('mid_sec')
<div class="mid_bottom">
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <form action="">

                <label for="shop_name">Shop Name</label>
                <input type="text" name="shop_name">
                <label for="shop_type">Shop Type</label>
                <input type="text" name="shop_type">
                <input type="submit">
            </form>
        </div>
    </div>
</div>
@endsection

@push('bottom')

    <link rel="stylesheet" href="{{ 'css/bottom.css' }}">

@endpush



