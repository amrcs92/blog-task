@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        @foreach($post as $post_details)
            <div class="panel-heading text-center">
                <h2>{{ $post_details->title }}</h2>        
            </div>
            <div class="panel-body">
                <div class="col-md-6 col-md-offset-3">
                    <p>{{ $post_details->description }}</p>
                </div>
                @if(Auth::user()->role_id == 2)
                    <div class="col-md-12 text-center">
                        <a class="btn btn-link btn-lg" href="{{ URL('edit/post/'.$post_details->id) }}"> >> Edit << </a>
                    </div>
                @endif    
            </div> 
        @endforeach
    </div>        
@endsection