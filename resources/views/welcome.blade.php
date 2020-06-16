@extends('layout.layout')
@section('content')
    <!--slider area start-->
    <section class="slider_section mb-70">
        <div class="slider_area owl-carousel">
            @foreach($sliders as $slider)
                <div class="single_slider d-flex align-items-center"
                     style="background-image: url(/{{$slider->image}}) !important;" data-bgimg="/{{$slider->image}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    {{--                                <h1>{{$slider->title}}</h1>--}}
                                    <h2>{{$slider->text}}</h2>
                                    <p>{{$slider->title}}</p>
                                    <a class="button" href="{{$slider->btn_link1}}">{{$slider->btn_text1}}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
    <!--slider area end-->

    <!--shipping area start-->
    <section class="shipping_area mb-70">

    </section>
    <!--shipping area end-->

    <!--banner area start-->
    <div class="banner_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="/productCategory/%D9%81%D8%B1%D9%88%D8%B4-%D8%B9%D9%85%D8%AF%D9%87"><img
                                        src="/assets/img/bg/banner-3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="/productCategory/%D8%AD%D9%85%D8%A7%DB%8C%D8%AA%DB%8C"><img
                                        src="/assets/img/bg/banner-5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="/productCategory/%D9%81%D8%B1%D9%88%D8%B4-%D8%AA%DA%A9%DB%8C"><img
                                        src="/assets/img/bg/banner-1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>پیشنهاد های ویژه</h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                @foreach($special_products as $special_product)
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="/single-product/{{$special_product->product->slug}}"><img
                                            src="/{{$special_product->product->image}}"
                                            alt="{{$special_product->product->title}}"></a>
                                {{--                                    <a class="secondary_img" ><img--}}
                                {{--                                                src="/{{$image->image}}" alt="{{$special_product->product->title}}"></a>--}}
                                <div class="label_product">
                                    <span class="label_sale">ویژه</span>
                                </div>
{{--                                <div class="action_links">--}}
{{--                                    <ul>--}}
{{--                                        <li class="wishlist"><a title="افزودن به علاقه‌مندی‌ها"><i--}}
{{--                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>--}}
{{--                                        <li class="compare"><a title="مقایسه"><span class="ion-levels"></span></a>--}}
{{--                                        </li>--}}
{{--                                        <li class="quick_button">--}}
{{--                                            <a data-toggle="modal" data-target="#modal_box"--}}
{{--                                               title="مشاهده سریع"> <span class="ion-ios-search-strong"></span></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <div class="add_to_cart">
                                    <a href="/single-product/{{$special_product->product->slug}}">جزئیات محصول</a>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="2043/12/15"></div>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                @if($special_product->product->user_price == 0)
                                    <div class="price_box">

                                    </div>
                                @else
                                    <div class="price_box">
                                        @if($special_product->product->off_rial)
                                            <span class="old_price">{{number_format($special_product->product->user_price)}} &nbsp; تومان </span>
                                            <span class="current_price">{{number_format($special_product->product->off_rial)}} &nbsp; تومان </span>
                                        @else
                                            <span class="current_price">{{number_format($special_product->product->user_price)}} &nbsp; تومان </span>
                                        @endif
                                    </div>
                                @endif

                                <h3 class="product_name">
                                    <a href="/single-product/{{$special_product->product->slug}}">{{$special_product->product->title}}
                                    </a></h3>
                            </figcaption>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--top- category area start-->
    {{--    <section class="top_category_product mb-70">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-2 col-md-3">--}}
    {{--                    <div class="top_category_header">--}}
    {{--                        <h3>محبوب ترین دسته های این هفته</h3>--}}
    {{--                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>--}}
    {{--                        <a href="/shop">محصولات</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-10 col-md-9">--}}
    {{--                    <div class="top_category_container category_column5 owl-carousel">--}}
    {{--                        <div class="col-lg-2">--}}
    {{--                            <article class="single_category">--}}
    {{--                                <figure>--}}
    {{--                                    <div class="category_thumb">--}}
    {{--                                        <a ><img src="/assets/img/s-product/category1.jpg" alt=""></a>--}}
    {{--                                    </div>--}}
    {{--                                    <figcaption class="category_name">--}}
    {{--                                        <h3><a >بازی و کنسول </a></h3>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </article>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-2">--}}
    {{--                            <article class="single_category">--}}
    {{--                                <figure>--}}
    {{--                                    <div class="category_thumb">--}}
    {{--                                        <a ><img src="/assets/img/s-product/category2.jpg" alt=""></a>--}}
    {{--                                    </div>--}}
    {{--                                    <figcaption class="category_name">--}}
    {{--                                        <h3><a >لوازم خانگی</a></h3>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </article>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-2">--}}
    {{--                            <article class="single_category">--}}
    {{--                                <figure>--}}
    {{--                                    <div class="category_thumb">--}}
    {{--                                        <a ><img src="/assets/img/s-product/category3.jpg" alt=""></a>--}}
    {{--                                    </div>--}}
    {{--                                    <figcaption class="category_name">--}}
    {{--                                        <h3><a >صوتی و تصویری</a></h3>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </article>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-2">--}}
    {{--                            <article class="single_category">--}}
    {{--                                <figure>--}}
    {{--                                    <div class="category_thumb">--}}
    {{--                                        <a ><img src="/assets/img/s-product/category4.jpg" alt=""></a>--}}
    {{--                                    </div>--}}
    {{--                                    <figcaption class="category_name">--}}
    {{--                                        <h3><a >بازی و کنسول </a></h3>--}}
    {{--                                    </figcaption>--}}
    {{--                                </figure>--}}
    {{--                            </article>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!--top- category area end-->

    <!--featured product area start-->
    <section class="featured_product_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>محصولات جدید</h2>
                    </div>
                </div>
            </div>
            <div class="row featured_container featured_column3">
                @foreach($new_products as $new_product)
                    <div class="col-lg-4">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="/single-product/{{$new_product->product->slug}}"><img
                                                src="/{{$new_product->product->image}}" alt=""></a>
                                    {{--                                <a class="secondary_img" href="product-details.html"><img--}}
                                    {{--                                            src="/assets/img/product/product14.jpg" alt=""></a>--}}
                                    <div class="label_product">
                                        <span class="label_sale">جدید</span>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    @if($new_product->product->off_rial ==0)
                                        <div class="price_box">

                                        </div>
                                    @else
                                        <div class="price_box">
                                            @if($new_product->product->off_rial)
                                                <span class="old_price">{{number_format($new_product->product->user_price)}} &nbsp; تومان </span>
                                                <span class="current_price">{{number_format($new_product->product->off_rial)}} &nbsp; تومان </span>
                                            @else
                                                {{--                                        <span class="old_price">86,000 تومان</span>--}}
                                                <span class="current_price">{{number_format($new_product->product->user_price)}} &nbsp; تومان</span>
                                            @endif
                                        </div>
                                    @endif
                                    <h3 class="product_name"><a
                                                href="/single-product/{{$new_product->product->slug}}">{{$new_product->product->title}}</a>
                                    </h3>
                                    <div class="add_to_cart">
                                        <a href="/single-product/{{$new_product->product->slug}}"
                                           >جزئیات
                                            محصول</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--featured product area end-->

    <!--banner area start-->
    <div class="banner_area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner7.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="product_left_area">
                        <div class="section_title">
                            <h2>بزودی</h2>
                        </div>
                        <div class="product_carousel product_column4 owl-carousel">
                            @foreach($new_product_last as $latest_product)
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                               href="/single-product/{{$latest_product->product->slug}}"><img
                                                        src="/{{$latest_product->product->image}}" alt=""></a>
                                            {{--                                        <a class="secondary_img" href="product-details.html"><img--}}
                                            {{--                                                    src="/assets/img/product/product2.jpg" alt=""></a>--}}
                                            <div class="label_product">

                                                <span class="label_sale">جدید</span>
                                            </div>
                                            {{--                                            <div class="action_links">--}}
                                            {{--                                                <ul>--}}
                                            {{--                                                    <li class="wishlist"><a--}}
                                            {{--                                                                title="افزودن به علاقه‌مندی‌ها"><i--}}
                                            {{--                                                                    class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                    <li class="compare"><a title="مقایسه"><span--}}
                                            {{--                                                                    class="ion-levels"></span></a></li>--}}
                                            {{--                                                    <li class="quick_button">--}}
                                            {{--                                                        <a data-toggle="modal" data-target="#modal_box"--}}
                                            {{--                                                           title="مشاهده سریع"> <span--}}
                                            {{--                                                                    class="ion-ios-search-strong"></span></a>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                </ul>--}}
                                            {{--                                            </div>--}}
                                            <div class="add_to_cart">
                                                <a href="/single-product/{{$latest_product->product->slug}}"
                                                >جزئیات محصول</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            @if($latest_product->product->user_price == 0)
                                                <div class="price_box">

                                                </div>
                                            @else
                                                <div class="price_box">
                                                    @if($latest_product->product->off_rial)
                                                        <span class="old_price">{{number_format($latest_product->product->user_price)}} &nbsp; تومان </span>
                                                        <span class="current_price">{{number_format($latest_product->product->off_rial)}} &nbsp; تومان </span>
                                                    @else
                                                        {{--                                        <span class="old_price">86,000 تومان</span>--}}
                                                        <span class="current_price">{{number_format($latest_product->product->user_price)}} &nbsp; تومان</span>
                                                    @endif
                                                </div>
                                            @endif
                                            <h3 class="product_name"><a
                                                        href="/single-product/{{$latest_product->product->slug}}">{{$latest_product->product->title}}
                                                </a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <!--testimonials section start-->
                    <div class="testimonial_are">
                        <div class="section_title">
                            <h2>دیدگاه مشتریان</h2>
                        </div>
                        <div class="testimonial_active owl-carousel">
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>محصولات متنوعی دارید.</p>
                                        <h3><a> آذر </a><span></span></h3>
                                    </figcaption>

                                </figure>
                            </article>
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>ممنون از ارسال سریع محصول</p>
                                        <h3><a>علی</a></h3>
                                    </figcaption>

                                </figure>
                            </article>
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>محصول جدیداتون کی میرسن؟!</p>
                                        <h3><a>سعید</a></h3>
                                    </figcaption>

                                </figure>
                            </article>
                        </div>
                    </div>
                    <!--testimonials section end-->
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--blog area start-->
    <section class="blog_section mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>مقالات</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column4 owl-carousel">
                    @foreach($articles as $article)
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="/article-single/{{$article->slug}}"><img
                                                    src="/{{$article->main_image}}" alt="{{$article->title}}"></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <p class="post_author"><a
                                            ></a>{{Verta::instance($article->created_at)->format('%d %B %Y')}}
                                        </p>
                                        <h3 class="post_title"><a
                                                    href="/article-single/{{$article->slug}}">{{$article->title}}</a>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->

    <!--brand area start-->
    <div class="brand_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">

                        @foreach($brands as $brand)
                            <div class="brand_items">
                                <div class="single_brand">
                                    <a href="{{$brand->brand_link}}"><img src="/{{$brand->image}}"
                                                                          alt="{{$brand->title}}"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
@endsection