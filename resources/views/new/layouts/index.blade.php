<!DOCTYPE html>

<html lang="en" class="ie8 no-js">
<html lang="en" class="ie9 no-js">

<html lang="en">


<head>
    <meta charset="utf-8"/>
    <title>Metronic Admin Theme #2 | Admin Dashboard 2</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports"
          name="description"/>
    <meta content="" name="author"/>
    @include('new.layouts.css')

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
@include('new.layouts.header')

<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('new.layouts.sidebar')

<!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
        @include('new.layouts.breadcrumb')

        <!-- END PAGE HEADER-->
            @yield('content')
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('new.layouts.footer')

<!-- END FOOTER -->
@include('new.layouts.js')

</body>

</html>
