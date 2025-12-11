@extends('master')
@section('content')

<div class="custom-product">

    <!-- Slider -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            @foreach ($products as $index => $item)
                <button type="button"
                    data-bs-target="#myCarousel"
                    data-bs-slide-to="{{ $index }}"
                    class="{{ $index == 0 ? 'active' : '' }}">
                </button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <a href="detail/{{ $item->id }}">
                        <img src="{{ $item->gallery }}" class="d-block w-100 slider-img">
                        <div class="carousel-caption">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <!-- Trending -->
    <div class="trending-wrapper">
        <h1>Trending Products</h1>
        @foreach ($products as $item)
            <div class="trending-item">
                <a href="detail/{{ $item->id }}">
                    <img class="trending-image" src="{{ $item->gallery }}">
                    <h3>{{ $item->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

</div>

@endsection
