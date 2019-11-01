@extends('frontend.layout.app')
@section('content')

<div class="product-details-wrapper section-padding">
    <div class="container custom-container">
        <div class="row">
            {{ csrf_field() }}
            <div class="col-lg-12">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    @foreach($result as $value)
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-4">
                            <div class="product-large-slider mb-20">
                                <div class="pro-large-img img-zoom">
                                    <img src=" {{ url('/public/uploads/product/'.$value->image) }}" height="500px" alt="">
                                </div>
                            </div>
                            <div class="pro-nav slick-row-10">
                                <div class="pro-nav-thumb">
                                    <img src=" {{ url('/public/uploads/product/'.$value->image) }}" height="100px" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-des">
                                <h3>{{ $value->productname }}</h3>
                                <div class="pro-review">
                                    <span><a href="#">1 review(s)</a></span>
                                </div>
                                <div class="price-box">
                                    @if($value->discount_type == 'F')
                                    @php
                                    $finalPrice = $value->price - $value->discount;
                                    @endphp
                                    @elseif($value->discount_type == 'P')
                                    @php
                                    $final = ($value->price * $value->discount) / 100;
                                    $finalPrice = $value->price - $final;
                                    @endphp
                                    @endif
                                    <span class="regular-price">{{ 'INR '.$finalPrice }}</span>
                                    <span class="old-price"><del>{{ 'INR '.$value->price }}</del></span>
                                </div>
                                <p>{{ $value->description }}</p>
                                <div class="quantity-cart-box d-flex align-items-center mb-20">
                                    <div class="quantity">
                                        <div class="pro-qty"><input type="text" id="quantity" value="1"></div>
                                    </div>
                                    <div>
                                        <select name="size" id="size">
                                            <option value=''>Select Size</option>
                                            @for($i=0; $i < count($sizeid); $i++)
                                            <option value='{{ $sizeid[$i]->size }}'>{{ $result[$i]->size }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="sqr-btn">
                                    <a data-id="{{ $value->id }}" class="addtocart ">Add to cart</a>
                                </div><br><br><br>
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
                    @endforeach
                </div>
                <!-- product details inner end -->
                <!-- product details reviews start -->
                <div class="product-details-reviews section-padding">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-review-info">
                                <ul class="nav review-tab">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_two">information</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_three">reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content reviews-tab">
                                    <div class="tab-pane fade show active" id="tab_one">
                                        <div class="tab-one">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p>
                                            <div class="review-description">
                                                <div class="tab-thumb">
                                                    <img src="assets/img/about/services.jpg" alt="">
                                                </div>
                                                <div class="tab-des">
                                                    <h3>Product Information :</h3>
                                                    <ul>
                                                        <li>Donec non est at libero vulputate rutrum.</li>
                                                        <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                        <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                        <li>Donec a neque libero.</li>
                                                        <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                        <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper.</p>
                                            <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_two">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>color</td>
                                                    <td>black, blue, red</td>
                                                </tr>
                                                <tr>
                                                    <td>size</td>
                                                    <td>L, M, S</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab_three">
                                        <form action="#" class="review-form">
                                            <h5>1 review for <span>Chaz Kangeroo Hoodies</span></h5>
                                            <div class="total-reviews">
                                                <div class="rev-avatar">
                                                    <img src="assets/img/about/avatar.jpg" alt="">
                                                </div>
                                                <div class="review-box">
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </div>
                                                    <div class="post-author">
                                                        <p><span>admin -</span> 30 Nov, 2018</p>
                                                    </div>
                                                    <p>Aliquam fringilla euismod risus ac bibendum. Sed sit amet sem varius ante feugiat lacinia. Nunc ipsum nulla, vulputate ut venenatis vitae, malesuada ut mi. Quisque iaculis, dui congue placerat pretium, augue erat accumsan lacus</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Your Email</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                    <textarea class="form-control" required></textarea>
                                                    <div class="help-block pt-10"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" value="1" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="2" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="3" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="4" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="5" name="rating" checked>
                                                    &nbsp;Good
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <button class="sqr-btn" type="submit">Continue</button>
                                            </div>
                                        </form> <!-- end of review-form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- product details reviews end --> 
            </div>
        </div>
    </div>
</div>
@endsection