@extends('frontend.layout.app')
@section('content')
<!-- login register wrapper start -->
<div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <!-- Login Content Start -->
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap">
                            <h2>Sign In</h2>
                            <form action="{{ route('login') }}" method="post" id='loginform'>{{ csrf_field() }}
                                <div class="single-input-item">
                                    <input type="email" placeholder="Enter Your Email" class="form-control" name='email' id='email'>
                                </div>
                                <div class="single-input-item">
                                    <input type="password" placeholder="Enter your Password" class="form-control" name='password' id='password'>
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            </div>
                                        </div>
                                        <a href="#" class="forget-pwd">Forget Password?</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="sqr-btn" type="submit" name="submit" value="submit">Login</button><br><br>
                                    Haven't Account? <a href="{{ route("front-register") }}" class="forget-pwd">Register!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
    @endsection