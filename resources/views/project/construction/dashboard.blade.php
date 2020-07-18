@extends('layouts.master', ['title' => 'پروژه -> ساختمان و نصب'])

@section('headerScripts')
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        #progressPhases{
            width: 100%;
            height: 500px;
        }
        .kt-widget24__stats{
            font-size: 2.75rem!important;
        }
        .kt-widget1 .kt-widget1__item{
            padding: 0.3rem 0!important;
        }
        .kt-widget1 .kt-widget1__item .kt-widget1__number{
            font-size: 1.6rem!important;
        }
    </style>






@stop


@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">پروژه </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">داشبورد گزارشات ساختمان و نصب</span>
            </div>
            <span style="padding:10px" class="badge badge-primary iranyekan ">تاریخ آخرین بروزرسانی گزارش: ۱۳۹۹/۰۲/۳۱</span>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-xl">
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-1 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">پیشرفت برنامه ای:</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">برنامه:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-brand">% 85.81</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">واقعی:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">% 80.35</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">انحراف:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">% 5.46-</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-1 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-2 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">وضعیت نیروی انسانی :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">مستقیم</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">۱۰۰</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">غیرمستقیم</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success"> ۱۰۰</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">مجموع</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">۱۰۰</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-2 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">ایمنی، بهداشت و محیط زیست : :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">نفر ساعت کارکرد</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">3,454,540</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">نفر ساعت بدون حادثه منجر به فوت</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">-</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 style="font-size: 12px;" class="kt-widget1__title">نفر ساعت بدون حادثه منجر به اتلاف وقت</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">55,692</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-3 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">روزهای باقیمانده طبق برنامه:</p>
                            {{--<div class="kt-widget1__item">--}}
                                {{--<div class="kt-widget1__info">--}}
                                    {{--<h3 class="kt-widget1__title">مبلغ كل پرفرما:</h3>--}}
                                {{--</div>--}}
                                {{--<span class="kt-widget1__number kt-font-info"> 17,105,500 یورو</span>--}}
                            {{--</div>--}}

                        </div>
                        <!--end:: Widgets/Stats2-3 -->
                    </div>
                </div>
            </div>
        </div>


        <a style="margin-bottom: 20px;" class="weatherwidget-io" href="https://forecast7.com/en/27d4752d61/asaluyeh/" data-label_1="ASALUYEH" data-label_2="WEATHER" data-icons="Climacons Animated" data-theme="original" >ASALUYEH WEATHER</a>
        <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script>


        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                نمودار پیشرفت ساختمان و نصب
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#S-Curve" aria-expanded="true"> نمودار پیشرفت ساختمان و نصب </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#Overall" aria-expanded="false"> جدول پیشرفت ساختمان و نصب</a>
                                </li>

                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="S-Curve" aria-expanded="true" aria-labelledby="base-tab11">


                                    <div class="row">



                                        <!-- Multi Text Column -->
                                        <div class="col-md-3 br-r">
                                            <small class="pull-right fw600 text-primary">Analytical Program Progress: </small>
                                            </h5>
                                            <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                                <tbody>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Expected Month Plan:</span>
                                                    </td>
                                                    <td>1.92%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Month Plan:</span>
                                                    </td>
                                                    <td>0.58%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Next Month Plan: </span>
                                                    </td>
                                                    <td>1.32%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>ForeCast Plan: </span>
                                                    </td>
                                                    <td>0.35%</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            <br>
                                            <small class="pull-right fw600 text-primary">Analytical Financial Progress: </small>
                                            </h5>


                                            <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                                <tbody>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Expected Budget Plan:</span>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Budget Plan: </span>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Budget Required UpTo Now:</span>
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Flag/Icon Column -->


                                        <!-- Chart Column -->
                                        <div class="col-md-9 pln br-r mvn15">
                                            <div id="amcurve" style="width: 100%; height: 450px; margin: 0 auto;text-align: right"></div>
                                        </div>
                                    </div>



                                </div>
                                <div class="tab-pane" id="Overall" aria-labelledby="base-tab12">
                                    <div class="text-align:center;direction:rtl;font-family:Bekan">
                                    </div>
                                    <table style="direction:rtl;text-align:right;font-family:BYekan;" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr style="direction: rtl" >
                                            <th style="direction: rtl;text-align:center;background-color:#e2efda" scope="col" style="width:450px !important"> شرح </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> درصد وزنی </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> برنامه ماهانه </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> واقعی ماهانه </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> انحراف ماهانه </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> واقعی تجمعی </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> برنامه تجمعی </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> انحراف تجمعی </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>تحویل و آماده سازی زمین  </td>
                                            <td style="direction: rtl;text-align:center" > 3.95% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 98.00% </td>
                                            <td style="direction: rtl;text-align:center" > 98.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                        </tr>


                                        <tr>
                                            <td>سيويل و ساختمان  </td>
                                            <td style="direction: rtl;text-align:center" > 38.16% </td>
                                            <td style="direction: rtl;text-align:center" > 1.29% </td>
                                            <td style="direction: rtl;text-align:center" > 0.21% </td>
                                            <td style="direction: rtl;text-align:center" > -1.08% </td>
                                            <td style="direction: rtl;text-align:center" > 55.23% </td>
                                            <td style="direction: rtl;text-align:center" > 53.17% </td>
                                            <td style="direction: rtl;text-align:center" > -2.06% </td>
                                        </tr>
                                        <tr>
                                            <td>نصب و پيش راه اندازی </td>
                                            <td style="direction: rtl;text-align:center" > 57.89% </td>
                                            <td style="direction: rtl;text-align:center" > 0.02% </td>
                                            <td style="direction: rtl;text-align:center" > 0.01% </td>
                                            <td style="direction: rtl;text-align:center" > -0.01% </td>
                                            <td style="direction: rtl;text-align:center" > 16.28% </td>
                                            <td style="direction: rtl;text-align:center" > 18.06% </td>
                                            <td style="direction: rtl;text-align:center" > 1.78% </td>
                                        </tr>

                                        <tr>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > پیشرفت کل  </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 100.00% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 0.50% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 0.08% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > -0.42% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 34.37% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 34.61% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 0.25% </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>






                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div style="margin: 10px">

            <p style="float: right;font-family: 'byekan';padding: 10px 15px 5px 10px;    color: white;font-size: 20px;">اهم فعالیت های انجام شده
                <span data-toggle="modal" data-target="#myModal2" class="flaticon2-list-2"></span>
            </p>

            <div style="background: #9d2f31 ; border-radius: 10px!important;     width: 100%; height: auto;">
                <marquee style="color: white;font-size: 16px;font-family: byekan;width: 100%; direction: rtl" direction="right" attribute_name="attribute_value">
                    @foreach($events->where('type', 'فعالیت انجام شده') as $event)
                        <span style="direction: rtl!important;"> {{$event->description}}</span>
                        {!! "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" !!}
                    @endforeach
                </marquee>


                <div id="myModal2" class="modal fade" role="dialog">
                    <div style="width: 90%;" class="modal-dialog modal-xl">

                        <!-- Modal content-->
                        <div style="" class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                                <p style=" font-size: 25px;direction: rtl;text-align:right;font-family: byekan;">

                                     @foreach($events->where('type', 'فعالیت انجام شده') as $event)
                                         {{ $event->description }} <span style="color:red" ></span>
                                        {!! "<br><br>" !!}
                                    @endforeach

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div><br><br>










        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                آخرین وضعیت پیشرفت احجام پروژه
                            </h3>
                        </div>
                        <div style="" class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <table style="font-family: iranyekan; width: 100%; direction: rtl; " class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_4">
                                <thead>
                                <style>
                                    td, th {
                                        color: black !important;
                                        text-align: center;
                                    }
                                </style>

                                <tr style="background-color: #cecdcd;">
                                    <th style="text-align: center; direction: rtl; font-family: BYekan">شـرح فعاليت</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">برآورد کل </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">واحد </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">انجام شده تاکنون </th>
                                    <th > درصد پیشرفت </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">باقیمانده </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">رکورد حاصله</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr style="text-align: center;">
                                    <td>بتن ریزی</td>
                                    <td>38,800</td>
                                    <td>متر مکعب</td>
                                    <td>33,922</td>
                                    <td>87.4%</td>
                                    <td>4,878</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>لوله کشی زیر زمینی</td>
                                    <td>45,000</td>
                                    <td>اینچ قطر</td>
                                    <td>20,641</td>
                                    <td>45.9%</td>
                                    <td>24,359</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>لوله کشی رو زمینی</td>
                                    <td>250,000</td>
                                    <td>اینچ قطر</td>
                                    <td>39,199</td>
                                    <td>15.7%</td>
                                    <td>210,801</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>اسکلت فلزی</td>
                                    <td>3,760</td>
                                    <td>تن</td>
                                    <td>1,235</td>
                                    <td>32.8%</td>
                                    <td>2,525</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>تجهیزات ثابت</td>
                                    <td>12,500</td>
                                    <td>تن</td>
                                    <td>7,199</td>
                                    <td>57.6%</td>
                                    <td>5,301</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>تجهیزات دوار</td>
                                    <td>900</td>
                                    <td>تن</td>
                                    <td>0</td>
                                    <td>0.0%</td>
                                    <td>900</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>کابل کشی برق و ابزار دقیق</td>
                                    <td>475</td>
                                    <td>کیلومتر طول</td>
                                    <td>0</td>
                                    <td>0.0%</td>
                                    <td>475</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>عایقکاری</td>
                                    <td>29,000</td>
                                    <td>متر مربع</td>
                                    <td>0</td>
                                    <td>0.0%</td>
                                    <td>29,000</td>
                                    <td></td>
                                </tr>

                                <tr style="text-align: center;">
                                    <td>سند بلاست و رنگ آمیزی</td>
                                    <td>79,745</td>
                                    <td>متر مربع</td>
                                    <td>23,073</td>
                                    <td>28.9%</td>
                                    <td>56,672</td>
                                    <td></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                نیروی انسانی
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <div id="manpower-stock" style="height: 400px; min-width: 310px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="display: none" class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                ماشین آلات
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <div id="machinery-stock" style="height: 400px; min-width: 310px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                ۵۰ فعالیت آخر PMS
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <table style="font-family: iranyekan; width: 100%; direction: ltr; " class="table table-striped table-bordered table-hover table-checkable display " id="m_table_2">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th title="Field #1" data-field="1">Activity ID</th>
                                    <th title="Field #2" data-field="2">Activity Status </th>
                                    <th title="Field #3" data-field="3">WBS Code</th>
                                    <th title="Field #4" data-field="4">Activity Name</th>
                                    <th title="Field #5" data-field="5">W/F</th>
                                    <th title="Field #7" data-field="7">Budgeted Nonlabor Units(h)</th>
                                    <th title="Field #8" data-field="8"> Plan Start</th>
                                    <th title="Field #10" data-field="10">'Plan Finish</th>
                                    <th title="Field #11" data-field="11">Deviation </th>
                                    <th title="Field #12" data-field="12">Act. Start</th>
                                    <th title="Field #12" data-field="12">Act. Finish</th>
                                    <th title="Field #12" data-field="12">Deviation</th>
                                    <th title="Field #12" data-field="12">Resources</th>
                                    <th title="Field #12" data-field="12">Progress</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($wbs as $wb)
                                    <tr>
                                        <td>{{ $wb->ActivityID }}</td>
                                        <td>{{ $wb->status }}</td>
                                        <td>{{ $wb->code }}</td>
                                        <td>{{ $wb->name }}</td>
                                        <td>{{ $wb->wf }}</td>
                                        <td>{{ $wb->budgeted }}</td>
                                        <td>{{ $wb->planStart }}</td>
                                        <td>{{ $wb->planFinish }}</td>
                                        <td>{{ $wb->planDeviation }}</td>
                                        <td>{{ $wb->actStart }}</td>
                                        <td>{{ $wb->actFinish }}</td>
                                        <td>{{ $wb->actDeviation }}</td>
                                        <td>{{ $wb->resources }}</td>
                                        <td>{{ $wb->progress }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                پلات پلن
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <iframe frameborder="0" style="width: 100%;height: 550px;" src="/plotplan/index.php"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="col-md-12 ">
            <div style="margin-top: 0%">

                <p style="float: right;font-family: 'byekan';padding: 10px 15px 5px 10px;    color: white;font-size: 20px;">چالش های پیش رو          <span data-toggle="modal" data-target="#myModal" class="flaticon2-list-2"></span>
                </p>

                <div style="background: #3c464c ; border-radius: 10px!important;     width: 100%; height: auto;">

                    <marquee style="color: white;font-size: 16px;font-family: byekan;width: 100%; direction: rtl" direction="right" attribute_name="attribute_value">
                        @foreach($events->where('type', 'چالش پیش رو') as $event)
                            <span style="direction: rtl!important;"> {{$event->description}}</span>
                            {!! "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" !!}
                        @endforeach
                    </marquee>


                    <div id="myModal" class="modal fade" role="dialog" style="display: none;">
                        <div style="width: 90%;" class="modal-dialog modal-xl">

                            <!-- Modal content-->
                            <div style="" class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body">
                                    <p style=" font-size: 25px;direction: rtl;text-align:right;font-family: byekan;">

                                        @foreach($events->where('type', 'چالش پیش رو') as $event)
                                            {{ $event->description }} <span style="color:red" ></span>
                                            {!! "<br><br>" !!}
                                        @endforeach
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div><br><br>



    </div>


    </div>
    <!-- end:: Content -->

@stop


@section('footerScripts')

    <script src="/js/amcharts/core.js"></script>
    <script src="/js/amcharts/charts.js"></script>
    <script src="/js/amcharts/maps.js"></script>
    <script src="/js/amcharts/continentsLow.js"></script>
    <script src="/js/amcharts/animated.js"></script>

    <script src="/js/amcharts/amcharts.js"></script>
    <script src="/js/amcharts/serial.js"></script>
    <script src="/js/amcharts/gauge.js"></script>
    <script src="/js/amcharts/export.min.js"></script>
    <script src="/js/amcharts/light.js"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>



    <script src="/js/highcharts/highstock.js"></script>
    <script src="/js/highcharts/exporting.js"></script>
    <script src="/js/highcharts/export-data.js"></script>


    <!--begin::Page Scripts -->
    <script>


        var DatatablesExtensionButtons = {
            init: function () {




                var t;
                t = $("#m_table_2").DataTable({
                        "searching": true, scrollY: "50vh", scrollX: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), t.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), t.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), t.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), t.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), t.button(4).trigger()
                        }
                    )







                var v;
                v = $("#m_table_3").DataTable({
                        "searching": true,
                    scrollY: "50vh", scrollX: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), v.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), v.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), v.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), v.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), v.button(4).trigger()
                        }
                    )





                var p;
                p = $("#m_table_4").DataTable({
                        "searching": false,
                        scrollY: "60vh", scrollX: true,paging: false,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), p.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), p.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), p.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), p.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), p.button(4).trigger()
                        }
                    )


            }
        };



        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


        var chartData = [{
            "date": "اسفند 92",
            "Plan": null,
            "Actual": 36.32
        }, {
            "date": "شهریور 93",
            "Plan": null,
            "Actual": 50.73
        }, {
            "date": "اسفند 93",
            "Plan": null,
            "Actual": 63.39
        }, {
            "date": "شهریور 94",
            "Plan": null,
            "Actual": 66.93
        }, {
            "date": "اسفند 94",
            "Plan": null,
            "Actual": 68.98
        }, {
            "date": "شهریور 95",
            "Plan": null,
            "Actual": 70.22
        }, {
            "date": "اسفند 95",
            "Plan": null,
            "Actual": 70.54
        }, {
            "date": "شهریور 96",
            "Plan": null,
            "Actual": 70.94
        }, {
            "date": "اسفند 96",
            "Plan": null,
            "Actual": 72.73
        }, {
            "date": "شهریور 97",
            "Plan": null,
            "Actual": 75.76
        }, {
            "date": "اسفند 97",
            "Plan": null,
            "Actual": 77.77
        }, {
            "date": "شهریور 98",
            "Plan": null,
            "Actual": 78.49
        }, {
            "date": "مهر 98",
            "Plan": null,
            "Actual": 78.54
        }, {
            "date": "آبان 98",
            "Plan": null,
            "Actual": 78.61
        }, {
            "date": "آذر 98",
            "Plan": 78.61,
            "Actual": 78.61
        }, {
            "date": "دی 98",
            "Plan": 79.93,
            "Actual": 78.66
        }, {
            "date": "بهمن 98",
            "Plan": 81.25,
            "Actual": 79.19
        }, {
            "date": "اسفند 98",
            "Plan": 83.17,
            "Actual": 79.41
        }, {
            "date": "فروردین 99",
            "Plan": 83.89,
            "Actual": 79.77,
            "bulletClass": "lastBullet"

        }, {
            "date": "اردیبهشت 99",
            "Plan": 85.81,
            "Actual": 80.35
        }, {
            "date": "خرداد 99",
            "Plan": 87.13,
            "Actual": null
        }, {
            "date": "تیر 99",
            "Plan": 88.45,
            "Actual": null
        },
            {
                "date": "مرداد 99",
                "Plan": 89.77,
                "Actual": null
            },
            {
            "date": "شهریور 99",
            "Plan": 91.09,
            "Actual": null
        }, {
            "date": "مهر 99",
            "Plan": 92.41,
            "Actual": null
        }, {
            "date": "آبان 99",
            "Plan": 93.13,
            "Actual": null
        }, {
            "date": "آذر 99",
            "Plan": 93.85,
            "Actual": null
        }, {
            "date": "دی 99",
            "Plan": 94.57,
            "Actual": null
        }, {
            "date": "بهمن 99",
            "Plan": 95.29,
            "Actual": null
        },{
            "date": "اسفند 99",
            "Plan": 96.01,
            "Actual": null
        },{
            "date": "فروردین 1400",
            "Plan": 96.73,
            "Actual": null
        },{
            "date": "اردیبهشت 1400",
            "Plan": 97.65,
            "Actual": null
        },{
            "date": "خرداد 1400",
            "Plan": 98.37,
            "Actual": null
        },{
            "date": "تیر 1400",
            "Plan": 100.00,
            "Actual": null
        },{
            "date": "مرداد 1400",
            "Plan": 100.00,
            "Actual": null
        },{
            "date": "شهریور 1400",
            "Plan": 100.00,
            "Actual": null,
        }];



        var chart = AmCharts.makeChart("amcurve", {
            "type": "serial",
            "theme": "light",

            "dataDateFormat": "YYYY-MM-DD",
            "dataProvider": chartData,

            "addClassNames": true,
            "startPlan Cumulative Overall": 1,
//"color": "#FFFFFF",
            "marginLeft": 0,

            "categoryField": "date",
            "categoryAxis": {
// "parseDates": true,
                "labelRotation": 45,
                "minPeriod": "DD",
                "autoGridCount": false,
                "gridCount": 50,
                "gridAlpha": 0.1,
                "gridColor": "#FFFFFF",
                "axisColor": "#555555",
                "dateFormats": [{
                    "period": 'DD',
                    "format": 'DD'
                }, {
                    "period": 'WW',
                    "format": 'MMM DD'
                }, {
                    "period": 'MM',
                    "format": 'MMM'
                }, {
                    "period": 'YYYY',
                    "format": 'YYYY'
                }]
            },

            "valueAxes": [{
                "id": "monthly",
                "position": "right",
                "gridAlpha": 0,
                "axisAlpha": 0,
                "labelsEnabled": false
            }, {
                "id": "Plan",
                "title": "",
                "position": "right",
                "gridAlpha": 0,
                "axisAlpha": 0,
                "valueAxis": "a2",
                "inside": true,
                "Plan Cumulative Overall": "mm",
                "Plan Cumulative OverallUnits": {
                    "DD": "d. ",
                    "hh": "h ",
                    "mm": "min",
                    "ss": ""
                }
            }],
            "graphs": [{
                "id": "g1",
                "valueField": "Baseline Monthly",
                "title": "Base Line Monthly Plan",
                "type": "column",
                "fillAlphas": 0.9,
                "valueAxis": "monthly",
                "balloonText": "Baseline Monthly: [[value]] %",
                "legendValueText": "[[value]] %",
                "legendPeriodValueText": " ",
                "lineColor": "#8fb5e1",
                "alphaField": "alpha"
            },{
                "id": "g4",
                "valueField": "Actual Cumulative",
                "classNameField": "bulletClass",
                "title": "Actual Cumulative",
                "type": "line",
                "valueAxis": "cum",
                "lineColor": "gray",
                "lineThickness": 1,
                "legendValueText": "[[value]] %",
                "descriptionField": " ",
                "bullet": "round",
                "bulletSizeField": " ",
                "bulletBorderColor": "gray",
                "bulletBorderAlpha": 1,
                "bulletBorderThickness": 2,
                "bulletColor": "gray",
                "labelText": "[[townName2]]",
                "labelPosition": "right",
                "balloonText": "Actual Cumulative: [[value]] % ",
                "showBalloon": true,
                "animationPlayed": true
            },{
                "id": "g4",
                "valueField": "Plan",
                "classNameField": "bulletClass",
                "title": "Plan",
                "type": "line",
                "valueAxis": "cum",
                "lineColor": "#da1019",
                // "lineColor": "#9aca27",
                "lineThickness": 1,
                "legendValueText": "[[value]] %",
                "descriptionField": " ",
                "bullet": "round",
                "bulletSizeField": " ",
                // "bulletBorderColor": "#9aca27",
                "bulletBorderColor": "#da1019",
                "bulletBorderAlpha": 1,
                "bulletBorderThickness": 2,
                "bulletColor": "#da1019",
                // "bulletColor": "#9aca27",
                "labelText": "[[townName2]]",
                "labelPosition": "right",
                "balloonText": "Plan: [[value]] % ",
                "showBalloon": true,
                "animationPlayed": true
            },{
                "id": "g6",
                "valueField": "Actual",
                "classNameField": "bulletClass",
                "title": "Actual",
                "type": "line",
                "valueAxis": "cum",
                "lineColor": "#9aca27",
                // "lineColor": "#da1019",
                "lineThickness": 1,
                "legendValueText": "[[value]] %",
                "descriptionField": " ",
                "bullet": "round",
                "bulletSizeField": " ",
                "bulletBorderColor": "#9aca27",
                // "bulletBorderColor": "#da1019",
                "bulletBorderAlpha": 1,
                "bulletBorderThickness": 2,
                "bulletColor": "#9aca27",
                // "bulletColor": "#da1019",
                "labelText": "[[townName2]]",
                "labelPosition": "right",
                "balloonText": "Actual: [[value]] % ",
                "showBalloon": true,
                "animationPlayed": true
            }],

            "chartCursor": {
                "zoomable": false,
                "categoryBalloonDateFormat": "DD",
                "cursorAlpha": 0,
                "valueBalloonsEnabled": false
            },
            "legend": {
                "bulletType": "round",
                "equalWidths": false,
                "valueWidth": 120,
                "useGraphSettings": true
//"color": "#FFFFFF"
            }
        });




    // manpower stock
        var seriesOptions = [],
            seriesCounter = 0,
            names = ['MSFT', 'AAPL', 'GOOG'];

        /**
         * Create the chart when all data is loaded
         * @returns {undefined}
         */
        function createChart() {

            Highcharts.stockChart('manpower-stock', {

                rangeSelector: {
                    selected: 4
                },

                yAxis: {
                    labels: {
                        formatter: function () {
                            return (this.value > 0 ? ' + ' : '') + this.value + '%';
                        }
                    },
                    plotLines: [{
                        value: 0,
                        width: 2,
                        color: 'silver'
                    }]
                },

                plotOptions: {
                    series: {
                        compare: 'percent',
                        showInNavigator: true
                    }
                },

                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
                    valueDecimals: 2,
                    split: true
                },

                series: seriesOptions
            });
        }

        function success(data) {
            var name = this.url.match(/(msft|aapl|goog)/)[0].toUpperCase();
            var i = names.indexOf(name);
            seriesOptions[i] = {
                name: name,
                data: data
            };

            // As we're loading the data asynchronously, we don't know what order it
            // will arrive. So we keep a counter and create the chart when all the data is loaded.
            seriesCounter += 1;

            if (seriesCounter === names.length) {
                createChart();
            }
        }

        Highcharts.getJSON(
            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/msft-c.json',
            success
        );
        Highcharts.getJSON(
            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/aapl-c.json',
            success
        );
        Highcharts.getJSON(
            'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/goog-c.json',
            success
        );







    </script>



    <script src="/js/highcharts/highcharts.js"></script>
    <script src="/js/highcharts/highcharts-more.js"></script>
    <script src="/js/highcharts/data.js"></script>
    <script src="/js/highcharts/drilldown.js"></script>

    <script>


    </script>
    <!--end::Page Scripts -->

@stop
