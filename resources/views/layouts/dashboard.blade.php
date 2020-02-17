@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@include('layouts.sidebar')

@section('content')
    <div class="container" style="margin-left: 15vw">
        @yield('dashboard-content')
    </div>
@endsection
