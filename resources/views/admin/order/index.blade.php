@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - سفارشات </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت سفارشات</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

        <!-- Media library -->
        <div class="panel panel-white">
            <div class="panel-heading">
                @if(Request::is('admin/order'))
                    <h6 class="panel-title text-semibold">لیست سفارشات </h6>
                @else
                    <h6 class="panel-title text-semibold">لیست سفارشات {{$category->name}}</h6>
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
                    {{--<th class="text-center">#</th>--}}
                    <th class="text-center">تاریخ</th>
                    <th class="text-center">نام کاربر</th>
                    <th class="text-center"></th>
                    <th class="text-center">وضعیت</th>
                    {{--<th class="text-center">تعداد</th>--}}
                    <th class="text-center">هزینه حمل</th>
                    <th class="text-center">تخفیف</th>
                    <th class="text-center">جمع اقلام</th>
                    <th class="text-center">مبلغ نهایی</th>
                    <th class="text-center">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                    {{--<td class="text-center"><input type="checkbox" class="styled"></td>--}}
                    <td class="text-center">{{Verta::instance($order->created_at)->format('%A')}}<br>{{Verta::instance($order->created_at)->formatJalaliDate()}}</td>
                    <td class="text-center">{{$order->user->name}}</td>
                    <td class="text-center"></td>
                    <td class="text-center">
                        {{--@if($order->status==0)--}}
                            {{--مشاهده نشده--}}
                        {{--@elseif($order->status==1)--}}
                            {{--بررسی شده--}}
                        {{--@elseif($order->status==2)--}}
                            {{--منتظر ارسال--}}
                        {{--@elseif($order->status==3)--}}
                            {{--ارسال شد--}}
                        {{--@elseif($order->status==4)--}}
                            {{--لغو شده--}}
                        {{--@endif--}}
                        @if($order->zarinStatus==100)
                            <span class="bg-success" style="padding: 2px 5px !important; border-radius: 5px !important;">پرداخت موفق</span>
                        @else
                            <span class="bg-danger" style="padding: 2px 5px !important; border-radius: 5px !important;">پرداخت ناموفق</span>
                        @endif
                    </td>
                    {{--<td class="text-center">--}}
                        {{--{{\App\Orderdetail::where('order_id',$order->id)->get()->count()}}&nbsp;عدد--}}
                    {{--</td>--}}

                    <td class="text-center">
                        {{number_format($order->peyk)}}&nbsp;تومان
                    </td>

                    <td class="text-center">
                        {{number_format($order->discount)}}&nbsp;تومان
                    </td>

                    <td class="text-center">
                        @php
                            $order_details=\App\Orderdetail::where('order_id',$order->id)->get();
                        $price=0;
                        foreach ($order_details as $order_detail){
                            $price+=$order_detail->count_one*$order_detail->unit_price*$order->arz_price;
                        }
                        @endphp
                        {{number_format($price)}}&nbsp;تومان
                    </td>

                    <td class="text-center">
                        @php
                            $order_details=\App\Orderdetail::where('order_id',$order->id)->get();
                        $price=0;
                        foreach ($order_details as $order_detail){
                            $price+=$order_detail->count_one*$order_detail->unit_price*$order->arz_price;
                        }
                        $price=($price+$order->peyk)-$order->discount
                        @endphp
                        {{number_format($price)}}&nbsp;تومان
                    </td>

                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="/admin/order/{{$order->id}}"><i class="icon-search4"></i>جزئیات</a></li>
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="{{route('order.edit',['id'=>$order->id])}}"><i class="icon-pencil7"></i> ویرایش</a></li>--}}
                                    <li class="divider"></li>
                                    <li><a href="/admin/order/delete/{{$order->id}}"><i class="icon-bin"></i>حذف</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /media library -->

    <script type="text/javascript">
        @if(session()->get('order_delete')=='success')
            swal({
            text: "سفارش مورد نظر با موفقیت حذف شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>

@endsection
