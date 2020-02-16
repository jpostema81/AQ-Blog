@extends('layouts.dashboard')

@section('dashboard-content')
    <style>
        .badge.stat-badge {
            width: 100px;
            height: 100px;
            text-align: center;
            font-size: 1.5rem;
            border: 3px solid #333;
            border-radius: 50%;
            padding-top: 35px;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row a {
            padding-left: 25px;
            padding-right: 25px;
            display: flex;
            flex-direction: column;
            text-decoration: none;
        }

        .row .badge-text {
            margin-top: 5px;
            font-weight: bold;
        }
    </style>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <span>Statistics</span>
        </div>

        <div class="card-body">
            <div class="container text-center">
                <div class="row">
                    <a type="statistic" href="{{ route('dashboard.users') }}">
                        <span class="badge stat-badge text-primary">{{ $user_count }}</span>
                        <span class="badge-text text-dark">Users</span>
                    </a>

                    <a type="statistic" href="{{ route('dashboard.posts') }}">
                        <span class="badge stat-badge text-primary">{{ $post_count }}</span>
                        <span class="badge-text text-dark">Posts</span>
                    </a>

                    <a type="statistic" href="{{ route('dashboard.tags') }}">
                        <span class="badge stat-badge text-primary">{{ $tag_count }}</span>
                        <span class="badge-text text-dark">Tags</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

