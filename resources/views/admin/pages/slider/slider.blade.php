@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Slider List</header>

            </div>
            <div class="card-body ">
                <div class="row p-b-20 pull-right">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <a href="{{ route('add-slider') }}" id="addRow" class="btn btn-info">
                                Add New Slider<i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>{{ csrf_field() }}
                </div>
                <div class="table-scrollable">
                    <table class="table table-hover table-checkable order-column full-width" id="slider-datatable">
                        <thead>
                            <tr>
                                <th class="center"> No </th>
                                <th class="center"> Slider Image</th>
                                <th class="center">Slider Title</th>
                                <th class="center">Slider Text</th>
                                <th class="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection