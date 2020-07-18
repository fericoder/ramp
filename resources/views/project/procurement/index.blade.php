@extends('layouts.master', ['title' => 'پروژه -> خرید کالا'])

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
        .kt-widget24__title{
            text-align: right;
            direction: rtl;
        }
        .col-xl-2{
            direction: rtl!important;
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

                <span class="kt-subheader__desc iranyekan">داشبورد گزارشات خرید کالا</span>
            </div>
            <span style="padding:10px" class="badge badge-primary iranyekan ">تاریخ آخرین بروزرسانی گزارش: ۹۹/۰۳/۳۱ </span>

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
                            <p style="text-align: center">پیشرفت فیزیکی:</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">برنامه:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-brand">58.4%</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">واقعی:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">48.8%</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">انحراف:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">-9.56%</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-1 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-2 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">وضعیت بسته های خرید :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">تعداد کل</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">217</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">موثر شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success"> 89</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">باقیمانده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">128</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-2 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">وضعیت بسته های خرید دیر تحویل :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">تعداد کل</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">20</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">موثر شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">16</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">باقیمانده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">4</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-3 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">پیشرفت مالی:</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">مبلغ كل پرفرما:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">  335,118,000  یورو</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">پرداخت شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">  132,999,835   یورو</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">باقیمانده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">    202,118,165    یورو</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-3 -->
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
                                نمودار پیشرفت کالا
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#S-Curve" aria-expanded="true"> نمودار پیشرفت کالا </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#Overall" aria-expanded="false"> جدول پیشرفت کالا</a>
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
                                                    <td>3.15%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Month Plan:</span>
                                                    </td>
                                                    <td>1.81%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Next Month Plan: </span>
                                                    </td>
                                                    <td>3.21%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>ForeCast Plan: </span>
                                                    </td>
                                                    <td>1.47%</td>
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
                                                    <td> € 9,518,333  </td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Budget Plan: </span>
                                                    </td>
                                                    <td> € 12,862,000  </td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Budget Required UpTo Now:</span>
                                                    </td>
                                                    <td> € 9,518,333  </td>
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
                                            <td>خدمات خريد </td>
                                            <td style="direction: rtl;text-align:center" > 23.00% </td>
                                            <td style="direction: rtl;text-align:center" > 3.90% </td>
                                            <td style="direction: rtl;text-align:center" > 2.49% </td>
                                            <td style="direction: rtl;text-align:center" > -1.41% </td>
                                            <td style="direction: rtl;text-align:center" > 80.95% </td>
                                            <td style="direction: rtl;text-align:center" > 77.48% </td>
                                            <td style="direction: rtl;text-align:center" > -22.52% </td>
                                        </tr>
                                        <tr>
                                            <td>ساخت </td>
                                            <td style="direction: rtl;text-align:center" > 71.50% </td>
                                            <td style="direction: rtl;text-align:center" > 3.07% </td>
                                            <td style="direction: rtl;text-align:center" > 1.59% </td>
                                            <td style="direction: rtl;text-align:center" > -1.48% </td>
                                            <td style="direction: rtl;text-align:center" > 52.92% </td>
                                            <td style="direction: rtl;text-align:center" > 40.90% </td>
                                            <td style="direction: rtl;text-align:center" > -59.10% </td>
                                        </tr>
                                        <tr>
                                            <td>حمل و تحویل </td>
                                            <td style="direction: rtl;text-align:center" > 5.50% </td>
                                            <td style="direction: rtl;text-align:center" > 1.00% </td>
                                            <td style="direction: rtl;text-align:center" > 0.07% </td>
                                            <td style="direction: rtl;text-align:center" > -0.93% </td>
                                            <td style="direction: rtl;text-align:center" > 35.00% </td>
                                            <td style="direction: rtl;text-align:center" > 31.83% </td>
                                            <td style="direction: rtl;text-align:center" > -68.17% </td>
                                        </tr>

                                        <tr>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > پیشرفت کل  </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 100.00% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 3.15% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 1.71% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > -1.43% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 58.38% </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 48.81% </td>
                                            <td style="direction: rtl;text-align:center; color: red;   background-color:#e2efda; direction: ltr;" > -9.56% </td>
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
                                درصد وزنی
                                دیسیپلین
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="disciplineWeightFactor" style="min-width: 500px; max-width: 600px; height: 500px; margin: 0 auto"></div>
                    </div>

                </div>
            </div>



            <div class="col-md-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                در صد وزنی فاز های خرید (خدمات)</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="phasesWeightFactor" style="min-width: 400px; max-width: 600px; height: 500px; margin: 0 auto"></div>
                    </div>

                </div>
            </div>
        </div>





        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div style="direction: ltr" class="row row-no-padding row-col-separator-lg">

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Feedbacks-->
                        <div onclick="search('Not Start')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-warning">{{ \App\Rci::where('Status', 'like', '%' . 'Not Start' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">Not Start </h4>
                                </div>

                            </div>


                        </div>
                        <!--end::New Feedbacks-->
                    </div>

                    <div class="col-md-12 col-md-6 col-xl-2">
                        <!--begin::Total Profit-->
                            <div onclick="search('Issue For Inquiry')" class="kt-widget24">
                                <div class="kt-widget24__details">
                                    <span class="kt-widget24__stats kt-font-warning">{{ \App\Rci::where('IssueForInquiry', '!=', 'null')->count() }}</span>
                                    <div class="kt-widget24__info">
                                        <h4 class="kt-widget24__title"> Issue For Inquiry </h4>
                                    </div>
                                </div>
                            </div>
                        <!--end::Total Profit-->
                    </div>



                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Orders-->
                        <div onclick="search('Vendor Quotations')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-danger">{{ \App\Rci::where('Status', 'like', '%' . 'Vendor Quotations' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title"> Vendor Quotations  </h4>
                                </div>
                            </div>



                        </div>
                        <!--end::New Orders-->
                    </div>


                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Users-->
                        <div onclick="search('TBA')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-primary">{{ \App\Rci::where('Status', 'like', '%' . 'TBA' . '%')->count() }}</span>
                                <h4 style="font-size: 15px" class="kt-widget24__title">TBA</h4>
                                <div class="kt-widget24__info">
                                </div>
                            </div>

                        </div>
                        <!--end::New Users-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Users-->
                        <div onclick="search('Vendor Selection')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-success">{{ \App\Rci::where('Status', 'like', '%' . 'Vendor Selection' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4  class="kt-widget24__title">Vendor Selection </h4>
                                </div>
                            </div>

                        </div>
                        <!--end::New Users-->
                    </div>

                    <div class="col-md-12 col-md-6 col-xl-2">
                        <!--begin::Total Profit-->
                        <div onclick="search('Purchase Order')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-brand">{{ \App\Rci::where('Status', 'like', '%' . 'Purchase Order' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">Purchase Order </h4>
                                </div>
                            </div>

                        </div>
                        <!--end::Total Profit-->
                    </div>

                </div>
                <div style="direction: ltr" class="row row-no-padding row-col-separator-lg">



                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Feedbacks-->
                        <div onclick="search('Effective Date')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-warning">{{ \App\Rci::where('Status', 'like', '%' . 'Effective Date' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">Effective Date  </h4>
                                </div>

                            </div>



                        </div>
                        <!--end::New Feedbacks-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Orders-->
                        <div onclick="search('Kick-Off Meeting')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-danger">{{ \App\Rci::where('Status', 'like', '%' . 'Kick-Off Meeting' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">Kick-Off Meeting </h4>
                                </div>
                            </div>



                        </div>
                        <!--end::New Orders-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Users-->
                        <div onclick="search('Engineering')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-warning">{{ \App\Rci::where('Status', 'like', '%' . 'Engineering' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">Engineering </h4>
                                </div>
                            </div>

                        </div>
                        <!--end::New Users-->
                    </div>


                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Users-->
                        <div onclick="search('Suuply  Raw Material')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-primary">{{ \App\Rci::where('Status', 'like', '%' . 'Suuply  Raw Material' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title"> Suuply  Raw Material </h4>
                                </div>
                            </div>

                        </div>
                        <!--end::New Users-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Users-->
                        <div onclick="search('Manufacturing')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-success">{{ \App\Rci::where('Status', 'like', '%' . 'Manufacturing' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">Manufacturing</h4>
                                </div>
                            </div>

                        </div>
                        <!--end::New Users-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Users-->
                        <div onclick="search('Site Delivery')" class="kt-widget24">
                            <div class="kt-widget24__details">
                                <span class="kt-widget24__stats kt-font-success">{{ \App\Rci::where('Status', 'like', '%' . 'Site Delivery' . '%')->count() }}</span>
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">Site Delivery</h4>
                                </div>
                            </div>

                        </div>
                        <!--end::New Users-->
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
                                جدول درخواست های خرید
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <span style="" class="badge badge-primary reportDate">  آخرین بروزرسانی:  {{ jdate($rcis->first()->created_at)->format('Y/m/d') }}</span>

                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table style="font-family: iranyekan; width: 100%; direction: ltr" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                                        <thead style="font-family: BYekan">
                                        <tr>
                                            <th title="Field #1" data-field="1">Discipline</th>
                                            <th title="Field #2" data-field="2">Requisition Number</th>
                                            <th title="Field #3" data-field="3">Description</th>
                                            <th title="Field #4" data-field="4">Type</th>
                                            <th title="Field #12" data-field="12">Issue For Inquiry</th>
                                            <th title="Field #12" data-field="12">Vendor Quotations</th>
                                            <th title="Field #12" data-field="12">TBA</th>
                                            <th title="Field #12" data-field="12">Vendor Selection</th>
                                            <th title="Field #12" data-field="12">Purchase Order</th>
                                            <th title="Field #12" data-field="12">Effective Date</th>
                                            <th title="Field #12" data-field="12">Kick-Off Meeting</th>
                                            <th title="Field #12" data-field="12">Engineering</th>
                                            <th title="Field #12" data-field="12">Supply  Raw Material</th>
                                            <th title="Field #12" data-field="12">Manufacturing</th>
                                            <th title="Field #12" data-field="12">Final Inspection & Inspection Certificate</th>
                                            <th title="Field #12" data-field="12">FOB / Exwork Delivery</th>
                                            <th title="Field #12" data-field="12">Booking Of Vessel</th>
                                            <th title="Field #12" data-field="12">Advance Shipping Notice</th>
                                            <th title="Field #12" data-field="12">Sea Transportation</th>
                                            <th title="Field #12" data-field="12">Custom Clearance</th>
                                            <th title="Field #12" data-field="12">Site Delivery</th>
                                            <th title="Field #12" data-field="12">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($rcis as $rci)
                                            <tr>
                                                <td style="font-family: BYekan">{{ $rci->Discipline }}</td>
                                                <td style="font-family: BYekan">{{ $rci->RequisitionNumber }}</td>
                                                <td style="font-family: BYekan">{{ $rci->Description }}</td>
                                                <td style="font-family: BYekan">{{ $rci->Type }}</td>
                                                <td style="font-family: BYekan">{{ $rci->IssueForInquiry }}</td>
                                                <td style="font-family: BYekan">{{ $rci->VendorQuotations }}</td>
                                                <td style="font-family: BYekan">{{ $rci->TBA }}</td>
                                                <td style="font-family: BYekan">{{ $rci->VendorSelection }}</td>
                                                <td style="font-family: BYekan">{{ $rci->PurchaseOrder }}</td>
                                                <td style="font-family: BYekan">{{ $rci->EffectiveDate }}</td>
                                                <td style="font-family: BYekan">{{ $rci->KickOffMeeting }}</td>
                                                <td style="font-family: BYekan">{{ $rci->Engineering }}</td>
                                                <td style="font-family: BYekan">{{ $rci->SupplyRawMaterial }}</td>
                                                <td style="font-family: BYekan">{{ $rci->Manufacturing }}</td>
                                                <td style="font-family: BYekan">{{ $rci->FinalInspectionInspectionCertificate }}</td>
                                                <td style="font-family: BYekan">{{ $rci->FOBExworkDelivery }}</td>
                                                <td style="font-family: BYekan">{{ $rci->BookingOfVessel }}</td>
                                                <td style="font-family: BYekan">{{ $rci->AdvanceShippingNotice }}</td>
                                                <td style="font-family: BYekan">{{ $rci->SeaTransportation }}</td>
                                                <td style="font-family: BYekan">{{ $rci->CustomClearance }}</td>
                                                <td style="font-family: BYekan">{{ $rci->SiteDelivery }}</td>
                                                <td style="font-family: BYekan">{{ $rci->Status }}</td>

                                            </tr>
                                        @endforeach

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
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <a href="{{ route('vpis.index') }}"> گزارش مهندسی خرید</a>
                            </h3>
                        </div>
                        <span  class="badge badge-primary reportDate">  آخرین بروزرسانی:  {{ jdate($vpis->first()->created_at)->format('Y/m/d') }}</span>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <table style="font-family: iranyekan; width: 100%; direction: ltr; " class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_4">
                                <thead>
                                <style>
                                    td, th {
                                        color: black !important;
                                        padding: 7px !important;
                                        text-align: center;
                                    }
                                </style>
                                <tr style="background-color: #cecdcd;">
                                    <th style="text-align: center; direction: rtl; font-family: BYekan">وضعیت</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">عنوان</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">سازنده</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">شماره سفارش</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;"> کل مدارک سازنده</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">ارسال مدارک طبق برنامه</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارک ارسال شده</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارک دارای تاخیر نسبت به برنامه</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارک بررسی شده</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">بررسی نشده</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارکی که بیش از 14 روز از زمان صدور توسط سازنده گذشته است</th>
                                    <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارکی که بیش از 7 روز از زمان صدور توسط سازنده ا گذشته است</th>
                                </tr>
                                </thead>
                                <tbody id="tbody-sparkline">



                                @foreach ($reqs as $req)

                                    <tr style="text-align: center;">
                                        {{--وضعیت--}}
                                        <th>
                                            @if ($req->first()->RequisitionNo == 'PV-213A' OR $req->first()->RequisitionNo == 'HM-253A' OR $req->first()->RequisitionNo == 'PV-206A' OR $req->first()->RequisitionNo == 'PV-204A' OR $req->first()->RequisitionNo == 'PR-105' OR $req->first()->RequisitionNo == 'PV-206B' OR $req->first()->RequisitionNo == 'PV-204B' OR $req->first()->RequisitionNo == 'ST-740A' OR $req->first()->RequisitionNo == 'PI-401A' OR $req->first()->RequisitionNo == 'PI-404A' OR $req->first()->RequisitionNo == 'ST-745' OR $req->first()->RequisitionNo == 'ST-743A' OR $req->first()->RequisitionNo == 'ST-743B')
                                                Delivery
                                            @else
                                                Active
                                            @endif
                                        </th>
                                        {{--عنوان--}}
                                        <th style="">{{ \App\Rci::where('RequisitionNumber', 'like','%'.str_replace('-', '-REQ-',$req->first()->RequisitionNo).'%')->get()->pluck('Description') }}</th>

                                        {{--سازنده--}}
                                        <th>{{ $req->first()->VendorName }}</th>

                                        {{--شماره سفارش--}}
                                        <th>{{ $req->first()->RequisitionNo }}</th>

                                        {{--کل مدارک سازنده--}}
                                        <th>{{ $req->where('PlanReceivedDate', '!=', null)->count() }}</th>

                                        {{--ارسال مدارک طبق برنامه--}}
                                        <th>{{ $req->where('PlanReceivedDate',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</th>

                                        {{--مدارک ارسال شده--}}
                                        <th>{{  $req->where('IssuedByVendor', 'Yes')->count() }}</th>

                                        {{--مدارک دارای تاخیر نسبت به برنامه--}}
                                        <th>{{ $req->where('PlanReceivedDate',  '<=', \Carbon\Carbon::today()->toDateString())->where('IssuedByVendor', 'No')->count() }}</th>

                                        {{--مدارک بررسی شده--}}
                                        <th>{{ $req->where('IssuedByVendor', 'Yes')->where('RepliedByPIDEC', 'Yes')->count() }}</th>

                                        {{--بررسی نشده--}}
                                        <th>{{ $req->where('IssuedByVendor', 'Yes')->where('RepliedByPIDEC', 'No')->count() }}</th>

                                        {{--14 روز--}}
                                        <th>{{ $req->where('VendorIssuedDate', '<=', \Carbon\Carbon::today()->subDays(jdate()->now()->getDay()-14)->toDateString())->where('IssuedByVendor', 'Yes')->count() }}</th>

                                        {{--7 روز--}}
                                        <th>{{ $req->where('VendorIssuedDate', '<=', \Carbon\Carbon::today()->subDays(jdate()->now()->getDay()-7)->toDateString())->where('IssuedByVendor', 'Yes')->count() }}</th>
                                    </tr>
                                @endforeach





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--<div class="row">--}}
            {{--<div class="col-xl-12">--}}
                {{--<div class="kt-portlet kt-portlet--tabs">--}}
                    {{--<div class="kt-portlet__head">--}}
                        {{--<div class="kt-portlet__head-label">--}}
                            {{--<h3 class="kt-portlet__head-title">--}}
                                {{--جدول مهندسی خرید--}}
                            {{--</h3>--}}
                        {{--</div>--}}
                        {{--<div class="kt-portlet__head-toolbar">--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="kt-portlet__body">--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-lg-12">--}}
                                {{--<div class="table-responsive">--}}
                                    {{--<table style="font-family: iranyekan; width: 100%; direction: ltr" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_3">--}}
                                        {{--<thead style="font-family: BYekan">--}}
                                        {{--<tr>--}}
                                            {{--<th title="Field #1" data-field="1">Doc. No.</th>--}}
                                            {{--<th title="Field #2" data-field="2">Rev.</th>--}}
                                            {{--<th title="Field #3" data-field="3">Title</th>--}}
                                            {{--<th title="Field #4" data-field="4">Requisition No.</th>--}}
                                            {{--<th title="Field #5" data-field="5">Vendor Name</th>--}}
                                            {{--<th title="Field #7" data-field="7">Plan Received Date</th>--}}
                                            {{--<th title="Field #8" data-field="8"> Vendor Upload Date</th>--}}
                                            {{--<th title="Field #9" data-field="9">Status</th>--}}
                                            {{--<th title="Field #10" data-field="10">Vendor Issued Date</th>--}}
                                            {{--<th title="Field #11" data-field="11">Issued By Vendor </th>--}}
                                            {{--<th title="Field #12" data-field="12">Vendor Delay</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC Comment Date(EDMS3)</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC No Comment Date(EDMS3)</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC No Comment Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC Minor Comment Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC Major Comment Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC Information Comment Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC Reject Comment Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC RE Email Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">PIDEC RTS Email Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">Replied By PIDEC</th>--}}
                                            {{--<th title="Field #12" data-field="12">Originator Delay</th>--}}
                                            {{--<th title="Field #12" data-field="12">viewed By</th>--}}
                                            {{--<th title="Field #12" data-field="12">Viewd Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">Employer External Comment Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">Employer External Approval Date</th>--}}
                                            {{--<th title="Field #12" data-field="12">Is Accessible By Employer</th>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody>--}}

                                        {{--@foreach ($vpis as $vpi)--}}
                                            {{--<tr>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->DocNo }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->Rev }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->Title }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->RequisitionNo }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->VendorName }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PlanReceivedDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->VendorUploadDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->Status }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->VendorIssuedDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->IssuedByVendor }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->VendorDelay }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECCommentDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECNoCommentDateEDMS3 }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECNoCommentDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECMinorCommentDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECMajorCommentDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECInformationCommentDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECRejectCommentDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECREEmailDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->PIDECRTSEmailDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->RepliedByPIDEC }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->OriginatorDelay }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->viewedBy }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->ViewdDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->EmployerExternalCommentDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->EmployerExternalApprovalDate }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $vpi->IsAccessibleByEmployer }}</td>--}}

                                            {{--</tr>--}}
                                        {{--@endforeach--}}


                                        {{--</tbody>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}





        <div class="row">
            <div class="col-md-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                میزان پیشرفت فاز های
                                مختلف خرید
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="progressPhases"></div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6">
                <div class="kt-portlet kt-portlet--tabs">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                وضعیت پرداخت ها براساس پرفورما
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                         <div style="height: 500px;" id="paymentsPerforma"></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                نقشه پراکندگی سفارشات
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div style=" width: 100%;height: 500px;direction: ltr!important;" id="ordersDist"></div>
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
                    "searching": true, scrollY: "50vh", scrollX: true,

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




            }
        };



        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


        var chartData = [{
            "date": "اسفند 92",
            "Plan": 2.33,
            "Actual": 2.33
        }, {
            "date": "شهریور 93",
            "Plan": 4.08,
            "Actual": 4.08
        }, {
            "date": "اسفند 93",
            "Plan": 6.15,
            "Actual": 6.15
        }, {
            "date": "شهریور 94",
            "Plan": 8.15,
            "Actual": 8.15
        }, {
            "date": "اسفند 94",
            "Plan": 13.58,
            "Actual": 13.58
        }, {
            "date": "شهریور 95",
            "Plan": 17.23,
            "Actual": 17.23
        }, {
            "date": "اسفند 95",
            "Plan": 17.85,
            "Actual": 17.85
        }, {
            "date": "شهریور 96",
            "Plan": 21.28,
            "Actual": 21.28
        }, {
            "date": "اسفند 96",
            "Plan": 36.86,
            "Actual": 36.86
        }, {
            "date": "شهریور 97",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "مهر 97",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "آبان 97",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "آذر 97",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "دی 97",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "بهمن 97",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "اسفند 97",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "فروردین 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "اردیبهشت 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "خرداد 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "تیر 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "مرداد 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "شهریور 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "مهر 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "آبان 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "آذر 98",
            "Plan": 39.98,
            "Actual": 39.98
        }, {
            "date": "دی 98",
            "Plan": 41.99,
            "Actual": 42.37
        },{
            "date": "بهمن 98",
            "Plan": 44.86,
            "Actual": 45.13
        }, {
            "date": "اسفند 98",
            "Plan": 47.40,
            "Actual": 46.39
        }, {
            "date": "فروردین 99",
            "Plan": 51.33,
            "Actual": 46.49,

        }, {
            "date": "اردیبهشت 99",
            "Plan": 55.22,
            "Actual": 47,
            "bulletClass": "lastBullet"
        }, {
            "date": "خرداد 99",
            "Plan": 58.37,
            "Actual": 48.81
        }, {
            "date": "تیر 99",
            "Plan": 61.58,
            "Actual": null
        }, {
                "date": "مرداد 99",
                "Plan": 65.06,
                "Actual": null
            }, {
                "date": "شهریور 99",
                "Plan": 68.69,
                "Actual": null
            }, {
                "date": "مهر 99",
                "Plan": 71.49,
                "Actual": null
            }, {
                "date": "آبان 99",
                "Plan": 74.82,
                "Actual": null
            }, {
                "date": "آذر 99",
                "Plan": 78.78,
                "Actual": null
            }, {
                "date": "دی 99",
                "Plan": 82.78,
                "Actual": null
            }, {
                "date": "بهمن 99",
                "Plan": 86.46,
                "Actual": null
            },{
                "date": "اسفند 99",
                "Plan": 91.13,
                "Actual": null
            },{
                "date": "فروردین 1400",
                "Plan": 94.55,
                "Actual": null
            },{
                "date": "اردیبهشت 1400",
                "Plan": 96.87,
                "Actual": null
            },{
                "date": "خرداد 1400",
                "Plan": 98.84,
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
                "Actual": null
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
                "bulletBorderColor": "#da1019",
                // "bulletBorderColor": "#9aca27",
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



//         var chart = AmCharts.makeChart("amcurve", {
//             "type": "serial",
//             "theme": "light",
//
//             "dataDateFormat": "YYYY-MM-DD",
//             "dataProvider": chartData,
//
//             "addClassNames": true,
//             "startPlan Cumulative Overall": 1,
// //"color": "#FFFFFF",
//             "marginLeft": 0,
//
//             "categoryField": "date",
//             "categoryAxis": {
// // "parseDates": true,
//                 "labelRotation": 45,
//                 "minPeriod": "DD",
//                 "autoGridCount": false,
//                 "gridCount": 50,
//                 "gridAlpha": 0.1,
//                 "gridColor": "#5578eb",
//                 "axisColor": "#555555",
//                 "dateFormats": [{
//                     "period": 'DD',
//                     "format": 'DD'
//                 }, {
//                     "period": 'WW',
//                     "format": 'MMM DD'
//                 }, {
//                     "period": 'MM',
//                     "format": 'MMM'
//                 }, {
//                     "period": 'YYYY',
//                     "format": 'YYYY'
//                 }]
//             },
//
//             "valueAxes": [{
//                 "id": "monthly",
//                 "position": "right",
//                 "gridAlpha": 0,
//                 "axisAlpha": 0,
//                 "labelsEnabled": false
//             }, {
//                 "id": "cum",
//                 "title": "",
//                 "position": "right",
//                 "gridAlpha": 0,
//                 "axisAlpha": 0,
//                 "valueAxis": "a2",
//                 "inside": true,
//                 "Plan Cumulative Overall": "mm",
//                 "Plan Cumulative OverallUnits": {
//                     "DD": "d. ",
//                     "hh": "h ",
//                     "mm": "min",
//                     "ss": ""
//                 }
//             }],
//             "graphs": [{
//                 "id": "g1",
//                 "valueField": "Plan",
//                 "title": "Base Line Monthly Plan",
//                 "type": "column",
//                 "fillAlphas": 0.9,
//                 "valueAxis": "monthly",
//                 "balloonText": "Plan: [[value]] %",
//                 "legendValueText": "[[value]] %",
//                 "legendPeriodValueText": " ",
//                 "lineColor": "#5578eb",
//                 "alphaField": "alpha"
//             },{
//                 "id": "g4",
//                 "valueField": "Actual Cumulative",
//                 "classNameField": "bulletClass",
//                 "title": "Actual Cumulative",
//                 "type": "line",
//                 "valueAxis": "cum",
//                 "lineColor": "gray",
//                 "lineThickness": 1,
//                 "legendValueText": "[[value]] %",
//                 "descriptionField": " ",
//                 "bullet": "round",
//                 "bulletSizeField": " ",
//                 "bulletBorderColor": "gray",
//                 "bulletBorderAlpha": 1,
//                 "bulletBorderThickness": 2,
//                 "bulletColor": "gray",
//                 "labelText": "[[townName2]]",
//                 "labelPosition": "right",
//                 "balloonText": "Actual Cumulative: [[value]] % ",
//                 "showBalloon": true,
//                 "animationPlayed": true
//             },{
//                 "id": "g4",
//                 "valueField": "Actual",
//                 "classNameField": "bulletClass",
//                 "title": "Actual",
//                 "type": "line",
//                 "valueAxis": "cum",
//                 "lineColor": "#0abb87",
//                 "lineThickness": 1,
//                 "legendValueText": "[[value]] %",
//                 "descriptionField": " ",
//                 "bullet": "round",
//                 "bulletSizeField": " ",
//                 "bulletBorderColor": "#0abb87",
//                 "bulletBorderAlpha": 1,
//                 "bulletBorderThickness": 2,
//                 "bulletColor": "#0abb87",
//                 "labelText": "[[townName2]]",
//                 "labelPosition": "right",
//                 "balloonText": "Actual: [[value]] % ",
//                 "showBalloon": true,
//                 "animationPlayed": true
//             },{
//                 "id": "g5",
//                 "valueField": "Actual Monthly",
//                 "title": "Monthly Actual",
//                 "type": "column",
//                 "fillAlphas": 0.9,
//                 "valueAxis": "monthly",
//                 "balloonText": "Actual Monthly: [[value]] %",
//                 "legendValueText": "[[value]] %",
//                 "legendPeriodValueText": " ",
//                 "lineColor": "#fd397a",
//                 "alphaField": "alpha"
//             },{
//                 "id": "g6",
//                 "valueField": "Actual Cumulative",
//                 "classNameField": "bulletClass",
//                 "title": "Actual Cumulative",
//                 "type": "line",
//                 "valueAxis": "cum",
//                 "lineColor": "#fd397a",
//                 "lineThickness": 1,
//                 "legendValueText": "[[value]] %",
//                 "descriptionField": " ",
//                 "bullet": "round",
//                 "bulletSizeField": " ",
//                 "bulletBorderColor": "#fd397a",
//                 "bulletBorderAlpha": 1,
//                 "bulletBorderThickness": 2,
//                 "bulletColor": "#fd397a",
//                 "labelText": "[[townName2]]",
//                 "labelPosition": "right",
//                 "balloonText": "Actual Cumulative: [[value]] % ",
//                 "showBalloon": true,
//                 "animationPlayed": true
//             }],
//
//             "chartCursor": {
//                 "zoomable": false,
//                 "categoryBalloonDateFormat": "DD",
//                 "cursorAlpha": 0,
//                 "valueBalloonsEnabled": false
//             },
//             "legend": {
//                 "bulletType": "round",
//                 "equalWidths": false,
//                 "valueWidth": 120,
//                 "useGraphSettings": true
// //"color": "#FFFFFF"
//             }
//         });


    </script>



    <script src="/js/highcharts/highcharts.js"></script>
    <script src="/js/highcharts/highcharts-more.js"></script>
    <script src="/js/highcharts/data.js"></script>
    <script src="/js/highcharts/drilldown.js"></script>

    <script>


        Highcharts.chart('disciplineWeightFactor', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie',

            },

            title: {
                text: ''
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:.1f}%', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> از کل<br/>'
            },

            series: [
                {
                    name: "فعالیت",
                    colorByPoint: true,
                    data: [
                        {
                            name: "فرآیند",
                            y: 20.00,
                            drilldown: "1"
                        },
                        {
                            name: "ایمنی",
                            y: 2.50,
                            drilldown: "2"
                        },
                        {
                            name: "لوله کشی",
                            y: 12.00,
                            drilldown: "3"
                        },{
                            name: "تجهیزات ثابت",
                            y: 30.00,
                            drilldown: "4"
                        },{
                            name: "تجهیزات دوار",
                            y: 15.00,
                            drilldown: "5"
                        },{
                            name: "سیویل و سازه",
                            y: 2.00,
                            drilldown: "6"
                        },{
                            name: "برق",
                            y: 9.00,
                            drilldown: "7"
                        },{
                            name: "ابزار دقیق",
                            y: 9.00,
                            drilldown: "8"
                        },{
                            name: "سیستم تهویه",
                            y: 0.50,
                            drilldown: "9"
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "فرآیند",
                        id: "1",
                        data: [
                            [
                                "واقعی",
                                44.55
                            ],
                            [
                                "باقیمانده",
                                55.45
                            ]
                        ]
                    },
                    {
                        name: "ایمنی",
                        id: "2",
                        data: [
                            [
                                "واقعی",
                                1.84
                            ],
                            [
                                "باقیمانده",
                                98.16
                            ]
                        ]

                    },
                    {
                        name: "لوله کشی صنعتی",
                        id: "3",
                        data: [
                            [
                                "واقعی",
                                52.63
                            ],
                            [
                                "باقیمانده",
                                47.37
                            ]
                        ]

                    },{
                        name: "تجهیزات ثابت ",
                        id: "4",
                        data: [
                            [
                                "واقعی",
                                84.69
                            ],
                            [
                                "باقیمانده",
                                15.31
                            ]
                        ]

                    },{
                        name: "تجهیزات دوار",
                        id: "5",
                        data: [
                            [
                                "واقعی",
                                26.51
                            ],
                            [
                                "باقیمانده",
                                73.49
                            ]
                        ]

                    },{
                        name: "سیویل و سازه",
                        id: "6",
                        data: [
                            [
                                "واقعی",
                                94.47
                            ],
                            [
                                "باقیمانده",
                                5.53
                            ]
                        ]

                    },{
                        name: "برق",
                        id: "7",
                        data: [
                            [
                                "واقعی",
                                15.22
                            ],
                            [
                                "باقیمانده",
                                84.78
                            ]
                        ]

                    },{
                        name: "ابزار دقیق",
                        id: "8",
                        data: [
                            [
                                "واقعی",
                                9.67
                            ],
                            [
                                "باقیمانده",
                                90.33
                            ]
                        ]

                    },{
                        name: "سیستم تهویه",
                        id: "9",
                        data: [
                            [
                                "واقعی",
                                4.80
                            ],
                            [
                                "باقیمانده",
                                95.20
                            ]
                        ]

                    }
                ]
            }
        });




        Highcharts.chart('phasesWeightFactor', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie',

            },

            title: {
                text: ''
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:.1f}%', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> از کل<br/>'
            },

            series: [
                {
                    name: "فعالیت",
                    colorByPoint: true,
                    data: [
                        {
                            name: "خدمات خريد",
                            y: 23.00,
                            drilldown: "1"
                        },
                        {
                            name: "ساخت",
                            y: 71.50,
                            drilldown: "2"
                        },
                        {
                            name: "حمل و تحویل",
                            y: 5.50,
                            drilldown: "3"
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "خدمات خرید",
                        id: "1",
                        data: [
                            [
                                "واقعی",
                                77.48
                            ],
                            [
                                "باقیمانده",
                                22.52
                            ]
                        ]
                    },
                    {
                        name: "ساخت",
                        id: "2",
                        data: [
                            [
                                "واقعی",
                                40.90
                            ],
                            [
                                "باقیمانده",
                                59.10
                            ]
                        ]

                    },
                    {
                        name: "حمل و تحویل",
                        id: "3",
                        data: [
                            [
                                "واقعی",
                                31.83
                            ],
                            [
                                "باقیمانده",
                                68.17
                            ]
                        ]

                    }
                ]
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
            "value": 26,
            "full": 100
        }, {
            "category": "حمل شده",
            "value": 26,
            "full": 100
        }, {
            "category": "موثر شدن",
            "value": 41,
            "full": 100
        }, {
            "category": "سفارش گذاری",
            "value": 44,
            "full": 100
        },{
            "category": "استعلام",
            "value": 59,
            "full": 100
        },{
            "category": "تهیه بسته خرید",
            "value": 61,
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





        //ordersDist

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

        // Create map instance
        var chart = am4core.create("ordersDist", am4maps.MapChart);
        // Set map definition
        chart.geodata = am4geodata_continentsLow;

        // Set projection
        chart.projection = new am4maps.projections.Miller();

        // Create map polygon series
        var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
        polygonSeries.exclude = ["antarctica"];
        polygonSeries.useGeodata = true;

        // Create an image series that will hold pie charts
        var pieSeries = chart.series.push(new am4maps.MapImageSeries());
        var pieTemplate = pieSeries.mapImages.template;
        pieTemplate.propertyFields.latitude = "latitude";
        pieTemplate.propertyFields.longitude = "longitude";

        var pieChartTemplate = pieTemplate.createChild(am4charts.PieChart);
        pieChartTemplate.adapter.add("data", function(data, target) {
            if (target.dataItem) {
                return target.dataItem.dataContext.pieData;
            }
            else {
                return [];
            }
        });
        pieChartTemplate.propertyFields.width = "width";
        pieChartTemplate.propertyFields.height = "height";
        pieChartTemplate.horizontalCenter = "middle";
        pieChartTemplate.verticalCenter = "middle";
        pieChartTemplate.rtl = true;

        var pieTitle = pieChartTemplate.titles.create();
        pieTitle.text = "{title}";

        var pieSeriesTemplate = pieChartTemplate.series.push(new am4charts.PieSeries);
        pieSeriesTemplate.dataFields.category = "category";
        pieSeriesTemplate.dataFields.value = "value";
        pieSeriesTemplate.labels.template.disabled = true;
        pieSeriesTemplate.ticks.template.disabled = true;

        pieSeries.data = [{
            "title": "China",
            "latitude": 35.8617,
            "longitude": 104.1954,
            "width": 100,
            "height": 100,
            "pieData": [{
                "category": "DALIAN",
                "value":  2700000
            }, {
                "category": "DEEP BLUE",
                "value":  27000000
            }]
        }, {
            "title": "GERMANY",
            "latitude": 51.1657,
            "longitude": 10.4515,
            "width": 50,
            "height": 50,
            "pieData": [{
                "category": "KURVERS PIPING",
                "value":   376000
            }, {
                "category": "ARVOS(ALSTOM)",
                "value":   10802350
            }]
        }, {
            "title": "IRAN",
            "latitude": 32.4279,
            "longitude": 53.6880,
            "width": 250,
            "height": 250,
            "pieData": [{
                "category": " ABAN ",
                "value":  3400000
            }, {
                "category": " ASAS SANAAT ",
                "value":  750000
            }, {
                "category": " Azarab ",
                "value":  6800000
            }, {
                "category": " BAMDAD ZENDEH ROOD ",
                "value":  2500000
            },{
                "category": "  Farabard  ",
                "value":  2500000
            },{
                "category": "  FATEH SANAAT  ",
                "value":  16000000
            },{
                "category": "  GOSTARESH SHIR SAZI  ",
                "value":  1237500
            },{
                "category": "  HATCO / KFAS  ",
                "value":  57570000
            },{
                "category": "  MFS  ",
                "value":  550000
            },{
                "category": "  MSP  ",
                "value":  1250000
            },{
                "category": "  NIA SHIMI  ",
                "value":  58000
            },{
                "category": "  PANTAN CHIMI  ",
                "value":  1700000
            },{
                "category": "  PARS TADBIR GOSTAR  ",
                "value":  374300
            },{
                "category": "  PART SAZI MASHHAD  ",
                "value":  87000
            },{
                "category": "  PETRO ADAK ARIAN  ",
                "value":  345700
            },{
                "category": "  SANDROOS SANAT  ",
                "value":  2800000
            },{
                "category": "  TASHA  ",
                "value":  7500000
            }]
        },{
            "title": "ITALY",
            "latitude": 11.081385,
            "longitude": 21.621094,
            "width": 50,
            "height": 50,
            "pieData": [{
                "category": "ATB",
                "value":  6000000
            }, {
                "category": " BREMBANA & ROLLE ",
                "value":  14300000
            }, {
                "category": " DORIS ",
                "value":  17210000
            }, {
                "category": " FBN & HUDSON ",
                "value":  3500000
            },{
                "category": "  KT  ",
                "value":  18700000
            }]
        }, {
                "title": "JAPAN",
                "latitude": 36.2048,
                "longitude": 138.2529,
                "width": 50,
                "height": 50,
                "pieData": [{
                    "category": " KVC ",
                    "value":   4000000
                }]
            },{
            "title": " KOREA ",
            "latitude": 35.9078,
            "longitude": 127.7669,
            "width": 50,
            "height": 50,
            "pieData": [{
                "category": " KSPC ",
                "value":   400000
            }, {
                "category": "    NETHERLAND   ",
                "value":    1087500
            }, {
                "category": "   VAN LEEUWEN   ",
                "value":    1087500
            }]
        },{
            "title": "  SWISS  ",
            "latitude": 46.8182,
            "longitude": 8.2275,
            "width": 50,
            "height": 50,
            "pieData": [{
                "category": "   CASALE   ",
                "value":    7120000
            }, {
                "category": "     Grand Total    ",
                "value":     218618350
            }]
        }];


        var aa;
        aa = $("#m_table_4").DataTable({
            "searching": true, scrollY: "50vh", scrollX: true,

                buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
            }
        ),
            $("#export_print").on("click", function (e) {
                    e.preventDefault(), aa.button(0).trigger()
                }
            ),
            $("#export_copy").on("click", function (e) {
                    e.preventDefault(), aa.button(1).trigger()
                }
            ),
            $("#export_excel").on("click", function (e) {
                    e.preventDefault(), aa.button(2).trigger()
                }
            ),
            $("#export_csv").on("click", function (e) {
                    e.preventDefault(), aa.button(3).trigger()
                }
            ),
            $("#export_pdf").on("click", function (e) {
                    e.preventDefault(), aa.button(4).trigger()
                }
            )






        function search(keyword){
            $("div#m_table_2_filter > label > input.form-control-sm ").val(keyword);
            $( "div#m_table_2_filter > label > input.form-control-sm" ).trigger( "keyup" );
        }

{{--        $("#myInputTextField").val("{{ $title }}");--}}
        {{--$( "#myInputTextField" ).trigger( "keyup" );--}}
    </script>
    <!--end::Page Scripts -->




@stop
