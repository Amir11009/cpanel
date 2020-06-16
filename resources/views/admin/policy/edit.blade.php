@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش قوانین و مقررات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت قوانین ما</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش قوانین ما</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش قوانین ما </h5>
                        <form action="{{route('policy.update',['id'=>$policy->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-11">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان" value="{{$policy->title}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">متن</label>
                                <div class="col-sm-11">
                                    <textarea name="text" class="form-control" id="inputImage" placeholder="متن قوانین">{{$policy->text}}</textarea>
                                </div>
                            </div>

                            <script>
                                var editor = CKEDITOR.replace('text',{
                                    filebrowserBrowseUrl: '/ckeditor/ckfinder/ckfinder.html',
                                    filebrowserUploadUrl: '/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                                });
                                CKFinder.setupCKEditor( editor );
                            </script>


{{--                            <div class="form-group row">--}}
{{--                                <label for="inputImage" class="col-sm-1 col-form-label">تصویر</label>--}}
{{--                                <div class="col-sm-4">--}}
{{--                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر">--}}
{{--                                    <img src="/{{$policy->image}}" width="100" height="100" class="mt-3 rounded">--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-1">--}}
{{--                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر در صفحه درباره ما نمایش داده می شود">--}}
{{--                                        ?--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                            </div>--}}

                            <hr>
                            <button class="btn btn-primary" type="submit"> ویرایش </button>

                        </form>
                    </div>
                </div>

            </div>

        </div>

@endsection

