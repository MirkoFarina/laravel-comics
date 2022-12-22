<header>
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC" />
        </div>
        <nav>
            <ul>
                <li>
                    <a class="{{ Route::currentRouteName() === 'charachters' ? 'active' : '' }}" >
                        Characters
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">
                        comics
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">
                        movies
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">
                        tv
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">
                        games
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">
                        collectibles
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">
                        videos
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">
                        fans
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">
                        news
                    </a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">
                        shop
                    </a>
                </li>
            </ul>
            <input type="text" placeholder="Search">
        </nav>
    </div>
</header>
