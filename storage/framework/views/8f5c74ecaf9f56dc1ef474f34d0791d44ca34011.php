<!-- begin::side menu -->
<div class="side-menu">
    <div class="side-menu-body">
        <ul>
            
            <li><a <?php if(Request::is('home')): ?> class="active" <?php endif; ?> href="/home"><i class="icon ti-home"></i> <span>داشبورد مدیریت</span>
                </a></li>
            <li><a href="/" target="_blank"><i class="icon ti-search"></i> <span>مشاهده وب سایت</span> </a></li>
            <li <?php if(Request::is('admin/service*','admin/service_category*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                                                    class="<?php if(Request::is('admin/service*','admin/service_category*')): ?> active <?php endif; ?>"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت خدمات</span> </a>
                <ul>
                    <li <?php if(Request::is('admin/service_category*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                                           <?php if(Request::is('admin/service_category*')): ?> class="active" <?php endif; ?>>دسته
                            بندی خدمات</a>
                        <ul>
                            <li><a href="/admin/service_category/create"
                                   <?php if(Request::is('admin/service_category/create')): ?> class="active" <?php endif; ?>>افزودن دسته
                                    خدمات</a></li>
                            <li><a href="/admin/service_category"
                                   <?php if(Request::is('admin/service_category','admin/service_category*/edit')): ?> class="active" <?php endif; ?>>لیست
                                    دسته خدمات</a></li>
                        </ul>
                    </li>
                    <li <?php if(Request::is('admin/service','admin/service/create','admin/service*/edit')): ?> class="open" <?php endif; ?>>
                        <a href="#">خدمات اصلی</a>
                        <ul>
                            <li><a href="/admin/service/create"
                                   <?php if(Request::is('admin/service/create')): ?> class="active" <?php endif; ?>>افزودن خدمات</a></li>
                            <li><a href="/admin/service"
                                   <?php if(Request::is('admin/service','admin/service*/edit')): ?> class="active" <?php endif; ?>>لیست
                                    خدمات</a></li>
                        </ul>
                    </li>
                </ul>
            </li>




            <li <?php if(Request::is('admin/cpanel*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                         class="<?php if(Request::is('admin/sample*')): ?> active <?php endif; ?>"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت cpanel</span> </a>
                <ul>
                    <li><a href="/admin/cpanel/create" <?php if(Request::is('admin/cpanel/create')): ?> class="active" <?php endif; ?>>افزودن
                             </a></li>
                    <li><a href="/admin/cpanel"
                           <?php if(Request::is('admin/cpanel','admin/cpanel*/edit')): ?> class="active" <?php endif; ?>>لیست
                            کار</a></li>
                </ul>
            </li>







            <li <?php if(Request::is('admin/sample*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                         class="<?php if(Request::is('admin/sample*')): ?> active <?php endif; ?>"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت نمونه کار</span> </a>
                <ul>
                    <li><a href="/admin/sample/create" <?php if(Request::is('admin/sample/create')): ?> class="active" <?php endif; ?>>افزودن
                            نمونه کار</a></li>
                    <li><a href="/admin/sample"
                           <?php if(Request::is('admin/sample','admin/sample*/edit')): ?> class="active" <?php endif; ?>>لیست نمونه
                            کار</a></li>
                </ul>
            </li>

            <li <?php if(Request::is('admin/product*','admin/product_category*','admin/size*','admin/color*','admin/off_product*','admin/special_product*')): ?> class="open" <?php endif; ?>>
                <a href="#" class="<?php if(Request::is('admin/product*','admin/product_category*')): ?> active <?php endif; ?>"><i
                            class="icon ti-crown"></i> <span>مدیریت محصولات</span> </a>
                <ul>
                    <li <?php if(Request::is('admin/product_category*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                                           <?php if(Request::is('admin/product_category*')): ?> class="active" <?php endif; ?>>دسته
                            بندی محصولات</a>
                        <ul>
                            <li><a href="/admin/product_category/create"
                                   <?php if(Request::is('admin/product_category/create')): ?> class="active" <?php endif; ?>>افزودن دسته
                                    محصول</a></li>
                            <li><a href="/admin/product_category"
                                   <?php if(Request::is('admin/product_category','admin/product_category*/edit')): ?> class="active" <?php endif; ?>>لیست
                                    دسته محصولات</a></li>
                        </ul>
                    </li>
                    <li <?php if(Request::is('admin/product','admin/product/create','admin/product*/edit')): ?> class="open" <?php endif; ?>>
                        <a href="#">محصولات</a>
                        <ul>
                            <li><a href="/admin/product/create"
                                   <?php if(Request::is('admin/product/create')): ?> class="active" <?php endif; ?>>افزودن محصول</a></li>
                            <li><a href="/admin/product"
                                   <?php if(Request::is('admin/product','admin/product*/edit')): ?> class="active" <?php endif; ?>>لیست
                                    محصولات</a></li>
                        </ul>
                    </li>
                    <li <?php if(Request::is('admin/size','admin/size/create','admin/size*/edit')): ?> class="open" <?php endif; ?>><a
                                href="#">سایز محصول</a>
                        <ul>
                            <li><a href="/admin/size/create"
                                   <?php if(Request::is('admin/size/create')): ?> class="active" <?php endif; ?>>افزودن سایز محصول</a>
                            </li>
                            <li><a href="/admin/size"
                                   <?php if(Request::is('admin/size','admin/size*/edit')): ?> class="active" <?php endif; ?>>لیست سایز
                                    محصول</a></li>
                        </ul>
                    </li>
                    <li <?php if(Request::is('admin/color','admin/color/create','admin/color*/edit')): ?> class="open" <?php endif; ?>><a
                                href="#">رنگ محصول</a>
                        <ul>
                            <li><a href="/admin/color/create"
                                   <?php if(Request::is('admin/color/create')): ?> class="active" <?php endif; ?>>افزودن رنگ محصول</a>
                            </li>
                            <li><a href="/admin/color"
                                   <?php if(Request::is('admin/color','admin/color*/edit')): ?> class="active" <?php endif; ?>>لیست رنگ
                                    محصول</a></li>
                        </ul>
                    </li>
                    <li><a href="/admin/off_product/" <?php if(Request::is('admin/off_product')): ?> class="active" <?php endif; ?>>محصولات
                            تخفیفی</a></li>
                    <li><a href="/admin/special_product/"
                           <?php if(Request::is('admin/special_product')): ?> class="active" <?php endif; ?>>محصولات ویژه</a></li>
                </ul>
            </li>

            <li <?php if(Request::is('admin/article*','admin/category*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                                            class="<?php if(Request::is('admin/article*','admin/category*')): ?> active <?php endif; ?>"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت مقالات</span> </a>
                <ul>
                    <li <?php if(Request::is('admin/article*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                                  <?php if(Request::is('admin/article*')): ?> class="active" <?php endif; ?>>مدیریت
                            مقالات</a>
                        <ul>
                            <li><a href="/admin/article/create"
                                   <?php if(Request::is('admin/article/create')): ?> class="active" <?php endif; ?>>افزودن مقاله</a></li>
                            <li><a href="/admin/article"
                                   <?php if(Request::is('admin/article','admin/article*/edit')): ?> class="active" <?php endif; ?>>لیست
                                    مقالات</a></li>
                        </ul>
                    </li>
                    <li <?php if(Request::is('admin/category','admin/category/create','admin/category*/edit')): ?> class="open" <?php endif; ?>>
                        <a href="#">دسته بندی مقالات</a>
                        <ul>
                            <li><a href="/admin/category/create"
                                   <?php if(Request::is('admin/category/create')): ?> class="active" <?php endif; ?>>افزودن دسته مقاله</a>
                            </li>
                            <li><a href="/admin/category"
                                   <?php if(Request::is('admin/category','admin/category*/edit')): ?> class="active" <?php endif; ?>>لیست
                                    دسته مقالات</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li <?php if(Request::is('admin/brand*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                        class="<?php if(Request::is('admin/brand*')): ?> active <?php endif; ?>"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت برندها</span> </a>
                <ul>
                    <li><a href="/admin/brand/create" <?php if(Request::is('admin/brand/create')): ?> class="active" <?php endif; ?>>افزودن
                            برند</a></li>
                    <li><a href="/admin/brand"
                           <?php if(Request::is('admin/brand','admin/brand*/edit')): ?> class="active" <?php endif; ?>>لیست برندها</a>
                    </li>
                </ul>
            </li>

            <li <?php if(Request::is('admin/slider*')): ?> class="open" <?php endif; ?>><a href="#"
                                                                         class="<?php if(Request::is('admin/slider*')): ?> active <?php endif; ?>"><i
                            class="icon ti-paint-roller"></i> <span>مدیریت اسلایدر</span> </a>
                <ul>
                    <li><a href="/admin/slider/create" <?php if(Request::is('admin/slider/create')): ?> class="active" <?php endif; ?>>افزودن
                            اسلایدر</a></li>
                    <li><a href="/admin/slider"
                           <?php if(Request::is('admin/slider','admin/slider*/edit')): ?> class="active" <?php endif; ?>>لیست
                            اسلایدرها</a></li>
                </ul>
            </li>

            <li><a <?php if(Request::is('admin/contact')): ?> class="active" <?php endif; ?> href="/admin/contact"><i
                            class="icon ti-face-smile"></i> <span>مدیریت اطلاعات تماس</span> </a></li>

            <li><a <?php if(Request::is('admin/about')): ?> class="active" <?php endif; ?> href="/admin/about"><i
                            class="icon ti-rocket"></i> <span>مدیریت درباره ما</span> </a></li>

            <li><a <?php if(Request::is('admin/setting')): ?> class="active" <?php endif; ?> href="/admin/setting"><i
                            class="icon ti-layout"></i> <span>مدیریت تنظیمات</span> </a></li>


        </ul>
    </div>
</div>
<!-- end::side menu -->