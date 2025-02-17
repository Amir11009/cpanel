@extends('layouts.admin')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل مدیریت</span> - تخفیف کلی </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">مدیریت تخفیف کلی</li>
        </ul>
    </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <!-- Media library -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title text-semibold">لیست تخفیف</h6>
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
                <th>ردیف</th>
                <th></th>
                <th>درصد تخفیف</th>
                <th>وضعیت</th>
                <th class="text-center">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($off_alls as $key=>$off_all)
                <tr>
                    <td><input type="checkbox" class="styled"></td>
                    <td>{{$key+1}}</td>
                    <td></td>
                    <td>{{$off_all->off}}&nbsp;درصد</td>
                    <td>
                        @if($off_all->status==1)
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
                                    <li><a href="/admin/off/all/edit/{{$off_all->id}}"><i class="icon-pencil7"></i> ویرایش</a></li>
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="/admin/off_all/delete/{{$off_all->id}}"><i class="icon-bin"></i>حذف</a></li>--}}
                                    {{--@if(\App\Off_product::where('off_all_id',$off_all->id)->get()->count()==0)--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="/admin/off_all/off/{{$off_all->id}}"><i class="icon-pencil7"></i>گروه تخفیفی</a></li>--}}
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
