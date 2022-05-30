@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <img class="pic-1"
                                    src="{{ URL::asset('upload_product') }}/{{ $product->product_photo }}">
                            </a>
                            <div class="price"> {{ $product->product_price }} </div>
                            <a href="#" class="add-to-cart"> add to cart </a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{ $product->product_name }} </a></h3>
                            <ul class="rating">
                                <a href="" class="btn btn-primary">buy</a>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
