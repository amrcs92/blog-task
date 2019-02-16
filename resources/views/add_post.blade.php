@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center">Create Post:-</h3>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ URL('/insert/post') }}" class="col-md-6 col-md-offset-3">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title" class="control-label">Title</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Enter post title">
            </div>
            <div class="form-group">
                <label for="description" class="control-label">Description</label>
                <textarea rows="5" class="form-control" name="description" placeholder="Enter post description"></textarea>
            </div>
            <div class="form-group">
                <label for="categories" class="control-label">Categories</label>
                <select class="form-control" id="categories" name="category_id">
                    <option>--Select post category--</option>
                    @foreach($postCategories as $postCategory)
                        <option value="{{ $postCategory['id'] }}"> {{ $postCategory['name'] }}</option>
                    @endforeach    
                </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="publish">Publish</button>
        </form>
    </div>
@endsection