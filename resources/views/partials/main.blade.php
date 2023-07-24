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
            <div class="d-flex justify-content-center text-center align-items-center my-4 pb-4">
                <button type="button">LOAD MORE</button>
            </div>
            <!-- fine bottone -->
        </div>
    </div>
    <!-- fine sezione fumetti -->
    <div class="bg-icons">
        <div class="container">
            <div class="row">
                <div class="col-12 px-2 py-2">

                    <img class="blue-strip-logo" src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>

                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span>

                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                    <span>SUBSCRIPTION</span>

                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                    <span>COMIC SHOP LOCATOR</span>

                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC POWER VISA</span>
                    
                </div>
            </div>
        </div>
    </div>
</main>