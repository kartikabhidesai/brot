@extends('admin.layout.app')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">

            <div class="card-body " id="bar-parent">
                <form method="post" id='editsilder'  enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    
                    <div class="form-group hidden">
                        <label for="simpleFormEmail">Edit Id</label>
                        <input type="text" class="form-control" id="editid" value="{{ $silderdetails[0]->id }}" name="editid" >
                        <input type="text" class="form-control" id="oldimage" value="{{ $silderdetails[0]->image }}" name="oldimage" >
                    </div>
                    
                    <div class="form-group">
                        <label for="simpleFormEmail">Slider Image</label>
                        <br>
                        <img height="100px" width="150px" src="{{ url("public/uploads/slider/".$silderdetails[0]->image) }}" >
                        <input type="file" class="form-control" id="silderimage"  name="silderimage" >
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Slider Title (In 15 Words)</label>
                        <input type="text" class="form-control" id="slidertitle"  name="slidertitle" value="{{ $silderdetails[0]->title }}" placeholder="Enter slider title">
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Slider Text (In 20 Words)</label>
                        <input type="text" class="form-control" id="slidertext"  name="slidertext" value="{{ $silderdetails[0]->text }}" placeholder="Enter slider text">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Add Slider</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection