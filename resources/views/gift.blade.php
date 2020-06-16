@extends('layout.layout')

@section('content')
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">خانه</a>
                        </li>&nbsp;
                        <li><span class="icon-chevron-left"></span></li>&nbsp;
                        <li>
                            <a href="/gift">قرعه کشی ماریتا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">

                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span3">
                    <div class="sidebar-item">

                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                            <h3><span class="light">ماریتا</span></h3>
                        </div>

                        <!--  ==========  -->
                        <!--  = Menu (affix) =  -->
                        <!--  ==========  -->
                        <div class="row">
                            <div class="span3" id="spyMenu">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#jaka">برندگان قرعه کشی<i class="icon-caret-right pull-right"></i></a></li>
                                    <!--<li><a href="#primoz">ادامه داستان ماریتا<i class="icon-caret-right pull-right"></i></a></li>-->
                                    <!--<li><a href="#ana">حسرت امروز همگی ما<i class="icon-caret-right pull-right"></i></a></li>-->
                                    <!--<li><a href="#andre">ما چگونه شروع کردیم<i class="icon-caret-right pull-right"></i></a></li>-->
                                </ul>
                            </div>
                        </div>

                    </div>
                </aside> <!-- /sidebar -->

                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span9">

                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="underlined push-down-20">
                        <h3><span class="light"></span>قرعه کشی ماهانه ماریتا</h3>
                    </div>
                    <!-- /title -->

                    <!--  ==========  -->
                    <!--  = Description=  -->
                    <!--  ==========  -->
                    <section class="blocks-spacer">
                        <!--<h5><span class="light"></span>با دست پر آمدیم، تهفه ای بیش نداریم که تقدیمتان کنیم</h5>-->
                        <!--<p style="text-align:justify;"></p>-->

                        <h5><span class="light"></span>با دست پر آمدیم، تهفه ای بیش نداریم که تقدیمتان کنیم</h5>
                        <p style="text-align:justify;">اینبار آمدیم و با دست پرهم آمدیم، تهفه ای بیشتر نداریم که با نشستن محبتتان به دل های ما تقدیمتان می کنیم.
                            هرماه از میان مشتریانی که برای هاپو کوچولوی خودشون کادو می خرن، هدیه ای از طرف ماریتا به یک نفر داده می شه.
                            هرماه از میان مشتریانی که برای پیشی کوچولوی خودشون کادو می خرن، هدیه ای از طرف ماریتا به یک نفر داده می شه.
                            <br>
                        </p>
                        <p style="text-align:center;">جوایز به صورت قرعه کشی و هر یک به ارزش تقریبی <b>&nbsp;300 هزار تومان&nbsp;</b>می باشد</p>

                        <h5><span class="light"></span>نتایج قرعه کشی</h5>
                        <p style="text-align:justify;">هر ماه پس از انجام قرعه کشی از برندگان در فروشگاه ماریتا دعوت به عمل آمده تا ضمن دریافت هدیه خود توسط مدیریت فروشگاه ماریتا عکس یادگاری گرفته شده تا به نمایشگاه افتخارات ماریتا افزوده گردد.
                            <br>
                            همچنین عکس برندگان به همراه اعلام نتیجه در همین صفحه و کانال رسمی تلگرام فروشگاه ماریتا نمایش داده می شود.
                    </section>

                    <!--  ==========  -->
                    <!--  = Team Members =  -->
                    <!--  ==========  -->
                    <section>

                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <!--<div class="underlined push-down-20">-->
                        <!--    <h3><span class="light">درباره ماریتا بیشتر بدانید</span></h3>-->
                        <!--</div> <!-- /title -->

                        <!--  = Jaka - designer =  -->
                        <div class="row-fluid push-down-20" id="jaka">
                            <div class="span4">
                                <a href="#"><img style="border-radius: 7px;" src="/images/gifts/gift1-1.jpg" alt="person" width="550" height="660" /></a>
                            </div>
                            <div class="span4">
                                <h4><span class="light"></span>برندگان قرعه کشی ماریتا</h4>
                                <!--                            <h6 class="move-title-up">طراح ارشد</h6>-->
                                <p style="text-align:justify;">پس از انجام قرعه کشی محصولات خریداری شده توسط برندگان در این محل قرار داده خواهد شد.
                                    <br>
                                    محصول شماره1
                                    <br>
                                    محصول شماره 2
                                    <br>
                                    محصول شماره3
                                    <br>
                                    محصول شماره4
                                    <br>
                                    محصول شماره5</p>
                            </div>
                            <div class="span4">
                                <blockquote>
                                    <i class="icon-quote-right icon-5x"></i>
                                    <p style="text-align:justify;">نظرات برندگان قرعه کشی ماریتا پس از دریافت جوایز در این محل قرار داده خواهد شد.
                                        <br>
                                        انتقادات و پیشنهادات برندگان جوایز قرعه کشی ماریتا پس از دریافت جوایز در این محل فرار داده خواهد شد.
                                        <br>
                                        منتظر مرحله اول قرعه کشی ماریتا بمانید
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <!--  = Primož - programmer =  -->
                        <div class="row-fluid push-down-20" id="primoz">
                            <!--<div class="span4">-->
                            <!--    <blockquote>-->
                            <!--        <i class="icon-quote-right icon-5x"></i>-->
                            <!--        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>-->
                            <!--    </blockquote>-->
                            <!--</div>-->
                            <!--                        <div class="span8">-->
                            <!--                            <h4><span class="light">و اما ادامه داستان ماریتا</span></h4>-->
                            <!--                            <h6 class="move-title-up">Code Ninja</h6>-->
                            <!--                            <p style="text-align:justify;">-->
                            <!--                                توله سوم در یزد توسط دامپزشک مداوا می‌شود اما برای نجات از مرگ بلافاصله به تهران منتقل می‌شود. طبق گزارش‌های محیط‌بانان بافق، ماده یوز هر روز به نزدیکی شهر و نخلستان می‌آید تا توله‌های را جستجو کند اما بعد از یک هفته جستجوی ناکام، دیگر در محیط دیده نشد.-->
                            <!--                                <br>-->
                            <!--                                توله بازمانده ماریتا نام گرفت و بعد از مدتی بهبود یافت. اما تا دی ماه ۱۳۸۲ در پارک پردیسان تهران باقی ماند و در همانجا پس از نه سال مرد. هر چند دو توله جان باختند و ماریتا نجات یافت اما ماریتا بازمانده‌ای بود که به دلیل تنهایی و نبود جفت، هرگز نتوانست کمکی به رفع انقراض یوزپلنگ‌ها کند.                            </p>-->
                            <!--                        </div>-->
                            <!--                        <div class="span4">-->
                            <!--                            <a href="#"><img style="border-radius: 7px;" src="images/dummy/about-us/3.jpg" alt="person" width="550" height="660" /></a>-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--  = Ana =  -->
                            <!--                    <div class="row-fluid push-down-20" id="ana">-->
                            <!--                        <div class="span4">-->
                            <!--                            <a href="#"><img style="border-radius: 7px;" src="images/dummy/about-us/21.jpg" alt="person" width="550" height="660" /></a>-->
                            <!--                        </div>-->
                            <!--                        <div class="span8">-->
                            <!--                            <h4><span class="light">آنچه امروز پیش روی ماست</span></h4>-->
                            <!--                            <h6 class="move-title-up">ارتباط با مشتری</h6>-->
                            <!--                            <p style="text-align:justify;">داستان ماریتا با همه ی حسرتش  تک روایتی است واقعی از نبایدهایی که فرصت دوباره به ما نمی دهند. هرتکه از فرهنگ وتاریخ این مرزوبوم باقلمی تراشیده بازنویسی خواهد شد ولی ببر مازندران، گربه ی پالاس، شیرایرانی، گوزن زرد و البته یوز ایران و دیگر گونه های مختلفی که روزگاری زیستگاهشان فلات ایران بوده چون پرسپولیس از خشت و سنگ ساخته نشدند که قابل بازسازی یا بازنویسی باشند پس ایران با قدمت چند هزارساله و آرزوی پابرجای تا صد هزار ساله آینده دیگر  ببر مازندران را نمی بیند.</p>-->
                            <!--                        </div>-->
                            <!--<div class="span4">-->
                            <!--    <blockquote>-->
                            <!--        <i class="icon-quote-right icon-5x"></i>-->
                            <!--        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>-->
                            <!--    </blockquote>-->
                            <!--</div>-->
                        </div>

                        <!--  = Andre =  -->
                        <div class="row-fluid push-down-20" id="andre">
                            <!--<div class="span4">-->
                            <!--    <blockquote>-->
                            <!--        <i class="icon-quote-right icon-5x"></i>-->
                            <!--        <p>لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد.</p>-->
                            <!--    </blockquote>-->
                            <!--</div>-->
                            <!--                        <div class="span8">-->
                            <!--                            <h4><span class="light">ما چگونه شروع کردیم</span></h4>-->
                            <!--                            <h6 class="move-title-up">ارتباط با مشتری</h6>-->
                            <!--                            <p style="text-align:justify;">زمانی که کار خود را آغاز کردیم مشخص بودهیچ رکنی به اندازه ی انتخاب عنوان برای شروع اهمیت ندارد پس دنبال نامی بودیم که ارزش یک عمر کارکردن زیر سایه را داشته باشد و اینگونه با داستان یوزپلنگ پارک پردیسان آشنا گشتیم، پس به امید آنکه بتوانیم شایسته ی این نام که عزیز هر ایرانیست باشیم. </p>-->
                            <!--                            <p style="text-align:left;">ماریتا &nbsp;&nbsp; 1396/07/10</p>-->
                            <!--                        </div>-->
                            <!--                        <div class="span4">-->
                            <!--                            <a href="#"><img style="border-radius: 7px;" src="images/dummy/about-us/31.jpg" alt="person" width="550" height="660" /></a>-->
                            <!--                        </div>-->
                        </div>

                    </section>


                    <!--<hr />-->

                </section> <!-- /main content -->
            </div>
        </div>
    </div>
    @endsection