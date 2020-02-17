@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <style>
        img, a, a:hover {
            border: none;
            outline: none;
            user-select: none;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h3 class="text-center">Recent Posts</h3>
                <hr>

                @foreach($recent_posts as $post)
                    <div class="card" style="margin-top: 20px">
                        <div class="card-header text-center bg-dark text-white">
                            <h5>{{ ucwords(str_replace('-', ' ', $post->slug)) }}</h5>
                        </div>

                        <div class="card-body">
                            <div class="container text-center">
                                <p>{{ $post->short_desc }}</p>
                                <hr>

                                @if(strlen($post->long_desc) > 750)
                                    <p>{{ ucfirst(substr($post->long_desc, 0, 750)) }}</p>

                                    <div class="text-center" style="padding-top: 20px">
                                        <a href="#" class="text-info">Read More</a>
                                    </div>
                                @else
                                    <p>{{ ucfirst($post->long_desc) }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="card-footer">
                    <span class="pull-left"><i class="fa fa-user"></i> <a href="#"
                                                                          class="text-dark">{{ $post->author->name }}</a></span>
                            <span class="pull-right"><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:m') }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-2" style="margin-top: 65px">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <i class="fa fa-user"></i>
                        <span>Users</span>
                    </div>

                    <div class="card-body p-1">
                        @foreach($users as $user)
                            <a href="#" title="{{ $user->name }}">
                                <img src="{{ asset('avatars/' . $user->avatar) }}" alt="{{ $user->name }}" width="32"
                                     height="32"/>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-dark text-white">
                        <i class="fa fa-star"></i>
                        <span>Statistics</span>
                    </div>

                    <div class="card-body text-center p-1">
                        <table class="table">
                            <tr>
                                <th>Users</th>
                                <td>{{ $user_count }}</td>
                            </tr>
                            <tr>
                                <th>Posts</th>
                                <td>{{ $post_count }}</td>
                            </tr>
                            <tr>
                                <th>Tags</th>
                                <td>{{ $tag_count }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
