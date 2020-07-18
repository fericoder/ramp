@extends('layouts.master', ['title' => 'پروژه -> خرید | تسریع بخشی'])

@section('headerScripts')
    <style>
        td, th{
            vertical-align: middle!important;
            font-family: iranyekan;
        }
        .table td{
            padding: 0rem!important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow, .select2-container--default .select2-selection--multiple .select2-selection__arrow{
            font-family: "LineAwesome"!important;
        }

        .form-control{
            display: inherit!important;
        }
        .select2-selection__rendered{
            direction: rtl;
            font-family: byekan!important;
        }
        lable{
            direction: rtl!important;
        }
        input{
            height: 30px!important;
            margin: 5px!important;
        }
        .kt-widget1 .kt-widget1__item .kt-widget1__number{
            font-size: 2.4rem!important;
        }
        .kt-widget1 .kt-widget1__item{
            padding: 0.3rem 0!important;
        }

    </style>






@stop


@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">پروژه </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">کالا | تسریع بخشی</span>
            </div>
            <span style="padding:10px" class="badge badge-primary iranyekan ">تاریخ آخرین بروزرسانی گزارش: </span>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">


        <div style="display: none" class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div style="direction: ltr" class="row row-no-padding row-col-separator-xl">
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-1 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">P.O. Effectivene Ststus:</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Total:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-brand">58</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Ordinary:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">49</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">LLI:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">9</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-1 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-2 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">P.O. Placement Status	 :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Total</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">58</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Ordinary</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">49</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">LLI</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">9</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-2 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">TBE Status :</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Total Done</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">68</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Ordinary</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">57</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">LLI</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">11</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-3 -->
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-3">
                        <!--begin:: Widgets/Stats2-3 -->
                        <div class="kt-widget1">
                            <p style="text-align: center">Inquiry Package	:</p>
                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Total:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-info">202</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">Ordinary:</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-success">183</span>
                            </div>

                            <div class="kt-widget1__item">
                                <div class="kt-widget1__info">
                                    <h3 class="kt-widget1__title">LLI</h3>
                                </div>
                                <span class="kt-widget1__number kt-font-danger">19</span>
                            </div>

                        </div>
                        <!--end:: Widgets/Stats2-3 -->
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                P.O. Information
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <table style="font-family: iranyekan; width: 100%; direction: ltr" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_2">
                            <thead style="font-family: BYekan">
                            <tr>
                                <th title="Field #1" data-field="name">System Code</th>
                                <th title="Field #2" data-field="name"> P.O. No. </th>
                                <th title="Field #3" data-field="family">Tag No.</th>
                                <th title="Field #4" data-field="nameFamilyEn">Discipline</th>
                                <th title="Field #5" data-field="mobile">QTY (Kg,M,...)</th>
                                <th title="Field #6" data-field="tel">LLI</th>
                                <th title="Field #7" data-field="email">Local / Foreign </th>
                                <th title="Field #8" data-field="address">Delivery Term </th>
                                <th title="Field #8" data-field="address">"Country of Origin</th>
                                <th title="Field #8" data-field="address">Vendor Name </th>
                                <th title="Field #8" data-field="address">Bulk / Items </th>
                                <th title="Field #8" data-field="address">Status </th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td></td>
                                <td>PV-213A</td>
                                <td>Tk-2201</td>
                                <td>ME</td>
                                <td>1</td>
                                <td>Yes</td>
                                <td>local</td>
                                <td>FOB</td>
                                <td>Iran</td>
                                <td>MachineSazi Pars</td>
                                <td>Items</td>
                                <td>Raw Material Supply</td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>







        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Vendor Document Monitoring
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive">
                            <table style="direction: ltr; font-family: iranyekan; width: 100%" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_3">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th title="Field #1" data-field="name">System Code</th>
                                    <th title="Field #2" data-field="name">  P.O. No.  </th>
                                    <th title="Field #3" data-field="family">Tag No.  </th>
                                    <th title="Field #4" data-field="nameFamilyEn">Doc. No.</th>
                                    <th title="Field #5" data-field="mobile">Last Rev.</th>
                                    <th title="Field #6" data-field="tel">Title   </th>
                                    <th title="Field #7" data-field="email">Vendor Name  </th>
                                    <th title="Field #8" data-field="address">Plan Received Date  </th>
                                    <th title="Field #8" data-field="address">Vendor Upload Date</th>
                                    <th title="Field #8" data-field="address"> Comment Date </th>
                                    <th title="Field #8" data-field="address">Approved Date </th>
                                    <th title="Field #8" data-field="address">Remark </th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td></td>
                                    <td>PV-213A</td>
                                    <td>Tk-2201</td>
                                    <td>VD-9001-213A-CAL-001</td>
                                    <td>0</td>
                                    <td>Mechanical Calculation for Tk-2201</td>
                                    <td>MachineSazi Pars</td>
                                    <td>9/22/2013</td>
                                    <td>10/20/2013</td>
                                    <td>11/16/2013</td>
                                    <td>3/18/2014</td>
                                    <td></td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Raw Material Supply Monitoring
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive">
                            <table style="direction: ltr; font-family: iranyekan; width: 100%" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_4">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th title="Field #1" data-field="name">System Code</th>
                                    <th title="Field #2" data-field="name">  P.O. No.  </th>
                                    <th title="Field #3" data-field="family">Tag No.  </th>
                                    <th title="Field #4" data-field="nameFamilyEn">Bulk / Items</th>
                                    <th title="Field #5" data-field="mobile">Sub-vendor PO Placement</th>
                                    <th title="Field #6" data-field="tel">Sub-vendor Name   </th>
                                    <th title="Field #7" data-field="email">Sub-vendor Engineering %  </th>
                                    <th title="Field #8" data-field="address">Sub-vendor Raw Material Supply %  </th>
                                    <th title="Field #8" data-field="address">Sub-vendor Fabrication %</th>
                                    <th title="Field #8" data-field="address"> Final Inspection & Test </th>
                                    <th title="Field #8" data-field="address">Shipment & Delivery At Vendor Shop </th>
                                    <th title="Field #8" data-field="address">Remark </th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td></td>
                                    <td>PV-213A</td>
                                    <td>Tk-2201</td>
                                    <td>Bulk</td>
                                    <td>12/31/1899</td>
                                    <td>Folad Ahvaz</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>N/A</td>
                                    <td>12/31/1899</td>
                                    <td>12/31/1899</td>
                                    <td></td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Manufacturing & Fabrication Monitoring
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive">
                            <table style="direction: ltr; font-family: iranyekan; width: 100%" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_5">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th title="Field #1" data-field="name">System Code</th>
                                    <th title="Field #2" data-field="name">  P.O. No.  </th>
                                    <th title="Field #3" data-field="family">PIM Date  </th>
                                    <th title="Field #4" data-field="nameFamilyEn">Plan Start </th>
                                    <th title="Field #5" data-field="mobile"> Plan Finish</th>
                                    <th title="Field #6" data-field="tel"> Act. Start    </th>
                                    <th title="Field #7" data-field="email">Act. Finish  </th>
                                    <th title="Field #8" data-field="address">Plan Progress  </th>
                                    <th title="Field #8" data-field="address">Act. Progress</th>
                                    <th title="Field #8" data-field="address"> Deviation </th>
                                    <th title="Field #8" data-field="address">Remark </th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Logistic
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">

                            <div class="kt-portlet__head-toolbar-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-brand btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-plus"></i> ابزار ها و خروجی ها
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">انواع خروجی ها</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_print">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">چاپ</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_copy">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">کپی</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_excel">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">اکسل</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_csv">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link" id="export_pdf">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <div class="table-responsive">
                            <table style="direction: ltr; font-family: iranyekan; width: 100%" class="table table-striped table-bordered table-hover table-checkable display nowrap" id="m_table_6">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th title="Field #1" data-field="name">System Code</th>
                                    <th title="Field #2" data-field="name">  P.O. No.  </th>
                                    <th title="Field #3" data-field="family">Tag No.  </th>
                                    <th title="Field #4" data-field="nameFamilyEn">QTY (Kg,M,...)</th>
                                    <th title="Field #5" data-field="mobile">Bulk / Items</th>
                                    <th title="Field #6" data-field="tel">Local / Foreign   </th>
                                    <th title="Field #7" data-field="email">Delivery Term  </th>
                                    <th title="Field #8" data-field="address">Forwarder  </th>
                                    <th title="Field #8" data-field="address">Type of Carriage </th>
                                    <th title="Field #8" data-field="address"> Start shipping </th>
                                    <th title="Field #8" data-field="address">Finish shipping </th>
                                    <th title="Field #8" data-field="address">Remark </th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Z</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- end:: Content -->

@stop


@section('footerScripts')
    <link rel="stylesheet" href="/css/persian-datepicker.min.css"/>
    <script src="/js/persian-date.min.js"></script>
    <script src="/js/persian-datepicker.min.js"></script>
    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

    <!--begin::Page Scripts -->
    <script>

        $("#show").click(function () {
            $("#edu").toggle('slow');
        });


        $(document).ready(function() {
            $(".qabzDate").pDatepicker();
        });






    </script>
    <script>
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



                var c;
                c = $("#m_table_4").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), c.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), c.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), c.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), c.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), c.button(4).trigger()
                        }
                    )




                var d;
                d = $("#m_table_5").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), d.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), d.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), d.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), d.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), d.button(4).trigger()
                        }
                    )



                var e;
                e = $("#m_table_6").DataTable({

                        scrollY:"",scrollX:!0,scrollCollapse:!0,
                        responsive: !0,

                        buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
                    }
                ),
                    $("#export_print").on("click", function (e) {
                            e.preventDefault(), e.button(0).trigger()
                        }
                    ),
                    $("#export_copy").on("click", function (e) {
                            e.preventDefault(), e.button(1).trigger()
                        }
                    ),
                    $("#export_excel").on("click", function (e) {
                            e.preventDefault(), e.button(2).trigger()
                        }
                    ),
                    $("#export_csv").on("click", function (e) {
                            e.preventDefault(), e.button(3).trigger()
                        }
                    ),
                    $("#export_pdf").on("click", function (e) {
                            e.preventDefault(), e.button(4).trigger()
                        }
                    )




            }
        };


        jQuery(document).ready(function () {
                DatatablesExtensionButtons.init()
            }
        );

        $("#show").click(function () {
            $("#edu").toggle('slow');
        });

    </script>
    <!--end::Page Scripts -->
    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

@stop