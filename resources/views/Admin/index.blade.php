@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('Admin.create') }}" class="btn btn-success"> Add Product</a>
        <a href="{{ url('categories') }}" class="btn btn-success"> Categories</a>
        <h1>All products page<h1>
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">product_name</th>
                            <th scope="col">product_price</th>
                            <th scope="col">product_photo</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td ><img src="{{ asset('upload_product/' . $product->product_photo) }}"  ></td>
                                <td>
                                    @if (Auth::user()->role_id == 1)
                                        <a href="{{ route('Admin.edit', $product->id) }}" class="btn btn-warning"> Edit</a>

                                        {{-- Admin.remove --}}
                                        @if ($product->id ==session('confirm') )
                                            @if ($product->id == session('confirm'))
                                                <div class="alert alert-danger">
                                                    <p>Are you sure you want to delete! </p>

                                                </div>
                                            @endif

                                            <form method="post" action="{{ route('Admin.destroy', $product->id) }}"
                                                data-id="{{ $product->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="product-delete btn btn-danger"
                                                    value="confirm delete">
                                            </form>
                                        @else
                                            <a href="{{ route('Admin.remove', $product->id) }}"
                                                class="btn btn-danger">delete</a>
                                        @endif
                                    @else
                                    @endif
                                    <a href="{{ route('Admin.show', $product->id) }}" class="btn btn-primary"> show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
    {{-- <script type="text/javascript">
        $(".product-delete").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ route('Admin.destroy',$product->id) }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script> --}}
@endsection
