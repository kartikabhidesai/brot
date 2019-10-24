@extends('frontend.layout.app')
@section('content')
@foreach($address as $result)
<!-- login register wrapper start -->
    <div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="col-lg-12">
                        <div class="login-reg-form-wrap">
                            <h2>Edit Address</h2> 
                            <form  method="post" id="editaddress">
                                {{ csrf_field() }}
                                <div class="single-input-item">
                                   
                                </div>
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="addresstype" placeholder="Enter Address Type (Like Home , Office etc..)" value="{{ $result->type }}" />
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="houseno" placeholder="Enter Flat / House NO "  value="{{ $result->houseno }}"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="addressline1" placeholder="Enter Address Line 1"  value="{{ $result->line1 }}"/>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="addressline2" placeholder="Enter Address Line 2"  value="{{ $result->line2 }}"/>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="country" placeholder="Enter your country"  value="{{ $result->country }}"/>
                                            
                                        </div>
                                        
                                        <div class="col-lg-6">
                                              <input type="text" class="form-control" name="state" placeholder="Enter your state"  value="{{ $result->state }}"/>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="city" placeholder="Enter your city"  value="{{ $result->city }}"/>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="pincode" placeholder="Enter area pincode" value="{{ $result->pincode }}"/>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="mobileno" placeholder="Enter your mobile number"  value="{{ $result->mobileno }}"/>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{ $result->email }}"/>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <div class="row">
                                        
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="altmobileno" placeholder="Enter your alertnative number" value="{{ $result->altmobileno }}"/>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                               
                                <div class="single-input-item">
                                    <button class="sqr-btn">Save Address</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->

                </div>
            </div>
        </div>
    </div>
@endforeach
    <!-- login register wrapper end -->
@endsection