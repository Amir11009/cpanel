@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش اطلاعات تماس</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت اطلاعات تماس</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش اطلاعات تماس</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش اطلاعات تماس </h5>
                        <form action="{{route('contact.update',['id'=>$contact->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">سایت</label>
                                <div class="col-sm-5">
                                    <input type="text" name="site" class="form-control" id="inputTitle" placeholder="سایت" value="{{$contact->site}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">ایمیل</label>
                                <div class="col-sm-5">
                                    <input type="text" name="email" class="form-control" id="inputSlug" placeholder="ایمیل" value="{{$contact->email}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">تلفن</label>
                                <div class="col-sm-5">
                                    <input type="text" name="tel" class="form-control" id="inputTitle" placeholder="تلفن" value="{{$contact->tel}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">موبایل</label>
                                <div class="col-sm-5">
                                    <input type="text" name="mobile" class="form-control" id="inputSlug" placeholder="موبایل" value="{{$contact->mobile}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">تلگرام</label>
                                <div class="col-sm-5">
                                    <input type="text" name="telegram" class="form-control" id="inputTitle" placeholder="تلگرام" value="{{$contact->telegram}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">اینستاگرام</label>
                                <div class="col-sm-5">
                                    <input type="text" name="instagram" class="form-control" id="inputSlug" placeholder="اینستاگرام" value="{{$contact->instagram}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">توییتر</label>
                                <div class="col-sm-5">
                                    <input type="text" name="twitter" class="form-control" id="inputTitle" placeholder="توییتر" value="{{$contact->twitter}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">لینک دین</label>
                                <div class="col-sm-5">
                                    <input type="text" name="linkdin" class="form-control" id="inputSlug" placeholder="لینک دین" value="{{$contact->linkdin}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">فیسبوک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="facebook" class="form-control" id="inputTitle" placeholder="فیسبوک" value="{{$contact->facebook}}">
                                </div>

                                <label for="inputTitle" class="col-sm-1 col-form-label">فکس</label>
                                <div class="col-sm-5">
                                    <input type="text" name="fax" class="form-control" id="inputTitle" placeholder="فکس" value="{{$contact->fax}}">
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">ساعت شروع</label>
                                <div class="col-sm-5">
                                    <input type="text" name="start_time" class="form-control" id="inputTitle" placeholder="ساعت شروع" value="{{$contact->start_time}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">ساعت پایان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="end_time" class="form-control" id="inputSlug" placeholder="ساعت پایان" value="{{$contact->end_time}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">آدرس</label>
                                <div class="col-sm-5">
                                    <textarea name="address" class="form-control" id="inputDesc" placeholder="آدرس">{{$contact->address}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">تصویر</label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر">
                                    <img src="/{{$contact->image}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر در صفحه اطلاعات تماس نمایش داده می شود">
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

