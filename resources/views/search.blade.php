@extends('master')
@section('content')

<div class="custom-product">

    <div class="row">

        <div class="col-sm-4">
            <a href="#">Filter</a>
        </div>

        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>

                <div class="row justify-content-center">

                    @foreach($products as $item)
                        <div class="searched-item text-center">
                            <a href="detail/{{$item['id']}}">
                                
                                <img src="{{ $item['gallery'] }}" 
                                     class="trending-img d-block mx-auto">

                                <div>
                                    <h2>{{ $item['name'] }}</h2>
                                    <h5>{{ $item['description'] }}</h5>
                                </div>

                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>

</div>

@endsection
