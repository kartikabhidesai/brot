<!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
<script src=" {{ url('public/frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<!-- Jquery Min Js -->
<script src=" {{ url('public/frontend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<!--data table-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- Popper Min Js -->
<script src=" {{ url('public/frontend/assets/js/vendor/popper.min.js') }}"></script>
<!-- Bootstrap Min Js -->
<script src=" {{ url('public/frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
<!-- Plugins Js-->
<script src=" {{ url('public/frontend/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail Js -->
<script src=" {{ url('public/frontend/assets/js/ajax-mail.js') }}"></script>
<!-- Active Js -->
<script src=" {{ url('public/frontend/assets/js/main.js') }}"></script>
<!--Date Picker-->
<script src="{{ url('public/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" ></script>

@if (!empty($pluginjs)) 
@foreach ($pluginjs as $value) 
<script src="{{ url('public/frontend/assets/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
@if (!empty($js)) 
@foreach ($js as $value) 
<script src="{{ url('public/frontend/assets/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif

<script src="{{ url('public/frontend/assets/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/frontend/assets/js/comman_function.js') }}" ></script>

<script>
jQuery(document).ready(function () {
@if (!empty($funinit))
        @foreach ($funinit as $value)
{{ $value }}
@endforeach
        @endif
});
</script>
<script>
    $(document).ready(function () {
        $('#mydatatable').DataTable();
    });
</script>
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="favoritesModalLabel"></h4>
            </div>
            <div class="modal-body">
                <p>
                <h4>Are you sure?</h4>
                <b><span id="fav-title">You want to delete this record?</span></b> 
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                <span class="pull-right">
                    <button type="button" class="btn btn-primary yes-sure" >DELETE</button>
                </span>
            </div>
        </div>
    </div>
</div>