<div style="direction:rtl;">
    <h3>سفارش کاربر با مشخصات {{$order->user->name}} و آدرس ایمیل {{$order->user->email}} با موفقیت ثبت شد</h3>
    <table>
        <tr>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">ردیف</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">نام محصول</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">تعداد</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">مبلغ واحد</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">جمع</td>
        </tr>
        @foreach($order_details as $key=>$order_detail)
            <tr>
                <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{$key+1}}</td>
                <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{$order_detail->product->name}}</td>
                <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{$order_detail->count_one}}&nbsp;عدد</td>
                <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{number_format($order_detail->unit_price*$unit_price->price)}}&nbsp;تومان</td>
                <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{number_format($order_detail->unit_price*$order_detail->count_one*$unit_price->price)}}&nbsp;تومان</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">جمع فاکتور</td>
            <td colspan="1" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{number_format($factor_price)}}&nbsp;تومان</td>
        </tr>
        <tr>
            <td colspan="4" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">هزینه حمل</td>
            <td colspan="1" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{number_format($peyk_price)}}&nbsp;تومان</td>
        </tr>
        <tr>
            <td colspan="4" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">تخفیف</td>
            <td colspan="1" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{number_format($off_price)}}&nbsp;تومان</td>
        </tr>
        <tr>
            <td colspan="4" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">جمع کل</td>
            <td colspan="1" style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{number_format($total_price)}}&nbsp;تومان</td>
        </tr>
    </table>
    <p>
        <h2>این سفارش در حال حاضر پرداخت نشده است</h2>
    </p>
    <h3>فروشگاه اینترنتی {{$site_name}}</h3>
</div>