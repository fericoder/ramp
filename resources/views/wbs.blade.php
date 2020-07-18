@extends('layouts.master', ['title' => 'ساختار شکست پروژه'])

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

                <h3 class="kt-subheader__title">ساختار شکست پروژه </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan"></span>
            </div>
            {{--<span  class="badge badge-primary reportDate">  آخرین بروزرسانی:  {{ jdate($vpis->first()->created_at)->format('Y/m/d') }}</span>--}}

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">



        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--tabs">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                ساختار شکست پروژه
                            </h3>
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
                        ajax: '{!! route('datatables.wbs') !!}',
                        columns: [
                            { data: 'ActivityID', name: 'ActivityID' },
                            { data: 'status', name: 'status' },
                            { data: 'code', name: 'code' },
                            { data: 'name', name: 'name' },
                            { data: 'wf', name: 'wf' },
                            { data: 'budgeted', name: 'budgeted' },
                            { data: 'planStart', name: 'planStart' },
                            { data: 'planFinish', name: 'planFinish' },
                            { data: 'planDeviation', name: 'planDeviation' },
                            { data: 'actStart', name: 'actStart' },
                            { data: 'actFinish', name: 'actFinish' },
                            { data: 'actDeviation', name: 'actDeviation' },
                            { data: 'resources', name: 'resources' },
                            { data: 'progress', name: 'progress' },
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
