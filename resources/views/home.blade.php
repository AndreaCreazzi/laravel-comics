@extends('layouts.layout')

@section('title', 'Laravel Comics')

@section('main-content')
    <section class="comics">
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
    </section>
    <section class="shop">
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
