@extends('frontend.layout.app')
@section('content')
<!-- page main wrapper start -->
<div class="shop-main-wrapper section-padding">
    <div class="container custom-container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 order-2 order-lg-1">
                <div class="sidebar-wrapper">
                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>shop</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="sidebar-category">
                                <li><a href="#">health & beauty</a>
                                    <ul class="children">
                                        <li><a href="#">skateboard</a></li>
                                        <li><a href="#">surfboard</a></li>
                                        <li><a href="#">accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">makeup</a>
                                    <ul class="children">
                                        <li><a href="#">Samsome</a></li>
                                        <li><a href="#">GL Stylus</a></li>
                                        <li><a href="#">Uawei</a></li>
                                        <li><a href="#">Cherry Berry</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">skincare</a>
                                    <ul class="children">
                                        <li><a href="#">Power Bank</a></li>
                                        <li><a href="#">Data Cable</a></li>
                                        <li><a href="#">Power Cable</a></li>
                                        <li><a href="#">Battery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">jewelry</a>
                                    <ul class="children">
                                        <li><a href="#">Desktop Headphone</a></li>
                                        <li><a href="#">Mobile Headphone</a></li>
                                        <li><a href="#">Wireless Headphone</a></li>
                                        <li><a href="#">LED Headphone</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>category</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="price-container">
                                <li class="active"> 
                                    <label class="checkbox-container">
                                        Health (10)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li> 
                                    <label class="checkbox-container">
                                        beauty (16)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li> 
                                    <label class="checkbox-container">
                                        makeup (10)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li> 
                                    <label class="checkbox-container">
                                        skincare (9)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>price</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="price-container">
                                <li class="active"> 
                                    <label class="radio-container">
                                        $20.00 - $21.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li> 
                                    <label class="radio-container">
                                        $26.00 - $30.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li> 
                                    <label class="radio-container">
                                        $48.00 - $50.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li> 
                                    <label class="radio-container">
                                        $100.00 - $200.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li> 
                                    <label class="radio-container">
                                        $200.00 - $500.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="advertising-thumb fix">
                            <a href="#">
                                <img src=" {{ url('frontend/assets/img/banner/advertising.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- single sidebar end -->
                </div>
            </div>
            <!-- product view wrapper area start -->
            <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                <div class="shop-product-wrapper">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="top-bar-left">
                                    <div class="product-view-mode">
                                        <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                        <!--<a href="#" data-target="list"><i class="fa fa-list"></i></a>-->
                                    </div>
                                    <div class="product-amount">
                                        <p>Showing 1–16 of 21 results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="top-bar-right">
                                    <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby" disabled>
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->
                    <!-- product view mode wrapper start -->
                    <div class="shop-product-wrap grid row">
                        <!-- product grid item start -->
                        @for($i = 0; $i < count($result); $i++)
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                            <div class="product-item mb-30">
                                <div class="product-thumb">
                                    <a href="{{ route('product-details',$result[$i]->id) }}">
                                        <img src=" {{ url('uploads/product/'.$result[$i]->image) }}" alt="product image">
                                    </a>
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
                        </div> 
                        @endfor
                        <!-- product grid item end -->
                    </div>
                    <!-- product view mode wrapper start -->
                </div>
                <!-- start pagination area -->
                <div class="paginatoin-area text-center mt-18">
                    <ul class="pagination-box">
                        <li><a class="Previous" href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a class="Next" href="#"> Next </a></li>
                    </ul>
                </div>
                <!-- end pagination area -->
            </div>
        </div>
    </div>
</div>
<!-- page main wrapper end -->
@endsection