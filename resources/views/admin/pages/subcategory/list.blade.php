@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Sub Category List</header>
                
            </div>
            <div class="card-body ">
                <div class="row p-b-20 pull-right">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <a href="{{ route('Add-subcategory') }}" id="addRow" class="btn btn-info">
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
                                <th class="center">Category Name</th>
                                <th class="center">Sub-Category Name</th>
                                <th class="center">Update Sub-category</th>
                                <th class="center">Delete Sub-category</th>
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
                                <td class="center">{{ $value->categoryname }}</td>
                                <td class="center">{{ $value->names }}</td>
                                <td class="center">
                                    <a href="{{ route('Edit-subcategory',$value->categoryid) }}" class="btn btn-tbl-edit btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td class="center">
                                    <a data-toggle="modal" data-target="#deletemodal" data-id="{{ $value->categoryid }}" class="btn btn-tbl-delete btn-xs delete"><i class="fa fa-trash-o"></i></a>
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

<!--delete toggle-->

@endsection