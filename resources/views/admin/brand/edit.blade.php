@extends('layouts.admin')

@section('content')
    <!-- Content area -->

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش برند</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت برند</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش برند</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/brand" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش برند </h5>

                        <form action="{{route('brand.update',['id'=>$brand->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان" value="{{$brand->title}}">
                                </div>

                                <label for="inputTitle" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputTitle" placeholder="نامک" value="{{$brand->slug}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">لینک برند</label>
                                <div class="col-sm-5">
                                    <input type="text" name="brand_link" class="form-control" id="inputTitle" placeholder="لینک برند" value="{{$brand->brand_link}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">توضیح</label>
                                <div class="col-sm-11">
                                    <textarea name="description" class="form-control" id="inputDesc" placeholder="توضیحات برند">{{$brand->description}}</textarea>
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
                                    <textarea name="text" class="form-control" id="inputDesc" placeholder="متن برند">{{$brand->text}}</textarea>
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
                                <label for="inputImage" class="col-sm-1 col-form-label">تصویر</label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر برند">
                                    <img src="/{{$brand->image}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر اصلی برند می باشد">
                                        ?
                                    </button>
                                </div>

                                <label class="col-sm-1 col-form-label">وضعیت</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" @if($brand->status==1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio1">فعال</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" @if($brand->status==0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">غیرفعال</label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">ویرایش<i class="icon-arrow-left13 position-right"></i></button>
                                <a href="{{route('brand.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>

@endsection
