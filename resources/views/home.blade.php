@extends('layouts.layout')

@section('title', 'Laravel Comics')

@section('main-content')
    <div class="row">
        <div class="col">
            <h3>DC COMICS</h3>
            <ul>
                <li><a href="#">Characters</a></li>
                <li><a href="#">Comics</a></li>
                <li><a href="#">Movie</a></li>
                <li><a href="#">Tv</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">News</a></li>
            </ul>
            <h3>SHOP</h3>
            <ul>
                <li><a href="#">Shop DC</a></li>
                <li><a href="#">Shop DC Collactibles</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>DC</h3>
            <ul>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Ad Chorse</a></li>
                <li><a href="#">Advertising</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Subscriptions</a></li>
                <li><a href="#">Talent Worksop</a></li>
                <li><a href="#">CPSC Certificates</a></li>
                <li><a href="#">Ratings</a></li>
                <li><a href="#"> Shop Help</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="col">
            <h3>SITES</h3>
            <ul>
                <li><a href="#">DC</a></li>
                <li><a href="#">MAD Magazine</a></li>
                <li><a href="#">DC Kids</a></li>
                <li><a href="#">DC Universe</a></li>
                <li><a href="#">DC Power Visa</a></li>
            </ul>
        </div>
    </div>
    <section>
        <figure>
            <p><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">DIGITAL COMICS</p>
            <p><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">DC MERCHANDISE</p>
            <p><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">SUBSCRITION</p>
            <p><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">COMIC SHOP LOCATOR
            </p>
            <p><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">DC POWER VISA</p>
        </figure>
    </section>
@endsection
