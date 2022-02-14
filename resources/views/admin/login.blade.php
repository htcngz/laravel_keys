<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('AdminTemplate')}}/assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>@lang('Admin - Giriş')</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('AdminTemplate')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('AdminTemplate')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('AdminTemplate')}}/assets/css/dark-style.css" rel="stylesheet" />
    <link href="{{asset('AdminTemplate')}}/assets/css/transparent-style.css" rel="stylesheet">
    <link href="{{asset('AdminTemplate')}}/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('AdminTemplate')}}/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('AdminTemplate')}}/assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr">

<!-- BACKGROUND-IMAGE -->
<div class="login-img">

    <!-- GLOABAL LOADER -->
    <div id="global-loader">
        <img src="{{asset('AdminTemplate')}}/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOABAL LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="">

            <!-- CONTAINER OPEN -->

            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form" action="{{route('admin.loginPost')}}" method="post">
                        @csrf
                            <span class="login100-form-title pb-5">
                                @lang('Admin - Giriş')
                            </span>
                        <div class="panel panel-primary">

                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="email" name="email" placeholder="@lang('Lütfen e-posta adresinizi giriniz.')">
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="password" name="password" placeholder="@lang('Lütfen şifrenizi giriniz.')">
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button class="btn btn-primary">@lang('Giriş Yap')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>
<!-- BACKGROUND-IMAGE CLOSED -->

<!-- JQUERY JS -->
<script src="{{asset('AdminTemplate')}}/assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('AdminTemplate')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{asset('AdminTemplate')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SHOW PASSWORD JS -->
<script src="{{asset('AdminTemplate')}}/assets/js/show-password.min.js"></script>

<!-- GENERATE OTP JS -->
<script src="{{asset('AdminTemplate')}}/assets/js/generate-otp.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('AdminTemplate')}}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- Color Theme js -->
<script src="{{asset('AdminTemplate')}}/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{asset('AdminTemplate')}}/assets/js/custom.js"></script>

</body>

</html>
