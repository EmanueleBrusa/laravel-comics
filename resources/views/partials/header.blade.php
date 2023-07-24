<header>
    <div class="container">
        <div class="row">
            <div class="col-10 d-flex justify-content-center align-items-center mt-4">
                <img class="m-2" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
                <div class="navbar-nav container navbar-light">
                    <ul class="list-unstyled d-flex justify-content-center align-items-center text-uppercase">
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">CHARACTERS</a>
                        </li>
                        <li class="nav-item px-2 py-2 {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_li' : ''}}">
                            <a class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_a' : ''}}" href="{{ route('homepage') }}">COMICS</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">MOVIES</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">TV</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">GAMES</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">VIDEOS</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">FANS</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link">NEWS</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link d-flex align-items-center">SHOP <i class="fa-solid fa-caret-down" style="color: #0074e8;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center mt-4">
                <div class="search d-flex s-control">
                    <input type="text" class="form-control s-bar" placeholder="Search...">
                    <i class="fa fa-search align-self-center"></i>
                </div>
            </div>
        </div>
    </div>
</header>