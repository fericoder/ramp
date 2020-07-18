@extends('layouts.master', ['title' => 'ارتباطات -> ویدیوکنفرانس'])

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

                <h3 class="kt-subheader__title">ارتباطات </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">ویدیو کنفرانس</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">




        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                سیستم ویدیو کنفرانس آپادانا
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <iframe width="600px" src="https://whereby.com/apadanapm" frameborder="0"></iframe>
                    </div>

                </div>
            </div>
        </div>






    </div>


    <!-- end:: Content -->

@stop


@section('footerScripts')




@stop
