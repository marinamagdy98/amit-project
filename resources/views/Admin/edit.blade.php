@extends('layouts.app')
@section('content')
@if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif

<div class="container">
    <h1>Edit product</h1>

    <form method="POST" action="{{route('Admin.update',$product->id)}}"  enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="exampleInputPassword1">old name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->product_name}}" readonly>
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">new name</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="new_name">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">old price</label>
          <input type="number" class="form-control" id="exampleInputPassword1" value="{{$product->product_price}}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">new price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="new_price">
          </div>

        <div class="form-group">
          <label for="exampleInputPassword1">old photo</label>
          <input type="photo" class="form-control" id="exampleInputPassword1" value="{{$product->product_photo}}" readonly>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">new image</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="new_image">
        </div>
      <button type="submit" class="btn btn-warning">Edit</button>
      </form>
      
</div>
@endsection