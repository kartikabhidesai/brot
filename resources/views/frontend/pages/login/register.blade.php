@extends('frontend.layout.app')
@section('content')
<!-- login register wrapper start -->
    <div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                <div class="col-lg-3"></div>
                    <!-- Register Content Start -->
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap signup-form">
                            <h2>Singup Form</h2>
                            <form method="post" id='registerform' action="{{ action('frontend\LoginController@register') }}" method="post">{{ csrf_field() }}
                                <div class="single-input-item">
                                    <input type="text" placeholder="Enter Your First Name" name='fname' id='fname'>
                                </div>
                                <div class="single-input-item">
                                    <input type="text" placeholder="Enter Your Last Name" name='lname' id='lname'>
                                </div>
                                <div class="single-input-item">
                                    <input type="text" placeholder="Enter Your 10 Digit Mobile Number" name='mobile' id='mobile'>
                                </div>
                                <div class="single-input-item">
                                    <input type="email" placeholder="Enter your Email" name='email' id='email'>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" placeholder="Enter your Password" name='password' id='password'>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" placeholder="Repeat your Password" name='confirmpassword' id='confirmpassword'>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button type="submit" class="sqr-btn" name='submit' id='submit'>Register</button><br><br>
                                     Already Account? <a href="{{ route("login") }}" class="forget-pwd">Login!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Register Content End -->
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
    @endsection