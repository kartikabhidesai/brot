@extends('frontend.layout.app')
@section('content')
@foreach($result as $value)
@endforeach
<!-- page main wrapper start -->
<div class="modal-content">
    <div class="modal-body">
        <a href='{{ URL::previous() }}'><i class="fa fa-arrow-left fa-lg" aria-hidden="true" ></i></a>
        <!-- product details inner end -->
        <div class="product-details-inner">
            <div class="row">
                <div class="col-lg-3">
                    <img src=" {{ url('uploads/product/'.$value->image) }}" alt="">
                    <div class="product-large-slider mb-20 slick-initialized slick-slider">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-details-des">
                        <h3>{{ $value->productname }}</h3>
                        <div class="pro-review">
                            <span><a href="#">1 review(s)</a></span>
                        </div>
                        <div class="price-box">
                            <span class="regular-price">{{ 'INR '.$value->price }}</span>
                        </div>
                        <p>{{ $value->description }}</p>
                        <div class="quantity-cart-box d-flex align-items-center mb-20">
                            <div class="quantity">
                                <div class="pro-qty"><span class="dec qtybtn">-</span><input type="text" value="1"><span class="inc qtybtn">+</span></div>
                            </div>
                        </div>
                        <div class="sqr-btn">
                            <a href="cart.html">Add to cart</a>
                        </div><br><br>
                        <div class="availability mb-20">
                            <h5>Availability:</h5>
                            <span>In Stock</span>
                        </div>
                        <div class="share-icon">
                            <h5>Share:</h5>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div><br>
                        <div class="product-review-info">
                            <ul class="nav review-tab">
                                <li>
                                    <a data-toggle="tab" href="#tab_one">description</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_two">information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_two">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>size</td>
                                <td>{{ $result[0]->size }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab_one">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>{{ $result[0]->description }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- product details inner end -->
    </div>
</div>
<!-- page main wrapper end -->  
@endsection