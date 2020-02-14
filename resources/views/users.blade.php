@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-danger">
                <b class="text-white">Administrators</b>
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
                        {{ _('No Administrators') }}
                    @endforelse
                </ul>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header bg-primary">
                <b class="text-white">Users</b>
            </div>

            <div class="card-body">
                <ul class="list-unstyled">
                    @forelse($users as $user)
                        <li class="p-3">
                            <img src='{{ url("/avatars/$user->avatar") }}' alt="{{ $user->name }}" width="48"
                                 height="48" class="avatar avatar-lg mr-2">
                            <a href='{{ url("/users/$user->id")}}'>{{ $user->name }}</a>
                        </li>

                        <hr>
                    @empty
                        {{ _('No Users') }}
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
