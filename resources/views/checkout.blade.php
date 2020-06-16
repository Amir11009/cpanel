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
            <form action="/pay/{{$order_id}}" method="Get">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product_remove">ردیف</th>
                                        <th class="product_thumb">تصویر</th>
                                        <th class="product_name">محصول</th>
                                        <th class="product-price">قیمت</th>
                                        <th class="product_quantity">تعداد</th>
                                        <th class="product_quantity">مجموع</th>
                                        {{--                                        <th class="product_total">جمع کل</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order_details as $key=>$order_detail)
                                        <tr>
                                            <td class="product_remove">
                                                {{$key+1}}
                                            </td>
                                            <td class="product_thumb">
                                                <a href="/single-product/{{$order_detail->product->slug}}"><img src="/{{$order_detail->product->image}}" alt="{{$order_detail->product->title}}"></a>
                                            </td>
                                            <td class="product_name"><a href="#">{{$order_detail->product->title}}</a></td>
                                            <td class="product-price"> {{number_format($order_detail->unit_price)}} تومان</td>
                                            <td class="product_quantity">
{{--                                                <label>تعداد</label>--}}
{{--                                                <input min="1" max="100" value="1" type="number">--}}
                                                {{$order_detail->count_one}}
                                            </td>
                                            <td class="product-total">
                                                {{number_format($order_detail->unit_price * $order_detail->count_one )}} تومان
                                            </td>
                                            {{--                                            <td class="product_total">350,000 تومان</td>--}}
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            جمع کل
                                        </td>
                                        <?php $total_price=0;  ?>
                                        @foreach($order_details as $order_item)
                                            <?php $total_price += $order_item->unit_price * $order_item->count_one;?>
                                        @endforeach
                                        <td colspan="1">
                                            <?php echo number_format($total_price);?>   تومان
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            تخفیف
                                        </td>
                                        <td >##</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            مبلغ قابل پرداخت
                                        </td>
                                        <td>#</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">ثبت سفارش</button>
                            </div>
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