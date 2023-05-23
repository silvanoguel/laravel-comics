@extends('layouts.app')

@section('content')
    <div class="card-container py-4 text-center bg-dark">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="ms_card">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <div class="card-body">
                                <p class="card-title">{{ $comic['series'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button>
                <h3>LOAD MORE</h3>
            </button> 
        </div>
    </div>
@endsection