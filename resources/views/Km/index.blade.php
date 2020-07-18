@extends('layouts.master', ['title' => 'مدیریت دانش -> گالری تصاویر'])

@section('headerScripts')




    <link rel="stylesheet" type="text/css" href="/css/gallery.css">



@stop

<style media="screen">
    input{
        margin: 5px!important;
    }
    .laravelComment{
        text-align: center!important;
        margin-top: 20px;
        padding: 10px;
    }
    .threaded{
        display: inline;

    }
    .showComment{
        display: inline;
    }
    .dividing{
        display: none;
    }
    .laravelComment{
        text-align: left;
    }
    .laravel-like{
        display: inline;
    }
    .panel-title,h4,p{
        font-family: Byekan;
        direction: rtl;
        text-align: right;
    }
</style>
@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">مدیریت دانش </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">گالری</span>
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
                                گالری پروژه آپادانا
                            </h3>
                        </div>

                        <div style="" class="kt-portlet__head-toolbar">
                            <a href="{{ route('gallery.create') }}"><button type="button" class="btn btn-success btn-sm"  aria-haspopup="true" aria-expanded="false"><i class="la la-plus"></i> آپلود تصویر در گالری</button></a>
                        </div>
                    </div>

                    <div class="kt-portlet__body">

                        <div class="container" style="margin-top:10px;">
                            <p style="direction: ltr!important;text-align: left;font-family:Arial!important" >About {{ count($photos) }} results ({{ (microtime(true) - LARAVEL_START) }} second)</p>


                            <div style="margin-right: 9%;" class="form-group mt-5 ">
                                <form action="{{ route('gallery.search') }}" method="post">
                                    @csrf
                                    <label>جستجو بین تصاویر:</label>
                                    <input style="display: inline; width: 35%" type="text" name="keyword" class="form-control"  {{ isset($keyword) ? "value=$keyword" : '' }}  placeholder="عبارت مورد نظر را وارد نمایید:">
                                    <button style="font-size: 14px; display: inline" type="submit" class="btn btn-primary btn-sm" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i>جستجو</button>
                                </form>
                            </div>


                            <div class="row form-group">

                                @foreach($photos as $photo)
                                    <div class="col-xs-12 col-md-4">
                                        <div class="panel panel-default">
                                            <div style="direction: rtl;text-align: right" class="panel-heading">
                                                {!! $photo->Type == "Video" ? "<i style='display:inline;padding-left: 7px;' class='fa fa-video-camera' ></i>" : "<i style='display:inline;padding-left: 7px;' class='fa fa-picture-o' ></i>" !!}  <h3 style="display:inline" class="panel-title">{!! \Illuminate\Support\Str::words($photo->description, 10,'....')  !!} </h3>
                                            </div>
                                            <div class="panel-image hide-panel-body">

                                                <figure>
                                                    @if($photo->type == 'Picture')
                                                        <a target="_blank" href="{{ $photo->file }}"> <img style="height: 447px;max-height: 425px; object-fit: contain;" src="{{ $photo->file }}" class="panel-image-preview" alt="" /></a>
                                                    @endif

                                                    @if($photo->Type == 'Video')
                                                        <video class="panel-image-preview" width="100%" controls>
                                                            <source style="min-height: 425px;max-height: 403px; object-fit: contain;" src="{{ $photo->file }}" type="video/mp4">
                                                        </video>
                                                    @endif

                                                </figure>

                                            </div>
                                            <div class="panel-body">
                                                <p style="text-align: center">{{ $photo->description }}</p><br>
                                                <table style="direction: ltr" class="table table-hover table-responsive">
                                                    <tbody>

                                                        <tr>
                                                            <td>phase:</td>
                                                            <td>{{ $photo->phase }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>unit:</td>
                                                            <td>{{ $photo->unit }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>category:</td>
                                                            <td>{{ $photo->category }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>discipline:</td>
                                                            <td>{{ $photo->discipline }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>jobPhase</td>
                                                            <td>{{ $photo->jobPhase }}</td>
                                                        </tr>





                                                    @if($photo->tag)
                                                        <tr>
                                                            <td>Tag:</td>
                                                            <td>{{ $photo->tag }} </td>
                                                        </tr>
                                                    @endif

                                                    @if($photo->created_at)
                                                        <tr>
                                                            <td>Date / Time:</td>
                                                            <td> {{ jdate($photo->created_at) }} </td>
                                                        </tr>
                                                    @endif


                                                    @if($photo->ll)
                                                        <tr>
                                                            <td>Lesson Learn:</td>
                                                            <td> {{ $photo->ll }} </td>
                                                        </tr>
                                                    @endif





                                                        <tr>
                                                            <td>Uploader:</td>
                                                            <td> {{ $photo->user->fName . ' ' . $photo->user->lName }} </td>
                                                        </tr>

                                                            <tr>
                                                                <td style="color: blue">Share:</td>
                                                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
                                                                <td style="    padding-left: 45px;">
                                                                    <?php
                                                                    $txt = urlencode("\nعنوان: $photo->description \n  \n جهت مشاهده تصویر، ‌برروی لینک کلیک نمایید.\n سامانه يكپارچه تصميم ساز مديريت پروژه آپادانا");
                                                                    ?>
                                                                    <a style="font-size: 27px; float: left;" href="whatsapp://send?text={{  url($photo->file) }} " data-action="share/whatsapp/share" target="_blank" class="icoRss" title="Rss"><i class="fa fa-whatsapp"></i></a>
                                                                    <a style="font-size: 27px; float: left; margin-left: 20px" href="tg://msg_url?url={{  url($photo->file) }}&text={{ $txt }}" class="icoTwitter" title="Rss"><i class="fa fa-telegram"></i></a>
                                                                </td>
                                                            </tr>



                                                        @if(\Auth::user()->can('admin') OR $photo->user->id === \Auth::user()->id)
                                                            <tr>
                                                                <td style="color: red">Delete:</td>
                                                                <td><a style="font-size: 13px; color: red" href="{{ route('gallery.delete', ['photo' => $photo->id]) }}">Click For Delete</a></td>
                                                            </tr>
                                                        @endif



                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="panel-footer text-center">
                                                <a href="#download"><span id="download-button{{ $photo->id }}" >دانلود</span></a>

                                                <script type="text/javascript">

                                                    document.getElementById('download-button{{ $photo->id }}').addEventListener('click', function () {
                                                        var link = document.createElement('a');
                                                        link.setAttribute('href', '{{ $photo->file }}');
                                                        link.setAttribute('download', '{{ $photo->file }}');
                                                        link.setAttribute('target', '_blank');
                                                        link.style.display = 'none';
                                                        document.body.appendChild(link);
                                                        link.click();
                                                        document.body.removeChild(link);
                                                    });
                                                </script>
{{--                                                @include('laravelLikeComment::like', ['like_item_id' =>  $photo->id  ])--}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div style="justify-content: center;margin-top: 70px" class="h-100 row align-items-center">
                                {{ $photos->links() }}
                            </div>
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


        $('.panel-image .panel-image-preview ').on('mouseover', function(e) {
            $(this).closest('.panel-image').toggleClass('hide-panel-body');
        });




    </script>

    <!--end::Page Scripts -->
    <script src="/assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>

@stop