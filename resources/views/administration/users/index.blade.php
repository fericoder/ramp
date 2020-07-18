@extends('layouts.master', ['title' => 'مدیریت سیستم -> کاربران'])

@section('headerScripts')
    <link href="/assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css"/>

    <style>
        a, span {
            font-family: byekan !important;
        }
        .dataTables_info{
            font-family: BYekan;
        }
        select{
            font-family: BYekan;
        }
        td{
            vertical-align: middle!important;
        }
    </style>
@stop


@section('content')


    <!--begin::Modal-->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">پنل افزودن کاربر</h5>
                    <button style="font-family: LineAwesome!important;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">


                    @if ($errors->any())
                        <div style="background-color: #e47474" class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('users.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td><label for="message-text" class="form-control-label">نام:</label><span style="color: red; font-size: 20px">*</span></td>
                                <td><input name="fName" value="{{ old('fName') }}" style="width: 200px" type="text" class="form-control"></input></td>
                            </tr>
                            <tr>
                                <td><label for="message-text" class="form-control-label">نام خانوادگی:</label><span style="color: red; font-size: 20px">*</span></td>
                                <td><input name="lName" value="{{ old('lName') }}" style="width: 200px" type="text" class="form-control"></input></td>
                            </tr>
                            <tr>
                                <td><label for="message-text" class="form-control-label">شماره موبایل:</label><span style="color: red; font-size: 20px">*</span></td>
                                <td><input name="mobile" value="{{ old('mobile') }}" style="width: 200px; text-align: left;" type="text" class="form-control"></input></td>
                            </tr>
                            <tr>
                                <td><label for="message-text" class="form-control-label">سمت سازمانی:</label><span style="color: red; font-size: 20px">*</span></td>
                                <td><input name="position" value="{{ old('position') }}" style="width: 200px; text-align: right; direction: rtl" type="text" class="form-control"></input></td>
                            </tr>
                            <tr>
                                <td><label for="message-text" class="form-control-label">تصویر پروفایل:</label></td>
                                <td>
                                    <div class="custom-file">
                                        <input type="file" name="avatar" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">جهت بارگذاری فایل، کلیک کنید</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="message-text" class="form-control-label">آدرس ایمیل:</label><span style="color: red; font-size: 20px">*</span></td>
                                <td><input name="email" value="{{ old('email') }}" style="width: 200px; text-align: left;direction: ltr" type="text" class="form-control"></input></td>
                            </tr>
                            <tr>
                                <td><label for="message-text" class="form-control-label">رمز عبور:</label><span style="color: red; font-size: 20px">*</span></td>
                                <td><input name="password" value="{{ old('password') }}" style="width: 200px; text-align: left;;direction: ltr" type="password" class="form-control"></input></td>
                            </tr>
                            </tbody>
                        </table>


                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">انصراف</button>
                            <button type="submit" class="btn btn-success">افزودن کاربر</button>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!--end::Modal-->






    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">مدیریت </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">کاربران</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-xl-12">

                <div style="display: none;color: #155724;background-color: #d4edda; border-color: #c3e6cb;" id="edu" class="alert alert-success" role="alert">
                    <h4 class="alert-heading">پنل افزودن کاربر</h4><br>
                    {{--<p class="mb-3">درصورت نیاز، شما میتوانید ویدیو آموزشی این صفحه رو مشاهده نمایید.</p>--}}
                </div>


                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                لیست کاربران
                            </h3>
                            <button id="show" style="margin-right: 20px;" type="button" class="btn btn-sm btn-outline-success">مشاهده آموزش این بخش</button>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <button style="margin-left: 20px;" type="button" data-toggle="modal" data-target="#add" class="btn btn-sm btn-success">+ افزودن کاربر جدید</button>

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button style="display: none" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <table style="font-family: iranyekan; width: 100%" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th title="Field #1" data-field="fName">نام</th>
                                <th title="Field #2" data-field="lName">نام خانوادگی</th>
                                <th title="Field #4" data-field="email">ایمیل</th>
                                <th title="Field #5" data-field="mobile">شماره موبایل</th>
                                <th title="Field #6" data-field="position">سمت</th>
                                <th title="Field #7" data-field="edit">ویرایش و حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->fName }}</td>
                                    <td>{{ $user->lName }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td style="font-family: BYekan">{{ $user->mobile }}</td>
                                    <td>{{ $user->position }}</td>
                                    <td>
                                        <a href=""
                                           data-id="{{$user->id}}"
                                           class="kt-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill button"
                                           title="حذف کاربر "> <i style="color: darkred" class="la la-trash"></i> </a>

                                        <a href="{{ route('users.edit', ['id' => $user->id] ) }}"
                                           class="kt-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                           title="ویرایش کاربر "> <i style="color: green" class="la la-edit"></i> </a>
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
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <script>
        $(document).on('click', '.button', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                    title: "آیا مطمئن هستید؟",
                    type: "error",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "بله",
                    cancelButtonText: "خیر",
                    showCancelButton: true,
                },
                function () {
                    $.ajax({
                        type: "POST",
                        url: "{{url('/administration/users/delete')}}",
                        data: {id: id},
                        success: function (data) {
                            var url = document.location.origin + "/administration/users";
                            location.href = url;
                        }
                    });
                });
        });


        //datatables


    </script>

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

        $("#show").click(function () {
            $("#edu").toggle('slow');
        });

    </script>
    <!--end::Page Scripts -->
    @if ($errors->any())
        <script>
            $(window).on('load', function() {
                $('#add').modal('show');
            });
        </script>
    @endif

@stop