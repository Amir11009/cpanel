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
                            <li class="breadcrumb-item active" aria-current="page">علاقه‌مندی‌ها</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>علاقه‌مندی‌ها</h1></div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <table class="wishlist">
                    <thead class="wishlist__head">
                    <tr class="wishlist__row">
                        <th class="wishlist__column wishlist__column--image">تصویر</th>
                        <th class="wishlist__column wishlist__column--product">محصول</th>
                        <th class="wishlist__column wishlist__column--stock">وضعیت انبار</th>
                        <th class="wishlist__column wishlist__column--price">قیمت</th>
                        <th class="wishlist__column wishlist__column--tocart"></th>
                        <th class="wishlist__column wishlist__column--remove"></th>
                    </tr>
                    </thead>
                    <tbody class="wishlist__body">
                    <tr class="wishlist__row">
                        <td class="wishlist__column wishlist__column--image">
                            <a href=""><img src="/assets/images/products/product-1.jpg" alt=""></a>
                        </td>
                        <td class="wishlist__column wishlist__column--product"><a href="" class="wishlist__product-name">اره برقی برندیکس مدل 300 وات</a>
                            <div class="wishlist__product-rating">
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
                                <div class="wishlist__product-rating-legend">9 نقد و بررسی</div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--stock">
                            <div class="badge badge-success">موجود در انبار</div>
                        </td>
                        <td class="wishlist__column wishlist__column--price">699,000 تومان</td>
                        <td class="wishlist__column wishlist__column--tocart">
                            <button type="button" class="btn btn-primary btn-sm">افزودن به سبد</button>
                        </td>
                        <td class="wishlist__column wishlist__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="/assets/images/sprite.svg#cross-12"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="wishlist__row">
                        <td class="wishlist__column wishlist__column--image">
                            <a href=""><img src="/assets/images/products/product-2.jpg" alt=""></a>
                        </td>
                        <td class="wishlist__column wishlist__column--product"><a href="" class="wishlist__product-name">اره چوب بری IRadix مدل 2700 وات</a>
                            <div class="wishlist__product-rating">
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
                                <div class="wishlist__product-rating-legend">7 نقد و بررسی</div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--stock">
                            <div class="badge badge-success">موجود در انبار</div>
                        </td>
                        <td class="wishlist__column wishlist__column--price">849,000 تومان</td>
                        <td class="wishlist__column wishlist__column--tocart">
                            <button type="button" class="btn btn-primary btn-sm">افزودن به سبد</button>
                        </td>
                        <td class="wishlist__column wishlist__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="/assets/images/sprite.svg#cross-12"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="wishlist__row">
                        <td class="wishlist__column wishlist__column--image">
                            <a href=""><img src="/assets/images/products/product-5.jpg" alt=""></a>
                        </td>
                        <td class="wishlist__column wishlist__column--product"><a href="" class="wishlist__product-name">میخ کوب برقی برندیکس مدل 2019</a>
                            <div class="wishlist__product-rating">
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
                                <div class="wishlist__product-rating-legend">11 نقد و بررسی</div>
                            </div>
                        </td>
                        <td class="wishlist__column wishlist__column--stock">
                            <div class="badge badge-success">موجود در انبار</div>
                        </td>
                        <td class="wishlist__column wishlist__column--price">1,210,000 تومان</td>
                        <td class="wishlist__column wishlist__column--tocart">
                            <button type="button" class="btn btn-primary btn-sm">افزودن به سبد</button>
                        </td>
                        <td class="wishlist__column wishlist__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                <svg width="12px" height="12px">
                                    <use xlink:href="/assets/images/sprite.svg#cross-12"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- site__body / end -->
@endsection