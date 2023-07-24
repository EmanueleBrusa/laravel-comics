<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                    <img class="m-2" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
                    <div class="navbar-nav container navbar-light">
                    <ul class="list-unstyled d-flex justify-content-center text-uppercase mb-0">
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active' : ''}}" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">COMICS</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">MOVIES</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">TV</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">GAMES</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">VIDEOS</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">FANS</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">NEWS</a>
                        </li>
                        <li class="nav-item mx-2 my-2">
                            <a class="nav-link">SHOP</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>