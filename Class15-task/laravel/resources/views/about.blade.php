
@extends('layouts.master')

@section('title', 'About')

@section('navbar')
    @include('partials.header')
@endsection

@section('image')
    <div class="text-dark my-5 py-4 text-center" >

        <h2>{{ $post->name }}</h2>
        <br>
        <p>{{ $post->details }}</p>
        <hr style="border-width: 10px; border-color: black">

        @forelse($comment as $comments)
            <p><b>
                    @if($comments->user_id == null)
                        Admin

                        @else
                        {{ \App\User::find($comments->user_id)->name }}
                        @endif
                        : </b>{{ $comments->comment }}</p>
            @if(Auth::id() == $comments->user_id)
            <a href="?edit={{ $comments->id }}">Edit</a>
            @endif
            <hr>

        @empty
            Nothing to show
        @endforelse


        @if(isset($_GET['edit']))
            <form action="{{ route('user.comment.edit', [$_GET['edit'], $post->id]) }}" method="POST" >
                {{ csrf_field() }}

                <textarea name="comment" id="" cols="50" rows="5">{{ \App\Comment::find($_GET['edit'])->comment }}</textarea><br>
                <input type="submit" name="submit" value="Edit Comment">
            </form>
        @else


        <form action="{{ route('user.post.comment', $post->id) }}" method="POST" >
            {{ csrf_field() }}

            <textarea name="comment" id="" cols="50" rows="5"></textarea><br>
            <input type="submit" name="submit" value="Comment">

        </form>
        @endif

    </div>



@endsection

@push('bottom')

    <link rel="stylesheet" href="{{ 'css/bottom.css' }}">

    @endpush

