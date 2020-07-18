@extends('layouts.master', ['title' => 'پروژه -> مهندسی خرید'])

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

                <span class="kt-subheader__desc iranyekan">مهندسی خرید</span>
            </div>
            <span  class="badge badge-primary reportDate">  آخرین بروزرسانی:  {{ jdate($vpis->first()->created_at)->format('Y/m/d') }}</span>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-lg">

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">تعداد کل مدارک</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">
					        {{ $vpis->count() }}
					    </span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::Total Profit-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">تعداد سازندگان فعال</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-warning">{{ $vpis->unique('VendorName')->count('pid') }}</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Feedbacks-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">مدارک صادر شده</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-success">{{ $vpis->where('IssuedByVendor', 'Yes')->count() }}</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Orders-->
                    </div>



                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">مدارک دارای تاخیر</h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-danger">NUM</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                                جدول مهندسی خرید
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


                                <center style="margin-bottom: 50px; display: none">
                                    <form style="display: inline" action="{{ route('vpis.index') }}">
                                        <label for="">شماره سند را وارد نمایید:</label>
                                        <select style="width: 200px!important; display: inline  " class="form-control kt-select2"
                                                id="kt_select2_8" name="no">
                                            @foreach ($vpis->unique('RequisitionNo') as $vpi)
                                                <option
                                                        @if(isset($vpiNumber))
                                                        {{ $vpiNumber->id == $vpi->id ? 'selected' : ''  }}
                                                        @endif
                                                        value="{{ $vpi->RequisitionNo }}">{{ $vpi->RequisitionNo }}</option>
                                            @endforeach
                                        </select>
                                        <button style="font-family: BYekan!important;display: inline" class="btn btn-success" type="submit">جستجو</button>
                                    </form>
                                </center>



                                <div class="table-responsive">
                                    <table style="font-family: iranyekan; width: 100%; direction: ltr; " class="table table-striped table-bordered table-hover table-checkable display " id="m_table_2">
                                        <thead style="font-family: BYekan">
                                        <tr>
                                            <th title="Field #1" data-field="1">Doc. No.</th>
                                            <th title="Field #2" data-field="2">Rev.</th>
                                            <th title="Field #3" data-field="3">Title</th>
                                            <th title="Field #4" data-field="4">Requisition No.</th>
                                            <th title="Field #5" data-field="5">Vendor Name</th>
                                            <th title="Field #7" data-field="7">Plan Received Date</th>
                                            <th title="Field #8" data-field="8"> Vendor Upload Date</th>
                                            <th title="Field #10" data-field="10">Vendor Issued Date</th>
                                            <th title="Field #11" data-field="11">Issued By Vendor </th>
                                            <th title="Field #12" data-field="12">Vendor Delay</th>
                                            <th title="Field #12" data-field="12">PIDEC Comment Date(EDMS3)</th>
                                            <th title="Field #12" data-field="12">PIDEC No Comment Date(EDMS3)</th>
                                            <th title="Field #12" data-field="12">PIDEC No Comment Date</th>
                                            <th title="Field #12" data-field="12">PIDEC Minor Comment Date</th>
                                            <th title="Field #12" data-field="12">PIDEC Major Comment Date</th>
                                            <th title="Field #12" data-field="12">PIDEC Information Comment Date</th>
                                            <th title="Field #12" data-field="12">PIDEC Reject Comment Date</th>
                                            <th title="Field #12" data-field="12">PIDEC RE Email Date</th>
                                            <th title="Field #12" data-field="12">PIDEC RTS Email Date</th>
                                            <th title="Field #12" data-field="12">Replied By PIDEC</th>
                                            <th title="Field #12" data-field="12">Originator Delay</th>
                                            <th title="Field #12" data-field="12">viewed By</th>
                                            <th title="Field #12" data-field="12">Viewd Date</th>
                                            <th title="Field #12" data-field="12">Employer External Comment Date</th>
                                            <th title="Field #12" data-field="12">Employer External Approval Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @if (isset($documents))
                                            @foreach ($documents as $document)
                                                <tr>
                                                    <td style="font-family: BYekan">{{ $document->DocNo }}</td>
                                                    <td style="font-family: BYekan">{{ $document->Rev }}</td>
                                                    <td style="font-family: BYekan">{{ $document->Title }}</td>
                                                    <td style="font-family: BYekan">{{ $document->RequisitionNo }}</td>
                                                    <td style="font-family: BYekan">{{ $document->VendorName }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PlanReceivedDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->VendorUploadDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->VendorIssuedDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->IssuedByVendor }}</td>
                                                    <td style="font-family: BYekan">{{ $document->VendorDelay }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECCommentDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECNoCommentDateEDMS3 }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECNoCommentDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECMinorCommentDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECMajorCommentDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECInformationCommentDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECRejectCommentDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECREEmailDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->PIDECRTSEmailDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->RepliedByPIDEC }}</td>
                                                    <td style="font-family: BYekan">{{ $document->OriginatorDelay }}</td>
                                                    <td style="font-family: BYekan">{{ $document->viewedBy }}</td>
                                                    <td style="font-family: BYekan">{{ $document->ViewdDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->EmployerExternalCommentDate }}</td>
                                                    <td style="font-family: BYekan">{{ $document->EmployerExternalApprovalDate }}</td>
                                                </tr>
                                            @endforeach


                                        @endif



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
                    "searching": true,
                    scrollY: "50vh", scrollX: true,
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('datatables.vpis') !!}',
                    columns: [
                        { data: 'DocNo', name: 'DocNo' },
                        { data: 'Rev', name: 'Rev' },
                        { data: 'Title', name: 'Title' },
                        { data: 'RequisitionNo', name: 'RequisitionNo' },
                        { data: 'VendorName', name: 'VendorName' },
                        { data: 'PlanReceivedDate', name: 'PlanReceivedDate' },
                        { data: 'VendorUploadDate', name: 'VendorUploadDate' },
                        { data: 'VendorIssuedDate', name: 'VendorIssuedDate' },
                        { data: 'IssuedByVendor', name: 'IssuedByVendor' },
                        { data: 'VendorDelay', name: 'VendorDelay' },
                        { data: 'PIDECCommentDate', name: 'PIDECCommentDate' },
                        { data: 'PIDECNoCommentDateEDMS3', name: 'PIDECNoCommentDateEDMS3' },
                        { data: 'PIDECNoCommentDate', name: 'PIDECNoCommentDate' },
                        { data: 'PIDECMinorCommentDate', name: 'PIDECMinorCommentDate' },
                        { data: 'PIDECMajorCommentDate', name: 'PIDECMajorCommentDate' },
                        { data: 'PIDECInformationCommentDate', name: 'PIDECInformationCommentDate' },
                        { data: 'PIDECRejectCommentDate', name: 'PIDECRejectCommentDate' },
                        { data: 'PIDECREEmailDate', name: 'PIDECREEmailDate' },
                        { data: 'PIDECRTSEmailDate', name: 'PIDECRTSEmailDate' },
                        { data: 'RepliedByPIDEC', name: 'RepliedByPIDEC' },
                        { data: 'OriginatorDelay', name: 'OriginatorDelay' },
                        { data: 'viewedBy', name: 'viewedBy' },
                        { data: 'ViewdDate', name: 'ViewdDate' },
                        { data: 'EmployerExternalCommentDate', name: 'EmployerExternalCommentDate' },
                        { data: 'EmployerExternalApprovalDate', name: 'EmployerExternalApprovalDate' },
                    ],


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
    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

@stop
