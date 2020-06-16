@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>افزودن دسته بندی خدمات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت خدمات</a></li>
                        <li class="breadcrumb-item"><a href="#">دسته بندی خدمات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن دسته خدمات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/service_category" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ایجاد دسته بندی خدمات</h5>
                        <form action="{{route('service_category.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان دسته خدمات">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="نامک دسته خدمات">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">توضیح</label>
                                <div class="col-sm-11">
                                    <textarea name="description" class="form-control" id="inputDesc" placeholder="توضیحات دسته خدمات"></textarea>
                                </div>
                            </div>

                            <script>
                                var editor = CKEDITOR.replace('description',{
                                    filebrowserBrowseUrl: '/ckeditor/ckfinder/ckfinder.html',
                                    filebrowserUploadUrl: '/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                                });
                                CKFinder.setupCKEditor( editor );
                            </script>

                            <div class="form-group row">
                                <label for="inputText" class="col-sm-1 col-form-label">متن</label>
                                <div class="col-sm-11">
                                    <textarea name="text" class="form-control" id="inputText" placeholder="متن دسته خدمات"></textarea>
                                </div>
                            </div>

                            <script>
                                var editor = CKEDITOR.replace('text',{
                                    filebrowserBrowseUrl: '/ckeditor/ckfinder/ckfinder.html',
                                    filebrowserUploadUrl: '/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                                });
                                CKFinder.setupCKEditor( editor );
                            </script>

                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">تصویر1</label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر1 دسته خدمات">
                                    <p class="text-danger"></p>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر1 در صفحه دسته خدمات نمایش داده می شود">
                                        ?
                                    </button>
                                </div>

                                <label for="inputHomeImage" class="col-sm-1 col-form-label">تصویر2</label>
                                <div class="col-sm-4">
                                    <input type="file" name="home_image" class="form-control" id="inputHomeImage" placeholder="تصویر2 دسته خدمات">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر2 در صفحه اصلی نمایش داده می شود">
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

                                <label for="inputImage" class="col-sm-1 col-form-label">صفحه اصلی</label>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="show_home" id="inlineRadio3" value="1" checked>
                                        <label class="form-check-label" for="inlineRadio3">نمایش</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="show_home" id="inlineRadio4" value="0">
                                        <label class="form-check-label" for="inlineRadio4">عدم نمایش</label>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="                                    وضعیت نمایش دسته خدمات در صفحه اصلی">
                                        ?
                                    </button>
                                </div>

                            </div>

                            <hr>
                            <button class="btn btn-primary" type="submit"> ثبت </button>
                            <a href="{{route('service_category.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                        </form>
                    </div>
                </div>

        </div>

    </div>

@endsection

