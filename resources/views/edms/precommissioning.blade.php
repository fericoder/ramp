@extends('layouts.master', ['title' => 'EDMS -> Precommissioning'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
    </style>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">EDMS -> Precommissioning</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">


        <div class="row">
            <div class="col">
                <div class="alert alert-light alert-elevate fade show" role="alert">
                    <div class="alert-icon"><i class="flaticon-info kt-font-brand"></i></div>
                    <div class="alert-text">
                        در این قسمت اطلاعات و داکیومنت های Precommissioningineering نرم افزار EDMS قابل مشاهده میباشد. شایان ذکر است بروزرسانی این سیستم از طریق پنل مدیریت و مطابق با سطوح دسترسی تعریف شده قابل انجام است.
                    </div>
                </div>
            </div>
        </div>


        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-lg">

                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">تعداد داکیومنت های مهندسی</h4>
                                    <span class="kt-widget24__desc">مجموع داکیومنت های مهندسی</span>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">
					        NUM
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
                                    <h4 class="kt-widget24__title">تعداد داکیومنت ها</h4>
                                    <span class="kt-widget24__desc">مجموع داکیومنت های مهندسی</span>
                                </div>

                                <span class="kt-widget24__stats kt-font-warning">NUM</span>
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
                                    <h4 class="kt-widget24__title">تعداد داکیومنت های مهندسی</h4>
                                    <span class="kt-widget24__desc">مجموع داکیومنت ها</span>
                                </div>

                                <span class="kt-widget24__stats kt-font-success">NUM</span>
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



        <div class="row" style="height: 900px;">

            <iframe style="width: 100%; height: 600px;" src="/edms/4-precommissioning/index.html" frameborder="0"></iframe>

        </div>




    </div>
    <!-- end:: Content -->
    </div>
    </div>

@stop
