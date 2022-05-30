@extends('layouts.app')
@section('content')
<h1 class="text-center">Edit {{$category->category}}'s Name </h1>
<div class="container">
        <form method="post" action="{{route('categories.update',$category->id)}}">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control" name="category" value="{{$category->category_name}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection