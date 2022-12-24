<?php 
$links = config('comicsdb.navbar');
?>
<div class="container">

    <header>
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
            </div>
            <div class="col">
                <ul class="d-flex">
                    @foreach ($links as $link)
                    <li class="m-2 {{(Route::currentRouteName() == $link['url'] || (Route::currentRouteName() == 'singlepage' && $link['url'] == 'comics'))  ? 'active' : ''}}">
                        <a href="{{$link['url'] == 'comics' ? '/' : $link['url']}}">{{$link['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col text-end">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </header>

</div>