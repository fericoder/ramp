@extends('layouts.master', ['title' => 'پروژه -> مهندسی'])

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

                <span class="kt-subheader__desc iranyekan">داشبورد گزارشات مهندسی</span>
            </div>
            <span style="padding:10px" class="badge badge-primary iranyekan ">تاریخ آخرین بروزرسانی گزارش: ۱۳۹۹/۰۳/۳۱</span>

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
                                <span class="kt-widget1__number kt-font-brand">% 87.13</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">واقعی:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">% 82.50</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">انحراف:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">% 4.63-</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-1 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-2 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">وضعیت مهندسی تفصیلی :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">تعداد کل</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">{{ $dcis->count() }}</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">منتشر شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success"> {{ $dcis->where('Status', 'InProgress')->count() + $dcis->where('Status', 'complete')->count() }}</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">نهایی شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">{{ $dcis->where('Status', 'complete')->count() }}</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-2 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">وضعیت مهندسی خرید :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">تعداد کل</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">{{ $vpis->unique('DocNo')->count() }}</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">منتشر شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">{{ $vpis->unique('DocNo')->where('IssuedByVendor', 'Yes')->count() }}</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">نهایی شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">{{ $vpis->unique('DocNo')->where('IssuedByVendor', 'Yes')->where('PIDECNoCommentDateEDMS3', '=', null)->where('PIDECNoCommentDate', '=', null)->count() }}</span>
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
                                <span class="kt-widget1__number kt-font-info"> 17,105,500  یورو</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">تایید شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">  8,842,930  یورو</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">پراخت شده</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">  8,262,570   یورو</span>
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
                                نمودار پیشرفت مهندسی
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#S-Curve" aria-expanded="true"> نمودار پیشرفت مهندسی </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#Overall" aria-expanded="false"> جدول پیشرفت مهندسی</a>
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
                                                    <td>1.32%</td>
                                                </tr>
                                                <tr>
                                                    <td style="float: right;" >
                                                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                        <span>Achieve Month Plan:</span>
                                                    </td>
                                                    <td>2.15%</td>
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
                                                    <td>1.41%</td>
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
                                            <td>مطالعات و فعالیت های مقدماتی  </td>
                                            <td style="direction: rtl;text-align:center" > 9% </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                        </tr>


                                        <tr>
                                            <td>لیسانس و مهندسی پایه  </td>
                                            <td style="direction: rtl;text-align:center" > 36% </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                        </tr>
                                        <tr>
                                            <td>مهندسی تفصیلی </td>
                                            <td style="direction: rtl;text-align:center" > 55% </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                        </tr>

                                        <tr>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > پیشرفت کل  </td>
                                            <td style="direction: rtl;text-align:center;background-color:#e2efda" > 100.00% </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
                                            <td style="direction: rtl;text-align:center" > N/A </td>
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
            <div class="col-md-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                درصد وزنی دیسیپلین
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="disciplineWeightFactor" style="min-width: 550px; max-width: 600px; height: 500px; margin: 0 auto"></div>
                    </div>

                </div>
            </div>



            <div class="col-md-6">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                درصد وزنی نوع مدرک</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="phasesWeightFactor" style="min-width: 550px; max-width: 600px; height: 500px; margin: 0 auto"></div>
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
                                <a href="{{ route('dci.index') }}">    گزارش مهندسی تفصیلی</a>
                            </h3>
                        </div>
                        <span style="" class="badge badge-primary reportDate">  آخرین بروزرسانی:  {{ jdate($dcis->sortbyDesc('updated_at')->first()->updated_at)->format('Y/m/d') }}</span>
                    </div>

                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#desc" aria-expanded="true"> براساس دیسیپلین </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#type" aria-expanded="false"> براساس نوع مدرک</a>
                                </li>

                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="desc" aria-expanded="true" aria-labelledby="base-tab11">


                                    <div class="row">
                                        <!-- Multi Text Column -->
                                        <table style="font-family: arial;    width: 99.5%; line-height: 2.3;    text-align: center;vertical-align: middle;direction: ltr" id="table-sparkline">
                                            <thead>
                                            <style>
                                                td, th {
                                                    color: black !important;
                                                    padding: 7px !important;
                                                    text-align: center;
                                                }
                                            </style>
                                            <tr style="background-color: #cecdcd;">
                                                <th style="text-align: center; direction: rtl; font-family: BYekan;">شـرح فعاليت :</th>
                                                <th style="text-align: center; direction: rtl; font-family: BYekan">کل مدارک:</th>
                                                <th style="text-align: center; direction: rtl; font-family: BYekan;">ارسال مدارک طبق برنامه:</th>
                                                <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارک ارسال شده:</th>
                                                <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارک دارای تاخیر نسبت به برنامه:</th>
                                                <th style="text-align: center; direction: rtl; font-family: BYekan;"> نهایی نشده:</th>
                                                <th style="text-align: center; direction: rtl; font-family: BYekan;">نهایی شده:</th>
                                            </tr>
                                            </thead>
                                            <tbody id="tbody-sparkline">
                                            <tr style="text-align: center;">
                                                <th>CIVIL&STRC:</th>
                                                <td>{{ $dcis->where('Dept', 'ST')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'ST')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'ST')->where('Status', 'complete')->count() + $dcis->where('Dept', 'ST')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'ST')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'ST')->where('Status', 'InProgress')->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'ST')->where('Status', 'complete')->count() }}</td>
                                            </tr>
                                            <tr style="background-color: #cecdcd;text-align: center;">
                                                <th>ELECTRICAL:</th>
                                                <td>{{ $dcis->where('Dept', 'EL')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'EL')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'EL')->where('Status', 'complete')->count() + $dcis->where('Dept', 'EL')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'EL')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'EL')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'EL')->where('Status', 'complete')->count() }}</td>
                                            </tr>
                                            <tr style="text-align:center;">
                                                <th>HSE:</th>
                                                <td>{{ $dcis->where('Dept', 'HSE')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'HSE')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'HSE')->where('Status', 'complete')->count() + $dcis->where('Dept', 'HSE')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'HSE')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'HSE')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'HSE')->where('Status', 'complete')->count() }}</td>
                                            </tr>
                                            <tr style="background-color: #cecdcd;text-align: center;">
                                                <th>HVAC:</th>
                                                <td>{{ $dcis->where('Dept', 'HV')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'HV')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'HV')->where('Status', 'complete')->count() + $dcis->where('Dept', 'HV')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'HV')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'HV')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'HV')->where('Status', 'complete')->count() }}</td>
                                            </tr>
                                            <tr style="text-align:center;">
                                                <th>INSTRUMENT:</th>
                                                <td>{{ $dcis->where('Dept', 'IN')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'IN')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'IN')->where('Status', 'complete')->count() + $dcis->where('Dept', 'IN')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'IN')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'IN')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'IN')->where('Status', 'complete')->count() }}</td>
                                            </tr>
                                            <tr style="background-color: #cecdcd;text-align: center;">
                                                <th> MACHINERY:</th>
                                                <td>{{ $dcis->where('Dept', 'MC')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'MC')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'MC')->where('Status', 'complete')->count() + $dcis->where('Dept', 'MC')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'MC')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'MC')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'MC')->where('Status', 'complete')->count() }}</td>
                                            </tr>
                                            <tr style="text-align:center;">
                                                <th>MECHANIC:</th>
                                                <td>{{ $dcis->where('Dept', 'MD')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'MD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'MD')->where('Status', 'complete')->count() + $dcis->where('Dept', 'MD')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'MD')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'MD')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'MD')->where('Status', 'complete')->count() }}</td>
                                            </tr>
                                            <tr style="background-color: #cecdcd;text-align: center;">
                                                <th>PIPING:</th>
                                                <td>{{ $dcis->where('Dept', 'PI')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'PI')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'PI')->where('Status', 'complete')->count() + $dcis->where('Dept', 'PI')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'PI')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'PI')->where('Status', 'InProgress')->count()  }}</td>
                                                <td>{{ $dcis->where('Dept', 'PI')->where('Status', 'complete')->count() }}</td>
                                                </td>
                                            </tr>
                                            <tr style="text-align:center;">
                                                <th>PROCESS:</th>
                                                <td>{{ $dcis->where('Dept', 'PR')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'PR')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'PR')->where('Status', 'complete')->count() + $dcis->where('Dept', 'PR')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'PR')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'PR')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'PR')->where('Status', 'complete')->count() }}</td>
                                            </tr>

                                            <tr style="background-color: #cecdcd;text-align: center;">
                                                <th>Quality Assurance:</th>
                                                <td>{{ $dcis->where('Dept', 'QA')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'QA')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'QA')->where('Status', 'complete')->count() + $dcis->where('Dept', 'QA')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'QA')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'QA')->where('Status', 'InProgress')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'QA')->where('Status', 'complete')->count() }}</td>
                                            </tr>

                                            <tr style="text-align:center;">
                                                <th>Quality Control:</th>
                                                <td>{{ $dcis->where('Dept', 'QC')->count() }}</td>
                                                <td style="font-family: arial;">{{ $dcis->where('Dept', 'QC')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important">{{ $dcis->where('Dept', 'QC')->where('Status', 'complete')->count() + $dcis->where('Dept', 'QC')->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important">{{ $dcis->where('Dept', 'QC')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td>{{ $dcis->where('Dept', 'QC')->where('Status', 'complete')->count()   }}</td>
                                                <td>{{ $dcis->where('Dept', 'QC')->where('Status', 'complete')->count() }}</td>
                                            </tr>


                                            <tr style="background-color: #cecdcd;text-align: center;">
                                                <th style="font-weight: 700;font-size: 17px;">Total:</th>
                                                <td style="font-weight: 700;font-size: 17px;">{{ $dcis->count() }}</td>
                                                <td style="font-family: arial;font-weight: 700;font-size: 17px">{{ $dcis->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="color: green!important;font-family: arial;font-weight: 700;font-size: 17px">{{ $dcis->where('Status', 'complete')->count() + $dcis->where('Status', 'InProgress')->count() }}</td>
                                                <td style="color: red!important;font-family: arial;font-weight: 700;font-size: 17px">{{ $dcis->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                                <td style="font-weight: 700;font-size: 17px;">{{ $dcis->where('Status', 'InProgress')->count()   }}</td>
                                                <td style="font-weight: 700;font-size: 17px;">{{ $dcis->where('Status', 'complete')->count() }}</td>
                                            </tr>


                                            </tbody>
                                        </table>

                                        <!-- Flag/Icon Column -->


                                        <!-- Chart Column -->

                                    </div>



                                </div>
                                <div class="tab-pane" id="type" aria-labelledby="base-tab12">
                                    <table style="font-family: arial;    width: 99.5%; line-height: 2.3;    text-align: center;vertical-align: middle;direction: ltr" id="table-sparkline">
                                        <thead>
                                        <style>
                                            td, th {
                                                color: black !important;
                                                padding: 7px !important;
                                                text-align: center;
                                            }
                                        </style>
                                        <tr style="background-color: #cecdcd;">
                                            <th style="text-align: center; direction: rtl; font-family: BYekan;">شـرح فعاليت :</th>
                                            <th style="text-align: center; direction: rtl; font-family: BYekan">کل مدارک:</th>
                                            <th style="text-align: center; direction: rtl; font-family: BYekan;">ارسال مدارک طبق برنامه:</th>
                                            <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارک ارسال شده:</th>
                                            <th style="text-align: center; direction: rtl; font-family: BYekan;">مدارک دارای تاخیر نسبت به برنامه:</th>
                                            <th style="text-align: center; direction: rtl; font-family: BYekan;"> نهایی نشده:</th>
                                            <th style="text-align: center; direction: rtl; font-family: BYekan;">نهایی شده:</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbody-sparkline">
                                        <tr style="text-align: center;">
                                            <th>CAL:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'CAL')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'CAL')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'CAL')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'CAL')->where('Status', 'InProgress')->count()  }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'CAL')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="background-color: #cecdcd;text-align: center;">
                                            <th>CDW:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'CDW')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'CDW')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'CDW')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'CDW')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'CDW')->where('Status', 'InProgress')->count()  }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'CDW')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <th>DBS:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'DBS')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'DBS')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'DBS')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'DBS')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'DBS')->where('Status', 'InProgress')->count()  }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'DBS')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="background-color: #cecdcd;text-align: center;">
                                            <th>DSH:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'DSH')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'DSH')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'DSH')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'DSH')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'DSH')->where('Status', 'InProgress')->count()  }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'DSH')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <th>DWG:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'DWG')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'DSH')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'DSH')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'DWG')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'DWG')->where('Status', 'InProgress')->count()  }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'DWG')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="background-color: #cecdcd;text-align: center;">
                                            <th>EDW:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'EDW')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'EDW')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'EDW')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'EDW')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'EDW')->where('Status', 'InProgress')->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'EDW')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <th>LIST:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'LIST')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'LIST')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'LIST')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'LIST')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'LIST')->where('Status', 'InProgress')->count()  }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'LIST')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="background-color: #cecdcd;text-align: center;">
                                            <th> MTO:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'MTO')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'MTO')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'MTO')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'MTO')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'MTO')->where('Status', 'InProgress')->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'MTO')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="text-align:center;">
                                            <th>REQ:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'REQ')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'REQ')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'REQ')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'REQ')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'REQ')->where('Status', 'InProgress')->count()  }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'REQ')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="background-color: #cecdcd;text-align: center;">
                                            <th>SCOPE:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'SCOPE')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'SCOPE')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'SCOPE')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'SCOPE')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'SCOPE')->where('Status', 'InProgress')->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'SCOPE')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style=";text-align: center;">
                                            <th>SPEC:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'SPEC')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'SPEC')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'SPEC')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'SPEC')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'SPEC')->where('Status', 'InProgress')->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'SPEC')->where('Status', 'complete')->count() }}</td>
                                        </tr>
                                        <tr style="background-color: #cecdcd;text-align: center;">
                                            <th>TBA:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'TBA')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'TBA')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'TBA')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'TBA')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DepDOCCOD', 'TBA')->where('Status', 'InProgress')->count()}}</td>
                                            <td>{{ $dcis->where('DepDOCCOD', 'TBA')->where('Status', 'complete')->count() }}</td>
                                        </tr>

                                        <tr style=";text-align: center;">
                                            <th>VDR:</th>
                                            <td>{{ $dcis->where('DOCCOD', 'VDR')->count() }}</td>
                                            <td style="font-family: arial;">{{ $dcis->where('DOCCOD', 'VDR')->where('Status', 'complete')->count() + $dcis->where('DOCCOD', 'VDR')->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: green!important">{{ $dcis->where('DOCCOD', 'DOCCOD')->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: red!important">{{ $dcis->where('DOCCOD', 'VDR')->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'VDR')->where('Status', 'InProgress')->count()}}</td>
                                            <td>{{ $dcis->where('DOCCOD', 'VDR')->where('Status', 'complete')->count() }}</td>
                                        </tr>


                                        <tr style="background-color: #cecdcd;text-align: center;">
                                            <th style="font-weight: 700;font-size: 17px;">Total:</th>
                                            <td style="font-weight: 700;font-size: 17px;">{{ $dcis->count() }}</td>
                                            <td style="font-family: arial;font-weight: 700;font-size: 17px">{{ $dcis->where('START',  '<=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="color: green!important;font-family: arial;font-weight: 700;font-size: 17px">{{ $dcis->where('Status', 'complete')->count() + $dcis->where('Status', 'InProgress')->count() }}</td>
                                            <td style="color: red!important;font-family: arial;font-weight: 700;font-size: 17px">{{ $dcis->where('RepliedByEmployer',  '>=', \Carbon\Carbon::today()->toDateString())->count() }}</td>
                                            <td style="font-weight: 700;font-size: 17px;">{{ $dcis->where('Status', 'InProgress')->count()   }}</td>
                                            <td style="font-weight: 700;font-size: 17px;">{{ $dcis->where('Status', 'complete')->count() }}</td>
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




        {{--<div class="row">--}}
            {{--<div class="col-xl-12">--}}
                {{--<div class="kt-portlet kt-portlet--tabs">--}}
                    {{--<div class="kt-portlet__head">--}}
                        {{--<div class="kt-portlet__head-label">--}}
                            {{--<h3 class="kt-portlet__head-title">--}}
                                {{--جدول مهندسی تفصیلی--}}
                            {{--</h3>--}}
                        {{--</div>--}}
                        {{--<div style="" class="kt-portlet__head-toolbar">--}}

                            {{--<div class="kt-portlet__head-toolbar-wrapper">--}}
                                {{--<div class="dropdown dropdown-inline">--}}
                                    {{--<button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--<i class="la la-plus"></i> ابزار ها و خروجی ها--}}
                                    {{--</button>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                        {{--<ul class="kt-nav">--}}
                                            {{--<li class="kt-nav__section kt-nav__section--first">--}}
                                                {{--<span class="kt-nav__section-text">انواع خروجی ها</span>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_print">--}}
                                                    {{--<i class="kt-nav__link-icon la la-print"></i>--}}
                                                    {{--<span class="kt-nav__link-text">چاپ</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_copy">--}}
                                                    {{--<i class="kt-nav__link-icon la la-copy"></i>--}}
                                                    {{--<span class="kt-nav__link-text">کپی</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_excel">--}}
                                                    {{--<i class="kt-nav__link-icon la la-file-excel-o"></i>--}}
                                                    {{--<span class="kt-nav__link-text">اکسل</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_csv">--}}
                                                    {{--<i class="kt-nav__link-icon la la-file-text-o"></i>--}}
                                                    {{--<span class="kt-nav__link-text">CSV</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_pdf">--}}
                                                    {{--<i class="kt-nav__link-icon la la-file-pdf-o"></i>--}}
                                                    {{--<span class="kt-nav__link-text">PDF</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="kt-portlet__body">--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-lg-12">--}}
                                {{--<div class="table-responsive">--}}
                                    {{--<table style="font-family: iranyekan; width: 100%; direction: ltr!important;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">--}}
                                        {{--<thead style="font-family: BYekan">--}}
                                        {{--<tr>--}}
                                            {{--<th title="Field #2" data-field="2">Doc. No.</th>--}}
                                            {{--<th title="Field #2" data-field="2">Rev.</th>--}}
                                            {{--<th title="Field #3" data-field="3">Title</th>--}}
                                            {{--<th title="Field #4" data-field="4">Owner Doc. No.</th>--}}
                                            {{--<th title="Field #7" data-field="7">POI</th>--}}
                                            {{--<th title="Field #10" data-field="10">Dept.</th>--}}
                                            {{--<th title="Field #11" data-field="11">Ext. Trans. No </th>--}}
                                            {{--<th title="Field #12" data-field="27">Last Comment Sheet Number</th>--}}
                                            {{--<th title="Field #12" data-field="29">Status</th>--}}
                                            {{--<th title="Field #12" data-field="30">ACTUAL %</th>--}}
                                            {{--<th title="Field #12" data-field="31">Last Update</th>--}}

                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody>--}}

                                        {{--@foreach ($dcis as $dci)--}}
                                            {{--<tr>--}}
                                                {{--<td style="font-family: BYekan"><a target="_blank" href="https://smc.pgapco.ir/edms/1-engineering/Documents/04-Detailed Eng/All Document/{{ $dci->DocNo .'-'. $dci->Rev }}.pdf">{{ $dci->DocNo }}</a></td>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->Rev }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->Title }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->OwnerDocNo }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->POI }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->Dept }}</td>--}}
                                                {{--<td style="font-family: BYekan"><a target="_blank" href="https://smc.pgapco.ir/edms/1-engineering/Documents/06-TRANSMITTAL/{{$dci->ExtTransNo}}.pdf">{{ $dci->ExtTransNo }}</td></a></td>--}}
                                                {{--<td style="font-family: BYekan"><a target="_blank" href="https://smc.pgapco.ir/edms/1-engineering/Documents/07-Comment Sheet/{{$dci->LastCommentSheetNumber}}.pdf">{{ $dci->LastCommentSheetNumber }}</td></a>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->Status }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->ACTUAL }}</td>--}}
                                                {{--<td style="font-family: BYekan">{{ $dci->updated_at }}</td>--}}

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
            <div class="col-xl-12 col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">


                    <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <a href="{{ route('vpis.index') }}"> گزارش مهندسی خرید</a>
                            </h3>
                        </div>
                        <span style="" class="badge badge-primary reportDate">  آخرین بروزرسانی:  {{ jdate($vpis->first()->created_at)->format('Y/m/d') }}</span>
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
                                        <th>{{ $req->where('VendorIssuedDate', '<=', \Carbon\Carbon::today()->subDays(jdate()->now()->getDay()-14)->toDateString())->where('IssuedByVendor', 'Yes')->where('RepliedByPIDEC', 'No')->count() }}</th>

                                        {{--7 روز--}}
                                        <th>{{ $req->where('VendorIssuedDate', '<=', \Carbon\Carbon::today()->subDays(jdate()->now()->getDay()-7)->toDateString())->where('IssuedByVendor', 'Yes')->where('RepliedByPIDEC', 'No')->count() }}</th>
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
                        {{--<div style="" class="kt-portlet__head-toolbar">--}}
                            {{--<div class="kt-portlet__head-toolbar-wrapper">--}}
                                {{--<div class="dropdown dropdown-inline">--}}
                                    {{--<button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                        {{--<i class="la la-plus"></i> ابزار ها و خروجی ها--}}
                                    {{--</button>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                        {{--<ul class="kt-nav">--}}
                                            {{--<li class="kt-nav__section kt-nav__section--first">--}}
                                                {{--<span class="kt-nav__section-text">انواع خروجی ها</span>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_print">--}}
                                                    {{--<i class="kt-nav__link-icon la la-print"></i>--}}
                                                    {{--<span class="kt-nav__link-text">چاپ</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_copy">--}}
                                                    {{--<i class="kt-nav__link-icon la la-copy"></i>--}}
                                                    {{--<span class="kt-nav__link-text">کپی</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_excel">--}}
                                                    {{--<i class="kt-nav__link-icon la la-file-excel-o"></i>--}}
                                                    {{--<span class="kt-nav__link-text">اکسل</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_csv">--}}
                                                    {{--<i class="kt-nav__link-icon la la-file-text-o"></i>--}}
                                                    {{--<span class="kt-nav__link-text">CSV</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li class="kt-nav__item">--}}
                                                {{--<a href="#" class="kt-nav__link" id="export_pdf">--}}
                                                    {{--<i class="kt-nav__link-icon la la-file-pdf-o"></i>--}}
                                                    {{--<span class="kt-nav__link-text">PDF</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="kt-portlet__body">--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-lg-12">--}}
                                {{--<div class="table-responsive">--}}
                                    {{--<table style="font-family: iranyekan; width: 100%; direction: ltr; " class="table table-striped table-bordered table-hover table-checkable display " id="m_table_3">--}}
                                        {{--<thead style="  font-family: BYekan">--}}
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
                        "searching": true,
                        scrollY: "50vh", scrollX: true,

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
            "Actual": 82.50
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
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
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
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> از کل<br/>'
            },

            series: [
                {
                    name: "فعالیت",
                    colorByPoint: true,
                    data: [
                        {
                            name: "CIVIL&STRC",
                            y: {{ $dcis->where('Dept', 'ST')->count() }},
                            drilldown: "1"
                        },
                        {
                            name: "ELECTRICAL",
                            y: {{ $dcis->where('Dept', 'EL')->count() }},
                            drilldown: "2"
                        },
                        {
                            name: "HSE",
                            y: {{ $dcis->where('Dept', 'HSE')->count() }},
                            drilldown: "3"
                        },{
                            name: "HVAC",
                            y: {{ $dcis->where('Dept', 'HV')->count() }},
                            drilldown: "4"
                        },{
                            name: "INSTRUMENT",
                            y: {{ $dcis->where('Dept', 'IN')->count() }},
                            drilldown: "5"
                        },{
                            name: "MACHINERY",
                            y: {{ $dcis->where('Dept', 'MC')->count() }},
                            drilldown: "6"
                        },{
                            name: "MECHANIC",
                            y: {{ $dcis->where('Dept', 'MD')->count() }},
                            drilldown: "7"
                        },{
                            name: "PIPING",
                            y: {{ $dcis->where('Dept', 'PI')->count() }},
                            drilldown: "8"
                        },{
                            name: "PROCESS",
                            y: {{ $dcis->where('Dept', 'PR')->count() }},
                            drilldown: "9"
                        },{
                            name: "QA",
                            y: {{ $dcis->where('Dept', 'QA')->count() }},
                            drilldown: "10"
                        },{
                            name: "QC",
                            y: {{ $dcis->where('Dept', 'QC')->count() }},
                            drilldown: "11"
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "CIVIL&STRC",
                        id: "1",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'ST')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'ST')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]
                    },
                    {
                        name: "ELECTRICAL",
                        id: "2",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'EL')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'EL')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },
                    {
                        name: "HSE",
                        id: "3",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'HSE')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'HSE')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "HVAC",
                        id: "4",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'HV')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'HV')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "INSTRUMENT",
                        id: "5",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'IN')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'IN')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "MACHINERY",
                        id: "6",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'MC')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'MC')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "MECHANIC",
                        id: "7",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'MD')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'MD')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "PIPING",
                        id: "8",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'PI')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'PI')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "PROCESS",
                        id: "9",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'PR')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'PR')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "QA",
                        id: "10",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'QA')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'QA')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "QC",
                        id: "11",
                        data: [
                            [
                                "منتشر شده",
                                {{  $dcis->where('Dept', 'QC')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{  $dcis->where('Dept', 'QC')->where('ExtTransNo', '=' ,  null)->count() }}
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
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
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
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> از کل<br/>'
            },

            series: [
                {
                    name: "فعالیت",
                    colorByPoint: true,
                    data: [
                        {
                            name: "CAL",
                            y: {{ $dcis->where('DOCCOD', 'CAL')->count() }},
                            drilldown: "11"
                        },{
                            name: "CDW",
                            y: {{ $dcis->where('DOCCOD', 'CDW')->count() }},
                            drilldown: "1"
                        },{
                            name: "DBS",
                            y: {{ $dcis->where('DOCCOD', 'DBS')->count() }},
                            drilldown: "12"
                        },
                        {
                            name: "DSH",
                            y: {{ $dcis->where('DOCCOD', 'DSH')->count() }},
                            drilldown: "2"
                        },
                        {
                            name: "DWG",
                            y: {{ $dcis->where('DOCCOD', 'DWG')->count() }},
                            drilldown: "3"
                        },{
                            name: "EDW",
                            y: {{ $dcis->where('DOCCOD', 'EDW')->count() }},
                            drilldown: "4"
                        },{
                            name: "LIST",
                            y: {{ $dcis->where('DOCCOD', 'LIST')->count() }},
                            drilldown: "5"
                        },{
                            name: "MTO",
                            y: {{ $dcis->where('DOCCOD', 'MTO')->count() }},
                            drilldown: "6"
                        },{
                            name: "REQ",
                            y: {{ $dcis->where('DOCCOD', 'REQ')->count() }},
                            drilldown: "7"
                        },{
                            name: "SCOPE",
                            y: {{ $dcis->where('DOCCOD', 'SCOPE')->count() }},
                            drilldown: "13"
                        },{
                            name: "SPEC",
                            y: {{ $dcis->where('DOCCOD', 'SPEC')->count() }},
                            drilldown: "8"
                        },{
                            name: "TBA",
                            y: {{ $dcis->where('DOCCOD', 'TBA')->count() }},
                            drilldown: "9"
                        },{
                            name: "VDR",
                            y: {{ $dcis->where('DOCCOD', 'VDR')->count() }},
                            drilldown: "10"
                        },
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "CAL",
                        id: "11",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'CAL')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'CAL')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]
                    },{
                        name: "CDW",
                        id: "1",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'CDW')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'CDW')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]
                    }, {
                        name: "DBS",
                        id: "12",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'DBS')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'DBS')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },
                    {
                        name: "DSH",
                        id: "2",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'DSH')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'DSH')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },
                    {
                        name: "DWG",
                        id: "3",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'DWG')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'DWG')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "EDW",
                        id: "4",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'EDW')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'EDW')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "LIST",
                        id: "5",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'LIST')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'LIST')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "MTO",
                        id: "6",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'MTO')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'MTO')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "REQ",
                        id: "7",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'REQ')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'REQ')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "SCOPE",
                        id: "13",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'SCOPE')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'SCOPE')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "SPEC",
                        id: "8",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'SPEC')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'SPEC')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "TBA",
                        id: "9",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'TBA')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'TBA')->where('ExtTransNo', '=' ,  null)->count() }}
                            ]
                        ]

                    },{
                        name: "VDR",
                        id: "10",
                        data: [
                            [
                                "منتشر شده",
                                {{ $dcis->where('DOCCOD', 'VDR')->where('ExtTransNo', '!=' ,  null)->count() }}
                            ],
                            [
                                "منتشر نشده",
                                {{ $dcis->where('DOCCOD', 'VDR')->where('ExtTransNo', '=' ,  null)->count() }}
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
            "value": 24,
            "full": 100
        }, {
            "category": "حمل شده",
            "value": 24,
            "full": 100
        }, {
            "category": "موثر شدن",
            "value": 29,
            "full": 100
        }, {
            "category": "سفارش گذاری",
            "value": 29,
            "full": 100
        },{
            "category": "استعلام",
            "value": 34,
            "full": 100
        },{
            "category": "تهیه بسته خرید",
            "value": 49,
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
                        format: '{point.y:f} €'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f} €</b> از کل<br/>'
            },

            series: [
                {
                    name: "پرفورما",
                    colorByPoint: true,
                    data: [
                        {
                            name: "STATIC EQUIPMENT",
                            y:   111930000,
                            drilldown: "1"
                        },
                        {
                            name: "ROTARY EQUIPMENT",
                            y:     55600000,
                            drilldown: "2"
                        },
                        {
                            name: "PROCESS",
                            y:     71170000,
                            drilldown: "3"
                        },
                        {
                            name: "PIPING MATERIAL",
                            y:   35150000,
                            drilldown: "4"
                        },
                        {
                            name: "ELEECTRICAL",
                            y:   18550000,
                            drilldown: "5"
                        },
                        {
                            name: "INSTRUMENT",
                            y:   20004000,
                            drilldown: "6"
                        },
                        {
                            name: "HVAC",
                            y:   2100000,
                            drilldown: "7"
                        },{
                            name: "STRUCTURE",
                            y:   7000000,
                            drilldown: "8"
                        },{
                            name: "HSE",
                            y:   3500000,
                            drilldown: "9"
                        },{
                            name: "Two Years Spare Parts",
                            y:   2994000,
                            drilldown: "10"
                        },
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "STATIC EQUIPMENT",
                        id: "1",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },
                    {
                        name: "ROTARY EQUIPMENT",
                        id: "2",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "PROCESS",
                        id: "3",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "PIPING MATERIAL",
                        id: "4",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "ELEECTRICAL",
                        id: "5",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "INSTRUMENT",
                        id: "6",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "HVAC",
                        id: "7",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "STRUCTURE",
                        id: "8",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "HSE",
                        id: "9",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
                        ]
                    },{
                        name: "Two Years Spare Parts",
                        id: "10",
                        data: [
                            [
                                "هزینه شده",
                                0.1
                            ],
                            [
                                "منتظر پرداخت",
                                1.3
                            ],
                            [
                                "بودجه باقیمانده",
                                53.02
                            ]
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
        chart.rtl = true;
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
            "title": "North America",
            "latitude": 39.563353,
            "longitude": -99.316406,
            "width": 100,
            "height": 100,
            "pieData": [{
                "category": "Category #1",
                "value": 1200
            }, {
                "category": "Category #2",
                "value": 500
            }, {
                "category": "Category #3",
                "value": 765
            }, {
                "category": "Category #4",
                "value": 260
            }]
        }, {
            "title": "Europe",
            "latitude": 50.896104,
            "longitude": 19.160156,
            "width": 50,
            "height": 50,
            "pieData": [{
                "category": "Category #1",
                "value": 200
            }, {
                "category": "Category #2",
                "value": 600
            }, {
                "category": "Category #3",
                "value": 350
            }]
        }, {
            "title": "Asia",
            "latitude": 47.212106,
            "longitude": 103.183594,
            "width": 80,
            "height": 80,
            "pieData": [{
                "category": "Category #1",
                "value": 352
            }, {
                "category": "Category #2",
                "value": 266
            }, {
                "category": "Category #3",
                "value": 512
            }, {
                "category": "Category #4",
                "value": 199
            }]
        }, {
            "title": "Africa",
            "latitude": 11.081385,
            "longitude": 21.621094,
            "width": 50,
            "height": 50,
            "pieData": [{
                "category": "Category #1",
                "value": 200
            }, {
                "category": "Category #2",
                "value": 300
            }, {
                "category": "Category #3",
                "value": 599
            }, {
                "category": "Category #4",
                "value": 512
            }]
        }];
    </script>
    <!--end::Page Scripts -->

@stop
