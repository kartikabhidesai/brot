@extends('frontend.layout.app')
@section('content')
<!-- slider area start -->
<div class="hero-area">
    <div class="hero-slider-active slider-arrow-style slick-dot-style">
        <div class="hero-single-slide hero-overlay hero-overlay-black">
            <div class="hero-slider-item hero-slider-item__style-2 bg-img" data-bg="{{ url('public/frontend/assets/img/slider/slide-3.jpg') }}">
                <div class="container">
                    <div class="slider-content">
                        <h3>Trending 2019</h3>
                        <h1>Cover Up!<br>Winter Is Coming</h1>
                        <a href="shop-grid-left-sidebar.html" class="slider-btn slider-btn__white">shop now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-single-slide hero-overlay hero-overlay-black">
            <div class="hero-slider-item hero-slider-item__style-2 bg-img" data-bg="{{ url('public/frontend/assets/img/slider/slide-4.jpg') }}">
                <div class="container">
                    <div class="slider-content">
                        <h3>trending 2018</h3>
                        <h1>cover up!<br>winter is coming</h1>
                        <a href="shop-grid-left-sidebar.html" class="slider-btn slider-btn__white">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider area end -->

<!-- banner statistics start -->
<div class="banner-statistic-area section-padding pb-0">
    <div class="container">
        <div class="row mtn-30">
            <div class="col-md-6">
                <div class="img-container img-full fix mt-30">
                    <a href="#">
                        <img src=" {{ url('public/frontend/assets/img/banner/cms_2.4.jpg') }}" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container img-full fix mt-30">
                    <a href="#">
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
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="{{ url('/public/uploads/product/'.$result[$i]->image) }}">{{ $result[$i]->productname }}</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">{{ 'INR '.$result[$i]->price }}</span>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('cart',$result[$i]->id) }}">add to cart</a>
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
                    <a href="shop-grid-left-sidebar.html" class="shop-btn">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner statistics end -->

<!-- feature category area start -->
<div class="feature-category-vertical section-padding">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center pb-44">
                    <p>Available Now</p>
                    <h2>popular items</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="tab-menu-vertical vertical">
                    <ul class="nav flex-column">
                        <li>
                            <a data-toggle="tab" href="#tab_one" class="men">Men Collection</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_four" class="women">Women Collection</a>
                        </li>
                        <li>
                            <a class="active" data-toggle="tab" href="#tab_two">All Collection</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_three" class="kids">Kids Collection</a>
                        </li>
                    </ul>
                </div>
            </div>  
            
        </div>
    </div>
</div>
<!-- feature category area end -->

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