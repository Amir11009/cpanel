@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - تخفیف ها </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت تخفیف ها</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('off_product.update',['id'=>$off_product->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش تخفیف ها {{$off_product->off_name}}</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام تخفیف</label>
                        <div class="col-lg-10">
                            <input type="text" name="off_name" class="form-control" autofocus value="{{$off_product->off_name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">زیرگروه1</label>
                        <div class="col-lg-10">
                            <select name="group_sub1_id" class="form-control">
                                <option value="0">انتخاب کنید</option>
                                @foreach($group_sub1s as $group_sub1)
                                    <option value="{{$group_sub1->id}}" @if($off_product->group_sub1_id==$group_sub1->id) selected @endif>{{$group_sub1->name}}&nbsp;{{$group_sub1->group_main->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام نوع گروه</label>
                        <div class="col-lg-10">
                            <input type="text" name="group_type" class="form-control" autofocus value="{{$off_product->group_type}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">وضعیت محصول</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                    <input type="radio" name="status" class="styled" value="1" @if($off_product->status == 1) checked="checked" @endif>
                                    فعال
                                </label>
                                <label>
                                    <input type="radio" name="status" class="styled" value="0" @if($off_product->status == 0) checked="checked" @endif>
                                    غیرفعال
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">اولین نمایش</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                    <input type="radio" name="first" class="styled" value="1" @if($off_product->first == 1) checked="checked" @endif>
                                    بله
                                </label>
                                <label>
                                    <input type="radio" name="first" class="styled" value="0" @if($off_product->first == 0) checked="checked" @endif>
                                    خیر
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
