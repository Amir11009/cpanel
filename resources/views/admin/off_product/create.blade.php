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

            <form class="form-horizontal" action="{{route('group_sub2.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset class="content-group">
                    <legend class="text-bold">افزودن زیرگروه2</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام زیرگروه2</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" autofocus value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">زیرگروه1</label>
                        <div class="col-lg-10">
                            <select name="group_sub1_id" class="form-control">
                                <option value="0">انتخاب کنید</option>
                                @foreach($group_sub1s as $group_sub1)
                                    <option value="{{$group_sub1->id}}">{{$group_sub1->name}}&nbsp;{{$group_sub1->group_main->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">عکس زیرگروه2</label>
                        <div class="col-lg-10">
                            <input type="file" name="image" class="file-styled">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">وضعیت زیرگروه2</label>
                        <div class="radio">
                            <div class="col-lg-10">
                                <label>
                                    <input type="radio" name="status" class="styled" value="1" checked="checked">
                                    فعال
                                </label>
                                <label>
                                    <input type="radio" name="status" class="styled" value="0">
                                    غیرفعال
                                </label>
                            </div>
                        </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">افزودن<i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
