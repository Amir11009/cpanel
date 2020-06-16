@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - نرخ ارز </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت نرخ ارز</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

        <!-- Media library -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title text-semibold">لیست نرخ ها</h6>
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
                    <th></th>
                    <th>نام واحد</th>
                    <th>قیمت</th>
                    <th>وضعیت</th>
                    <th class="text-center">فعالیت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($unit_prices as $unit_price)
                <tr>
                    <td><input type="checkbox" class="styled"></td>
                    <td>{{$unit_price->unit}}</td>
                    <td>{{$unit_price->price}}&nbsp;تومان</td>
                    <td>
                        @if($unit_price->status==1)
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
                                    <li><a href="{{route('unit_price.edit',['id'=>$unit_price->id])}}"><i class="icon-pencil7"></i> ویرایش</a></li>
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="/admin/unit_price/delete/{{$unit_price->id}}"><i class="icon-bin"></i>حذف</a></li>--}}
                                    {{--@if(\App\Off_product::where('unit_price_id',$unit_price->id)->get()->count()==0)--}}
                                        {{--<li class="divider"></li>--}}
                                        {{--<li><a href="/admin/unit_price/off/{{$unit_price->id}}"><i class="icon-pencil7"></i>گروه تخفیفی</a></li>--}}
                                    {{--@endif--}}
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
