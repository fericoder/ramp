@extends('layouts.master', ['title' => 'بارگزاری فایل مهندسی خرید'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
        .select2-selection__rendered{
            direction: ltr!important;
        }

        .kt-widget1 .kt-widget1__item .kt-widget1__info .kt-widget1__title{
            font-weight: 800!important;
        }

        td{
            font-size: 16px;
            text-align: center;
            vertical-align: middle;
        }
    </style>


    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">بارگزاری فایل مهندسی خرید</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">


        <div class="row">
            <div class="col-md-12">


                <div class="kt-portlet__body">
                    <!--begin::Accordion-->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                مهندسی خرید
                            </div>
                        </div>
                        <div class="card-body">


                            @if ($errors->any())
                                <div style="background-color: #d04949" class="alert alert-danger m-4">
                                    <ul >
                                        <p>جهت بروزرسانی، موارد و خطاهای زیر را رفع کرده و مجدد فرم را ارسال نمایید: </p><br>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif



                            <form action="{{ route('vpis.store') }}" method="POST" enctype="multipart/form-data" class="kt-form kt-form--label-right">
                                <div style="padding-left: 1%; padding-right: 1%;" class="kt-portlet__body">
                                    @csrf

                                    <div style=";color: #155724;background-color: #d4edda; border-color: #c3e6cb;" id="edu" class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">نکات مهم</h4>

                                        <ul style="margin-top: 50px;margin-right: -100px;">
                                            <li style="padding: 5px">سطر و ستون حاشیه فایل دانلود شده از EDMS پیدک قلا از بارگزاری حذف گردد</li>
                                            <li style="padding: 5px">نوع فیلد های تاریخ باید Short Date وارد شود </li>
                                            <li style="padding: 5px">فرمت فایل میبایست XLSX باشد </li>
                                            <a href="/dataEntry/examples/vpis.xlsx"><li style="padding: 15px">دریافت نمونه فایل </li></a>
                                        </ul>

                                    </div>

                                    <div style="direction: rtl" class="table-responsive">
                                        <table class="table table-striped table-hover table-condensed table-bordered">
                                            <tbody>

                                            <tr>
                                                <td>انتخاب فایل مهندسی خرید</td>
                                                <td><input style="width: 200px" type="file" name="vpis" value="{{ old('vpis') }}" class="form-control"></td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>



                                    <div class="text-center mt-4 ">
                                        <button  type="submit" class="btn btn-success" >بارگزاری </button>
                                    </div>


                                </div>
                            </form>

                        </div>
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


    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>


@stop