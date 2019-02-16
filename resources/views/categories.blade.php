@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h2>Categories</h2>
        </div>
        <div class="panel-body">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <a href="{{ URL('/category/'.$category['id']) }}">
                                <div class="panel-body bg-primary text-center">
                                    {{ $category['name'] }}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection