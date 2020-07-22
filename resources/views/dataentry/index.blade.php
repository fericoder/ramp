@extends('layouts.master', ['title' => 'پنل ورود اطلاعات'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
    </style>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">پنل ورود اطلاعات</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">


        <div class="row">

            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">

                            <div style="direction:rtl" class="kt-widget__body text-center ">

                                <nav class="navbar navbar-expand-lg navbar-light bg-light">


                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle nav-color" href="{{ route('engineering.create') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> مهندسی</a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('engineering.create') }}">داشبورد مهندسی</a>
                                                    <a class="dropdown-item" href="{{ route('dcc.edit') }}">مرکز کنترل اسناد</a>
                                                    <a class="dropdown-item" href="{{ route('vpis.create') }}">مهندسی خرید</a>

                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   کالا
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a href="{{ route('rci.create') }}" class="dropdown-item">فهرست درخواست های کالا</a>

                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    ساختمان و نصب
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="#"></a>
                                                    <a class="dropdown-item" href="#"> </a>

                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle nav-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   سایر
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('Dataentry.events') }}"> رویدادها و چالش های پروژه</a>
                                                </div>
                                            </li>

                                        </ul>
                                        <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="search" placeholder="جست و جو" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">جست و جو کنید</button>
                                        </form>
                                    </div>
                                </nav>
<div  style=" display:none;">
                                <a  href="{{ route('engineering.create') }}" class="kt-widget__item kt-widget__item--active disabled"> داشبورد مهندسی</a>
                                <a href="{{ route('dcc.edit') }}" class="kt-widget__item kt-widget__item--active"> مرکز کنترل اسناد</a>
                                <a href="{{ route('vpis.create') }}" class="kt-widget__item kt-widget__item--active">مهندسی خرید</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-xl-12" style=" display:none;">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <h3>کالا</h3><hr>
                            <div style="direction: ltr" class="kt-widget__body text-center ">
                                <a href="{{ route('rci.create') }}" class="kt-widget__item kt-widget__item--active">فهرست درخواست های کالا</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12" style=" display:none;">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <h3>ساختمان و نصب</h3><hr>
                            <div style="direction: ltr" class="kt-widget__body text-center ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12" style=" display:none;">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <h3>سایر</h3><hr>
                            <div style="direction: ltr" class="kt-widget__body text-center ">
                                <a href="{{ route('Dataentry.events') }}" class="kt-widget__item kt-widget__item--active">رویداد ها و چالش های پروژه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









        </div>









    </div>
    <!-- end:: Content -->
    </div>
    </div>

@stop
