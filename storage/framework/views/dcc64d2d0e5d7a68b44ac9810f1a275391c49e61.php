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
        
            
                
            
        
        
            
                
            
        
        <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
                <i class="ti-settings"></i>
            </a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        
            
                
                
                    
                
                
                    
                        
                            
                                
                            
                        
                        
                            
                            
                        
                    
                    
                        
                            
                                
                            
                        
                        
                            
                            
                        
                    
                    
                        
                            
                                
                            
                        
                        
                            
                            
                        
                    
                    
                        
                            
                                
                            
                        
                        
                            
                            
                        
                    
                    
                        
                            
                                
                            
                        
                        
                            
                            
                        
                    
                
            
            
                
            
        
        
            
                
                
                    
                    
                        
                            
                                
                                    
                                
                            
                            
                                
                                    
                                    
                                
                                
                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                
                            
                        
                        
                            
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                
                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                
                            
                        
                    
                
                
                    
                    
                        
                            
                                
                                    
                                
                            
                            
                                
                                
                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                
                            
                        
                        
                            
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                
                                    
                                    
                                        
                                    
                                
                            
                        
                        
                            
                                
                                    
                                        
                                    
                                
                            
                            
                                
                                
                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                
                            
                        
                    
                
            
            
                
            
        
        
            
                
                    
                    
                    
                        
                            
                            
                                
                                
                            
                        
                        
                            
                            
                                
                                
                            
                        
                        
                            
                            
                                
                                
                            
                        
                    
                
                
                    
                    
                        
                            
                            
                                
                                
                            
                        
                        
                            
                            
                                
                                
                            
                        
                    
                
                
                    
                    
                        
                            
                            
                                
                                
                            
                        
                        
                            
                            
                                
                                
                            
                        
                        
                            
                            
                                
                                
                            
                        
                        
                            
                            
                                
                                
                            
                        
                    
                
            
            
                
            
        
    </div>
</div>
<!-- end::sidebar -->

<?php echo $__env->make('layouts.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                
                    
                        
                    
                
                
                    
                        
                    
                
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown">
                        <figure class="avatar avatar-sm">
                            <?php if(auth()->user()->image!=null || auth()->user()->image!=''): ?>
                                <img class="rounded-circle" src="/<?php echo e(auth()->user()->image); ?>" alt="...">
                            <?php else: ?>
                                <img class="rounded-circle" src="/admin/assets/media/image/default_user_icon.png" alt="...">
                            <?php endif; ?>
                        </figure>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">پروفایل</a>
                        
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

        <?php echo $__env->yieldContent('content'); ?>

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