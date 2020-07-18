@extends('layouts.master', ['title' => 'مدیریت ریسک'])
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

                <span class="kt-subheader__desc iranyekan">مدیریت ریسک</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">



        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                گزارش مدیریت ریسک
                            </h3>
                            <a target="_blank" href="/reports/risk9810.xlsx" class="btn btn-label-success btn-bold btn-icon-h kt-margin-l-10">
                                دریافت گزارش سالیانه مدیریت ریسک
                            </a>
                        </div>


                    </div>
                    <div class="kt-portlet__body">
                        <div id="riskchart" style="height: 95%; min-width: 95%; max-width: 95%; margin: 0 auto"></div>
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
                                فرصتها و تهدیدات پروژه
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div id="treatchart" style="min-width: 1000px; height: 400px; margin: 0 auto"></div>
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
                                ریسک های پروژه
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <table style="font-family: iranyekan; width: 100%" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th title="Field #1" data-field="name">شماره</th>
                                <th title="Field #1" data-field="name">شرح / توصیف</th>
                                <th style="width: 100px" title="Field #2" data-field="name">علت</th>
                                <th style="width: 50px" title="Field #3" data-field="family">معلول</th>
                                <th title="Field #4" data-field="nameFamilyEn">حوزه ریسک</th>
                                <th title="Field #5" data-field="mobile">تاریخ آخرین بروز رسانی</th>
                                <th title="Field #6" data-field="tel">احتمال</th>
                                <th title="Field #7" data-field="email">تاثیر </th>
                                <th title="Field #8" data-field="address">امتیاز </th>
                                <th title="Field #8" data-field="address">استراتژی</th>
                                <th title="Field #8" data-field="address">واکنش </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>KRI-01</td>
                                    <td>مشكلات در تامين مالي پروژه</td>
                                    <td></td>
                                    <td></td>
                                    <td>مالی</td>
                                    <td>1398/03/31</td>
                                    <td>45%</td>
                                    <td>LOW</td>
                                    <td></td>
                                    <td></td>
                                    <td>بودجه توسط سهامداران تامین شده است</td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

@stop

@section('footerScripts')
    <script src="/js/highcharts/highcharts.js"></script>
    <script src="/js/highcharts/highcharts-more.js"></script>
    <script src="/js/highcharts/data.js"></script>
    <script src="/js/highcharts/drilldown.js"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <script type="text/javascript">
          $(function () {
      Highcharts.chart('riskchart', {



          chart: {
              type: 'bubble',
              plotBorderWidth: 1,
              zoomType: 'xy'
          },

          legend: {
              enabled: false
          },

          title: {
              text: ' '
          },

          subtitle: {
              text: ' '
          },

          xAxis: {
              gridLineWidth: 1,
              title: {
                  text: 'Impact'
              },
              labels: {
                  format: '{value}'
              },
              plotLines: [{
                  color: 'black',
                  dashStyle: 'dot',
                  width: 2,
                  value: 65,
                  label: {
                      rotation: 0,
                      y: 15,
                      style: {
                          fontStyle: 'italic'
                      },
                      text: ' '
                  },
                  zIndex: 3
              }]
          },

          yAxis: {
              startOnTick: false,
              endOnTick: false,
              title: {
                  text: 'Probability'
              },
              labels: {
                  format: '{value} '
              },
              maxPadding: 0.2,
              plotLines: [{
                  color: 'black',
                  dashStyle: 'dot',
                  width: 2,
                  value: 50,
                  label: {
                      align: 'right',
                      style: {
                          fontStyle: 'italic'
                      },
                      text: ' ',
                      x: -10
                  },
                  zIndex: 3
              }]
          },
          tooltip: {
              useHTML: true,
              headerFormat: '<table style="direction: rtl;" >',
              pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
              '<tr><th>تاثیر:</th><td>{point.x}</td></tr>' +
              '<tr><th>احتمال:</th><td>{point.y}</td></tr>' +
              '<tr style="direction: ltr" ><th>:امتیاز</th><td>{point.z}</td></tr>',
              footerFormat: '</table>',
              followPointer: true
          },
          plotOptions: {
              bubble: {
                  minSize: 30,
                  maxSize: 30
              },
              series: {
                  dataLabels: {
                      enabled: true,
                      format: '{point.name}'
                  }
              }
          },

          series: [{
              data: [




                  { color: '#FF5B48' ,x: 15, y: 45 , z: -45, name: '', country: 'مشكلات در تامين مالي پروژه'},
                  { color: '#FF5B48' ,x: 14, y: 35 , z: -70, name: '', country: 'ضعف سيستم بانكي كشور در بحث هاي بين المللي، اعتبارات اسنادي و غيره'},
                  { color: '#FF5B48' ,x: 8, y: 20 , z: -40, name: '', country: 'كمتر از حد پيش بيني كردن هزينه هاي عملياتي و بودجه'},
                  { color: '#FF5B48' ,x: 13, y: 30 , z: -90, name: '', country: 'وجود واحدهاي در دست ساخت توليدكننده محصول'},
                  { color: '#FF5B48' ,x: 26, y: 60 , z: -180, name: '', country: 'عدم پيشرفت مناسب سازندگان در طول اجراي پروژه'},
                  { color: '#FF5B48' ,x: 3, y: 10 , z: -10, name: '', country: 'وقوع حوادث در پروسه حمل و نقل'},
                  // { color: '#FF5B48' ,x: 20 y: 60 , z: 60, name: '', country: 'عدم دسترسی به موقع به سرویس های جانبی و خوراک در زمان مقرر'},
                  { color: '#FF5B48' ,x: 13, y: 40 , z: -40, name: '', country: 'دسترسی به سرویس های جانبی و خوراک، کمتر از مقدار موردانتظار'},

              ]
          }]

      });
  });


  $(function () {
      Highcharts.chart('treatchart', {
          chart: {
              type: 'column'
          },
          title: {
              text: ' '
          },
          xAxis: {
              lineWidth: 0,
              minorGridLineWidth: 0,
              lineColor: 'transparent',
              labels: {
              enabled: false
          },
          categories: [
                       'مشكلات در تامين مالي پروژه',
                       'ضعف سيستم بانكي كشور در بحث هاي بين المللي، اعتبارات اسنادي و غيره ',
                       'كمتر از حد پيش بيني كردن هزينه هاي عملياتي و بودجه',
                       'وجود واحدهاي در دست ساخت توليدكننده محصول',
                       'عدم پيشرفت مناسب سازندگان در طول اجراي پروژه',
                       'وقوع حوادث در پروسه حمل و نقل',
                       'عدم دسترسی به موقع به سرویس های جانبی و خوراک (در زمان مقرر)',
                       'كمتر از حد پيش بيني كردن هزينه هاي عملياتي و بودجه',
                       'دسترسی به سرویس های جانبی و خوراک، کمتر از مقدار موردانتظار',

          ]
          },
          credits: {
              enabled: false
          },
          series: [{
              name: 'Threats & Opportunities ',
              color: 'gray',
              data: [45, 70, 40, 90, 180,10,60,40]
          }]
      });
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