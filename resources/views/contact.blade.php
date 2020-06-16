@extends('layout.layout')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">خانه</a></li>
                            <li>تماس با ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--contact map start-->
    <section class="about_section mt-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <figure>
                        <div class="about_thumb">
                            <img src="/{{$contact['image']}}" alt="">
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--contact map end-->
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message content">
                        <h3>تماس با ما</h3>
<p style="text-align: justify">    فروشگاه نیازپت به منظور تسهیل ارتباط خود با کاربران و مشتریان سایت، اطلاعات تماس خود را ارائه می‌نماید. کاربران عزیز می‌توانند با استفاده از اطلاعات تماس ذیل ما را از نظرات و پیشنهادات خود مطلع سازند و ما را در جهت رسیدن به اهداف سایت یاری دهند</p>
                        <ul>
                            <li><i class="fa fa-fw fa-map-marker"></i>{{$contact['address']}}</li>
                            <li><i class="fa fa-fw fa-phone"></i> <span class="ltr-text">{{$contact['tel']}}</span></li>
                            <li><i class="fa fa-fw fa-envelope-o"></i> <a href="mailto:{{$contact['email']}}">{{$contact['email']}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message form">
                        <h3>با ما در میان بگذارید</h3>
                        <form method="POST" action="/contact/save">
                            {{csrf_field()}}
                            <p>
                                <label> نام شما (الزامی)</label>
                                <input name="name" placeholder="نام *" type="text" value="{{old('name')}}" required>
                            </p>
                            <p>
                                <label> ایمیل شما (الزامی)</label>
                                <input name="email" placeholder="* ایمیل" value="{{old('email')}}" type="email" dir="ltr" required>
                            </p>
                            <p>
                                <label> تلفن شما (الزامی)</label>
                                <input name="tel" placeholder="* تلفن" value="{{old('tel')}}" type="tel" dir="ltr" required>
                            </p>
                            <p>
                                <label> موضوع</label>
                                <input name="subject" placeholder="موضوع" value="{{old('subject')}}" type="text">
                            </p>
                            <div class="contact_textarea">
                                <label> پیام شما</label>
                                <textarea placeholder="پیام *" name="text" class="form-control2" required></textarea>
                            </div>
                            <button type="submit"> ارسال</button>
                            <p class="form-messege"></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--map js code here-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEn4c_T1rFt7ltf_oNavnjND8dDPm4KQs&language=fa"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="/assets/js/map.js"></script>
    @endsection