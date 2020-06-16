<div style="direction:rtl;">
    <h3>سفارش کاربر با مشخصات {{$order->user->name}} و آدرس ایمیل {{$order->user->email}} با موفقیت پرداخت شد</h3>
    <table>
        <tr>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">مبلغ پرداختی</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">کد پیگیری سفارش</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">کد پیگیری زرین</td>
        </tr>
        <tr>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{number_format($total_price)}}&nbsp;تومان</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{$order->refnum}}</td>
            <td style="padding: 10px !important; text-align: center !important; font-size: 15px !important; border: 1px solid black !important;">{{$order->zarinAuthority}}</td>
        </tr>
    </table>
    <h3>فروشگاه اینترنتی {{$site_name}}</h3>
</div>