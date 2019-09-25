@extends('admin.layout.app')
@section('content')
@foreach($result as $result)
@endforeach
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <form method="post" id='editform' enctype="multipart/form-data">{{ csrf_field() }}
                <div class="card-head">
                    <header>Update Category</header>
                </div>
                <div class="card-body row">
                    <div class="col-lg-12 p-t-20"> 
                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class = "mdl-textfield__input" type = "text" id = "txtFirstName" name="categoryname" value="{{ $result->categoryname }}">
                            <label class = "mdl-textfield__label">Category Name</label>
                        </div>
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