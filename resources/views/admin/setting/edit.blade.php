@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش تنظیمات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت تنظیمات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش تنظیمات</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش تنظیمات </h5>
                        <form action="{{route('setting.update',['id'=>$setting->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-4">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان" value="{{$setting->title}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">لوگو هدر</label>
                                <div class="col-sm-4">
                                    <input type="file" name="logo_header" class="form-control" id="inputImage" placeholder="لوگو هدر">
                                    <img src="/{{$setting->logo_header}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="لوگو هدر در بالای صفحه نمایش داده می شود">
                                        ?
                                    </button>
                                </div>

                                <label for="inputImage" class="col-sm-1 col-form-label">لوگو فوتر</label>
                                <div class="col-sm-4">
                                    <input type="file" name="logo_footer" class="form-control" id="inputImage" placeholder="لوگو فوتر">
                                    <img src="/{{$setting->logo_footer}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="لوگو فوتر در پایین صفحه نمایش داده می شود">
                                        ?
                                    </button>
                                </div>

                                <label for="inputImage" class="col-sm-1 col-form-label">لوگوی کوچک</label>
                                <div class="col-sm-4">
                                    <input type="file" name="favicon" class="form-control" id="inputImage" placeholder="لوگوی کوچک">
                                    <img src="/{{$setting->favicon}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="لوگو کوچک در عنوان صفحه نمایش داده می شود">
                                        ?
                                    </button>
                                </div>

                            </div>

                            <hr>
                            <button class="btn btn-primary" type="submit"> ویرایش </button>

                        </form>
                    </div>
                </div>

            </div>

        </div>

@endsection

