@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست محصولات تخفیفی</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت محصولات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست محصولات تخفیفی</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">                &nbsp;
                <a href="" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست محصولات تخفیفی</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>قیمت</th>
                        <th>تخفیف درصدی</th>
                        <th>تخفیف ریالی</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($off_products as $off_product)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$off_product->product->image}}" target="_blank">
                                    <img src="/{{$off_product->product->image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$off_product->product->title}}</td>
                            <td>{{number_format($off_product->product->user_price)}}&nbsp;ریال</td>
                            <td>{{$off_product->product->off_percent}}&nbsp;درصد</td>
                            <td>{{number_format($off_product->product->off_rial)}}&nbsp;ریال</td>
                            <td>
                                @if($off_product->product->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('product.show',['id'=>$off_product->product_id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('product.edit',['id'=>$off_product->product_id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('off_product.destroy',['id'=>$off_product->id])}}">
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
        @if(session()->get('off_product_delete')=='success')
            swal.fire({
            text: "محصول از تخفیفی ها حذف شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>
@endsection

