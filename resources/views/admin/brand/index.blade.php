@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست برندها</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت برندها</a></li>
                        <li class="breadcrumb-item"><a href="#">برندها اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست برندها</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/brand/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/brand/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست برندها</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>نامک</th>
                        <th>لینک برند</th>
                        <th>توضیحات</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($brands as $brand)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$brand->image}}" target="_blank">
                                    <img src="/{{$brand->image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$brand->title}}</td>
                            <td>{{$brand->slug}}</td>
                            <td>{{$brand->brand_link}}</td>
                            <td>{!! $brand->description !!}</td>
                            <td>
                                @if($brand->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('brand.show',['id'=>$brand->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('brand.destroy',['id'=>$brand->id])}}">
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
@endsection

