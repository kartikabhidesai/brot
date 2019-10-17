@php
$currRoute = Route::current()->getName();
$items = Session::get('logindata');
@endphp
<header>
    <!-- main menu area start -->
    <div class="header-main sticky">
        <div class="container custom-container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-2 col-md-6 col-6 position-static">
                    @if($items == '')
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ url('frontend/assets/img/logo/logo.png') }}" alt="Brand logo">
                        </a>
                    </div>
                    @else
                    <h3> {{  $items[0]['fname'] }} </h3>
                    @endif
                </div>
                <div class="col-lg-8 d-none d-lg-block position-static">
                    <div class="main-header-inner">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="nav-link {{ ($currRoute == 'home' || $currRoute == 'front-dashboard')  ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="nav-link {{ ($currRoute == 'product')  ? 'active' : '' }}"><a href="{{ route('product') }}">Product</a></li>
                                    <li class="nav-link {{ ($currRoute == 'contact-us')  ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-6 ml-auto position-static">
                    <div class="header-setting-option setting-style-2">
                        @if ($items == '') 
                            @if($currRoute != "login")
                            <div class="user-account">
                                <div class="user-icon">
                                    <a  href="{{ route('login') }}">
                                        <i class="ion-ios-person fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                            @endif  
                        @else
                        <div class="user-account">
                            <div class="user-icon">
                                <a  href="{{ route('front-logout') }}">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        @if($currRoute != "cart-list" && $currRoute != "cart")
                        <div class="header-mini-cart">
                            <div class="mini-cart-btn">
                                <i class="ion-bag"></i>
                                <span class="cart-notification">{{ count($cart) }}</span>
                            </div>
                            <ul class="cart-list">
                                @for($i = 0;$i < count($cart); $i++)
                                <li>
                                    <div class="cart-img">
                                        <a href="product-details.html"><img src="{{ url('/uploads/product/'.$cart[$i]->image) }}"
                                                                            alt=""></a>
                                    </div>
                                    <div class="cart-info">
                                        <h4><a href="product-details.html">{{ $cart[$i]->productname }}</a></h4>
                                        <span>{{ 'INR '.$cart[$i]->price }}</span>
                                    </div>
                                    <div class="del-icon">
                                        <a data-toggle="modal" data-target="#deletemodal" data-id="{{ $cart[$i]->id }}" class="delete"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                @endfor
                                <li class="checkout-btn">
                                    <a href="{{ route('cart-list') }}">CART</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu area end -->
</header>
<!-- header area end -->