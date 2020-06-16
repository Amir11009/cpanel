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

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('order_score.update',['id'=>$order_score->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش امتیاز خرید </legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">امتیاز شروع</label>
                        <div class="col-lg-10">
                            <input type="number" name="score_start" class="form-control" value="{{$order_score->score_start}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">امتیاز پایان</label>
                        <div class="col-lg-10">
                            <input type="number" name="score_end" class="form-control" value="{{$order_score->score_end}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">تخفیف ریالی</label>
                        <div class="col-lg-10">
                            <input type="number" name="off_price" class="form-control" value="{{$order_score->off_price}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">وضعیت امتیاز</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                    <input type="radio" name="status" class="styled" value="1" @if($order_score->status == 1) checked="checked" @endif>
                                    فعال
                                </label>
                                <label>
                                    <input type="radio" name="status" class="styled" value="0" @if($order_score->status == 0) checked="checked" @endif>
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
