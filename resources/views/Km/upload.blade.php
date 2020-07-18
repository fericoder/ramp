@extends('layouts.master', ['title' => 'مدیریت دانش -> گالری | آپلود'])

@section('headerScripts')
    <style>
        .select2-container--default .select2-selection--single .select2-selection__arrow, .select2-container--default .select2-selection--multiple .select2-selection__arrow{
            font-family: "LineAwesome"!important;
        }

    </style>

    <link rel="stylesheet" href="/css/dropzone.css">

    <style>
        .dropzone{
            min-height: 550px!important;
        }
        .select2-results__option{
            text-align: left;
        }
        .select2-selection__rendered{
            text-align: left;

        }
    </style>


@stop


@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">مدیریت دانش </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">آپلود در گالری</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">



        <div class="row">
            <div class="col-xl-12">

                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                آپلود فایل در گالری
                            </h3>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <form  action="{{ route('galleryStore') }}" class="dropzone" id="my-awesome-dropzone" method="post" enctype="multipart/form-data">
                            @csrf
                            <div style="font-family: Arial!important;" class="row justify-content-md-center">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Phase: </label>
                                        <select style="width: 150px!important;" class="form-control kt-select2" id="kt_select2_1" name="phase">
                                            <option></option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="Procurement">Procurement</option>
                                            <option value="Constriction">Construction</option>
                                            <option value="Pre-Commissioning">Pre-Commissioning</option>
                                            <option value="Commissioning">Commissioning</option>
                                            <option value="Startup">Startup</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Unit: </label>
                                        <select style="width: 150px!important;" class="form-control kt-select2" id="kt_select2_2" name="unit">
                                            <option></option>
                                            <option value="100(Process)">100(Process)</option>
                                            <option value="200(Process)">200(Process)</option>
                                            <option value="300(Process)">300(Process)</option>
                                            <option value="400(Stem Section)">400(Stem Section)</option>
                                            <option value="610(ASU)">610(ASU)</option>
                                            <option value="620(Instrument Air Plant System)">620(Instrument Air Plant System)</option>
                                            <option value="630(Cooling Water System)">630(Cooling Water System)</option>
                                            <option value="640 (Water Polishing system)">640 (Water Polishing system)</option>
                                            <option value="650(Full Gas system)">650(Full Gas system)</option>
                                            <option value="710(Methanol Storage)">710(Methanol Storage)</option>
                                            <option value="720(Crude Methanol Storage)">720(Crude Methanol Storage)</option>
                                            <option value="820(Fire water/Fire Fitting)">820(Fire water/Fire Fitting)</option>
                                            <option value="830(Flare System)">830(Flare System)</option>
                                            <option value="840 (Effulgent transfer system) ">840 (Effulgent transfer system) </option>
                                            <option value="900 (Building)">900 (Building)</option>
                                        </select>
                                    </div>
                                </div>






                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category: </label>
                                        <select style="width: 150px!important;" class="form-control kt-select2" id="kt_select2_3" name="category">
                                            <option></option>
                                            <option value="Process">Process</option>
                                            <option value="Utility">Utility </option>
                                            <option value="Building">Building </option>
                                            <option value="Storage Tanks">Storage Tanks</option>
                                            <option value="Offsite facility">Offsite facility</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Discipline: </label>
                                        <select style="width: 150px!important;" class="form-control kt-select2" id="kt_select2_4" name="discipline">
                                            <option></option>
                                            <option value="CIVIL&STRC">CIVIL&STRC</option>
                                            <option value="ELECTRICAL">ELECTRICAL </option>
                                            <option value="HVAC">HVAC </option>
                                            <option value="INSTRUMENT">INSTRUMENT</option>
                                            <option value="MACHINERY">MACHINERY</option>
                                            <option value="MECHANIC">MECHANIC</option>
                                            <option value="PIPING">PIPING</option>
                                            <option value="Sand Blast & Painting">Sand Blast & Painting</option>
                                            <option value="Insulation">Insulation</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Job Phase: </label>
                                        <select style="width: 150px!important;" class="form-control kt-select2" id="kt_select2_7" name="jobPhase">
                                            <option></option>
                                            <option value="Overall">Overall</option>
                                            <option value="Visit’s">Visit’s</option>
                                            <option value="Meeting’s">Meeting’s </option>
                                            <option value="HSE">HSE</option>
                                            <option value="Event’s">Event’s</option>
                                            <option value="Raw Material">Raw Material</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Test">Test</option>
                                            <option value="Inspection">Inspection</option>
                                            <option value="Transportation">Transportation</option>
                                            <option value="Site Delivery">Site Delivery</option>
                                            <option value="Excavation">Excavation</option>
                                            <option value="Lean Concrete">Lean Concrete</option>
                                            <option value="Bar Bending">Bar Bending</option>
                                            <option value="Foundation Form working">Foundation Form working</option>
                                            <option value="Concrete Pouring">Concrete Pouring</option>
                                            <option value="Coating">Coating</option>
                                            <option value="Back Filling">Back Filling</option>
                                            <option value="WALL">WALL</option>
                                            <option value="Wall bar Bending">Wall bar Bending</option>
                                            <option value="Wall Form Working">Wall Form Working</option>
                                            <option value="Wall Concrete Pouring">Wall Concrete Pouring</option>
                                            <option value="Footing">Footing</option>
                                            <option value="Excavation">Excavation </option>
                                            <option value="Leveling & Compaction">Leveling & Compaction</option>
                                            <option value="Lean Concrete">Lean Concrete</option>
                                            <option value="Scaffolding">Scaffolding</option>
                                            <option value="Concrete Pouring">Concrete Pouring</option>
                                            <option value="Coating">Coating</option>
                                            <option value="Back Filling">Back Filling</option>
                                            <option value="Column Bar bending">Column Bar bending</option>
                                            <option value="Column Form working">Column Form working</option>
                                            <option value="Column Concrete Pouring">Column Concrete Pouring</option>
                                            <option value="Beam Form working">Beam Form working</option>
                                            <option value="Beam bar Bending">Beam bar Bending</option>
                                            <option value="Beam Concrete Pouring">Beam Concrete Pouring</option>
                                            <option value="Level">Level</option>
                                            <option value="Foundation Chipping">Foundation Chipping</option>
                                            <option value="Padding and Base Leveling">Padding and Base Leveling</option>
                                            <option value="Handling">Handling</option>
                                            <option value="Erection">Erection</option>
                                            <option value="Scaffolding">Scaffolding</option>
                                            <option value="Installation of External">Installation of External</option>
                                            <option value="Installation of Internal Trays">Installation of Internal Trays</option>
                                            <option value="Testing">Testing</option>
                                            <option value="Handling">Handling</option>
                                            <option value="Surface Preparation or Chip & Pad">Surface Preparation or Chip & Pad</option>
                                            <option value="Erection">Erection</option>
                                            <option value="Positioning & Half Grout">Positioning & Half Grout</option>
                                            <option value="First Alignment">First Alignment</option>
                                            <option value="Final Grouting">Final Grouting</option>
                                            <option value="Final Alignment">Final Alignment</option>
                                            <option value="Accessories Installation">Accessories Installation</option>
                                            <option value="Handling">Handling</option>
                                            <option value="Laying">Laying</option>
                                            <option value="Erection">Erection</option>
                                            <option value="Fit Up">Fit Up</option>
                                            <option value="Welding">Welding</option>
                                            <option value="NDT/PWHT">NDT/PWHT</option>
                                            <option value="Hydro-Test">Hydro-Test</option>
                                            <option value="Concert For Pedestal">Concert For Pedestal</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label class="control-label">Tag:</label>
                                    <input style="font-family: Byekan" class="form-control" type="text" name="tag" value="">

                                </div><br>


                                <div class="col-md-6">
                                    <div style="padding: 20px" class="form-group margin-top-30 ">
                                        <center>  <label style="direction:rtl;font-family:Byekan" class="control-label">درس آموخته:</label> </center>
                                        <input style="direction:rtl;font-family:Byekan" type="text" placeholder="" name="ll" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="padding: 20px" class="form-group margin-top-30 ">
                                        <center>  <label style="direction:rtl;font-family:Byekan" class="control-label">توضیحات تصویر:</label> </center>
                                        <input style="direction:rtl;font-family:Byekan" type="text" placeholder="" name="description" class="form-control">
                                    </div>
                                </div>

                            </div>





                            <div style="margin-top: 50px" class="dz-default dz-message"><span>جهت بارگذاری تصویر یا ویدیو، اینجا کلیک کنید.</span></div>
                        </form>
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
    <script src="/js/dropzone.min.js" type="text/javascript"></script>

@stop
