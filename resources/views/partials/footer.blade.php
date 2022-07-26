@php
$dcComicsLinks = [
    [
        'name' => 'Characters',
        'href' => '#',
    ],
    [
        'name' => 'Comics',
        'href' => '#',
    ],
    [
        'name' => 'Movies',
        'href' => '#',
    ],
    [
        'name' => 'Tv',
        'href' => '#',
    ],
    [
        'name' => 'Games',
        'href' => '#',
    ],
    [
        'name' => 'Videos',
        'href' => '#',
    ],
    [
        'name' => 'News',
        'href' => '#',
    ],
];

$shopLinks = [
    [
        'name' => 'Shop DC',
        'href' => '#',
    ],
    [
        'name' => 'Shop DC Collectibles',
        'href' => '#',
    ]
];

$dcLinks = [
    [
        'name' => 'Terms Of Use',
        'href' => '#',
    ],
    [
        'name' => 'Privacy Policy (New)',
        'href' => '#',
    ],
    [
        'name' => 'Ad Choices',
        'href' => '#',
    ],
    [
        'name' => 'Advertising',
        'href' => '#',
    ],
    [
        'name' => 'Jobs',
        'href' => '#',
    ],
    [
        'name' => 'Subscriptions',
        'href' => '#',
    ],
    [
        'name' => 'Talent Workshops',
        'href' => '#',
    ],
    [
        'name' => 'CPSC Certificates',
        'href' => '#',
    ],
    [
        'name' => 'Ratings',
        'href' => '#',
    ],
    [
        'name' => 'Shop Help',
        'href' => '#',
    ],
    [
        'name' => 'Contact Us',
        'href' => '#',
    ],
];

$sitesLink = [
    [
        'name' => 'DC',
        'href' => '#',
    ],
    [
        'name' => 'MAD Magazine',
        'href' => '#',
    ],
    [
        'name' => 'DC Kids',
        'href' => '#',
    ],
    [
        'name' => 'DC Universe',
        'href' => '#',
    ],
    [
        'name' => 'DC Power Visa',
        'href' => '#',
    ],
]
@endphp

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-2">
                    <div class="py-4 align-items-center">
                        <h6 class="text-uppercase fw-bold">Dc Comics</h6>
                        <ul class="list-unstyled">

                            @foreach ($dcComicsLinks as $link)
                                <li><a :href="{{ $link['href'] }}">{{ $link['name'] }}</a></li>
                            @endforeach

                        </ul>

                        <h6 class="text-uppercase fw-bold">Shop</h6>
                        <ul class="list-unstyled">

                            @foreach ($shopLinks as $link)
                                <li><a :href="{{ $link['href']}}">{{ $link['name'] }}</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>

                <div class="col-2">
                    <div class="py-4 align-items-center">
                        <h6 class="text-uppercase fw-bold">Dc</h6>
                        <ul class="list-unstyled">

                            @foreach ($dcLinks as $link)
                                <li><a :href="{{ $link['href'] }}"> {{ $link['name'] }}</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>

                <div class="col-2">
                    <div class="py-4 align-items-center">
                        <h6 class="text-uppercase fw-bold">Sites</h6>
                        <ul class="list-unstyled">

                            @foreach ($sitesLink as $link)
                                <li><a :href="{{ $link['href'] }}"> {{ $link['name'] }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <img src="/img/dc-logo-bg.png" alt="">
        </div>

    </div>
</div>