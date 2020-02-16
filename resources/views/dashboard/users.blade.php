@extends('layouts.dashboard')

@section('dashboard-content')
    <style>
        .btn-group button {
            background: none;
            border: none;
            outline: none;
        }
    </style>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <i class="fa fa-user"></i>
            <b>Users</b>
        </div>

        <div class="card-body table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Is Admin</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ _($user->is_admin ? 'Yes' : 'No') }}</td>
                        <td>
                            @if ($user->id !== Auth::user()->id)
                                <div class="btn-group">
                                    <form method="post" action="{{ route('dashboard.users.edit', ['user' => $user]) }}">
                                        @csrf
                                        <button><i class="fa fa-pencil text-dark"></i></button>
                                    </form>

                                    <form method="post"
                                          action="{{ route('dashboard.users.remove', ['user' => $user]) }}">
                                        @csrf
                                        <button><i class="fa fa-remove text-dark"></i></button>
                                    </form>
                                </div>
                            @else
                                <h5 class="pt-0"><span class="badge badge-primary">You</span></h5>
                            @endif
                        </td>
                    </tr>
                @empty
                    <p>No users currently.</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
