@extends('layouts.app')

@section('content')
    <style>
        aside li:hover,
        aside li:focus {
            background: rgba(0, 0, 0, 0.075);
            color: #000;
        }

        aside .nav-item {
            padding: 10px;
        }
    </style>

    <aside class="navbar navbar-expand-lg bg-white" style="position: absolute; top: 20px; bottom: 0; width: 200px;">
        <ul class="navbar-nav nav-pills flex-column" style="width: 100%; text-align: center;">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-gear"></i> Settings</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user"></i> Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-pencil"></i> Posts</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-hashtag"></i> Tags</a></li>
        </ul>
    </aside>
@endsection

