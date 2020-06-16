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

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="/admin/off/all/update/{{$off_all->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{--{{method_field('PATCH')}}--}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش درصد تخفیف کلی</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">مقدار درصد تخفیف</label>
                        <div class="col-lg-10">
                            <input type="text" name="off" class="form-control" autofocus value="{{$off_all->off}}">
                        </div>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label class="control-label col-lg-2">قیمت نرخ ارز</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--<input type="number" name="price" class="form-control" autofocus value="{{$off_all->price}}">--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                    <label class="control-label col-lg-2">وضعیت تخفیف</label>
                    <div class="radio">
                    <div class="col-lg-10">
                    <label>
                    <input type="radio" name="status" class="styled" value="1" @if($off_all->status == 1) checked="checked" @endif>
                    فعال
                    </label>
                    <label>
                    <input type="radio" name="status" class="styled" value="0" @if($off_all->status == 0) checked="checked" @endif>
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
