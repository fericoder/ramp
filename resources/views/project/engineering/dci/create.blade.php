@extends('layouts.master', ['title' => 'ایجاد داکیومنت'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }
        .select2-selection__rendered{
            direction: ltr!important;
        }

        .kt-widget1 .kt-widget1__item .kt-widget1__info .kt-widget1__title{
            font-weight: 800!important;
        }

        td{
            font-size: 16px;
            text-align: center;
            vertical-align: middle;
        }
    </style>


    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">ایجاد داکیومنت</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">


        <div class="row">
            <div class="col-md-12">


            <div class="kt-portlet__body">
                <!--begin::Accordion-->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                ایجاد داکیومنت
                            </div>
                        </div>
                            <div class="card-body">


                                    @if ($errors->any())
                                        <div style="background-color: #d04949" class="alert alert-danger m-4">
                                            <ul >
                                                <p>جهت بروزرسانی، موارد و خطاهای زیر را رفع کرده و مجدد فرم را ارسال نمایید: </p><br>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif



                                    <form action="{{ route('dcc.store' ) }}" method="POST" enctype="multipart/form-data" class="kt-form kt-form--label-right">
                                        <div style="padding-left: 1%; padding-right: 1%;" class="kt-portlet__body">
                                            @csrf

                                            <div style="direction: ltr" class="table-responsive">
                                                <table class="table table-striped table-hover table-condensed table-bordered">
                                                    <tbody>

                                                    <tr>
                                                        <td>Doc No:</td>
                                                        <td><input style="width: 200px" type="text" name="DocNo" value="{{ old('DocNo') }}" class="form-control"></td>

                                                        <td>Title:</td>
                                                        <td><input  style="width: 200px" type="text" name="Title" value="{{ old('Title') }}"  class="form-control" /></td>



                                                    </tr>

                                                    <tr>
                                                        <td>Owner Doc. No:</td>
                                                        <td><input  style="width: 200px" type="text" name="OwnerDocNo"  value="{{ old('OwnerDocNo') }}"  class="form-control" /></td>

                                                        <td>Owner's Action:</td>
                                                        <td><input  style="width: 200px" type="text" name="OwnersAction"  value="{{ old('OwnersAction') }}" class="form-control" /></td>

                                                    </tr>



                                                    <tr>
                                                        <td>Dept:</td>
                                                        <td>
                                                            <select style="width: 200px" class="form-control" name="Dept">
                                                                <option {{ old('Dept') == 'EL' ? 'selected' : '' }} value="EL">EL</option>
                                                                <option {{ old('Dept') == 'HSE' ? 'selected' : '' }} value="HSE">HSE</option>
                                                                <option {{ old('Dept') == 'HV' ? 'selected' : '' }} value="HV">HV</option>
                                                                <option {{ old('Dept') == 'IN' ? 'selected' : '' }} value="IN">IN</option>
                                                                <option {{ old('Dept') == 'MC' ? 'selected' : '' }} value="MC">MC</option>
                                                                <option {{ old('Dept') == 'MD' ? 'selected' : '' }} value="MD">MD</option>
                                                                <option {{ old('Dept') == 'PI' ? 'selected' : '' }} value="PI">PI</option>
                                                                <option {{ old('Dept') == 'PR' ? 'selected' : '' }} value="PR">PR</option>
                                                                <option {{ old('Dept') == 'QA' ? 'selected' : '' }} value="QA">QA</option>
                                                                <option {{ old('Dept') == 'QC' ? 'selected' : '' }} value="QC">QC</option>
                                                                <option {{ old('Dept') == 'ST' ? 'selected' : '' }} value="ST">ST</option>
                                                            </select>
                                                        </td>

                                                        <td>WT: </td>
                                                        <td><input  style="width: 200px" type="text" name="WT" value="{{ old('WT') }}"  class="form-control" /></td>

                                                    </tr>


                                                    <tr>
                                                    </tr>


                                                    <tr>
                                                        <td> DOC COD: </td>
                                                        <td>
                                                            <select style="width: 200px" class="form-control" name="DOCCOD">
                                                                <option {{ old('DOCCOD') == 'CAL' ? 'selected' : '' }} value="CAL">CAL</option>
                                                                <option {{ old('DOCCOD') == 'CDW' ? 'selected' : '' }} value="CDW">CDW</option>
                                                                <option {{ old('DOCCOD') == 'DBS' ? 'selected' : '' }} value="DBS">DBS</option>
                                                                <option {{ old('DOCCOD') == 'DSH' ? 'selected' : '' }} value="DSH">DSH</option>
                                                                <option {{ old('DOCCOD') == 'DWG' ? 'selected' : '' }} value="DWG">DWG</option>
                                                                <option {{ old('DOCCOD') == 'EDW' ? 'selected' : '' }} value="EDW">EDW</option>
                                                                <option {{ old('DOCCOD') == 'LIST' ? 'selected' : '' }} value="LIST">LIST</option>
                                                                <option {{ old('DOCCOD') == 'MTO' ? 'selected' : '' }} value="MTO">MTO</option>
                                                                <option {{ old('DOCCOD') == 'REQ' ? 'selected' : '' }} value="REQ">REQ</option>
                                                                <option {{ old('DOCCOD') == 'SCOPE' ? 'selected' : '' }} value="SCOPE">SCOPE</option>
                                                                <option {{ old('DOCCOD') == 'SPEC' ? 'selected' : '' }} value="SPEC">SPEC</option>
                                                                <option {{ old('DOCCOD') == 'TBA' ? 'selected' : '' }} value="TBA">TBA</option>
                                                                <option {{ old('DOCCOD') == 'VDR' ? 'selected' : '' }} value="VDR">VDR</option>
                                                            </select>
                                                        </td>

                                                        <td> START: </td>
                                                        <td>
                                                            <input style="width: 200px" class="form-control dp" >
                                                            <input type="hidden" name="START" class="observer" >
                                                        </td>

                                                    </tr>




                                                    <tr>
                                                        <td>IFR / IFI: </td>
                                                        <td>
                                                            <input style="width: 200px" class="form-control dp" >
                                                            <input type="hidden" name="IFRIFI" class="observer" >
                                                        </td>

                                                        <td>IFP /IFE/ IFC OR IFE (W/H): </td>
                                                        <td>
                                                            <input style="width: 200px" class="form-control dp" >
                                                            <input type="hidden" name="IFPIFEIFCORIFE" class="observer" >
                                                        </td>

                                                    </tr>




                                                    <tr>
                                                        <td>IFC / IFE: </td>
                                                        <td>
                                                            <input style="width: 200px" class="form-control dp" >
                                                            <input type="hidden" name="IFCIFE" class="observer" >
                                                        </td>

                                                        <td>last: </td>
                                                        <td>
                                                            {{--<input style="width: 200px" class="form-control dp" >--}}
                                                            {{--<input type="hidden" name="IFCIFE" class="observer" >--}}
                                                        </td>
                                                    </tr>



                                                    </tbody>
                                                </table>

                                            </div>



                                            <div class="text-center mt-4 ">
                                                <button  type="submit" class="btn btn-success" >ایجاد داکیومنت </button>
                                            </div>


                                        </div>
                                    </form>

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


@section('footerScripts')


    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>


@stop