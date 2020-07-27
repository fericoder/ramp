<!DOCTYPE html>
<html lang="fa">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>رامپکو | ورود به سیستم</title>
    <meta name="description" content="سامانه يكپارچه تصميم ساز مديريت پروژه رامپکو">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="/assets/css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <link href="/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading" style="direction: rtl; text-align:right">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Content-->
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <!--begin::Wrapper-->
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <!--begin::Logo-->
                <a href="#" class="login-logo pb-xl-20 pb-15">
                    <img src="/assets/ramco.png" class="mr-lg-35" style="width:200px;    margin-top: -130px;" alt="" />
                </a>
                <!--end::Logo-->
                <!--begin::Signin-->
                <div class="login-form">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <!--begin::Title-->
                        <div class="pb-5 pb-lg-15" style="text-align:center">
                            <h3 style="margin-bottom: 30px" class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">ورود به سیستم</h3>
                            <a href="" class="text-primary font-weight-bolder" style="font-size:20px; ">سامانه يكپارچه تصميم ساز مديريت پروژه رامپکو</a>
                        </div>
                        <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">نام کاربری </label>
                            <input style="direction: ltr; text-align: left" class="form-control @error('email') is-invalid @enderror form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text" name="email" autocomplete="off" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">رمز عبور</label>
                            </div>
                            <input style="direction: ltr; text-align: left" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror"" type="password" name="password" autocomplete="off" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5 text-center">
                            <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">ورود به سیستم</button>

                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Content-->
        <!--begin::Aside-->
        <div style="direction: ltr!important; background: linear-gradient(147.04deg, #006091 0.74%, #3699ffad 99.61%)!important;" class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
            <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url(https://image.freepik.com/free-vector/erp-enterprise-resource-planning-isometric-landing_107791-658.jpg); ">
                <!--begin::Aside title-->
                <h3 style="font-size: 3.6rem !important;" class="pt-lg-30 pl-lg-40 pb-lg-0 pr-30 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display4 display2-lg text-white">سامانه
                    <br />یکپارچه تصمیم ساز دارا
                </h3>
                <img src="/assets/RIECO.png" class="pt-lg-30" style="margin-right:230px; width:450px">
                <!--end::Aside title-->
            </div>
        </div>
        <!--end::Aside-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<!--begin::Global Config(global config for global JS scripts)-->
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="/assets/js/pages/custom/login/login-4.js"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
