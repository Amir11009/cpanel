@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست محصولات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت محصولات</a></li>
                        <li class="breadcrumb-item"><a href="#">محصولات اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست محصولات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/product/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/product/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست محصولات</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>نامک</th>
                        <th>گروه</th>
                        <th>قیمت</th>
                        <th>وضعیت</th>
                        <th>ویژه</th>
                        <th>جدید</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$product->image}}" target="_blank">
                                    <img src="/{{$product->image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->slug}}</td>
                            <td>{{$product->product_category->title}}</td>
                            <td>{{number_format($product->user_price)}}&nbsp;ریال</td>
                            <td>
                                @if($product->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <div class="custom-control custom-switch custom-checkbox-success">
                                    <input type="checkbox" class="custom-control-input" data-val="{{$product->id}}" id="customSwitch2_{{$product->id}}" @if(\App\Special_product::where('product_id',$product->id)->get()->count()>0) checked @endif  onclick="myFunction(this)">
                                    <label class="custom-control-label" for="customSwitch2_{{$product->id}}"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-switch custom-checkbox-success">
                                    <input type="checkbox" class="custom-control-input" data-val="{{$product->id}}" id="customSwitch2_new_{{$product->id}}" @if(\App\New_product::where('product_id',$product->id)->get()->count()>0) checked @endif  onclick="myFunctionNew(this)">
                                    <label class="custom-control-label" for="customSwitch2_new_{{$product->id}}"></label>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('product.show',['id'=>$product->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('product.destroy',['id'=>$product->id])}}">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="ti-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        @if(session()->get('product_create')=='success')
            swal.fire({
            text: "محصولات با موفقیت افزوده شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif

        function myFunction(a){
            var s=$(a);
            var pro_id=s.attr('data-val');
            $.ajax({
                        datatype: 'json',
                        type: "POST",
                        url: "{{route('addSpecialPro')}}",
                        data: {pro_id: pro_id, '_token': '{{csrf_token()}}'},
                        success: function (res) {
                            if(res['addSpecialPro']=='success'){
                                swal({
                                    buttons: {
                                        confirm: true
                                    },
                                    title: 'محصول اضافه شد',
                                    text: "محصول با موفقیت به محصولات ویژه افزوده شد",
                                    type: 'success',
                                    confirmButtonClass: 'btn btn-success',
                                    confirmButtonText: 'بله'
                                })
                            }
                            else if(res['delSpecialPro']=='success'){
                                swal({
                                    buttons: {
                                        confirm: true
                                    },
                                    title: 'محصول حذف شد',
                                    text: "محصول با موفقیت از محصولات ویژه حذف شد",
                                    type: 'success',
                                    confirmButtonClass: 'btn btn-success',
                                    confirmButtonText: 'بله'
                                })
                            }
                        }
                    }
            )
        }

        function myFunctionNew(a){
            var s=$(a);
            var pro_id=s.attr('data-val');
            $.ajax({
                        datatype: 'json',
                        type: "POST",
                        url: "{{route('addNewPro')}}",
                        data: {pro_id: pro_id, '_token': '{{csrf_token()}}'},
                        success: function (res) {
                            if(res['addNewPro']=='success'){
                                swal({
                                    buttons: {
                                        confirm: true
                                    },
                                    title: 'محصول اضافه شد',
                                    text: "محصول با موفقیت به محصولات جدید افزوده شد",
                                    type: 'success',
                                    confirmButtonClass: 'btn btn-success',
                                    confirmButtonText: 'بله'
                                })
                            }
                            else if(res['delNewPro']=='success'){
                                swal({
                                    buttons: {
                                        confirm: true
                                    },
                                    title: 'محصول حذف شد',
                                    text: "محصول با موفقیت از محصولات جدید حذف شد",
                                    type: 'success',
                                    confirmButtonClass: 'btn btn-success',
                                    confirmButtonText: 'بله'
                                })
                            }
                        }
                    }
            )
        }
    </script>
@endsection

