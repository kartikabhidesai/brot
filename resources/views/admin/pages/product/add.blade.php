@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Add New Product</header>

            </div>
            <div class="card-body " id="bar-parent">
                <form method="post" id='addproductform'>{{ csrf_field() }}
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
                        <select id="multiple" name="size" class="form-control has-error select2-multiple selectsize" multiple>
                               
                            </select>
                        
                    </div>


                    <div class="form-group appendproduct">
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <label for="simpleFormEmail">Enter product Code</label>
                                <input type="text" class="form-control product" id="product" name="product" placeholder="Enter product">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-success addproduct" data-dir="up" type="button"><span class="fa fa-plus"></span></button>
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