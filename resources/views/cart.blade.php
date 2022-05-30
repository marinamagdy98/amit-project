@extends('layouts.app')

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
@section('scripts')
    <script type="text/javascript">
        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
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
    </script>
@endsection
