@extends('layouts.master')

@section('title', 'Register')

@section('navbar')
    @include('partials.nav_login')
@endsection

@section('image')


    <div class="row align-items-center my-5">
        <div class="form-group">

            @include('error.error')

            <form action="{{ route('user.register') }}" method="POST">
                {{ csrf_field() }}

                Name: <br>
                <input type="text" name="name" value="{{ old('name') }}">

                <br>

                Email: <br>
                <input type="email" name="email" value="{{ old('email') }}">
                <br>

                Password: <br>
                <input type="password" name="password">
                <br>

                Confirm Password: <br>
                <input type="password" name="password_confirmation">
                <br>


                <br>
                <input type="submit" name="submit" value="Register">


            </form>
        </div>
    </div>






@endsection

@section('mid_sec')



@endsection

@section('last_sec')



@endsection

