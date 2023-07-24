<main>
    <!-- Inizio jumbotron -->
    <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    <!-- Fine jumbotron -->
    <!-- Inizio ciclo foreach per fumetti -->
    <div class="container">
        <div class="row">           
            @foreach($comics as $comic)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-1 my-2">
                        <img class="img-fluid card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h6 class="card-title">{{ $comic['title'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- fine sezione fumetti -->
</main>