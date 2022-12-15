<header class="bg-white">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col"><div id="logo" class="text-center">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </div></div>
            <div class="col">
                <nav class="navbar-nav container navbar-light">
                    <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'characters' ? 'active' : ''
                        }}" href="{{ route('characters') }}">
                                Characters
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'comics' ? 'active' : ''
                            }}" href="{{ route('comics') }}">
                                Comics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'movies' ? 'active' : ''
                        }}" href="{{ route('movies') }}">
                                Movies
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'tv' ? 'active' : ''
                        }}" href="{{ route('tv') }}">
                                Tv
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'games' ? 'active' : ''
                            }}" href="{{ route('games') }}">
                                Games
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'collectibles' ? 'active' : ''
                        }}" href="{{ route('collectibles') }}">
                                Collectibles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'videos' ? 'active' : ''
                        }}" href="{{ route('videos') }}">
                                Videos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'fans' ? 'active' : ''
                            }}" href="{{ route('fans') }}">
                                Fans
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'news' ? 'active' : ''
                        }}" href="{{ route('news') }}">
                                News
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'shop' ? 'active' : ''
                        }}" href="{{ route('shop') }}">
                                Shop
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col">
                <input type="text" placeholder="cerca">
            </div>
        </div>
    </div>
</header>
