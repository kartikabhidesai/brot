@php
$currRoute = Route::current()->getName();
@endphp
<header>
        <!-- main menu area start -->
        <div class="header-main sticky">
            <div class="container custom-container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-2 col-md-6 col-6 position-static">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                              <img src="{{ url('frontend/assets/img/logo/logo.png') }}" alt="Brand logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block position-static">
                        <div class="main-header-inner">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="nav-link {{ ($currRoute == 'home' || $currRoute == 'my-account' || $currRoute == 'checkout')  ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="nav-link {{ ($currRoute == 'product')  ? 'active' : '' }}"><a href="{{ route('product') }}">Product</a></li>
                                        <li class="nav-link {{ ($currRoute == 'contact-us')  ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 ml-auto position-static">
                        <div class="header-setting-option setting-style-2">
                            <div class="user-account">
                                <div class="user-icon">
                                    <a  href="{{ route('login') }}">
                                        <i class="ion-ios-person fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="header-mini-cart">
                                <div class="mini-cart-btn">
                                    <i class="ion-bag"></i>
                                    <span class="cart-notification">2</span>
                                </div>
                                <ul class="cart-list">
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html"><img src=" {{ url('frontend/assets/img/cart/cart-1.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="product-details.html">simple product 09</a></h4>
                                            <span>$60.00</span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-img">
                                            <a href="product-details.html"><img src=" {{ url('frontend/assets/img/cart/cart-2.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="cart-info">
                                            <h4><a href="product-details.html">virtual product 10</a></h4>
                                            <span>$50.00</span>
                                        </div>
                                        <div class="del-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </li>
                                    <li class="mini-cart-price">
                                        <span class="subtotal">Subtotal : </span>
                                        <span class="subtotal-price ml-auto">$110.00</span>
                                    </li>
                                    <li class="checkout-btn">
                                        <a href="{{ route('cart') }}">CART</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu area end -->

        <!-- Start Search Popup -->
        <div class="box-search-content search_active block-bg close__top">
            <form class="minisearch" action="#">
                <div class="field__search">
                    <input type="text" placeholder="Search Our Catalog">
                    <div class="action">
                        <a href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </form>
            <div class="close__wrap">
                <span>close</span>
            </div>
        </div>
        <!-- End Search Popup -->
    </header>
    <!-- header area end -->