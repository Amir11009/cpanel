@extends('user_layout.user')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل کاربر</span> - پروفایل کاربر </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">پروفایل کاربر</li>
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
                    <legend class="text-bold">پروفایل کاربر&nbsp; {{$user->name}}</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام کاربر</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" autofocus value="{{$user->name}}">
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

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">ویرایش<i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
