@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - پیام ها </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت پیام ها</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

        <!-- Media library -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title text-semibold">لیست پیام ها</h6>
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
                    <th class="text-center">تاریخ</th>
                    <th class="text-center"></th>
                    <th class="text-center">نویسنده</th>
                    <th class="text-center">ایمیل</th>
                    <th class="text-center">تلفن</th>
                    <th class="text-center">متن پیام</th>
                    <th class="text-center">خوانده شده</th>
                    <th class="text-center"></th>
                    <th class="text-center">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                <tr>
                    <td class="text-center"><input type="checkbox" class="styled"></td>
                    <td class="text-center">{{Verta::instance($message->created_at)->format('%A')}}<br>{{Verta::instance($message->created_at)->formatJalaliDate()}}</td>
                    <td class="text-center"></td>
                    <td class="text-center">{{$message->user_name}}</td>
                    <td class="text-center">{{$message->email}}</td>
                    <td class="text-center">{{$message->tel}}</td>
                    <td class="text-center">{{$message->text}}</td>
                    <td class="text-center @if($message->status==1) bg-success @endif">@if($message->status==1)بله @else خیر @endif</td>
                    <td class="text-center"></td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @if($message->read_message==0)
                                    <li><a href="{{route('message.update',$message->id)}}"><i class="icon-pencil7"></i> خوانده شد</a></li>
                                    <li class="divider"></li>
                                    @endif
                                    <li><a href="{{route('message.edit',['id'=>$message->id])}}"><i class="icon-pencil7"></i> ویرایش</a></li>
                                    <li class="divider"></li>
                                    <li><a href="/admin/message/delete/{{$message->id}}"><i class="icon-bin"></i>حذف</a></li>
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
