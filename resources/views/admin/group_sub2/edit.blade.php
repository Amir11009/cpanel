@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - زیرگروه2 </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت زیرگروه2</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('group_sub2.update',['id'=>$group_sub2->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش زیرگروه2 {{$group_sub2->name}}</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام زیرگروه2</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" autofocus value="{{$group_sub2->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">زیرگروه1</label>
                        <div class="col-lg-10">
                            <select name="group_sub1_id" class="form-control">
                                <option value="0">انتخاب کنید</option>
                                @foreach($group_sub1s as $group_sub1)
                                    <option value="{{$group_sub1->id}}" @if($group_sub2->group_sub1_id==$group_sub1->id) selected @endif>{{$group_sub1->name}}&nbsp;{{$group_sub1->group_main->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">عکس زیرگروه2</label>
                        <div class="col-lg-8">
                            {{--<input type="file" name="image1" class="file-styled">--}}
                        </div>
                        <div class="col-lg-2">
                            <img src="{{$group_sub2->image1}}" width="150" height="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">وضعیت محصول</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                    <input type="radio" name="status" class="styled" value="1" @if($group_sub2->status == 1) checked="checked" @endif>
                                    فعال
                                </label>
                                <label>
                                    <input type="radio" name="status" class="styled" value="0" @if($group_sub2->status == 0) checked="checked" @endif>
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
