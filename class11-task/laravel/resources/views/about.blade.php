
@extends('layouts.master')

@section('title', 'About')

@section('image')
    <div class="bottom">
    <div class="row align-items-center my-5">

        <!-- /.col-lg-8 -->

            <form action="">

                <label for="contact">Contact</label>
                <input type="text" name="contact">
                <label for="address">Address</label>
                <input type="text" name="address">
                <input type="submit">
            </form>

        <!-- /.col-md-4 -->
    </div>

    </div>

@endsection

@push('bottom')

    <link rel="stylesheet" href="{{ 'css/bottom.css' }}">

    @endpush

