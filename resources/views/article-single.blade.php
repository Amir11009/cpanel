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
                            <li><a href="/article">مقالات</a></li>
                            <li>{{$article['title']}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog body area start-->
    <div class="blog_details mt-60">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper">
                        <article class="single_blog">
                            <figure>
                                <div class="post_header">
                                    <h3 class="post_title">{{$article['title']}}</h3>
                                    <div class="blog_meta">
{{--                                        <span class="author">ارسال توسط : <a href="#">مدیر</a> / </span>--}}
                                        <span class="post_date">در : <a href="#">{{Verta::instance($article->created_at)->format('%d %B %Y')}}</a> /</span>
                                        <span class="post_category">در :
                                       @foreach($article->category as $category)
                                            <a style="color: black !important;" href="/category/{{$category->slug}}">{{$category->title}}</a> ,
                                        </span>
                                    @endforeach
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                    <a href="#"><img src="/{{$article['main_image']}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <div class="post_content">
                                        {!! $article['text'] !!}
                                        <blockquote>
                                            {{$article['description']}}
                                        </blockquote>

                                    </div>
                                    <div class="entry_content">
                                        <div class="post_meta">
                                            <span>برچسب ها: </span>
                                            <span><a href="#">قلاده</a></span>
                                            <span><a href="#">، ظرف غذا</a></span>
                                        </div>

                                        <div class="social_sharing">
                                            <p>اشتراک گذاری این مطلب:</p>
                                            <ul>
                                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
{{--                        <div class="related_posts">--}}
{{--                            <h3>مطالب مرتبط</h3>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-4 col-md-6">--}}
{{--                                    <article class="single_related">--}}
{{--                                        <figure>--}}
{{--                                            <div class="related_thumb">--}}
{{--                                                <img src="/assets/img/blog/blog3.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <figcaption class="related_content">--}}
{{--                                                <div class="blog_meta">--}}
{{--                                                    <span class="author">توسط: <a href="#">مدیر</a> / </span>--}}
{{--                                                    <span class="post_date"> 11 آذر 1398	</span>--}}
{{--                                                </div>--}}
{{--                                                <h4><a href="#">مطلب دارای گالری</a></h4>--}}
{{--                                            </figcaption>--}}
{{--                                        </figure>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 col-md-6">--}}
{{--                                    <article class="single_related">--}}
{{--                                        <figure>--}}
{{--                                            <div class="related_thumb">--}}
{{--                                                <img src="/assets/img/blog/blog4.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <figcaption class="related_content">--}}
{{--                                                <div class="blog_meta">--}}
{{--                                                    <span class="author">توسط: <a href="#">مدیر</a> / </span>--}}
{{--                                                    <span class="post_date"> 11 آذر 1398	</span>--}}
{{--                                                </div>--}}
{{--                                                <h4><a href="#">مطلب بلاگ صوتی</a></h4>--}}
{{--                                            </figcaption>--}}
{{--                                        </figure>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 col-md-6">--}}
{{--                                    <article class="single_related">--}}
{{--                                        <figure>--}}
{{--                                            <div class="related_thumb">--}}
{{--                                                <img src="/assets/img/blog/blog5.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <figcaption class="related_content">--}}
{{--                                                <div class="blog_meta">--}}
{{--                                                    <span class="author">توسط: <a href="#">مدیر</a> / </span>--}}
{{--                                                    <span class="post_date"> 11 آذر 1398	</span>--}}
{{--                                                </div>--}}
{{--                                                <h4><a href="#">لورم ایپسوم متن ساختگی</a></h4>--}}
{{--                                            </figcaption>--}}
{{--                                        </figure>--}}
{{--                                    </article>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="comments_box">--}}
{{--                            <h3>3 دیدگاه	</h3>--}}
{{--                            <div class="comment_list">--}}
{{--                                <div class="comment_thumb">--}}
{{--                                    <img src="//assets/img/blog/comment3.png.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="comment_content">--}}
{{--                                    <div class="comment_meta">--}}
{{--                                        <h5><a href="#">مدیر</a></h5>--}}
{{--                                        <span>16 آذر 1398 ساعت 1:38 صبح</span>--}}
{{--                                    </div>--}}
{{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>--}}
{{--                                    <div class="comment_reply">--}}
{{--                                        <a href="#">پاسخ</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="comment_list list_two">--}}
{{--                                <div class="comment_thumb">--}}
{{--                                    <img src="//assets/img/blog/comment3.png.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="comment_content">--}}
{{--                                    <div class="comment_meta">--}}
{{--                                        <h5><a href="#">دمو</a></h5>--}}
{{--                                        <span>16 آذر 1398 ساعت 1:38 صبح</span>--}}
{{--                                    </div>--}}
{{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>--}}
{{--                                    <div class="comment_reply">--}}
{{--                                        <a href="#">پاسخ</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="comment_list">--}}
{{--                                <div class="comment_thumb">--}}
{{--                                    <img src="//assets/img/blog/comment3.png.jpg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="comment_content">--}}
{{--                                    <div class="comment_meta">--}}
{{--                                        <h5><a href="#">مدیر</a></h5>--}}
{{--                                        <span>16 آذر 1398 ساعت 1:38 صبح</span>--}}
{{--                                    </div>--}}
{{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>--}}
{{--                                    <div class="comment_reply">--}}
{{--                                        <a href="#">پاسخ</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="comments_form">--}}
{{--                            <h3>یک پاسخ ارسال کنید </h3>--}}
{{--                            <p>ایمیل شما منتشر نخواهد شد. فیلد های الزامی با * مشخص شده اند</p>--}}
{{--                            <form action="#" method="post">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <label for="review_comment">دیدگاه </label>--}}
{{--                                        <textarea name="comment" id="review_comment"></textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4">--}}
{{--                                        <label for="author">نام</label>--}}
{{--                                        <input id="author" type="text">--}}

{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4">--}}
{{--                                        <label for="email">ایمیل </label>--}}
{{--                                        <input id="email" type="email" dir="ltr">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-4 col-md-4">--}}
{{--                                        <label for="website">وب‌سایت </label>--}}
{{--                                        <input id="website" type="text">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button class="button" type="submit">ارسال دیدگاه</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <h3>جستجو</h3>
                            <form action="/search/article" method="POST">
                                {{csrf_field()}}
                                <input placeholder="جستجو ..." type="text" name="title">
                                <button type="submit">جستجو</button>
                            </form>
                        </div>
                        <div class="widget_list comments">
                            <h3>دیدگاه‌های جدید</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="#"><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span> <a href="#">آذر</a> می‌گوید:</span>
                                    <a href="#">محصولات متنوعی دارید.</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="#"><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">علی</a> می‌گوید:</span>
                                    <a href="#">ممنون از ارسال سریع محصول</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="#"><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">سعید</a> می‌گوید:</span>
                                    <a href="#">محصول جدیداتون کی میرسن؟!</a>
                                </div>
                            </div>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="#"><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <span><a href="#">سروش</a> می‌گوید:</span>
                                    <a href="#">اسباب بازی برای سگم خریدم ، عالیه ، ممنون از محصولات خوبتون</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_post">
                            <h3>مطالب اخیر</h3>
                            @foreach($last_arts as $last_art)
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="/article-single/{{$last_art->slug}}"><img
                                                    src="/{{$last_art->main_image}}" alt="{{$last_art->title}}"></a>
                                    </div>
                                    <div class="post_info">
                                        <h3><a href="/article-single/{{$last_art->slug}}">{{$last_art->title}}</a></h3>
                                        <span>{{Verta::instance($last_art->created_at)->format('%d %B %Y')}}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
{{--                        <div class="widget_list widget_categories">--}}
{{--                            <h3>بایگانی</h3>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">آذر 1398</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="widget_list widget_categories">
                            <h3>دسته ها</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget_list widget_tag">
                            <h3>برچسب های محصولات</h3>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">نژاد دوبرمن</a></li>
                                    <li><a href="#"> نژاد ژرمن شپرد</a></li>
                                    <li><a href="#">نژاد شیتزو</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->
@endsection