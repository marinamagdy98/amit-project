@extends('layouts.app')
@section('content')


    <div class="container">
        <a href="{{route('Admin.create')}}" class="btn btn-success"> Add Product</a>
        <a href="{{url('categories')}}" class="btn btn-success"> Categories</a>
        <h1>All products page<h1>
            <table class="table table-striped">
                <thead >
                  <tr>
                  
                    <th scope="col">product_name</th>
                    <th scope="col">product_price</th>
                    <th scope="col">product_photo</th>
                    <th>Control</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product )
                    <tr>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_price}}</td>
                   <td><img src="{{asset('upload_product/'.$product->product_photo) }}"></td>
                   <td>
                    @if (Auth::user()->role_id==1)

                   <a href="{{route('Admin.edit' , $product->id)}}" class="btn btn-warning"> Edit</a>
                       
                           <form method="post" action="{{route('Admin.destroy',$product->id)}}" >
                               @csrf
                               @method('DELETE')
                               <input type="submit" class="btn btn-danger" value="delete">
                           </form>
                       
                       @else 
                       @endif
                       <a href="{{route('Admin.show' , $product->id)}}" class="btn btn-primary"> show</a>
                       </td>
                    </tr>
                        
                    @endforeach
                </tbody>
              </table>
    </div>
@endsection