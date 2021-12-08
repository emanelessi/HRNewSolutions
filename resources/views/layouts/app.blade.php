@extends('includes.jsModal')
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('includes.css')

</head>
<body>
<div id="app"
     style="font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5">
    <div class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
         style="height: 82px;background-color: #eef1f5;">
        <div class="container">
            <div class="page-header navbar ">
                <div class="page-header-inner ">
                    <div class="page-logo" style="margin-top: -14px;">
                        <a href="{{ route('home') }}">
                            <img src="http://127.0.0.1:8000/assets/layouts/layout2/img/logo-default.png" alt="logo"
                                 class="logo-default"/>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 20px;">
                        <ul class="navbar-nav ml-auto"
                            style="float: right;padding:10px ;border-color: #32c5d2;border: 20px; color: #fff;margin-right: -50px">
                            <!-- Authentication Links -->
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
                                <div class="page-top" style="margin-top: -23px;margin-left: 6px;">
                                    <div class="top-menu">
                                        <ul class="nav navbar-nav pull-right">
                                            <li class="dropdown dropdown-user">
                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                                   data-hover="dropdown" data-close-others="true">
                                                    <img alt="" class="img-circle"
                                                         src="{{asset('storage/'.auth()->user()->photo)}}"/>
                                                    <span
                                                        class="username username-hide-on-mobile"> {{ auth()->user()->first_name }} {{auth()->user()->last_name}} </span>
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
                                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none" style="margin-top: -28px;">
                                                    @csrf
                                                </form>
                                                <i class="icon-logout"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endguest
                                </nav>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>

</body>
</html>






