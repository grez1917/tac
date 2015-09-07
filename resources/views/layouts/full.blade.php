<!DOCTYPE html>
<html lang="en">

@include('includes.head-general')
@yield('head')

<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                        @include('includes.profileQuickInfo')
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                        @include('includes.sidebarMenu')
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                        @include('includes.menuFooterButtons')
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
                @include('includes.topNavigation')
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">
			@yield('content')
            <!-- /page content -->
			</div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- footer script -->
        @include('includes.footer-script')
        @yield('footer-script')
    <!-- /footer script -->    
</body>

</html>
