@extends('layouts.master')

@section('title', 'Home')

@section('image')
{{--    <br>--}}
{{--    <h2>--}}
{{--        My Name is: {{ $firstName }} {{ $lastName }}--}}
{{--    </h2>--}}
{{--    <br>--}}
{{--    {!! $withTag !!}--}}
{{--    <br>--}}
{{--Api: {{ $api }}--}}
{{--    <br>--}}
{{--    @foreach($heroNames as $heroname)--}}
{{--        {{ $heroname }}--}}
{{--        @endforeach--}}

    <div class="row align-items-center my-5">
        <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-5">
            <h1 class="font-weight-light">Business Name or Tagline</h1>
            <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
            <a class="btn btn-primary" href="#">Call to Action!</a>
        </div>
        <!-- /.col-md-4 -->
    </div>
<b>Get</b>

    <form action="{{ url('payment/get') }}" method="GET">

        <label for="total_cost">Total Cost</label>
        <input type="text" name="total_cost">
        <label for="total_profit">Total profit</label>
        <input type="text" name="total_profit">
        <input type="submit">


    </form>

    <b>post</b>

<form action="{{ url('payment/post') }}" method="GET">
    {{ csrf_field() }}

    <label for="total_cost">Total Cost</label>
    <input type="text" name="total_cost">
    <label for="total_profit">Total profit</label>
    <input type="text" name="total_profit">
    <input type="submit">


</form>

    @endsection

@section('mid_sec')

    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
        </div>
    </div>

    @endsection

@section('last_sec')

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card One</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Two</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Three</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->

    </div>

    @endsection
