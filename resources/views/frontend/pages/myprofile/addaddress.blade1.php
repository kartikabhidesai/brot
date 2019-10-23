@extends('frontend.layout.app')
@section('content')
<!-- login register wrapper start -->
    <div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                    <!-- Login Content Start -->
                    <div class="col-lg-12">
                        <div class="login-reg-form-wrap">
                            <h2>Add New Address</h2> 
                            <form  method="post" id="addaddress">
                                <div class="single-input-item">
                                   
                                </div>
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="addresstype" placeholder="Enter Address Type (Like Home , Office etc..)" required />
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" name="houseno" placeholder="Enter Flat / House NO "  />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="addressline1" placeholder="Enter Address Line 1"  />
                                        </div>
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="addressline2" placeholder="Enter Address Line 2" />
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <!--<input type="text" name="country" placeholder="Enter your country"  />-->
                                             <select name="country" class="form-control">
                                                 <option value="">Select Country</option>
                                                 @foreach($countrylist as $key => $value)
                                                    <option value="{{ $value->id }}">{{ $value->name  }}</option>
                                                 @endforeach
                                             </select>
                                        </div>
                                        
                                        <div class="col-lg-6 state">
                                              <select name="state" id="state" class="form-control">
                                                  <option value="">Select your State</option>
                                              </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="city" placeholder="Enter your city"  />
                                        </div>
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="pincode" placeholder="Enter area pincode" />
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="single-input-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="mobileno" placeholder="Enter your mobile number"  />
                                        </div>
                                        
                                        <div class="col-lg-6">
                                             <input type="text" class="form-control" name="altmobileno" placeholder="Enter your alertnative number" />
                                        </div>
                                        
                                    </div>
                                </div>
                                
                               
                                <div class="single-input-item">
                                    <button class="sqr-btn">Add addreess</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->

                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
@endsection