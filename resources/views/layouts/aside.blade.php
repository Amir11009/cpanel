<!-- begin::side menu -->
<div class="side-menu">
    <div class="side-menu-body">
        <ul>
            {{--            <li class="side-menu-divider">{{auth()->user()->name}} : مدیریت سایت</li>--}}
            <li><a @if(Request::is('home')) class="active" @endif href="/home"><i class="icon ti-home"></i> <span>داشبورد مدیریت</span>
                </a></li>
            <li><a href="/" target="_blank"><i class="icon ti-search"></i> <span>مشاهده وب سایت</span> </a></li>
            <li @if(Request::is('admin/service*','admin/service_category*')) class="open" @endif><a href="#"
                                                                                                    class="@if(Request::is('admin/service*','admin/service_category*')) active @endif"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت خدمات</span> </a>
                <ul>
                    <li @if(Request::is('admin/service_category*')) class="open" @endif><a href="#"
                                                                                           @if(Request::is('admin/service_category*')) class="active" @endif>دسته
                            بندی خدمات</a>
                        <ul>
                            <li><a href="/admin/service_category/create"
                                   @if(Request::is('admin/service_category/create')) class="active" @endif>افزودن دسته
                                    خدمات</a></li>
                            <li><a href="/admin/service_category"
                                   @if(Request::is('admin/service_category','admin/service_category*/edit')) class="active" @endif>لیست
                                    دسته خدمات</a></li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/service','admin/service/create','admin/service*/edit')) class="open" @endif>
                        <a href="#">خدمات اصلی</a>
                        <ul>
                            <li><a href="/admin/service/create"
                                   @if(Request::is('admin/service/create')) class="active" @endif>افزودن خدمات</a></li>
                            <li><a href="/admin/service"
                                   @if(Request::is('admin/service','admin/service*/edit')) class="active" @endif>لیست
                                    خدمات</a></li>
                        </ul>
                    </li>
                </ul>
            </li>




            <li @if(Request::is('admin/cpanel*')) class="open" @endif><a href="#"
                                                                         class="@if(Request::is('admin/sample*')) active @endif"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت cpanel</span> </a>
                <ul>
                    <li><a href="/admin/cpanel/create" @if(Request::is('admin/cpanel/create')) class="active" @endif>افزودن
                             </a></li>
                    <li><a href="/admin/cpanel"
                           @if(Request::is('admin/cpanel','admin/cpanel*/edit')) class="active" @endif>لیست
                            کار</a></li>
                </ul>
            </li>







            <li @if(Request::is('admin/sample*')) class="open" @endif><a href="#"
                                                                         class="@if(Request::is('admin/sample*')) active @endif"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت نمونه کار</span> </a>
                <ul>
                    <li><a href="/admin/sample/create" @if(Request::is('admin/sample/create')) class="active" @endif>افزودن
                            نمونه کار</a></li>
                    <li><a href="/admin/sample"
                           @if(Request::is('admin/sample','admin/sample*/edit')) class="active" @endif>لیست نمونه
                            کار</a></li>
                </ul>
            </li>

            <li @if(Request::is('admin/product*','admin/product_category*','admin/size*','admin/color*','admin/off_product*','admin/special_product*')) class="open" @endif>
                <a href="#" class="@if(Request::is('admin/product*','admin/product_category*')) active @endif"><i
                            class="icon ti-crown"></i> <span>مدیریت محصولات</span> </a>
                <ul>
                    <li @if(Request::is('admin/product_category*')) class="open" @endif><a href="#"
                                                                                           @if(Request::is('admin/product_category*')) class="active" @endif>دسته
                            بندی محصولات</a>
                        <ul>
                            <li><a href="/admin/product_category/create"
                                   @if(Request::is('admin/product_category/create')) class="active" @endif>افزودن دسته
                                    محصول</a></li>
                            <li><a href="/admin/product_category"
                                   @if(Request::is('admin/product_category','admin/product_category*/edit')) class="active" @endif>لیست
                                    دسته محصولات</a></li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/product','admin/product/create','admin/product*/edit')) class="open" @endif>
                        <a href="#">محصولات</a>
                        <ul>
                            <li><a href="/admin/product/create"
                                   @if(Request::is('admin/product/create')) class="active" @endif>افزودن محصول</a></li>
                            <li><a href="/admin/product"
                                   @if(Request::is('admin/product','admin/product*/edit')) class="active" @endif>لیست
                                    محصولات</a></li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/size','admin/size/create','admin/size*/edit')) class="open" @endif><a
                                href="#">سایز محصول</a>
                        <ul>
                            <li><a href="/admin/size/create"
                                   @if(Request::is('admin/size/create')) class="active" @endif>افزودن سایز محصول</a>
                            </li>
                            <li><a href="/admin/size"
                                   @if(Request::is('admin/size','admin/size*/edit')) class="active" @endif>لیست سایز
                                    محصول</a></li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/color','admin/color/create','admin/color*/edit')) class="open" @endif><a
                                href="#">رنگ محصول</a>
                        <ul>
                            <li><a href="/admin/color/create"
                                   @if(Request::is('admin/color/create')) class="active" @endif>افزودن رنگ محصول</a>
                            </li>
                            <li><a href="/admin/color"
                                   @if(Request::is('admin/color','admin/color*/edit')) class="active" @endif>لیست رنگ
                                    محصول</a></li>
                        </ul>
                    </li>
                    <li><a href="/admin/off_product/" @if(Request::is('admin/off_product')) class="active" @endif>محصولات
                            تخفیفی</a></li>
                    <li><a href="/admin/special_product/"
                           @if(Request::is('admin/special_product')) class="active" @endif>محصولات ویژه</a></li>
                </ul>
            </li>

            <li @if(Request::is('admin/article*','admin/category*')) class="open" @endif><a href="#"
                                                                                            class="@if(Request::is('admin/article*','admin/category*')) active @endif"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت مقالات</span> </a>
                <ul>
                    <li @if(Request::is('admin/article*')) class="open" @endif><a href="#"
                                                                                  @if(Request::is('admin/article*')) class="active" @endif>مدیریت
                            مقالات</a>
                        <ul>
                            <li><a href="/admin/article/create"
                                   @if(Request::is('admin/article/create')) class="active" @endif>افزودن مقاله</a></li>
                            <li><a href="/admin/article"
                                   @if(Request::is('admin/article','admin/article*/edit')) class="active" @endif>لیست
                                    مقالات</a></li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/category','admin/category/create','admin/category*/edit')) class="open" @endif>
                        <a href="#">دسته بندی مقالات</a>
                        <ul>
                            <li><a href="/admin/category/create"
                                   @if(Request::is('admin/category/create')) class="active" @endif>افزودن دسته مقاله</a>
                            </li>
                            <li><a href="/admin/category"
                                   @if(Request::is('admin/category','admin/category*/edit')) class="active" @endif>لیست
                                    دسته مقالات</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li @if(Request::is('admin/brand*')) class="open" @endif><a href="#"
                                                                        class="@if(Request::is('admin/brand*')) active @endif"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت برندها</span> </a>
                <ul>
                    <li><a href="/admin/brand/create" @if(Request::is('admin/brand/create')) class="active" @endif>افزودن
                            برند</a></li>
                    <li><a href="/admin/brand"
                           @if(Request::is('admin/brand','admin/brand*/edit')) class="active" @endif>لیست برندها</a>
                    </li>
                </ul>
            </li>

            <li @if(Request::is('admin/slider*')) class="open" @endif><a href="#"
                                                                         class="@if(Request::is('admin/slider*')) active @endif"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت اسلایدر</span> </a>
                <ul>
                    <li><a href="/admin/slider/create" @if(Request::is('admin/slider/create')) class="active" @endif>افزودن
                            اسلایدر</a></li>
                    <li><a href="/admin/slider"
                           @if(Request::is('admin/slider','admin/slider*/edit')) class="active" @endif>لیست
                            اسلایدرها</a></li>
                </ul>
            </li>

            <li><a @if(Request::is('admin/contact')) class="active" @endif href="/admin/contact"><i
                            class="icon ti-face-smile"></i> <span>مدیریت اطلاعات تماس</span> </a></li>

            <li><a @if(Request::is('admin/about')) class="active" @endif href="/admin/about"><i
                            class="icon ti-rocket"></i> <span>مدیریت درباره ما</span> </a></li>

            <li><a @if(Request::is('admin/setting')) class="active" @endif href="/admin/setting"><i
                            class="icon ti-layout"></i> <span>مدیریت تنظیمات</span> </a></li>


        </ul>
    </div>
</div>
<!-- end::side menu -->