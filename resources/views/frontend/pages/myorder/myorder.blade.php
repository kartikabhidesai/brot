@extends('frontend.layout.app')
@section('content')
<!-- cart main wrapper start -->

 <div class="checkout-page-wrapper section-padding">
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
                            <th class="pro-title">Order Id</th>
                            <th class="pro-price">Price</th>
                            <th class="pro-quantity">Quantity</th>
                            <th class="pro-quantity">Size</th>
                            <th class="pro-subtotal">Total</th>
                            <th class="pro-remove">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $subtotal = 0; $ship = 50; $shipp = 100; 
                        @endphp
                        @if(count($order) > 0)
                                
                                    @for($i=0;$i < count($order); $i++)    
                                        @php 
                                            $total = 0; 
                                            if($order[$i]->status == 'pending' || $order[$i]->status == 'confirm'){
                                                    $total = ($order[$i]->price)*($order[$i]->quantity); 
                                            }
                                        $subtotal = ($subtotal + $total);
                                    @endphp
                                <tr>
                                    <td class="pro-thumbnail"><img class="img-fluid" src="{{ url('/public/uploads/product/'.$order[$i]->image) }}"
                                                                               alt="Product"/></td>
                                    <td class="pro-title">{{ $order[$i]->productname }}</td>
                                    <td class="pro-price"><span>{{ $order[$i]->orderid }}</span></td>
                                    <td class="pro-price"><span>{{ 'INR '.$order[$i]->price }}</span></td>
                                    <td class="pro-quantity">
                                        <div>{{ $order[$i]->quantity }}</div>
                                    </td>
                                    <td class="pro-price"><span>{{ $order[$i]->size }}</span></td>
                                    @if($order[$i]->status == 'pending')
                                    <td class="pro-subtotal" id="total"><span class='remove' >{{ 'INR '.$total }}</span></td>
                                    <td class="center">
                                        <div class="product-btn">
                                            <a><b style='color: #FFFFDF' >{{ $order[$i]->status }}</b></a>
                                        </div>
                                    </td>
                                    @elseif($order[$i]->status == 'confirm')
                                    <td class="pro-subtotal" id="total"><span class='remove' >{{ 'INR '.$total }}</span></td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <a class='btn btn-success'>{{ $order[$i]->status }}</a>
                                        </div>
                                    </td>
                                    @else
                                    <td class="pro-subtotal" id="total"><span class='remove' >-</span></td>
                                    <td class="center">
                                        <div class="btn-group">
                                            <a class='btn btn-danger'>{{ $order[$i]->status }}</a>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                @endfor 
                            @else
                                <tr>
                                    <td class="pro-thumbnail" colspan="7"> No any Itema in your cart</td>
                                </tr>
                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br><br>
    @if($subtotal != 0)
    <div class="row">
        <div class="col-lg-5 ml-auto">
            <!-- Cart Calculation Area -->
            <div class="cart-calculator-wrapper">
                <div class="cart-calculate-items">
                    <h3>Total Amount</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
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
    @endif
    </div>
 </div>
<!-- cart main wrapper end -->
@endsection