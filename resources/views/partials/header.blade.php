@php
$linkNav = [
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
        'name' => 'Collectibles',
        'href' => '#',
    ],
    [
        'name' => 'Videos',
        'href' => '#',
    ],
    [
        'name' => 'Fans',
        'href' => '#',
    ],
    [
        'name' => 'News',
        'href' => '#',
    ],
    [
        'name' => 'Shop',
        'href' => '#',
    ],
]
@endphp

<div class="blue-banner">
    <div class="container">
        <div class="pe-4">dc power visa®</div>
        <div class="ps-4">additional dc sites</div>
    </div>
</div>

<div class="container">
    <div class="my-navbar">
        <img src="/img/dc-logo.png" alt="">
        <ul class="list-unstyled m-0 d-flex">

            @foreach ($linkNav as $link)

                <li class="text-uppercase fw-bold mx-3">
                    <a href="{{ $link['href'] }}">
                        {{ $link['name']}}
                        <div class="active"></div>
                    </a>
                </li>

            @endforeach
        
        </ul>
    </div>
</div>