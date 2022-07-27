<div>
    <div class="my-card">
        <div class="card-img">
            <a href="{{ route('home.show', $fumetto['id']) }}">
                <img src="{{ $fumetto['thumb'] }}">
            </a>
        </div>
        
        <div class="card-title">{{ $fumetto['title'] }}</div>
    </div>
</div>