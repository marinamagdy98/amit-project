@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 mt-2">
                    <div class="product-grid">
                        <div class="product-image">
                            <a class="image">
                                <img class="pic-1"
                                    src="{{ URL::asset('upload_product') }}/{{ $product->product_photo }}">
                            </a>
                            <div class="price"> {{ $product->product_price }} </div>
                            @if (Auth::user() != 'login')
                            <form action="">
                                <a href="{{ url('add-to-cart/' . $product->id) }}" class="add-to-cart"> add to cart </a>
                            </form>
  
                            @endif
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a>{{ $product->product_name }} </a></h3>
                            <ul class="rating">
                                <a class="btn btn-primary mt-2">Buy </a>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
