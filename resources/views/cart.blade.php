@extends('layouts.app')
@if (session('removeItem'))
    <div class="alert alert-warning">
        {{ session('removeItem') }}
    </div>
@endif

@section('content')
    <table id="cart" class="container table  ">
        <thead>
            <tr>
                <th>image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Controls</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0; ?>
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    <?php $total += $details['product_price'] * $details['quantity']; ?>
                    <tr>

                        <td>
                            <div class="col-sm-3"><img
                                    src="{{ URL::asset('upload_product') }}/{{ $details['product_photo'] }}" width="100"
                                    height="100" class="img-responsive" /></div>
                        </td>
                        <td>{{ $details['product_name'] }}</td>
                        <td>{{ $details['product_price'] }}</td>
                        <td>
                            {{ $details['quantity'] }}
                          
                        </td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm remove-from-cart   " data-id="{{ $id }}"><i
                                    class="fa fa-trash-o"></i></button>
                             <a href="{{route('removeFromCard',$id)}}" class="btn btn-danger">remove one</a>
                        </td>
                        
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                        Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
            </tr>
        </tfoot>
    </table>
@endsection

