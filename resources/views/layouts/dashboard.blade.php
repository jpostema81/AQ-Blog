@extends('layouts.app')

@include('layouts.sidebar')

@section('content')
    <div class="container">
        @yield('dashboard-content')
    </div>
@endsection
