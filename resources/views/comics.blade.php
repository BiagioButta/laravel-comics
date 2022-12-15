@extends('layouts.app')
@section('content')

    @include('partials.hero')
    <div class="container">
        <div class="row row-cols-6">
            @foreach ($comics as $comic)
            <a class="nav-link {{Route::currentRouteName() == 'batman'}}" href="{{ route('batman') }}">
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">{{$comic['title']}}</p>
                        </div>
                    </div>
                </div>
            </a>   
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                <button>Load more</button>
            </div>
        </div>
    </div>
    <div class="row">ciao</div>

@endsection
