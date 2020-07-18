@extends('layouts.master', ['title' => 'HSE'])
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

                <span class="kt-subheader__desc iranyekan">HSE</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">






        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div  class="row row-no-padding row-col-separator-lg">


                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        F.S Index
                                    </h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-danger"> 0</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Total Profit-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        LTIF
                                    </h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-success">0</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Total Profit-->
                    </div>


                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        TRIR
                                    </h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand"> 12,5</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Total Profit-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Feedbacks-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        FAR
                                    </h4>

                                </div>

                                <span class="kt-widget24__stats kt-font-warning">1349</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Feedbacks-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        MHWWF
                                    </h4>
                                </div>
                                <span class="kt-widget24__stats kt-font-danger">12,5</span>


                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Orders-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-2">
                        <!--begin::New Users-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">
                                        MWH
                                    </h4>

                                </div>

                                <span class="kt-widget24__stats kt-font-success">0</span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Users-->
                    </div>

                </div>
            </div>
        </div>



        <div class="row">
            <div class="kt-portlet kt-portlet--tabs">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            ACCIDENT REPORT Monthly
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-bold nav-tabs-line   nav-tabs-line-right nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_portlet_tab_1_1" role="tab">
                                    FAR
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_2" role="tab">
                                    TRIR
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_3" role="tab">
                                    LTIF
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_4" role="tab">
                                    F.S Index
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_portlet_tab_1_1">
                            <div style="height:400px" id="farChart"></div>
                        </div>
                        <div class="tab-pane" id="kt_portlet_tab_1_2">
                            <div style="height:400px" id="trirChart"></div>
                        </div>
                        <div class="tab-pane" id="kt_portlet_tab_1_3">
                            <div style="height:400px" id="ltifChart"></div>
                        </div>
                        <div class="tab-pane" id="kt_portlet_tab_1_4">
                            <div style="height:400px" id="fsChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                OPEN ANOMALIES TABLE
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <table style="font-family: iranyekan; width: 100%" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th title="Field #1" data-field="name">Number of Anomaly	</th>
                                <th title="Field #1" data-field="name">Description</th>
                                <th style="width: 100px" title="Field #2" data-field="name">Date of Issue	</th>
                                <th style="width: 50px" title="Field #3" data-field="family">Category</th>
                                <th title="Field #4" data-field="nameFamilyEn">Category Risk	</th>
                                <th title="Field #5" data-field="mobile">Dead Time	</th>
                                <th title="Field #6" data-field="tel">Completion Date	</th>
                                <th title="Field #7" data-field="email">Location </th>
                                <th title="Field #8" data-field="address">Status </th>
                                <th title="Field #8" data-field="address">Company</th>
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
    <!-- end:: Content -->
    </div>
    </div>

@stop

@section('footerScripts')
    <script src="/js/highcharts/highcharts.js"></script>
    <script src="/js/highcharts/highcharts-more.js"></script>
    <script src="/js/highcharts/data.js"></script>
    <script src="/js/highcharts/drilldown.js"></script>

    <script type="text/javascript">






        Highcharts.chart('farChart', {
            colors: ['#2ab4c0', '#f36a5a', '#5C9BD1', '#8877a9', '#2ab4c0'],


            title: {
                text: 'FAR Index in monthly basis'
            },

            subtitle: {
                text: 'Cut Of Date: June, 11, 2017'
            },
            xAxis: {
                categories: ['Aug, 2015', 'Sep, 2015', 'Oct, 2015', 'Nov, 2015', 'Dec, 2015', 'Jan, 2016',
                    'Feb, 2016', 'Mar, 2016', 'April, 2016', 'May, 2016', 'June, 2016', 'July, 2016', 'Aug, 2016', 'Sep, 2016', 'Oct, 2016','Nov 2016', 'Dec 2016', 'Jan, 2016', 'Feb, 2017', 'Mar, 2017', 'April, 2017', 'May, 2017',  'June, 2017', 'July, 2017',
                    'Aug, 2017','Sep, 2017','Aug, 2017','Oct, 2017','Dec, 2017']
            },

            yAxis: {
                title: {
                    text: ' '
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },


            series: [{
                name: 'Apadana',
                data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
            }, {
                name: 'Overall',
                data: [2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12,2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12,2.120 ,2.120 ]
            }, {
                name: 'Onshore',
                data: [1.60, 1.60, 1.60, 1.60, 1.60, 1.60, 1.60, 1.60,1.60, 1.60, 1.60, 1.60, 1.60, 1.60, 1.60, 1.60,1.60,1.60,1.60,1.60,1.60,1.60, 1.600,1.600 ]
            }, {
                name: 'Contractor',
                data: [2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20,2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20, 2.20,2.200 ,2.200 ]
            }]

        });








        Highcharts.chart('trirChart', {
            colors: ['#2ab4c0', '#f36a5a', '#5C9BD1', '#8877a9', '#2ab4c0'],

            title: {
                text: 'Safety index'
            },

            subtitle: {
                text: 'Cut Of Date: June, 11, 2017'
            },
            xAxis: {
                categories: [ 'Sep, 2015', 'Oct, 2015', 'Nov, 2015', 'Dec, 2015', 'Jan, 2016',
                    'Feb, 2016', 'Mar, 2016', 'April, 2016', 'May, 2016', 'June, 2016', 'July, 2016', 'Aug, 2016', 'Sep, 2016', 'Oct, 2016','Nov 2016', 'Dec 2016', 'Jan, 2016', 'Feb, 2017', 'Mar, 2017', 'April, 2017', 'May, 2017',  'June, 2017', 'July, 2017',
                    'Aug, 2017','Sep, 2017','Aug, 2017','Oct, 2017','Dec, 2017']
            },

            yAxis: {
                title: {
                    text: ' '
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },


            series: [{
                name: 'TRIR (Apadana)',
                data: [null,null,null,null,null,null,null,null,0.387,0.381,1.79,1.776,1.747,1.998,2.176,2.134,2.059,2.045,2.006,1.958,1.9605,2.2858,2.2109]
            }, {
                name: 'Contractor',
                data: [1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7,1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7, 1.7,1.7,1.7]
            }, {
                name: 'Onshore',
                data: [1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33,1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33, 1.33,1.33,1.33]
            }, {
                name: 'Overall',
                data: [1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54,1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54, 1.54,1.54,1.54]
            }, {
                name: 'Iran Norm',
                data: [10, 10, 10, 10, 10, 10, 10, 10,10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10,10,10]
            }]

        });











        Highcharts.chart('ltifChart', {
            colors: ['#2ab4c0', '#f36a5a', '#5C9BD1', '#8877a9', '#2ab4c0'],

            title: {
                text: 'F indexes'
            },

            subtitle: {
                text: 'Cut Of Date: June, 11, 2017'
            },
            xAxis: {
                categories: ['Aug, 2015', 'Sep, 2015', 'Oct, 2015', 'Nov, 2015', 'Dec, 2015', 'Jan, 2016',
                    'Feb, 2016', 'Mar, 2016', 'April, 2016', 'May, 2016', 'June, 2016', 'July, 2016', 'Aug, 2016', 'Sep, 2016', 'Oct, 2016','Nov 2016', 'Dec 2016', 'Jan, 2016', 'Feb, 2017', 'Mar, 2017', 'April, 2017', 'May, 2017',  'June, 2017', 'July, 2017',
                    'Aug, 2017','Sep, 2017','Aug, 2017','Oct, 2017','Dec, 2017']
            },

            yAxis: {
                title: {
                    text: ' '
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },


            series: [{
                name: 'LTIF (Apadana)',
                data: [0,0,0.0834,0.0829,0.0823,0.0818,0.0813,0.0808,0.0802,0.0777,0.0761,0.1505,0.1480,0.1456,0.2141,0.2106,0.2065,0.2025,0.1979,0.1942,0.1895,0.2451,0.2344,0.2268]
            }, {
                name: 'Overall',
                data: [0.360, 0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360,0.360]
            }, {
                name: 'Onshore',
                data: [0.290, 0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290,0.290]
            }, {
                name: 'Contractor',
                data: [0.390, 0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390,0.390]
            }, {
                name: 'Iran  Labor Office',
                data: [1, 1, 1, 1, 1, 1, 1, 1,1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,1,1,1]
            }]

        });











        Highcharts.chart('fsChart', {
            colors: ['#2ab4c0', '#f36a5a', '#5C9BD1', '#8877a9', '#2ab4c0'],

            title: {
                text: 'F.S Index'
            },

            subtitle: {
                text: 'Cut Of Date: June, 11, 2017'
            },
            xAxis: {
                categories: ['Aug, 2015', 'Sep, 2015', 'Oct, 2015', 'Nov, 2015', 'Dec, 2015', 'Jan, 2016',
                    'Feb, 2016', 'Mar, 2016', 'April, 2016', 'May, 2016', 'June, 2016', 'July, 2016', 'Aug, 2016', 'Sep, 2016', 'Oct, 2016','Nov 2016', 'Dec 2016', 'Jan, 2016', 'Feb, 2017', 'Mar, 2017', 'April, 2017', 'May, 2017',  'June, 2017', 'July, 2017',
                    'Aug, 2017','Sep, 2017','Aug, 2017','Oct, 2017','Dec, 2017']
            },

            yAxis: {
                title: {
                    text: ' '
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },


            series: [{
                name: 'LTIF',
                data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
            }, {
                name: 'LTIR',
                data: [2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12,2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12]
            }, {
                name: 'F *s/1000',
                data: [2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12,2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12]
            }, {
                name: 'Apadana F.S Index',
                data: [2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12,2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12, 2.12]
            },{
                name: 'Iran Norm',
                data: [0.10, 0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10]
            }]

        });





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
  </script>

@endsection