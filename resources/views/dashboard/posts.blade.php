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
                    <th>Slug</th>
                    <th>Author</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ ucwords(str_replace('-',' ', $post->slug)) }}</td>
                        <td><a href="#" class="text-dark">{{ $post->author->name }}</a></td>
                        <td>
                            <div class="btn-group">
                                <form method="post"
                                      action="{{ route('dashboard.posts.edit', ['post_id' => $post->id]) }}">
                                    @csrf
                                    <button><i class="fa fa-pencil text-dark"></i></button>
                                </form>

                                <form method="post"
                                      action="{{ route('dashboard.posts.remove', ['post_id' => $post->id]) }}">
                                    @csrf
                                    <button><i class="fa fa-remove text-dark"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <p>No posts currently.</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
