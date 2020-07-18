@extends('layouts.master', ['title' => 'مدیریت مناقصات'])
@section('content')

    <style>
        .dataTables_scroll{
            direction: rtl!important;
        }
    </style>
    <!--  Start Add Task PopUp -->
    <div class="modal fade text-left" id="addTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div   class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">افزودن مناقصه</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div style="font-family:Byekan; direction: rtl" class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form  style="vertical-align:center;text-align:center" method="post" action="{{ route('tdl.store') }}" class="form form-horizontal form-bordered striped-rows">
                        @csrf
                        <div class="form-body">


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">نام فعالیت <sup style="color: red; font-size: 18px" >*</sup> </label>
                                <div class="col-md-9">
                                    <input type="text" id="name"   class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="description">توضیحات <sup style="color: red; font-size: 18px" >*</sup> </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" rows="3" cols="30"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="assignedTo">متولی انجام <sup style="color: red; font-size: 18px" >*</sup> </label>
                                <div class="col-md-9">

                                    <select  id="selectize-state" name="assignedTo" class="selectize-event required form-control">
                                        <option class="required" value="">انتخاب متولی</option>
                                            {{--<option value="{{ $user->id }}">{{ $user->fName . ' ' . $user->lName }}</option>--}}
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="priority">اهمیت <sup style="color: red; font-size: 18px" >*</sup> </label>
                                <div class="col-md-9">
                                    <select class="form-control" name="priority" >
                                        <option class="form-control" value="کم">کم</option>
                                        <option class="form-control" selected value="متوسط">متوسط</option>
                                        <option class="form-control" value="بالا">بالا</option>
                                        <option class="form-control" value="بحرانی">بحرانی</option>
                                    </select>



                                </div>
                            </div>


                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check-square-o"></i> افزودن فعالیت
                            </button>


                            <button type="button" class="btn btn-warning mr-1">
                                <i class="ft-x"></i> لغو
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!--  End Add Task PopUp -->





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

                <span class="kt-subheader__desc iranyekan">مدیریت -> محدوده و قراردادها -> مناقصات</span>
            </div>
            <span  class="badge badge-primary iranyekan reportDate">تاریخ آخرین بروزرسانی گزارش: {{ jdate($tenders->sortByDesc('updated_at')->first()->updated_at)->format('Y/m/d') }}</span>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">





        <div style="display: none" class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-lg">

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">كل </h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">
{{--					        {{ $tdlsAssignedToOther->count() }}--}}
					    </span>
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::Total Profit-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Feedbacks-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title"> بررسی نشده</h4>
                                </div>

                                {{--<span class="kt-widget24__stats kt-font-warning"> {{ $tdlsAssignedToOther->where('status', 'بررسی نشده')->count() }}</span>--}}
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Feedbacks-->
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title"> انجام شده</h4>
                                </div>

                                {{--<span class="kt-widget24__stats kt-font-success">{{ $tdlsAssignedToOther->where('status', 'انجام شده')->count() }}</span>--}}
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Orders-->
                    </div>



                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::New Orders-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title"> درحال انجام</h4>
                                </div>

                                {{--<span class="kt-widget24__stats kt-font-danger">{{ $tdlsAssignedToOther->where('status', 'درحال انجام')->count() }}</span>--}}
                            </div>

                            <div class="progress progress--sm">
                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>


                        </div>
                        <!--end::New Orders-->
                    </div>




                </div>
            </div>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                لیست مناقصات
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <table style="font-family: iranyekan; width: 100%; direction: rtl!important; " class="table table-striped table-bordered table-hover table-checkable display " id="m_table_3">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>ردیف</th>
                                <th>موضوع مناقصه</th>
                                <th>تاریخ شروع فرآیند برونسپاری</th>
                                <th>مبلغ برآورد ارزی</th>
                                <th>مبلغ برآورد ريالی</th>
                                <th>مدت اجرا- ماه</th>
                                <th>مبلغ تضمین </th>
                                <th>شرکت های دعوت شده</th>
                                <th>تاریخ دعوتنامه</th>
                                <th>تعداد پیشنهادات دریافت شده</th>
                                <th>تاریخ بازگشایی</th>
                                <th>شرکت برنده</th>
                                <th>مبلغ برنده ارزی</th>
                                <th>مبلغ برنده ريالی</th>
                                <th>تاریخ عقد قرارداد</th>
                                <th>شماره قرارداد</th>
                                <th>توضیحات</th>
                                <th>آخرین بروزرسانی</th>
                                <th>بروزرسانی</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tenders as $tender)
                                <tr {{ $tender->sherkatBarande != null  ? 'style=background-color:#c8f7c561' : ''}}>
                                    <td>{{ $tender->radif }}</td>
                                    <td>{{ $tender->mozoo }}</td>
                                    <td>{{ $tender->tarikhShorooBoroonsepari }}</td>
                                    <td>{{ $tender->arzi }}</td>
                                    <td>{{ $tender->riali }}</td>
                                    <td>{{ $tender->moddat }}</td>
                                    <td>{{ $tender->mablaghTazmin }}</td>
                                    <td>{{ $tender->sherkatHa }}</td>
                                    <td>{{ $tender->tarikhDavat }}</td>
                                    <td>{{ $tender->tedadPishnahadat }}</td>
                                    <td>{{ $tender->tarikhBazgoshaei }}</td>
                                    <td>{{ $tender->sherkatBarande }}</td>
                                    <td>{{ $tender->mablaghBarande }}</td>
                                    <td>{{ $tender->mablaghBarandeRiali }}</td>
                                    <td>{{ $tender->tarikhGharardad }}</td>
                                    <td>{{ $tender->shomareGHarardad }}</td>
                                    <td>{{ $tender->tozihat }}</td>
                                    <td style="font-family: BYekan!important; direction: ltr!important;">{{ jdate($tender->updated_at) }}</td>
                                    <td style="text-align:center;" > <a href="{{ route('tenders.edit', $tender->id) }}" ><i style="font-size: 18px;" class="fa fa-edit"></i></a>  </td>
                                </tr>
                            @endforeach
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

    <script type="text/javascript">




  </script>




    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <script>
        var DatatablesExtensionButtons = {
            init: function () {
                var t;
                t = $("#m_table_3").DataTable({

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



@endsection