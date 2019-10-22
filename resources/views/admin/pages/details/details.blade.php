@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">

            <div class="card-body " id="bar-parent">
                <form method="post" id='details'>{{ csrf_field() }}
                    <div class="form-group">
                        <label for="simpleFormEmail">Information</label>
                        <textarea class="form-control" id="information" name="information" placeholder="Enter address line 2">{{ $details[0]->info }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Address Line 1</label>
                        <input type="text" class="form-control" id="categoryname" value="{{ $details[0]->addressline1 }}" name="addressline1" placeholder="Enter address line 2">
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Address Line 2</label>
                        <input type="text" class="form-control" id="categoryname" value="{{ $details[0]->addressline2 }}" name="addressline2" placeholder="Enter address line 2">
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Mobile No</label>
                        <input type="text" class="form-control" id="categoryname" value="{{ $details[0]->mobileno }}" name="mobileno" placeholder="Enter address line 2">
                    </div>

                    <div class="form-group">
                        <label for="simpleFormEmail">Email Id</label>
                        <input type="text" class="form-control" id="categoryname" value="{{ $details[0]->email }}" name="email" placeholder="Enter address line 2">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Details</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection