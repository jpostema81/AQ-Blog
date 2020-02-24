@extends('layouts.dashboard')

@section('title')
    Add Post
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <i class="fa fa-pencil"></i>
                <b>Add Post</b>
            </div>

            <div class="card-body">
                <form class="form" method="post" action="{{ route('dashboard.posts.add') }}" accept-charset="UTF-8">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" id="title" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="short_desc">Short Description</label>
                        <input name="short_desc" id="short_desc" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="long_desc">Title</label>
                        <input name="long_desc" id="long_desc" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="tags" id="tags" class="form-control" multiple required>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group pull-right">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
