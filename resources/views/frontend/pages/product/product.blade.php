@extends('frontend.layout.app')
@section('content')
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
                                     @for($i = 0; $i < count($cat_sub_cat); $i++)
                                    <li><a href="#">{{ $cat_sub_cat[$i]->categoryname }}</a>
                                        <ul class="children">
                                            @for($j = 0; $j < count($cat_sub_cat[$i]->subCategory); $j++)
                                            <li><a href="{{ route('product',$cat_sub_cat[$i]->subCategory[$j]->id) }}">{{ $cat_sub_cat[$i]->subCategory[$j]->subcategoryname }}</a></li>
                                            @endfor
                                        </ul>
                                    </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product view wrapper area start -->
                <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                    <div class="shop-product-wrapper">
                        <div class="shop-product-wrap grid row">
                            
                            @for($i = 0; $i < count($result); $i++)
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                            <div class="product-item mb-30">
                                <div class="product-thumb">
                                    <a href="{{ route('product-details',$result[$i]->id) }}">
                                        <img src=" {{ url('/public/uploads/product/'.$result[$i]->image) }}" height="300px" width="200px" alt="product image">
                                    </a>
                                    <div class="product-action-link">
                                    <a href="{{ route('product-details',$result[$i]->id) }}" > <span data-toggle="tooltip" title="" data-original-title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                    <a href="javascript:;" data-toggle="tooltip" title="" data-original-title="Wishlist" tabindex="-1"><i class="ion-ios-shuffle"></i></a>
                                </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="product-name">
                                        <h3><a href="{{ route('product-details',$result[$i]->id) }}">{{ $result[$i]->productname }}</a></h3>
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
                                    <div class="product-btn">
                                        <a href="{{ route('cart',$result[$i]->id) }}">add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endfor
                        </div>
                        <!-- product view mode wrapper start -->
                    </div>
                    <!-- start pagination area -->
                    
                    <!-- end pagination area -->
                </div>
            </div>
        </div>
    </div>
<!-- page main wrapper end -->
@endsection