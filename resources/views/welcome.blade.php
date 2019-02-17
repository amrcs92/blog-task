@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h2>Home Page</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                @foreach($posts as $post)
                    <a href="{{ URL('/post/'.$post['id']) }}">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h4>{{ str_limit($post['title'], $limit = 30, $end = '...') }}</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <p>{{ str_limit($post['description'], $limit = 100, $end = '...') }}</p>
                                    @if(!empty(Auth::user()) && Auth::user()->role_id == 2)
                                        <a class="btn btn-block btn-default" href="{{ URL('edit/post/'.$post['id']) }}">Edit</a>
                                    @endif
                                </div>
                            </div>
                        </div>                    
                    </a>
                @endforeach                
            </div>
        </div>    
    </div>        
@endsection

