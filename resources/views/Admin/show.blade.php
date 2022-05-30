@extends('layouts.app')
@section('content')
@if (session('add'))
    <div class="alert alert-success">
        {{ session('add') }}
    </div>
@endif
<div class="container">
    <h1 class="text-center">Show product<h1>
            <div class="form-group">
              <label for="exampleInputEmail1">Product name</label>
              <input disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->product_name}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Product price</label>
              <input disabled type="number" class="form-control" id="exampleInputPassword1"  value="{{$product->product_price}}">
            </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Product Photo</label>
                    <img class="pic-1" src="{{URL::asset('upload_product')}}/{{$product->product_photo}}">
              </div>
</div>
@endsection