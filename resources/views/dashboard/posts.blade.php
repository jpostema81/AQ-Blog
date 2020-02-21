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
                <form method="post"
                      action="{{ route('dashboard.posts.add') }}">
                    @csrf
                    <button class="btn btn-outline-light pull-right">Create</button>
                </form>
            </div>
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
