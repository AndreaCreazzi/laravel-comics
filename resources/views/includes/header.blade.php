<header>
    <nav>
        <div class="col">
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
        </div>
        <div class="col">
            <ul>
                <li>
                    <a href="{{ route('character') }}">CHARACTERS</a>
                </li>
                <li>
                    <a class="active" href="{{ route('home') }}">COMICS</a>
                </li>
                <li>
                    <a href="{{ route('movies') }}">MOVIES</a>
                </li>
                <li>
                    <a href="{{ route('tv') }}">TV</a>
                </li>
                <li>
                    <a href="{{ route('games') }}">GAMES</a>
                </li>
                <li>
                    <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="{{ route('videos') }}">VIDEOS</a>
                </li>
                <li>
                    <a href="{{ route('fans') }}">FANS</a>
                </li>
                <li>
                    <a href="{{ route('news') }}">NEWS</a>
                </li>
                <li>
                    <a href="{{ route('shop') }}">SHOP</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </nav>
    <div class="nav-bottom"></div>
</header>
