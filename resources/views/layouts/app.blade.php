<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <!-- Icons -->
    <link rel="shortcut icon" href="">
    <!-- Styles -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">
    <style type="text/css">
    .block-content.scroll {
        max-height: calc(100vh - 180px);
        overflow-y: auto;
    }

    ::placeholder {
        color: grey !important;
        opacity: 0.6 !important;
    }

    </style>
</head>

<body>
    @guest
    @else
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed main-content-narrow side-trans-enabled">
        <nav id="sidebar" aria-label="Main Navigation">
            <div class="content-header bg-white-5">
                <a class="font-w600 text-dual" href="index.html">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary ml-1"></i>
                    </span>
                    <span class="smini-hide font-size-h5 tracking-wider">
                        Admin<span class="font-w400">Panel</span>
                    </span>
                </a>
                <div>
                    <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="js-sidebar-scroll">
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-heading" style="margin-top: -30px;font-size: 10px">Dashboard</li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/admin">
                                <i class="nav-main-link-icon fa fa-home ml-1"></i>
                                <span class="nav-main-link-name ml-3">Halaman Utama</span>
                            </a>
                        </li>
                        <li class="nav-main-heading" style="font-size: 10px">Menu</li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/slider">
                                <i class="nav-main-link-icon fa fa-images ml-1"></i>
                                <span class="nav-main-link-name ml-3">Slider</span>
                            </a>
                        </li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/cultures">
                                <i class="nav-main-link-icon fa fa-hand-holding-heart ml-1"></i>
                                <span class="nav-main-link-name ml-3">Cultures</span>
                            </a>
                        </li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/gallery">
                                <i class="nav-main-link-icon fa fa-image ml-1"></i>
                                <span class="nav-main-link-name ml-3">Gallery</span>
                            </a>
                        </li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/news">
                                <i class="nav-main-link-icon fa fa-newspaper ml-1"></i>
                                <span class="nav-main-link-name ml-3">News</span>
                            </a>
                        </li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/contact">
                                <i class="nav-main-link-icon fa fa-address-book ml-1"></i>
                                <span class="nav-main-link-name ml-3">Contact Us</span>
                            </a>
                        </li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/partner">
                                <i class="nav-main-link-icon fa fa-users ml-1"></i>
                                <span class="nav-main-link-name ml-3">Partners</span>
                            </a>
                        </li>
                        <li class="nav-main-heading" style="font-size: 10px">Konfigurasi</li>
                        <li class="nav-main-item mt-2">
                            <a class="nav-main-link" href="/configuration">
                                <i class="nav-main-link-icon fa fa-globe ml-1"></i>
                                <span class="nav-main-link-name ml-3">Website Konfigurasi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header id="page-header">
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual d-flex align-items-center" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0" aria-labelledby="page-header-user-dropdown">
                            <div class="p-2">
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <span class="fa fa-power-off" style="color: red"></span><span class="font-size-sm font-w500" style="color: red">Log Out</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @endguest
        @yield('content')
        @guest
        @else
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                        Developed with <i class="fa fa-heart text-danger"></i> by Burningroom
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        Hak Cipta &copy; 2021
                    </div>
                </div>
            </div>
        </footer>
        @endguest
    </div>
    <!-- JS Core -->
    <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>
    <!-- JS -->
    <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Page JS Code -->
    <!-- Page JS Helpers (jQuery Sparkline Plugins) -->
    <script>
    jQuery(function() {
        One.helpers(['sparkline']);
    });

    function showPassword() {
        var x = document.getElementById("password");
        var i = document.getElementById("changeicon");

        if (x.type === "password") {
            i.setAttribute("class", "fa fa-eye");
            x.type = "text";
        } else {
            i.setAttribute("class", "fa fa-eye-slash");
            x.type = "password";
        }

    }

    </script>
    @yield('javascript')
</body>

</html>
