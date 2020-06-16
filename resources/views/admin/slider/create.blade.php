@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>افزودن اسلایدر</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت اسلایدر</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن اسلایدر</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/slider" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">افزودن اسلایدر</h5>
                        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان اسلایدر">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">متن</label>
                                <div class="col-sm-5">
                                    <input type="text" name="text" class="form-control" id="inputSlug" placeholder="متن اسلایدر">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">متن دکمه1</label>
                                <div class="col-sm-5">
                                    <input type="text" name="btn_text1" class="form-control" id="inputTitle" placeholder="متن دکمه1">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">لینک دکمه1</label>
                                <div class="col-sm-5">
                                    <input type="text" name="btn_link1" class="form-control" id="inputSlug" placeholder="لینک دکمه1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">متن دکمه2</label>
                                <div class="col-sm-5">
                                    <input type="text" name="btn_text2" class="form-control" id="inputTitle" placeholder="متن دکمه2">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">لینک دکمه2</label>
                                <div class="col-sm-5">
                                    <input type="text" name="btn_link2" class="form-control" id="inputSlug" placeholder="لینک دکمه2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">اولویت اسلایدر</label>
                                <div class="col-sm-5">
                                    <input type="number" name="priority" class="form-control" id="inputTitle" placeholder="اولویت اسلایدر" value="0">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">تصویر اسلایدر</label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر اسلایدر">
                                    <p class="text-danger">سایز 395*840 باشد</p>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر اصلی اسلایدر می باشد">
                                        ?
                                    </button>
                                </div>

                                <label for="inputImage2" class="col-sm-1 col-form-label">تصویر موبایل</label>
                                <div class="col-sm-4">
                                    <input type="file" name="image_mobile" class="form-control" id="inputImage2" placeholder="تصویر موبایل">
                                    <p class="text-danger">سایز 395*510 باشد</p>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر اسلایدر در موبایل می باشد">
                                        ?
                                    </button>
                                </div>
                            </div>

                            <hr>
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

                            <hr>
                            <button class="btn btn-primary" type="submit"> افزودن </button>
                            <a href="{{route('slider.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>

@endsection

