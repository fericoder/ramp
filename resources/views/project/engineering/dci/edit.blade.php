@extends('layouts.master', ['title' => 'پنل ورود اطلاعات'])
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

                <span class="kt-subheader__desc iranyekan">ورود اطلاعات مرکز کنترل اسناد</span>
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
                                بروزرسانی مرکز کنترل اسناد

                                <a href="{{ route('dcc.create') }}"><button style="font-family: BYekan!important;display: inline" class="btn btn-sm btn-success" type="submit">ایجاد مدرک جدید</button></a>

                            </div>
                        </div>
                            <div class="card-body">
                                <center style="margin-bottom: 50px">
                                    <form style="display: inline" action="{{ route('dcc.edit') }}">
                                        <label for="">شماره سند را وارد نمایید:</label>
                                        <select style="width: 200px!important;" class="form-control kt-select2"
                                                id="kt_select2_8" name="no">
                                            @foreach ($dcis as $dci)
                                                <option
                                                        @if(isset($document))
                                                        {{ $document->id == $dci->id ? 'selected' : ''  }}
                                                          @endif
                                                        value="{{ $dci->id }}">{{ $dci->DocNo }}</option>
                                            @endforeach
                                        </select>
                                        <button style="font-family: BYekan!important;display: inline" class="btn btn-success" type="submit">جستجو</button>
                                    </form>
                                </center>
                                @if(isset($document))

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






                                        <div style="direction: ltr" class="kt-portlet">
                                            <div class="kt-portlet__body kt-portlet__body--fit">
                                                <div class="row row-no-padding row-col-separator-xl">
                                                    <div class="col-md-12 col-lg-12 col-xl-3">
                                                        <!--begin:: Widgets/Stats2-1 -->
                                                        <div class="kt-widget1">
                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">Doc No:</h3>
                                                                </div>
                                                                <span t class="kt-widget1__title">{{ $document->DocNo }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">Title:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->Title }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">Owner Doc. No:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->OwnerDocNo }}</span>
                                                            </div>

                                                        </div>
                                                        <!--end:: Widgets/Stats2-1 -->
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-3">
                                                        <!--begin:: Widgets/Stats2-2 -->
                                                        <div class="kt-widget1">
                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">Owner's Action:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->OwnersAction }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">Dept.:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title"> {{ $document->Dept }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">WT:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->WT }}</span>
                                                            </div>

                                                        </div>
                                                        <!--end:: Widgets/Stats2-2 -->
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-3">
                                                        <!--begin:: Widgets/Stats2-3 -->
                                                        <div class="kt-widget1">
                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">DOC COD:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->DOCCOD }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">START:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->START }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">IFR / IFI:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->IFRIFI }}</span>
                                                            </div>

                                                        </div>
                                                        <!--end:: Widgets/Stats2-3 -->
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-3">
                                                        <!--begin:: Widgets/Stats2-3 -->
                                                        <div class="kt-widget1">
                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">IFP /IFE/ IFC OR IFE (W/H):</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->IFPIFEIFCORIFE }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">IFC / IFE:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->IFCIFE }}</span>
                                                            </div>

                                                            <div class="kt-widget1__item">
                                                                <div class="kt-widget1__info">
                                                                    <h3 class="kt-widget1__title">IFC / IFE:</h3>
                                                                </div>
                                                                <span class="kt-widget1__title">{{ $document->IFCIFE }}</span>
                                                            </div>

                                                        </div>
                                                        <!--end:: Widgets/Stats2-3 -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    <form action="{{ route('dcc.update' ) }}" method="POST" enctype="multipart/form-data" class="kt-form kt-form--label-right">
                                        <div style="padding-left: 1%; padding-right: 1%;" class="kt-portlet__body">
                                            @csrf

                                            <div style="direction: ltr" class="table-responsive">
                                                <table class="table table-striped table-hover table-condensed table-bordered">
                                                    <tbody>

                                                    <tr>
                                                        <td>Rev:</td>
                                                        <input style="display: none" type="hidden" name="documentId" value="{{ $document->id }}" id="">
                                                        <input style="display: none" type="hidden" name="DocNo" value="{{ $document->DocNo }}" id="">
                                                        <td><input  style="width: 200px" type="text" name="Rev" value="{{ old('Rev', $document->Rev) }}"  class="form-control" /></td>

                                                        <td>POI:</td>
                                                        <td>
                                                            <select style="width: 200px" class="form-control" name="POI">
                                                                <option {{ $document->POI == 'IFC' ? 'selected' : '' }} value="IFC">IFC</option>
                                                                <option {{ $document->POI == 'IFC-WH' ? 'selected'  : '' }} value="IFC-WH">IFC-WH</option>
                                                                <option {{ $document->POI == 'IFE' ? 'selected'  : '' }} value="IFE">IFE</option>
                                                                <option {{ $document->POI == 'IFI' ? 'selected'  : '' }} value="IFI">IFI</option>
                                                                <option {{ $document->POI == 'IFP' ? 'selected'  : '' }} value="IFP">IFP</option>
                                                                <option {{ $document->POI == 'IFR' ? 'selected'  : '' }} value="IFR">IFR</option>
                                                            </select>
                                                        </td>



                                                    </tr>

                                                    <tr>
                                                        <td>Ext. Trans. No:</td>
                                                        <td><input  style="width: 200px" type="text" name="ExtTransNo"  value="{{ old('ExtTransNo', $document->ExtTransNo) }}"  class="form-control" /></td>

                                                        <td>Ext. Trans. Issued Date:</td>
                                                        <td>
                                                            <input value="{{ $document->ExtTransIssuedDate }}" class="form-control dp" >
                                                            <input type="hidden" value="{{ $document->ExtTransIssuedDate }}" name="ExtTransIssuedDate" class="observer" >
                                                        </td>

                                                    </tr>



                                                    <tr>
                                                        <td>Employer External Comments Date:</td>
                                                        <td>
                                                            <input value="{{ $document->EmployerExternalCommentsDate }}" class="form-control dp" >
                                                            <input type="hidden" value="{{ $document->EmployerExternalCommentsDate }}" name="EmployerExternalCommentsDate" class="observer" >
                                                        </td>

                                                        <td>last Hard Copy Received Date: </td>
                                                        <td>
                                                            <input value="{{ $document->lastHardCopyReceivedDate }}" class="form-control dp" >
                                                            <input type="hidden" value="{{ $document->lastHardCopyReceivedDate }}" name="lastHardCopyReceivedDate" class="observer" >
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                    </tr>


                                                    <tr>
                                                        <td> Last Comment Date : </td>
                                                        <td>
                                                            <input value="{{ $document->LastCommentDate }}" class="form-control dp" >
                                                            <input type="hidden" value="{{ $document->LastCommentDate }}" name="LastCommentDate" class="observer" >
                                                        </td>

                                                        <td> Last Comment Sheet Number: </td>
                                                        <td><input style="width: 200px" type="text"  name="LastCommentSheetNumber" value="{{ old('LastCommentSheetNumber', $document->LastCommentSheetNumber) }}"  class="form-control" /></td>

                                                    </tr>




                                                    <tr>
                                                        <td>Sent To Site Date: </td>
                                                        <td>
                                                            <input value="{{ $document->SentToSiteDate }}" class="form-control dp" >
                                                            <input type="hidden" value="{{ $document->SentToSiteDate }}" name="SentToSiteDate" class="observer" >
                                                        </td>

                                                        <td>Status: </td>
                                                        <td>
                                                            <select style="width: 200px" class="form-control" name="Status">
                                                                <option {{ $document->Status == 'InProgress' ? 'selected' : '' }} value="InProgress">InProgress</option>
                                                                <option {{ $document->Status == 'complete' ? 'selected'  : '' }} value="complete">complete</option>
                                                                <option {{ $document->Status == 'notIssue' ? 'selected'  : '' }} value="notIssue">notIssue</option>
                                                            </select>
                                                        </td>

                                                    </tr>




                                                    <tr>
                                                        <td>ACTUAL %: </td>
                                                        <td><input style="width: 200px" type="text" name="ACTUAL"  value="{{ old('ACTUAL', $document->ACTUAL) }}" class="form-control" /></td>

                                                        <td>Document File: </td>
                                                        <td><input style="width: 200px" type="file" name="documentFile" value="{{ old('documentFile', $document->documentFile) }}" class="form-control" /></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Transmittal File: </td>
                                                        <td><input style="width: 200px" type="file" name="transmittalFile" value="{{ old('transmittalFile', $document->transmittalFile) }}" class="form-control" /></td>

                                                        <td>Comment File: </td>
                                                        <td><input style="width: 200px" type="file" name="commentFile" value="{{ old('commentFile', $document->commentFile) }}" class="form-control" /></td>
                                                    </tr>



                                                    </tbody>
                                                </table>

                                            </div>



                                            <div class="text-center mt-4 ">
                                                <button  type="submit" class="btn btn-success" >بروزرسانی اطلاعات </button>
                                            </div>


                                        </div>
                                    </form>
                                @endif
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