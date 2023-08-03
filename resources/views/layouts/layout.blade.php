<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/png">
    @vite('resources/js/app.js')
    {{-- FONTAWESOME --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
        integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=='
        crossorigin='anonymous' />
</head>

<body>
    {{-- HEADER --}}
    @include('includes.header')

    <main>
        @yield('main-content')
    </main>

    {{-- FOOTER --}}
    @include('includes.footer')
</body>

</html>
