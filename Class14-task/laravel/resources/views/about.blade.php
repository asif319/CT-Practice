
@extends('layouts.master')

@section('title', 'About')

@section('navbar')
    @include('partials.header')
@endsection

@section('image')
    <div class="text-dark my-5 py-4 text-center" >

        <h2>Welcome {{ $username }}</h2>

        @if(session('updateSuccess'))
            {{ session('updateSuccess') }}
        @endif

            @if(session('delete'))
                {{ session('delete') }}
            @endif
        <div class="card-body">

            <table border="1px">
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Task</b></td>
                    <td><b>Image</b></td>
                    <td><b>Action</b></td>
                </tr>
                @forelse($allData as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->task }}</td>
                        <td>
                            @if($data->image == null)
                                <p>Image not found</p>
                            @else
                            <img src="{{ asset('photos/'.$data->image) }}" alt="" width="200px">
                                @endif
                        </td>
                        <td>
                            <a href="{{ route('data.edit.show', [$data->id]) }}">Edit</a>||
                            <a onclick="return confirm('Are you sure?')" href="{{ route('data.delete', [$data->id]) }}">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="4">Nothing to show</td></tr>
                @endforelse
            </table>
        </div>
    </div>

@endsection

@push('bottom')

    <link rel="stylesheet" href="{{ 'css/bottom.css' }}">

    @endpush

