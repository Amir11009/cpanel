@extends('layouts.admin')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل مدیریت</span> - مدیریت کاربران </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">مدیریت کاربران</li>
        </ul>
    </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <!-- Media library -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h6 class="panel-title text-semibold">لیست کاربران</h6>
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
                <th>نام</th>
                <th></th>
                <th>آدرس ایمیل</th>
                <th>موبایل</th>
                <th>آدرس</th>
                <th>امتیاز</th>
                <th>وضعیت</th>
                <th class="text-center">فعالیت</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><input type="checkbox" class="styled"></td>
                    <td>{{$user->name}}</td>
                    <td></td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->mobile!=null || $user->mobile!='')
                            {{$user->mobile}}
                        @else
                            ----
                        @endif
                    </td>
                    <td>
                        @if($user->address!=null || $user->address!='')
                            {{$user->address}}
                        @else
                            ----
                        @endif
                    </td>
                    <td>{{$user->order_score}}</td>
                    <td>
                        @if($user->status==1)
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
                                    <li><a href="{{route('users.edit',['id'=>$user->id])}}"><i class="icon-pencil7"></i> ویرایش</a></li>
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="/admin/unit_price/delete/{{$user->id}}"><i class="icon-bin"></i>حذف</a></li>--}}
                                    {{--@if(\App\Off_product::where('unit_price_id',$user->id)->get()->count()==0)--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="/admin/unit_price/off/{{$user->id}}"><i class="icon-pencil7"></i>گروه تخفیفی</a></li>--}}
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
