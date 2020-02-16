@extends('layouts.dashboard')

@php
    $faker = Faker\Factory::create(app()->getLocale())
@endphp

@section('dashboard-content')
    <div class="card">
        <span class="card-header bg-dark text-white">
            Settings
        </span>

        <div class="card-body">
            <div class="alert alert-warning"><b>Note:</b> None of these settings are implemented yet, clicking 'save'
                will cause an error 501 (Not Implemented Yet).
            </div>

            <form class="form" method="post" action="{{ route('dashboard.settings.edit') }}" accept-charset="UTF-8">
                @csrf

                <div class="form-group">
                    <label for="site-name">Site Name:</label>
                    <input class="form-control" type="text" placeholder="{{ config('app.name', $faker->company) }}"
                           id="site-name" name="site-name">
                </div>

                <div class="form-group">
                    <label for="site-description">Site Description:</label>
                    <input class="form-control" type="text"
                           placeholder="{{ config('app.description', $faker->text(100)) }}" id="site-description"
                           name="site-description">
                </div>

                <div class="form-group">
                    <label for="site-tags">Site Tags:</label>
                    <input class="form-control" type="text"
                           placeholder="{{ config('app.tags', str_replace(' ', ', ', $faker->words(5, true))) }}"
                           id="site-tags" name="site-tags">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
