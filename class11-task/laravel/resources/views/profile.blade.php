@extends('layouts.master')

@section('title', 'About')

@section('image')
{{--    <div class="bottom">--}}
{{--        <div class="row align-items-center my-5">--}}



{{--        </div>--}}

{{--    </div>--}}
<br>
<h2>Get Method</h2>
<br>
    <form action="{{ url('profile/getData') }}" method="GET">

        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="text" name="email">
        <input type="submit">

    </form>
    <br>
<h2>Post Method</h2>
<br>
    <form action="{{ url('profile/postData') }}" method="POST">

        {{ csrf_field() }}

        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="text" name="email">
        <input type="submit">

    </form>
<br>
@endsection

@push('bottom')

    <link rel="stylesheet" href="{{ 'css/bottom.css' }}">

@endpush


