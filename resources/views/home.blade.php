@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{$user->username}}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                
                <div>{{$user->profile->titles}}</div>
                <div>{{$user->profile->description}}</div>
                <div>{{$user->profile->url}}</div>    
                
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
