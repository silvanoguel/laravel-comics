@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            
            <div class="col-3">
                <div class="card">
                    <img src="{{$comic['thumb']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                    </div>
                </div>
            </div>
        
            
        @endforeach
    </div>
@endsection