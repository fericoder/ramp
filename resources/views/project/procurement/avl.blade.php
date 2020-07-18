@extends('layouts.master', ['title' => 'پروژه -> خرید | AVL'])

@section('headerScripts')
    <style>
        td, th{
            vertical-align: middle!important;
            font-family: iranyekan;
        }
        .table td{
            padding: 0rem!important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow, .select2-container--default .select2-selection--multiple .select2-selection__arrow{
            font-family: "LineAwesome"!important;
        }

        .form-control{
            display: inherit!important;
        }
        .select2-selection__rendered{
            direction: rtl;
            font-family: byekan!important;
        }
        lable{
            direction: rtl!important;
        }
        input{
            height: 30px!important;
            margin: 5px!important;
        }
        .kt-widget1 .kt-widget1__item .kt-widget1__number{
            font-size: 2.4rem!important;
        }
    </style>






@stop


@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">خرید </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">AVL</span>
            </div>
            <span style="padding:10px" class="badge badge-primary iranyekan ">تاریخ آخرین بروزرسانی گزارش: </span>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">



        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Approved Vendor List (AVL)
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

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th title="Field #1" data-field="name">ردیف</th>
                                <th title="Field #1" data-field="name">لیست</th>
                                <th style="width: 100px" title="Field #2" data-field="name">آماده شده توسط</th>
                                <th style="width: 50px" title="Field #3" data-field="family">ویرایش</th>
                                <th title="Field #4" data-field="nameFamilyEn">دسیپلین</th>
                                <th title="Field #5" data-field="mobile">دسیپلین ۱</th>
                                <th title="Field #6" data-field="tel">دسیپلین ۲</th>
                                <th title="Field #7" data-field="email">دسیپلین ۳ </th>
                                <th title="Field #8" data-field="address">دسیپلین ۴ </th>
                                <th title="Field #8" data-field="address">نام شرکت</th>
                                <th title="Field #8" data-field="address">کشور </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($avls as $avl)
                                <tr>
                                    <td>{{ $avl->id }}</td>
                                    <td>{{ $avl->owner }}</td>
                                    <td>{{ $avl->preparedBy }}</td>
                                    <td>{{ $avl->rev }}</td>
                                    <td>{{ $avl->discipline }}</td>
                                    <td>{{ $avl->discipline1 }}</td>
                                    <td>{{ $avl->discipline2 }}</td>
                                    <td>{{ $avl->discipline3 }}</td>
                                    <td>{{ $avl->discipline4 }}</td>
                                    <td>{{ $avl->companyName }}</td>
                                    <td>{{ $avl->origin }}</td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>







    </div>
    <!-- end:: Content -->

@stop


@section('footerScripts')
    <link rel="stylesheet" href="/css/persian-datepicker.min.css"/>
    <script src="/js/persian-date.min.js"></script>
    <script src="/js/persian-datepicker.min.js"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <!--begin::Page Scripts -->
    <script>

        $("#show").click(function () {
            $("#edu").toggle('slow');
        });


        $(document).ready(function() {
            $(".qabzDate").pDatepicker();
        });






    </script>
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

                var b;
                b = $("#m_table_3").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), b.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), b.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), b.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), b.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), b.button(4).trigger()
                        }
                    )

            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );

        $("#show").click(function () {
            $("#edu").toggle('slow');
        });

    </script>
    <!--end::Page Scripts -->
    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

@stop