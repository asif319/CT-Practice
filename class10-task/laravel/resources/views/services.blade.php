@extends('layouts.master')

@section('title', 'Home')


@section('mid_sec')
<div class="mid_bottom">
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
        </div>
    </div>
</div>
@endsection

@push('bottom')

    <link rel="stylesheet" href="{{ 'css/bottom.css' }}">

@endpush



