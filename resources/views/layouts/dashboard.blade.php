@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@include('layouts.sidebar')

@section('content')
    <div class="container">
        @yield('dashboard-content')
    </div>
@endsection
