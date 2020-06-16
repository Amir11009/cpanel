@extends('layouts.admin')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل مدیریت</span> - امتیاز خرید </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">مدیریت امتیاز خرید</li>
        </ul>
    </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <!-- Media library -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title text-semibold">لیست امتیاز خرید</h6>
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
                <th>ردیف</th>
                <th>امتیاز شروع</th>
                <th>امتیاز پایان</th>
                <th>تخفیف ریالی</th>
                {{--<th>تخفیف درصدی</th>--}}
                <th>وضعیت</th>
                <th class="text-center">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order_scores as $key=>$order_score)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$order_score->score_start}}</td>
                    <td>{{$order_score->score_end}}</td>
                    <td>{{number_format($order_score->off_price)}}&nbsp;تومان</td>
                    {{--<td>{{$order_score->off_darsad}}&nbsp;درصد</td>--}}
                    <td>
                        @if($order_score->status>0)
                            فعال
                        @else
                            غیرفعال
                        @endif
                    </td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('order_score.edit',['id'=>$order_score->id])}}"><i class="icon-pencil7"></i> ویرایش</a></li>
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="/admin/order_score/delete/{{$order_score->id}}"><i class="icon-bin"></i>حذف</a></li>--}}
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
@endsection
