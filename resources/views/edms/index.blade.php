@extends('layouts.master', ['title' => 'EDMS'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
        .box{
            font-size: 24px!important;
            height: 108px!important;
            padding-top: 38px!important;
        }
        h3{
            padding-top: 37px;
        }
    </style>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">EDMS</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__media">
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JD
                                    </div>
                                </div>

                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="#" class="kt-widget__username mb-5">
                                            جهت ادامه، برروی قسمت مورد نظر کلیک نمایید.
                                        </a>

                                    </div>
                                </div>



                                <div style="direction: ltr" class="row">


                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.engineering') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Engineering </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.procurement') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Procurement </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.construction') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Construction </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.precommissioning') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Precommissioning </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.startup') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Startup </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.operation') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Operation </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.time') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Time Management </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.cost') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Cost Management </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>



                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.resource') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Resource Management </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.qaqc') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>QA/QC Management</h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.scope') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Scope & Contracts</h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.hse') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>HSE Management</h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.stakeholder') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Stakeholder Management</h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.risk') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Risk Management Doc</h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.public') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Public </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <a style="cursor: pointer;" href="{{ route('edms.km') }}">
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">
                                                    <div class="kt-widget__files">
                                                        <div class="kt-widget__media mb-5">
                                                            <h3>Knowledge Management </h3>
                                                        </div>
                                                        {{--<center><img class="kt-widget__img kt-hidden-" width="50px" src="/assets/media/index/Gallery.png" alt="image"></center>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>







                                </div>
                                <div style="display: none" class="row">

                                    <div class="col-xl-6">




                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__body">
                                                <!--begin::Widget -->
                                                <div class="kt-widget kt-widget--user-profile-4">

                                                    <div style="direction: ltr" class="kt-widget__body text-center ">

                                                        <a href="{{ route('edms.resource') }}" class="kt-widget__item kt-widget__item--active box">Resource Management Doc .</a>
                                                        <a href="{{ route('edms.qaqc') }}" class="kt-widget__item kt-widget__item--active box">QA/QC Management Doc .</a>
                                                        <a href="{{ route('edms.scope') }}" class="kt-widget__item kt-widget__item--active box">Scope & contracts Management Doc.</a>
                                                        <a href="{{ route('edms.hse') }}" class="kt-widget__item kt-widget__item--active box">HSE Management Doc.</a>
                                                        <a href="{{ route('edms.stakeholder') }}" class="kt-widget__item kt-widget__item--active box">Stakeholder Management Doc.</a>
                                                        <a href="{{ route('edms.risk') }}" class="kt-widget__item kt-widget__item--active box">Risk Management Doc.</a>
                                                        <a href="{{ route('edms.public') }}" class="kt-widget__item kt-widget__item--active box">Public Doc.</a>
                                                        <a href="{{ route('edms.km') }}" class="kt-widget__item kt-widget__item--active box">Knowledge Management Doc.</a>
                                                    </div>
                                                </div>
                                                <!--end::Widget -->
                                            </div>
                                        </div>





                                    </div>

                                    <div class="col-xl-6">
                                        <!--begin:: Widgets/Applications/User/Profile4-->
                                        <div class="kt-portlet kt-portlet--height-fluid">
                                            <div class="kt-portlet__body">
                                                <!--begin::Widget -->
                                                <div class="kt-widget kt-widget--user-profile-4">

                                                    <div style="direction: ltr" class="kt-widget__body text-center ">

                                                        <a href="{{ route('edms.engineering') }}" class="kt-widget__item kt-widget__item--active box">Engineering Doc.</a>
                                                        <a href="{{ route('edms.procurement') }}" class="kt-widget__item kt-widget__item--active box" >Procurement Doc.</a>
                                                        <a href="{{ route('edms.construction') }}" class="kt-widget__item kt-widget__item--active box">Construction Doc.</a>
                                                        <a href="{{ route('edms.precommissioning') }}" class="kt-widget__item kt-widget__item--active box">Precommissioning Doc.</a>
                                                        <a href="{{ route('edms.startup') }}" class="kt-widget__item kt-widget__item--active box">Startup Doc.</a>
                                                        <a href="{{ route('edms.operation') }}" class="kt-widget__item kt-widget__item--active box">Operation Doc.</a>
                                                        <a href="{{ route('edms.time') }}" class="kt-widget__item kt-widget__item--active box">Time Management Doc.</a>
                                                        <a href="{{ route('edms.cost') }}" class="kt-widget__item kt-widget__item--active box">Cost Management Doc.</a>


                                                    </div>
                                                </div>
                                                <!--end::Widget -->
                                            </div>
                                        </div>
                                        <!--end:: Widgets/Applications/User/Profile4-->
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
    </div>
    </div>

@stop
