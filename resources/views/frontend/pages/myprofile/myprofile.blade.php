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
                                <a href="#change-password" data-toggle="tab"><i class="fa fa-key" aria-hidden="true"></i>Change Password</a>
                                <a href="{{ route('front-logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
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
                                            <table id="mydatatable" class="cell-border" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="pro-thumbnail">Thumbnail</th>
                                                        <th class="pro-title">Product</th>
                                                        <th class="pro-title">Order Id</th>
                                                        <th class="pro-price">Price</th>
                                                        <th class="pro-quantity">Quantity</th>
                                                        <th class="pro-quantity">Size</th>
                                                        <th class="pro-subtotal">Total</th>
                                                        <th class="pro-remove">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php 
                                                    $subtotal = 0; $ship = 50; $shipp = 100; 
                                                    @endphp
                                                    @if(count($order) > 0)

                                                    @for($i=0;$i < count($order); $i++)    
                                                    @php 
                                                    $total = 0; 
                                                    if($order[$i]->status == 'pending' || $order[$i]->status == 'confirm'){
                                                    $total = ($order[$i]->price)*($order[$i]->quantity); 
                                                    }
                                                    $subtotal = ($subtotal + $total);
                                                    @endphp
                                                    <tr>
                                                        <td class="pro-thumbnail"><img class="img-fluid" width='25px' src="{{ url('/public/uploads/product/'.$order[$i]->image) }}"
                                                                                       alt="Product"/></td>
                                                        <td class="pro-title">{{ $order[$i]->productname }}</td>
                                                        <td class="pro-price"><span>{{ $order[$i]->orderid }}</span></td>
                                                        <td class="pro-price"><span>{{ 'INR '.$order[$i]->price }}</span></td>
                                                        <td class="pro-quantity">
                                                            <div>{{ $order[$i]->quantity }}</div>
                                                        </td>
                                                        <td class="pro-price"><span>{{ $order[$i]->size }}</span></td>
                                                        @if($order[$i]->status == 'pending')
                                                        <td class="pro-subtotal" id="total"><span class='remove' >{{ 'INR '.$total }}</span></td>
                                                        <td class="center">
                                                            <div class="product-btn">
                                                                <a><b style='color: #FFFFDF' >{{ $order[$i]->status }}</b></a>
                                                            </div>
                                                        </td>
                                                        @elseif($order[$i]->status == 'confirm')
                                                        <td class="pro-subtotal" id="total"><span class='remove' >{{ 'INR '.$total }}</span></td>
                                                        <td class="center">
                                                            <div class="btn-group">
                                                                <a class='btn btn-success'>{{ $order[$i]->status }}</a>
                                                            </div>
                                                        </td>
                                                        @else
                                                        <td class="pro-subtotal" id="total"><span class='remove' >-</span></td>
                                                        <td class="center">
                                                            <div class="btn-group">
                                                                <a class='btn btn-danger'>{{ $order[$i]->status }}</a>
                                                            </div>
                                                        </td>
                                                        @endif
                                                    </tr>
                                                    @endfor 
                                                    @else
                                                    <tr>
                                                        <td class="pro-thumbnail" colspan="7"> No any Itema in your cart</td>
                                                    </tr>
                                                    @endif
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
                                @foreach($customer as $result)
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="account-details-form">
                                            <form method="post" id='updateaccount' action="{{ route('updateaccount') }}" method="post">{{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">First Name</label>
                                                            <input type="text" class="form-control"  id="first-name" placeholder="First Name" name="fname" value='{{ $result->fname }}'/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Last Name</label>
                                                            <input type="text" class="form-control" id="last-name" placeholder="Last Name" name="lname" value='{{ $result->lname }}'/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="email" class="required">Email Addres</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" value='{{ $result->email }}'/>
                                                </div>
                                                <div class="single-input-item">
                                                    <label for="mobile" class="required">Mobile</label>
                                                    <input type="text" id="mobile" class="form-control" placeholder="Mobilel number" name="mobile" value='{{ $result->mobile }}'/>
                                                </div>
                                                <div class="single-input-item">
                                                    <button class="check-btn sqr-btn ">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->
                                @endforeach
                                <div class="tab-pane fade" id="change-password" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Change Password</h3>
                                        <div class="account-details-form">
                                            <form method="post" id='updatepassword' action="" method="post">{{ csrf_field() }}
                                                <fieldset>
                                                    <div class="single-input-item">
                                                        <label for="current-pwd" class="required">Current Password</label>
                                                        <input type="password" class="form-control" id="current-pwd" placeholder="Current Password" name="oldpassword"/>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="new-pwd" class="required">New Password</label>
                                                                <input type="password" class="form-control" id="password" placeholder="New Password" name="password"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="confirm-pwd" class="required">Confirm Password</label>
                                                                <input type="password" class="form-control" id="confirm-pwd" placeholder="Confirm Password" name='confirmpassword'/>
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