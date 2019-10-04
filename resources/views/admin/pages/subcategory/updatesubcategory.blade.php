@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <form method="post" id='editform' enctype="multipart/form-data">{{ csrf_field() }}
                <div class="card-head">
                    <header>Update Sub Category</header>
                </div>
                <div class="card-body row">
                    <div class="col-lg-12 p-t-20"> 
                        <label for="category">Select Category:</label>
                        <select id="category" class = "form-control" name="category" >
                            <option value="">Select Category</option>
                            @foreach($result1 as $key => $value)
                            <option value="{{ $value->id }}" {{ $value->id == $id ? 'selected' : ''}}>{{ $value->categoryname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12 p-t-20"> 
                        <div class="form-group addsubcategory">
                            @for($i = 0 ; $i < count($result) ; $i++)
                                @if($i == 0)
                                    <div class="row">
                                        <div class="col-md-10 col-sm-10">
                                            <label for="simpleFormEmail">Enter Sub Catagory</label>
                                            <input type="text" class="form-control subcategoryname" id = "{{ $result[$i]->id }}" name="subcategoryname[]" value="{{ $result[$i]->subcategoryname }}" placeholder="Enter subcategory name">
                                        </div>

                                        <div class="col-md-2 col-sm-2">
                                            <label for="simpleFormEmail">&nbsp;</label>
                                            <button class="form-control btn btn-success  addcategory" data-dir="up" type="button"><span class="fa fa-plus"></span></button>
                                        </div>
                                    </div>
                                @else
                                    <div class="row removediv">
                                        <div class="col-md-10 col-sm-10">
                                            <label for="simpleFormEmail">&nbsp;</label>
                                            <input type="text" class="form-control subcategoryname"  id = "{{ $result[$i]->id }}" name="subcategoryname[]" value="{{ $result[$i]->subcategoryname }}" placeholder="Enter subcategory name">
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                           <label for="simpleFormEmail">&nbsp;</label>
                                          <button class="form-control btn btn-danger removecategory" data-dir="up" type="button"><span class="fa fa-minus"></span></button>
                                       </div>
                                    </div>
                                @endif
                            
                           @endfor 
                            
                        </div>
<!--                        <label for="subcategoryname">Edit Sub Category</label>
                        <div class="row appendsubcategory">
                            @foreach($result as $result2)
                            <div class="col-md-10 col-sm-10">
                                <input class = "form-control" type = "text" id = "{{ $result2->id }}" name="subcategoryname[]" value="{{ $result2->subcategoryname }}">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <button class="form-control btn btn-success  addsubcategory" data-dir="up" type="button"><span class="fa fa-plus"></span></button>
                                <label for="simpleFormEmail">&nbsp;</label>
                            </div>
                            @endforeach
                        </div>-->
                        <div class="col-lg-12 p-t-20 text-center"> 
                            <button type="submit" value="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                            <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div> 
@endsection