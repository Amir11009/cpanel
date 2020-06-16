@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست دسته بندی خدمات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت خدمات</a></li>
                        <li class="breadcrumb-item"><a href="#">دسته بندی خدمات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست دسته خدمات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/service_category/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/service_category/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست دسته بندی خدمات</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>نامک</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($service_categories as $service_category)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$service_category->image}}" target="_blank">
                                    <img src="/{{$service_category->image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$service_category->title}}</td>
                            <td>{{$service_category->slug}}</td>
                            <td>
                                @if($service_category->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('service_category.show',['id'=>$service_category->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('service_category.edit',['id'=>$service_category->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('service_category.destroy',['id'=>$service_category->id])}}">
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
        @if(session()->get('service_category_create')=='success')
            swal.fire({
            text: "دسته خدمات با موفقیت افزوده شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>
@endsection

