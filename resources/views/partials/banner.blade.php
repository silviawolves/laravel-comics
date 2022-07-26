@php
$bannerArray = [
    [
        'nome' => 'Digital Comics',
        'immagine' => 'img/buy-comics-digital-comics.png',
    ],
    [
        'nome' => 'Dc Merchandise',
        'immagine' => 'img/buy-comics-merchandise.png',
    ],
    [
        'nome' => 'Subscription',
        'immagine' => 'img/buy-comics-subscriptions.png',
    ],
    [
        'nome' => 'Comic Shop Locator',
        'immagine' => 'img/buy-comics-shop-locator.png',
    ],
    [
        'nome' => 'Dc Power Visa',
        'immagine' => 'img/buy-dc-power-visa.svg',
    ],
]
@endphp

<div class="banner">
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($bannerArray as $item)

                <div class="col-2">
                    <a href="javascript:void(O)">
                        <img src="{{ $item['immagine'] }}">
                        <span class="text-uppercase">{{ $item['nome'] }}</span>
                    </a>
                </div>
                
            @endforeach

        </div>
    </div>
</div>