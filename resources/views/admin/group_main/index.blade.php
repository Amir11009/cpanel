@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - گروه اصلی </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت گروه اصلی</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

        <!-- Media library -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title text-semibold">لیست گروه اصلی</h6>
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
                    <th class="text-center">نام</th>
                    <th></th>
                    <th class="text-center">وضعیت</th>
                    <th class="text-center">فعالیت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($group_mains as $group_main)
                <tr>
                    <td><input type="checkbox" class="styled"></td>
                    <td class="text-center">{{$group_main->name}}</td>
                    <td></td>
                    <td class="text-center">
                        @if($group_main->status==1)
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
                                    <li><a href="{{route('group_main.edit',['id'=>$group_main->id])}}"><i class="icon-pencil7"></i> ویرایش</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/admin/group_main/delete/{{$group_main->id}}"><i class="icon-bin"></i>حذف</a></li>
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
