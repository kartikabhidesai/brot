@extends('admin.layout.app')
@section('content')
     <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add New Catagory</header>
                                        
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <form method="post" id='addform'>{{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Category name</label>
                                            <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Enter category name">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>

@endsection