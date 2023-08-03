<header>
    <nav>
        <div class="col">
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
        </div>
        <div class="col">
            <ul>
                <li>
                    <a url="{{ route('character') }}">CHARACTERS</a>
                </li>
                <li>
                    <a url="{{ route('home') }}">COMICS</a>
                </li>
                <li>
                    <a url="{{ route('movies') }}">MOVIES</a>
                </li>
                <li>
                    <a url="{{ route('tv') }}">TV</a>
                </li>
                <li>
                    <a url="{{ route('games') }}">GAMES</a>
                </li>
                <li>
                    <a url="{{ route('collectibles') }}">COLLECTIBLES</a>
                </li>
                <li>
                    <a url="{{ route('videos') }}">VIDEOS</a>
                </li>
                <li>
                    <a url="{{ route('fans') }}">FANS</a>
                </li>
                <li>
                    <a url="{{ route('news') }}">NEWS</a>
                </li>
                <li>
                    <a url="{{ route('shop') }}">SHOP</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <input type="text" placeholder="Search">
        </div>
    </nav>
    <div class="nav-bottom"></div>
</header>
