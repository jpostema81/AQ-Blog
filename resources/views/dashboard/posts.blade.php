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
            <div class="pull-left">
                <h5 class="pt-2"><i class="fa fa-pencil"></i> <b>Posts</b></h5>
            </div>

            <div class="pull-right">
                <a class="btn btn-outline-light pull-right" href="{{ route('dashboard.posts.create') }}">Create</a>
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Slug</th>
                    <th>Date</th>
                    <th>Author</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ ucwords(str_replace('-',' ', $post->slug)) }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="#" class="text-dark">{{ $post->author->name }}</a></td>
                        <td>
                            <div class="btn-group">
                                <form method="POST"
                                      action="{{ url("/dashboard/posts/{$post->id}/edit") }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                    <button><i class="fa fa-pencil text-dark"></i></button>
                                </form>

                                <form method="POST"
                                      action="{{ url("/dashboard/posts/{$post->id}") }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $post->id }}">
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
