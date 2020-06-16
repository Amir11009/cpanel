@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>افزودن رنگ</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت محصولات</a></li>
                        <li class="breadcrumb-item"><a href="#">رنگ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن رنگ</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/color" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">افزودن رنگ</h5>
                        <form action="{{route('color.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان رنگ</label>
                                <div class="col-sm-11">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان رنگ">
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
                            <button class="btn btn-primary" type="submit"> افزودن </button>
                            <a href="{{route('color.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <script type="text/javascript">
            @if(session()->get('color_update')=='success')
                swal.fire({
                text: "رنگ با موفقیت افزودن شد.",
                icon: "success",
                button: "تایید",
                allowOutsideClick: true
            });
            @endif
        </script>

@endsection

