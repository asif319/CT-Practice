@extends('layouts.admin_master')

@section('showIndiPost')

    <h2>{{ $post->name }}</h2>
    <br>
    <p>{{ $post->details }}</p>
    <hr style="border-width: 10px; border-color: black">

    @forelse($comment as $comments)
        <p><b>
                @if(Auth::guard('admin')->id() == $comments->admin_id)
                    Admin

                @else
                    {{ \App\User::find($comments->user_id)->name }}
                @endif
                : </b>{{ $comments->comment }}</p>
        @if(Auth::guard('admin')->id() == $comments->admin_id)
            <a href="?edit={{ $comments->id }}">Edit</a>
        @endif
        <hr>
    @empty
        Nothing to show
    @endforelse

    @if(isset($_GET['edit']))
        <form action="{{ route('admin.comment.edit', [$_GET['edit'], $post->id]) }}" method="POST" >
            {{ csrf_field() }}

            <textarea name="comment" id="" cols="50" rows="5">{{ \App\Comment::find($_GET['edit'])->comment }}</textarea><br>
            <input type="submit" name="submit" value="Edit Comment">
        </form>
@else
    <form action="{{ route('admin.post.comment', $post->id) }}" method="POST" >
        {{ csrf_field() }}

        <textarea name="comment" id="" cols="50" rows="5"></textarea><br>
        <input type="submit" name="submit" value="Comment">
    </form>

    @endif

    @endsection
