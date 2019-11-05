@extends('frontend.layout.app')
@section('content')
<!-- cart main wrapper start -->
@if(count($cart) == 0)
<img src='{{ url('/public/frontend/assets/img/empty_cart.jpg') }}' width='100%'>
@else
<div class="cart-main-wrapper section-padding">
    <div class="container custom-container">
        <div class="row">
        <div class="col-lg-12">
            <!-- Cart Table Area -->
            <div class="cart-table table-responsive">
                <table class="table table-bordered" name="mytable">{{ csrf_field() }}
                    <thead>
                        <tr>
                            <th class="pro-thumbnail">Thumbnail</th>
                            <th class="pro-title">Product</th>
                            <th class="pro-price">Price</th>
                            <th class="pro-quantity">Quantity</th>
                            <th class="pro-quantity">Size</th>
                            <th class="pro-subtotal">Total</th>
                            <th class="pro-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $subtotal = 0; $ship = 50; $shipp = 100; @endphp
                        @for($i=0;$i < count($cart); $i++)    
                        @php 
                        $total = ""; 
                        $total = ($cart[$i]->price)*($cart[$i]->quantity); 
                        $subtotal = ($subtotal + $total);
                        @endphp 
                        <tr>
                            <td class="pro-thumbnail"><a href="{{ route('product-details',$cart[$i]->id) }}"><img class="img-fluid" src="{{ url('/public/uploads/product/'.$cart[$i]->image) }}"
                                                                       alt="Product"/></a></td>
                            <td class="pro-title"><a href="{{ route('product-details',$cart[$i]->id) }}">{{ $cart[$i]->productname }}</a></td>
                            <td class="pro-price"><span>{{ 'INR '.$cart[$i]->price }}</span></td>
                            <td class="pro-quantity">
                                <div class="pro-qty" id='multiple' data-productid="{{ $cart[$i]->id }}" data-productrate="{{ $cart[$i]->price }}"><input type="text" min="0.00000001" class="quantity" value="{{ $cart[$i]->quantity }}"></div>
                            </td>
                            <td class="pro-subtotal" id="total"><span class='remove' >{{ $cart[$i]->size }}</span></td>
                            <td class="pro-subtotal" id="total"><span class='remove' >{{ 'INR '.$total }}</span></td>
                            <td class="center">
                                <a data-toggle="modal" data-target="#deletemodal" data-id="{{ $cart[$i]->id }}" class="delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endfor 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
        <div class="row">
        <div class="col-lg-5 ml-auto">
            <!-- Cart Calculation Area -->
            <div class="cart-calculator-wrapper">
                <div class="cart-calculate-items">
                    <h3>Cart Totals</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total Amount</td>
                                    <td colspan="2" class='text-center'>INR <b style="color: red">{{ ($subtotal) }}</b></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <a href="{{ route('checkout') }}" class="sqr-btn d-block">Proceed To Checkout</a><br>
            </div>
        </div>
    </div>
</div>
</div>
@endif
<!-- cart main wrapper end -->
@endsection