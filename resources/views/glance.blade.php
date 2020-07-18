@extends('layouts.master', ['title' => 'آپادانا در یک نگاه'])
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

                <span class="kt-subheader__desc iranyekan">آپادانا در یک نگاه</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div style="" class="kt-container  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet ">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">
                        <div class="kt-widget__media ">
                            <br><br><br><br><a target="_blank" href="/assets/files/Apadana.pdf"><img style="width: 100px"
                                                                                                  src="/assets/files/plot.png"
                                                                                                  alt="image"></a>
                        </div>
                        <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                        </div>
                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username kt-hidden">
                                    <i class="flaticon2-correct"></i>
                                </a>

                                <a href="#" class="kt-widget__title">طرح متانول آپادانا خلیج فارس در یک نگاه</a>

                            </div>

                            <div class="kt-widget__info">
                                <div class="kt-widget__desc pt-3">
                                    پتروشیمی آپادانا خلیج فارس یک واحد تولید متانول از خوراک گاز طبیعی به ظرفیت 5000 تن
                                    در روز میباشد که با لیسانس شرکت کازاله طراحی گردیده است. این واحد از چهار بخش تشکیل
                                    شده است. در بخش اول که وظیفه تولید گاز سنتز را دارد، ابتدا ناخالصی ها و ترکیبات
                                    گوگردی خوراک گاز طبیعی پس از ورود به واحد از آن جدا می شود. عملیات تبدیل گاز متان به
                                    گاز سنتز در مرحله اول و دوم با همراهی آب، بخار و بالا بردن دما در دو ریفرمر مجزا
                                    صورت گرفته و در ریفرمر سوم همراه با تزریق اکسیژن و عملیات احتراق تکمیل می گردد. <br><br>
                                    گاز سنتز سپس وارد بخش دوم می گردد که وظیفه تبدیل گاز سنتز به متانول را دارد. در این
                                    بخش گازهای خروجی از بخش اول پس از افزایش فشار بوسیله کمپرسور و تنظیم دما، وارد
                                    راکتور سنتز شده و در آنجا هیدروژن و گاز کربنیک در مجاورت کاتالیزور به مخلوط متانول و
                                    آب تبدیل میگردد.
                                    مخلوط آب، متانول و ناخالصی های دیگر پس از جداسازی هیدروژن بوسیله یک برج جداکننده،
                                    وارد بخش سوم گردیده و در آنجا از طریق عملیات تقطیر با استفاده از سه برج سینی دار،
                                    متانول با خلوص 99.99% جدا شده و به مخازن نگهداری ارسال می شود.

                                </div>
                                <div class="kt-widget__progress kt-hidden">
                                    <div class="kt-widget__text">
                                        درصد تجمعی پیشرفت
                                    </div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar kt-bg-success" role="progressbar"
                                             style="width: 46.62%;" aria-valuenow="46.62" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        40.74%
                                    </div>
                                </div>

                                <div class="kt-widget__stats d-flex align-items-center flex-fill">
                                    <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    تاریخ شروع پروژه
                                </span>
                                        <div class="kt-widget__label">
                                            <span class="btn btn-label-brand btn-sm btn-bold btn-upper">فروردین ماه ۱۳۹۱</span>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    انتهای پیش راه اندازی
                                </span>
                                        <div class="kt-widget__label">
                                            <span class="btn btn-label-danger btn-sm btn-bold btn-upper">خرداد ماه ۱۴۰۰</span>
                                        </div>
                                    </div>


                                    <div class="kt-widget__item">
                                <span class="kt-widget__date">
                                    تاریخ بهره برداری
                                </span>
                                        <div class="kt-widget__label">
                                            <span class="btn btn-label-success btn-sm btn-bold btn-upper">شهریور ۱۴۰۰</span>
                                        </div>
                                    </div>


                                    <div class="kt-widget__item flex-fill">
                                        <span class="kt-widget__subtitel">پیشرفت تجمعی:</span>
                                        <div class="kt-widget__progress d-flex  align-items-center">
                                            <div class="progress" style="height: 5px;width: 100%;">
                                                <div class="progress-bar kt-bg-success" role="progressbar"
                                                     style="width: 45.24%;" aria-valuenow="100" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <span class="kt-widget__stat">
                                        45.24%
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-widget__bottom">
                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-piggy-bank"></i>
                            </div>

                            <div class="kt-widget__details">
                                <span class="kt-widget__title">برآورد كل بودجه </span>
                                <span class="kt-widget__value kt-font-brand"><span> &euro; </span> 462.000.000 </span>
                            </div>
                        </div>

                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-file-2"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">نرخ بازگشت داخلی سرمایه</span>
                                <span class="kt-widget__value kt-font-brand"><span></span>36.6</span>
                            </div>
                        </div>


                        <div class="kt-widget__item">
                            <div class="kt-widget__icon">
                                <i class="flaticon-confetti"></i>
                            </div>
                            <div class="kt-widget__details">
                                <span class="kt-widget__title">نفر/ساعت مصرفی</span>
                                <span class="kt-widget__value kt-font-brand"><span></span>3,454,540</span>
                            </div>
                        </div>


                        <a target="_blank" href="/assets/files/proccess-intro.pdf">
                            <div class="kt-widget__item">
                                <div class="kt-widget__icon">
                                    <i class="fa fa-file-pdf"></i>
                                </div>
                                <div class="kt-widget__details">
                                    <span class="kt-widget__value kt-font-brand"><span></span>مشاهده فایل فرآیند تولید متانول</span>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-xl-6">
                <!--begin:: Widgets/Last Updates-->
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                درصد سهامداران
                            </h3>
                        </div>


                    </div>
                    <div class="kt-portlet__body">
                        <!--begin::widget 12-->
                        <div class="kt-widget4">
                            <div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
				</span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    شرکت پتروشیمی مبین
                                </a>
                                <span class="kt-widget4__number kt-font-info">99.9008 درصد </span>
                            </div>

                            <div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
				</span>
                                <a href="#"  class="kt-widget4__title kt-widget4__title--light">
                                    شرکت عملیات غیر صنعتی و خدمات صنایع پتروشیمی
                                </a>
                                <span class="kt-widget4__number kt-font-success">0.0001 درصد</span>
                            </div>

                            <div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
				</span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    شرکت عملیات غیر صنعتی پازارگاد
                                </a>
                                <span class="kt-widget4__number kt-font-danger">0.0001 درصد </span>
                            </div>

                            <div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
				</span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    شرکت ان پی سی اینترنشنال
                                </a>
                                <span class="kt-widget4__number kt-font-primary">0.0001 درصد </span>
                            </div>

                            <div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
				</span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    شرکت پتروشیمی ونیران
                                </a>
                                <span class="kt-widget4__number kt-font-brand">0.0970 درصد </span>
                            </div>

                            <div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
				</span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    شرکت وی آی سرویسز
                                </a>
                                <span class="kt-widget4__number kt-font-warning">0.00010 درصد </span>
                            </div>

                            <div class="kt-widget4__item">
				<span class="kt-widget4__icon">
					<i class="flaticon2-pie-chart-1 kt-font-primary"></i>
				</span>
                                <a href="#" class="kt-widget4__title kt-widget4__title--light">
                                    آقای پدرو آنجل آراسا
                                </a>
                                <span class="kt-widget4__number kt-font-success">0.0010 درصد </span>
                            </div>
                        </div>
                        <!--end::Widget 12-->
                    </div>
                </div>
                <!--end:: Widgets/Last Updates-->
            </div>



            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                موقعیت جغرافیایی پروژه
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <img style="width: 80%; margin: auto" src="/assets/media/map.PNG" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                وقایع مهم پروژه
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-scroll ps ps--active-y" data-scroll="true" data-height="380"
                             data-mobile-height="300" style="height: 380px; overflow: hidden;">
                            <!--Begin::Timeline 3 -->
                            <div class="kt-timeline-v2">
                                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">


                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۸۹/۱۱/۰۶</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            عقد شروع فعاليتهای زودهنگام
                                        </div>
                                    </div>
                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۰/۰۴/۰۵</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            ثبت شرکت ونيران آپادانا
                                        </div>

                                    </div>
                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۰/۰۴/۲۴</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            تاريخ شروع فعاليتهای زودهنگام
                                        </div>
                                    </div>
                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۰/۰۸/۲۲</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            عقد قرارداد خريد ليسانس ، طراحي و مهندسي اصولي و تفصيلي ، خريد تجهيزات
                                        </div>
                                    </div>
                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۰/۰۳/۱۷</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            شروع فعاليتهاي مهندسي اصولي
                                        </div>
                                    </div>
                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۰/۰۸/۱۸</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            اختصاص زمين
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۱/۱۰/۰۲</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            قرارداد تامين منابع مالی پروژه با شرکت سدين
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۱/۱۰/۱۰</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            دريافت مجوزهای زيست محيطی
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۱/۱۲/۲۰</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            اتمام فعاليتهاي مهندسي اصولي
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۳/۲۰/۰۳</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            عقد قرارداد MC
                                        </div>
                                    </div>


                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۴/۱۰/۲۴</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            امضاء الحاقیه شماره 6 و قرارداد EWA
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۶/۰۳/۲۴</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            امضاء قرارداد ساخت واحد هواساز با شرکت Airliquide
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۶/۰۶/۰۸</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            موثر شدن سفارش خرید واحد هواساز
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۶/۰۷/۲۵</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            موثر شدن سفارش خرید کمپرسور
                                        </div>
                                    </div>


                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۷/۰۴/۰۸</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            توقف ساخت سفارش خرید کمپرسور توسط سازنده
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۷/۰۳/۱۸</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            توقف ساخت سفارش خرید واحد هواساز توسط سازنده
                                        </div>
                                    </div>


                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۷/۰۹/۲۹</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            توقف ساخت سفارش خرید پمپ های گروه یک توسط سازنده
                                        </div>
                                    </div>




                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">۹۸/۰۷/۰۹</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            موثر شدن قرارداد پیمانکار EP
                                        </div>
                                    </div>





                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">98/08/29</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            	موثر شدن سفارش خرید واحد هواساز با شرکت HATCO
                                        </div>
                                    </div>



                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">98/09/04</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            	موثر شدن سفارش خرید پمپ های گروه یک با شرکت DEEPBlue
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">98/11/16</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            موثر شدن سفارش خرید کمپرسورهای گاز سنتز
                                        </div>
                                    </div>

                                    <div class="kt-timeline-v2__item">
                                        <span class="kt-timeline-v2__item-time">98/11/27</span>
                                        <div class="kt-timeline-v2__item-cricle">
                                            <i class="fa fa-genderless kt-font-success"></i>
                                        </div>
                                        <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                                            موثر شدن سفارش خرید پمپ های گروه 2 با شرکت DEEPBlue
                                        </div>
                                    </div>




                                </div>
                            </div>
                            <!--End::Timeline 3 -->
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 380px; left: 566px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                گزیده اطلاعاتی | متانول
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div style="" id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/slider/1.png"
                                         alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/2.png"
                                         alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/3.png"
                                         alt="Third slide">
                                </div>
                                <!--/Third slide-->

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/4.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/5.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/6.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/7.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/8.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/9.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/10.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/11.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/12.png"
                                         alt="Third slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/13.png"
                                         alt="Third slide">
                                </div>


                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/slider/14.png"
                                         alt="Third slide">
                                </div>


                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                    </div>
                </div>
            </div>


        </div>









        <div class="row">
            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                آخرین ویدیو
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <video width="100%" height="100%" controls>
                            <source src="assets/videos/apadana.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>



            <div class="col-md-6">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                <a href="{{ route('gallery.index') }}">
                                آخرین تصاویر گالری پروژه
                                </a>
                            </h3>
                        </div>

                    </div>
                    <div class="kt-portlet__body">
                        <div style="" id="carousel-example-2z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-2z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-2z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-2z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <!--First slide-->
                                @foreach ($photos as $photo)
                                    <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                        <a target="_blank" href="{{ $photo->file }}"><img style="height: 400px!important;" class="d-block w-100" src="{{ $photo->file }}" alt="{{ $photo->description }}"></a>
                                    </div>
                                @endforeach


                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-2z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-2z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
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
