<!doctype html>
<html lang="{{app()->getLocale()}}" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('AdminTemplate/assets/images/brand/favicon.png')}}" />

    <!-- TITLE -->
    <title>@lang('Kavak - Kavak') </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('AdminTemplate/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('AdminTemplate/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('AdminTemplate/assets/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('AdminTemplate/assets/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('AdminTemplate/assets/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('AdminTemplate/assets/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('AdminTemplate/assets/colors/color1.css')}}" />

</head>

<body class="app sidebar-mini ltr light-mode">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{asset('AdminTemplate/assets/images/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <div class="app-header header sticky">
            <div class="container-fluid main-container">
                <div class="d-flex">
                    <!-- sidebar-toggle-->
                    <a class="logo-horizontal " href="{{route('admin.home')}}">
                        <img src="{{asset('AdminTemplate/assets/images/brand/logo-dark.png')}}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{asset('AdminTemplate/assets/images/brand/logo-dark.png')}}" class="header-brand-img light-logo1"
                             alt="logo">
                    </a>
                    <!-- LOGO -->

                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <div class="dropdown d-none">
                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                <i class="fe fe-search"></i>
                            </a>
                            <div class="dropdown-menu header-search dropdown-menu-start">
                                <div class="input-group w-100 p-2">
                                    <input type="text" class="form-control" placeholder="Search....">
                                    <div class="input-group-text btn btn-primary">
                                        <i class="fe fe-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SEARCH -->
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2">
                                    <div class="dropdown d-lg-none d-flex">
                                        <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                            <i class="fe fe-search"></i>
                                        </a>
                                    </div>

                                    <!-- SIDE-MENU -->
                                    <div class="dropdown d-flex profile-1">
                                        <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                            {{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                            <a class="dropdown-item" href="{{route('admin.logout')}}">
                                                <i class="dropdown-icon fe fe-log-out"></i>@lang('Çıkış Yap')
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="app-sidebar">
                <div class="side-header">
                    <a class="header-brand1" href="{{route('admin.home')}}">
                        <img src="{{asset('AdminTemplate/assets/images/brand/logo-dark.png')}}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{asset('AdminTemplate/assets/images/brand/logo-dark.png')}}" class="header-brand-img toggle-logo"
                             alt="logo">
                        <img src="{{asset('AdminTemplate/assets/images/brand/logo-dark.png')}}" class="header-brand-img light-logo" alt="logo">
                        <img src="{{asset('AdminTemplate/assets/images/brand/logo-dark.png')}}" class="header-brand-img light-logo1"
                             alt="logo">
                    </a>
                    <!-- LOGO -->
                </div>
                <div class="main-sidemenu">
                    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                          fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                        </svg></div>
                    <ul class="side-menu">
                        <li class="sub-category">
                            <h3>@lang('İşlemler')</h3>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.home')}}"><i
                                    class="side-menu__icon fe fe-home"></i><span
                                    class="side-menu__label">@lang('Anasayfa')</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.test')}}"><i
                                    class="side-menu__icon fe fe-file-text"></i>@lang('Test')</a>
                        </li>
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                                                   width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                        </svg></div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->
        </div>

        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">
