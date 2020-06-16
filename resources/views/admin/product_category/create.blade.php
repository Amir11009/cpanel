@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>افزودن دسته بندی محصولات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت دسته بندی محصولات</a></li>
                        <li class="breadcrumb-item"><a href="#">دسته بندی محصولات اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش دسته بندی محصولات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/product_category" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">افزودن دسته بندی محصولات </h5>
                        <form action="{{route('product_category.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان دسته بندی محصولات">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="نامک دسته بندی محصولات">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputCategoryId" class="col-sm-1 col-form-label">انتخاب والد</label>
                                <div class="col-sm-4">
                                    <select class="js-example-basic-single" dir="rtl" name="parent_id">
                                        <option value="0">سر دسته ندارد</option>
                                        @foreach($product_categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="در صورتی که دسته مورد نظر خودش سر دسته است حالت 'سردسته ندارد' را انتخاب کنید">
                                        ?
                                    </button>
                                </div>

                                <label for="inputImage" class="col-sm-1 col-form-label">تصویر</label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر دسته بندی محصولات">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر دسته بندی محصول">
                                        ?
                                    </button>
                                </div>
                            </div>

                            <hr>
                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">وضعیت</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" checked>
                                        <label class="form-check-label" for="inlineRadio1">فعال</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                                        <label class="form-check-label" for="inlineRadio2">غیرفعال</label>
                                    </div>
                                </div>

                            </div>

                            <hr>
                            <button class="btn btn-primary" type="submit"> ثبت </button>
                            <a href="{{route('product_category.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>

@endsection

