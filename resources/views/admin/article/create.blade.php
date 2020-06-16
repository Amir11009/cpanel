@extends('layouts.admin')

@section('content')
    <!-- Content area -->

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>افزودن مقاله</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت مقالات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن مقاله</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/article" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">افزودن مقالات </h5>

                        <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان" value="{{old('title')}}">
                                </div>

                                <label for="inputTitle" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputTitle" placeholder="نامک" value="{{old('slug')}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="color" class="col-sm-1 col-form-label">دسته بندی</label>
                                <div class="col-sm-11">
                                    @foreach($categories as $category)
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" id="category-{{$category->id}}" name="category[]" value="{{$category->id}}" class="custom-control-input">
                                            <label class="custom-control-label" for="category-{{$category->id}}">{{$category->title}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">توضیح</label>
                                <div class="col-sm-11">
                                    <textarea name="description" class="form-control" id="inputDesc" placeholder="توضیحات مقاله"></textarea>
                                </div>
                            </div>

{{--                            <script>--}}
{{--                                var editor = CKEDITOR.replace('description',{--}}
{{--                                    filebrowserBrowseUrl: '/ckeditor/ckfinder/ckfinder.html',--}}
{{--                                    filebrowserUploadUrl: '/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'--}}
{{--                                });--}}
{{--                                CKFinder.setupCKEditor( editor );--}}
{{--                            </script>--}}

                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">متن</label>
                                <div class="col-sm-11">
                                    <textarea name="text" class="form-control" id="inputDesc" placeholder="متن مقاله"></textarea>
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
                                    <input type="file" name="main_image" class="form-control" id="inputImage" placeholder="تصویر1 مقاله">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر1 در صفحه مقالات نمایش داده می شود">
                                        ?
                                    </button>
                                </div>

                                <label for="inputHomeImage" class="col-sm-1 col-form-label">تصویر2</label>
                                <div class="col-sm-4">
                                    <input type="file" name="short_image" class="form-control" id="inputHomeImage" placeholder="تصویر2 مقاله">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر2 در سایدبار نمایش داده می شود">
                                        ?
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label">وضعیت</label>
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

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">افزودن<i class="icon-arrow-left13 position-right"></i></button>
                                <a href="{{route('article.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

@endsection
