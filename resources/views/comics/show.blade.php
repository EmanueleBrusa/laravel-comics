@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <div class="row">
                    <div class="col-8">
                        <img class="w-50" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <div class="p-3 mt-4">
                        <h4 class="text-primary"><strong>{{ $comic['title'] }}</strong></h4>
                            <p class="text-success"><strong>Prezzo:  </strong>{{ $comic['price'] }}</p>
                            <p><strong>Serie:  </strong>{{ $comic['series'] }}</p>
                            <p><strong>Tipo:  </strong>{{ $comic['type'] }}</p>
                            <p><strong>Data uscita:  </strong>{{ $comic['sale_date'] }}</p>
                            <p><strong>Descrizione:  </strong>{{ $comic['description'] }}</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <h6 class="text-secondary"><strong>ADVERTISMENT</strong></h6>
                        <img class="w-100" src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection