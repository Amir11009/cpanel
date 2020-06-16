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
                            <li>مقالات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog area start-->
    <div class="blog_page_section blog_fullwidth mt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="blog_wrapper ">
                        <div class="blog_header">
                            <h1>مقالات</h1>
                        </div>
                        @foreach($articles as $article)
                            <article class="single_blog mb-60">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="/article-single/{{$article->slug}}"><img
                                                    src="/{{$article->main_image}}" alt="{{$article->title}}"></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <h3><a href="/article-single/{{$article->slug}}">{{$article->title}}</a></h3>
                                        <div class="blog_meta">
                                            {{--                                        <span class="author">ارسال توسط : <a href="#">مدیر</a> / </span>--}}
                                            <span class="post_date">در : <a
                                                        href="#">{{Verta::instance($article->created_at)->format('%d %B %Y')}}</a></span>
                                        </div>
                                        <div class="blog_desc">
                                            <p>{{$article['description']}}</p>
                                        </div>
                                        <footer class="readmore_button">
                                            <a href="/article-single/{{$article->slug}}">بیشتر بخوانید</a>
                                        </footer>
                                    </figcaption>
                                </figure>
                            </article>
                        @endforeach
                    </div>
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
                        <div class="widget_list widget_categories">
                            <h3>بایگانی</h3>
                            <ul>
                                <li><a href="#">آذر 1398</a></li>
                            </ul>
                        </div>
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
    <!--blog area end-->

    <!--blog pagination area start-->
    <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{$articles->links("pagination::bootstrap-4")}}
{{--                    <div class="pagination">--}}
{{--                        <ul>--}}
{{--                            <li class="current"><span>1</span></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li class="next"><a href="#">بعدی</a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!--blog pagination area end-->
@endsection