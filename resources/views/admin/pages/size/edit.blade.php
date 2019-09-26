@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Edit Size</header>

            </div>
            <div class="card-body " id="bar-parent">
                <form method="post" id='editsizeform'>{{ csrf_field() }}
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
                            <div class="col-md-12 col-sm-12">
                                <label for="simpleFormEmail">Enter size</label>
                                <input type="text" class="form-control size" id="size" name="size" placeholder="Enter size">
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