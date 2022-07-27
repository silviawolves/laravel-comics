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

    <div class="single-lower">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>Talent</h5>
                    <div class="row flex-column">

                        {{-- ARTISTI --}}
                        <div class="col border-top">
                            <div class="row">

                                <div class="col-3">
                                    <h6>Art by:</h6>
                                </div>

                                <div class="col-9">

                                    <p class="loop">
                                        @foreach ($fumetto['artists'] as $artista)
                                            <span class="lower-part">{{ $artista }}</span>
                                            @if (!$loop->last)
                                                    <span class="lower-part">, </span>
                                                @endif      
                                        @endforeach
                                    </p>
                                    
                                </div>
                            </div>
                        </div>

                        {{-- SCRITTORI --}}
                        <div class="col border-top border-bottom">
                            <div class="row">

                                <div class="col-3">
                                    <h6>Written by:</h6>
                                </div>

                                <div class="col-9">
                                    <p class="loop">
                                        @foreach ( $fumetto['writers'] as $scrittore )
                                            <span class="lower-part">{{ $scrittore }}</span>
                                                @if (!$loop->last)
                                                    <span class="lower-part">, </span>
                                                @endif                                        
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <h5>Specs</h5>
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