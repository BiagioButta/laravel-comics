@extends('layout.app')
<?php 
$linksSinglePage = config('comicsdb.linksSinglePage');
$linksImage = config('comicsdb.linksImage');

?>
@section('content')

<div class="container">
    <div><img src="{{$comics['thumb']}}" alt=""></div>

    <div class="row">
        <div class="col">
            <div class="row row-cols-1">
                <div class="col">{{$comics['series']}} : THE DELUX EDITION</div>
                <div class="col">U.S. Price: {{$comics['price']}}</div>
                <div class="col"><span>Available</span><span>Check avaibility</span></div>
                <div class="col"><p>{{$comics['description']}}</p></div>
            </div>
        </div>
        <div class="col">Immagine</div>
    </div>

    <div class="row">
        <div class="col">
            <div class="row">Talent</div>
            <div class="row">
                <div class="col">Aet by:</div>
                <div class="col">
                    @foreach ($comics['artists'] as $key => $artist)
                    @if($key == count($comics['artists']) - 1)
                        {{$artist}}
                    @else
                        {{$artist}},
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col">Written by:</div>
                <div class="col">
                    @foreach ($comics['writers'] as $key => $artist)
                    @if($key == count($comics['writers']) - 1)
                        {{$artist}}
                    @else
                        {{$artist}},
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
            
        <div class="col">
            <div class="row">Specs</div>
            <div class="row">
                <div class="col">Series:</div>
                <div class="col">{{$comics['series']}}</div>
            </div>
            <div class="row">
                <div class="col">U.S. Price:</div>
                <div class="col">{{$comics['price']}}</div>
            </div>
            <div class="row">
                <div class="col">On sale date:</div>
                <div class="col">{{$comics['sale_date']}}</div>
            </div>
        </div>
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