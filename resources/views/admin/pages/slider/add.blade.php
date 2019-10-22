@extends('admin.layout.app')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">

            <div class="card-body " id="bar-parent">
                <form method="post" id='addsilder'  enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="simpleFormEmail">Slider Image</label>
                        <input type="file" class="form-control" id="silderimage"  name="silderimage" >
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Slider Title (In 15 Words)</label>
                        <input type="text" class="form-control" id="slidertitle"  name="slidertitle" placeholder="Enter slider title">
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Slider Text (In 40 Words)</label>
                        <input type="text" class="form-control" id="slidertext"  name="slidertext" placeholder="Enter slider text">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Add Slider</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection