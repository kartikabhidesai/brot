@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Add New Size</header>

            </div>
            <div class="card-body " id="bar-parent">
                <form method="post" id='addsizeform'>{{ csrf_field() }}
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
                        <select class="form-control selectsubcategory" name="subcategory"  id="subcategory">
                            <option value="">Select sub category</option>
                        </select>
                    </div>

                    <div class="form-group appendsize">
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <label for="simpleFormEmail">Enter size</label>
                                <input type="text" class="form-control size" id="size" name="size[]" placeholder="Enter size">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-success addsize" data-dir="up" type="button"><span class="fa fa-plus"></span></button>
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