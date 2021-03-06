<script src="{{ url('public/admin/assets/plugins/jquery/jquery.min.js') }}" ></script>
<script src="{{ url('public/admin/assets/plugins/popper/popper.min.js') }}" ></script>
<script src="{{ url('public/admin/assets/plugins/jquery-blockui/jquery.blockui.min.js') }}" ></script>
<script src="{{ url('public/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ url('public/admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
<script src="{{ url('public/admin/assets/plugins/sparkline/jquery.sparkline.min.js') }}" ></script>
<script src="{{ url('public/admin/assets/js/pages/sparkline/sparkline-data.js') }}" ></script>
<!--data table-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- Common js-->
<script src="{{ url('public/admin/assets/js/app.js') }}" ></script>
<script src="{{ url('public/admin/assets/js/layout.js') }}" ></script>
<script src="{{ url('public/admin/assets/js/theme-color.js') }}" ></script>
<!-- material -->
<script src="{{ url('public/admin/assets/plugins/material/material.min.js') }}"></script>
<!-- animation -->
<script src="{{ url('public/admin/assets/js/pages/ui/animations.js') }}" ></script>
<!-- morris chart -->

<script src="{{ url('public/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" ></script>




<!-- end js include path -->    

@if (!empty($pluginjs)) 
@foreach ($pluginjs as $value) 
<script src="{{ url('public/admin/assets/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
@if (!empty($js)) 
@foreach ($js as $value) 
<script src="{{ url('public/admin/assets/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif

<script src="{{ url('public/admin/assets/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/admin/assets/js/comman_function.js') }}" ></script>

<script>
jQuery(document).ready(function() {
@if (!empty($funinit))
    @foreach ($funinit as $value)
{{  $value }}
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