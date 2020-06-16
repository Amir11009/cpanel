@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست سایز</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت محصولات</a></li>
                        <li class="breadcrumb-item"><a href="#">سایز</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست رنگ</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/size/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/size/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست سایز</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>عنوان</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($sizes as $size)
                        <tr class="text-center">
                            <td>{{$size->title}}</td>
                            <td>
                                @if($size->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('size.show',['id'=>$size->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('size.edit',['id'=>$size->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('size.destroy',['id'=>$size->id])}}">
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
        @if(session()->get('size_create')=='success')
            swal.fire({
            text: "سایز با موفقیت افزوده شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>
@endsection

