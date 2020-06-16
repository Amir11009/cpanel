<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="fa">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>پروفایل کاربر</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="/admin/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="/admin/assets/js/plugins/media/fancybox.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/forms/selects/select2.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/tables/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="/admin/assets/js/core/app.js"></script>
    <script type="text/javascript" src="/admin/assets/js/pages/gallery_library.js"></script>
    <!-- /theme JS files -->

    <script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="/admin/assets/js/pages/form_inputs.js"></script>

    <script type="text/javascript" src="/admin/assets/js/pages/form_checkboxes_radios.js"></script>

    <script type="text/javascript" src="/admin/assets/js/pages/form_validation.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="/admin/assets/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css"/>

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="/home"><img src="/admin/assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="icon-git-compare"></i>--}}
                    {{--<span class="visible-xs-inline-block position-right">بروزرسانی ها</span>--}}
                    {{--<span class="badge bg-warning-400">9</span>--}}
                {{--</a>--}}

                {{--<div class="dropdown-menu dropdown-content">--}}
                    {{--<div class="dropdown-content-heading">--}}
                        {{--اخرین بروزرسانی ها--}}
                        {{--<ul class="icons-list">--}}
                            {{--<li><a href="#"><i class="icon-sync"></i></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<ul class="media-list dropdown-content-body width-350">--}}
                        {{--<li class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>--}}
                            {{--</div>--}}

                            {{--<div class="media-body">--}}
                                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...--}}
                                {{--<div class="media-annotation">۴ دقیقه قبل</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>--}}
                            {{--</div>--}}

                            {{--<div class="media-body">--}}
                                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...--}}
                                {{--<div class="media-annotation">۳۶ دقیقه قبل</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>--}}
                            {{--</div>--}}

                            {{--<div class="media-body">--}}
                                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...--}}
                                {{--<div class="media-annotation">۲ ساعت قبل</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>--}}
                            {{--</div>--}}

                            {{--<div class="media-body">--}}
                                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...--}}
                                {{--<div class="media-annotation">۱۸:۳۶</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>--}}
                            {{--</div>--}}

                            {{--<div class="media-body">--}}
                                {{--لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...--}}
                                {{--<div class="media-annotation">۰۵:۴۶</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                    {{--<div class="dropdown-content-footer">--}}
                        {{--<a href="#" data-popup="tooltip" title="تمام فعالیت ها"><i class="icon-menu display-block"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cash3"></i>
                    <span class="visible-xs-inline-block position-right">کاربران</span>
                    <span class="badge bg-warning-400">{{auth()->user()->order_score}}</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
امتیاز شما {{auth()->user()->order_score}} می باشد
                        {{--<ul class="icons-list">--}}
                            {{--<li><a href="#">{{auth()->user()->order_score}}</a></li>--}}
                        {{--</ul>--}}
                    </div>

                    {{--<ul class="media-list dropdown-content-body width-300">--}}
                        {{--@foreach($orders as $order)--}}
                        {{--<li class="media">--}}
                            {{--<div class="media-left"><img src="/admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>--}}
                            {{--<div class="media-body">--}}
                                {{--<a href="{{route('order.show',['id'=>$order->id])}}" class="media-heading text-semibold">{{$order->user->name}}</a>--}}
                                {{--<span class="display-block text-muted text-size-small">{{Verta::instance($order->created_at)->formatJalaliDate()}}</span>--}}
                            {{--</div>--}}
                            {{--<div class="media-right media-middle"><span class="status-mark border-success"></span></div>--}}
                        {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}

                    {{--<div class="dropdown-content-footer">--}}
                        {{--<a href="{{route('order.index')}}" data-popup="tooltip" title="تمام سفارشات"><i class="icon-menu display-block"></i></a>--}}
                    {{--</div>--}}
                </div>
            </li>

            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="icon-bubbles4"></i>--}}
                    {{--<span class="visible-xs-inline-block position-right">پیام ها</span>--}}
                    {{--@if($messages->count()>0)--}}
                    {{--<span class="badge bg-warning-400">{{$messages->count()}}</span>--}}
                    {{--@endif--}}
                {{--</a>--}}

                {{--<div class="dropdown-menu dropdown-content width-350">--}}
                    {{--<div class="dropdown-content-heading">--}}
                       {{--پیام جدید--}}
                        {{--<ul class="icons-list">--}}
                            {{--<li><a href="#"><i class="icon-compose"></i></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--@if($messages->count()>0)--}}
                    {{--<ul class="media-list dropdown-content-body">--}}
                        {{--@foreach($messages as $message)--}}
                        {{--<li class="media">--}}
                            {{--<div class="media-left">--}}
                                {{--<img src="/admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">--}}
                                {{--<span class="badge bg-danger-400 media-badge"></span>--}}
                            {{--</div>--}}

                            {{--<div class="media-body">--}}
                                {{--<a href="#" class="media-heading">--}}
                                    {{--<span class="text-semibold">{{$message->user_name}}</span>--}}
                                    {{--<span class="media-annotation pull-right">{{Verta::instance($message->created_at)->format('%A')}}<br>{{Verta::instance($message->created_at)->formatJalaliDate()}}</span>--}}
                                {{--</a>--}}

                                {{--<span class="text-muted">{{$message->message}}</span>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                            {{--<hr>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--@endif--}}

                    {{--<div class="dropdown-content-footer">--}}
                        {{--<a href="/admin/message" data-popup="tooltip" title="تمام پیام ها"><i class="icon-menu display-block"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    {{--<img src="{{auth()->user()->image}}" alt="">--}}
                    <span>
                        {{auth()->user()->name}}
                    </span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i>پروفایل من</a></li>
                    {{--<li><a href="/admin/message"><span class="badge badge-warning pull-right">{{$messages->count()}}</span> <i class="icon-comment-discussion"></i>پیام جدید</a></li>--}}
                    <li class="divider"></li>
                    {{--<li><a href="#"><i class="icon-cog5"></i> تنظیمات حساب کاربری</a></li>--}}
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            <i class="icon-switch2">

                            </i>
                            خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>





                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="/admin/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">{{auth()->user()->name}}</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-user text-size-small"></i> &nbsp;کاربر سایت
                                    <br>
                                    <i class="icon-magic-wand text-size-small"></i> &nbsp;{{auth()->user()->order_score}}&nbsp;امتیاز
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->

                @include('user_layout.aside')

            </div>
        </div>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <div class="page-header">
                @yield('header')
            </div>

            <div class="content">

                @yield('content')

                <!-- Footer -->
                <div class="footer text-muted">
                    <a href="#">طراحی و بهینه سازی </a> توسط <a href="http://www.ima-web.ir" target="_blank">مجموعه طراحی ایما</a>
                </div>
                <!-- /footer -->
            </div>

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->


<!--Sweet alert-->

<script type="text/javascript" src="/admin/assets/bootstrap-sweetalert/sweet-alert.min.js"></script>
{{--<script src="/admin/assets/jquery.sweet-alert.init.js"></script>--}}
<script type="text/javascript" src="/admin/assets/swal.js"></script>
</body>
</html>
