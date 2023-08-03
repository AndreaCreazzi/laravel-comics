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
    </nav>
    <div class="nav-bottom"></div>
    <div class="card-container">
        @foreach ($heroes as $hero)
            <div class="card">
                <div class="img-container">
                    <img class="img-card" src="{{ $hero['thumb'] }}" alt="">
                </div>
                <p class="p-subclass">{{ $hero['series'] }}</p>
            </div>
        @endforeach
    </div>
    <div class="load">
        <p class="btn">LOAD MORE</p>
    </div>
</header>
