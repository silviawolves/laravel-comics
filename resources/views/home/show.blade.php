@extends('layouts.app')

{{--fumetto singolo--}}
@section('container-fumetti')

<div class="single">
    <div class="banner-fumetti"></div>
    <div class="blue-div"></div>
    <div class="container pt-5 pb-3 position-relative">

        {{-- IMMAGINE FUMETTO --}}
        <img src="{{ $fumetto['thumb'] }}" class="fumetto-show">
        <div class="fumetto-banner top">Comic book</div>
        <a href="{{ route('home') }}"><div class="fumetto-banner low">View gallery</div></a>

        <div class="row g-3">

                <div class="col-8">
                    <h3 class="text-uppercase">{{ $fumetto['title'] }}</h3>
                    
                    {{-- BANNER VERDE --}}
                    <div class="d-flex py-3">
                        <div class="green-banner large">
                            <div><span class="greeny">U.S. Price:</span> {{ $fumetto['price'] }}</div>
                            <div class="greeny text-uppercase">Available</div>
                        </div>

                        <div class="green-banner small">Check Availability</div>
                    </div>

                    {{-- DESCRIZIONE FUMETTO --}}
                    <p>{!! $fumetto['description'] !!}</p>
                </div>

                {{-- ADVERTISING A LATO --}}
                <div class="col-4">
                    <div class="content">
                        <h6 class="adv">Advertisement</h6>
                        <img src="img/adv.jpg" alt="">
                    </div>
                </div>

        </div>
        
    </div>
</div>

@endsection


{{--banner azzurro--}}
@section('banner-cosette')

    {{--@include('')--}}

@endsection