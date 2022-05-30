@extends('layouts.app')
@section('content')
@if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif

<div class="container">
    <h1>Edit product</h1>
    <form method="POST" action="{{route('Admin.update',$product->id)}}" >
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="exampleInputPassword1">old price</label>
          <input type="number" class="form-control" id="exampleInputPassword1" value="{{$product->product_price}}" readonly>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">new price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="new_price">
          </div>
        <button type="submit" class="btn btn-warning">Edit</button>
      </form>
</div>
@endsection