@extends('frontend.layout.app')
@section('content')
<!-- cart main wrapper start -->
@if(count($order) == 0)
    <img src='{{ url('/frontend/assets/img/order.jpg') }}' width='100%'>
@else
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
                            <th class="pro-subtotal">Total</th>
                            <th class="pro-remove">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $subtotal = 0; $ship = 50; $shipp = 100; @endphp
                        @for($i=0;$i < count($order); $i++)    
                        @php 
                        $total = ""; 
                        $total = ($order[$i]->price)*($order[$i]->quantity); 
                        $subtotal = ($subtotal + $total);
                        @endphp
                        <tr>
                            <td class="pro-thumbnail"><img class="img-fluid" src="{{ url('/uploads/product/'.$order[$i]->image) }}"
                                                                       alt="Product"/></td>
                            <td class="pro-title">{{ $order[$i]->productname }}</td>
                            <td class="pro-price"><span>{{ 'INR '.$order[$i]->price }}</span></td>
                            <td class="pro-quantity">
                                <div>{{ $order[$i]->quantity }}</div>
                            </td>
                            <td class="pro-subtotal" id="total"><span class='remove' >{{ 'INR '.$total }}</span></td>
                            <td class="center">
                                <div class="product-btn">
                                    <a><button style="color: #FFFFFF" type="button">{{ $order[$i]->status }}</button></a>
                                </div>
                            </td>
                        </tr>
                        @endfor 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-5 ml-auto">
            <!-- Cart Calculation Area -->
            <div class="cart-calculator-wrapper">
                <div class="cart-calculate-items">
                    <h3>Amount To Be Pay</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                @php $subtotal = 0; $ship = 50; $shipp = 100; @endphp
                                @for($i=0;$i < count($order); $i++)    
                                @php 
                                $total = ""; 
                                $total = ($order[$i]->price)*($order[$i]->quantity); 
                                $subtotal = ($subtotal + $total);
                                @endphp 
                                <tr>
                                    <td>{{ $order[$i]->productname }}<strong> × {{ $order[$i]->quantity }}</strong></a></td>
                                    <td>{{ 'INR '.$order[$i]->price }}</td>
                                    <td>{{ 'INR '.$total }}</td>
                                </tr>
                                @endfor 
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><b>Amount To Be Pay...</b></td>
                                    <td colspan="2" class='text-center'>INR <b style="color: red">{{ ($subtotal) }}</b></td>
                                </tr>
                            </tfoot>
                        </table>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- cart main wrapper end -->
@endsection