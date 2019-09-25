@extends('frontend.layout.app')
@section('content')
<div class="hero-area">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="hero-slider-active slider-arrow-style slick-dot-style hero-dot">
                    <div class="hero-single-slide hero-overlay">
                        <div class="hero-slider-item bg-img" data-bg="{{ url('frontend/assets/img/slider/slide-1.jpg') }}">
                            <div class="slider-content text-center">
                                <h3>Trending 2019</h3>
                                <h1>Cover Up!<br>Winter Is Coming</h1>
                                <a href="shop-grid-left-sidebar.html" class="slider-btn">shop now</a>
                            </div>
                        </div>
                    </div>

                    <div class="hero-single-slide hero-overlay">
                        <div class="hero-slider-item bg-img" data-bg="{{ url('frontend/assets/img/slider/slide-2.jpg') }}">
                            <div class="slider-content text-center">
                                <h3>trending 2018</h3>
                                <h1>cover up!<br>winter is coming</h1>
                                <a href="shop-grid-left-sidebar.html" class="slider-btn">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider area end -->

<!-- banner statistics start -->
<div class="banner-statistic-area mt-30">
    <div class="container custom-container">
        <div class="row mtn-30">
            <div class="col-md-4 col-lg-4">
                <div class="img-container img-full fix mt-30">
                    <a href="#">
                        <img src="{{ url('frontend/assets/img/banner/cms_2.1.jpg') }}" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="img-container img-full fix mt-30">
                    <a href="#">
                        <img src="{{ url('frontend/assets/img/banner/cms_2.2.jpg') }}" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="img-container img-full fix mt-30">
                    <a href="#">
                        <img src="{{ url('frontend/assets/img/banner/cms_2.3.jpg') }}" alt="banner image">
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
        <div class="row">
            <div class="col-12">
                <div class="product-carousel-5 slick-row-15">
                    <!-- product single item start -->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="{{ url('frontend/assets/img/product/product-1.jpg') }}" alt="product image">
                            </a>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                        data-toggle="tooltip" title="Quick View"><i
                                            class="ion-ios-eye-outline"></i></span> </a>
                                <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                        class="ion-ios-loop"></i></a>
                                <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                        class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$100.00</span>
                                <span class="old-price"><del>$120.00</del></span>
                            </div>
                            <div class="product-btn">
                                <a href="cart.html">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="{{ url('frontend/assets/img/product/product-2.jpg') }}" alt="product image">
                            </a>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                        data-toggle="tooltip" title="Quick View"><i
                                            class="ion-ios-eye-outline"></i></span> </a>
                                <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                        class="ion-ios-loop"></i></a>
                                <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                        class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="product-details.html">Ropo Designs Fullrich</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$90.00</span>
                                <span class="old-price"><del>$100.00</del></span>
                            </div>
                            <div class="product-btn">
                                <a href="cart.html">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="{{ url('frontend/assets/img/product/product-3.jpg') }}" alt="product image">
                            </a>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                        data-toggle="tooltip" title="Quick View"><i
                                            class="ion-ios-eye-outline"></i></span> </a>
                                <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                        class="ion-ios-loop"></i></a>
                                <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                        class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="product-details.html">Bopo Designs Roolrich</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$70.00</span>
                                <span class="old-price"><del>$80.00</del></span>
                            </div>
                            <div class="product-btn">
                                <a href="cart.html">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="{{ url('frontend/assets/img/product/product-4.jpg') }}" alt="product image">
                            </a>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                        data-toggle="tooltip" title="Quick View"><i
                                            class="ion-ios-eye-outline"></i></span> </a>
                                <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                        class="ion-ios-loop"></i></a>
                                <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                        class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="product-details.html">Pure Fashion Woolrich</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$80.00</span>
                                <span class="old-price"><del>$90.00</del></span>
                            </div>
                            <div class="product-btn">
                                <a href="cart.html">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="{{ url('frontend/assets/img/product/product-5.jpg') }}" alt="product image">
                            </a>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                        data-toggle="tooltip" title="Quick View"><i
                                            class="ion-ios-eye-outline"></i></span> </a>
                                <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                        class="ion-ios-loop"></i></a>
                                <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                        class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$50.00</span>
                                <span class="old-price"><del>$60.00</del></span>
                            </div>
                            <div class="product-btn">
                                <a href="cart.html">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->

                    <!-- product single item start -->
                    <div class="product-item">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="{{ url('frontend/assets/img/product/product-6.jpg') }}" alt="product image">
                            </a>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                        data-toggle="tooltip" title="Quick View"><i
                                            class="ion-ios-eye-outline"></i></span> </a>
                                <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                        class="ion-ios-loop"></i></a>
                                <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                        class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="product-details.html">Brot Designs Fulllrich</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$40.00</span>
                                <span class="old-price"><del>$60.00</del></span>
                            </div>
                            <div class="product-btn">
                                <a href="cart.html">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- product single item end -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slick-append text-center"></div>
            </div>
        </div>
    </div>
</div>
<!-- featured product area end -->

<!-- banner statistics start -->
<div class="banner-statistics-area">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content text-center bg-img" data-bg="{{ url('frontend/assets/img/banner/banner-bg.jpg') }}">
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
            <div class="col-xl-3 col-lg-4">
                <div class="tab-menu-vertical vertical-bdr">
                    <ul class="nav flex-column">
                        <li>
                            <a data-toggle="tab" href="#tab_one">Men Collection</a>
                        </li>
                        <li>
                            <a class="active" data-toggle="tab" href="#tab_two">Women Collection</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_three">Kids Collection</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tab_one">
                        <div class="feature-category-carousel slick-row-15">
                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-1.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$100.00</span>
                                        <span class="old-price"><del>$120.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-2.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Ropo Designs Fullrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$90.00</span>
                                        <span class="old-price"><del>$100.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-3.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Bopo Designs Roolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-4.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Pure Fashion Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-5.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.00</span>
                                        <span class="old-price"><del>$60.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="tab_two">
                        <div class="feature-category-carousel slick-row-15">
                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-6.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$100.00</span>
                                        <span class="old-price"><del>$120.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-7.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Ropo Designs Fullrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$90.00</span>
                                        <span class="old-price"><del>$100.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-8.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Bopo Designs Roolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-9.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Pure Fashion Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-10.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.00</span>
                                        <span class="old-price"><del>$60.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_three">
                        <div class="feature-category-carousel slick-row-15">
                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-1.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$100.00</span>
                                        <span class="old-price"><del>$120.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-2.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Ropo Designs Fullrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$90.00</span>
                                        <span class="old-price"><del>$100.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-3.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Bopo Designs Roolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$70.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-4.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Pure Fashion Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$80.00</span>
                                        <span class="old-price"><del>$90.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="{{ url('frontend/assets/img/product/product-5.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i
                                                    class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolrich</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.00</span>
                                        <span class="old-price"><del>$60.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="cart.html">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- product single item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature category area end -->

<!-- banner feature start -->
<div class="banner-feature-area">
    <div class="container custom-container">
        <div class="banner-feature-inner bg-navy-blue">
            <div class="row mtn-40">
                <div class="col-md-4">
                    <div class="banner-feature-item mt-40">
                        <div class="banner-feature-icon">
                            <img src="{{ url('frontend/assets/img/icon/icon-1.png') }}" alt="icon">
                        </div>
                        <div class="banner-feature-content">
                            <h4>FREE SHIPPING</h4>
                            <p>Lorem khaled ipsum is a major</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-feature-item mt-40">
                        <div class="banner-feature-icon">
                            <img src="{{ url('frontend/assets/img/icon/icon-2.png') }}" alt="icon">
                        </div>
                        <div class="banner-feature-content">
                            <h4>online support</h4>
                            <p>Lorem khaled ipsum is a major</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-feature-item mt-40">
                        <div class="banner-feature-icon">
                            <img src="{{ url('frontend/assets/img/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="banner-feature-content">
                            <h4>LIFETIME WARRANTY</h4>
                            <p>Lorem khaled ipsum is a major</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner feature end -->

<!-- latest blog area start -->
<div class="latest-blog-area section-padding">
    <div class="container custom-container">
        <div class="row">
            <div class="col-12">
                <div class="blog-carousel-active slick-row-15">
                    <!-- blog post item start -->
                    <div class="blog-post-item">
                        <figure class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="{{ url('frontend/assets/img/blog/blog-01.jpg') }}" alt="blog image">
                            </a>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By: Admin - Sep 14, 2019</p>
                            </div>
                            <h4 class="blog-title">
                                <a href="blog-details.html">Celebrity Daughter Up Opens About Having</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">Read More</a>
                        </div>
                    </div>
                    <!-- blog post item end -->

                    <!-- blog post item start -->
                    <div class="blog-post-item">
                        <figure class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="{{ url('frontend/assets/img/blog/blog-02.jpg') }}" alt="blog image">
                            </a>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By: Admin - Jan 20, 2019</p>
                            </div>
                            <h4 class="blog-title">
                                <a href="blog-details.html">Lotto Winner Offering Up Money To Any Man</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">Read More</a>
                        </div>
                    </div>
                    <!-- blog post item end -->

                    <!-- blog post item start -->
                    <div class="blog-post-item">
                        <figure class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="{{ url('frontend/assets/img/blog/blog-03.jpg') }}" alt="blog image">
                            </a>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By: Admin - Feb 15, 2019</p>
                            </div>
                            <h4 class="blog-title">
                                <a href="blog-details.html">Children Left Home Alone Fort three Days</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">Read More</a>
                        </div>
                    </div>
                    <!-- blog post item end -->

                    <!-- blog post item start -->
                    <div class="blog-post-item">
                        <figure class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="{{ url('frontend/assets/img/blog/blog-04.jpg') }}" alt="blog image">
                            </a>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By: Admin - Mar 10, 2019</p>
                            </div>
                            <h4 class="blog-title">
                                <a href="blog-details.html">People are Willing Lie When Comes Money</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">Read More</a>
                        </div>
                    </div>
                    <!-- blog post item end -->

                    <!-- blog post item start -->
                    <div class="blog-post-item">
                        <figure class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="{{ url('frontend/assets/img/blog/blog-04.jpg') }}" alt="blog image">
                            </a>
                        </figure>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <p>By: Admin - Apr 08, 2019</p>
                            </div>
                            <h4 class="blog-title">
                                <a href="blog-details.html">Lotto Winner Offering Up Money To Any Man</a>
                            </h4>
                            <a href="blog-details.html" class="read-more">Read More</a>
                        </div>
                    </div>
                    <!-- blog post item end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest blog area end -->

<!-- footer area start -->

<!-- footer area end -->

<!-- Quick view modal start -->
<div class="modal" id="quick_view">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-large-slider mb-20">
                                <div class="pro-large-img img-zoom" id="img1">
                                    <img src="{{ url('frontend/assets/img/product/product-details-img1.jpg') }}" alt="" />
                                </div>
                                <div class="pro-large-img img-zoom" id="img2">
                                    <img src="{{ url('frontend/assets/img/product/product-details-img2.jpg') }}" alt="" />
                                </div>
                                <div class="pro-large-img img-zoom" id="img3">
                                    <img src="{{ url('frontend/assets/img/product/product-details-img3.jpg') }}" alt="" />
                                </div>
                                <div class="pro-large-img img-zoom" id="img4">
                                    <img src="{{ url('frontend/assets/img/product/product-details-img4.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="pro-nav slick-row-10">
                                <div class="pro-nav-thumb"><img src="{{ url('frontend/assets/img/product/product-details-img1.jpg') }}"
                                                                alt="" /></div>
                                <div class="pro-nav-thumb"><img src="{{ url('frontend/assets/img/product/product-details-img2.jpg') }}"
                                                                alt="" /></div>
                                <div class="pro-nav-thumb"><img src="{{ url('frontend/assets/img/product/product-details-img3.jpg') }}"
                                                                alt="" /></div>
                                <div class="pro-nav-thumb"><img src="{{ url('frontend/assets/img/product/product-details-img4.jpg') }}"
                                                                alt="" /></div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="product-details-des">
                                <h3>Chaz Kangeroo Hoodies</h3>
                                <div class="pro-review">
                                    <span><a href="#">1 review(s)</a></span>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price">$70.00</span>
                                    <span class="old-price"><del>$80.00</del></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                    Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                    dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit.</p>
                                <div class="quantity-cart-box d-flex align-items-center mb-20">
                                    <div class="quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                    <div class="sqr-btn">
                                        <a href="cart.html">Add to cart</a>
                                    </div>
                                </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details inner end -->
            </div>
        </div>
    </div>
</div>
@endsection