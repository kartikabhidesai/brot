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
                    <div class="form-group hidden">
                        <input type="text" class="form-control" id="id" name="sizeid" placeholder="Enter size" value="{{ $result[0]->id }}">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormEmail">Category </label>
                        <select class="form-control category" name="category" id="category">
                            <option value="">Select Category</option>
                            @foreach($category as $key)
                            <option value="{{ $key->id }}" {{ $key->id == $result[0]->categoryid ? 'selected' : ''}}>{{ $key->categoryname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Sub Category </label>
                        <select class="form-control selectsubcategory" name="subcategory"  id="subcategory">
                            <option value="">Select sub category</option>
                            @foreach($subcategory as $key=>$value)
                            <option value="{{ $value['id'] }}" {{ $value['id'] == $result[0]->subcategoryid ? 'selected' : ''}}>{{ $value['subcategoryname'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group addsubcategory">
                        @for($i = 0 ; $i < count($result) ; $i++)
                        @if($i == 0)
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <label for="simpleFormEmail">size</label>
                                <input type="text" class="form-control size" id = "{{ $result[$i]->id }}" name="size[]" value="{{ $result[$i]->size }}" >
                            </div>

                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-success  addsize" data-dir="up" type="button"><span class="fa fa-plus"></span></button>
                            </div>
                        </div>
                        @else
                        <div class="row removediv">
                            <div class="col-md-10 col-sm-10">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <input type="text" class="form-control subcategoryname size"  id = "{{ $result[$i]->id }}" name="size[]" value="{{ $result[$i]->size }}" >
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <label for="simpleFormEmail">&nbsp;</label>
                                <button class="form-control btn btn-danger removecategory" data-dir="up" type="button"><span class="fa fa-minus"></span></button>
                            </div>
                        </div>
                        @endif

                        @endfor 
                    </div>   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection