@extends('layouts.admin')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل مدیریت</span> - ویرایش کاربران </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">ویرایش کاربران</li>
        </ul>
    </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('users.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش کاربر&nbsp; {{$user->name}}</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام کاربر</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" autofocus value="{{$user->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">ایمیل کاربر</label>
                        <div class="col-lg-10">
                            <input type="text" name="email" class="form-control" autofocus value="{{$user->email}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">موبایل کاربر</label>
                        <div class="col-lg-10">
                            <input type="text" name="mobile" class="form-control" autofocus value="{{$user->mobile}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">آدرس کاربر</label>
                        <div class="col-lg-10">
                            <input type="text" name="address" class="form-control" autofocus value="{{$user->address}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">امتیاز کاربر</label>
                        <div class="col-lg-10">
                            <input type="text" name="order_score" class="form-control" autofocus value="{{$user->order_score}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-lg-2">وضعیت کاربر</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                <input type="radio" name="status" class="styled" value="1" @if($user->status == 1) checked="checked" @endif>
                                فعال
                                </label>
                                <label>
                                <input type="radio" name="status" class="styled" value="0" @if($user->status == 0) checked="checked" @endif>
                                غیرفعال
                                </label>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">ویرایش<i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
