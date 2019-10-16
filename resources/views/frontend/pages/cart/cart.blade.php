@extends('frontend.layout.app')
@section('content')
<!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">{{ csrf_field() }}
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Thumbnail</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i=0;$i < count($result); $i++)    
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ url('/uploads/product/'.$result[$i]->image) }}"
                                                                            alt="Product"/></a></td>
                                <td class="pro-title"><a href="#">{{ $result[$i]->productname }}</a></td>
                                <td class="pro-price"><span>{{ 'INR '.$result[$i]->price }}</span></td>
                                <td class="pro-quantity">
                                    <div class="pro-qty" id='multiple'><input type="text" value="1" id='kontity'></div>
                                </td>
                                <td class="pro-subtotal subtotal" id="total" value="{{ $result[$i]->price }}"><span class='remove' >{{ 'INR '.$result[$i]->price }}</span></td>
                                <td class="center">
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{ $result[$i]->id }}" class="delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endfor 
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <input type="text" placeholder="Enter Your Coupon Code" required />
                                <button class="sqr-btn">Apply Coupon</button>
                            </form>
                        </div>
                        <div class="cart-update mt-sm-16">
                            <a href="#" class="sqr-btn">Update Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>$230</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>$70</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount">$300</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <a href="{{ route('checkout') }}" class="sqr-btn d-block">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
@endsection