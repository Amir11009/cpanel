@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست سایت ها</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت مقالات</a></li>
                        <li class="breadcrumb-item"><a href="#">مدیریت دسته بندی مقالات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست دسته بندی مقالات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/category/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/category/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست دسته بندی مقالات</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>نامک</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $key=>$category)
                        <tr class="text-center">
                            <td>{{$key+1}}</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                                @if($category->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('category.show',['id'=>$category->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('category.destroy',['id'=>$category->id])}}">
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
        @if(session()->get('category_delete')=='success')
            swal.fire({
            text: "دسته بندی مقاله با موفقیت حذف شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>

@endsection