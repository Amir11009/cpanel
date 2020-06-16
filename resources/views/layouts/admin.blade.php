<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سیستم مدیریت محتوا | گروه فناوران ایما</title>

    <!-- begin::global styles -->
    <link rel="stylesheet" href="/admin/assets/vendors/bundle.css" type="text/css">
    <!-- end::global styles -->

    <link rel="stylesheet" href="/admin/assets/vendors/swiper/swiper.min.css">

    <!-- begin::custom styles -->
    <link rel="stylesheet" href="/admin/assets/css/app.css" type="text/css">
    <link rel="stylesheet" href="/admin/assets/css/custom.css" type="text/css">
    <!-- end::custom styles -->

    <!-- begin::select2 -->
    <link rel="stylesheet" href="/admin/assets/vendors/select2/css/select2.min.css" type="text/css">
    <!-- end::select2 -->

    <!-- begin::range slider -->
    <link rel="stylesheet" href="/admin/assets/vendors/range-slider/css/ion.rangeSlider.min.css" type="text/css">
    <!-- end::range slider -->

    <!-- begin::tagsinput -->
    <link rel="stylesheet" href="/admin/assets/vendors/tagsinput/bootstrap-tagsinput.css" type="text/css">
    <!-- end::tagsinput -->

    <!-- begin::favicon -->
    <link rel="shortcut icon" href="/admin/assets/media/image/favicon_ima.png">
    <!-- end::favicon -->

    <!-- begin::theme color -->
    <meta name="theme-color" content="#3f51b5" />
    <!-- end::theme color -->

    <script src="/admin/ckeditor/ckeditor.js"></script>

</head>
<body>

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
    <span>در حال بارگذاری ...</span>
</div>
<!-- end::page loader -->

<!-- begin::sidebar -->
<div class="sidebar">
    <ul class="nav nav-pills nav-justified m-b-30" id="pills-tab" role="tablist">
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" id="messages-tab" data-toggle="pill" href="#messages" role="tab" aria-controls="messages" aria-selected="true">--}}
                {{--<i class="fa fa-envelope"></i>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" id="notifications-tab" data-toggle="pill" href="#notifications" role="tab" aria-controls="notifications" aria-selected="false">--}}
                {{--<i class="fa fa-bell"></i>--}}
            {{--</a>--}}
        {{--</li>--}}
        <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
                <i class="ti-settings"></i>
            </a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        {{--<div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">--}}
            {{--<div class="tab-pane-body">--}}
                {{--<h5 class="font-weight-bold m-b-20">گفتگو ها</h5>--}}
                {{--<form>--}}
                    {{--<input type="text" class="form-control" placeholder="جستجوی گفتگو">--}}
                {{--</form>--}}
                {{--<ul class="list-group list-group-flush">--}}
                    {{--<a href="#" class="list-group-item d-flex align-items-center p-l-r-0">--}}
                        {{--<div>--}}
                            {{--<figure class="avatar avatar-sm m-l-15">--}}
                                {{--<span class="avatar-title bg-whatsapp rounded-circle">V</span>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h6 class="m-b-0">جان اسنو</h6>--}}
                            {{--<span class="text-muted small">مهندس</span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="list-group-item d-flex align-items-center p-l-r-0">--}}
                        {{--<div>--}}
                            {{--<figure class="avatar avatar-sm m-l-15">--}}
                                {{--<img src="/admin/assets/media/image/avatar.jpg" class="rounded-circle" alt="image">--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h6 class="m-b-0">تونی استارک</h6>--}}
                            {{--<span class="text-muted small">منابع انسانی</span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="list-group-item d-flex align-items-center p-l-r-0">--}}
                        {{--<div>--}}
                            {{--<figure class="avatar avatar-sm m-l-15">--}}
                                {{--<span class="avatar-title rounded-circle">M</span>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h6 class="m-b-0">استیو راجرز</h6>--}}
                            {{--<span class="text-muted small">مشاور املاک</span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="list-group-item d-flex align-items-center p-l-r-0">--}}
                        {{--<div>--}}
                            {{--<figure class="avatar avatar-sm m-l-15">--}}
                                {{--<span class="avatar-title rounded-circle">ک</span>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h6 class="m-b-0">پیتر پارکر</h6>--}}
                            {{--<span class="text-muted small">مهندس</span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="list-group-item d-flex align-items-center p-l-r-0">--}}
                        {{--<div>--}}
                            {{--<figure class="avatar avatar-sm m-l-15">--}}
                                {{--<span class="avatar-title bg-warning rounded-circle">V</span>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h6 class="m-b-0">جان اسنو</h6>--}}
                            {{--<span class="text-muted small">مهندس</span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="tab-pane-footer">--}}
                {{--<a href="#" class="btn btn-primary btn-block">گفتگوی جدید</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="tab-pane" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">--}}
            {{--<div class="tab-pane-body">--}}
                {{--<h5 class="font-weight-bold m-b-20">اعلان ها</h5>--}}
                {{--<div>--}}
                    {{--<p class="text-muted">امروز</p>--}}
                    {{--<ul class="list-group list-group-flush m-b-10">--}}
                        {{--<li class="list-group-item d-flex p-l-r-0">--}}
                            {{--<div>--}}
                                {{--<figure class="avatar avatar-xs m-l-10">--}}
                                    {{--<span class="avatar-title bg-success rounded-circle">آ</span>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<p class="m-b-0">--}}
                                    {{--<span class="badge small badge-danger">جدید</span>--}}
                                    {{--ثبت نام کاربر جدید.--}}
                                {{--</p>--}}
                                {{--<ul class="list-inline small">--}}
                                    {{--<li class="list-inline-item text-muted">8 دقیقه پیش</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">علامت خوانده شده</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">مشاهده</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex p-l-r-0">--}}
                            {{--<div>--}}
                                {{--<figure class="avatar avatar-xs m-l-10">--}}
                                    {{--<span class="avatar-title rounded-circle">--}}
                                        {{--<i class="fa fa-cloud-upload"></i>--}}
                                    {{--</span>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<p class="m-b-0">فایل ها با موفقیت آپلود شدند.</p>--}}
                                {{--<ul class="list-inline small">--}}
                                    {{--<li class="list-inline-item text-muted">50 دقیقه پیش</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">علامت خوانده شده</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">مشاهده</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<p class="text-muted">دیروز</p>--}}
                    {{--<ul class="list-group list-group-flush m-b-10">--}}
                        {{--<li class="list-group-item d-flex p-l-r-0">--}}
                            {{--<div>--}}
                                {{--<figure class="avatar avatar-xs m-l-10">--}}
                                    {{--<span class="avatar-title bg-warning rounded-circle">V</span>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<p class="m-b-0">ثبت نام کاربر جدید.</p>--}}
                                {{--<ul class="list-inline small">--}}
                                    {{--<li class="list-inline-item text-muted">5 ساعت پیش</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">علامت خوانده شده</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">مشاهده</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex p-l-r-0">--}}
                            {{--<div>--}}
                                {{--<figure class="avatar avatar-xs m-l-10">--}}
                                    {{--<span class="avatar-title rounded-circle">--}}
                                        {{--<i class="fa fa-file-o"></i>--}}
                                    {{--</span>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<p class="m-b-0">صورتحساب شما آماده شد.</p>--}}
                                {{--<ul class="list-inline small">--}}
                                    {{--<li class="list-inline-item text-muted">10 ساعت پیش</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">علامت خوانده شده</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex p-l-r-0">--}}
                            {{--<div>--}}
                                {{--<figure class="avatar avatar-xs m-l-10">--}}
                                    {{--<span class="avatar-title rounded-circle">--}}
                                        {{--<i class="fa fa-cloud-upload"></i>--}}
                                    {{--</span>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<p class="m-b-0">فایل ها با موفقیت آپلود شدند.</p>--}}
                                {{--<ul class="list-inline small">--}}
                                    {{--<li class="list-inline-item text-muted">16 ساعت پیش</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">علامت خوانده شده</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="list-inline-item">--}}
                                        {{--<a href="#">مشاهده</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="tab-pane-footer">--}}
                {{--<a href="#" class="btn btn-primary btn-block">علامت خوانده شده به همه</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">--}}
            {{--<div class="tab-pane-body">--}}
                {{--<div class="m-b-30">--}}
                    {{--<h5 class="font-weight-bold m-b-20">تنظیمات</h5>--}}
                    {{--<h6 class="font-weight-bold">سیستم</h6>--}}
                    {{--<ul class="list-group list-group-flush">--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>به روز رسانی خودکار</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>--}}
                                {{--<label class="custom-control-label" for="customSwitch1"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>وضعیت کنونی</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch2" checked>--}}
                                {{--<label class="custom-control-label" for="customSwitch2"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>پیشنهادات کاربران</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch3" checked>--}}
                                {{--<label class="custom-control-label" for="customSwitch3"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="m-b-30">--}}
                    {{--<h6 class="font-weight-bold">حساب کاربری</h6>--}}
                    {{--<ul class="list-group list-group-flush">--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>امنیت حساب کاربری ارشد</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch4">--}}
                                {{--<label class="custom-control-label" for="customSwitch4"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>حفاظت حساب کاربری</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch5" checked>--}}
                                {{--<label class="custom-control-label" for="customSwitch5"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="m-b-30">--}}
                    {{--<h6 class="font-weight-bold">اعلان ها</h6>--}}
                    {{--<ul class="list-group list-group-flush">--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>اعلان های مرورگر</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch6">--}}
                                {{--<label class="custom-control-label" for="customSwitch6"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>اعلان های موبایل</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch7">--}}
                                {{--<label class="custom-control-label" for="customSwitch7"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>اشتراک ایمیل</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch8">--}}
                                {{--<label class="custom-control-label" for="customSwitch8"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item d-flex justify-content-between p-l-r-0">--}}
                            {{--<span>اعلان های sms</span>--}}
                            {{--<div class="custom-control custom-switch">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customSwitch9" checked>--}}
                                {{--<label class="custom-control-label" for="customSwitch9"></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="tab-pane-footer">--}}
                {{--<a href="#" class="btn btn-primary btn-block">ذخیره تنظیمات</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
<!-- end::sidebar -->

@include('layouts.aside')

<!-- begin::navbar -->
<nav class="navbar">
    <div class="container-fluid">

        <div class="header-logo">
            <a href="https://ima-web.com" target="_blank">
                <img src="/admin/assets/media/image/light-logo_ima.png" alt="سیستم مدیریت محتوا فناوران ایما">
                <span class="logo-text d-none d-lg-block">گروه فناوران ایما</span>
            </a>
        </div>

        <div class="header-body">
            {{--<ul class="navbar-nav">--}}
                {{--<li class="nav-item dropdown d-none d-lg-block">--}}
                    {{--<a href="#" class="nav-link" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-th-large"></i>--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-nav-grid">--}}
                        {{--<div class="dropdown-menu-title">منوی سریع</div>--}}
                        {{--<div class="dropdown-menu-body">--}}
                            {{--<div class="nav-grid">--}}
                                {{--<div class="nav-grid-row">--}}
                                    {{--<a href="#" class="nav-grid-item">--}}
                                        {{--<i class="fa fa-address-book-o"></i>--}}
                                        {{--<span>نرم افزار</span>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="nav-grid-item">--}}
                                        {{--<i class="fa fa-envelope-o"></i>--}}
                                        {{--<span>ایمیل</span>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="nav-grid-row">--}}
                                    {{--<a href="#" class="nav-grid-item">--}}
                                        {{--<i class="fa fa-sticky-note"></i>--}}
                                        {{--<span>گفتگو</span>--}}
                                    {{--</a>--}}
                                    {{--<a href="#" class="nav-grid-item">--}}
                                        {{--<i class="fa fa-dashboard"></i>--}}
                                        {{--<span>داشبورد</span>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
            <form class="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="جستجو ..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn" type="button" id="button-addon2">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="d-lg-none d-sm-block nav-link search-panel-open">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link nav-link-notify sidebar-open" data-sidebar-target="#messages">--}}
                        {{--<i class="fa fa-envelope"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a href="#" class="nav-link nav-link-notify sidebar-open" data-sidebar-target="#notifications">--}}
                        {{--<i class="fa fa-bell"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown">
                        <figure class="avatar avatar-sm">
                            @if(auth()->user()->image!=null || auth()->user()->image!='')
                                <img class="rounded-circle" src="/{{auth()->user()->image}}" alt="...">
                            @else
                                <img class="rounded-circle" src="/admin/assets/media/image/default_user_icon.png" alt="...">
                            @endif
                        </figure>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">پروفایل</a>
                        {{--<a href="#" data-sidebar-target="#settings" class="sidebar-open dropdown-item">تنظیمات</a>--}}
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="text-danger dropdown-item">خروج</a>
                    </div>
                </li>
                <li class="nav-item d-lg-none d-sm-block">
                    <a href="#" class="nav-link side-menu-open">
                        <i class="ti-menu"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- end::navbar -->

<!-- begin::main content -->
<main class="main-content">

    <div class="container-fluid">

        @yield('content')

    </div>

</main>
<!-- end::main content -->

<!-- begin::global scripts -->
<script src="/admin/assets/vendors/bundle.js"></script>
<!-- end::global scripts -->

<!-- begin::chart -->
<script src="/admin/assets/vendors/charts/chart.min.js"></script>
<script src="/admin/assets/vendors/charts/sparkline.min.js"></script>
<script src="/admin/assets/vendors/circle-progress/circle-progress.min.js"></script>
<script src="/admin/assets/js/examples/charts.js"></script>
<!-- end::chart -->

<!-- begin::dataTable -->
<script src="/admin/assets/vendors/dataTable/jquery.dataTables.min.js"></script>
<script src="/admin/assets/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="/admin/assets/vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="/admin/assets/js/examples/datatable.js"></script>
<!-- end::dataTable -->

<!-- begin::swiper -->
<script src="/admin/assets/vendors/swiper/swiper.min.js"></script>
<script src="/admin/assets/js/examples/swiper.js"></script>
<!-- end::swiper -->

<!-- begin::select2 -->
<script src="/admin/assets/vendors/select2/js/select2.min.js"></script>
<script src="/admin/assets/js/examples/select2.js"></script>
<!-- end::select2 -->

<!-- begin::range slider -->
<script src="/admin/assets/vendors/range-slider/js/ion.rangeSlider.min.js"></script>
<script src="/admin/assets/js/examples/range-slider.js"></script>
<!-- end::range slider -->

<!-- begin::input mask -->
<script src="/admin/assets/vendors/input-mask/jquery.mask.js"></script>
<script src="/admin/assets/js/examples/input-mask.js"></script>
<!-- end::input mask -->

<!-- begin::input mask -->
<script src="/admin/assets/vendors/tagsinput/bootstrap-tagsinput.js"></script>
<script src="/admin/assets/js/examples/tagsinput.js"></script>
<!-- end::input mask -->

<!-- begin::custom scripts -->
<script src="/admin/assets/js/custom.js"></script>
<script src="/admin/assets/js/app.js"></script>
<!-- end::custom scripts -->

</body>
</html>