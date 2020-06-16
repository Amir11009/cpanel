@extends('layout.layout')

@section('content')
<div class="container" style="margin-top: 100px !important; margin-bottom: 100px !important;">
    <div class="row">
        <div class="col-lg-12 mt-40 mb-40">
            <div class="">
                {{--<div class="panel-heading">ثبت نام</div>--}}
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" style="direction:rtl !important;">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
                            <label for="name" class="col-md-4 control-label">نام و نام خانوادگی</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">آدرس ایمیل</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">تلفن همراه</label>
                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--<div class="form-group">
                            <label for="address" class="col-md-4 control-label">شهر</label>

                            <div class="col-md-6">
                                <input type="text" id="city" class="form-control" name="city" required>
                            </div>
                        </div>--}}
                        {{--<div class="form-group">
                            <label for="" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                               <lable class="control-label"> برای آدرس های شهرستان حتما کد پستی را در پایان آدرس وارد نمایید.</lable>
                            </div>
                        </div>--}}
                        {{--<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">آدرس</label>

                            <div class="col-md-6">
                                <textarea id="address" class="form-control" name="address" required>{{ old('address') }}</textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>--}}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">رمز عبور</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">تکرار رمز عبور</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 text-right">
                                <button type="submit" class="btn btn-warning">
                                    ثبت نام
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
