@extends('layout.layout')

@section('content')
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(/assets/img/page-title/shop-pattern.jpg);">
        <div class="container text-right align-self-center">
            {{--            <nav aria-label="breadcrumb">--}}
            {{--                <ol class="breadcrumb">--}}
            {{--                    <li class="breadcrumb-item"><a href="index.html">صفحه اصلی</a>--}}
            {{--                    </li>--}}
            {{--                    <li class="breadcrumb-item"><a href="account-orders.html">حساب کاربری</a>--}}
            {{--                    </li>--}}
            {{--                </ol>--}}
            {{--            </nav>--}}
            <h1 class="page-title-heading">بازیابی رمز عبور</h1>
        </div>
    </div>
    <div class="container pb-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="h4">رمز عبور خود را فراموش کرده اید؟</h2>
                <p>رمز عبور خود را در سه مرحله آسان تغییر دهید. این به حفظ رمز عبور جدید شما کمک می کند.</p>
                <ol class="list-unstyled">
                    <li><span class="font-weight-medium text-accent">۱. </span> آدرس ایمیل خود را در زیر وارد کنید.</li>
                    <li><span class="font-weight-medium text-accent">۲. </span> ما یک کد موقت به شما ایمیل می کنیم.</li>
                    <li><span class="font-weight-medium text-accent">۳. </span> از کد برای تغییر رمز عبور خود در وب سایت استفاده کنید.</li>
                </ol>
                <form class="form-horizontal wizard needs-validation" method="POST" action="/resetpass" novalidate="">
                    {{ csrf_field() }}
                    <div class="wizard-body pt-4">
                        <label for="email-for-pass">آدرس ایمیل خود را وارد کنید</label>
                        <input class="form-control" type="email" name="email" value="{{ $email or old('email') }}" required="" id="email-for-pass">
                        <div class="invalid-feedback">لطفا آدرس ایمیل معتبر وارد کنید!</div>
                        <div class="valid-feedback">به نظر خوب میاد!</div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="wizard-footer py-3">
                        <button class="btn btn-primary" type="submit">دریافت رمز جدید</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script type="text/javascript">
    @if(session()->get('pass_reset')=='fail')
        swal({
        title: "بازیابی رمز عبور انجام نشد",
        text: "لطفا دقایقی دیگر مجددا تلاش نمایید",
        icon: "warning",
        button: "تایید",
        allowOutsideClick: true
    });
    @elseif(session()->get('user_exist')=='fail')
    swal({
        title: "لطفا ایمیل وارد شده را چک نمایید",
        text: "کاربری با ایمیل وارد شده یافت نشد بررسی نمایید",
        icon: "warning",
        button: "تایید",
        allowOutsideClick: true
    });
    @endif
</script>
@endsection
