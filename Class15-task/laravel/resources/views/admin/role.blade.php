@extends('layouts.admin_master')

@section('role')

    @forelse($role as $roles)
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        {{ $roles->name }}
                    </div>
                    <div class="card-footer">


                        @if(Auth::guard('admin')->id() == $roles->id)
                            <a href="" disabled class="btn btn-primary btn-sm">Make User</a>
                        @else
                            <a href="{{ route('admin.role.update', $roles->id) }}"  class="btn btn-primary btn-sm">Make User</a>

                            @endif


                    </div>
                </div>
            </div>
        </div>

    @empty
        Nothing to show
    @endforelse

@endsection
