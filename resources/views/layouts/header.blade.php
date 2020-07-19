<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="/">
            <img style="width: 90px;padding: 10px;" alt="Logo" src="/assets/logo.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">

        <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more-1"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
                <div class="kt-header__top">
                    <div class="kt-container ">
                        <!-- begin:: Brand -->
                        <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                            <div class="kt-header__brand-logo">
                                <a href="/">
                                    <img style="width: 120px;padding: 10px;" alt="Logo" src="/assets/logo.png"
                                         class="kt-header__brand-logo-default"/>
                                    <img style="width: 50px;padding: 1px;" alt="Logo" src="/assets/logo.png"
                                         class="kt-header__brand-logo-sticky"/>
                                </a>
                            </div>
                            <div style="color: #fff" class="kt-header__brand-nav iranyekan">
                                <span>سامانه يكپارچه تصميم ساز مديريت پروژه رامپکو</span>
                            </div>
                        </div>
                        <!-- end:: Brand -->
                        <!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar">
                            <!--begin: Search -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown kt-hidden-desktop"
                                 id="kt_quick_search_toggle">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
			<span class="kt-header__topbar-icon">
				<!--<i class="flaticon2-search-1"></i>-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
              fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>			</span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                    <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                         id="kt_quick_search_dropdown">
                                        <form method="get" class="kt-quick-search__form">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                                class="flaticon2-search-1"></i></span></div>
                                                <input type="text" class="form-control kt-quick-search__input"
                                                       placeholder="Search...">
                                                <div class="input-group-append"><span class="input-group-text"><i
                                                                class="la la-close kt-quick-search__close"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true"
                                             data-height="325" data-mobile-height="200">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Search -->

                            <!--begin: Quick panel -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="اعلان ها" data-placement="left">
                                <div class="kt-header__topbar-wrapper">
			<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
				<!--<i class="flaticon2-cube-1"></i>-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg>			</span>
                                </div>
                            </div>
                            <!--end: Quick panel -->

                            <div class="kt-header__topbar-item ">
                                <div class="kt-header__topbar-wrapper"  data-offset="10px,10px">
                                    <a href="{{ route('Dataentry.index') }}"><span class="kt-header__topbar-icon  kt-pulse kt-pulse--warning">
				<!--<i class="flaticon2-bell-alarm-symbol"></i>-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                         height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">

 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
        <path d="M8.54301601,14.4923287 L10.6661,14.4923287 L10.6661,16.5 C10.6661,16.7761424 10.8899576,17 11.1661,17 L12.33392,17 C12.6100624,17 12.83392,16.7761424 12.83392,16.5 L12.83392,14.4923287 L14.9570039,14.4923287 C15.2331463,14.4923287 15.4570039,14.2684711 15.4570039,13.9923287 C15.4570039,13.8681299 15.41078,13.7483766 15.3273331,13.6563877 L12.1203391,10.1211145 C11.934804,9.91658739 11.6185961,9.90119131 11.414069,10.0867264 C11.4020553,10.0976245 11.390579,10.1091008 11.3796809,10.1211145 L8.1726869,13.6563877 C7.98715181,13.8609148 8.00254789,14.1771227 8.20707501,14.3626578 C8.29906387,14.4461047 8.41881721,14.4923287 8.54301601,14.4923287 Z" fill="#000000"/>
    </g>
                                    </a>

                                    </svg>

                                    <span class="kt-pulse__ring"></span>
                                    </span>


                                </div>



                            </div>





                            <!--begin: Quick actions -->
                            <div class="kt-header__topbar-item dropdown">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
			<span class="kt-header__topbar-icon">
				<!--<i class="flaticon2-gear"></i>-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"/>
        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"/>
        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"/>
        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"/>
    </g>
</svg>			</span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <form>
                                        <!--begin: Head -->
                                        <div class="kt-head kt-head--skin-dark"
                                             style="background-image: url(/assets/media/misc/bg-1.jpg)">
                                            <h3 class="kt-head__title">
                                                دسترسی سریع
                                            </h3>
                                        </div>
                                        <!--end: Head -->

                                        <!--begin: Grid Nav -->
                                        <div class="kt-grid-nav kt-grid-nav--skin-light">
                                            <div class="kt-grid-nav__row">
                                                <a href="{{ route('contacts') }}" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon"><i class="fa fa-users"></i></span>
                                                    <span class="kt-grid-nav__title">Contacts</span>
                                                </a>
                                                <a href="{{ route('edms.index') }}" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon"><i class="fa fa-file-pdf"></i></span>
                                                    <span class="kt-grid-nav__title">EDMS</span>
                                                </a>
                                            </div>
                                            <div class="kt-grid-nav__row">
                                                <a href="{{ route('procurement.avl') }}" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon"><i class="fa fa-truck-loading"></i></span>
                                                    <span class="kt-grid-nav__title">Approved Vendor List</span>
                                                </a>
                                                <a href="#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon"><i class="fa fa-chart-bar"></i></span>
                                                    <span class="kt-grid-nav__title">At A Glance Reports</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end: Grid Nav -->
                                    </form>
                                </div>
                            </div>
                            <!--end: Quick actions -->


                            <!--begin: Language bar -->

                            <!--end: Language bar -->

                            <!--begin: User bar -->
                            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px"
                                     aria-expanded="false">
                                    <span class="kt-header__topbar-username iranyekan"> {{ \Auth::user()->fName . ' ' . \Auth::user()->lName }}</span>
                                    <img class="" alt="Pic" src="{{ \Auth::user()->avatar }}">
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <!--begin: Head -->
                                    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                         style="background-image: url(/assets/media/misc/bg-1.jpg)">
                                        <div class="kt-user-card__avatar">
                                            <img  alt="Pic" src="{{ \Auth::user()->avatar }}"/>
                                        </div>
                                        <div class="kt-user-card__name iranyekan">
                                            {{ \Auth::user()->fName . ' ' . \Auth::user()->lName }}
                                        </div>
                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class="kt-notification">
                                        <a href="/profile"
                                           class="kt-notification__item">
                                            <div class="kt-notification__item-icon">
                                                <i class="flaticon2-calendar-3 kt-font-success"></i>
                                            </div>
                                            <div class="kt-notification__item-details">
                                                <div class="kt-notification__item-title kt-font-bold">
                                                    پروفایل کاربری
                                                </div>
                                                <div class="kt-notification__item-time">
                                                    ویرایش رمز عبور و اطلاعات کاربری
                                                </div>
                                            </div>
                                        </a>

                                        <div class="kt-notification__custom kt-space-between">
                                            <a href="/logout"
                                               class="btn btn-label btn-label-brand btn-sm btn-bold">خروج از سیستم</a>
                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>
                </div>
                <div class="kt-header__bottom">
                    <div class="kt-container ">
                        <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                                    class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                <ul class="kt-menu__nav ">

                                    <li style="" class="kt-menu__item {{ request()->is('/') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }} "
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/" class="kt-menu__link">
                                            <span class="kt-menu__link-text">صفحه اصلی</span>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    </li>

                                    <li class="kt-menu__item {{ request()->is('*glance*') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }} "
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="/glance" class="kt-menu__link">
                                            <span class="kt-menu__link-text">رامپکو در یک نگاه</span>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    </li>



                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel {{ request()->is('*Project*') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }} "
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:"
                                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">پروژه</span><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">


                                                <li class="kt-menu__item {{ request()->is('*Project/dashboard*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                            href="{{ route('pm.dashboard') }}"
                                                            class="kt-menu__link "><span
                                                                class="kt-menu__link-text">داشبورد پروژه </span></a>
                                                </li>

                                                <li class="kt-menu__item  {{ request()->is('*Project/engineering*') ? 'kt-menu__item--active' : '' }}  kt-menu__item--submenu"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:;"
                                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">مدیریت مهندسی </span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">

                                                            <li class="kt-menu__item {{ request()->is('*Project/engineering/dashboard*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href="{{ route('engineering.index') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot "><span></span></i><span
                                                                            class="kt-menu__link-text">داشبورد مهندسی</span></a>
                                                            </li>


                                                            <li class="kt-menu__item {{ request()->is('*Project/engineering/dcc*') ? 'kt-menu__item--active' : '' }} " aria-haspopup="true"><a
                                                                        href="{{ route('dci.index') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot "><span></span></i><span
                                                                            class="kt-menu__link-text">مرکز کنترل اسناد</span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Project/engineering/vpis*') ? 'kt-menu__item--active' : '' }} " aria-haspopup="true"><a
                                                                        href="{{ route('vpis.index') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot "><span></span></i><span
                                                                            class="kt-menu__link-text">مهندسی خرید</span></a>
                                                            </li>



                                                        </ul>
                                                    </div>
                                                </li>


                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Project/procurement*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">مدیریت کالا </span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">


                                                            <li class="kt-menu__item {{ request()->is('*Project/procurement/dashboard*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href="{{ route('procurement.dashboard') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">داشبورد مدیریت کالا</span>
                                                                </a>
                                                            </li>


                                                            <li class="kt-menu__item {{ request()->is('*Project/procurement/sefareshgozari*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href="{{ route('procurement.sefareshgozari') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">سفارش گذاری</span>
                                                                </a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Project/procurement/tasribakhshi*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href="{{ route('procurement.tasribakhshi') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">تسریع بخشی </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Qalishouei/report*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">تست و بازرسی </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Qalishouei/report*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">بیمه  </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Qalishouei/report*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">گمرک </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Qalishouei/report*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">حمل </span></a>
                                                            </li>


                                                            <li class="kt-menu__item {{ request()->is('*Qalishouei/report*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">نگهداری </span></a>
                                                            </li>






                                                        </ul>
                                                    </div>
                                                </li>

                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Sardouzi*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">مدیریت ساختمان و نصب </span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">


                                                            <li class="kt-menu__item {{ request()->is('*construction*') ? 'kt-menu__item--active' : '' }} " aria-haspopup="true"><a
                                                                        href="{{ route('construction.dashboard') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text"> داشبورد ساختمان و نصب </span>
                                                                </a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*construction*') ? 'kt-menu__item--active' : '' }} " aria-haspopup="true"><a
                                                                        href="{{ route('construction.dashboard') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text"> درریز </span>
                                                                </a>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </li>


                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Daarkeshi*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">مدیریت پیش راه اندازی  		</span></a>

                                                </li>

                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Rofougari*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href=""
                                                            class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">مدیریت راه اندازی  		</span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>

                                                </li>



                                            </ul>
                                        </div>
                                    </li>


                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel
                                        {{ request()->is('PM*') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }} "
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:"
                                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">مدیریت پروژه</span><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">


                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Rofougari*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت هزینه 	</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/qc1*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text"> برآورد هزينه  </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/pending*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text"> بودجه بندی </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/pending*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text"> کنترل هزینه و بودجه </span></a>
                                                            </li>



                                                        </ul>
                                                    </div>
                                                </li>



                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Rofougari*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت زمان </span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/qc1*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">برنامه زمانبندی کلی   </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/pending*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">وقایع مهم </span></a>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </li>




                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Rofougari*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت منابع </span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/qc1*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">ماشین آلات  </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/pending*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">نیروی انسانی </span></a>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </li>




                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*risk*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="{{ route('risk.index') }}"
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت ریسک</span><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                </li>



                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*tenders*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت محدوده و قرار دادها</span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">

                                                            <li class="kt-menu__item {{ request()->is('*PM/tender*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href="{{ route('tenders.index') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">مناقصات </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*PM/contracts*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href="{{ route('contracts.index') }}"
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">مدیریت قراردادها </span></a>
                                                            </li>


                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/pending*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">مدیریت تغییرات و ادعا ها </span></a>
                                                            </li>


                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/pending*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">مدیریت صورت وضعیت   </span></a>
                                                            </li>



                                                        </ul>
                                                    </div>
                                                </li>


                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Rofougari*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت کیفیت </span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/qc1*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">بازرسی کالا </span></a>
                                                            </li>

                                                            <li class="kt-menu__item {{ request()->is('*Rofougari/pending*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true"><a
                                                                        href=""
                                                                        class="kt-menu__link "><i
                                                                            class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                                            class="kt-menu__link-text">بازرسی اجرا</span></a>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </li>



                                                <li class="kt-menu__item  kt-menu__item--submenu
                                                    {{ request()->is('*Rofougari*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="javascript:"
                                                            class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت ذی نفعان  </span><i class="kt-menu__hor-arrow la la-angle-right"></i><i
                                                                class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                                                        <ul class="kt-menu__subnav">


                                                        </ul>
                                                    </div>
                                                </li>




                                                <li class="kt-menu__item
                                                    {{ request()->is('*hse*') ? 'kt-menu__item--active' : '' }} "
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="{{ route('hse.index') }}"
                                                            class="kt-menu__link"><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">مدیریت ایمنی و بهداشت  </span></a>
                                                </li>


                                            </ul>
                                        </div>
                                    </li>




                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel
                                        {{ request()->is('*connections*') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }} {{ request()->is('*tdl*') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }}"
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:"
                                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">ارتباطات</span><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">




                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('Connections/video') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="{{ route('video') }}"
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">ویدیو کنفرانس</span></a>
                                                </li>

                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*sell/galleries*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href=""
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">گفتگوی سازمانی </span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*sell/galleries*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href=""
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">ایمیل </span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*sell/galleries*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href=""
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">دوربین های مدار بسته</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*sell/galleries*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href=""
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">اتوماسیون اداری</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*tdl*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="{{ route('tdl.index') }}"
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">مدیریت وظایف</span></a>
                                                </li>




                                            </ul>
                                        </div>
                                    </li>



                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel
                                        {{ request()->is('*Km*') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }}"
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:"
                                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">مدیریت دانش</span><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">


                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*Km/gallery*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href="{{ route('gallery.index') }}"
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">گالری تصاویر </span></a>
                                                </li>

                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*sell/galleries*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href=""
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">درس آموخته ها </span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu  {{ request()->is('*sell/galleries*') ? 'kt-menu__item--active' : '' }}"
                                                    data-ktmenu-submenu-toggle="hover" aria-haspopup="true"><a
                                                            href=""
                                                            class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">مدیریت جلسات</span></a>
                                                </li>




                                            </ul>
                                        </div>
                                    </li>


                                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel
                                        {{ request()->is('administration*') ? 'kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here' : '' }} "
                                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:"
                                                                                                   class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-text">مدیریت سیستم</span><i
                                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">

                                                <li class="kt-menu__item {{ request()->is('*wbs*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true">
                                                    <a href="{{ route('wbs.index') }}" class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span>
                                                        </i><span class="kt-menu__link-text">ساختار شکست پروژه</span></a>
                                                </li>

                                                <li class="kt-menu__item {{ request()->is('*users*') ? 'kt-menu__item--active' : '' }}" aria-haspopup="true">
                                                    <a href="" class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span>
                                                        </i><span class="kt-menu__link-text">مدیریت کاربران</span></a>
                                                </li>
                                                <li style="display: none" class="kt-menu__item " aria-haspopup="true">
                                                    <a href="" class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">مدیریت گروه های کاربری</span>
                                                    </a></li>
                                                <li style="display: none" class="kt-menu__item " aria-haspopup="true">
                                                    <a href="" class="kt-menu__link "><i
                                                                class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">مدیریت سطوح دسترسی</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>



                                    <li class="kt-menu__item  kt-menu__item--rel " data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a target="_blank" href="https://smc.pgapco.ir/standards/stdCategories.html" class="kt-menu__link">
                                            <span class="kt-menu__link-text">   بانک استاندارد ها   <span class="kt-badge kt-badge--success kt-badge--inline ml-2">جدید</span></span>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                    </li>




                                </ul>
                            </div>
                            <div class="kt-header-toolbar">
                                <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact"
                                     {{--id="kt_quick_search_inline">--}}
                                     id="">
                                    <form method="get" class="kt-quick-search__form">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="flaticon2-search-1"></i></span></div>
                                            <input type="text" class="form-control kt-quick-search__input"
                                                   placeholder="جستجو ...">
                                            <div class="input-group-append"><span class="input-group-text"><i
                                                            class="la la-close kt-quick-search__close"
                                                            style="display: none;"></i></span></div>
                                        </div>
                                    </form>
                                    <div id="kt_quick_search_toggle" data-toggle="dropdown"
                                         data-offset="0px,10px"></div>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                        <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true"
                                             data-height="300" data-mobile-height="200">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Header Menu -->
                    </div>
                </div>
            </div>
            <!-- end:: Header -->


            <!-- begin::Quick Panel -->
            <div id="kt_quick_panel" class="kt-quick-panel">
                <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>

                <div class="kt-quick-panel__nav">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">اعلان ها</a>
                        </li>
                        <li style="display: none" class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
                        </li>
                        <li style="display: none" class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
                        </li>
                    </ul>
                </div>

                <div class="kt-quick-panel__content">
                    <div class="tab-content">
                        <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                            <div class="kt-notification">



                                @foreach(Auth::user()->notifications->where('read_at', null) as $notification)

                                    <a href="{{ $notification['data']['url'] }}" class="kt-notification__item">
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title">
                                                تسک جدید برای شما اضافه شد:
                                                <br>
                                              <b>  {{ $notification['data']['title'] }} </b>
                                            </div><br><br>
                                            <div style="font-family: BYekan!important" class="kt-notification__item-time">
                                                {{ jdate($notification->created_at)->ago() }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach






                            </div>
                        </div>
                        <div style="display: none" class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                            <div class="kt-notification-v2">
                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon-bell kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            5 new user generated report
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            Reports based on sales
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon2-box kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            2 new items submited
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            by Grog John
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon-psd kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            79 PSD files generated
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            Reports based on sales
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon2-supermarket kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            $2900 worth producucts sold
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            Total 234 items
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon-paper-plane-1 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            4.5h-avarage response time
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            Fostest is Barry
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon2-information kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            Database server is down
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            10 mins ago
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon2-mail-1 kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            System report has been generated
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            Fostest is Barry
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="kt-notification-v2__item">
                                    <div class="kt-notification-v2__item-icon">
                                        <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification-v2__itek-wrapper">
                                        <div class="kt-notification-v2__item-title">
                                            4.5h-avarage response time
                                        </div>
                                        <div class="kt-notification-v2__item-desc">
                                            Fostest is Barry
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div style="display: none" class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                            <form class="kt-form">
                                <div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>

                                <div class="form-group form-group-xs row">
                                    <label class="col-8 col-form-label">Enable Notifications:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_1">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>
                                <div class="form-group form-group-xs row">
                                    <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_2">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>
                                <div class="form-group form-group-last form-group-xs row">
                                    <label class="col-8 col-form-label">Support Portal:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--success kt-switch--sm">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_2">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>

                                <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                                <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>

                                <div class="form-group form-group-xs row">
                                    <label class="col-8 col-form-label">Generate Reports:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_3">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>
                                <div class="form-group form-group-xs row">
                                    <label class="col-8 col-form-label">Enable Report Export:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_3">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>
                                <div class="form-group form-group-last form-group-xs row">
                                    <label class="col-8 col-form-label">Allow Data Collection:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--danger">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_4">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>

                                <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                                <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>

                                <div class="form-group form-group-xs row">
                                    <label class="col-8 col-form-label">Enable Member singup:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_5">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>
                                <div class="form-group form-group-xs row">
                                    <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox"  name="quick_panel_notifications_5">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>
                                <div class="form-group form-group-last form-group-xs row">
                                    <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                    <div class="col-4 kt-align-right">
                            <span class="kt-switch kt-switch--sm kt-switch--brand">
								<label>
									<input type="checkbox" checked="checked" name="quick_panel_notifications_6">
									<span></span>
                            </label>
                            </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::Quick Panel -->