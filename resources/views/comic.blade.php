@extends('layouts.layout')

@section('title', 'Laravel Comics')

@section('main-content')
    <section id="single-comic">
        <p>{{ $hero['title'] }}</p>
        <p>{{ $hero['description'] }}</p>
        <p>{{ $hero['price'] }}</p>
        <p>{{ $hero['series'] }}</p>
        <p>{{ $hero['sale_date'] }}</p>
        <p>{{ $hero['type'] }}</p>
        <?php foreach($hero['artists'] as $artist) : ?>
        <p>{{ $artist }}</p>
        <?php endforeach ?>
        <?php foreach($hero['writers'] as $writer) : ?>
        <p>{{ $writer }}</p>
        <?php endforeach ?>
        <img src="{{ $hero['thumb'] }}" alt="">
        <img class="logo" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="logo DC">
    </section>
@endsection
