@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h2>Recent Posts</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                @if(count($posts) >= 1)
                    @foreach($posts as $post)
                        <a href="{{ URL('/post/'.$post['id']) }}">
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        <h4>{{ $post['title'] }}</h4>
                                    </div>
                                    <div class="panel-body text-center">
                                        <p>{{ $post['description'] }}</p>
                                        @if(!empty(Auth::user()) && Auth::user()->role_id == 2)
                                            <a class="btn btn-default btn-block" href="{{ URL('edit/post/'.$post['id']) }}">Edit</a>
                                        @endif    
                                    </div>
                                </div>
                            </div>                    
                        </a>
                    @endforeach
                @else
                    <h4 class="text-center text-danger"><strong>Sorry, no posts available now :(</strong></h4>
                @endif 
            </div>
        </div>    
    </div>        
@endsection