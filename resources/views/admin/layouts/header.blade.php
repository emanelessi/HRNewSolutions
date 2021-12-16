<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{ route('adminHome') }}">
                <img src="{{url('/')}}/assets/layouts/layout2/img/logo-default.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN PAGE TOP -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item" style="list-style-type: none">
                    <a class="nav-link"
                       style="color: whitesmoke;background-color: #32c5d2;padding:10px"
                       href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item" style="list-style-type: none">
                    <a class="nav-link"
                       style="color: whitesmoke;margin-left: 10px;background-color: #32c5d2;;padding:10px"
                       href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <div class="page-top">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                               data-close-others="true">
                                <img alt="" class="img-circle"
                                     src="{{asset('storage/'.auth()->user()->photo)}}"/>
                                <span
                                    class="username username-hide-on-mobile"> {{ auth()->user()->first_name }} {{auth()->user()->last_name}}  </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{url('/profile')}}">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{url('/profile/edit')}}">
                                        <i class="icon-user"></i> Edit Profile </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="margin-bottom: -28px;"
                                  class="d-none">
                                @csrf
                            </form>
                            <i class="icon-logout"></i>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
                @endguest
            </div>
            <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>

