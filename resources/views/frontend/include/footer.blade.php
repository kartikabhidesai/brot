<!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
<script src=" {{ url('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<!-- Jquery Min Js -->
<script src=" {{ url('frontend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<!-- Popper Min Js -->
<script src=" {{ url('frontend/assets/js/vendor/popper.min.js') }}"></script>
<!-- Bootstrap Min Js -->
<script src=" {{ url('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
<!-- Plugins Js-->
<script src=" {{ url('frontend/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail Js -->
<script src=" {{ url('frontend/assets/js/ajax-mail.js') }}"></script>
<!-- Active Js -->
<script src=" {{ url('frontend/assets/js/main.js') }}"></script>
<!--Date Picker-->
<script src="{{ url('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" ></script>

@if (!empty($pluginjs)) 
@foreach ($pluginjs as $value) 
<script src="{{ url('frontend/assets/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
@if (!empty($js)) 
@foreach ($js as $value) 
<script src="{{ url('frontend/assets/js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif

<script src="{{ url('frontend/assets/js/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ url('frontend/assets/js/comman_function.js') }}" ></script>

<script>
    jQuery(document).ready(function () {
        @if (!empty($funinit))
            @foreach ($funinit as $value)
                {{ $value }}
            @endforeach
        @endif
    });
</script>