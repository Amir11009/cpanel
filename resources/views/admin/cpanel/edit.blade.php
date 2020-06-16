@extends('layouts.admin')

@section('content')
    <!-- Content area -->

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش سایت</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت مقالات</a></li>
                        <li class="breadcrumb-item"><a href="#">مدیریت سته بندی مقالات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش دسته بندی مقالات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/category" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش دسته بندی مقالات </h5>

                        <form action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" autofocus placeholder="عنوان دسته بندی" value="{{$category->title}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputSlug" autofocus placeholder="عنوان دسته بندی" value="{{$category->slug}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label">وضعیت</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" @if($category->status==1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio1">فعال</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" @if($category->status==0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">غیرفعال</label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">ویرایش<i class="icon-arrow-left13 position-right"></i></button>
                                <a href="{{route('category.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>

@endsection
