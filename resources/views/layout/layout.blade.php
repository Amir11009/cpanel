<!DOCTYPE html>
<html class="no-js" lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$settings->title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/{{$settings->favicon}}">
    <!-- ======== Generator Metas ======== -->
    <meta name="author" content="ima-web">
    <meta name="web-developer" content="info@ima-web.com | Fanavaran Ima | https://ima-web.com/">
    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        .hover {
            color: #777;
            text-decoration: none;
        }

        .hover:hover {
            color: #ac32e4;
        }
    </style>

</head>

<body>

<!--header area start-->

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="support_info">
                        <p>تلفن تماس: <a class="ltr-text" href="tel:{{$contact['tel']}}">{{$contact['tel']}}</a></p>
                    </div>
                    <div class="top_right text-right">
                        <ul>
                            @if(Auth::check())
                                <li><i class="fa fa-user" aria-hidden="true">&nbsp;
                                        &nbsp; </i><a>{{Auth::user()->name}}</a></li>
                                <li><i class="fa fa-sign-out" aria-hidden="true"></i> <a href="/logout">
                                        خروج </a></li>
                            @else
                                <li><a href="/login"> حساب کاربری </a></li>
                            @endif
                            {{--                            <li><a href="#"> پرداخت </a></li>--}}
                        </ul>
                    </div>
                    <div class="search_container">
                        <form action="/product/search" method="post">
                            {{csrf_field()}}
                            {{--                            <div class="hover_category">--}}
                            {{--                                <select class="select_option" name="select" id="categori">--}}
                            {{--                                    <option selected value="1">همه دسته ها</option>--}}
                            {{--                                    <option value="2">لوازم جانبی</option>--}}
                            {{--                                    <option value="3">سایر لوازم جانبی</option>--}}
                            {{--                                    <option value="4">قطعات کامپیوتر</option>--}}
                            {{--                                    <option value="5">دوربین و ویدیو </option>--}}
                            {{--                                    <option value="6">صفحه نمایش</option>--}}
                            {{--                                    <option value="7">تبلت ها</option>--}}
                            {{--                                    <option value="8">لپ تاپ ها</option>--}}
                            {{--                                    <option value="9">کیف دستی</option>--}}
                            {{--                                    <option value="10">هدفون و اسپیکر</option>--}}
                            {{--                                    <option value="11">گیاهان دارویی</option>--}}
                            {{--                                    <option value="12">سبزیجات</option>--}}
                            {{--                                    <option value="13">فروشگاه</option>--}}
                            {{--                                    <option value="14">لپ تاپ و کامپیوتر</option>--}}
                            {{--                                    <option value="15">ساعت ها</option>--}}
                            {{--                                    <option value="16">لوازم الکترونیکی</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            <div class="search_box">
                                <input placeholder="جستجوی محصول ..." type="text" name="search">
                                <button type="submit">جستجو</button>
                            </div>
                        </form>
                    </div>
                    <div class="middel_right_info">
                        {{--                        <div class="header_wishlist">--}}
                        {{--                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
                        {{--                            --}}{{--                            <span class="wishlist_quantity">@if(count($order_detail_count) > 0){{$order_detail_count}} @else 0 @endif  </span>--}}
                        {{--                        </div>--}}
                        <div class="middel_right_info">
                            <div class="mini_cart_wrapper">
                                @if(Auth::check())
                                    <a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <i
                                                class="fa fa-angle-down"></i></a>
                                    <span class="cart_quantity">@if($order_count > 0 ) {{$order_detail_count}} @else
                                            0 @endif </span>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="cart_items_container">
                                            @if($order_count == 0 )
                                                <div class="cart_item">
                                                    <div class="cart_info text-center">
                                                        سبد خرید شما خالی است
                                                    </div>
                                                </div>
                                            @else
                                                @foreach($order_details as $key=>$order_detail)
                                                    <div class="cart_item">
                                                        <div class="cart_img">
                                                            <a href="/single-product/{{$order_detail->product->slug}}"><img
                                                                        src="/{{$order_detail->product->image}}"
                                                                        alt="{{$order_detail->product->title}}"></a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <a href="#">{{$order_detail->product->title}}</a>
                                                            <p>تعداد: {{$order_detail->count_one}} × <span> {{number_format($order_detail->product->user_price)}} تومان </span>
                                                            </p>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="/order/removeitem/{{$order_detail->id}}"><i
                                                                        class="ion-android-close"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                        </div>
                                        <div class="mini_cart_table">
                                            <div class="cart_total mt-10">
                                                <span>جمع کل:</span>
                                                <span class="price">
                                                   {{number_format($sum)}} تومان </span>
                                            </div>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button">
                                                <a href="/cart">مشاهده سبد</a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!--mini cart end-->
                                @else
                                    <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children @if(Request::is('/')) active @endif">
                                <a href="/">خانه</a>
                            </li>

                            <li class="menu-item-has-children @if(Request::is('shop')) active @endif">
                                <a href="/shop">محصولات</a>
                            </li>
                            <li class="menu-item-has-children @if(Request::is('article') || Request::is('article-single*')) active @endif">
                                <a href="/article">مقالات</a>
                            </li>
                            {{--                            <li class="menu-item-has-children @if(Request::is('service') || Request::is('article-single*')) active @endif">--}}
                            {{--                                <a href="#">خدمات</a>--}}
                            {{--                            </li>--}}

                            <li class="menu-item-has-children @if(Request::is('about')) active @endif">
                                <a href="/about">درباره ما</a>
                            </li>
                            <li class="menu-item-has-children @if(Request::is('contact')) active @endif">
                                <a href="/contact"> تماس با ما</a>
                            </li>
                        </ul>
                    </div>

                    <div class="Offcanvas_footer">
                        <span><a href="mailto:{{$contact['email']}}"><i class="fa fa-envelope-o"></i>{{$contact['email']}}</a></span>
                        <ul>
                            <li class="facebook"><a href="{{$contact['facebook']}}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter"><a href="{{$contact['twitter']}}"><i class="fa fa-twitter"></i></a></li>
                            <li class="telegram"><a href="{{$contact['telegram']}}"><i class="fa fa-telegram"></i></a>
                            </li>
                            <li class="instagram"><a href="{{$contact['instagram']}}"><i
                                            class="fa fa-instagram"></i></a></li>
                            <li class="linkedin"><a href="{{$contact['linkdin']}}"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="support_info">
                            <p>تلفن تماس: <a class="ltr-text" href="tel:{{$contact['tel']}}">{{$contact['tel']}}</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-right">
                            <ul>
                                @if(Auth::check())
                                    <li><i class="fa fa-user" aria-hidden="true">&nbsp;
                                            &nbsp; </i><a>{{Auth::user()->name}}</a></li>
                                    <li><i class="fa fa-sign-out" aria-hidden="true">&nbsp; &nbsp; </i> <a
                                                href="/logout"> خروج </a></li>
                                @else
                                    <li><a href="/login"> حساب کاربری </a></li>
                                @endif
                                {{--                                <li><a href="#"> پرداخت </a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="/"><img src="/{{$settings->logo_header}}" alt="{{$settings->title}}"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search_container">
                                <form action="/product/search" method="post">
                                    {{csrf_field()}}
                                    {{--                                    <div class="hover_category">--}}
                                    {{--                                        <select class="select_option" name="select" id="categori1">--}}
                                    {{--                                            <option selected value="1">همه دسته ها</option>--}}
                                    {{--                                            <option value="2">لوازم جانبی</option>--}}
                                    {{--                                            <option value="3">سایر لوازم جانبی</option>--}}
                                    {{--                                            <option value="4">قطعات کامپیوتر</option>--}}
                                    {{--                                            <option value="5">دوربین و ویدیو </option>--}}
                                    {{--                                            <option value="6">صفحه نمایش</option>--}}
                                    {{--                                            <option value="7">تبلت ها</option>--}}
                                    {{--                                            <option value="8">لپ تاپ ها</option>--}}
                                    {{--                                            <option value="9">کیف دستی</option>--}}
                                    {{--                                            <option value="10">هدفون و اسپیکر</option>--}}
                                    {{--                                            <option value="11">گیاهان دارویی</option>--}}
                                    {{--                                            <option value="12">سبزیجات</option>--}}
                                    {{--                                            <option value="13">فروشگاه</option>--}}
                                    {{--                                            <option value="14">لپ تاپ و کامپیوتر</option>--}}
                                    {{--                                            <option value="15">ساعت ها</option>--}}
                                    {{--                                            <option value="16">لوازم الکترونیکی</option>--}}
                                    {{--                                        </select>--}}
                                    {{--                                    </div>--}}
                                    <div class="search_box">
                                        <input placeholder="جستجوی محصول ..." type="text" name="search">
                                        <button type="submit">جستجو</button>
                                    </div>
                                </form>
                            </div>
                            <div class="middel_right_info">
                                {{--                                <div class="header_wishlist">--}}
                                {{--                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
                                {{--                                    <span class="wishlist_quantity"></span>--}}
                                {{--                                </div>--}}
                                <div class="mini_cart_wrapper">
                                    @if(Auth::check())
                                        <a href="javascript:void(0)"><i class="fa fa-shopping-bag"
                                                                        aria-hidden="true"></i>
                                            <i class="fa fa-angle-down"></i></a>

                                        <span class="cart_quantity">@if($order_count> 0){{$order_detail_count}} @else
                                                0 @endif  </span>
                                        <!--mini cart-->

                                        <div class="mini_cart">
                                            <div class="cart_items_container">
                                                @if($order_count == 0)
                                                    <div class="cart_item">
                                                        <div class="cart_info text-center">
                                                            سبد خرید شما خالی است
                                                        </div>
                                                    </div>
                                                @else
                                                    @foreach($order_details as $key=>$order_detail)
                                                        <div class="cart_item">
                                                            <div class="cart_img">
                                                                <a href="/single-product/{{$order_detail->product->slug}}"><img
                                                                            src="/{{$order_detail->product->image}}"
                                                                            alt="{{$order_detail->product->title}}"></a>
                                                            </div>
                                                            <div class="cart_info">
                                                                <a href="#">{{$order_detail->product->title}}</a>
                                                                <p>تعداد: {{$order_detail->count_one}} × <span> {{number_format($order_detail->product->user_price)}} تومان </span>
                                                                </p>
                                                            </div>
                                                            <div class="cart_remove">
                                                                <a href="/order/removeitem/{{$order_detail->id}}"><i
                                                                            class="ion-android-close"></i></a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                            </div>
                                            <div class="mini_cart_table">
                                                {{--                                            <div class="cart_total">--}}
                                                {{--                                                <span>جمع اجزا:</span>--}}
                                                {{--                                                <span class="price">138,000 تومان </span>--}}
                                                {{--                                            </div>--}}
                                                <div class="cart_total mt-10">
                                                    <span>جمع کل:</span>
                                                    <span class="price">
                                                   {{number_format($sum)}}             تومان </span>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                                <div class="cart_button">
                                                    <a href="/cart">مشاهده سبد</a>
                                                </div>
                                                {{--                                                <div class="cart_button">--}}
                                                {{--                                                    <a href="#">پرداخت</a>--}}
                                                {{--                                                </div>--}}
                                                @endif
                                            </div>

                                        </div>
                                        <!--mini cart end-->
                                    @else
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        <!--header bottom satrt-->
        <div class="main_menu_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">دسته‌بندی ها</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    @foreach($product_categories as $category)
                                        @if($category->parent_id==0)
                                            <li>
                                                <a href="/productCategory/{{$category->slug}}">{{$category->title}}</a>
                                                <ul>
                                                    @foreach(App\ProductCategory::where('parent_id',$category->id)->get() as $sub_category)
                                                        <li class="ml-5">
                                                            <a href="/productCategory/{{$sub_category->slug}}">{{$sub_category->title}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main_menu menu_position">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="@if(Request::is('/')) active @endif" href="/">خانه</a>
                                    </li>
                                    <li>
                                        <a class="@if(Request::is('shop')) active @endif" href="/shop">محصولات</a>
                                    </li>
                                    <li>
                                        <a class="@if(Request::is('article') || Request::is('article-single*')) active @endif"
                                           href="/article">مقالات</a>
                                    </li>
                                    {{--                                    <li class="menu-item-has-children @if(Request::is('service') || Request::is('article-single*')) active @endif">--}}
                                    {{--                                        <a href="#">خدمات</a>--}}
                                    {{--                                    </li>--}}
                                    <li>
                                        <a class="@if(Request::is('about')) active @endif" href="/about">درباره ما</a>
                                    </li>
                                    <li>
                                        <a class="@if(Request::is('contact')) active @endif" href="/contact"> تماس با
                                            ما</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
<!--header area end-->

<!--sticky header area start-->
<div class="sticky_header_area sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="/"><img src="/{{$settings->logo_header}}" alt="{{$settings->title}}"></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="sticky_header_right menu_position">
                    <div class="main_menu">
                        <nav>
                            <ul>
                                <li>
                                    <a class="@if(Request::is('/')) active @endif" href="/">خانه</a>
                                </li>
                                <li class="@if(Request::is('shop')) active @endif">
                                    <a href="/shop">محصولات</a>
                                </li>
                                <li class="@if(Request::is('article')) active @endif">
                                    <a href="/article">مقالات</a>
                                </li>
                                <li class="@if(Request::is('about')) active @endif"><a href="/about">درباره ما</a></li>
                                <li class="@if(Request::is('contact')) active @endif"><a href="/contact"> تماس با ما</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="middel_right_info">
                        <div class="mini_cart_wrapper">
                            @if(Auth::check())
                                <a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <i
                                            class="fa fa-angle-down"></i></a>
                                <span class="cart_quantity">@if($order_count > 0 ) {{$order_detail_count}} @else
                                        0 @endif </span>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_items_container">
                                        @if($order_count == 0 )
                                            <div class="cart_item">
                                                <div class="cart_info text-center">
                                                    سبد خرید شما خالی است
                                                </div>
                                            </div>
                                        @else
                                            @foreach($order_details as $key=>$order_detail)
                                                <div class="cart_item">
                                                    <div class="cart_img">
                                                        <a href="/single-product/{{$order_detail->product->slug}}"><img
                                                                    src="/{{$order_detail->product->image}}"
                                                                    alt="{{$order_detail->product->title}}"></a>
                                                    </div>
                                                    <div class="cart_info">
                                                        <a href="#">{{$order_detail->product->title}}</a>
                                                        <p>تعداد: {{$order_detail->count_one}} × <span> {{number_format($order_detail->product->user_price)}} تومان </span>
                                                        </p>
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="/order/removeitem/{{$order_detail->id}}"><i
                                                                    class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total mt-10">
                                            <span>جمع کل:</span>
                                            <span class="price">
                                                   {{number_format($sum)}} تومان </span>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="/cart">مشاهده سبد</a>
                                        </div>
                                        {{--                                    <div class="cart_button">--}}
                                        {{--                                        <a href="#">پرداخت</a>--}}
                                        {{--                                    </div>--}}
                                        @endif
                                    </div>
                                </div>
                                <!--mini cart end-->
                            @else
                                <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--sticky header area end-->
@yield('content')
<!--footer area start-->
<footer class="footer_widgets">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            <a href="/"><img src="/{{$settings->logo_footer}}" alt="{{$settings->title}}"></a>
                        </div>
                        <div class="footer_contact">
                            <p><span>آدرس: </span>{{$contact['address']}}</p>
                            <p><span>تلفن تماس: </span><a class="ltr-text"
                                                          href="tel:{{$contact['tel']}}">{{$contact['tel']}}</a></p>
                            <p><span>پشتیبانی: </span><a target="_blank"
                                                         href="mailto:{{$contact['email']}}">{{$contact['email']}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>لینک ها</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="/">خانه</a></li>
                                <li><a href="/shop">محصولات</a></li>
                                <li><a href="/article">مقالات</a></li>
                                <li><a href="/about">درباره ما</a></li>
                                <li><a href="/contact">تماس با ما</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>حساب کاربری</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="/login">حساب کاربری</a></li>
                                <li><a href="/policy">قوانین و مقررات</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container newsletter">
                        <h3>ما را دنبال کنید</h3>
                        <div class="footer_social_link">
                            <ul>
                                <li><a class="facebook" href="{{$contact['facebook']}}" title="فیسبوک"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="{{$contact['twitter']}}" title="توییتر"><i
                                                class="fa fa-twitter"></i></a></li>
                                <li><a class="instagram" href="{{$contact['instagram']}}" title="اینستاگرام"><i
                                                class="fa fa-instagram"></i></a></li>
                                <li><a class="telegram" href="{{$contact['telegram']}}" title="تلگرام"><i
                                                class="fa fa-telegram"></i></a></li>
                                <li><a class="linkedin" href="{{$contact['linkdin']}}" title="تلگرام"><i
                                                class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="subscribe_form">
                            <h3>هم اکنون عضو خبرنامه ما شوید</h3>
                            <form id="mc-form" class="mc-form footer-newsletter" method="post">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="... آدرس ایمیل شما"
                                       dir="ltr">
                                <button id="mc-submit">اشتراک!</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div>
                                <!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div>
                                <!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div>
                                <!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>تمامی حقوق متعلق به وب سایت <a href="/">نیاز پت </a>می باشد </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_payment text-right">
                        <div class="copyright_area">
                            <p style="color:#777;"><a href="https://ima-web.com/"
                                                      style="color:#777;  text-decoration: none;">طراحی سایت </a> و
                                بهینه سازی : <a target="_blank" href="https://ima-web.com/" class="hover">گروه فناوران
                                    ایما</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/assets/img/product/product1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/assets/img/product/product2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/assets/img/product/product3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="/assets/img/product/product5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                               aria-controls="tab1" aria-selected="false"><img
                                                        src="/assets/img/product/product1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                               aria-controls="tab2" aria-selected="false"><img
                                                        src="/assets/img/product/product2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"
                                               aria-controls="tab3" aria-selected="false"><img
                                                        src="/assets/img/product/product3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                               aria-controls="tab4" aria-selected="false"><img
                                                        src="/assets/img/product/product5.jpg" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>گوشی موبایل Xiaomi Mi 9 Lite</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">6,400,000 تومان</span>
                                    <span class="old_price">7,800,000 تومان</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>اندازه</h2>
                                        <select class="select_option">
                                            <option selected value="1">کوچک</option>
                                            <option value="1">متوسط</option>
                                            <option value="1">بزرگ</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>رنگ</h2>
                                        <select class="select_option">
                                            <option selected value="1">بنفش</option>
                                            <option value="1">قرمز</option>
                                            <option value="1">مشکی</option>
                                            <option value="1">صورتی</option>
                                            <option value="1">نارنجی</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1" type="number">
                                            <button type="submit">افزودن به سبد</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>اشتراک گذاری این محصول</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="telegram"><a href="#"><i class="fa fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area end-->

<!--news letter popup start (uncomment lines 772-797 in main.js to show this)-->
<div class="newletter-popup">
    <div id="boxes" class="newletter-container">
        <div id="dialog" class="window">
            <div id="popup2">
                <span class="b-close"><span>بستن</span></span>
            </div>
            <div class="box">
                <div class="newletter-title">
                    <h2>خبرنامه</h2>
                </div>
                <div class="box-content newleter-content">
                    <label class="newletter-label">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراحان گرافیک است.</label>
                    <div id="frm_subscribe">
                        <form name="subscribe" id="subscribe_popup">
                            <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail"
                                   placeholder="آدرس ایمیل خود را وارد کنید ...">
                            <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                            <div id="notification"></div>
                            <a class="theme-btn-outlined" onclick="email_subscribepopup()"><span>اشتراک</span></a>
                        </form>
                        <div class="subscribe-bottom">
                            <input type="checkbox" id="newsletter_popup_dont_show_again">
                            <label for="newsletter_popup_dont_show_again">دیگر این پاپ آپ را نشان نده</label>
                        </div>
                    </div>
                    <!-- /#frm_subscribe -->
                </div>
                <!-- /.box-content -->
            </div>
        </div>

    </div>
    <!-- /.box -->
</div>
<!--news letter popup start-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>


<script>
    @if(Session::get('cart_empty')=='success')
    alert('سفارش با موفقیت حذف شد');
    @endif
</script>

</body>

</html>
