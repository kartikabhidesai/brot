<footer>
    <!-- footer widget area start -->
    <div class="footer-widget-area gray-bg bdr-top section-padding">
        <div class="container custom-container">
            <div class="row mtn-40">
                <div class="col-xl-3 col-lg-2 col-md-6">
                    <!-- footer single widget start -->
                    <div class="footer-single-widget mt-40">
                        <h5 class="widget-title">About Us</h5>
                        <div class="widget-body">
                            <p class="desc">{{ @$getdetails[0]->info }}</p>
                        </div>
                        <div class="footer-single-widget mt-40">
                            <div class="position-static">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ url('public/uploads/logo.png') }}" alt="Brand logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- footer single widget start -->
                </div>

                <div class="col-xl-3 col-lg-2 col-md-6">
                    <!-- footer single widget start -->
                    <div class="footer-single-widget mt-40">
                        <h5 class="widget-title">Our Services</h5>
                        <div class="widget-body">
                            <ul class="useful-links">
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Our Company</a></li>
                                <li><a href="#">Vision & Mission</a></li>
                                <li><a href="#">Our Product</a></li>
                                <li><a href="#">Our Fajlami</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer single widget start -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- footer single widget start -->
                    <div class="footer-single-widget mt-40">
                        <h5 class="widget-title">Contact Us</h5>
                        <div class="widget-body">
                            <p class="desc">{{ @$getdetails[0]->addressline1 }} {{ @$getdetails[0]->addressline2 }}</p>
                            <ul class="contact-info">
                                <li>+91 {{ @$getdetails[0]->mobileno }}</li>
                                <li>{{ @$getdetails[0]->email }}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer single widget start -->
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- footer single widget start -->
                    <div class="footer-single-widget mt-40">
                        <h5 class="widget-title">Newsletter</h5>
                        <div class="widget-body">


                            <div class="newsletter-inner">
                                <form id="mc-form">
                                    <input type="email" class="news-field" id="mc-email" autocomplete="off"
                                           placeholder="Your Email Address">
                                    <button class="news-btn" id="mc-submit">Sign Up</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                    <!-- footer single widget start -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer widget area end -->

    <!-- footer botton area start -->
    <div class="footer-bottom-area">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-md-4 order-1">
                </div>
                <div class="col-md-4 order-3 order-md-2">
                    <div class="copyright-text text-center">
                        <p>Copyright <a href="#">Audible By Aabha</a>. All Rights Reserved</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer botton area end -->
</footer>