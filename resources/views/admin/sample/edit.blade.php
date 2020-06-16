@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش نمونه کار</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت نمونه کار</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش نمونه کار</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/sample" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش نمونه کار</h5>
                        <form action="{{route('sample.update',['id'=>$sample->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان نمونه کار" value="{{$sample->title}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="نامک نمونه کار" value="{{$sample->slug}}">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label for="inputCategoryId" class="col-sm-1 col-form-label">خدمات</label>
                                <div class="col-sm-4">
                                    <select class="js-example-basic-single" dir="rtl" name="category_id">
                                        <option></option>
                                        @foreach($services as $service)
                                            <option @if($sample->services->id==$service->id) selected @endif value="{{$service->id}}">{{$service->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="این نمونه کار متعلق به کدام خدمات می باشد">
                                        ?
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">توضیح</label>
                                <div class="col-sm-11">
                                    <textarea name="description" class="form-control" id="inputDesc" placeholder="توضیحات نمونه کار">{{$sample->description}}</textarea>
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
                                    <textarea name="text" class="form-control" id="inputText" placeholder="متن نمونه کار">{{$sample->text}}</textarea>
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
                                <label for="inputImage" class="col-sm-1 col-form-label">تصویر اصلی</label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر اصلی نمونه کار">
                                    <img src="/{{$sample->image}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر اصلی نمونه کار می باشد">
                                        ?
                                    </button>
                                </div>

                            </div>

                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label">وضعیت</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" @if($sample->status==1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio1">فعال</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" @if($sample->status==0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">غیرفعال</label>
                                    </div>
                                </div>

                            </div>

                            <hr>
                            <button class="btn btn-primary" type="submit"> ویرایش </button>
                            <a href="{{route('sample.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>

@endsection

