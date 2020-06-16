@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - درس ها </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت درس ها</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset class="content-group">
                    <legend class="text-bold">افزودن درس</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام درس</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" autofocus value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">پایه درسی</label>
                        <div class="col-lg-10">
                            <select name="grade_id" class="form-control">
                                <option value="0">انتخاب کنید</option>
                                @foreach($grades as $grade)
                                    <option value="{{$grade->id}}">{{$grade->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">نام کتاب</label>
                        <div class="col-lg-10">
                            <select name="book_id" class="form-control">
                                <option value="0">انتخاب کنید</option>
                                @foreach($books as $book)
                                    <option value="{{$book->id}}">{{$book->name}}&nbsp;{{$book->grade->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">شماره فصل</label>
                        <div class="col-lg-10">
                            <input type="text" name="number" class="form-control" value="{{old('number')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">صفحه شروع</label>
                        <div class="col-lg-10">
                            <input type="text" name="page_start" class="form-control" value="{{old('page_start')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">صفحه پایان</label>
                        <div class="col-lg-10">
                            <input type="text" name="page_end" class="form-control" value="{{old('page_end')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">تاریخ تدریس</label>
                        <div class="col-lg-10">
                            <input type="text" name="date" id="pcal11" class="pdate form-control">
                            <input type="hidden" name="date" id="extra1">
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
