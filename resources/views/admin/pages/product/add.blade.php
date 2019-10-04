@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Add New Product</header>

            </div>
            <div class="card-body " id="bar-parent">
                <form method="post" id='addproductform' enctype="multipart/form-data">{{ csrf_field() }}
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product Code</label>
                        <input type="text" class="form-control product" id="productcode" name="productcode" placeholder="Enter product Code">
                    </div>
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product Name</label>
                        <input type="text" class="form-control product" id="productname" name="productname" placeholder="Enter product Name">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Category </label>
                        <select class="form-control category" name="category" id="category">
                            <option value="">Select Category</option>
                            @foreach($result as $key)
                            <option value="{{$key->id}}">{{ $key->categoryname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Sub Category </label>
                        <select class="form-control selectsubcategory subcategory" name="subcategory"  id="subcategory">
                            <option value="">Select sub category</option>
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
                        <input type="text" class="form-control product" id="price" name="price" placeholder="Enter product price">
                    </div>
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product Quantity</label>
                        <div class="input-group spinner">
                            <input type="number" class="form-control" value="1" name="quantity">
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
                        <input type="text" class="form-control product" id="description" name="description" placeholder="Enter product Description">
                    </div>
                    <div class="form-group appendproduct">
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <label for="simpleFormEmail">Product Image</label>
                                <input type="file" class="form-control" id="image" name="image[]">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-success addimage" data-dir="up" type="button"><span class="fa fa-plus"></span></button>
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