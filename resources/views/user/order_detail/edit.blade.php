@extends('layouts.admin')
@section('header')
    <!-- Page header -->
        <div class="page-header-content">
            <div class="page-title">
                <h4><span class="text-semibold">پنل مدیریت</span> - مقالات </h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
                <li class="active">مدیریت مقالات</li>
            </ul>
        </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="{{route('article.update',['id'=>$article->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <fieldset class="content-group">
                    <legend class="text-bold">ویرایش مقاله {{$article->name}}</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">عنوان مقاله</label>
                        <div class="col-lg-10">
                            <input type="text" name="title" class="form-control" autofocus value="{{$article->title}}">
                        </div>
                    </div>

                    <div class="form-group pt-15">
                        <label class="control-label col-lg-2">دسته بندی</label>
                        <div class="col-lg-10">
                            @foreach($categories as $category)
                                <div class="checkbox" style="float: right; margin-right: 20px;">
                                    <label>
                                        <input type="checkbox" class="styled" @if($article->category->contains($category->id)) checked @endif  name="category[]" value="{{$category->id}}">
                                        {{$category->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">متن کوتاه</label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" name="description" class="form-control" placeholder="متن کوتاه ...">{{$article->description}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">متن کامل</label>
                        <div class="col-lg-10">
                            <textarea rows="10" cols="5" name="text" class="form-control" placeholder="متن کامل ...">{{$article->text}}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">عکس مقاله</label>
                        <div class="col-lg-7">
                            <input type="file" name="main_image" class="file-styled">
                        </div>
                        <div class="col-lg-3">
                            <img width="100%" src="/img/article/{{$article->main_image}}">
                        </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">ویرایش<i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
