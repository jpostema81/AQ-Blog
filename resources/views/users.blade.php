@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <b class="card-title">Administrators</b>
                <i class="fa fa-angle-right ml-0"></i>
                <b class="card-subtitle">The people that manage this blog.</b>
            </div>

            <div class="card-body">
                <ul class="list-unstyled">
                    @forelse($admins as $admin)
                        <li class="p-3">
                            <img src='{{ url("/avatars/$admin->avatar") }}' alt="{{ $admin->name }}" width="48"
                                 height="48" class="avatar avatar-lg mr-2">
                            <a href='{{ url("/users/$admin->id")}}'>{{ $admin->name }}</a>
                        </li>

                        <hr>
                    @empty
                        {{ __('No Administrators') }}
                    @endforelse
                </ul>
            </div>
        </div>

        <br>
        <div class="card">
            <div class="card-header bg-success text-white">
                <b class="card-title">Writers</b>
                <i class="fa fa-angle-right ml-0"></i>
                <b class="card-subtitle">The people that write on this blog.</b>
            </div>

            <div class="card-body">
                <ul class="list-unstyled">
                    @forelse($writers as $writer)
                        <li class="p-3">
                            <img src='{{ url("/avatars/$writer->avatar") }}' alt="{{ $writer->name }}" width="48"
                                 height="48" class="avatar avatar-lg mr-2">
                            <a href='{{ url("/users/$writer->id")}}'>{{ $writer->name }}</a>
                        </li>

                        <hr>
                    @empty
                        {{ __('No Writers') }}
                    @endforelse
                </ul>
            </div>
        </div>

        <br>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <b class="card-title">Users</b>
                <i class="fa fa-angle-right ml-0"></i>
                <b class="card-subtitle">The people that read and/or comment on this blog.</b>
            </div>

            <div class="card-body">
                <ul class="list-unstyled">
                    @forelse($users as $user)
                        @if ($user->is_admin || $user->is_writer)
                            @continue
                        @endif

                        <li class="p-3">
                            <img src='{{ url("/avatars/$user->avatar") }}' alt="{{ $user->name }}" width="48"
                                 height="48" class="avatar avatar-lg mr-2">
                            <a href='{{ url("/users/$user->id")}}'>{{ $user->name }}</a>
                        </li>

                        <hr>
                    @empty
                        {{ __('No Users') }}
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
