@extends('layouts.admin')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل مدیریت</span> - بازدیدها </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">مدیریت بازدیدها</li>
        </ul>
    </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <!-- Media library -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title text-semibold">لیست بازدید 5 روز اخیر </h6>
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
                <th class="text-center">ردیف</th>
                <th></th>
                <th class="text-center">تاریخ میلادی</th>
                <th class="text-center">تاریخ شمسی</th>
                <th class="text-center">تعداد بازدید</th>
                <th class="text-center">جزئیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dates as $key=>$date)
                <tr>
                    <td class="text-center"><input type="checkbox" class="styled"></td>
                    <td class="text-center">{{$key+1}}</td>
                    <td></td>
                    <td class="text-center">{{$date}}</td>
                    <td class="text-center">{{Verta::instance($date)->formatJalaliDate()}}</td>
                    <td class="text-center">{{number_format($date_res[$key])}}</td>
                    <td class="text-center">
                        <a href="{{route('ip.show',['date'=>$date])}}"><i class="icon-search4"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /media library -->
@endsection
