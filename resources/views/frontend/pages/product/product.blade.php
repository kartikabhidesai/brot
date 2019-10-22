@extends('frontend.layout.app')
@section('content')
<!-- page main wrapper start -->
<div class="shop-main-wrapper section-padding">
    <div class="container custom-container">
        <div class="row">
            <!-- product view wrapper area start -->
                <div class="shop-product-wrapper">
                    <!-- product view mode wrapper start -->
                    <div class="shop-product-wrap grid row">
                        <!-- product grid item start -->
                        @for($i = 0; $i < count($result); $i++)
                        <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4">
                            <div class="product-item mb-30">
                                <div class="product-thumb">
                                    <a href="{{ route('product-details',$result[$i]->id) }}">
                                        <img src=" {{ url('/public/uploads/product/'.$result[$i]->image) }}" height="300px" width="200px" alt="product image">
                                    </a>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="{{ route('product-details',$result[$i]->id) }}">{{ $result[$i]->productname }}</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">{{ 'INR '.$result[$i]->price }}</span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="{{ route('cart',$result[$i]->id) }}">add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endfor
                        <!-- product grid item end -->
                    </div>
                    <!-- product view mode wrapper start -->
                </div>
                <!-- start pagination area -->
<!--                <div class="paginatoin-area text-center mt-18">
                    <ul class="pagination-box">
                        <li><a class="Previous" href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a class="Next" href="#"> Next </a></li>
                    </ul>
                </div>-->
                <!-- end pagination area -->
        </div>
    </div>
</div>
<!-- page main wrapper end -->
@endsection