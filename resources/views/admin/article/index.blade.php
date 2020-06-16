@extends('layouts.admin')

@section('content')

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست مقالات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت مقالات</a></li>
                        <li class="breadcrumb-item"><a href="#">مقالات اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست مقالات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/article/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/article/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست مقالات</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>نامک</th>
                        <th>گروه</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($articles as $article)
                        <tr class="text-center">
                            <td>
                                <a href="/{{$article->main_image}}" target="_blank">
                                    <img src="/{{$article->main_image}}" width="50" class="rounded">
                                </a>
                            </td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->slug}}</td>
                            <td>
                                @foreach($article->category as $cat)
                                    {{$cat->title}}
                                    <br>
                                @endforeach
                            </td>
                            <td>
                                @if($article->status==1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                            </td>
                            <td>
                                <a href="{{route('article.show',['id'=>$article->id])}}" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('article.edit',['id'=>$article->id])}}" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="/admin/article/delete/{{$article->id}}" class="btn btn-danger">
                                    <i class="ti-trash" style="color: white!important;"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </div>
@endsection
