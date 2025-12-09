@extends('master')
@section('content')

<div class="custom-product">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
            @foreach ($products as $index => $item)
                <button type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="{{ $index }}"
                        class="{{ $index == 0 ? 'active' : '' }}">
                </button>
            @endforeach
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner text-center">

            @foreach ($products as $item)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $item['gallery'] }}" class="d-block mx-auto carousel-img" alt="{{ $item['name'] }}">
                    
                    <!-- Caption below image -->
                    <div class="carousel-caption-below">
                        <h3>{{ $item['name'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

</div>

@endsection
