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

                <span class="kt-subheader__desc iranyekan">مرکز کنترل اسناد</span>
            </div>
            <span style="" class="badge badge-primary reportDate">  آخرین بروزرسانی:  {{ jdate($dcis->sortbyDesc('updated_at')->first()->updated_at)->format('Y/m/d') }}</span>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-lg">

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">تعداد کل مدارک بارگزاری شده تاکنون</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">
					            {{ \App\Dci::all()->count() }}
					    </span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::Total Profit-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Feedbacks-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">تعداد کل مدارک بارگزاری شده در هفته</h4>
                                </div>
                                <span class="kt-widget24__stats kt-font-warning">{{ \App\Dci::where('updated_at', '>=', \Carbon\Carbon::today()->subDays(7)->toDateString())->count() }}</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Feedbacks-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">تعداد کل مدارک بارگزاری شده امروز</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-success">{{ \App\Dci::where('updated_at', '>=', \Carbon\Carbon::today()->toDateString())->count() }}</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Orders-->
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
                                جدول مهندسی
                            </h3>
                            <a target="_blank" href="{{ route('edms.engineering') }}"><button type="button" class="btn btn-outline-success btn-sm ml-3" >  Engineering  Docs EDMS</button></a>
                        </div>
                        <div style="margin-top: 15px;" class="kt-portlet__head-toolbar">
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
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table style="font-family: iranyekan; width: 100%; direction: ltr!important;" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                                        <thead style="font-family: BYekan">
                                        <tr>
                                            <th style="width: 400px!important;" title="Field #1" data-field="1">Row</th>
                                            <th title="Field #2" data-field="2">Doc. No.</th>
                                            <th title="Field #2" data-field="2">Rev.</th>
                                            <th title="Field #3" data-field="3">Title</th>
                                            <th title="Field #4" data-field="4">Owner Doc. No.</th>
                                            <th title="Field #5" data-field="5">Sub Phase</th>
                                            <th title="Field #7" data-field="7">POI</th>
                                            <th title="Field #8" data-field="8">  Owner's Action </th>
                                            <th title="Field #10" data-field="10">Dept.</th>
                                            <th title="Field #11" data-field="11">Ext. Trans. No </th>
                                            <th title="Field #12" data-field="12">Ext. Trans. Issued Date</th>
                                            <th title="Field #12" data-field="13">Employer External Comments Date</th>
                                            <th title="Field #12" data-field="14">Employer External Approval Date</th>
                                            <th title="Field #12" data-field="15">Replied By Employer</th>
                                            <th title="Field #12" data-field="16">Employer Delay</th>
                                            <th title="Field #12" data-field="17">Viewed By</th>
                                            <th title="Field #12" data-field="18">Viewed Date</th>
                                            <th title="Field #12" data-field="19">WT.</th>
                                            <th title="Field #12" data-field="20">DOC COD</th>
                                            <th title="Field #12" data-field="21">START</th>
                                            <th title="Field #12" data-field="22">IFR / IFI</th>
                                            <th title="Field #12" data-field="23">IFP /IFE/ IFC OR IFE (W/H)</th>
                                            <th title="Field #12" data-field="24">IFC / IFE</th>
                                            <th title="Field #12" data-field="25">last Hard Copy Received Date</th>
                                            <th title="Field #12" data-field="26">Last Comment Date</th>
                                            <th title="Field #12" data-field="27">Last Comment Sheet Number</th>
                                            <th title="Field #12" data-field="28">Sent To Site Date</th>
                                            <th title="Field #12" data-field="29">Status</th>
                                            <th title="Field #12" data-field="30">ACTUAL %</th>
                                            <th title="Field #12" data-field="31">Last Update</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($dcis as $dci)
                                            <tr>
                                                <td style="font-family: BYekan">{{ $dci->id }}</td>
                                                <td style="font-family: BYekan"><a target="_blank" href="https://smc.pgapco.ir/edms/1-engineering/Documents/04-Detailed Eng/All Document/{{ $dci->DocNo .'-'. $dci->Rev }}.pdf">{{ $dci->DocNo }}</a></td>
                                                <td style="font-family: BYekan">{{ $dci->Rev }}</td>
                                                <td style="font-family: BYekan">{{ $dci->Title }}</td>
                                                <td style="font-family: BYekan">{{ $dci->OwnerDocNo }}</td>
                                                <td style="font-family: BYekan">{{ $dci->SubPhase }}</td>
                                                <td style="font-family: BYekan">{{ $dci->POI }}</td>
                                                <td style="font-family: BYekan">{{ $dci->OwnersAction }}</td>
                                                <td style="font-family: BYekan">{{ $dci->Dept }}</td>
                                                <td style="font-family: BYekan"><a target="_blank" href="https://smc.pgapco.ir/edms/1-engineering/Documents/06-TRANSMITTAL/{{$dci->ExtTransNo}}.pdf">{{ $dci->ExtTransNo }}</td></a></td>
                                                <td style="font-family: BYekan">{{ $dci->ExtTransIssuedDate }}</td>
                                                <td style="font-family: BYekan">{{ $dci->EmployerExternalCommentsDate }}</td>
                                                <td style="font-family: BYekan">{{ $dci->EmployerExternalApprovalDate }}</td>
                                                <td style="font-family: BYekan">{{ $dci->RepliedByEmployer }}</td>
                                                <td style="font-family: BYekan">{{ $dci->EmployerDelay }}</td>
                                                <td style="font-family: BYekan">{{ $dci->ViewedBy }}</td>
                                                <td style="font-family: BYekan">{{ $dci->ViewedDate }}</td>
                                                <td style="font-family: BYekan">{{ $dci->WT }}</td>
                                                <td style="font-family: BYekan">{{ $dci->DOCCOD }}</td>
                                                <td style="font-family: BYekan">{{ $dci->START }}</td>
                                                <td style="font-family: BYekan">{{ $dci->IFRIFI }}</td>
                                                <td style="font-family: BYekan">{{ $dci->IFPIFEIFCORIFE }}</td>
                                                <td style="font-family: BYekan">{{ $dci->IFCIFE }}</td>
                                                <td style="font-family: BYekan">{{ $dci->lastHardCopyReceivedDate }}</td>
                                                <td style="font-family: BYekan">{{ $dci->LastCommentDate }}</td>
                                                <td style="font-family: BYekan"><a target="_blank" href="https://smc.pgapco.ir/edms/1-engineering/Documents/07-Comment Sheet/{{$dci->LastCommentSheetNumber}}.pdf">{{ $dci->LastCommentSheetNumber }}</td></a>
                                                <td style="font-family: BYekan">{{ $dci->SentToSiteDate }}</td>
                                                <td style="font-family: BYekan">{{ $dci->Status }}</td>
                                                <td style="font-family: BYekan">{{ $dci->ACTUAL }}</td>
                                                <td style="font-family: BYekan">{{ $dci->updated_at }}</td>

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









            }
        };



        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );


    </script>
    <!--end::Page Scripts -->

@stop
