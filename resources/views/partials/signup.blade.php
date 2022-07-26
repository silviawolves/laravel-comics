@php
$socialArray = [
        [
            'name' => 'Facebook',
            'image' => 'img/footer-facebook.png',
        ],
        [
            'name' => 'Twitter',
            'image' => 'img/footer-twitter.png',
        ],
        [
            'name' => 'Youtube',
            'image' => 'img/footer-youtube.png',
        ],
        [
            'name' => 'Pinterest',
            'image' => 'img/footer-pinterest.png',
        ],
        [
            'name' => 'Periscope',
            'image' => 'img/footer-periscope.png',
        ],
    ]
@endphp

<div>
    <div class="sign-up">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="btn btn-outline-primary rounded-0 text-uppercase text-white">Sign-up now!</button>

            <div class="links text-primary text-uppercase fw-bold">
                <span class="pe-2">Follow Us</span>

                <a href="javascript.void(0)">

                    @foreach ($socialArray as $social)
                        <img src="{{ $social['image'] }}" class="ps-3">
                    @endforeach
                    
                </a>
                
            </div>

        </div>
    </div>
</div>