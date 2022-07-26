@extends('layouts.app')

{{--fumetti--}}
@section('container-fumetti')
<div class="banner-fumetti"></div>
<div class="container pt-5 pb-3 position-relative">
    <div class="flag">Current Series</div>

    <div class="row g-3">

        @foreach ($fumetti as $fumetto)
            <div class="col">
                @include('partials.cardfumetto', [
                    'fumetto' => $fumetto
                ])
            </div>
        @endforeach

    </div>

    <button class="btn btn-primary text-uppercase rounded-0 px-5 d-block mx-auto mt-4">Load More</button>
    
</div>
@endsection

{{--banner azzurro--}}
@section('banner-cosette')
<div class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2" v-for="(img, i) in bannerArray" :key="i">
                    <a href="javascript:void(O)">
                        {{-- <img :src="`img/${img.immagine}.${img.estensione}`" :alt="`immagine di ${img.nome}`" :class="{'smaller' : i === 4}">
                        <span class="text-uppercase">{{ img.nome }}</span> --}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection