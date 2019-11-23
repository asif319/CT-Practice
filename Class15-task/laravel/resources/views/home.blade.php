@extends('layouts.master')

@section('title', 'Home')


@section('last_sec')

    @forelse($post as $posts)
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">{{ $posts->name }}</h2>
                    <p class="card-text">{{ $posts->details }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('user.show.post', $posts->id) }}" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
    </div>

    @empty
    Nothing to show
    @endforelse

    @endsection
