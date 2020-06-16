@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - زیرگروه1 </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت زیرگروه1</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('group_sub1.update',['id'=>$group_sub1->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش زیرگروه1 {{$group_sub1->name}}</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام زیرگروه1</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" autofocus value="{{$group_sub1->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">گروه اصلی</label>
                        <div class="col-lg-10">
                            <select name="group_main_id" class="form-control">
                                <option value="0">انتخاب کنید</option>
                                @foreach($group_mains as $group_main)
                                <option value="{{$group_main->id}}" @if($group_sub1->group_main_id==$group_main->id) selected @endif>{{$group_main->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">عکس زیرگروه1</label>
                        <div class="col-lg-8">
                            {{--<input type="file" name="image1" class="file-styled">--}}
                        </div>
                        <div class="col-lg-2">
                            <img src="/img/group_sub1/{{$group_sub1->image}}" width="150" height="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">وضعیت زیرگروه1</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                    <input type="radio" name="status" class="styled" value="1" @if($group_sub1->status == 1) checked="checked" @endif>
                                    فعال
                                </label>
                                <label>
                                    <input type="radio" name="status" class="styled" value="0" @if($group_sub1->status == 0) checked="checked" @endif>
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
