@extends('admin.layout.app')
@section('content')
@foreach($product as $result)
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
                            <option value="{{ $key1->id }}" {{ $key1->id == $result->subcatagory ? 'selected' : ''}}>{{ $key1->subcategoryname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group appendsize">
                        @for($i = 0 ; $i < count($size) ; $i++)
                        @if($i == 0)
                        <div class="row ">
                            <div class="col-md-5 col-sm-5">
                                <label for="simpleFormEmail">Size </label>
                                <select class="form-control size sizeselect" name="size[]" id="size">
                                    <option value="{{ $size[$i]->id }}">{{ $size[$i]->size }}</option>
                                </select>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <label for="simpleFormEmail">Quantity </label>
                                <input type="text" class="form-control quantity" id="quantity" name="quantity[]" placeholder="Enter Quantity" value="{{$size[$i]->quantity }}">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-success addsizequantity " data-dir="up" id="sizebutton" type="button" ><span class="fa fa-plus"></span></button>
                            </div>
                        </div>
                        @else
                        <div class="row removesizeQuantity">
                            <div class="col-md-5 col-sm-5">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <select class="form-control size sizeselect" name="size[]" id="size">
                                    <option value="{{ $size[$i]->id }}">{{ $size[$i]->size }}</option>
                                </select>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <input type="text" class="form-control quantity" id="quantity" name="quantity[]" placeholder="Enter Quantity" value="{{$size[$i]->quantity }}">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-danger removesize " data-dir="up" id="sizebutton" type="button" ><span class="fa fa-minus"></span></button>
                            </div>
                        </div>
                        @endif
                        @endfor 
                    </div>
                    <div class="form-group ">
                        <label for="simpleFormEmail">Enter product price</label>
                        <input type="text" class="form-control product" id="price" name="price" value="{{ $result->price }}">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Enter product Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $result->description }}">
                    </div>
                    <div class="form-group appendproduct">
                        <div class="row col-md-12 col-sm-12">
                            @foreach($image as $image)
                            <div class="margin-right-10 margin-top-10">
                                <img height="100px" width="100px" src="{{ url('/public/uploads/product/'.$image->image) }}" alt="product Image" value="{{ $image->image }}">
                            </div>
                            @endforeach
                        </div>
                        <div class="row appendimage">
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