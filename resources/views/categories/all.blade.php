@extends('layouts.app')
@section('content')
<h1 class="text-center"> Categories Dashboard</h1>
<div class="container">
<table class="table text-center">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">category</th>
    <th scope="col">Controller</th>

</tr>
</thead>
<tbody>
@foreach ($categories as $category)
<tr>
    <th scope="row">{{$category->id}}</th>
    <td>{{$category->category_name}}</td>
    <td>
        @if (Auth::user()->role_id==1)
        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
        <form action="{{route('categories.destroy',$category->id)}}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete" />
        </form>

@else
@endif
    </td>
</tr>
@endforeach
</tbody>
</table>
<a class="mt-3 btn btn-primary" href="{{route('categories.create')}}">
Add Category
</a>
</div>

@endsection