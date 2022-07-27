@extends('layouts.app')

{{--fumetto singolo--}}
@section('container-fumetti')

<div class="banner-fumetti"></div>
<div class="container pt-5 pb-3 position-relative">
    <div class="flag">Current Series</div>

    <div class="row g-3">

            <div class="col">
                <h1>{{ $fumetto['description'] }}</h1>
            </div>

    </div>
    
</div>

@endsection


{{--banner azzurro--}}
@section('banner-cosette')

    @include('')

@endsection