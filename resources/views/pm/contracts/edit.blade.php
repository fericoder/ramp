@extends('layouts.master', ['title' => 'ویرایش قرارداد'])
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

                <span class="kt-subheader__desc iranyekan">بروزرسانی قرارداد</span>
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
                                بروزرسانی قرارداد
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <form style="vertical-align:center;text-align:center" method="post" action="{{ route('tenders.update', $tender->id) }}" class="form form-horizontal form-bordered striped-rows">
                            @method('PUT')
                            @csrf
                            <div class="form-body">


                                <div style="display:none" class="form-group row">
                                    <label class="col-md-3 label-control" for="id">ردیف</label>
                                    <div class="col-md-9">
                                        <input type="text" id="id" value="{{ $tender->radif }}" class="form-control" name="id" >
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="name">موضوع قرارداد</label>
                                    <div class="col-md-9">
                                        <input type="text" id="name" value="{{ $tender->mozoo }}" class="form-control" name="name" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="description">تاریخ شروع فرآیند برونسپاری</label>
                                    <div class="col-md-9">
                                        <input type="text" id="tarikhShorooBoroonsepari" value="{{ $tender->tarikhShorooBoroonsepari }}" class="form-control" name="tarikhShorooBoroonsepari" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="assignerName">مبلغ برآورد ارزی</label>
                                    <div class="col-md-9">
                                        <input type="text" id="assignerName" value="{{ $tender->arzi }}" class="form-control" name="arzi" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="priority">مبلغ برآورد ريالی</label>
                                    <div class="col-md-9">
                                        <input type="text" id="riali" value="{{ $tender->riali }}" class="form-control" name="riali" >
                                    </div>
                                </div>

                                

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="moddat">مدت اجرا- ماه <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('moddat', $tender->moddat) }}" class="form-control" name="moddat">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">مبلغ تضمین <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('mablaghTazmin', $tender->mablaghTazmin) }}" class="form-control" name="mablaghTazmin">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">شرکت های دعوت شده <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('sherkatHa', $tender->sherkatHa) }}" class="form-control" name="sherkatHa">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">تاریخ دعوتنامه <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('tarikhDavat', $tender->tarikhDavat) }}" class="form-control" name="tarikhDavat">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">تعداد پیشنهادات دریافت شده <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('tedadPishnahadat', $tender->tedadPishnahadat) }}" class="form-control" name="tedadPishnahadat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">تاریخ بازگشایی <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('tarikhBazgoshaei', $tender->tarikhBazgoshaei) }}" class="form-control" name="tarikhBazgoshaei">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="sherkatBarande">شرکت برنده <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('sherkatBarande', $tender->sherkatBarande) }}" class="form-control" name="sherkatBarande">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">مبلغ برنده ارزی <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('sherkatBarande', $tender->sherkatBarande) }}" class="form-control" name="mablaghBarande">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">مبلغ برنده ريالی <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('mablaghBarandeRiali', $tender->mablaghBarandeRiali) }}" class="form-control" name="mablaghBarandeRiali">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">تاریخ عقد قرارداد <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('tarikhGharardad', $tender->tarikhGharardad) }}" class="form-control" name="tarikhGharardad">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">شماره قرارداد <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('shomareGHarardad', $tender->shomareGHarardad) }}" class="form-control" name="shomareGHarardad">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="holdPoint">توضیحات <sup style="color: red; font-size: 18px" >*</sup></label>
                                    <div class="col-md-9">
                                        <input type="text" id="holdPoint" value="{{ old('tozihat', $tender->tozihat) }}" class="form-control" name="tozihat">
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