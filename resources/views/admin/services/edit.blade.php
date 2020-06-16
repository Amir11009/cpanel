@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>افزودن خدمات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت خدمات</a></li>
                        <li class="breadcrumb-item"><a href="#">خدمات اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش خدمات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/service" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش خدمات {{$service->title}}</h5>
                        <form action="{{route('service.update',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان خدمات" value="{{$service->title}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="نامک خدمات" value="{{$service->slug}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputCategoryId" class="col-sm-1 col-form-label">دسته بندی</label>
                                <div class="col-sm-5">
                                    <select class="js-example-basic-single" dir="rtl" name="category_id">
                                        <option></option>
                                        @foreach($service_categories as $service_category)
                                            <option value="{{$service_category->id}}" @if($service_category->id==$service->category_id) selected @endif>{{$service_category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">توضیح</label>
                                <div class="col-sm-11">
                                    <textarea name="description" class="form-control" id="inputDesc" placeholder="توضیحات خدمات">{{$service->description}}</textarea>
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
                                    <textarea name="text" class="form-control" id="inputText" placeholder="متن خدمات">{{$service->text}}</textarea>
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
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر1 خدمات">
                                    <img src="/{{$service->image}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر1 در صفحه خدمات نمایش داده می شود">
                                        ?
                                    </button>
                                </div>

                                <label for="inputHomeImage" class="col-sm-1 col-form-label">تصویر2</label>
                                <div class="col-sm-4">
                                    <input type="file" name="home_image" class="form-control" id="inputHomeImage" placeholder="تصویر2 خدمات">
                                    <img src="/{{$service->home_image}}" width="100" height="100" class="mt-3 rounded">
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
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" @if($service->status==1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio1">فعال</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" @if($service->status==0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">غیرفعال</label>
                                    </div>
                                </div>

                                <label for="inputImage" class="col-sm-1 col-form-label">صفحه اصلی</label>
                                <div class="col-sm-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="show_home" id="inlineRadio3" value="1" @if($service->status==1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio3">نمایش</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="show_home" id="inlineRadio4" value="0" @if($service->status==0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio4">عدم نمایش</label>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="                                    وضعیت نمایش خدمات در صفحه اصلی">
                                        ?
                                    </button>
                                </div>

                            </div>

                            <hr>
                            <button class="btn btn-primary" type="submit"> ویرایش </button>
                            <a href="{{route('service.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>

@endsection

