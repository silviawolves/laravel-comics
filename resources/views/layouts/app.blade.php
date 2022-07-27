<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed&display=swap" rel="stylesheet">
</head>

<body>
    
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('container-fumetti')
        @yield('banner-cosette')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
    
    @include('partials.signup')

</body>

</html>