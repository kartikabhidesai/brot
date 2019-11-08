@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Order List</header>
            </div>
            <div class="card-body ">
                {{ csrf_field() }}
                <div class="table-scrollable">
                    <table class="table table-hover table-checkable order-column full-width" id="datatable">
                        <thead>
                            <tr>
                                <th class="center"> No </th>
                                <th class="center"> Image</th>
                                <th class="center"> Product Name</th>
                                <th class="center"> Order Id</th>
                                <th class="center"> product Price</th>
                                <th class="center"> product quantity</th>
                                <th class="center"> product size</th>
                                <th class="center"> Total</th>
                                <th class="center"> Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i =0;
                            @endphp
                            @foreach($order as $value)
                            @php
                            $i++;
                            @endphp
                            <tr class="odd gradeX">
                                <td class="center">{{ $i }}</td>
                                <td class="user-circle-img center">
                                    @if($value->image != '' || $value->image != NULL)
                                    <img height="50px"  width="50px" src="{{ url('/public/uploads/product/'.$value->image) }}" alt="Picture">
                                    @else
                                    <img  height="50px" width="50px" src="{{ url('admin/assets/img/mega-img1.jpg') }}" alt="User's Profile Picture">
                                    @endif
                                </td>
                                <td class="center">{{ $value->productname }}</td>
                                <td class="center" >{{ $value->orderid }}</td>
                                <td class="center">{{ $value->price }}</td>
                                <td class="center">{{ $value->quantity }}</td>
                                <td class="center"><b style="color: red">{{ ($value->price)*($value->quantity) }}</b</td>
                                <td class="center">{{ $value->size }}</td>
                                @if($value->status == 'pending')
                                <td class="center">
                                    <div class="btn-group">
                                        <a class='btn btn-square YES' order-id='{{ $value->orderid }}'>Accept</a>
                                    </div>
                                </td>
                                @elseif($value->status == 'confirm')
                                <td class="center">
                                    <div class="btn-group">
                                        <a class='btn btn-success confirm' order-id='{{ $value->orderid }}'>confirm</a>
                                    </div>
                                </td>
                                @else
                                <td class="center">
                                    <div class="btn-group">
                                        <a class='btn btn-danger' order-id='{{ $value->orderid }}'>Delivered</a>
                                    </div>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection