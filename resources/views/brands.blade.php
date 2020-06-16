@extends('layout.layout')

@section('content')
    <div class="darker-stripe mt-5">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/">خانه</a>
                        </li>&nbsp;
                        <li><span class="icon-chevron-left"></span></li>&nbsp;
                        <li>
                            <a href="/brands">برندها</a>
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
                            <h3><span class="light">برندهای ماریتا</span></h3>
                        </div>

                        <!--  ==========  -->
                        <!--  = Menu (affix) =  -->
                        <!--  ==========  -->
                        <div class="row">
                            <div class="span3" id="spyMenu">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brands as $brand)
                                        <li>
                                            <a href="#{{$brand->id}}">
                                                <img width="50" src="/{{$brand->image}}">
                                                &nbsp;
                                                {{$brand->f_name}}
                                                &nbsp;
                                                ({{$brand->e_name}})
                                                <i class="icon-caret-left pull-left"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </aside> <!-- /sidebar -->

                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span9">

                    <!--  = Team Members =  -->
                    <!--  ==========  -->
                    <section>
                        <!--  ==========  -->
                        <!--  = Title =  -->
                        <!--  ==========  -->
                        <div class="underlined push-down-20">
                            <h3><span class="light">مختصری درباره برندهای ماریتا</span></h3>
                        </div> <!-- /title -->

                        <!--  = Jaka - designer =  -->
                        @foreach($brands as $brand)
                            <div class="row-fluid push-down-20" id="{{$brand->id}}">
                                <div class="span4">
                                    <a href="#"><img style="border-radius: 7px;" src="/{{$brand->image}}" alt="person" width="550" height="660" /></a>
                                </div>
                                <div class="span8">
                                    <h4><span class="light"></span>{{$brand->f_name}}&nbsp;( {{$brand->e_name}} )</h4>
                                    <p style="text-align:justify;">{{$brand->body}}</p>
                                </div>
                            </div>
                        @endforeach
                    </section>
                    <hr />
                </section> <!-- /main content -->
            </div>
        </div>
    </div>
@endsection