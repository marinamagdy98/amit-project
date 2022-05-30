@extends('layouts.app')
@section('content')
    @if (session('add'))
        <div class="alert alert-success">
            {{ session('add') }}
        </div>
    @endif
    <div class="container">
        <h1 class="text-center">create product<h1>
                <form method="POST" action="{{ route('Admin.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product price</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="product_price">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Categories</label>
                      <select class="form-select" aria-label="Default select example" name="category_name">
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                          @endforeach
                      </select>
                  </div>                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Photo</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="product_photo">
                    </div>
                    <button type="submit" class="btn btn-success">Add Product</button>
                </form>
    </div>
@endsection
