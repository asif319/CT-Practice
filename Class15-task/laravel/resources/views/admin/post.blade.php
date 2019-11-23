@extends('layouts.admin_master')

@section('content')

    @include('error.error')

    <form action="{{ route('admin.post') }}" method="POST">
        {{ csrf_field() }}



        Name: <br>
        <input type="text" name="name">

        <br>

        Details: <br>
        <textarea name="details" cols="30" rows="10"></textarea>
        <br>

        <br>
        <input type="submit" name="submit" value="Post">


    </form>

    @endsection
