@extends('user_layout.user')
@section('header')
    <!-- Page header -->
    <div class="page-header-content">
        <div class="page-title">
            <h4><span class="text-semibold">پنل کاربر</span> - تغییر رمز </h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="/home"><i class="icon-home2 position-left"></i> خانه</a></li>
            <li class="active">مدیریت تغییر رمز</li>
        </ul>
    </div>
    <!-- /page header -->
@endsection
@section('content')
    <!-- Content area -->

    <div class="panel panel-flat">

        <div class="panel-body">

            <form class="form-horizontal" action="/user/change_pass_update" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <fieldset class="content-group">
                    <legend class="text-bold">تغییر رمز کاربر</legend>

                    <div class="form-group">
                        <label class="control-label col-lg-2">رمز فعلی</label>
                        <div class="col-lg-10">
                            <input type="text" name="old_pass" placeholder="رمز فعلی" class="form-control" autofocus value="{{old('old_pass')}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">رمز جدید</label>
                        <div class="col-lg-10">
                            <input type="text" name="new_pass" placeholder="حداقل 6 کاراکتر" class="form-control" autofocus value="{{old('new_pass')}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-2">تکرار رمز جدید</label>
                        <div class="col-lg-10">
                            <input type="text" name="confirm_new_pass" placeholder="حداقل 6 کاراکتر" class="form-control" autofocus value="{{old('confirm_new_pass')}}" required>
                        </div>
                    </div>

                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">تغییر رمز<i class="icon-arrow-left13 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        @if(session()->get('new_confirm')=='fail')
           swal({
            title:"مغایرت در رمز و تکرار رمز جدید",
            text: "لطفا رمز عبور و تکرار آن را مقدار برابر وارد نمایید",
            icon: "warning",
            button: "تایید",
            allowOutsideClick: true
        });
        @elseif(session()->get('old_pass')=='fail')
        swal({
            title:"رمز فعلی اشتباه وارد شده است",
            text: "رمز عبور فعلی می بایست صحیح وارد شود",
            icon: "warning",
            button: "تایید",
            allowOutsideClick: true
        });
        @elseif(session()->get('change_pass')=='success')
        swal({
            title:"تغییر رمز با موفقیت انجام شد",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        @endif
    </script>
@endsection
