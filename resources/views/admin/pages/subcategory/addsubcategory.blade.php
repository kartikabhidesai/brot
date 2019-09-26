@extends('admin.layout.app')
@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Add New Sub category</header>

            </div>
            <div class="card-body " id="bar-parent">
                 <form method="post" id='addsubcategory'>{{ csrf_field() }}
                    <div class="form-group">
                        <label for="simpleFormEmail">Category </label>
                        <select class="form-control" name="category" id="category">
                            <option value="">Select Category</option>
                            @foreach($result as $key)
                            <option value="{{$key->id}}">{{ $key->categoryname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group addsubcategory">
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <label for="simpleFormEmail">Enter Sub Catagory</label>
                                <input type="text" class="form-control subcategoryname" id="subcategoryname" name="subcategoryname[]" placeholder="Enter subcategory name">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-success  addcategory" data-dir="up" type="button"><span class="fa fa-plus"></span></button>
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