@extends('layout.app')
<?php 
$linksImage = config('comicsdb.linksImage');

?>
@section('content')
    <div class="container">
        <div class="row row-cols-6">
            @foreach ($comics as $key => $comic)
                <div class="card">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['series']}}</h5>
                      <p class="card-text">{{$comic['price']}}</p>
                      <a href="{{'/singlepage' . $key}}" class="btn btn-primary">More info</a>
                    </div>
                  </div>
            @endforeach
        </div>
    </div>
    <div class="bg-blue">
        <div class="container">
            <div class="row">
                @foreach ($linksImage as $link)
                <div class="col">
                    <img src="{{Vite::asset('resources/img/' . $link['url'] )}}" alt="">
                    <a href="">{{$link['text']}}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
