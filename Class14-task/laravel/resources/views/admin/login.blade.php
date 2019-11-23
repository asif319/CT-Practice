@extends('layouts.master')

@section('title', 'Admin')

@section('navbar')
    @include('partials.header')
@endsection

@section('image')


    <br>
    <br>
<h2>Admin</h2>
    <div class="row align-items-center my-5">
        <div class="form-group">
            @include('error.error')
            @if(session('logFail'))
                {{ session('logFail') }}
            @endif
            <form action="{{ route('admin.login') }}" method="POST">
                {{ csrf_field() }}



                Name: <br>
                <input type="text" name="name">

                <br>

                Password: <br>
                <input type="password" name="password">
                <br>

                <br>
                <input type="submit" name="submit" value="Login">


            </form>
        </div>
    </div>






@endsection

@section('mid_sec')



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
