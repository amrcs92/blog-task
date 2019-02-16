@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Dashboard</h4>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>
                        {{ isset(Auth::user()->username) ? 'Welcome '. Auth::user()->username : Auth::user()->email }}
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
