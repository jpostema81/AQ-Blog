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
                    <div id="modal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title pull-left">Edit User</h4>

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                    <div class="container">
                                        <form class="form text-center" method="post"
                                              action="{{ route('dashboard.users.edit', ['user' => $user]) }}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="id">ID:</label>
                                                <input class="form-control" type="number" min="1"
                                                       value="{{ $user->id }}"
                                                       disabled id="id" name="id">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input class="form-control" type="text" value="{{ $user->name }}"
                                                       id="name" name="name">
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input class="form-control" type="email" value="{{ $user->email }}"
                                                       id="email" name="email">
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password:</label>
                                                <input class="form-control" type="password"
                                                       placeholder="{{ str_repeat('*', rand(3, 32))  }}" id="password"
                                                       name="password">
                                            </div>

                                            <div class="form-group">
                                                <label for="is_admin">Is Admin:</label>
                                                <select class="form-control" id="is_admin" name="is_admin">
                                                    <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="0" {{ !$user->is_admin ? 'selected' : '' }}>No
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary w-100">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ _($user->is_admin ? 'Yes' : 'No') }}</td>
                        <td>
                            @if ($user->id !== Auth::user()->id)
                                <div class="btn-group">
                                    <a type="button" class="p-1" data-toggle="modal" data-target="#modal" href="#"><i
                                            class="fa fa-pencil text-dark"></i></a>
                                    <a type="button" class="p-1"
                                       href="{{ route('dashboard.users.remove', ['user' => $user]) }}"><i
                                            class="fa fa-remove text-dark"></i></a>
                                </div>
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
