@extends('layout.layout')

@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">خانه</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/assets/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item"><a href="">محصولات</a>
                                <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="/assets/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">مقایسه محصولات</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>مقایسه</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="table-responsive">
                    <table class="compare-table">
                        <tbody>
                        <tr>
                            <th>محصول</th>
                            <td>
                                <a class="compare-table__product-link" href="product.html">
                                    <div class="compare-table__product-image"><img src="/assets/images/products/product-1.jpg" alt=""></div>
                                    <div class="compare-table__product-name">اره برقی برندیکس مدل 300 وات</div>
                                </a>
                            </td>
                            <td>
                                <a class="compare-table__product-link" href="product.html">
                                    <div class="compare-table__product-image"><img src="/assets/images/products/product-2.jpg" alt=""></div>
                                    <div class="compare-table__product-name">اره چوب بری IRadix مدل 2700 وات</div>
                                </a>
                            </td>
                            <td>
                                <a class="compare-table__product-link" href="product.html">
                                    <div class="compare-table__product-image"><img src="/assets/images/products/product-3.jpg" alt=""></div>
                                    <div class="compare-table__product-name">پیچ گوشتی برقی برندیکس مدل 200 وات</div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>امتیاز</th>
                            <td>
                                <div class="compare-table__product-rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-table__product-rating-legend">7 نقد و بررسی</div>
                            </td>
                            <td>
                                <div class="compare-table__product-rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-table__product-rating-legend">7 نقد و بررسی</div>
                            </td>
                            <td>
                                <div class="compare-table__product-rating">
                                    <div class="rating">
                                        <div class="rating__body">
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                            <svg class="rating__star" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="/assets/images/sprite.svg#star-normal-stroke"></use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="compare-table__product-rating-legend">7 نقد و بررسی</div>
                            </td>
                        </tr>
                        <tr>
                            <th>موجودی</th>
                            <td><span class="compare-table__product-badge badge badge-success">موجود در انبار</span></td>
                            <td><span class="compare-table__product-badge badge badge-success">موجود در انبار</span></td>
                            <td><span class="compare-table__product-badge badge badge-success">موجود در انبار</span></td>
                        </tr>
                        <tr>
                            <th>قیمت</th>
                            <td>749,000 تومان</td>
                            <td>1,019,000 تومان</td>
                            <td>850,000 تومان</td>
                        </tr>
                        <tr>
                            <th>افزودن به سبد</th>
                            <td>
                                <button class="btn btn-primary">افزودن به سبد</button>
                            </td>
                            <td>
                                <button class="btn btn-primary">افزودن به سبد</button>
                            </td>
                            <td>
                                <button class="btn btn-primary">افزودن به سبد</button>
                            </td>
                        </tr>
                        <tr>
                            <th>شناسه</th>
                            <td>83690/32</td>
                            <td>83590/15</td>
                            <td>1590/78</td>
                        </tr>
                        <tr>
                            <th>وزن</th>
                            <td>15 کیلوگرم</td>
                            <td>7 کیلوگرم</td>
                            <td>11 کیلوگرم</td>
                        </tr>
                        <tr>
                            <th>رنگ</th>
                            <td>قرمز</td>
                            <td>قهوه ای</td>
                            <td>خاکستری</td>
                        </tr>
                        <tr>
                            <th>جنس</th>
                            <td>چوب</td>
                            <td>پلاستیک</td>
                            <td>آهن</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <button class="btn btn-secondary btn-sm">حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-secondary btn-sm">حذف</button>
                            </td>
                            <td>
                                <button class="btn btn-secondary btn-sm">حذف</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- site__body / end -->
@endsection