@extends('layouts.master', ['title' => 'آب و هوا'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
    </style>




    <!--begin::Modal-->
















    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">وضعیت آب و هوا</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">وضعیت آب و هوای عسلویه در هفته آینده</small></h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <a class="weatherwidget-io" href="https://forecast7.com/en/27d4752d61/asaluyeh/" data-label_1="ASALUYEH" data-label_2="WEATHER" data-icons="Climacons Animated" data-theme="original" >ASALUYEH WEATHER</a>
                                <script>
                                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">وضعیت آب و هوای تهران در هفته آینده</small></h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <a class="weatherwidget-io" href="https://forecast7.com/en/35d6951d39/tehran/" data-label_1="TEHRAN" data-label_2="WEATHER" data-icons="Climacons Animated" data-theme="original" >TEHRAN WEATHER</a>
                                <script>
                                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">وضعیت آب و هوای شیراز در هفته آینده</small></h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget__files">
                            <div class="kt-widget__media mb-5">
                                <a class="weatherwidget-io" href="https://forecast7.com/en/29d5952d58/shiraz/" data-label_1="SHIRAZ" data-label_2="WEATHER" data-icons="Climacons Animated" data-theme="original" >SHIRAZ WEATHER</a>
                                <script>
                                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                                </script>
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
