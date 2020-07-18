@extends('layouts.master', ['title' => 'مدیریت سیستم -> ویرایش کاربر'])

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



    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">مدیریت سیستم </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">ویرایش کاربر</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-xl-12">

                <div style="display: none;color: #155724;background-color: #d4edda; border-color: #c3e6cb;" id="edu" class="alert alert-success" role="alert">
                    <h4 class="alert-heading">پنل ویرایش کاربر</h4><br>
                    {{--<p class="mb-3">درصورت نیاز، شما میتوانید ویدیو آموزشی این صفحه رو مشاهده نمایید.</p>--}}
                </div>



                @if ($errors->any())
                    <div style="background-color: #e47474" class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif





                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                ویرایش کاربر کد 
                            </h3>
                            <button id="show" style="margin-right: 20px;" type="button" class="btn btn-sm btn-outline-success">مشاهده آموزش این بخش</button>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">


                        </div>
                    </div>

                    <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @csrf
                            <input name="_method" value="PUT" type="hidden">
                            <input type="hidden" value="{{$user->id}}" hidden name="id" id="id">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td><label for="message-text" class="form-control-label">نام:</label><span style="color: red; font-size: 20px">*</span></td>
                                    <td><input name="fName" value="{{ old('fName', $user->fName) }}" style="width: 200px" type="text" class="form-control"></input></td>
                                </tr>
                                <tr>
                                    <td><label for="message-text" class="form-control-label">نام خانوادگی:</label><span style="color: red; font-size: 20px">*</span></td>
                                    <td><input name="lName" value="{{ old('lName', $user->lName) }}" style="width: 200px" type="text" class="form-control"></input></td>
                                </tr>
                                <tr>
                                    <td><label for="message-text" class="form-control-label">شماره موبایل:</label><span style="color: red; font-size: 20px">*</span></td>
                                    <td><input name="mobile" value="{{ old('mobile', $user->mobile) }}" style="width: 200px; text-align: left;" type="text" class="form-control"></input></td>
                                </tr>
                                <tr>
                                    <td><label for="message-text" class="form-control-label">سمت سازمانی:</label><span style="color: red; font-size: 20px">*</span></td>
                                    <td><input name="position" value="{{ old('position', $user->position) }}" style="width: 200px;" type="text" class="form-control"></input></td>
                                </tr>
                                <tr>
                                    <td><label for="message-text" class="form-control-label">آدرس ایمیل:</label><span style="color: red; font-size: 20px">*</span></td>
                                    <td><input name="email" value="{{ old('email', $user->email) }}" style="width: 200px; text-align: left;" type="text" class="form-control"></input></td>
                                </tr>
                                <tr>
                                    <td><label for="message-text" class="form-control-label">رمز عبور:</label><span style="color: red; font-size: 20px">*</span></td>
                                    <td><input name="password" style="width: 200px; text-align: left;" type="password" class="form-control"></input></td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="modal-footer justify-content-between">
                                <a href="{{ route('customers.index') }}"><button type="button" class="btn btn-danger" data-dismiss="modal">انصراف و بازگشت به لیست</button></a>
                                <button type="submit" class="btn btn-success">ثبت ویرایش کاربر</button>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end:: Content -->

@stop


@section('footerScripts')



    <!--begin::Page Scripts -->
    <script>


        $("#show").click(function () {
            $("#edu").toggle('slow');
        });

    </script>
    <!--end::Page Scripts -->

@stop