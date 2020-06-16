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
                            <li>فروشگاه</li>
                            @if(isset($product_cat))
                                <li>{{$product_cat->title}}</li>
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip"
                                    title="3"></button>

                            <button data-role="grid_4" type="button" class=" btn-grid-4" data-toggle="tooltip"
                                    title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                                    title="لیست"></button>
                        </div>
                        <div class="niceselect_container">
                            <form action="#">
                                <label>ترتیب:</label>
                                <select class="select_option" name="orderby" id="short">
                                    <option selected value="1">امتیاز متوسط</option>
                                    <option value="2">محبوبیت</option>
                                    <option value="3">تعداد فروش</option>
                                    <option value="4">قیمت صعودی</option>
                                    <option value="5">قیمت نزولی</option>
                                    <option value="6">نام محصول</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>نمایش 1-12 از 24 محصول</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <div class="row shop_wrapper">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="/single-product/{{$product->slug}}"><img
                                                        src="/{{$product->image}}" alt="{{$product->title}}"></a>
                                            {{--                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>--}}
                                            {{--                                            <div class="label_product">--}}
                                            {{--                                                <span class="label_sale">فروش</span>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="action_links">--}}
                                            {{--                                                <ul>--}}
                                            {{--                                                    <li class="wishlist"><a href="#" title="افزودن به علاقه‌مندی‌ها"><i--}}
                                            {{--                                                                    class="fa fa-heart-o" aria-hidden="true"></i></a>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                    <li class="compare"><a href="#" title="مقایسه"><span--}}
                                            {{--                                                                    class="ion-levels"></span></a></li>--}}
                                            {{--                                                    --}}{{--                                                <li class="quick_button">--}}
                                            {{--                                                    --}}{{--                                                    <a href="#" data-toggle="modal" data-target="#modal_box" title="مشاهده سریع"> <span class="ion-ios-search-strong"></span></a>--}}
                                            {{--                                                    --}}{{--                                                </li>--}}
                                            {{--                                                </ul>--}}
                                            {{--                                            </div>--}}
                                            <div class="add_to_cart">
                                                <a href="/single-product/{{$product->slug}}">جزئیات محصول</a>
                                            </div>
                                        </div>
                                        <div class="product_content grid_content">
                                            @if($product->user_price == 0)
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
                                            {{--                                        <div class="product_ratings">--}}
                                            {{--                                            <ul>--}}
                                            {{--                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                            {{--                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                            {{--                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                            {{--                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                            {{--                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                            {{--                                            </ul>--}}
                                            {{--                                        </div>--}}
                                            <h3 class="product_name grid_name"><a
                                                        href="single-product/{{$product->slug}}">{{$product->title}}</a>
                                            </h3>
                                        </div>
                                        <div class="product_content list_content">
                                            <div class="left_caption">
                                                @if($product->user_price == 0)
                                                    <div class="price_box">

                                                    </div>
                                                @else
                                                <div class="price_box">
                                                    @if($product->off_rial !=0 || $product->off_percent !=0)
                                                        <span class="old_price">{{number_format($product->user_price)}} &nbsp; تومان </span>
                                                        <span class="current_price">{{number_format($product->off_rial)}} &nbsp; تومان </span>
                                                    @else
                                                        {{--                                        <span class="old_price">86,000 تومان</span>--}}
                                                        <span class="current_price">{{number_format($product->user_price)}} &nbsp; تومان</span>
                                                    @endif
                                                </div>
                                                @endif
                                                <h3 class="product_name"><a
                                                            href="single-product/{{$product->slug}}">{{$product->title}}</a>
                                                </h3>
                                                {{--                                            <div class="product_ratings">--}}
                                                {{--                                                <ul>--}}
                                                {{--                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                                {{--                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                                {{--                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                                {{--                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                                {{--                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                                                {{--                                                </ul>--}}
                                                {{--                                            </div>--}}
                                                <div class="product_desc">
                                                    <p>{{$product->description}}</p>
                                                </div>
                                            </div>
                                            <div class="right_caption">
                                                <div class="add_to_cart">
                                                    <a href="/single-product/{{$product->slug}}">جزئیات محصول</a>
                                                </div>
                                                {{--                                                <div class="action_links">--}}
                                                {{--                                                    <ul>--}}
                                                {{--                                                        <li class="wishlist">--}}
                                                {{--                                                            <a href="#" title="افزودن به علاقه‌مندی‌ها">--}}
                                                {{--                                                                <i class="fa fa-heart-o" aria-hidden="true">--}}
                                                {{--                                                                </i> افزودن به علاقه‌مندی‌ها</a></li>--}}
                                                {{--                                                        <li class="compare">--}}
                                                {{--                                                            <a href="#" title="مقایسه"><span class="ion-levels"></span>--}}
                                                {{--                                                                مقایسه</a></li>--}}
                                                {{--                                                        --}}{{--                                                    <li class="quick_button">--}}
                                                {{--                                                        --}}{{--                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="مشاهده سریع">--}}
                                                {{--                                                        --}}{{--                                                            <span class="ion-ios-search-strong"></span> نمایش سریع</a>--}}
                                                {{--                                                        --}}{{--                                                    </li>--}}
                                                {{--                                                    </ul>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>



                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            {{$products->links("pagination::bootstrap-4")}}
                            {{--                            <ul>--}}
                            {{--                                <li class="current"><span>1</span></li>--}}
                            {{--                                <li><a href="#">2</a></li>--}}
                            {{--                                <li><a href="#">3</a></li>--}}
                            {{--                                <li class="next"><a href="#">بعدی</a></li>--}}
                            {{--                                <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>--}}
                            {{--                            </ul>--}}
                        </div>
                    </div>

                <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h2>دسته بندی محصولات</h2>
                                <ul> @foreach($product_categories as $category)
                                        @if($category->parent_id==0)
                                            <li>
                                                <a href="/productCategory/{{$category->slug}}">{{$category->title}}</a>
                                                <ul>
                                                    @foreach(App\ProductCategory::where('parent_id',$category->id)->get() as $sub_category)
                                                        <li>
                                                            <a href="/productCategory/{{$sub_category->slug}}">{{$sub_category->title}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h2>فیلتر با قیمت</h2>
                                <form action="">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount">
                                    <button type="submit">فیلتر</button>
                                    <input type="hidden" id="price-min" name="price_min">
                                    <input type="hidden" id="price-max" name="price_max">
                                </form>
                            </div>
                            {{--                            <div class="widget_list">--}}
                            {{--                                <h2>مقایسه محصولات</h2>--}}
                            {{--                                <div class="recent_product_container">--}}
                            {{--                                    <article class="recent_product_list">--}}
                            {{--                                        <figure>--}}
                            {{--                                            <div class="product_thumb">--}}
                            {{--                                                <a href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="product_content">--}}
                            {{--                                                <h3><a href="product-details.html">گوشی موبایل شیائومی</a></h3>--}}
                            {{--                                                <div class="product_ratings">--}}
                            {{--                                                    <ul>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="price_box">--}}
                            {{--                                                    <span class="old_price">70,000 تومان</span>--}}
                            {{--                                                    <span class="current_price">65,000 تومان</span>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </figure>--}}
                            {{--                                    </article>--}}
                            {{--                                    <article class="recent_product_list">--}}
                            {{--                                        <figure>--}}
                            {{--                                            <div class="product_thumb">--}}
                            {{--                                                <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="product_content">--}}
                            {{--                                                <h3><a href="product-details.html">هندزفری بیسیم سونی</a></h3>--}}
                            {{--                                                <div class="product_ratings">--}}
                            {{--                                                    <ul>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="price_box">--}}
                            {{--                                                    <span class="old_price">70,000 تومان</span>--}}
                            {{--                                                    <span class="current_price">65,000 تومان</span>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </figure>--}}
                            {{--                                    </article>--}}
                            {{--                                    <article class="recent_product_list">--}}
                            {{--                                        <figure>--}}
                            {{--                                            <div class="product_thumb">--}}
                            {{--                                                <a href="product-details.html"><img src="assets/img/product/product24.jpg" alt=""></a>--}}
                            {{--                                            </div>--}}
                            {{--                                            <div class="product_content">--}}
                            {{--                                                <h3><a href="product-details.html">اسپیکر بلوتوثی Anker</a></h3>--}}
                            {{--                                                <div class="product_ratings">--}}
                            {{--                                                    <ul>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="price_box">--}}
                            {{--                                                    <span class="old_price">70,000 تومان</span>--}}
                            {{--                                                    <span class="current_price">65,000 تومان</span>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        </figure>--}}
                            {{--                                    </article>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
{{--                            <div class="widget_list tags_widget">--}}
{{--                                <h2>برچسب های محصولات</h2>--}}
{{--                                <div class="tag_cloud">--}}
{{--                                    <a href="#">لباس</a>--}}
{{--                                    <a href="#">کفش</a>--}}
{{--                                    <a href="#">قلاده</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
    <script type="text/javascript">
        @if(session()->get('filter')=='fail')
        //            swal.fire({
        //            text: "در این دسته بندی محصولی وجود ندار.",
        //            icon: "success",
        //            button: "تایید",
        //            allowOutsideClick: true
        //            });
        alert('در این دسته بندی محصولی وجود ندارد.');
        @endif
    </script>
@endsection