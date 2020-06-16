@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست نمونه کار</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت نمونه کار</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست نمونه کار</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/sample/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/sample/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست نمونه کار</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>نامک</th>
                        <th>خدمات</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($samples as $sample)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$sample->image}}" target="_blank">
                                    <img src="/{{$sample->image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$sample->title}}</td>
                            <td>{{$sample->slug}}</td>
                            <td>
                                @if($sample->services)
                                    {{$sample->services->title}}
                                    <br>
                                @else
                                    ---
                                @endif
                            </td>
                            <td>
                                @if($sample->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('sample.show',['id'=>$sample->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('sample.edit',['id'=>$sample->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('sample.destroy',['id'=>$sample->id])}}">
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
        @if(session()->get('sample_create')=='success')
            swal.fire({
            text: "نمونه کار با موفقیت افزوده شد.",
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
                                    title: 'نمونه کار اضافه شد',
                                    text: "نمونه کار با موفقیت به نمونه کار ویژه افزوده شد",
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
                                    title: 'نمونه کار حذف شد',
                                    text: "نمونه کار با موفقیت از نمونه کار ویژه حذف شد",
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

