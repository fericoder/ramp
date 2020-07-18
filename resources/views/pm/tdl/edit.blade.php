@extends('layouts.master', ['title' => 'مدیریت وظایف'])
@section('content')


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

                    <form  style="vertical-align:center;text-align:center" method="post" action="Tdl/addTdl" class="form form-horizontal form-bordered striped-rows">
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

                <span class="kt-subheader__desc iranyekan">بروزرسانی تسک</span>
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
                                بروزرسانی تسک
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <form style="vertical-align:center;text-align:center" method="post" action="{{ route('tdl.update', $tdl->id) }}" class="form form-horizontal form-bordered striped-rows">
                            @method('PUT')
                            @csrf
                            <div class="form-body">


                                <div style="display:none" class="form-group row">
                                    <label class="col-md-3 label-control" for="id">ردیف</label>
                                    <div class="col-md-9">
                                        <input type="text" id="id" value="{{ $tdl->id }}" class="form-control" name="id" >
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="name">نام فعالیت</label>
                                    <div class="col-md-9">
                                        <input type="text" id="name" value="{{ $tdl->name }}" class="form-control" name="name" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="description">توضیحات</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" rows="3" cols="30" disabled >{{ $tdl->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="assignerName">ایجاد کننده</label>
                                    <div class="col-md-9">
                                        <input type="text" id="assignerName" value="{{ $tdl->assignerName }}" class="form-control" name="assignerName" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="priority">اهمیت</label>
                                    <div class="col-md-9">
                                        <input type="text" id="priority" value="{{ $tdl->priority }}" class="form-control" name="priority" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="status">آخرین وضعیت <sup style="color: red; font-size: 18px" >*</sup> </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="status">
                                            <option {{ $tdl->status == 'بررسی نشده' ? 'selected' : '' }} class="form-control" value="بررسی نشده"> بررسی نشده </option>
                                            <option {{ $tdl->status == 'درحال انجام' ? 'selected' : '' }} class="form-control" value="درحال انجام">درحال انجام</option>
                                            <option {{ $tdl->status == 'انجام شده' ? 'selected' : '' }} class="form-control" value="انجام شده">انجام شده</option>
                                            <option {{ $tdl->status == 'متوقف' ? 'selected' : '' }} class="form-control" value="متوقف">متوقف</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">چالش پیش رو <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('holdPoint', $tdl->holdPoint) }}" class="form-control" name="holdPoint">
                                    </div>
                                </div>

                                <div class="form-group row last">
                                    <label class="col-md-3 label-control" for="doerDescription">توضیحات متولی انجام <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="doerDescription" rows="3" cols="30">{{ old('doerDescription', $tdl->doerDescription) }}</textarea>
                                    </div>
                                </div>



                            </div>



                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check-square-o"></i> بروزرسانی
                                </button>

                                <a href="{{ route('tdl.index') }}"><button type="button" class="btn btn-warning mr-1"><i class="ft-x"></i> لغو</button></a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>


@stop

@section('footerScripts')




@endsection