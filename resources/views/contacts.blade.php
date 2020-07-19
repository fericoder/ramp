@extends('layouts.master', ['title' => 'لیست تماس'])



<style>

    .title{
        margin-top: 0px;
        margin-bottom: 15px;
    }

    .timeline {
        position: relative;
    }
    .timeline::before {
        content: '';
        background: #C5CAE9;
        width: 5px;
        height: 95%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }

    .timeline-item {
        width: 100%;
        margin-bottom: 0px;
    }
    .timeline-item:nth-child(even) .timeline-content {
        float: right;
        padding: 0px 30px 0px 30px;
    }
    .timeline-item:nth-child(even) .timeline-content .date {
        right: auto;
        left: 0;
    }
    .timeline-item:nth-child(even) .timeline-content::after {
        content: '';
        position: absolute;
        border-style: solid;
        width: 0;
        height: 0;
        top: 30px;
        left: -15px;
        border-width: 10px 15px 10px 0;
        border-color: transparent #f5f5f5 transparent transparent;
    }
    .timeline-item::after {
        content: '';
        display: block;
        clear: both;
    }

    .timeline-content {
        position: relative;
        width: 45%;
        padding: 0px 120px;
        border-radius: 4px;
        background: #f5f5f5;
        box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
    }
    .timeline-content::after {
        content: '';
        position: absolute;
        border-style: solid;
        width: 0;
        height: 0;
        top: 30px;
        right: -15px;
        border-width: 10px 0 10px 15px;
        border-color: transparent transparent transparent #f5f5f5;
    }

    .timeline-img {
        width: 30px;
        height: 30px;
        background: #3F51B5;
        border-radius: 50%;
        position: absolute;
        left: 50%;
        margin-top: 25px;
        margin-left: -15px;
    }


    .timeline-card {
        padding: 0 !important;
    }
    .timeline-card p {
        padding: 0 20px;
    }
    .timeline-card a {
        margin-left: 20px;
    }

    .timeline-item .timeline-img-header {
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url("https://picsum.photos/1000/800/?random") center center no-repeat;
        background-size: cover;
    }

    .timeline-img-header {
        height: 200px;
        position: relative;
        margin-bottom: 20px;
    }
    .timeline-img-header h2 {
        color: #FFFFFF;
        margin-top: 40px;
        margin-bottom: 15px;
        position: absolute;
        bottom: 5px;
        left: 20px;
    }

    blockquote {
        margin-top: 30px;
        color: #757575;
        border-left-color: #3F51B5;
        padding: 0 20px;
    }

    .date {
        background: #3f51b5;
        display: inline-block;
        color: #FFFFFF;
        padding: 10px;
        direction: rtl;
        font-family: iranyekan;
        position: absolute;
        top: 0;
        right: 0;
    }

    @media screen and (max-width: 768px) {
        .timeline::before {
            left: 50px;
        }
        .timeline .timeline-img {
            left: 50px;
        }
        .timeline .timeline-content {
            max-width: 100%;
            width: auto;
            margin-left: 70px;
        }
        .timeline .timeline-item:nth-child(even) .timeline-content {
            float: none;
        }
        .timeline .timeline-item:nth-child(odd) .timeline-content::after {
            content: '';
            position: absolute;
            border-style: solid;
            width: 0;
            height: 0;
            top: 30px;
            left: -15px;
            border-width: 10px 15px 10px 0;
            border-color: transparent #f5f5f5 transparent transparent;
        }
    }
    p{
        direction: rtl;
    }



</style>



@section('content')




    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title">داشبورد رامپکو </h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc iranyekan">لیست تماس</span>
            </div>

        </div>
    </div>
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
        <!--Begin::Dashboard 2-->
        <!--Begin::Row-->

        <!--End::Row-->

        <!--Begin::Row-->


        <!--Begin::Row-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">




            <div class="row">
                <div class="col-md-12">
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    لیست مخاطبین
                                </h3>
                            </div>

                        </div>
                        <div class="kt-portlet__body">
                            <table style="font-family: iranyekan; width: 100%" class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_2">
                                <thead style="font-family: BYekan">
                                <tr>
                                    <th>ردیف </th>
                                    <th>نام </th>
                                    <th>نام خانوادگی</th>
                                    <th>ایمیل سازمانی</th>
                                    <th>سمت </th>
                                    <th>رکن</th>
                                    <th>محل خدمت </th>
                                    <th>شماره موبایل</th>
                                    <th>شماره تلفن</th>
                                    <th>داخلی</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>حمیدرضا</td>
                                    <td>جهان پناه</td>
                                    <td>Jahanpanah@pidmco.ir</td>
                                    <td>مدیر</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09166514131</td>
                                    <td>21-88848131</td>
                                    <td>103</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>مصطفی</td>
                                    <td>جوینده</td>
                                    <td>jooyandeh@pidmco.ir</td>
                                    <td>مدیر فناوری اطلاعات</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09128682248</td>
                                    <td>21-88848131</td>
                                    <td>113</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>میثم </td>
                                    <td>عسگری</td>
                                    <td>asgari@pidmco.ir</td>
                                    <td>مدیر تدارکات</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09123511014</td>
                                    <td>21-88848131</td>
                                    <td>110</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>امیر</td>
                                    <td>یحیی پور</td>
                                    <td>yahyapour@pidmco.ir</td>
                                    <td>مدیر برنامه ریزی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09123952070</td>
                                    <td>21-88848131</td>
                                    <td>116</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>محسن </td>
                                    <td>خیاط</td>
                                    <td>Khayat@PIDMCO.ir</td>
                                    <td>تدارکات-نظارت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09124183430</td>
                                    <td>21-88848131</td>
                                    <td>108</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>محمدرضا</td>
                                    <td>روشنی</td>
                                    <td>Roshani@pidmco.ir</td>
                                    <td>مهندسی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09124855165</td>
                                    <td>21-88848131</td>
                                    <td>113</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>مهدی</td>
                                    <td>شاکوهی</td>
                                    <td>shakoohi@pidmco.ir</td>
                                    <td>تدارکات</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09123877901</td>
                                    <td>21-88848131</td>
                                    <td>106</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>مجتبی</td>
                                    <td>پورفتحی</td>
                                    <td>pourfathi@pidmco.ir</td>
                                    <td>رئیس قراردادها</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09128994981</td>
                                    <td>21-88848131</td>
                                    <td>112</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>مجید</td>
                                    <td>ذوالفقاری</td>
                                    <td>zolfaghari@pidmco.ir</td>
                                    <td>برنامه ریزی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09125128697</td>
                                    <td>21-88848131</td>
                                    <td>114</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>مینا</td>
                                    <td>علیمردانی</td>
                                    <td>alimardani@pidmco.ir</td>
                                    <td>تدارکات</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09125163155</td>
                                    <td>21-88848131</td>
                                    <td>107</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>مریم</td>
                                    <td>کاظمی</td>
                                    <td>M-KAZEMI@pidmco.ir</td>
                                    <td>تدارکات</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09129625398</td>
                                    <td>21-88848131</td>
                                    <td>111</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>الهام</td>
                                    <td>صادقی</td>
                                    <td>sadeghi@pidmco.ir</td>
                                    <td>مهندسی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09183655009</td>
                                    <td>21-88848131</td>
                                    <td>112</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>امیرحسام</td>
                                    <td>جهانی</td>
                                    <td>jahani@pidmco.ir</td>
                                    <td>مسئول دفتر</td>
                                    <td>مدیریت پیمان</td>
                                    <td>تهران</td>
                                    <td>09120977366</td>
                                    <td>21-88848131</td>
                                    <td>101</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>اسماعیل</td>
                                    <td>رضایی</td>
                                    <td>rezaie@pidmco.ir</td>
                                    <td>مدیرمهندسی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>شیراز</td>
                                    <td>09171124259</td>
                                    <td>7132112811</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>مهدی</td>
                                    <td>شمسی ثانی</td>
                                    <td>shamsi@pidmco.ir</td>
                                    <td>مهندسی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>شیراز</td>
                                    <td>09153770583</td>
                                    <td>7132112618</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>احمد</td>
                                    <td>فراهانی</td>
                                    <td>farahani@pidmco.ir</td>
                                    <td>مهندسی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>شیراز</td>
                                    <td>09179437637</td>
                                    <td>7132112811</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>الهام</td>
                                    <td>بذرگرزاده</td>
                                    <td>bazregarzadeh@pidmco.ir</td>
                                    <td>مهندسی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>شیراز</td>
                                    <td>09173368600</td>
                                    <td>7132112618</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>مهدی</td>
                                    <td>منصوری</td>
                                    <td>mansouri@pidmco.ir</td>
                                    <td>مهندسی</td>
                                    <td>مدیریت پیمان</td>
                                    <td>شیراز</td>
                                    <td>09178504648</td>
                                    <td>7132112811</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>شهرام</td>
                                    <td>ولیان فر</td>
                                    <td>valyanfar@pidmco.ir</td>
                                    <td>مدیرسایت </td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09125000786</td>
                                    <td>777322314</td>
                                    <td>139</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>حسن</td>
                                    <td>فرنیا</td>
                                    <td>FARNIA@PIDMCO.IR</td>
                                    <td>جانشین سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09123580588</td>
                                    <td>777322765</td>
                                    <td>140</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>احسان</td>
                                    <td>شاهون وند</td>
                                    <td>SHAHONVAND@PIDMCO.IR</td>
                                    <td>مهندسی سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09166435579</td>
                                    <td>777322767</td>
                                    <td>142</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>سیامک</td>
                                    <td>معصومی</td>
                                    <td>masoumi@pidmco.ir</td>
                                    <td>مهندسی سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>شیراز</td>
                                    <td>09127957609</td>
                                    <td>777322767</td>
                                    <td>141</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>احسان</td>
                                    <td>ابوی طرقبه</td>
                                    <td>abavi@pidmco.ir</td>
                                    <td> اداری سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>0919732302</td>
                                    <td>777322767</td>
                                    <td>137</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>جواد</td>
                                    <td>اقلیمی مقدم</td>
                                    <td>eghlimi@pidmco.ir</td>
                                    <td>مهندسی سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09173418754</td>
                                    <td>777322767</td>
                                    <td>142</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>محمدامین</td>
                                    <td>خورشیدی</td>
                                    <td>khorshidi@pidmco.ir</td>
                                    <td>کنترل پروژه سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09177024107</td>
                                    <td>777322765</td>
                                    <td>132</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>حجت</td>
                                    <td>حقیقت</td>
                                    <td>haghighat@pidmco.ir</td>
                                    <td>کنترل پروژه سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09177157432</td>
                                    <td>777322765</td>
                                    <td>132</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>محمد</td>
                                    <td>اقبالی زاده</td>
                                    <td>eghbali@pidmc.ir</td>
                                    <td>مهندسی سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09017741912</td>
                                    <td>777322765</td>
                                    <td>186</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>محمدامین</td>
                                    <td>عابدی</td>
                                    <td>m.abedi@pgapco.ir</td>
                                    <td>مرکز اسناد سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09131068636</td>
                                    <td>777322767</td>
                                    <td>123</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>علی</td>
                                    <td>طاهری</td>
                                    <td>taheri@pidmco.ir</td>
                                    <td>HSE</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09122451025</td>
                                    <td>777322765</td>
                                    <td>112</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>سامان</td>
                                    <td>امیرزاده</td>
                                    <td>AMIRZADEH@PIDMCO.IR</td>
                                    <td>HSE</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09398994103</td>
                                    <td>777322314</td>
                                    <td>112</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>مهران</td>
                                    <td>اسکندری</td>
                                    <td>eskandari@pidmco.ir</td>
                                    <td>انبار</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09168067357</td>
                                    <td>777322314</td>
                                    <td>126</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>داریوش</td>
                                    <td>زرین کلاه</td>
                                    <td>zarinkolah@pidmco.ir</td>
                                    <td>سرپرست انبار</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09173136446</td>
                                    <td>777322767</td>
                                    <td>127</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>یونس</td>
                                    <td>خزایی</td>
                                    <td>khazaei@pidmco.ir</td>
                                    <td>مهندسی سایت</td>
                                    <td>مدیریت پیمان</td>
                                    <td>عسلویه</td>
                                    <td>09386389944</td>
                                    <td>777322765</td>
                                    <td>186</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>جلیل</td>
                                    <td>قسامی</td>
                                    <td>j.ghassami@pgapco.ir</td>
                                    <td>مدیرعامل</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>&nbsp;</td>
                                    <td>2188554793</td>
                                    <td>101</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>مهدی</td>
                                    <td>محمدی نژاد</td>
                                    <td>'m.mohammadinejad@pgapco.ir'</td>
                                    <td>مدیر مالی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09127358757</td>
                                    <td>2188554793</td>
                                    <td>101</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>میلاد</td>
                                    <td>دشتی</td>
                                    <td>m.dashti@pgapco.ir</td>
                                    <td>رئیس برنامه ریزی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09173023585</td>
                                    <td>2188554793</td>
                                    <td>110</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>محسن </td>
                                    <td>امیدواری</td>
                                    <td>'M.omidvari@pgapco.ir'</td>
                                    <td>رئیس امورحقوقی و قرارداد</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09126801266</td>
                                    <td>2188554792</td>
                                    <td>109</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>علیرضا</td>
                                    <td>میری</td>
                                    <td>a.r.miri@pgapco.ir</td>
                                    <td>رئیس تدارکات</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09122469818</td>
                                    <td>2188554792</td>
                                    <td>120</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>سارا</td>
                                    <td>جعفریان</td>
                                    <td>s.jafarian@pgapco.ir</td>
                                    <td>مالی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>-</td>
                                    <td>2188554792</td>
                                    <td>114</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>محبوبه</td>
                                    <td>ظریفی</td>
                                    <td>m.zarifi@pgapco.ir</td>
                                    <td>مالی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>-</td>
                                    <td>2188554792</td>
                                    <td>116</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>محمد</td>
                                    <td>قدمایی</td>
                                    <td>m.ghodamaee@pgapco.ir</td>
                                    <td>IT</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09127692509</td>
                                    <td>2188554792</td>
                                    <td>108</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>وحید</td>
                                    <td>جهان آرا</td>
                                    <td>v.jahanara@pgapco.ir</td>
                                    <td>مالی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09124145028</td>
                                    <td>2188554792</td>
                                    <td>113</td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td>نیکو</td>
                                    <td>رضائی </td>
                                    <td>n.rezaei@pgapco.ir</td>
                                    <td>مسئول دفتر </td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>-</td>
                                    <td>2188554792</td>
                                    <td>101-106</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>رامین</td>
                                    <td>عدنانی</td>
                                    <td>adnani-r@pgapco.ir</td>
                                    <td>مهندسی سایت</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09144078392</td>
                                    <td>&nbsp;</td>
                                    <td>143</td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td>نوید </td>
                                    <td>آزادگان</td>
                                    <td>azadegan.n@pgapco.ir</td>
                                    <td>رئیس گروه متخصصین</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09125027554</td>
                                    <td>&nbsp;</td>
                                    <td>111</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>مجتبی </td>
                                    <td>بابایی</td>
                                    <td>babaie-m@pgapco.ir</td>
                                    <td>کارشناس امورکارکنان</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09133025525</td>
                                    <td>&nbsp;</td>
                                    <td>119</td>
                                </tr>
                                <tr>
                                    <td>49</td>
                                    <td>داراب </td>
                                    <td>شهریاری</td>
                                    <td>d.shahriary@pgapco.ir</td>
                                    <td>مسئول دفتر مدیریت سایت</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09304074627</td>
                                    <td>&nbsp;</td>
                                    <td>102</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>داراب </td>
                                    <td>زارع</td>
                                    <td>d.zare@pgapco.ir</td>
                                    <td>مشاور مدیر عامل در امور ساختمان و نصب </td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09173173682</td>
                                    <td>&nbsp;</td>
                                    <td>104</td>
                                </tr>
                                <tr>
                                    <td>51</td>
                                    <td>ابراهیم </td>
                                    <td>اسماعیل خواه</td>
                                    <td>e.smailikhah@pgapco.ir</td>
                                    <td>ترخیص کار انبار</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09178750901</td>
                                    <td>&nbsp;</td>
                                    <td>114</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td>فرشید </td>
                                    <td>ادهمی</td>
                                    <td>f.adhami@pgapco.ir</td>
                                    <td>مدیر اجرایی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09123984129</td>
                                    <td>7737322326</td>
                                    <td>104</td>
                                </tr>
                                <tr>
                                    <td>53</td>
                                    <td>فرنگیس </td>
                                    <td>علم بلادی</td>
                                    <td>f.alambeladi@pgapco.ir</td>
                                    <td>مسئول دفتر </td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>شیراز</td>
                                    <td>&nbsp;</td>
                                    <td>7132270120</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td>فائق </td>
                                    <td>سرداری</td>
                                    <td>faegh.sardari@pgapco.ir</td>
                                    <td>مدیر اجرایی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>9112814481</td>
                                    <td>&nbsp;</td>
                                    <td>107</td>
                                </tr>
                                <tr>
                                    <td>57</td>
                                    <td>موسی </td>
                                    <td>بیژنی</td>
                                    <td>m.bijani@pgapco.ir</td>
                                    <td>مدیر منابع انسانی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>9177737406</td>
                                    <td>&nbsp;</td>
                                    <td>100-106</td>
                                </tr>
                                <tr>
                                    <td>58</td>
                                    <td>محمد مهدی </td>
                                    <td>فهام</td>
                                    <td>m.faham@pgapco.ir</td>
                                    <td>مشاور مدیر عامل</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>شیراز</td>
                                    <td>09171110998</td>
                                    <td>7132270120</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>59</td>
                                    <td>مهدی </td>
                                    <td>محسنی</td>
                                    <td>&nbsp;</td>
                                    <td>انبار</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>9163731219</td>
                                    <td>&nbsp;</td>
                                    <td>126</td>
                                </tr>
                                <tr>
                                    <td>61</td>
                                    <td>محمد امین </td>
                                    <td>خورشیدی</td>
                                    <td>m.khorshidi@pgapco.ir</td>
                                    <td>کنترل پروژه</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09177024107</td>
                                    <td>&nbsp;</td>
                                    <td>132</td>
                                </tr>
                                <tr>
                                    <td>62</td>
                                    <td>مسعود </td>
                                    <td>محمدی</td>
                                    <td>m.mohammadi@pgapco.ir</td>
                                    <td>اداری</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>تهران</td>
                                    <td>09124770237</td>
                                    <td>&nbsp;</td>
                                    <td>107</td>
                                </tr>
                                <tr>
                                    <td>63</td>
                                    <td>مرجان </td>
                                    <td>رئیسی</td>
                                    <td>m.raiesie@pgapco.ir</td>
                                    <td>منشی دفتر </td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>شیراز</td>
                                    <td>&nbsp;</td>
                                    <td>7132270120</td>
                                    <td>ندارد</td>
                                </tr>
                                <tr>
                                    <td>64</td>
                                    <td>محمد جواد </td>
                                    <td>شوقی</td>
                                    <td>m.shoghi@pgapco.ir</td>
                                    <td>کارشناس منابع انسانی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09102915121</td>
                                    <td>&nbsp;</td>
                                    <td>138</td>
                                </tr>
                                <tr>
                                    <td>65</td>
                                    <td>مسلم </td>
                                    <td>طاهری</td>
                                    <td>m.taheri@pgapco.ir</td>
                                    <td>کارشناس برنامه ریزی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09174951145</td>
                                    <td>&nbsp;</td>
                                    <td>153</td>
                                </tr>
                                <tr>
                                    <td>66</td>
                                    <td>ماهان </td>
                                    <td>توانایی</td>
                                    <td>m.tavanaie@pgapco.ir</td>
                                    <td>کارشناس IT</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09174804348</td>
                                    <td>&nbsp;</td>
                                    <td>187</td>
                                </tr>
                                <tr>
                                    <td>67</td>
                                    <td>میثم </td>
                                    <td>نیازی</td>
                                    <td>niazi-m@pgapco.ir</td>
                                    <td>کارشناس انبار</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09378142828</td>
                                    <td>&nbsp;</td>
                                    <td>121</td>
                                </tr>
                                <tr>
                                    <td>68</td>
                                    <td>سینا </td>
                                    <td>جوادی</td>
                                    <td>s.javadi@pgapco.ir</td>
                                    <td>کارشناس مکانیک</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09120152284</td>
                                    <td>&nbsp;</td>
                                    <td>118</td>
                                </tr>
                                <tr>
                                    <td>69</td>
                                    <td>حمید </td>
                                    <td>شهیدزاده</td>
                                    <td>shahidzadeh-h@pgapco.ir</td>
                                    <td>سرپرست خدمات</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09177713676</td>
                                    <td>&nbsp;</td>
                                    <td>196</td>
                                </tr>
                                <tr>
                                    <td>70</td>
                                    <td>امیر علی</td>
                                    <td>محسنی</td>
                                    <td>&nbsp;</td>
                                    <td>کارشناس کنترل پروژه</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09125613907</td>
                                    <td>&nbsp;</td>
                                    <td>131</td>
                                </tr>
                                <tr>
                                    <td>71</td>
                                    <td>علیرضا</td>
                                    <td>زارعی</td>
                                    <td>&nbsp;</td>
                                    <td>رئیس hse</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09177090171</td>
                                    <td>&nbsp;</td>
                                    <td>222</td>
                                </tr>
                                <tr>
                                    <td>72</td>
                                    <td>مهدی</td>
                                    <td>آقا میری</td>
                                    <td>&nbsp;</td>
                                    <td>کارشناس سیویل</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>9126353828</td>
                                    <td>&nbsp;</td>
                                    <td>143</td>
                                </tr>
                                <tr>
                                    <td>73</td>
                                    <td>محمد رضا</td>
                                    <td>خلیقیان</td>
                                    <td>&nbsp;</td>
                                    <td>مرکز اسناد سایت</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09370465090</td>
                                    <td>&nbsp;</td>
                                    <td>123</td>
                                </tr>
                                <tr>
                                    <td>74</td>
                                    <td>امیر حسین</td>
                                    <td>شاکوئی</td>
                                    <td>a.shakooei@pgapco.ir</td>
                                    <td>جانشین انبار</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09127211336</td>
                                    <td>&nbsp;</td>
                                    <td>202</td>
                                </tr>
                                <tr>
                                    <td>75</td>
                                    <td>بیژن</td>
                                    <td>نیک پارسا</td>
                                    <td>&nbsp;</td>
                                    <td>مسئول خرید</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09179266884</td>
                                    <td>&nbsp;</td>
                                    <td>134</td>
                                </tr>
                                <tr>
                                    <td>76</td>
                                    <td>محمد</td>
                                    <td>برزگر مروستی</td>
                                    <td>&nbsp;</td>
                                    <td>مسئول روابط عمومی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09336618852</td>
                                    <td>&nbsp;</td>
                                    <td>192</td>
                                </tr>
                                <tr>
                                    <td>77</td>
                                    <td>حسین</td>
                                    <td>موسوی زنوزی</td>
                                    <td>mousavi-h@pgapco.ir</td>
                                    <td>کارشناس مکانیک</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09126843722</td>
                                    <td>&nbsp;</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>78</td>
                                    <td>کشواد</td>
                                    <td>کرمی</td>
                                    <td>&nbsp;</td>
                                    <td>خدمات اداری</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09177053126</td>
                                    <td>&nbsp;</td>
                                    <td>122</td>
                                </tr>
                                <tr>
                                    <td>79</td>
                                    <td>حسین </td>
                                    <td>فروغی نسب</td>
                                    <td>&nbsp;</td>
                                    <td>کارشناس hse</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09174006613</td>
                                    <td>&nbsp;</td>
                                    <td>116</td>
                                </tr>
                                <tr>
                                    <td>80</td>
                                    <td>رضا</td>
                                    <td>قزلبلاغی</td>
                                    <td>&nbsp;</td>
                                    <td>ماهنگ کننده پروژه</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09124055324</td>
                                    <td>&nbsp;</td>
                                    <td>190</td>
                                </tr>
                                <tr>
                                    <td>81</td>
                                    <td>سینا </td>
                                    <td>عارف زاده</td>
                                    <td>&nbsp;</td>
                                    <td>کارشناس کنترل پروژه</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>عسلویه</td>
                                    <td>09124026317</td>
                                    <td>&nbsp;</td>
                                    <td>131</td>
                                </tr>
                                <tr>
                                    <td>82</td>
                                    <td>افشین</td>
                                    <td>خوشنام پور</td>
                                    <td>a.khoshnampour@pgapco.ir</td>
                                    <td>مدیر مهندسی</td>
                                    <td>رامپکو خلیج فارس</td>
                                    <td>شیراز</td>
                                    <td>09173235403</td>
                                    <td>7132270120</td>
                                    <td>&nbsp;</td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>        <!--End::Row-->
        <!--End::Dashboard 2-->
    </div>
    <!-- end:: Content -->
    </div>
    </div>

@stop


@section('footerScripts')


    <script src="/assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

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
    </script>



@stop