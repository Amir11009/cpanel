@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست اسلایدر</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت اسلایدر</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست اسلایدر</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/slider/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/slider/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست اسلایدر</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>متن</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($sliders as $slider)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$slider->image}}" target="_blank">
                                    <img src="/{{$slider->image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->text}}</td>
                            <td>
                                @if($slider->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('slider.show',['id'=>$slider->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('slider.edit',['id'=>$slider->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('slider.destroy',['id'=>$slider->id])}}">
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
        @if(session()->get('slider_create')=='success')
            swal.fire({
            text: "اسلایدر با موفقیت افزوده شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>
@endsection

