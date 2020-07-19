@extends('layouts.master', ['title' => 'صفحه اصلی'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
    </style>




    @if(session()->has('welcome'))
        <div class="modal fade" id="welcome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-header py-5">
                        <h5 class="modal-title">
                            خوش آمدید
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>

                    <div style="padding: 50px;font-size: 17px;" class="modal-body">
                        به سامانه یکپارچه تصمیم ساز مدیریت پروژه رامپکو خوش آمدید.
                        <br>
                        لطفا از طریق کلیک زیر نسبت به تکمیل مشخصات و تغییر رمز ورود خود اقدام نمایید.
                        <br>
                          ویا میتوانید با کلیک برروی گزینه "بستن" به بررسی سامانه بپردازید.
                        <br><br>
                        <center>
                            <a href="/profile">
                                <button style="margin: 20px; display: inline !important; " type="button"
                                        class=" btn btn-outline-danger btn-sm colorChanger"> ویرایش مشخصات </button>
                            </a>
                        </center>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    </div>
                </div>
            </div>
        </div>



    @endif




    <!--begin::Modal-->
    <div class="modal fade" id="darYekNegah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/دریک نگاه.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->


    <!--begin::Modal-->
    <div class="modal fade" id="vaqayemohem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/وقایع مهم.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="mohandesi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/مهندسی.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="sakhteman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/ساختمان و نصب.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="modiriatHazine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/مدیریت هزینه.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="modiriatRisk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/مدیریت ریسک.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="modiriatManabe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/مدیریت منابع.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <!--begin::Modal-->
    <div class="modal fade" id="imeniVaBehdasht" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/ایمنی، بهداشت و محیط زیست.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->


    <!--begin::Modal-->
    <div class="modal fade" id="kala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/کالا ۱.png" alt="">
                    <img style="width: 100%; max-height: 600px" src="/reports/pic/کالا ۲.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->



















    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">صفحه اصلی</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('under') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>آخرین وضعیت</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/glance.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


                <div class="col-xl-3 col-lg-6 col-md-6">
                    <a style="cursor: pointer;" href="{{ route('glance') }}">
                        <div class="kt-portlet">
                            <div class="kt-portlet__body">
                                <div class="kt-widget__files">
                                    <div class="kt-widget__media mb-5">
                                        <h3>رامپکو دریک نگاه</h3>
                                    </div>
                                    <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/look.png" alt="image"></center>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



            <div class="col-xl-3 col-lg-6 col-md-6">
                {{--<a style="cursor: pointer;" data-toggle="modal" data-target="#darYekNegah">--}}
                <a style="cursor: pointer; " href="{{ route('pm.dashboard') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>داشبورد پروژه</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="45px" src="/assets/media/index/dashboard.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('under') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>وقایع مهم</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/events.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>



        </div>
        <div class="row">


            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('tdl.index') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>ارجاعات</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/erjaat.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('engineering.index') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>مهندسی</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="45px" src="/assets/media/index/engineering.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
              <a  href="{{ route('procurement.dashboard') }}" >
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>کالا</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Goods.png" alt="image"></center>
                        </div>
                    </div>
                </div>
              </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('construction.dashboard') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>ساختمان و نصب</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/building-icon.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>



        </div>
        <div class="row">


            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('calendar') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>تقویم</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/Calendar.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('under') }}">
                    <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>مدیریت هزینه</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/cost.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('risk.index') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>مدیریت ریسک</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/risk.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('under') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3>مدیریت منابع</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/resource.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>



        </div>
        <div class="row">


            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('weather') }}">
                    <div style="    height: 167px;" class="kt-portlet">
                        <div  class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>آب و هوا</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/glance.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('hse.index') }}">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <h3 style="font-size: 20px!important;    margin-bottom: 56px;">ایمنی، بهداشت و محیط زیست</h3>
                            </div>
                            <center><img class="kt-widget__img kt-hidden-" width="40px" src="/assets/media/index/Health.png" alt="image"></center>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('gallery.index') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>گالری تصاویر</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6">
                <a style="cursor: pointer;" href="{{ route('under') }}">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-widget__files">
                                <div class="kt-widget__media mb-5">
                                    <h3>دوربین مداربسته</h3>
                                </div>
                                <center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/CCTV.png" alt="image"></center>
                            </div>
                        </div>
                    </div>
                </a>
            </div>



        </div>




    </div>
    <!-- end:: Content -->
    </div>
    </div>

@stop
