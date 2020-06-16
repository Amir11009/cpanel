@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش محصولات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت محصولات</a></li>
                        <li class="breadcrumb-item"><a href="#">محصولات اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش محصولات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/product" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش محصول {{$product->title}}</h5>
                        <form action="{{route('product.update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-5">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان محصولات" value="{{$product->title}}">
                                </div>

                                <label for="inputSlug" class="col-sm-1 col-form-label">نامک</label>
                                <div class="col-sm-5">
                                    <input type="text" name="slug" class="form-control" id="inputSlug" placeholder="نامک محصولات" value="{{$product->slug}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputCode" class="col-sm-1 col-form-label">کد محصول</label>
                                <div class="col-sm-5">
                                    <input type="text" name="code" class="form-control" id="inputCode" placeholder="کد محصول" value="{{$product->code}}">
                                </div>

                                <label for="inputCategoryId" class="col-sm-1 col-form-label">دسته بندی</label>
                                <div class="col-sm-5">
                                    <select class="js-example-basic-single" dir="rtl" name="category_id">
                                        <option></option>
                                        @foreach($product_categories as $product_category)
                                            <option value="{{$product_category->id}}" @if($product_category->id==$product->category_id) selected @endif>{{$product_category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="color" class="col-sm-1 col-form-label">رنگ</label>
                                <div class="col-sm-11">
                                    @foreach($colors as $color)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" @if($product->colors()->where('color_id',$color->id)->get()->count()>0) checked @endif id="color-{{$color->id}}" name="color[]" value="{{$color->id}}" class="custom-control-input">
                                                <label class="custom-control-label" for="color-{{$color->id}}">{{$color->title}}</label>
                                            </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="size" class="col-sm-1 col-form-label">سایز</label>
                                <div class="col-sm-11">
                                    @foreach($sizes as $size)
{{--                                        @foreach($product->sizes as $pro_size)--}}
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" @if($product->sizes()->where('size_id',$size->id)->get()->count()>0) checked @endif id="size-{{$size->id}}" name="size[]" value="{{$size->id}}" class="custom-control-input">
                                                <label class="custom-control-label" for="size-{{$size->id}}">{{$size->title}}</label>
                                            </div>
{{--                                        @endforeach--}}
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPrice" class="col-sm-1 col-form-label">قیمت محصول</label>
                                <div class="col-sm-5">
                                    <input type="number" name="user_price" class="form-control" id="inputPrice" placeholder="قیمت محصول" value="{{$product->user_price}}">
                                </div>

                                <label for="inputMadeBy" class="col-sm-1 col-form-label">کشور سازنده</label>
                                <div class="col-sm-5">
                                    <input type="text" name="made_by" class="form-control" id="inputMadeBy" placeholder="کشور سازنده" value="{{$product->made_by}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputRate" class="col-sm-1 col-form-label">رتبه محصول</label>
                                <div class="col-sm-5">
                                    <input type="number" name="rate" class="form-control" id="inputRate" placeholder="رتبه محصول" value="{{$product->rate}}">
                                </div>

                                <label for="inputProductCount" class="col-sm-1 col-form-label">تعداد موجودی</label>
                                <div class="col-sm-5">
                                    <input type="number" name="product_count" class="form-control" id="inputProductCount" placeholder="تعداد موجودی" value="{{$product->product_count}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputOffPercent" class="col-sm-1 col-form-label">درصد تخفیف</label>
                                <div class="col-sm-5">
                                    <input type="number" name="off_percent" class="form-control" id="inputOffPercent" placeholder="درصد تخفیف" value="{{$product->off_percent}}">
                                </div>

                                <label for="inputOffRial" class="col-sm-1 col-form-label">تخفیف ریالی</label>
                                <div class="col-sm-5">
                                    <input type="number" name="off_rial" class="form-control" id="inputOffRial" placeholder="تخفیف ریالی" value="{{$product->off_rial}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputOrderScore" class="col-sm-1 col-form-label">امتیاز خرید</label>
                                <div class="col-sm-5">
                                    <input type="number" name="order_score" class="form-control" id="inputOrderScore" placeholder="امتیاز خرید" value="{{$product->order_score}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputDesc" class="col-sm-1 col-form-label">توضیح</label>
                                <div class="col-sm-11">
                                    <textarea name="description" class="form-control" id="inputDesc" placeholder="توضیحات محصولات">{{$product->description}}</textarea>
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
                                <label for="inputText" class="col-sm-1 col-form-label">متن</label>
                                <div class="col-sm-11">
                                    <textarea name="text" class="form-control" id="inputText" placeholder="متن محصولات">{{$product->text}}</textarea>
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
                                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="تصویر اصلی محصول">
                                    <img src="/{{$product->image}}" width="100" height="100" class="mt-3 rounded">
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary m-l-5 rounded-circle" data-toggle="tooltip" data-placement="top" title="تصویر اصلی محصول می باشد">
                                        ?
                                    </button>
                                </div>

                            </div>

                            <hr>
                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">وضعیت</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" @if($product->status==1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio1">فعال</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" @if($product->status==0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">غیرفعال</label>
                                    </div>
                                </div>

                                <label class="col-sm-1 col-form-label">موجودی</label>
                                <div class="col-sm-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mojood" id="inlineRadio3" value="1" @if($product->mojood==1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio3">موجود</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mojood" id="inlineRadio4" value="0" @if($product->mojood==0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio4">ناموجود</label>
                                    </div>
                                </div>

                            </div>

                            <hr>
                            <button class="btn btn-primary" type="submit"> ویرایش </button>
                            <a href="{{route('product.index')}}" class="btn btn-danger" type="submit">بازگشت</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>

@endsection

