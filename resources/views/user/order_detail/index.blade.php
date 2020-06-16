@extends('user_layout.user')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل کاربر</span> - جزئیات سفارش </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">جزئیات سفارش</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

        <!-- Media library -->
        <div class="panel panel-white">
            <div class="panel-heading">
                @if(Request::is('user/order_detail'))
                    <h6 class="panel-title text-semibold">جزئیات سفارش</h6>
                @else
                    <h6 class="panel-title text-semibold">جزئیات سفارش {{$order->user->name}}&nbsp;تاریخ {{Verta::instance($order->created_at)->formatJalaliDate()}}</h6>
                    @if($order->user->address!=null || $order->user->address!='')
                        <h6 class="panel-title text-semibold" style="margin-top: 10px !important;">آدرس : {{$order->user->address}}</h6>
                    @else
                        <h6 class="panel-title text-semibold" style="margin-top: 10px !important;">آدرس : ثبت نشده است</h6>
                    @endif
                    @if($order->user->mobile!=null || $order->user->mobile!='')
                        <h6 class="panel-title text-semibold" style="margin-top: 10px !important;">موبایل : {{$order->user->mobile}}</h6>
                    @else
                        <h6 class="panel-title text-semibold" style="margin-top: 10px !important;">موبایل : ثبت نشده است</h6>
                    @endif
                @endif
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <table class="table table-striped media-library table-lg">
                <thead>
                <tr>
                    <th class="text-center"></th>
                    <th class="text-center">محصول</th>
                    <th class="text-center">سایز</th>
                    <th class="text-center">رنگ</th>
                    <th class="text-center">تعداد</th>
                    <th class="text-center">قیمت واحد</th>
                    <th class="text-center">جمع کل</th>
                    {{--<th class="text-center">وضعیت</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($order_details as $order_detail)
                <tr>
                    <td class="text-center"><input type="checkbox" class="styled"></td>
                    <td class="text-center">{{$order_detail->product->name}}</td>
                    <td class="text-center">
                        @if($order_detail->size_id!=0)
                            {{App\Size::where('id',$order_detail->size_id)->first()->name}}
                        @else
                            ندارد
                        @endif
                    </td>
                    <td class="text-center">
                        @if($order_detail->color_id!=0)
                            {{App\Color::where('id',$order_detail->color_id)->first()->name}}
                        @else
                            ندارد
                        @endif
                    </td>
                    <td class="text-center">
                        {{$order_detail->count_one}}&nbsp;عدد
                        {{--<br>--}}
                        {{--{{$order_detail->count_pack}}&nbsp;بسته--}}
                        {{--<br>--}}
                        {{--{{$order_detail->count_box}}&nbsp;کارتن--}}
                    </td>
                    <td class="text-center">
                        {{number_format($order_detail->unit_price*$order->arz_price)}}&nbsp;تومان
                        {{--<br>--}}
                        {{--@foreach (DB::table('product_size')->where([['product_id',$order_detail->product_id],['size_id',$order_detail->size_id]])->get() as $size)--}}
                            {{--{{number_format($size->count_pack*$order_detail->unit_price)}}&nbsp;تومان--}}
                            {{--<br>--}}
                            {{--{{number_format($size->count_box*$order_detail->unit_price)}}&nbsp;تومان--}}
                        {{--@endforeach--}}
                    </td>
                    <td class="text-center">
                        {{--@foreach (DB::table('product_size')->where([['product_id',$order_detail->product_id],['size_id',$order_detail->size_id]])->get() as $size)--}}
                            {{--{{number_format(($order_detail->count_one*$order_detail->unit_price)+($order_detail->count_pack*$size->count_pack*$order_detail->unit_price)+($order_detail->count_box*$size->count_box*$order_detail->unit_price))}}&nbsp;تومان--}}
                        {{--@endforeach--}}
                        {{number_format($order_detail->unit_price*$order->arz_price*$order_detail->count_one)}}&nbsp;تومان
                    </td>
                    {{--<td class="text-center">--}}
                        {{--@if($order_detail->status==0)--}}
                            {{--مشاهده نشده--}}
                        {{--@elseif($order_detail->status==1)--}}
                            {{--بررسی شده--}}
                        {{--@elseif($order_detail->status==2)--}}
                            {{--منتظر ارسال--}}
                        {{--@elseif($order_detail->status==3)--}}
                            {{--ارسال شد--}}
                        {{--@elseif($order_detail->status==4)--}}
                            {{--لغو شده--}}
                        {{--@endif--}}
                    {{--</td>--}}
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /media library -->
@endsection
