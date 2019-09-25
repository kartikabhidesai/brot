@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <form method="post" id='addform'>{{ csrf_field() }}
                <div class="card-head">
                    <header>Add New Catagory</header>
                </div>
                <div class="card-body row">
                    <div class="col-lg-12 p-t-20"> 

                        <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded error">
                            <input class = "mdl-textfield__input inputbox" type = "text" id = "txtFirstName" name="categoryname">
                            <label class = "mdl-textfield__label">add catagory</label>
                        </div>
                    </div>
                    <div class="col-lg-12 p-t-20 text-center"> 
                        <button type="submit" value="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                        <a href="{{ route('Product') }}"><button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection