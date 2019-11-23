@extends('layouts.master')

@section('title', 'Register')

@section('navbar')
    @include('partials.nav_login')
@endsection

@section('image')

    <br>
    <br>
    <h2>User</h2>
    <div class="row align-items-center my-5">
        <div class="form-group">

            @if(session('regSuc'))
                {{ session('regSuc') }}
            @endif
            @include('error.error')

            <form action="{{ route('user.login') }}" method="POST">
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



@endsection


