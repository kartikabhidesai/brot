<!-- product details inner end -->
<div class="product-details-inner">
    <div class="row">
        <div class="col-lg-5">
            @for($i=0;$i < count($result); $i++)
            <div class="product-large-slider mb-20">
                <div class="pro-large-img img-zoom" id="img1">
                    <img src="{{ url('/uploads/product/'.$result[$i]->image) }}"  alt="product image" height='50px' width='50px'>
                </div>
            </div>
            @endfor
            @for($i=0;$i < count($result); $i++)
            <div class="pro-nav slick-row-10">
                <div class="pro-nav-thumb"><img src="{{ url('/uploads/product/'.$result[$i]->image) }}" height='50px' width='50px'
                                                alt="" /></div>
            </div>
            @endfor
        </div>
        @foreach($result as $value)@endforeach
        <div class="col-lg-7">
            <div class="product-details-des">
                <h3>{{ $value->productname }}</h3>
                <h3>{{ $value->productcode }}</h3>
                <div class="pro-review">
                    <span><a href="#">1 review(s)</a></span>
                </div>
                <div class="price-box">
                    <span class="regular-price">{{ 'INR '.$value->price }}</span>
                </div>
                <p>{{ $value->description }}</p>
                <div class="quantity-cart-box d-flex align-items-center mb-20">
                    <div class="quantity">
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
                    <div class="sqr-btn">
                        <a href="{{ route('cart') }}">Add to cart</a>
                    </div>
                </div>
                <div class="availability mb-20">
                    <h5>Availability:</h5>
                    <span>In Stock</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details inner end -->