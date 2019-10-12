@extends('frontend.layout.app')
@section('content')
<!-- slider area start -->
<div class="hero-area">
    <div class="hero-slider-active slider-arrow-style slick-dot-style">
        <div class="hero-single-slide hero-overlay hero-overlay-black">
            <div class="hero-slider-item hero-slider-item__style-2 bg-img" data-bg="{{ url('frontend/assets/img/slider/slide-3.jpg') }}">
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
            <div class="hero-slider-item hero-slider-item__style-2 bg-img" data-bg="{{ url('frontend/assets/img/slider/slide-4.jpg') }}">
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
                        <img src=" {{ url('frontend/assets/img/banner/cms_2.4.jpg') }}" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container img-full fix mt-30">
                    <a href="#">
                        <img src=" {{ url('frontend/assets/img/banner/cms_2.5.jpg') }}" alt="banner image">
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
                            <a href="product-details.html">
                                <img src="{{ url('/uploads/product/'.$result[$i]->image) }}" height="250px" width="200px" alt="product image">
                            </a>
                            <div class="product-action-link ">
                                <a href="#" data-toggle="modal"  data-target="#quick_view" class="zoomimage" data-id="{{ $result[$i]->id }}"> <span
                                        data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                            </div>
                        </div>
                        <div class="product-description text-center">
                            <div class="product-name">
                                <h3><a href="product-details.html">{{ $result[$i]->productname }}</a></h3>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">{{ 'INR '.$result[$i]->price }}</span>
                            </div>
                            <div class="product-btn">
                                <a href="{{ route('cart') }}">add to cart</a>
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
<div class="banner-statistics-area bg-img" data-bg="{{ url('frontend/assets/img/banner/banner-bg.jpg') }}">
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
                                        <img src=" {{ url('frontend/assets/img/product/product-1.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-2.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-3.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Bopo Designs Roolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-4.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Pure Fashion Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-5.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-6.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-7.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-8.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Bopo Designs Roolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-9.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Pure Fashion Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-10.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-1.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-2.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-3.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Bopo Designs Roolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-4.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Pure Fashion Woolri</a></h3>
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
                                        <img src=" {{ url('frontend/assets/img/product/product-5.jpg') }}" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="compare.html" data-toggle="tooltip" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                        <a href="wishlist.html" data-toggle="tooltip" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Dopo Designs Woolri</a></h3>
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
<div class="banner-feature-area bg-navy-blue">
    <div class="container">
        <div class="banner-feature-inner">
            <div class="row mtn-40">
                <div class="col-md-4">
                    <div class="banner-feature-item mt-40">
                        <div class="banner-feature-icon">
                            <img src=" {{ url('frontend/assets/img/icon/icon-1.png') }}" alt="icon">
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
                            <img src=" {{ url('frontend/assets/img/icon/icon-2.png') }}" alt="icon">
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
                            <img src=" {{ url('frontend/assets/img/icon/icon-3.png') }}" alt="icon">
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