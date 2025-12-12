@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Cart List</h2>

            <a class="btn btn-success mb-3" href="/ordernow">Order Now</a>

            <div class="row justify-content-center">

                @foreach($products as $item)
                    <div class="row searched-item cart-list-devider">

                        <div class="col-sm-3">
                            <a href="/detail/{{ $item['product_id'] }}">
                                <img src="{{ $item['image'] }}"
                                     class="trending-img d-block mx-auto">
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <h2>{{ $item['name'] }}</h2>
                            <h5>Price: Rs {{ $item['price'] }}</h5>
                        </div>

                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item['product_id'] }}"
                               class="btn btn-warning">
                                Remove From Cart
                            </a>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>

@endsection
