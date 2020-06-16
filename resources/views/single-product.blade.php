@extends('layout.layout')

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">خانه</a></li>
                            <li><a href="/shop">فروشگاه</a></li>
                            <li>{{$product['title']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img src="/{{$product['image']}}" data-zoom-image="/{{$product['image']}}"
                                     alt="{{$product['title']}}">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                @foreach($images as $key=>$image)
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update=""
                                           data-image="/{{$image->image}}" data-zoom-image="/{{$image->image}}">
                                            <img src="/{{$image->image}}" alt="zo-th-1">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="/order/save/{{$product['id']}}" method="post">
                            {{csrf_field()}}
                            <h1>{{$product['title']}}</h1>

                            {{--                            <div class=" product_ratting">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><span><i class="fa fa-star"></i></span></li>--}}
                            {{--                                    <li><span><i class="fa fa-star"></i></span></li>--}}
                            {{--                                    <li><span><i class="fa fa-star"></i></span></li>--}}
                            {{--                                    <li><span><i class="fa fa-star"></i></span></li>--}}
                            {{--                                    <li><span><i class="fa fa-star"></i></span></li>--}}
                            {{--                                    <li class="review"><a href="#"> (امتیاز مشتریان) </a></li>--}}
                            {{--                                </ul>--}}

                            {{--                            </div>--}}
                            @if($product->off_rial ==0)
                                <div class="price_box">

                                </div>
                            @else
                                <div class="price_box">
                                    @if($product->off_rial)
                                        <span class="old_price">{{number_format($product->user_price)}} &nbsp; تومان </span>
                                        <span class="current_price">{{number_format($product->off_rial)}} &nbsp; تومان </span>
                                    @else
                                        {{--                                        <span class="old_price">86,000 تومان</span>--}}
                                        <span class="current_price">{{number_format($product->user_price)}} &nbsp; تومان</span>
                                    @endif
                                </div>
                            @endif
                            <div class="product_desc">
                                <p>{{$product->description}}</p>
                            </div>
                            {{--                            <div class="product_variant color">--}}
                            {{--                                <h3>گزینه های در دسترس</h3>--}}
                            {{--                                <label>رنگ</label>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li class="color1">--}}
                            {{--                                        <a href="#"></a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="color2">--}}
                            {{--                                        <a href="#"></a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="color3">--}}
                            {{--                                        <a href="#"></a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="color4">--}}
                            {{--                                        <a href="#"></a>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                                <ul>--}}
                            {{--                                    @foreach($product->colors as $color)--}}
                            {{--                                    <li>{{$color->title}}</li>--}}
                            {{--                                        @endforeach--}}
                            {{--                                </ul>--}}
                            {{--                                --}}
                            {{--                            </div>--}}

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label for="size">رنگ</label>
                                    <select class="form-control" id="size" name="color_id">
                                        @if(count($product->colors)>0)
                                            <option value="0">انتخاب کنید</option>
                                            @foreach($product->colors as $color)
                                                <option value="{{$color->id}}">{{$color->title}}</option>
                                            @endforeach
                                        @else
                                            <option value="0">این محصول رنگ بندی ندارد</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="size">سایز</label>
                                    <select class="form-control" id="size" name="size_id">
                                        @if(count($product->sizes)>0)
                                            <option value="0">انتخاب کنید</option>
                                            @foreach($product->sizes as $size)
                                                <option value="{{$size->id}}">{{$size->title}}</option>
                                            @endforeach
                                        @else
                                            <option value="0">این محصول سایز بندی ندارد</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="product_variant">
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label>تعداد</label>
                                        <input min="1" max="100" value="1" class="form-control" type="number"
                                               name="count_one">
                                    </div>
                                    <div class="col-md-6">
                                        @if(Auth::check())
                                            <button class="button" type="submit"
                                                    style="height: 42px;line-height: 42px;min-width: 270px;margin-top: 30px ;font-size: 16px;border-radius: 5px; !important;">
                                                افزودن به سبد
                                            </button>
                                        @else
                                            <a href="/login" class="btn btn-primary"
                                               style="height: 42px;min-width: 270px;margin-top: 30px ; !important;">برای
                                                ثبت سفارش ابتدا وارد شوید</a>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="افزودن به علاقه‌مندی‌ها">+ افزودن به علاقه‌مندی‌ها</a></li>
                                    <li><a href="#" title="مقایسه">+ مقایسه</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>دسته: <a
                                            href="/productCategory/{{$product->product_category->slug}}">{{$product->product_category->title}}</a></span>
                            </div>

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="فیسبوک"><i class="fa fa-facebook"></i> لایک</a>
                                </li>
                                <li><a class="twitter" href="#" title="توییتر"><i class="fa fa-twitter"></i> توییت</a>
                                </li>
                                <li><a class="pinterest" href="#" title="پینترست"><i class="fa fa-pinterest"></i> ذخیره</a>
                                </li>
                                <li><a class="google-plus" href="#" title="گوگل پلاس"><i class="fa fa-google-plus"></i>
                                        اشتراک گذاری</a></li>
                                <li><a class="telegram" href="#" title="تلگرام"><i class="fa fa-telegram"></i>
                                        تلگرام</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                       aria-selected="false">توضیحات</a>
                                </li>
                                {{--                                <li>--}}
                                {{--                                    <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">مشخصات فنی</a>--}}
                                {{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"--}}
{{--                                       aria-selected="false">نقد و برررسی (1)</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    {!! $product->text !!}
                                </div>
                            </div>
                            {{--                            <div class="tab-pane fade" id="sheet" role="tabpanel">--}}
                            {{--                                <div class="product_d_table">--}}
                            {{--                                    <form action="#">--}}
                            {{--                                        <table>--}}
                            {{--                                            <tbody>--}}
                            {{--                                            <tr>--}}
                            {{--                                                <td class="first_child">جنس</td>--}}
                            {{--                                                <td>پلی استر</td>--}}
                            {{--                                            </tr>--}}
                            {{--                                            <tr>--}}
                            {{--                                                <td class="first_child">سبک ها</td>--}}
                            {{--                                                <td>دخترانه</td>--}}
                            {{--                                            </tr>--}}
                            {{--                                            <tr>--}}
                            {{--                                                <td class="first_child">خصوصیات</td>--}}
                            {{--                                                <td>پیراهن کوتاه</td>--}}
                            {{--                                            </tr>--}}
                            {{--                                            </tbody>--}}
                            {{--                                        </table>--}}
                            {{--                                    </form>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="product_info_content">--}}
                            {{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

{{--                            <div class="tab-pane fade" id="reviews" role="tabpanel">--}}
{{--                                <div class="reviews_wrapper">--}}
{{--                                    <h2>1 نقد و بررسی برای این محصول</h2>--}}
{{--                                    <div class="reviews_comment_box">--}}
{{--                                        <div class="comment_thmb">--}}
{{--                                            <img src="assets/img/blog/comment2.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="comment_text">--}}
{{--                                            <div class="reviews_meta">--}}
{{--                                                <div class="star_rating">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><span><i class="ion-ios-star"></i></span></li>--}}
{{--                                                        <li><span><i class="ion-ios-star"></i></span></li>--}}
{{--                                                        <li><span><i class="ion-ios-star"></i></span></li>--}}
{{--                                                        <li><span><i class="ion-ios-star"></i></span></li>--}}
{{--                                                        <li><span><i class="ion-ios-star"></i></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <p><strong>مدیر </strong>- 12 اذر 1398</p>--}}
{{--                                            </div>--}}
{{--                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از--}}
{{--                                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و--}}
{{--                                                سطرآنچنان که لازم است</p>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <div class="comment_title">--}}
{{--                                        <h2>یک نقد و بررسی بنویسید </h2>--}}
{{--                                        <p>ایمیل شما منتشر نخواهد شد. فیلد های الزامی مشخص شده اند </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_ratting mb-10">--}}
{{--                                        <h3>امتیاز شما</h3>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="fa fa-star"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-star"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-star"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-star"></i></a></li>--}}
{{--                                            <li><a href="#"><i class="fa fa-star"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_review_form">--}}
{{--                                        <form action="#" method="post">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label for="review_comment">نقد و بررسی شما </label>--}}
{{--                                                    <textarea name="comment" id="review_comment"></textarea>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-6 col-md-6">--}}
{{--                                                    <label for="author">نام</label>--}}
{{--                                                    <input id="author" type="text">--}}

{{--                                                </div>--}}
{{--                                                <div class="col-lg-6 col-md-6">--}}
{{--                                                    <label for="email">ایمیل </label>--}}
{{--                                                    <input id="email" type="email" dir="ltr">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <button type="submit">ثبت</button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>محصولات مرتبط</h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                @foreach($product_in_groups as $similar_product)
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="/single-product/{{$similar_product->slug}}"><img
                                            src="/{{$similar_product->image}}" alt="{{$similar_product->title}}"></a>
                                {{--                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>--}}
                                {{--                                <div class="label_product">--}}
                                {{--                                    <span class="label_sale">فروش</span>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="action_links">--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li class="wishlist"><a href="#" title="افزودن به علاقه‌مندی‌ها"><i--}}
                                {{--                                                        class="fa fa-heart-o" aria-hidden="true"></i></a></li>--}}
                                {{--                                        <li class="compare"><a href="#" title="مقایسه"><span class="ion-levels"></span></a>--}}
                                {{--                                        </li>--}}
                                {{--                                        <li class="quick_button">--}}
                                {{--                                            <a href="#" data-toggle="modal" data-target="#" title="مشاهده سریع"> <span--}}
                                {{--                                                        class="ion-ios-search-strong"></span></a>--}}
                                {{--                                        </li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </div>--}}
                                <div class="add_to_cart">
                                    <a href="/single-product/{{$similar_product->slug}}">جزئیات محصول</a>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                @if($product->off_rial ==0)
                                    <div class="price_box">

                                    </div>
                                @else
                                    <div class="price_box">
                                        @if($similar_product->off_rial !=0 || $similar_product->off_percent !=0)
                                            <span class="old_price">{{number_format($similar_product->user_price)}} &nbsp; تومان </span>
                                            <span class="current_price">{{number_format($similar_product->off_rial)}} &nbsp; تومان </span>
                                        @else
                                            {{--                                        <span class="old_price">86,000 تومان</span>--}}
                                            <span class="current_price">{{number_format($similar_product->user_price)}} &nbsp; تومان</span>
                                        @endif
                                    </div>
                                @endif
                                <h3 class="product_name"><a
                                            href="/single-product/{{$similar_product->slug}}">{{$similar_product->title}}</a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!--product area end-->
    <script type="text/javascript">
        @if(Session::get('cart_empty')=='success')
        alert('محصول با موفقیت از سبد خرید حذف شد');
        @endif
        @if(Session::get('product_exist')=='success')
        alert('محصول با این مشخصات قبلا به سبد خرید اضافه شده');
        @endif
        @if(Session::get('add_product')=='success')
        alert('محصول با موفقیت به سبد خرید اضافه شد');
        @endif
        @if(Session::get('product_count')=='namojood')
        alert('متاسفانه محصول با این تعداد موجود نیست');
        @endif
    </script>
@endsection