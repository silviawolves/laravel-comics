@extends('layouts.app')

{{--fumetti--}}
@section('container-fumetti')
<div class="banner-fumetti"></div>
<div class="container pt-5 pb-3 position-relative">
    <div class="flag">Current Series</div>

    <div class="row g-3">
        <div class="col">
            
        </div>
    </div>

    <button class="btn btn-primary text-uppercase rounded-0 px-5 d-block mx-auto mt-4">Load More</button>
    
</div>
@endsection

{{--banner azzurro--}}
@section('banner-cosette')
<div class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-2">
                <a href="javascript:void(O)">
                    <img src="">
                    <span class="text-uppercase">nome</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection