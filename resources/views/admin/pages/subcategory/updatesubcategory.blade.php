@extends('admin.layout.app')
@section('content')
@foreach($result as $result)
@endforeach
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
                                <option value="{{ $value->id }}" {{ $value->id == $result->categoryid ? 'selected' : ''}}>{{ $value->categoryname }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col-lg-12 p-t-20"> 
                        <label for="subcategoryname">Edit Sub Category</label>
                        <input class = "form-control" type = "text" id = "subcategoryname" name="subcategoryname" value="{{ $result->subcategoryname }}">
                    </div>
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