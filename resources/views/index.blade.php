@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Posts</h2>
        <hr>

        @foreach($posts as $post)
            <div class="card" style="margin-top: 20px">
                <div class="card-header text-center">
                    <h4>{{ ucwords(str_replace('-', ' ', $post->slug)) }}</h4>
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
@endsection
