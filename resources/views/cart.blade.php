@extends('layouts.nav')
@section('title', 'Cart')
@section('content')
    <div class="content m-5">
        @if(session('successMsg'))
            <div class="alert alert-success" role="alert" style="text-align: center">
                {{session('successMsg')}}
            </div>
        @endif
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            <?php $total = 0 ?>
            <?php $promoTotal = 0 ?>
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ $details['price'] }} tg</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }} tg</td>
                        <td>
                            <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
            <tfoot>
            <tr>
                <td><a href="{{ route('index') }}" class="btn btn-dark"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs">
                    Total: {{ $total }} tg<br>
                    @if (session()->has('coupon'))
                    Discount ({{session()->get('coupon')['name']}}): -{{session()->get('coupon')['discount']}} tg<br>
                    <hr>
                    <h4>Total: {{$total = $total - session()->get('coupon')['discount']}} tg</h4>
                    @endif
                </td>
            </tfoot>
        </table>
            @if (! session()->has('coupon'))
            <form action="{{route('coupon.store')}}" method="POST" style="width: 200px; margin-left:1000px">
                {{ csrf_field() }}
                Promo:
                <input type="text" class="form-control" id="coupon_code" placeholder="Enter promo-code" value="promo" name="coupon_code">
                <button type="submit" class="btn btn-dark">Apply</button>
            </form>
            @endif
        <center><td colspan="2"><a href="#makeOrdersection" class="btn btn-dark">Make an Order</a></td></center>
    </div>

    <div id="makeOrdersection" class="container mt-5">
        <h3>Make an Order</h3>
        <form action="{{route('storeOrder')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="fullname" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="telNum">Telephone Number:</label>
                <input type="telNum" class="form-control" id="telNum" placeholder="Enter telephone number" name="telNum">
            </div>
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                </tr>
                </thead>
                <tbody>
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        <tr>
                            <td data-th="Product">{{ $details['name'] }}</td>
                            <td data-th="Quantity">{{ $details['quantity'] }}</td>
                            <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }} tg</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

            <div class="form-group">
                <label for="total">Total:</label>
                <input type="total1" class="form-control" id="total" placeholder="Enter total" value="{{ $total }}" name="total">
            </div>
            <button type="submit" class="btn btn-dark">Make an Order</button>
        </form>
    </div>
@endsection
@section('scripts')


            <script type="text/javascript">

                $(".update-cart").click(function (e) {
                    e.preventDefault();

                    var ele = $(this);

                    $.ajax({
                        url: '{{ url('update-cart') }}',
                        method: "patch",
                        data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                });

                $(".remove-from-cart").click(function (e) {
                    e.preventDefault();

                    var ele = $(this);

                    if(confirm("Are you sure?")) {
                        $.ajax({
                            url: '{{ url('remove-from-cart') }}',
                            method: "DELETE",
                            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                            success: function (response) {
                                window.location.reload();
                            }
                        });
                    }
                });

            </script>

@endsection

