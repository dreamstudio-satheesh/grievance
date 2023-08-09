<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="light" data-body-image="img-1" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')| CleanSalem - Clean Green Salem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="4MDesigner" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('admin_assets/images/favicon.ico')}}">
    @include('layouts.head-css')
    <link href="{{ URL::asset('admin_assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
</head>

@section('body')
    @include('layouts.body')
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                   
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.flash-message')
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

   

    <!-- JAVASCRIPT -->
    @include('layouts.vendor-scripts')
    
    <script src="{{ URL::asset('/admin_assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/js/pages/sweetalerts.init.js') }}"></script>
</body>

</html>
