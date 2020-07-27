@extends('layouts.master', ['title' => 'مدیریت وظایف'])
@section('content')

    <style>

    </style>


    <!--  Start Add Task PopUp -->
    <div class="modal fade text-left" id="addTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div   class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">افزودن تسک</h4>
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

                    <form  style="vertical-align:center;text-align:center" method="post" action="{{ route('tdl.store') }}" enctype="multipart/form-data" class="form form-horizontal form-bordered striped-rows">
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

                                    <select class="form-control kt-select2" id="kt_select2_1" name="assignedTo">
                                        <option class="required" value="">انتخاب متولی</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->fName . ' ' . $user->lName }}</option>
                                        @endforeach
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

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="priority">مهلت انجام <sup style="color: red; font-size: 18px" >*</sup> </label>
                                <div class="col-md-9">
                                    <input type="text" class="qabzDate form-control" />
                                    <input type="hidden" name="date" class="observer" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="priority">بارگذاری فایل  </label>
                                <div class="col-md-9">
                                    <input type="file" id="attachment" class="form-control" name="attachment">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 label-control" for="name">کد فعالیت <sup style="color: red; font-size: 18px" >*</sup> </label>
                                <div class="col-md-9">
                                    <input  type="text" id="activityCode" disabled class="form-control" name="activityCode">
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

                <span class="kt-subheader__desc iranyekan">مدیریت وظایف</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">





        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-lg">

                    <div class="col-md-12 col-lg-6 col-xl-3">
                        <!--begin::Total Profit-->
                        <div class="kt-widget24">
                            <div class="kt-widget24__details">
                                <div class="kt-widget24__info">
                                    <h4 class="kt-widget24__title">کل تسک های شما </h4>
                                </div>

                                <span class="kt-widget24__stats kt-font-brand">
					        {{ $tdlsAssignedToThisUser->count() }}
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

                                <span class="kt-widget24__stats kt-font-warning"> {{ $tdlsAssignedToThisUser->where('status', 'بررسی نشده')->count() }}</span>
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

                                <span class="kt-widget24__stats kt-font-success">{{ $tdlsAssignedToThisUser->where('status', 'انجام شده')->count() }}</span>
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

                                <span class="kt-widget24__stats kt-font-danger">{{ $tdlsAssignedToThisUser->where('status', 'درحال انجام')->count() }}</span>
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


        @can('admin')
        <div class="row">
            <div class="col-md-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                نمودار وضعیت کلی تسک های پروژه
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div id="overal" style="min-width: 400px; max-width: 600px; height: 500px; margin: 0 auto"></div>
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
                                    نمودار پراکندگی کاری افراد سازمان
                                </h3>
                            </div>

                        </div>
                        <div class="kt-portlet__body">
                            <div id="persons" style="min-width: 600px; max-width: 700px; height: 500px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>
            </div>


        @endcan



        <div class="row">
            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                وضعیت تسک های محول شده به شما
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div id="assignedToYou" style="min-width: 400px; max-width: 600px; height: 500px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                وضعیت تسک های ایجاد شده توسط شما
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div id="assignedToOther" style="min-width: 400px; max-width: 600px; height: 500px; margin: 0 auto"></div>
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
                                لیست فعالیت های ارجاعی به شما
                            </h3>
                        </div>
                        <div style="" class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button style="" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print2">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy2">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel2">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv2">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <table style="font-family: iranyekan; width: 100%; direction: rtl!important" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>نام فعالیت</th>
                                <th>ایجاد کننده</th>
                                <th>اهمیت</th>
                                <th>آخرین وضعیت</th>
                                <th> ایجاد</th>
                                <th> مهلت</th>
                                <th> فایل ضمیمه</th>
                                <th> بروزرسانی</th>
                                <th>ویرایش</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tdlsAssignedToThisUser as $tdlAssignedToThisUser)
                                <tr
                                        @if ($tdlAssignedToThisUser->deadline > Carbon\Carbon::now()->subDays(2)->toDateString()  && $tdlAssignedToThisUser->status != 'انجام شده')
                                             style=background-color:#f5f6a961!important;
                                        @elseif(Carbon\Carbon::today()->toDateString() >= $tdlAssignedToThisUser->deadline && $tdlAssignedToThisUser->status != 'انجام شده')
                                             style=background-color:#f6a9a97a!important;
                                        @elseif ($tdlAssignedToThisUser->status == 'انجام شده')
                                             style=background-color:#c8f7c561!important;
                                        @elseif ($tdlAssignedToThisUser->status == 'متوقف')
                                             style=background-color:#79877861!important;
                                         @endif

                                >
                                    <td>{{ \Illuminate\Support\Str::limit($tdlAssignedToThisUser->name, 35, $end='...') }}</td>
                                    <td>{{ $tdlAssignedToThisUser->assignerName }}</td>
                                    <td><span class="badge badge-danger">{{ $tdlAssignedToThisUser->priority }}</span></td>
                                    <td><span class="badge badge-warning">{{ $tdlAssignedToThisUser->status }}</span></td>
                                    <td style="font-family: BYekan!important; direction: ltr!important;">{{ jdate($tdlAssignedToThisUser->created_at) }}</td>
                                    <td style="font-family: BYekan!important; direction: ltr!important; ">{{ $tdlAssignedToThisUser->deadline ? jdate($tdlAssignedToThisUser->deadline) : '' }}</td>
                                    <td style="text-align: center;vertical-align: center;font-size: 20px;color: #3BAFDA;" >
                                        @if($tdlAssignedToThisUser->attachment)
                                            <a target="_blank" href="{{ $tdlAssignedToThisUser->attachment }}"> <i class="fa fa-file" ></i> </a>
                                        @endif
                                    </td>

                                    <td style="font-family: BYekan!important; direction: ltr!important;" >{{ $tdlAssignedToThisUser->updated_at ? jdate($tdlAssignedToThisUser->updated_at) : ''}}</td>
                                    <td style="text-align:center;color: #3BAFDA" > <a href="{{ route('tdl.edit', $tdlAssignedToThisUser->id) }}" ><i style="font-size: 18px" class="fa fa-edit"></i></a>  </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
                                لیست ارجاعات ارسال شده به دیگران
                            </h3>
                            <button  style="float: right;margin-right: 40px!important;margin-top: 10px; margin-bottom: 10px ;width: 120px; height: 40px;"   class="btn btn-success  ladda-button"  data-target="#addTask" data-toggle="modal" ><span class="ladda-label">  <i class="icon-plus"></i>  افزودن تسک  </span></button>
                        </div>
                        <div style="" class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button style="" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print3">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy3">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel3">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv3">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <table style="font-family: iranyekan; width: 100%; direction: rtl!important;" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_3">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th>نام فعالیت</th>
                                <th>متولی انجام</th>
                                <th>اهمیت</th>
                                <th>آخرین وضعیت</th>
                                <th> ایجاد</th>
                                <th> مهلت</th>
                                <th> فایل ضمیمه</th>
                                <th> بروزرسانی</th>
                                <th>ویرایش</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tdlsAssignedToOther as $tdlAssignedToOther)
                                <tr>
                                    <td>{{ \Illuminate\Support\Str::limit($tdlAssignedToOther->name, 35, $end='...') }}</td>
                                    <td>{{ $tdlAssignedToOther->doer->fName . ' ' . $tdlAssignedToOther->doer->lName }}</td>
                                    <td><span class="badge badge-danger">{{ $tdlAssignedToOther->priority }}</span></td>
                                    <td><span class="badge badge-warning">{{ $tdlAssignedToOther->status }}</span></td>
                                    <td style="font-family: BYekan!important; direction: ltr!important;" >{{ jdate($tdlAssignedToOther->created_at) }}</td>
                                    <td style="font-family: BYekan!important; direction: ltr!important;" >{{ $tdlAssignedToOther->deadline ?  jdate($tdlAssignedToOther->deadline) : '' }}</td>
                                    <td style="text-align: center;vertical-align: center;font-size: 20px;color: #3BAFDA;" >
                                        @if($tdlAssignedToOther->attachment)
                                        <a target="_blank" href="{{ $tdlAssignedToOther->attachment }}"> <i class="fa fa-file" ></i> </a>
                                        @endif
                                    </td>
                                    <td style="font-family: BYekan!important; direction: ltr!important;">{{ $tdlAssignedToOther->updated_at ?  jdate($tdlAssignedToOther->updated_at) : '' }}</td>
                                    <td style="text-align:center" > <a href="{{ route('tdl.edit', $tdlAssignedToOther->id) }}" ><i style="font-size: 18px;" class="fa fa-edit"></i></a>  </td>

                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>




@can('admin')
            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    تمام تسک ها
                                </h3>
                            </div>
                            <div style="" class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-toolbar-wrapper">
                                    <div class="dropdown dropdown-inline">
                                        <button style="" type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-plus"></i> ابزار ها و خروجی ها
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="kt-nav">
                                                <li class="kt-nav__section kt-nav__section--first">
                                                    <span class="kt-nav__section-text">انواع خروجی ها</span>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link" id="export_printAll">
                                                        <i class="kt-nav__link-icon la la-print"></i>
                                                        <span class="kt-nav__link-text">چاپ</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link" id="export_copyAll">
                                                        <i class="kt-nav__link-icon la la-copy"></i>
                                                        <span class="kt-nav__link-text">کپی</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link" id="export_excelAll">
                                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                        <span class="kt-nav__link-text">اکسل</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link" id="export_csvAll">
                                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                        <span class="kt-nav__link-text">CSV</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="kt-portlet__body">
                            <table style="font-family: iranyekan; width: 100%; direction: rtl!important" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_4">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th>نام فعالیت</th>
                                    <th>ایجاد کننده</th>
                                    <th>متولی انجام</th>
                                    <th>اهمیت</th>
                                    <th>آخرین وضعیت</th>
                                    <th> ایجاد</th>
                                    <th> مهلت</th>
                                    <th> فایل ضمیمه</th>
                                    <th> بروزرسانی</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ \Illuminate\Support\Str::limit($task->name, 35, $end='...') }}</td>
                                        <td>{{ $task->assignerName }}</td>
                                        <td>{{ $task->doer->fName . ' ' . $task->doer->lName }}</td>
                                        <td><span class="badge badge-danger">{{ $task->priority }}</span></td>
                                        <td><span class="badge badge-warning">{{ $task->status }}</span></td>
                                        <td style="font-family: BYekan!important; direction: ltr!important;">{{ jdate($task->created_at) }}</td>
                                        <td style="font-family: BYekan!important; direction: ltr!important; ">{{ $task->deadline ? jdate($task->deadline) : '' }}</td>
                                        <td style="text-align: center;vertical-align: center;font-size: 20px;color: #3BAFDA;" >
                                            @if($task->attachment)
                                                <a target="_blank" href="{{ $task->attachment }}"> <i class="fa fa-file" ></i> </a>
                                            @endif
                                        </td>

                                        <td style="font-family: BYekan!important; direction: ltr!important;" >{{ $task->updated_at ? jdate($task->updated_at) : ''}}</td>
                                        <td style="text-align:center;color: #3BAFDA" > <a href="{{ route('tdl.edit', $task->id) }}" ><i style="font-size: 18px" class="fa fa-edit"></i></a>  </td>

                                        <td style="text-align:center;color: red" > <a style="text-align:center;color: red" href="{{ route('tdl.remove', $task->id) }}" ><i style="font-size: 18px; color: red" class="fa fa-times"></i></a>  </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endif





    </div>


@stop

@section('footerScripts')
    <script src="/js/highcharts/highcharts.js"></script>
    <script src="/js/highcharts/highcharts-more.js"></script>
    <script src="/js/highcharts/data.js"></script>
    <script src="/js/highcharts/drilldown.js"></script>

    <script type="text/javascript">




  </script>



    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <script>
        var DatatablesExtensionButtons = {
            init: function () {
                var t;
                t = $("#m_table_2").DataTable({

                        "searching": true, scrollY: "50vh", scrollX: true,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print2").on("click", function (e) {
                            e.preventDefault(), t.button(0).trigger()
                        }
                    ),
                    $("#export_copy2").on("click", function (e) {
                            e.preventDefault(), t.button(1).trigger()
                        }
                    ),
                    $("#export_excel2").on("click", function (e) {
                            e.preventDefault(), t.button(2).trigger()
                        }
                    ),
                    $("#export_csv2").on("click", function (e) {
                            e.preventDefault(), t.button(3).trigger()
                        }
                    ),
                    $("#export_pdf2").on("click", function (e) {
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
                    $("#export_print3").on("click", function (e) {
                            e.preventDefault(), b.button(0).trigger()
                        }
                    ),
                    $("#export_copy3").on("click", function (e) {
                            e.preventDefault(), b.button(1).trigger()
                        }
                    ),
                    $("#export_excel3").on("click", function (e) {
                            e.preventDefault(), b.button(2).trigger()
                        }
                    ),
                    $("#export_csv3").on("click", function (e) {
                            e.preventDefault(), b.button(3).trigger()
                        }
                    ),
                    $("#export_pdf3").on("click", function (e) {
                            e.preventDefault(), b.button(4).trigger()
                        }
                    )





                var o;
                o = $("#m_table_4").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_printAll").on("click", function (e) {
                            e.preventDefault(), o.button(0).trigger()
                        }
                    ),
                    $("#export_copyAll").on("click", function (e) {
                            e.preventDefault(), o.button(1).trigger()
                        }
                    ),
                    $("#export_excelAll").on("click", function (e) {
                            e.preventDefault(), o.button(2).trigger()
                        }
                    ),
                    $("#export_csvAll").on("click", function (e) {
                            e.preventDefault(), o.button(3).trigger()
                        }
                    ),
                    $("#export_pdfAll").on("click", function (e) {
                            e.preventDefault(), o.button(4).trigger()
                        }
                    )




            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );
        $(document).ready(function() {
            $(".qabzDate").pDatepicker({
                altField: '.observer',
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }

            });

        });




        Highcharts.chart('overal', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie',

            },

            title: {
                text: ''
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> از کل<br/>'
            },

            series: [
                {
                    name: "وضعیت",
                    colorByPoint: true,
                    data: [
                        {
                            name: "بررسی نشده",
                            y: {{ $tasks->where('status', 'بررسی نشده')->count() }},
                        },
                        {
                            name: "درحال انجام",
                            y: {{ $tasks->where('status', 'درحال انجام')->count() }},
                        },
                        {
                            name: "انجام شده",
                            y: {{ $tasks->where('status', 'انجام شده')->count() }},
                        },
                        {
                            name: "متوقف",
                            y: {{ $tasks->where('status', 'متوقف')->count() }},
                        }
                    ]
                }
            ]
        });





        Highcharts.chart('assignedToYou', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie',

            },

            title: {
                text: ''
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> از کل<br/>'
            },

            series: [
                {
                    name: "وضعیت",
                    colorByPoint: true,
                    data: [
                        {
                            name: "بررسی نشده",
                            y: {{ $tdlsAssignedToThisUser->where('status', 'بررسی نشده')->count() }},
                        },
                        {
                            name: "درحال انجام",
                            y: {{ $tdlsAssignedToThisUser->where('status', 'درحال انجام')->count() }},
                        },
                        {
                            name: "انجام شده",
                            y: {{ $tdlsAssignedToThisUser->where('status', 'انجام شده')->count() }},
                        },
                        {
                            name: "متوقف",
                            y: {{ $tdlsAssignedToThisUser->where('status', 'متوقف')->count() }},
                        }
                    ]
                }
            ]
        });

        Highcharts.chart('assignedToOther', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie',

            },

            title: {
                text: ''
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> از کل<br/>'
            },

            series: [
                {
                    name: "وضعیت",
                    colorByPoint: true,
                    data: [
                        {
                            name: "بررسی نشده",
                            y: {{ $tdlsAssignedToOther->where('status', 'بررسی نشده')->count() }},
                        },
                        {
                            name: "درحال انجام",
                            y: {{ $tdlsAssignedToOther->where('status', 'درحال انجام')->count() }},
                        },
                        {
                            name: "انجام شده",
                            y: {{ $tdlsAssignedToOther->where('status', 'انجام شده')->count() }},
                        },
                        {
                            name: "متوقف",
                            y: {{ $tdlsAssignedToOther->where('status', 'متوقف')->count() }},
                        }
                    ]
                }
            ]
        });










        // Create the chart
        Highcharts.chart('persons', {
            colors: ['#6996da','#a26bd9','#806bd9','#6bb8da','#6874d9', '#4572A7', '#89A54E', '#80699B', '#3D96AE', '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92'],
            chart: {
                type: 'pie'
            },
            title: {
                text: ''
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: ''
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '\u202B' + '{point.name}: {point.y:f}', // \u202B is RLE char for RTL support
                        enabled: true,
                        y: -5, //Optional
                        style: {
                            fontSize: '13px',
                            fontFamily: 'tahoma',
                            textShadow: false, //bug fixed IE9 and EDGE
                        },
                        useHTML: true,
                    }
                }
            },

            tooltip: {
                useHTML: true,
                style: {
                    fontSize: '13px',
                    fontFamily: 'tahoma',
                    direction: 'rtl',
                },
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:f}</b> <br/>'
            },

            series: [
                {
                    name: "تعداد وظایف",
                    colorByPoint: true,
                    data: [
                        @foreach($persons as $person)
                        {
                            name: "{{ $person->first()->doer->fName . ' ' . $person->first()->doer->lName  }}",
                            y: {{ $person->count()  }},
                            drilldown: "Chrome"
                        },
                        @endforeach


                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "Chrome",
                        id: "Chrome",
                        data: [
                            [
                                "بررسی نشده",
                                0.1
                            ],
                            [
                                "درحال انجام",
                                1.3
                            ],
                            [
                                "انجام شده",
                                53.02
                            ],
                            [
                                "متوقف",
                                1.4
                            ]
                        ]
                    },
                ]
            }
        });


    </script>




@endsection