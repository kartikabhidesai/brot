@extends('admin.layout.app')
@section('content')
@foreach($product as $result)
@endforeach
@foreach($image as $result1)
@endforeach
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Edit Product</header>
            </div>
            <div class="card-body " id="bar-parent">
                <form method="post" id='editproductform' enctype="multipart/form-data">{{ csrf_field() }}
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product Code</label>
                        <input type="text" class="form-control product" id="productcode" name="productcode" value="{{ $result->productcode }}">
                    </div>
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product Name</label>
                        <input type="text" class="form-control product" id="productname" name="productname" value="{{ $result->productname }}">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Category </label>
                        <select class="form-control category" name="category" id="category">
                            <option value="">Select Category</option>
                            @foreach($category as $key)
                            <option value="{{ $key->id }}" {{ $key->id == $result->catagory ? 'selected' : ''}}>{{ $key->categoryname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Sub Category </label>
                        <select class="form-control selectsubcategory subcategory" name="subcategory"  id="subcategory">
                            <option value="">Select Sub Category</option>
                            @foreach($subcategory as $key1)
                            <option value="{{ $key1->id }}" {{ $key1->categoryid == $result->catagory ? 'selected' : ''}}>{{ $key1->subcategoryname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="simpleFormEmail">Size </label>
                        <select id="multiple" name="size[]" class="form-control has-error select2-multiple selectsize" multiple>
                            <option value="">Select size</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product price</label>
                        <input type="text" class="form-control product" id="price" name="price" value="{{ $result->price }}">
                    </div>
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product Quantity</label>
                        <div class="input-group spinner">
                            <input type="number" class="form-control"    name="quantity" value="{{ $result->quantity }}">
                            <div class="input-group-btn-vertical">
                                <button class="btn btn-default" type="button" data-dir="up">
                                    <i class="fa fa-caret-up"></i>
                                </button>
                                <button class="btn btn-default" type="button" data-dir="dwn">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Enter product Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $result->description }}">
                    </div>
                    <div class="form-group appendproduct">
                        <div class="row col-md-12 col-sm-12">
                            <div class="">
                                <img height="100px" width="100px" src="{{ url('/uploads/product/'.$result1->image) }}" alt="product Image"></div>
                            <div class="col-md-3 col-sm-3">
                                <label for="simpleFormEmail">Update Image</label>
                                <input type="file" class="form-control" id="image" name="image" >
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection