@extends('frontend.layout.app')
@section('content')
<!-- contact wrapper area start -->
<div class="contact-area section-padding">
    <div class="container custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-message">
                    <h2>tell us your project</h2>
                    <form id="contact-form" action="http://whizthemes.com/mail-php/genger/mail.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="first_name" placeholder="Name *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="phone" placeholder="Phone *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="email_address" placeholder="Email *" type="text" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="contact_subject" placeholder="Subject *" type="text">
                            </div>
                            <div class="col-12">
                                <div class="contact2-textarea text-center">
                                    <textarea placeholder="Message *" name="message" class="form-control2" required=""></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button class="check-btn sqr-btn" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info contact-info-2 pt-0">
                    <h2>contact us</h2>
                    <b><p>The main aim of U-Ray Infotech is the whole team is to satisfy clients and give the best possible outcome to my clients. After 4 years of providing services, today I can say I have achieved my client’s satisfaction and for this the credit goes to our team.
                        Our company mainly provides the following services.</p>

                        PHP Development.<br>
                        Open-Source Development<br>
                        Android App Development.<br>
                        Word-press Development.<br>
                        Laravel Development.<br>
                        SEO Service.<br>
                        Web-site Maintenance.<br><br><br></b>
                    <ul>
                        <li><i class="fa fa-fax"></i> Address : G-106 Titanium City Center, Satellite, Ahmedabad, Gujarat, India</li>
                        <li><i class="fa fa-mobile"></i>+91 88666 20260</li>
                        <li><i class="fa fa-envelope-o"></i> info@mototivewebsolution.com </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection