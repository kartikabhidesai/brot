<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Brot</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ url('public/frontend/assets/img/favicon.ico') }}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href=" {{ url('public/frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href=" {{ url('public/frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- IonIcon CSS -->
    <link href=" {{ url('public/frontend/assets/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href=" {{ url('public/frontend/assets/css/plugins.css') }}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href=" {{ url('public/frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('public/admin/assets/css/toastr.min.css') }}" rel="stylesheet">
    <script>
        var baseurl = "{{ asset('/') }}";
    </script>
    @if (!empty($plugincss)) 
    @foreach ($plugincss as $value) 
    @if(!empty($value))
    <link rel="stylesheet" href="{{ url('public/frontend/assets/plugins/'.$value) }}">
    @endif
    @endforeach
    @endif
    @if (!empty($css)) 
    @foreach ($css as $value) 
    @if(!empty($value))
    <link rel="stylesheet" href="{{ url('public/frontend/assets/'.$value) }}">
    @endif
    @endforeach
    @endif
</head>