@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-info">-:Create Post Category:-</h3>
        <form method="post" action="{{ URL('/insert/category') }}" class="col-md-6 col-md-offset-3">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" id="category" name="category" class="form-control" placeholder="Enter post cateogry">
            </div>
            <button class="btn btn-success btn-block" type="submit" name="create">Create</button>
        </form>
    </div>
@endsection