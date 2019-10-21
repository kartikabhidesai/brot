@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Product List</header>
                
            </div>
            <div class="card-body ">
                <div class="row p-b-20 pull-right">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <a href="{{ route('add-product') }}" id="addRow" class="btn btn-info">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>{{ csrf_field() }}
                </div>
                <div class="table-scrollable">
                    <table class="table table-hover table-checkable order-column full-width" id="datatable">
                        <thead>
                            <tr>
<!--                                <th class="center">Profile</th>
                                <th class="center"> First Name </th>
                                <th class="center"> Last Name</th>
-->                                <th class="center"> No </th>
                                <th class="center"> product image</th>
                                <th class="center"> Category Name</th>
                                <th class="center"> Sub Category Name</th>
                                <th class="center">Size</th>
                                <th class="center">Product Code</th>
                                <th class="center">Product Name</th>
                                <th class="center">Product Price</th>
                                <th class="center">Product Description</th>
                                <th class="center">Product Quantity</th>
                                <th class="center">Update Category</th>
                                <th class="center">Delete Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i =0;
                            @endphp
                            @foreach($result as $value)
                            @php
                            $i++;
                            @endphp
                            <tr class="odd gradeX">
                                <td class="center">{{ $i }}</td>
                                <td class="user-circle-img center">
                                    @if($value->image != '' || $value->image != NULL)
                                    <img height="50px"  width="50px" src="{{ url('/public/uploads/product/'.$value->image) }}" alt="User's Profile Picture">
                                    @else
                                    <img  height="50px" width="50px" src="{{ url('admin/assets/img/mega-img1.jpg') }}" alt="User's Profile Picture">
                                    @endif
                                </td>
                                <td class="center">{{ $value->categoryname }}</td>
                                <td class="center">{{ $value->subcategoryname }}</td>
                                <td class="center">{{ $value->size }}</td>
                                <td class="center">{{ $value->productcode }}</td>
                                <td class="center">{{ $value->productname }}</td>
                                <td class="center">{{ $value->price }}</td>
                                <td class="center">{{ $value->description }}</td>
                                <td class="center">{{ $value->quantity }}</td>
                                <td class="center">
                                    <a href="{{ route('edit-product',$value->id) }}" class="btn btn-tbl-edit btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td class="center">
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{ $value->id }}" class="btn btn-tbl-delete btn-xs delete"><i class="fa fa-trash-o"></i></a>
                                </td>
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