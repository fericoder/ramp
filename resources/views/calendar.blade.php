@extends('layouts.master', ['title' => 'تقویم'])
@section('content')
    <style>
        .kt-timeline-v2__item-time {
            font-size: 12px !important;
            padding-top: 5px !important;
            font-family: BYekan !important;
        }


        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>

    <link href='/assets/plugins/calendar/dist/fullcalendar.css' rel='stylesheet' />
    <link href='/assets/plugins/calendar/dist/fullcalendar.print.css' rel='stylesheet' media='print' />



    <!--begin::Modal-->








    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">تقویم پروژه</span>
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
                                تقویم
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id='calendar'></div>
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

    <script src='/assets/plugins/calendar/lib/moment/moment.js'></script>
    <script src='/assets/plugins/calendar/lib/moment/moment-jalaali.js'></script>
    <script src='/assets/plugins/calendar/lib/jquery/dist/jquery.js'></script>
    <script src='/assets/plugins/calendar/dist/fullcalendar.js'></script>
    <script src='/assets/plugins/calendar/lang/fa.js'></script>

    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                lang: 'fa',
                isJalaali: true,
                isRTL: true,
                defaultDate: '2016-01-12',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2016-01-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2016-01-07',
                        end: '2016-01-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-01-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-01-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2016-01-11',
                        end: '2016-01-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-01-12T10:30:00',
                        end: '2016-01-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2016-01-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-01-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2016-01-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2016-01-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2016-01-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2016-01-28'
                    }
                ]
            });
        });


    </script>
    @endsection