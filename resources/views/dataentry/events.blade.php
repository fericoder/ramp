@extends('layouts.master', ['title' => 'رویداد های پروژه'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }

        .dataTables_scroll{
            direction: rtl!important;
        }

    </style>


    <link href="/assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />


    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="add">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modall">افزودن رویداد</h5>
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('Dataentry.event.store') }}" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>نوع:</label>
                                <div class="kt-input-icon">
                                    <select name="type" class="form-control" id="type">
                                        <option value="فعالیت انجام شده">فعالیت انجام شده</option>
                                        <option value="چالش پیش رو">چالش پیش رو</option>
                                        <option value="پیشنهاد">پیشنهاد</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="">بخش:</label>
                                <div class="kt-input-icon">
                                    <select name="section" class="form-control" id="section">
                                        <option value="مهندسی">مهندسی</option>
                                        <option value="کالا">کالا</option>
                                        <option value="ساختمان و نصب">ساختمان و نصب</option>
                                        <option value="پیش راه اندازی">پیش راه اندازی</option>
                                        <option value="راه انداری">راه انداری</option>
                                        <option value="پروژه">پروژه</option>
                                        <option value="سازمان">سازمان</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>متن:</label>
                                <div class="kt-input-icon">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-wide btn-elevate btn-elevate-air">افزودن</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                </form>
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

                <span class="kt-subheader__desc iranyekan">ورود اطلاعات رویداد های پروژه</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title borj-color">رویداد های پروژه</h3>
                            <button data-toggle="modal" data-target=" #add" style="margin-right: 20px;font-size: 13px" type="button" class="btn btn-success btn-wide btn-elevate btn-elevate-air">افزودن رویداد</button>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button  style="font-size: 14px;" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        @if(count($errors) > 0 )
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul class="p-0 m-0" style="list-style: none;">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif


                    <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%; ;" class="table table-striped table-bordered table-hover table-checkable display" id="m_table_2">
                            <thead style="font-family: BYekan">
                                <tr>
                                    <th>نوع</th>
                                    <th>بخش</th>
                                    <th>متن</th>
                                    <th>توسط</th>
                                    <th>حذف</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->type }}</td>
                                    <td>{{ $event->section }}</td>
                                    <td >{{ $event->description }}</td>
                                    <td>{{ $event->user->fName . ' ' . $event->user->lName }}</td>
                                    <td>
                                        @can('admin')
                                            <a href="{{ route('Dataentry.event.delete', ['id' => $event->id]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button" title="حذف رویداد "> <i style="color: darkred" class="fa fa-times"></i> </a>
                                        @endcan
                                    </td>
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
    </div>
    </div>

@stop


@section('footerScripts')

    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="/assets/js/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>
    <script>



        var DatatablesExtensionButtons = {
            init: function () {




                // start data table m_table_2
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


@stop