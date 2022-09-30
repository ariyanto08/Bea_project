<!doctype html>
<html lang="en">

<head>
<title>:: Iconic :: Super Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link rel="icon" href="{{url('public') }}/assets-super-admin/images/favicon.ico" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ url('public') }}/assets-super-admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('public') }}/assets-super-admin/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('public') }}/assets-super-admin/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="{{ url('public') }}/assets-super-admin/vendor/charts-c3/plugin.css">

<!-- MAIN Project CSS file -->
<link rel="stylesheet" href="{{url('public') }}/assets-super-admin/css/main.css">
</head>
<body data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-blue">

    <!-- Page Loader -->
    @include('super-admin.section.page-loader')

    <!-- Top navbar div start -->
    @include('super-admin.section.navbar')

    <!-- main left menu -->
    @include('super-admin.section.sidebar')

    <!-- rightbar icon div -->
    @include('super-admin.section.rightbar')

    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                @yield('content')
            </div>
        </div>
    </div>

</div>
<!-- Javascript -->
<script src="{{ url('public') }}/assets-super-admin/bundles/libscripts.bundle.js"></script>
<script src="{{ url('public') }}/assets-super-admin/bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="{{ url('public') }}/assets-super-admin/vendor/toastr/toastr.js"></script>
<script src="{{ url('public') }}/assets-super-admin/bundles/c3.bundle.js"></script>

<!-- page js file -->
<script src="{{ url('public') }}/assets-super-admin/bundles/mainscripts.bundle.js"></script>
<script src="{{ url('public') }}/assets-super-admin/js/index.js"></script>
</body>
</html>
