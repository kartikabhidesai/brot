@extends('frontend.layout.app')
@section('content')
<!-- checkout main wrapper start -->
<div class="row">
    <div class="col-md-2"> </div>
    <div class="col-md-8">
        <div class="container custom-container">
            <!-- Checkout Billing Details -->
            <form action="{{ route('checkout') }}" method="post" id="checkoutform">{{ csrf_field() }}
                <div class="checkout-billing-details-wrap">
                    <h2><b>Billing Details</b></h2>
                    <div class="billing-form-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="fname" class="required">First Name</label>
                                    <input type="text" id="fname" placeholder="First Name"  value="{{ $customer[0]->fname }}" name="fname" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="lname" class="required">Last Name</label>
                                    <input type="text" id="lname" placeholder="Last Name"  value="{{ $customer[0]->lname }}" name="lname" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="single-input-item">
                            <label for="phone" class="required">Mobile</label>
                            <input type="text" id="mobile"  placeholder="Mobile" value="{{ $customer[0]->mobile }}" name="mobile" class="form-control"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="country" class="required">Country</label>
                                    <input type="text" id="country" placeholder="country"  name="country" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="State" class="required">State</label>
                                    <input type="text" id="state" placeholder="State"  name="state" class="form-control"/>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="city" class="required">City</label>
                                    <input type="text" id="city" placeholder="city"  name="city" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="pincode" class="required">Pincode</label>
                                    <input type="text" id="pincode"  placeholder="Pincode"  name="pincode" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="appartment">Appartment</label>
                                    <input type="text" id="appartment" placeholder="appartment">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <label for="street">Street</label>
                                    <input type="text" id="street" placeholder="street" >
                                </div>
                            </div>
                        </div>  
                        <div class="single-input-item">
                            <label for="address" class="required">Address</label>
                            <input type="text" id="address" placeholder="Address"  name="address" class="form-control"/>
                        </div>
                    </div>
                </div><br>

                <!-- Order Summary Details -->
                <div class="order-summary-details">
                    <h2><b>Your Order Summary</b></h2>
                    <div class="order-summary-content">
                        <!-- Order Summary Table -->
                        <div class="order-summary-table table-responsive text-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Products</th>
                                        <th>Size</th>
                                        <th>Price</th>
                                        <th>Total</th>
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
                                        <td><a href="{{ route('product-details',$customer[0]->id) }}">{{ $cart[$i]->productname }}<strong> × {{ $cart[$i]->quantity }}</strong></a></td>
                                        <td>{{ $cart[$i]->size }}</td>
                                        <td>{{ 'INR '.$cart[$i]->price }}</td>
                                        <td>{{ 'INR '.$total }}</td>
                                    </tr>
                                    @endfor 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Total Amount</td>
                                        <td colspan="3">INR <b style="color: red">{{ ($subtotal) }}</b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- Order Payment Method -->
                        <div class="order-payment-method">
                            <div class="single-payment-method show">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked  />
                                        <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                    </div>
                                </div>
                                <div class="payment-method-details" data-method="cash">
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                            </div>
                            <div class="summary-footer-area">
                                <button type="submit" class="check-btn sqr-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-2"> </div>
</div>
<!-- checkout main wrapper end -->
@endsection