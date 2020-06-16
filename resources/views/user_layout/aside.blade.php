<!-- Main navigation -->
<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

            <!-- Main -->
            {{--<li class="navigation-header"><span>اصلی</span> <i class="icon-menu" title="Main pages"></i></li>--}}
            <li @if(Request::is('user/dashboard')) class="active" @endif><a href="/user/dashboard"><i class="icon-home4"></i> <span>داشبورد</span></a></li>
            <li><a target="_blank" href="/"><i class="icon-search4"></i> <span>وب سایت</span></a></li>
            <li @if(Request::is('user/order*')) class="active" @endif>
                <a href="/user/order"><i class="icon-cash3"></i> <span>سفارشات</span></a>
            </li>
            <li @if(Request::is('user/change_pass*')) class="active" @endif>
                <a href="/user/change_pass"><i class="icon-eye"></i> <span>تغییر رمز</span></a>
            </li>
            {{--<li @if(Request::is('admin/message')) class="active" @endif>--}}
                {{--<a href="/admin/message"><i class="icon-envelop"></i> <span>پیام ها</span></a>--}}
            {{--</li>--}}
            <li>

            </li>
            <li @if(Request::is('user/profile*')) class="active" @endif>
                <a href="/user/profile/{{auth()->user()->id}}"><i class="icon-user"></i> <span>پروفایل کاربر</span></a>
            </li>
            <!-- /main -->

            <!-- Forms -->
            {{--<li class="navigation-header"><span>تنظیمات</span> <i class="icon-menu" title="Forms"></i></li>--}}
            {{--<li @if(Request::is('admin/product*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت محصولات</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/product','admin/product*/edit')) class="active" @endif><a href="/admin/product"><i class="icon-search4"></i>مشاهده محصولات</a></li>--}}
                    {{--<li @if(Request::is('admin/product/create')) class="active" @endif><a href="{{route('product.create')}}"><i class="icon-plus2"></i>افزودن محصول</a></li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li @if(Request::is('admin/group_main*','admin/group_sub1*','admin/group_sub2*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت دسته بندی</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/group_main','admin/group_main*/edit')) class="active" @endif><a href="/admin/group_main"><i class="icon-search4"></i>مشاهده گروه اصلی</a></li>--}}
                    {{--<li @if(Request::is('admin/group_main/create')) class="active" @endif><a href="{{route('group_main.create')}}"><i class="icon-plus2"></i>افزودن گروه اصلی</a></li>--}}

                    {{--<li @if(Request::is('admin/group_sub1','admin/group_sub1*/edit')) class="active" @endif><a href="/admin/group_sub1"><i class="icon-search4"></i>مشاهده زیرگروه1</a></li>--}}
                    {{--<li @if(Request::is('admin/group_sub1/create')) class="active" @endif><a href="{{route('group_sub1.create')}}"><i class="icon-plus2"></i>افزودن زیرگروه1</a></li>--}}

                    {{--<li @if(Request::is('admin/group_sub2','admin/group_sub2*/edit')) class="active" @endif><a href="/admin/group_sub2"><i class="icon-search4"></i>مشاهده زیرگروه2</a></li>--}}
                    {{--<li @if(Request::is('admin/group_sub2/create')) class="active" @endif><a href="{{route('group_sub2.create')}}"><i class="icon-plus2"></i>افزودن زیرگروه2</a></li>--}}

                {{--</ul>--}}
            {{--</li>--}}

            {{--<li @if(Request::is('admin/size*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت سایزها</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/size','admin/size*/edit')) class="active" @endif><a href="/admin/size"><i class="icon-search4"></i>مشاهده سایزها</a></li>--}}
                    {{--<li @if(Request::is('admin/size/create')) class="active" @endif><a href="{{route('size.create')}}"><i class="icon-plus2"></i>افزودن سایز</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li @if(Request::is('admin/color*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت رنگ ها</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/color','admin/color*/edit')) class="active" @endif><a href="/admin/color"><i class="icon-search4"></i>مشاهده رنگ ها</a></li>--}}
                    {{--<li @if(Request::is('admin/color/create')) class="active" @endif><a href="{{route('color.create')}}"><i class="icon-plus2"></i>افزودن رنگ</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{----}}
            {{--<li @if(Request::is('admin/unit_price*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت نرخ ارز</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/unit_price','admin/unit_price*/edit')) class="active" @endif><a href="/admin/unit_price"><i class="icon-search4"></i>مشاهده نرخ ها</a></li>--}}
                    {{--<li @if(Request::is('admin/unit_price/create')) class="active" @endif><a href="{{route('unit_price.create')}}"><i class="icon-plus2"></i>افزودن نرخ</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li @if(Request::is('admin/article*','admin/category*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت مقالات</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/article')) class="active" @endif><a href="/admin/article" ><i class="icon-search4"></i>مشاهده مقالات</a></li>--}}
                    {{--<li @if(Request::is('admin/article/create')) class="active" @endif><a href="{{route('article.create')}}"><i class="icon-plus2"></i>افزودن مقاله</a></li>--}}
                    {{--<li @if(Request::is('admin/category')) class="active" @endif><a href="/admin/category" ><i class="icon-search4"></i>مشاهده دسته بندی</a></li>--}}
                    {{--<li @if(Request::is('admin/category/create')) class="active" @endif><a href="{{route('category.create')}}"><i class="icon-plus2"></i>افزودن دسته بندی</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li @if(Request::is('admin/brand*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت برند ها</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/brand','admin/brand*/edit')) class="active" @endif><a href="/admin/brand"><i class="icon-search4"></i>مشاهده برند ها</a></li>--}}
                    {{--<li @if(Request::is('admin/brand/create')) class="active" @endif><a href="{{route('brand.create')}}"><i class="icon-plus2"></i>افزودن برند</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li @if(Request::is('admin/off_product*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت تخفیف ها</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/off_product*')) class="active" @endif><a href="/admin/off_product" ><i class="icon-search4"></i>مشاهده تخفیف ها</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li @if(Request::is('admin/special_product*')) class="active" @endif>--}}
                {{--<a href="#"><i class="icon-pencil3"></i> <span>مدیریت ویژه ها</span></a>--}}
                {{--<ul>--}}
                    {{--<li @if(Request::is('admin/special_product*')) class="active" @endif><a href="/admin/special_product" ><i class="icon-search4"></i>مشاهده ویژه ها</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <!-- /page kits -->

        </ul>
    </div>
</div>
<!-- /main navigation -->