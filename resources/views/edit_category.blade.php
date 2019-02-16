@extends('layouts.app')
@section('content')
@foreach($category as $categoryDetails)    
    <h3 class="text-center text-danger">Update</h3>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="post" action="{{ URL('update/category/'.$categoryDetails->id) }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $categoryDetails->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit" name="update">Update</button>
                </div>    
            </form>
            <form method="post" action="{{ URL('delete/post/'.$categoryDetails->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}                
                <div class="form-group">
                    <button class="btn btn-block btn-danger" type="submit" name="delete">Delete</button>
                </div>
            </form>
        </div>        
    </div>
    @endforeach      
@endsection