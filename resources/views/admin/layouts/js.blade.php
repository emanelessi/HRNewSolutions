<script src="{{url('/')}}/assets/global/plugins/respond.min.js"></script>
<script src="{{url('/')}}/assets/global/plugins/excanvas.min.js"></script>
<script src="{{url('/')}}/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{url('/')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

@yield('js')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/')}}/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{url('/')}}/assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->


@stack('js')
