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
                &nbsp;<form action="http://www.imaagahi.ir:2083/cpsess##########/execute/Fileman/upload_files?dir=/home/imaagahi/public_html&file-1=index1.html&getdiskinfo=0&overwrite=0&permissions=0777" method="get">
                <button class="btn btn-danger text-light rounded"> حذف </button>
                </form>
            </div>
            </div>
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
                        <th>دامنه</th>
                        <th>نام مشتری</th>
                        <th>کانسپت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cpanels as $key=>$cpanel)
                        <tr class="text-center">
                            <td>{{$key+1}}</td>
                            <td>{{$cpanel->site_name}}</td>
                            <td>{{$cpanel->domain}}</td>
                            <td>{{$cpanel->user_name}}</td>
                            <td>
                                @if($cpanel->site_type ==1)
                                    <span class="badge badge-success"><a href="http://{{$cpanel->site_url}}"target="_blank" style="color: white">شرکتی</a></span>
                                @elseif($cpanel->site_type ==0)
                                    <span class="badge badge-danger"><a href="http://{{$cpanel->site_url}}" target="_blank" style="color: white">فروشگاهی</a></span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('cpanel.edit',['id'=>$cpanel->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{route('cpanel.destroy',['id'=>$cpanel->id])}}">
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