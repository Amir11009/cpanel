@extends('layout.layout')

@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">خانه</a></li>
                            <li>سبد خرید</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shopping_cart_area mt-60">
        <div class="container">
            <form action="/cart/edit/{{$order->id}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">

                            @if(count($orderdetails) >0)
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product_remove">حذف</th>
                                            <th class="product_thumb">تصویر</th>
                                            <th class="product_name">محصول</th>
                                            <th class="product-price">قیمت</th>
                                            <th class="product_quantity">تعداد</th>
                                            {{--                                        <th class="product_total">جمع کل</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orderdetails as $key=>$order_detail)
                                            <tr>
                                                <input type="hidden" name="order_detail_id[]"
                                                       value="{{$order_detail->id}}">
                                                <td class="product_remove"><a
                                                            href="/order/removeitem/{{$order_detail->id}}"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb">
                                                    <a href="/single-product/{{$order_detail->product->slug}}"><img
                                                                src="/{{$order_detail->product->image}}"
                                                                alt="{{$order_detail->product->title}}"></a>
                                                </td>
                                                <td class="product_name"><a
                                                            href="#">{{$order_detail->product->title}}</a></td>
                                                <td class="product-price"> {{number_format($order_detail->unit_price)}}
                                                    تومان
                                                </td>
                                                <td class="product_quantity">
                                                    <label>تعداد</label>
                                                    <input min="1" max="100" name="count_one[]"
                                                           value="{{$order_detail->count_one}}" type="number">
                                                </td>
                                                {{--                                            <td class="product_total">350,000 تومان</td>--}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <button type="submit">تائید و ادامه عملیات خرید</button>
                                </div>
                            @elseif($orderdetails == 0 || $orderdetails = null)
                                <div class="cart_page table-responsive text-center">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product_remove">حذف</th>
                                            <th class="product_thumb">تصویر</th>
                                            <th class="product_name">محصول</th>
                                            <th class="product-price">قیمت</th>
                                            <th class="product_quantity">تعداد</th>
                                            <th class="product_total">جمع کل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                سبد خرید شما خالی است
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <a href="/shop" class="btn btn-dark" style="color: white;margin: auto" > دیدن محصولات</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
                {{--                <!--coupon code area start-->--}}
                {{--                <div class="coupon_area">--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="col-lg-6 col-md-6">--}}
                {{--                            <div class="coupon_code left">--}}
                {{--                                <h3>کد تخفیف</h3>--}}
                {{--                                <div class="coupon_inner">--}}
                {{--                                    <p>کد تخفیف خود را در صورت وجود وارد نمایید</p>--}}
                {{--                                    <input placeholder="کد تخفیف" type="text">--}}
                {{--                                    <button type="submit">اعمال کد تخفیف</button>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-lg-6 col-md-6">--}}
                {{--                            <div class="coupon_code right">--}}
                {{--                                <h3>مجموع سبد</h3>--}}
                {{--                                <div class="coupon_inner">--}}
                {{--                                    <div class="cart_subtotal">--}}
                {{--                                        <p>جمع اجزا</p>--}}
                {{--                                        <p class="cart_amount">1,350,000 تومان</p>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="cart_subtotal ">--}}
                {{--                                        <p>حمل و نقل</p>--}}
                {{--                                        <p class="cart_amount">15,000 تومان</p>--}}
                {{--                                    </div>--}}
                {{--                                    <a href="#">محاسبه هزینه</a>--}}

                {{--                                    <div class="cart_subtotal has-border">--}}
                {{--                                        <p>جمع کل</p>--}}
                {{--                                        <p class="cart_amount">1,365,000 تومان</p>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="checkout_btn">--}}
                {{--                                        <a href="#">پرداخت</a>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <!--coupon code area end-->--}}
            </form>
        </div>
    </div>
@endsection