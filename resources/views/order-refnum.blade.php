@extends('layout.layout')

@section('content')
        <div class="container">
            <div class="row">
                <section class="span12">
                        <div class="checkout-container" style="margin-top: 30px !important;">
                            <div class="row">
                                <div class="span10 offset1">

                                    <!--  ==========  -->
                                    <!--  = Header =  -->
                                    <!--  ==========  -->
                                    <header>
                                        <div class="row">
                                                <div class="center-align">
                                                    <h1><span class="light">اتمام سفارش</span> و کد رهگیری</h1>
                                                </div>
                                        </div>
                                    </header>

                                    <!--  ==========  -->
                                    <!--  = Steps =  -->
                                    <!--  ==========  -->
                                    <div class="checkout-steps">
                                        <div class="clearfix">
                                            <div class="step done">
                                                <div class="step-badge"><i class="icon-ok"></i></div>
                                                <a >سبد خرید</a>
                                            </div>
                                            <div class="step done">
                                                <div class="step-badge"><i class="icon-ok"></i></div>
                                                <a >تایید سفارش</a>
                                            </div>
                                            <div class="step done">
                                                <div class="step-badge"><i class="icon-ok"></i></div>
                                                <a >شیوه پرداخت</a>
                                            </div>
                                            <div class="step done">
                                                <div class="step-badge"><i class="icon-ok"></i></div>
                                                <a >اتمام سفارش</a>
                                            </div>
                                        </div>
                                    </div> <!-- /steps -->
                                        <h3 class="text-center">کد پیگیری سفارش شما<br><br>{{$refnum}}</h3>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    @endsection