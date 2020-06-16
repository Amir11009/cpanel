@extends('layouts.admin')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل مدیریت</span> - هزینه ارسال </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">مدیریت هزینه ارسال</li>
        </ul>
    </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="/admin/send_price/edit" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش هزینه ارسال </legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">هزینه ارسال</label>
                        <div class="col-lg-10">
                            <input type="number" name="price" class="form-control" autofocus value="{{$send_price->price}}">
                            <input type="hidden" name="id" class="form-control" value="{{$send_price->id}}">
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
