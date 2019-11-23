@extends('layouts.master')

@section('title', 'Show Post')

@section('content')

    <h2>{{ $post->name }}</h2>
    <hr>
    <p>{{ $post->details }}</p>


    @endsection
