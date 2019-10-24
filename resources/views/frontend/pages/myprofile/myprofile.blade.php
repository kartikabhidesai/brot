@extends('frontend.layout.app')
@section('content')
<!-- my account wrapper start -->
<div class="my-account-wrapper section-padding">
    <div class="container custom-container">
        <div class="row">
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>
                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                
                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                                <a href="login-register.html"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="welcome">
                                            <p>Hello, <strong>{{ $userdetails[0]['fname']}} {{ $userdetails[0]['lname']}}</strong> (If Not <strong>{{ $userdetails[0]['fname']}} {{ $userdetails[0]['lname']}}</strong><a href="{{ route('front-logout') }}" class="logout"> Logout</a>)</p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Pending</td>
                                                        <td>$3000</td>
                                                        <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>July 22, 2018</td>
                                                        <td>Approved</td>
                                                        <td>$200</td>
                                                        <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>June 12, 2017</td>
                                                        <td>On Hold</td>
                                                        <td>$990</td>
                                                        <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <a href="{{ route('add-address')}}" class="check-btn sqr-btn pull-right"><i class="fa fa-plus"></i></a>
                                        @if(count($address) == 0)
                                            <h4>You haven't any saved address!!</h4>
                                        @endif
                                        @for($i = 0; $i < count($address); $i++)
                                        <address>
                                            <p><strong>{{ $address[$i]->type }}&nbsp;&nbsp;<a href="{{ route('edit-address',$address[$i]->id) }}"><i class="fa fa-edit"></i>&nbsp;&nbsp;<a data-toggle="modal" data-target="#deletemodal" data-id="{{ $address[$i]->id }}" class="delete"><i class="fa fa-trash-o"></i></a></strong></p>
                                            <p>{{ $address[$i]->houseno.', '.$address[$i]->line1 }}<br>
                                                {{ $address[$i]->line2 }}</p>
                                            <p>{{ $address[$i]->mobileno }}</p>
                                            <p>{{ $address[$i]->altmobileno }}</p>
                                            <p>{{ $address[$i]->email }}</p>
                                            <p>{{ $address[$i]->city.', '.$address[$i]->state.', '.$address[$i]->country }}</p>
                                            
                                        </address>
                                        @endfor
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">First Name</label>
                                                            <input type="text" id="first-name" placeholder="First Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Last Name</label>
                                                            <input type="text" id="last-name" placeholder="Last Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="display-name" class="required">Display Name</label>
                                                    <input type="text" id="display-name" placeholder="Display Name" />
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="email" class="required">Email Addres</label>
                                                    <input type="email" id="email" placeholder="Email Address" />
                                                </div>
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item">
                                                        <label for="current-pwd" class="required">Current Password</label>
                                                        <input type="password" id="current-pwd" placeholder="Current Password" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="new-pwd" class="required">New Password</label>
                                                                <input type="password" id="new-pwd" placeholder="New Password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item">
                                                    <button class="check-btn sqr-btn ">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!-- my account wrapper end -->
@endsection