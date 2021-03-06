@extends('frontend.layout.app')
@section('content')
<!-- slider area start -->
<div class="hero-area">
    <div class="hero-slider-active slider-arrow-style slick-dot-style">
        @foreach($getSlider as $key => $value)
        <div class="hero-single-slide hero-overlay hero-overlay-black">
            <div class="hero-slider-item hero-slider-item__style-2 bg-img" data-bg="{{ url('public/uploads/slider/'.$value['image']) }}">
                <div class="container">
                    <div class="slider-content">
                        <h3>{{ $value['title'] }}</h3>
                        <h1>{{ $value['text'] }}</h1>
                        <a href="{{ route('product') }}" class="slider-btn slider-btn__white">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- slider area end -->

<!-- banner statistics start -->
<div class="banner-statistic-area section-padding pb-0">
    <div class="container">
        <div class="row mtn-30">
            <div class="col-md-6">
                <div class="img-container img-full fix mt-30">
                    <a href="{{ route('product') }}">
                        <img src=" {{ url('public/frontend/assets/img/banner/cms_2.4.jpg') }}" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container img-full fix mt-30">
                    <a href="{{ route('product') }}">
                        <img src=" {{ url('public/frontend/assets/img/banner/cms_2.5.jpg') }}" alt="banner image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner statistics end -->

<!-- featured product area start -->
<div class="new-product section-padding">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <p>Available Now</p>
                    <h2>New Products</h2>
                </div>
            </div>
        </div>
        <div class="row mtn-30">{{ csrf_field() }}
            <div class="col-12">
                <div class="product-carousel-5 slick-row-15">
                    <!-- product single item start -->
                    @for($i=0;$i < count($result); $i++)
                    <div class="product-item mt-30">
                        <div class="product-thumb">
                            <a href="{{ route('product-details',$result[$i]->id) }}">
                                <img src="{{ url('/public/uploads/product/'.$result[$i]->image) }}" height="250px" width="200px" alt="product image">
                            </a>
                            <div class="product-action-link">
                                <a href="{{ route('product-details',$result[$i]->id) }}" > <span data-toggle="tooltip" title="" data-original-title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                <a href="javascript:;" data-toggle="tooltip" title="" data-original-title="Wishlist" tabindex="-1"><i class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="{{ url('/public/uploads/product/'.$result[$i]->image) }}">{{ $result[$i]->productname }}</a></h3>
                            </div>
                            <div class="price-box">

                                @if($result[$i]->discount_type == 'F')
                                @php
                                $finalPrice = $result[$i]->price - $result[$i]->discount;
                                @endphp
                                @elseif($result[$i]->discount_type == 'P')
                                @php
                                $final = ($result[$i]->price * $result[$i]->discount) / 100;
                                $finalPrice = $result[$i]->price - $final;
                                @endphp
                                @endif
                                <span class="regular-price">{{ 'INR '.$finalPrice }}</span>
                                <span class="old-price"><del>{{ 'INR '.$result[$i]->price }}</del></span>
                            </div>
                            <div>
                                @php
                                $sizearray = explode(",",$result[$i]->size);
                                $sizeidarray = explode(",",$result[$i]->sizeid);
                                @endphp
                                <select name="size" id="size" class="size">
                                    <option value=''>Select Size</option>
                                    @for($j = 0; $j < sizeof($sizearray); $j++)
                                    <option value='{{ $sizeidarray[$j] }}'>{{ $sizearray[$j] }}</option>
                                    @endfor
                                </select>
                            </div>
                            <br><br><br>
                            <div class="product-btn">
                                <a data-id="{{ $result[$i]->id }}" class="addtocart ">add to cart</a>
                            </div>
                        </div>
                    </div>
                    @endfor 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- featured product area end -->
<!-- banner statistics start -->
<div class="banner-statistics-area bg-img" data-bg="{{ url('public/frontend/assets/img/banner/banner-bg.jpg') }}">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content text-center">
                    <h2 class="banner-title">Every Piece Comes With</h2>
                    <h5 class="banner-subtitle">All Products Sale Up To <span>40% Off</span></h5>
                    <a href="{{ route('product') }}" class="shop-btn">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- banner statistics end -->

<!-- Quick view modal start -->
<div class="modal" id="quick_view">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body productmodel">

            </div>
        </div>
    </div>
</div>
<!-- Quick view modal end -->
@endsection