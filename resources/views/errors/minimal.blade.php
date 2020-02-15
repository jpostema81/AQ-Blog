@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            overflow-y: hidden !important;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .code {
            border-bottom: 2px solid;
            font-size: 26px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height flex-column">
    <div class="d-inline">
        <div class="code">
            @yield('code')
        </div>

        <div class="message">
            @yield('message')
        </div>
    </div>

    <div class="p-2">
        <a class="btn btn-dark"
           href="{{ Request::is(['dashboard', 'dashboard/*']) && Auth::user() && Auth::user()->is_admin ? route('dashboard') : route('index') }}">Go
            Back</a>
    </div>
</div>
</body>
</html>
