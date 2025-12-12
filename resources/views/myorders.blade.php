@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">

            <h2>Order List</h2>
            <a href="/ordernow">Order Now</a>

            <div class="row justify-content-center">

                @foreach($orders as $item)
                    <div class="row searched-item cart-list-devider">

                        <!-- IMAGE -->
                        <div class="col-sm-3">
                            <a href="/detail/{{ $item->product_id }}">
                                <img src="{{ $item->gallery }}" 
                                     class="trending-img d-block mx-auto">
                            </a>
                        </div>

                        <!-- DETAILS -->
                        <div class="col-sm-6">
                            <h3>{{ $item->name }}</h3>
                            <h5>Delivery Status : {{ $item->status }}</h5>
                            <h5>Payment Status : {{ $item->payment_status }}</h5>
                            <h5>Payment Method : {{ $item->payment_method }}</h5>
                            <h5>Delivery Address : {{ $item->address }}</h5>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>

@endsection
