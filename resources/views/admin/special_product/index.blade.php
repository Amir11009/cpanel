@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست محصولات ویژه</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت محصولات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست محصولات ویژه</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">                &nbsp;
                <a href="" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست محصولات ویژه</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>قیمت</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($special_products as $special_product)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$special_product->product->image}}" target="_blank">
                                    <img src="/{{$special_product->product->image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$special_product->product->title}}</td>
                            <td>{{number_format($special_product->product->user_price)}}&nbsp;ریال</td>
                            <td>
                                @if($special_product->product->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('product.show',['id'=>$special_product->product_id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('product.edit',['id'=>$special_product->product_id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('special_product.destroy',['id'=>$special_product->id])}}">
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
        @if(session()->get('special_product_delete')=='success')
            swal.fire({
            text: "محصول از ویژه ها حذف شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>
@endsection

