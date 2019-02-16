@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h2>Related Posts category</h2>
        </div>
        <div class="panel-body">
           <div class="row">
                @if(count($postsCategory) >= 1)
                    @foreach($postsCategory as $postCategory)
                        <a href="{{ URL('/post/'.$postCategory['id']) }}">
                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center">
                                        <h4>{{ $postCategory['title'] }}</h4>
                                    </div>
                                    <div class="panel-body text-center">
                                        <p>{{ $postCategory['description'] }}</p>
                                        @if(!empty(Auth::user()) && Auth::user()->role_id == 2)
                                            <a class="btn btn-default btn-block" href="{{ URL('edit/post/'.$postCategory['id']) }}">Edit</a>
                                        @endif    
                                    </div>
                                </div>
                            </div>
                        </a>                    
                    @endforeach

                @else 
                    <h4 class="text-center text-danger"><strong>Sorry, no posts available for this category :( </strong></h4>
                @endif
            </div>           
        </div>    
    </div>        
@endsection