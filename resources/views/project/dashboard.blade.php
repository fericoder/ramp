@extends('layouts.master', ['title' => 'داشبورد پروژه'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }

        #progressPhases{
            width: 100%;
            height: 500px;
        }

    </style>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <span class="kt-subheader__desc iranyekan">داشبورد پروژه</span>
            </div>
            <span  class="badge badge-primary iranyekan reportDate">تاریخ آخرین بروزرسانی گزارش: ۱۳۹۹/۰۴/۱۰</span>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">



        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-xl">
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-1 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">پیشرفت فیزیکی:</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">برنامه:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-brand">49.91%</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">واقعی:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">45.57%</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">انحراف:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">-4.34%</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-1 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-2 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">نیروی انسانی :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">برنامه</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">-</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">واقعی</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success"> 292</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">انحراف</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger"></span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-2 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">ایمنی، بهداشت و محیط زیست  :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">نفر ساعت کارکرد</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">3,454,540</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">نفر ساعت بدون حادثه منجر به فوت </h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">-</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">نفر ساعت بدون حادثه منجر اتلاف وقت </h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">55,692</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-3 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">شاخص عملکردی :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title"> عملکرد زمان :</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info"></span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title"> عملکرد هزینه: </h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success"></span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">ارزش بدست آمده:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger"></span>
                            </div>

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
                                نمودار پیشرفت پروژه
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#S-Curve" aria-expanded="true"> نمودار پیشرفت پروژه </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#Overall" aria-expanded="false"> جدول پیشرفت پروژه</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab13" data-toggle="tab" aria-controls="tab12" href="#Remain" aria-expanded="false"> زمان باقیمانده</a>
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
                                                    <td>2.21%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Month Plan:</span>
                                                    </td>
                                                    <td>0.33%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Next Month Plan: </span>
                                                    </td>
                                                    <td>2.69%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>ForeCast Plan: </span>
                                                    </td>
                                                    <td>0.97%</td>
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
                                                    <td> € 30,000,000 </td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Budget Plan: </span>
                                                    </td>
                                                    <td>€ 5,020,000 </td>
                                                </tr>

                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Budget Required UpTo Now:</span>
                                                    </td>
                                                    <td> € 4,770,000 </td>
                                                </tr>

                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Expected Budget Plan (Rial):</span>
                                                    </td>
                                                    <td> 287,000,000,000  </td>
                                                </tr>


                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Budget Plan (Rial):</span>
                                                    </td>
                                                    <td>   -  </td>
                                                </tr>

                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span> Required UpTo Now (Rial):</span>
                                                    </td>
                                                    <td>  200,000,000,000  </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Flag/Icon Column -->


                                        <!-- Chart Column -->
                                        <div class="col-md-9 pln br-r mvn15">
                                            <div id="amcurve" style="width: 100%; height: 450px; margin: 0 auto;direction: ltr"></div>
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
                                            <td>مطالعات و فعالیت های مقدماتی </td>
                                            <td style="direction: rtl;text-align:center" > 1.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 95.00% </td>
                                            <td style="direction: rtl;text-align:center" > 95.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00%% </td>
                                        </tr>
                                        <tr>
                                            <td>لیسانس و مهندسی پایه </td>
                                            <td style="direction: rtl;text-align:center" > 4.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 99.50% </td>
                                            <td style="direction: rtl;text-align:center" > 99.50% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                        </tr>

                                        <tr>
                                            <td>مهندسی تفصیلی </td>
                                            <td style="direction: rtl;text-align:center" > 6.00% </td>
                                            <td style="direction: rtl;text-align:center" > 1.20% </td>
                                            <td style="direction: rtl;text-align:center" > 0.60% </td>
                                            <td style="direction: rtl;text-align:center" > -0.60% </td>
                                            <td style="direction: rtl;text-align:center" > 73.49% </td>
                                            <td style="direction: rtl;text-align:center" > 66.61% </td>
                                            <td style="direction: rtl;text-align:center" > -0.60% </td>
                                        </tr>


                                        <tr>
                                            <td>تداركات </td>
                                            <td style="direction: rtl;text-align:center" > 47.00% </td>
                                            <td style="direction: rtl;text-align:center" > 3.93% </td>
                                            <td style="direction: rtl;text-align:center" > 0.09% </td>
                                            <td style="direction: rtl;text-align:center" > -3.84% </td>
                                            <td style="direction: rtl;text-align:center" > 51.33% </td>
                                            <td style="direction: rtl;text-align:center" > 46.49% </td>
                                            <td style="direction: rtl;text-align:center" > -3.84% </td>
                                        </tr>

                                        <tr>
                                            <td>تحویل و آماده سازی زمین </td>
                                            <td style="direction: rtl;text-align:center" > 1.50% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 98.00% </td>
                                            <td style="direction: rtl;text-align:center" > 98.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                        </tr>

                                        <tr>
                                            <td>سيويل و ساختمان </td>
                                            <td style="direction: rtl;text-align:center" > 14.50% </td>
                                            <td style="direction: rtl;text-align:center" > 0.61% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > -0.61% </td>
                                            <td style="direction: rtl;text-align:center" > 53.94% </td>
                                            <td style="direction: rtl;text-align:center" > 52.96% </td>
                                            <td style="direction: rtl;text-align:center" > -0.61% </td>
                                        </tr>

                                        <tr>
                                            <td>نصب و پيش راه اندازی </td>
                                            <td style="direction: rtl;text-align:center" > 22.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.06% </td>
                                            <td style="direction: rtl;text-align:center" > 0.23% </td>
                                            <td style="direction: rtl;text-align:center" > 0.17% </td>
                                            <td style="direction: rtl;text-align:center" > 16.26% </td>
                                            <td style="direction: rtl;text-align:center" > 18.06% </td>
                                            <td style="direction: rtl;text-align:center" > 0.17% </td>
                                        </tr>

                                        <tr>
                                            <td>راه اندازي </td>
                                            <td style="direction: rtl;text-align:center" > 1.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                        </tr>

                                        <tr>
                                            <td>آفسایت </td>
                                            <td style="direction: rtl;text-align:center" > 2.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.43% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > -0.43% </td>
                                            <td style="direction: rtl;text-align:center" > 42.13% </td>
                                            <td style="direction: rtl;text-align:center" > 41.14% </td>
                                            <td style="direction: rtl;text-align:center" > -0.43% </td>
                                        </tr>

                                        <tr>
                                            <td>تجهیز نیروی انسانی و آموزش </td>
                                            <td style="direction: rtl;text-align:center" > 0.50% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 31.50% </td>
                                            <td style="direction: rtl;text-align:center" > 31.50% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                        </tr>


                                        <tr>
                                            <td>خدمات عمومی و رفاهی </td>
                                            <td style="direction: rtl;text-align:center" > 0.50% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                            <td style="direction: rtl;text-align:center" > 72.50% </td>
                                            <td style="direction: rtl;text-align:center" > 72.50% </td>
                                            <td style="direction: rtl;text-align:center" > 0.00% </td>
                                        </tr>





                                        <tr>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > پیشرفت کل  </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 100.00% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 2.03% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 0.13% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > -1.90% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 47.70% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 45.24% </td>
                                            <td style="direction: rtl;text-align:center; color: red;   background-color:#e2efda; direction: ltr;" > -2.46% </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>






                                <div class="tab-pane" id="Remain" aria-labelledby="base-tab13">
                                    <div class="text-align:center;direction:rtl;font-family:Bekan">
                                    </div>
                                    <table style="direction:rtl;text-align:right;font-family:BYekan;" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr style="direction: rtl" >
                                            <th style="direction: rtl;text-align:center;background-color:#e2efda" scope="col" style="width:450px !important"> شرح </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> روز باقیمانده </th>
                                            <th  style="direction: rtl;text-align:center;background-color:#e2efda" scope="col"> تاریخ </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Finish Engineering </td>
                                            <td style="direction: rtl;text-align:center; color: red; font-size: 22px; color: red" > Day </td>
                                            <td style="direction: rtl;text-align:center" > May-21 </td>
                                        </tr>

                                        <tr>
                                            <td>Finish Procurement </td>
                                            <td style="direction: rtl;text-align:center; color: red; font-size: 22px; color: red" > Day </td>
                                            <td style="direction: rtl;text-align:center" > Mar-21 </td>
                                        </tr>

                                        <tr>
                                            <td>Finish Construction </td>
                                            <td style="direction: rtl;text-align:center; color: red; font-size: 22px; color: red" > Day </td>
                                            <td style="direction: rtl;text-align:center" > Jun-21 </td>
                                        </tr>


                                        <tr>
                                            <td>Finish Installation </td>
                                            <td style="direction: rtl;text-align:center; color: red; font-size: 22px; color: red" > Day </td>
                                            <td style="direction: rtl;text-align:center" > Jun-21 </td>
                                        </tr>


                                        <tr>
                                            <td>Start Comissioning </td>
                                            <td style="direction: rtl;text-align:center; color: red; font-size: 22px; color: red" > Day </td>
                                            <td style="direction: rtl;text-align:center" > Jul-21 </td>
                                        </tr>


                                        <tr>
                                            <td>Finish Comissioning </td>
                                            <td style="direction: rtl;text-align:center; color: red; font-size: 22px; color: red" > Day </td>
                                            <td style="direction: rtl;text-align:center" > Sep-21 </td>
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



        <div class="col-md-12 ">
            <div style="margin-top: 0%">

                <p style="float: right;font-family: 'byekan';padding: 10px 15px 5px 10px;    color: white;font-size: 20px;">آخرین فعالیت های انجام شده
                    <span data-toggle="modal" data-target="#myModal" class="flaticon2-list-2"></span>
                </p>

                <div style="background: #3c464c ; border-radius: 10px!important;     width: 100%; height: auto;">
                    <marquee style="color: white;font-size: 16px;font-family: byekan;width: 100%; direction: rtl" direction="right" attribute_name="attribute_value">
                        @foreach($events->where('type', 'فعالیت انجام شده') as $event)
                            <span style="direction: rtl!important;"> {{$event->description}}</span>
                            {!! "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" !!}
                        @endforeach
                    </marquee>





                    <div id="myModal" class="modal fade" role="dialog" style="display: none;">
                        <div style="width: 90%;" class="modal-dialog modal-xl">

                            <!-- Modal content-->
                            <div style="" class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="بستن" data-dismiss="modal">×</button>
                                    <h4 style="    direction: rtl;margin-right: 18px;font-family: byekan;" class="modal-title">آخرین فعالیت های انجام شده</h4>
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

            </div>
        </div><br><br>



        <div class="row">

            <div class="col-md-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <a href="{{ route('procurement.dashboard') }}"> میزان پیشرفت فاز های مختلف خرید </a>
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="progressPhases"></div>
                    </div>

                </div>
            </div>


            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <a href="{{ route('engineering.index') }}"> آخرین وضعیت مدارک مهندسی </a>
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div class="portlet-body">
                            <div id="eng-status"></div>
                        </div>


                    </div>
                </div>
            </div>

            <style media="screen">
                #eng-status {
                    width: 100%;
                    height: 500px;
                }

                #proc-status {
                    width: 90%;
                    height: 500px;
                }

            </style>


        </div>


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
                                        padding: 7px !important;
                                        text-align: center;
                                    }
                                </style>

                                <tr style="background-color: #cecdcd;">
                                    <th style="text-align: center; direction: rtl; font-family: BYekan">شـرح فعاليت</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">برآورد کل </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">واحد </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">انجام شده تاکنون </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;"> درصد پیشرفت </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">باقیمانده </th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">رکورد حاصله</th>
                                </tr>
                                </thead>
                                <tbody id="tbody-sparkline">



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
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--tabs">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                آخرین وضعیت قرارداد ها
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">

                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table style="font-family: iranyekan; width: 100%; direction: rtl" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                                        <thead style="font-family: BYekan">
                                        <tr>
                                            <th title="Field #1" data-field="1">ردیف</th>
                                            <th title="Field #2" data-field="2">شماره  قرارداد</th>
                                            <th title="Field #3" data-field="3">نام پیمانکار</th>
                                            <th title="Field #4" data-field="4">موضوع قرارداد</th>
                                            <th title="Field #5" data-field="5">تاریخ شروع</th>
                                            <th title="Field #7" data-field="7">مدت روز قرارداد</th>
                                            <th title="Field #8" data-field="8"> تاریخ خاتمه </th>
                                            <th title="Field #9" data-field="9">مدت روز باقی مانده </th>
                                            <th title="Field #10" data-field="10">درصد پیشرفت مالی</th>
                                            <th title="Field #11" data-field="11">آخرین وضعیت  </th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <td style="font-family: BYekan">1</td>
                                                <td style="font-family: BYekan">9609</td>
                                                <td style="font-family: BYekan">شرکت مدیریت توسعه صنایع پتروشیمی</td>
                                                <td style="font-family: BYekan">خدمات مدیریت طرح و نظارت کارگاهی</td>
                                                <td style="font-family: BYekan">1396/02/03</td>
                                                <td style="font-family: BYekan">1340</td>
                                                <td style="font-family: BYekan">1399/10/03</td>
                                                <td style="font-family: BYekan">205</td>
                                                <td style="font-family: BYekan">33%</td>
                                                <td style="font-family: BYekan">درحال انجام</td>
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





        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--tabs">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                آخرین وضعیت مالی پروژه
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">

                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div style="height: 500px;" id="paymentsPerforma"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="col-md-12 ">
            <div style="margin-top: 0%">

                <p style="float: right;font-family: 'byekan';padding: 10px 15px 5px 10px;    color: white;font-size: 20px;">چالش های پیش رو          <span data-toggle="modal" data-target="#myModalChalesh" class="flaticon2-list-2"></span>
                </p>

                <div style="background: #3c464c ; border-radius: 10px!important;     width: 100%; height: auto;">
                    <marquee style="color: white;font-size: 16px;font-family: byekan;width: 100%; direction: rtl" direction="right" attribute_name="attribute_value">
                        @foreach($events->where('type', 'چالش پیش رو') as $event)
                            <span style="direction: rtl!important;"> {{$event->description}}</span>
                            {!! "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" !!}
                        @endforeach
                    </marquee>





                    <div id="myModalChalesh" class="modal fade" role="dialog" style="display: none;">
                        <div style="width: 90%;" class="modal-dialog modal-xl">

                            <!-- Modal content-->
                            <div style="" class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="بستن" data-dismiss="modal">×</button>
                                    <h4 style="    direction: rtl;margin-right: 18px;font-family: byekan;" class="modal-title">چالش های پیش رو</h4>
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














        <div class="row">




            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <a href="{{ route('gallery.index') }}">
                                    آخرین تصاویر گالری پروژه
                                </a>
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div style="" id="carousel-example-2z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-2z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-2z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-2z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                @foreach ($photos as $photo)
                                    <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                        <a target="_blank" href="{{ $photo->file }}"><img style="height: 400px!important;" class="d-block w-100" src="{{ $photo->file }}" alt="{{ $photo->description }}"></a>
                                    </div>
                                @endforeach


                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-2z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-2z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                تقویم جلسات پروژه
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">

                    </div>
                </div>
            </div>


        </div>






    </div>




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



    <script src="/js/highcharts/highcharts.js"></script>
    <script src="/js/highcharts/highcharts-more.js"></script>
    <script src="/js/highcharts/data.js"></script>
    <script src="/js/highcharts/drilldown.js"></script>

    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <script type="text/javascript">






        Highcharts.setOptions({
            colors: ['#2ab4c0', '#f36a5a', '#5C9BD1', '#8877a9', '#2ab4c0']
        });

        $(function () {
            Highcharts.chart('eng-status', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: ' '
                },
                subtitle: {
                    text: ' '
                },
                xAxis: {
                    categories: ['Documents'],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: ' ',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: '  '
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 150,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: false
                },
                credits: {
                    enabled: false
                },
                series: [{
                    name: 'Total Docs',
                    color: '#c7ad88',
                    data: [2533]
                },{
                    name: 'In Progress',
                    color: '#ede9ce',
                    data: [1674]
                }, {
                    name: 'Not Issue',
                    color: '#935347',
                    data: [880]
                }]
            });
        });




        var chartData = [
            {
            "date": "فروردین 91",
            "Plan": null,
            "Actual": 0.01
        },{ "date": "شهریور 91",
            "Plan": null,
            "Actual": 0.50
        },{ "date": "اسفند 91",
            "Plan": null,
            "Actual": 4.74
        },{ "date": "شهریور 92",
            "Plan": null,
            "Actual": 8.20
        }, {
            "date": "اسفند 92",
            "Plan": null,
            "Actual": 10.25
        }, {
                "date": "شهریور 93",
                "Plan": null,
                "Actual": 11.09
            },{
                "date": "اسفند 93",
                "Plan": null,
                "Actual": 14.74
            }, {
            "date": "شهریور 94",
            "Plan": null,
            "Actual": 17.71
        }, {
            "date": "اسفند 94",
            "Plan": null,
            "Actual": 21.73
        }, {
            "date": "شهریور 95",
            "Plan": null,
            "Actual": 24.58
        }, {
            "date": "اسفند 95",
            "Plan": null,
            "Actual": 25.05
        }, {
            "date": "شهریور 96",
            "Plan": null,
            "Actual": 26.82
        }, {
            "date": "اسفند 96",
            "Plan": null,
            "Actual": 34.42
        }, {
            "date": "شهریور 97",
            "Plan": null,
            "Actual": 40.51
        }, {
            "date": "اسفند 97",
            "Plan": null,
            "Actual": 40.51
        }, {
            "date": "شهریور 98",
            "Plan": null,
            "Actual": 40.51
        }, {
            "date": "مهر 98",
            "Plan": null,
            "Actual": 40.51
        }, {
            "date": "آبان 98",
            "Plan": null,
            "Actual": 40.51
        }, {
            "date": "آذر 98",
            "Plan": 40.74,
            "Actual": 40.74
        }, {
            "date": "دی 98",
            "Plan": 42.00,
            "Actual": 42.04
        }, {
            "date": "بهمن 98",
            "Plan": 43.66,
            "Actual": 44.25
        }, {
            "date": "اسفند 98",
            "Plan": 45.67,
            "Actual": 45.11
        }, {
            "date": "فروردین 99",
            "Plan": 47.70,
            "Actual": 45.24,
            // "bulletClass": "lastBullet"

        }, {
            "date": "اردیبهشت 99",
            "Plan": 49.91,
            "Actual": 45.57
        }, {
            "date": "خرداد 99",
            "Plan": 52.60,
            "Actual": null
        }, {
            "date": "تیر 99",
            "Plan": 55.96,
            "Actual": null
        },
            {
                "date": "مرداد 99",
                "Plan": 59.41,
                "Actual": null
            },
            {
                "date": "شهریور 99",
                "Plan": 63.09,
                "Actual": null
            }, {
                "date": "مهر 99",
                "Plan": 66.96,
                "Actual": null
            }, {
                "date": "آبان 99",
                "Plan": 70.95,
                "Actual": null
            }, {
                "date": "آذر 99",
                "Plan": 74.76,
                "Actual": null
            }, {
                "date": "دی 99",
                "Plan": 78.69,
                "Actual": null
            }, {
                "date": "بهمن 99",
                "Plan": 82.49,
                "Actual": null
            },{
                "date": "اسفند 99",
                "Plan": 86.48,
                "Actual": null
            },{
                "date": "فروردین 1400",
                "Plan": 90.32,
                "Actual": null
            },{
                "date": "اردیبهشت 1400",
                "Plan": 93.74,
                "Actual": null
            },{
                "date": "خرداد 1400",
                "Plan": 97.15,
                "Actual": null
            },{
                "date": "تیر 1400",
                "Plan": 98.46,
                "Actual": null
            },{
                "date": "مرداد 1400",
                "Plan": 99.27,
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



        /**
         * ---------------------------------------
         * This demo was created using amCharts 4.
         *
         * For more information visit:
         * https://www.amcharts.com/
         *
         * Documentation is available at:
         * https://www.amcharts.com/docs/v4/
         * ---------------------------------------
         */

// Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end



        // Create chart instance
        var chart = am4core.create("progressPhases", am4charts.RadarChart);
        chart.rtl = true;
        // Add data
        chart.data = [{
            "category": "تحویل به سایت",
            "value": 25,
            "full": 100
        }, {
            "category": "حمل شده",
            "value": 25,
            "full": 100
        }, {
            "category": "موثر شدن",
            "value": 33,
            "full": 100
        }, {
            "category": "سفارش گذاری",
            "value": 38,
            "full": 100
        },{
            "category": "استعلام",
            "value": 45,
            "full": 100
        },{
            "category": "تهیه بسته خرید",
            "value": 52,
            "full": 100
        }];

        // Make chart not full circle
        chart.startAngle = -90;
        chart.endAngle = 180;
        chart.innerRadius = am4core.percent(20);

        // Set number format
        chart.numberFormatter.numberFormat = "#.#'%'";

        // Create axes
        var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "category";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.grid.template.strokeOpacity = 0;
        categoryAxis.renderer.labels.template.horizontalCenter = "right";
        categoryAxis.renderer.labels.template.fontWeight = 500;
        categoryAxis.renderer.labels.template.adapter.add("fill", function(fill, target) {
            return (target.dataItem.index >= 0) ? chart.colors.getIndex(target.dataItem.index) : fill;
        });
        categoryAxis.renderer.minGridDistance = 10;

        var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.grid.template.strokeOpacity = 0;
        valueAxis.min = 0;
        valueAxis.max = 100;
        valueAxis.strictMinMax = true;

        // Create series
        var series1 = chart.series.push(new am4charts.RadarColumnSeries());
        series1.dataFields.valueX = "full";
        series1.dataFields.categoryY = "category";
        series1.clustered = false;
        series1.columns.template.fill = new am4core.InterfaceColorSet().getFor("alternativeBackground");
        series1.columns.template.fillOpacity = 0.08;
        series1.columns.template.cornerRadiusTopLeft = 20;
        series1.columns.template.strokeWidth = 0;
        series1.columns.template.radarColumn.cornerRadius = 20;

        var series2 = chart.series.push(new am4charts.RadarColumnSeries());
        series2.dataFields.valueX = "value";
        series2.dataFields.categoryY = "category";
        series2.clustered = false;
        series2.columns.template.strokeWidth = 0;
        series2.columns.template.tooltipText = "{category}: [bold]{value}[/]";
        series2.columns.template.radarColumn.cornerRadius = 20;

        series2.columns.template.adapter.add("fill", function(fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        });

        // Add cursor
        chart.cursor = new am4charts.RadarCursor();









        var p;
        p = $("#m_table_4").DataTable({
                "searching": true,
                scrollY: "50vh", scrollX: true,

                buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
            }
        ),
            $("#export_print4").on("click", function (e) {
                    e.preventDefault(), p.button(0).trigger()
                }
            ),
            $("#export_copy4").on("click", function (e) {
                    e.preventDefault(), p.button(1).trigger()
                }
            ),
            $("#export_excel4").on("click", function (e) {
                    e.preventDefault(), p.button(2).trigger()
                }
            ),
            $("#export_csv4").on("click", function (e) {
                    e.preventDefault(), p.button(3).trigger()
                }
            ),
            $("#export_pdf4").on("click", function (e) {
                    e.preventDefault(), p.button(4).trigger()
                }
            )











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













        Highcharts.setOptions({
            lang: {
                thousandsSep: ','
            }
        });

        // Create the chart
        Highcharts.chart('paymentsPerforma', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'مبلغ پرداخت شده'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:,.0f} €'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f} €</b> از کل<br/>'
            },

            series: [
                {
                    name: "پرفورما",
                    colorByPoint: true,
                    data: [
                        {
                            name: "CASALE MATERIAL SUPPLY",
                            y:   7120000,
                            drilldown: "1"
                        },
                        {
                            name: "STATIC EQUIPMENT",
                            y:     111930000,
                            drilldown: "2"
                        },
                        {
                            name: "ROTARY EQUIPMENT",
                            y:     55600000,
                            drilldown: "3"
                        },
                        {
                            name: "PROCESS",
                            y:   71170000,
                            drilldown: "4"
                        },
                        {
                            name: "PIPING MATERIAL",
                            y:   35150000,
                            drilldown: "5"
                        },
                        {
                            name: "ELEECTRICAL",
                            y:   18550000,
                            drilldown: "6"
                        },
                        {
                            name: "INSTRUMENT",
                            y:   20004000,
                            drilldown: "7"
                        },{
                            name: "HVAC",
                            y:   2100000,
                            drilldown: "8"
                        },{
                            name: "STRUCTURE",
                            y:   7000000,
                            drilldown: "9"
                        },{
                            name: "HSE",
                            y:   3500000,
                            drilldown: "10"
                        },{
                            name: "Two Years Spare Parts",
                            y:   2994000,
                            drilldown: "11"
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "CASALE MATERIAL SUPPLY",
                        id: "1",
                        data: [
                            [
                                "نافذ شده",
                                4984000
                            ],
                            [
                                "تأیید شده",
                                0
                            ],
                            [
                                "پرداخت شده",
                                0
                            ],[
                                "منتظر پرداخت",
                                0
                            ],[
                                "باقیمانده",
                                7120000
                            ],[
                                "نافذ نشده",
                                2136000
                            ],
                        ]
                    },
                    {
                        name: "STATIC EQUIPMENT",
                        id: "2",
                        data: [
                            [
                                "نافذ شده",
                                109990000
                            ],
                            [
                                "تأیید شده",
                                81112106
                            ],
                            [
                                "پرداخت شده",
                                75703614
                            ],[
                                "منتظر پرداخت",
                                5408492
                            ],[
                                "باقیمانده",
                                36226386
                            ],[
                                "نافذ نشده",
                                1940000
                            ],
                        ]
                    },{
                        name: "ROTARY EQUIPMENT",
                        id: "3",
                        data: [
                            [
                                "نافذ شده",
                                45500000
                            ],
                            [
                                "تأیید شده",
                                12025000
                            ],
                            [
                                "پرداخت شده",
                                12025
                            ],[
                                "منتظر پرداخت",
                                12012975
                            ],[
                                "باقیمانده",
                                55587975
                            ],[
                                "نافذ نشده",
                                10100000
                            ],
                        ]
                    },{
                        name: "PROCESS",
                        id: "4",
                        data: [
                            [
                                "نافذ شده",
                                62770000
                            ],
                            [
                                "تأیید شده",
                                25349500
                            ],
                            [
                                "پرداخت شده",
                                25074500
                            ],[
                                "منتظر پرداخت",
                                275000
                            ],[
                                "باقیمانده",
                                46095500
                            ],[
                                "نافذ نشده",
                                8400000
                            ],
                        ]
                    },{
                        name: "PIPING MATERIAL",
                        id: "5",
                        data: [
                            [
                                "نافذ شده",
                                22751000
                            ],
                            [
                                "تأیید شده",
                                22712500
                            ],
                            [
                                "پرداخت شده",
                                18362210.59
                            ],[
                                "منتظر پرداخت",
                                4350289.41
                            ],[
                                "باقیمانده",
                                16787789.41
                            ],[
                                "نافذ نشده",
                                12399000
                            ],
                        ]
                    },{
                        name: "ELEECTRICAL",
                        id: "6",
                        data: [
                            [
                                "نافذ شده",
                                7710000
                            ],
                            [
                                "تأیید شده",
                                3792000
                            ],
                            [
                                "پرداخت شده",
                                0
                            ],[
                                "منتظر پرداخت",
                                3792000
                            ],[
                                "باقیمانده",
                                18550000
                            ],[
                                "نافذ نشده",
                                10840000
                            ],
                        ]
                    },{
                        name: "INSTRUMENT",
                        id: "7",
                        data: [
                            [
                                "نافذ شده",
                                10100000
                            ],
                            [
                                "تأیید شده",
                                2020000
                            ],
                            [
                                "پرداخت شده",
                                0
                            ],[
                                "منتظر پرداخت",
                                2020000
                            ],[
                                "باقیمانده",
                                20004000
                            ],[
                                "نافذ نشده",
                                9904000
                            ],
                        ]
                    },{
                        name: "HVAC",
                        id: "8",
                        data: [
                            [
                                "نافذ شده",
                                0
                            ],
                            [
                                "تأیید شده",
                                0
                            ],
                            [
                                "پرداخت شده",
                                0
                            ],[
                                "منتظر پرداخت",
                                0
                            ],[
                                "باقیمانده",
                                2100000
                            ],[
                                "نافذ نشده",
                                2100000
                            ],
                        ]
                    },{
                        name: "STRUCTURE",
                        id: "9",
                        data: [
                            [
                                "نافذ شده",
                                4645000
                            ],
                            [
                                "تأیید شده",
                                2350479
                            ],
                            [
                                "پرداخت شده",
                                1834510.69
                            ],[
                                "منتظر پرداخت",
                                515968.31
                            ],[
                                "باقیمانده",
                                5165489.31
                            ],[
                                "نافذ نشده",
                                2355000
                            ],
                        ]
                    },{
                        name: "HSE",
                        id: "10",
                        data: [
                            [
                                "نافذ شده",
                                0
                            ],
                            [
                                "تأیید شده",
                                0
                            ],
                            [
                                "پرداخت شده",
                                0
                            ],[
                                "منتظر پرداخت",
                                0
                            ],[
                                "باقیمانده",
                                3500000
                            ],[
                                "نافذ نشده",
                                3500000
                            ],
                        ]
                    },{
                        name: "Two Years Spare Parts",
                        id: "11",
                        data: [
                            [
                                "نافذ شده",
                                0
                            ],
                            [
                                "تأیید شده",
                                0
                            ],
                            [
                                "پرداخت شده",
                                0
                            ],[
                                "منتظر پرداخت",
                                0
                            ],[
                                "باقیمانده",
                                2994000
                            ],[
                                "نافذ نشده",
                                2994000
                            ],
                        ]
                    },
                ]
            }
        });




    </script>


@endsection
