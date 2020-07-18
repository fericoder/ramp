@extends('layouts.master', ['title' => 'پروفایل'])



<style>

    .title{
        margin-top: 0px;
        margin-bottom: 15px;
    }

    .timeline {
        position: relative;
    }
    .timeline::before {
        content: '';
        background: #C5CAE9;
        width: 5px;
        height: 95%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .timeline-item {
        width: 100%;
        margin-bottom: 0px;
    }
    .timeline-item:nth-child(even) .timeline-content {
        float: right;
        padding: 0px 30px 0px 30px;
    }
    .timeline-item:nth-child(even) .timeline-content .date {
        right: auto;
        left: 0;
    }
    .timeline-item:nth-child(even) .timeline-content::after {
        content: '';
        position: absolute;
        border-style: solid;
        width: 0;
        height: 0;
        top: 30px;
        left: -15px;
        border-width: 10px 15px 10px 0;
        border-color: transparent #f5f5f5 transparent transparent;
    }
    .timeline-item::after {
        content: '';
        display: block;
        clear: both;
    }

    .timeline-content {
        position: relative;
        width: 45%;
        padding: 0px 120px;
        border-radius: 4px;
        background: #f5f5f5;
        box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
    }
    .timeline-content::after {
        content: '';
        position: absolute;
        border-style: solid;
        width: 0;
        height: 0;
        top: 30px;
        right: -15px;
        border-width: 10px 0 10px 15px;
        border-color: transparent transparent transparent #f5f5f5;
    }

    .timeline-img {
        width: 30px;
        height: 30px;
        background: #3F51B5;
        border-radius: 50%;
        position: absolute;
        left: 50%;
        margin-top: 25px;
        margin-left: -15px;
    }


    .timeline-card {
        padding: 0 !important;
    }
    .timeline-card p {
        padding: 0 20px;
    }
    .timeline-card a {
        margin-left: 20px;
    }

    .timeline-item .timeline-img-header {
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url("https://picsum.photos/1000/800/?random") center center no-repeat;
        background-size: cover;
    }

    .timeline-img-header {
        height: 200px;
        position: relative;
        margin-bottom: 20px;
    }
    .timeline-img-header h2 {
        color: #FFFFFF;
        margin-top: 40px;
        margin-bottom: 15px;
        position: absolute;
        bottom: 5px;
        left: 20px;
    }

    blockquote {
        margin-top: 30px;
        color: #757575;
        border-left-color: #3F51B5;
        padding: 0 20px;
    }

    .date {
        background: #3f51b5;
        display: inline-block;
        color: #FFFFFF;
        padding: 10px;
        direction: rtl;
        font-family: iranyekan;
        position: absolute;
        top: 0;
        right: 0;
    }

    @media screen and (max-width: 768px) {
        .timeline::before {
            left: 50px;
        }
        .timeline .timeline-img {
            left: 50px;
        }
        .timeline .timeline-content {
            max-width: 100%;
            width: auto;
            margin-left: 70px;
        }
        .timeline .timeline-item:nth-child(even) .timeline-content {
            float: none;
        }
        .timeline .timeline-item:nth-child(odd) .timeline-content::after {
            content: '';
            position: absolute;
            border-style: solid;
            width: 0;
            height: 0;
            top: 30px;
            left: -15px;
            border-width: 10px 15px 10px 0;
            border-color: transparent #f5f5f5 transparent transparent;
        }
    }
    p{
        direction: rtl;
    }



</style>



@section('content')




    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد آپادانا </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">پروفایل</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Dashboard 2-->
        <!--Begin::Row-->

        <!--End::Row-->

        <!--Begin::Row-->


        <!--Begin::Row-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">اطلاعات کاربری</small></h3>
                            </div>

                        </div>

                        @if ($errors->any())
                            <div style="background-color: #e47474" class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form action="{{ route('profile.update') }}" method="post" class="kt-form kt-form--label-right">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">نام: <span style="color: red; font-size: 20px">*</span> </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="fName" value="{{ old('fName', $user->fName) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">نام خانوادگی:<span style="color: red; font-size: 20px">*</span></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="lName" value="{{ old('lName', $user->lName) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">شماره موبایل:<span style="color: red; font-size: 20px">*</span></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="text" name="mobile" value="{{ old('mobile', $user->mobile) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">سمت سازمانی:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="text" class="form-control" name="position" value="{{ old('position', $user->position) }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">آدرس ایمیل:<span style="color: red; font-size: 20px">*</span></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"></div>
                                                    <input type="text" class="form-control" disabled value="{{ $user->email }}" >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" class="btn btn-success">بروزرسانی</button>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">تغییر تصویر پروفایل</small></h3>
                            </div>

                        </div>


                        <form action="{{ route('profile.updateAvatar') }}" enctype="multipart/form-data" method="post" class="kt-form kt-form--label-right">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">تصویر پروفایل: <span style="color: red; font-size: 20px">*</span> </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div style="max-width: 299px; direction: rtl; text-align: right;float: right;" class="custom-file">
                                                    <input type="file" name="avatar" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">جهت بارگذاری فایل، کلیک کنید</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" class="btn btn-success">بروزرسانی</button>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="col-xl-6">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">تغییر رمز عبور</small></h3>
                            </div>

                        </div>


                        <form action="{{ route('profile.updatePassword') }}" method="post" class="kt-form kt-form--label-right">
                            @csrf
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">رمز عبور جدید: <span style="color: red; font-size: 20px">*</span> </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control" type="password" name="password">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <button type="submit" class="btn btn-success">بروزرسانی</button>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </div>        <!--End::Row-->
        <!--End::Dashboard 2-->
    </div>
    <!-- end:: Content -->
    </div>
    </div>

@stop


@section('footerScripts')
    <script src='/js/scrollreveal.min.js'></script>

    <script>
        $(function() {
            window.sr = ScrollReveal();

            if ($(window).width() < 768) {
                if ($(".timeline-content").hasClass("js--fadeInLeft")) {
                    $(".timeline-content")
                        .removeClass("js--fadeInLeft")
                        .addClass("js--fadeInRight");
                }

                sr.reveal(".js--fadeInRight", {
                    origin: "right",
                    distance: "300px",
                    easing: "ease-in-out",
                    duration: 800
                });
            } else {
                sr.reveal(".js--fadeInLeft", {
                    origin: "left",
                    distance: "300px",
                    easing: "ease-in-out",
                    duration: 800
                });

                sr.reveal(".js--fadeInRight", {
                    origin: "right",
                    distance: "300px",
                    easing: "ease-in-out",
                    duration: 800
                });
            }

            sr.reveal(".js--fadeInLeft", {
                origin: "left",
                distance: "300px",
                easing: "ease-in-out",
                duration: 800
            });

            sr.reveal(".js--fadeInRight", {
                origin: "right",
                distance: "300px",
                easing: "ease-in-out",
                duration: 800
            });
        });
    </script>



@stop