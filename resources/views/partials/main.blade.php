<main>
    <!-- Inizio jumbotron -->
    <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    <!-- Fine jumbotron -->
    <!-- Inizio ciclo foreach per fumetti -->
    <div class="bg-black">
        <div class="container">
            <div class="row pos_rel">
                <!-- inizio badge -->
                <div class="badge col-2 text-center"> CURRENT SERIES</div>
                <!-- fine badge -->       
                @foreach($comics as $comic)
                    <div class="col-12 col-md-6 col-lg-2 mt-5">
                        <div class="my-1">
                            <img class="img-fluid card-img-top h_img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <div>
                                <span class="card-title text-white">{{ $comic['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- bottone load more -->
            <div class="d-flex justify-content-center text-center align-items-center pb-4">
                <button type="button">LOAD MORE</button>
            </div>
            <!-- fine bottone -->
        </div>
    </div>
    <!-- fine sezione fumetti -->
</main>