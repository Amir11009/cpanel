@extends('layout.layout')

@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/assets/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="">تکه مسیر</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/assets/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">حساب کاربری</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>حساب کاربری</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        <div class="account-nav flex-grow-1">
                            <h4 class="account-nav__title">ناوبری</h4>
                            <ul>
                                <li class="account-nav__item"><a href="account-dashboard.html">داشبورد</a></li>
                                <li class="account-nav__item"><a href="account-profile.html">ویرایش پروفایل</a></li>
                                <li class="account-nav__item account-nav__item--active"><a href="account-orders.html">سابقه خرید</a></li>
                                <li class="account-nav__item"><a href="account-addresses.html">آدرس ها</a></li>
                                <li class="account-nav__item"><a href="account-password.html">رمز عبور</a></li>
                                <li class="account-nav__item"><a href="account-login.html">خروج</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-header">
                                <h5>سابقه خرید</h5></div>
                            <div class="card-divider"></div>
                            <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>سفارش</th>
                                            <th>تاریخ</th>
                                            <th>وضعیت</th>
                                            <th>جمع کل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="">#8132</a></td>
                                            <td>2 اردیبهشت 1398</td>
                                            <td>در حال پردازش</td>
                                            <td>2,425,000 تومان برای 5 محصول</td>
                                        </tr>
                                        <tr>
                                            <td><a href="">#7592</a></td>
                                            <td>28 فروردین 1398</td>
                                            <td>در حال پردازش</td>
                                            <td>325,000 تومان برای 3 محصول</td>
                                        </tr>
                                        <tr>
                                            <td><a href="">#7192</a></td>
                                            <td>15 اسفند 1397</td>
                                            <td>ارسال شده</td>
                                            <td>1,786,000 تومان برای 4 محصول</td>
                                        </tr>
                                        <tr>
                                            <td><a href="">#6321</a></td>
                                            <td>28 دی 1397</td>
                                            <td>اتمام یافته</td>
                                            <td>25,000 تومان برای 1 محصول</td>
                                        </tr>
                                        <tr>
                                            <td><a href="">#6001</a></td>
                                            <td>21 آذر 1397</td>
                                            <td>اتمام یافته</td>
                                            <td>225,000 تومان برای 2 محصول</td>
                                        </tr>
                                        <tr>
                                            <td><a href="">#4120</a></td>
                                            <td>11 مهر 1397</td>
                                            <td>اتمام یافته</td>
                                            <td>4,485,000 تومان برای 7 محصول</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-footer">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                                            <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                                <use xlink:href="/assets/images/sprite.svg#arrow-rounded-left-8x13"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="">2 <span class="sr-only">(کنونی)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                                            <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                                <use xlink:href="/assets/images/sprite.svg#arrow-rounded-right-8x13"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->
@endsection