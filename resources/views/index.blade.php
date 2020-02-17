@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container-fluid">
        <p>Welcome to {{ config('app.name') }}!</p>
    </div>
@endsection
