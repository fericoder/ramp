@extends('layouts.master', ['title' => 'مدیریت وظایف'])
@section('content')

<style>
.select2-selection__rendered {
  direction: rtl!important;
  font-family: byekan !important;
  text-align: right!important;
}
.select2-results__option{
  direction: rtl!important;
  font-family: byekan !important;
  text-align: right!important;
}
.select2{
  width: 100%!important;
}

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
      <div class="kt-portlet kt-portlet--tabs">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              ویرایش تسک
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-bold nav-tabs-line   nav-tabs-line-right nav-tabs-line-brand" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_portlet_tab_1_1" role="tab" aria-selected="true">
                  اطلاعات کلی
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_2" role="tab" aria-selected="false">
                  توضیحات متولی
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_portlet_tab_1_3" role="tab" aria-selected="false">
                  فایلهای ضمیمه
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">

          <form style="vertical-align:center;text-align:center" method="post" enctype="multipart/form-data" action="{{ route('tdl.update', $tdl->id) }}" class="form form-horizontal form-bordered striped-rows">
            @method('PUT')
            @csrf


              <div class="tab-content">
              <div class="tab-pane active" id="kt_portlet_tab_1_1">
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
                  <label class="col-md-3 label-control" for="name">کد فعالیت <sup style="color: red; font-size: 18px" >*</sup> </label>
                  <div class="col-md-9">
                    <input  type="text" id="activityCode" disabled class="form-control" name="activityCode">
                  </div>
                </div>

                <div class="form-group row last">
                  <label class="col-md-3 label-control" for="doerDescription">ارجاع به کاربر دیگر </label>
                  <div class="col-md-9">
                    <select class="form-control kt-select2" id="kt_select2_1" name="assignedToSecond">
                      @foreach($users as $user)
                        <option {{ $tdl->assignedTo == $user->id ? 'selected' : '' }} value="{{ $user->id }}">{{ $user->fName . ' ' . $user->lName }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="kt_portlet_tab_1_2">

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="holdPoint">چالش پیش رو <sup style="color: red; font-size: 18px" >*</sup></label>
                  <div class="col-md-9">
                    <input type="text" id="holdPoint" value="{{ old('holdPoint', $tdl->holdPoint) }}" class="form-control" name="holdPoint">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="doerDescription">توضیحات متولی انجام <sup style="color: red; font-size: 18px" >*</sup></label>
                  <div class="col-md-9">
                    <textarea class="form-control" name="doerDescription" rows="3" cols="30">{{ old('doerDescription', $tdl->doerDescription) }}</textarea>
                  </div>
                </div>

              </div>
              <div class="tab-pane" id="kt_portlet_tab_1_3">
                <div class="form-group row">
                  <label class="col-md-3 label-control" for="doerAttachment">بارگذاری فایل  </label>
                  <div class="col-md-9">
                    <input type="file" id="doerAttachment" class="form-control" name="doerAttachment">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="description">مشاهده فایل ایجاد کننده</label>
                  <div class="col-md-3">
                    @if($tdl->attachment)
                      <a target="_blank" href="{{ $tdl->attachment }}"> <i class="fa fa-file" ></i> </a>
                    @else
                      <span style="direction: rtl!important; text-align: right!important;">ایجاد کننده تسک، فایلی بازگذاری نکرده است.</span>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="description">مشاهده فایل متولی انجام</label>
                  <div class="col-md-3">
                    @if($tdl->doerAttachment)
                      <a target="_blank" href="{{ asset($tdl->doerAttachment) }}"> <i class="fa fa-file" ></i> </a>
                    @else
                      <span style="direction: rtl!important; text-align: right!important;">متولی انجام، فایلی بازگذاری نکرده است.</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <p class="text-center"><button type="submit" style=";margin-right: 40px!important;margin-top: 10px; margin-bottom: 10px ;width: 150px; height: 40px;" class="btn btn-success  ladda-button" ><span class="ladda-label">  <i class="icon-plus"></i>  بروزرسانی تسک  </span></button></p>
          </form>
        </div>
      </div>
    </div>
  </div>













  </div>





</div>


@stop

@section('footerScripts')
<script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>




@endsection
