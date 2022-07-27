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
    
</div>
@endsection


{{--banner azzurro--}}
@section('banner-cosette')

    @include('')

@endsection