@extends('layouts.app')

@section('content')
<div class="position-relative">
    <div class="jumbotron-show">
        <img src="{{ Vite::asset('/resources/images/jumbotron.jpg') }}" alt="">
    </div>
        <div class="col-12 blue-line-comics"></div>
        <div class="d-flex justify-content-around position-relative">
            <div class="col-3  film-card d-flex position-absolute card-show " style="background-image:url({{ $comic['thumb'] }})"
                alt="poster">
                <div class="w-100 d-flex align-self-end h-100 flex-column justify-content-between">
                <span class="label w-50 text-center text-thumb">COMIC BOOK</span>
                <span class="label w-100 text-center text-thumb">VIEW GALLERY</span>
                </div>
            </div>
            <div  class="text-white d-flex justify-content-center col-12 py-4">
                <div class="d-flex justify-content-around w-75  pt-5">
                    <div class="border-top col p-4">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    
                                    <h4 class="text-uppercase text-black mb-3">{{ $comic ['title']}}</h4>
                                    
                                    <div class="bg-price p-3 mb-3">
                                        <div class="text-center fw-bold">
                                            U.S. Price: {{$comic ['price']}}
                                        </div>
                                        <button class="check-availability-btn text-center">
                                            Check Availability
                                            <span class="down-arrow"></span>
                                        </button>
                                    </div>
                                    
                                    <p class="text-black">
                                        {{$comic ['description']}}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-6">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th>Talent</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-flex"> 
                                                    <div class="col-3">
                                                        Art by:
                                                    </div> 
                                                    {{implode(",",$comic ['artists'])}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="col-3">
                                                        Written by:
                                                    </div> 
                                                    {{implode(",",$comic ['writers'])}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            
                                <div class="col-6">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th>Specs</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-flex"> 
                                                    <div class="col-3">
                                                        Series: 
                                                    </div>
                                                    {{$comic ['series']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="col-3">
                                                        U.S Price:  
                                                    </div>
                                                    {{$comic ['price']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex">
                                                    <div class="col-3">
                                                        On Sale Date:
                                                    </div>
                                                    {{ date('Y-M-d', strtotime($comic['sale_date']))}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="me-5 position-relative mt-5 ms-5">
                        <div class="position-relative">
                            <span class="label text-secondary fw-bold position-absolute p-2 m-2">ADVERTISEMENT</span>
                            <img class="adv" src="{{ Vite::asset('public/adv.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>    
            
        </div>
</div>
<div class="container-fluid">
    <div class="row comic-footer-top-row">
        <div class="col-8 offset-2 px-5 py-5 comic-footer-top">
            <ul class=" list-unstyled d-flex align-items-center h-100 justify-content-around">
                <li><a href="/" class="text-white text-decoration-none">
                    <span class="ms-3 ">
                        DIGITAL COMICS
                    </span>
                    <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-digital-comics.png')}}" alt="">
                    </a></li>
                <li><a href="/" class="text-white text-decoration-none">
                    <span class="ms-3 ">
                        DC MERCHANDISE
                    </span>
                    <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-merchandise.png')}}" alt=""> 
                </a></li>
                <li><a href="/" class="text-white text-decoration-none">
                    <span class="ms-3 ">
                        SUBSCRIPTION
                    </span>
                    <img class="w-25" src="{{Vite::asset('./resources/images/buy-comics-subscriptions.png')}}" alt=""> 
                </a></li>
                <li class="d-flex"><a href="/" class="text-white text-decoration-none d-flex">
                    <span class="align-self-center ps-2 ">
                        COMIC SHOP LOCATOR
                    </span>
                    <img class="footer-icons w-25" src="{{Vite::asset('./resources/images/buy-comics-shop-locator.png')}}" alt="">
                    </a></li>
                <li class="text-center d-flex"><a href="/" class="text-white text-decoration-none">
                    <span class="align-self-center ms-3 ">
                        DC POWER VISA
                    </span>
                    <img class="footer-icons w-25" src="{{Vite::asset('./resources/images/buy-dc-power-visa.svg')}}" alt=""> 
                </a></li>
            </ul>
        </div>
    </div>
</div>
@endsection