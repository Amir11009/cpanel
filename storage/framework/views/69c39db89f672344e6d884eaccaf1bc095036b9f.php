<?php $__env->startSection('content'); ?>
    <!--slider area start-->
    <section class="slider_section mb-70">
        <div class="slider_area owl-carousel">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single_slider d-flex align-items-center"
                     style="background-image: url(/<?php echo e($slider->image); ?>) !important;" data-bgimg="/<?php echo e($slider->image); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="slider_content">
                                    
                                    <h2><?php echo e($slider->text); ?></h2>
                                    <p><?php echo e($slider->title); ?></p>
                                    <a class="button" href="<?php echo e($slider->btn_link1); ?>"><?php echo e($slider->btn_text1); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <!--slider area end-->

    <!--shipping area start-->
    <section class="shipping_area mb-70">

    </section>
    <!--shipping area end-->

    <!--banner area start-->
    <div class="banner_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="/productCategory/%D9%81%D8%B1%D9%88%D8%B4-%D8%B9%D9%85%D8%AF%D9%87"><img
                                        src="/assets/img/bg/banner-3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="/productCategory/%D8%AD%D9%85%D8%A7%DB%8C%D8%AA%DB%8C"><img
                                        src="/assets/img/bg/banner-5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="/productCategory/%D9%81%D8%B1%D9%88%D8%B4-%D8%AA%DA%A9%DB%8C"><img
                                        src="/assets/img/bg/banner-1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>پیشنهاد های ویژه</h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                <?php $__currentLoopData = $special_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="/single-product/<?php echo e($special_product->product->slug); ?>"><img
                                            src="/<?php echo e($special_product->product->image); ?>"
                                            alt="<?php echo e($special_product->product->title); ?>"></a>
                                
                                
                                <div class="label_product">
                                    <span class="label_sale">ویژه</span>
                                </div>












                                <div class="add_to_cart">
                                    <a href="/single-product/<?php echo e($special_product->product->slug); ?>">جزئیات محصول</a>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="2043/12/15"></div>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <?php if($special_product->product->user_price == 0): ?>
                                    <div class="price_box">

                                    </div>
                                <?php else: ?>
                                    <div class="price_box">
                                        <?php if($special_product->product->off_rial): ?>
                                            <span class="old_price"><?php echo e(number_format($special_product->product->user_price)); ?> &nbsp; تومان </span>
                                            <span class="current_price"><?php echo e(number_format($special_product->product->off_rial)); ?> &nbsp; تومان </span>
                                        <?php else: ?>
                                            <span class="current_price"><?php echo e(number_format($special_product->product->user_price)); ?> &nbsp; تومان </span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <h3 class="product_name">
                                    <a href="/single-product/<?php echo e($special_product->product->slug); ?>"><?php echo e($special_product->product->title); ?>

                                    </a></h3>
                            </figcaption>
                        </figure>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--top- category area start-->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--top- category area end-->

    <!--featured product area start-->
    <section class="featured_product_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>محصولات جدید</h2>
                    </div>
                </div>
            </div>
            <div class="row featured_container featured_column3">
                <?php $__currentLoopData = $new_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="/single-product/<?php echo e($new_product->product->slug); ?>"><img
                                                src="/<?php echo e($new_product->product->image); ?>" alt=""></a>
                                    
                                    
                                    <div class="label_product">
                                        <span class="label_sale">جدید</span>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <?php if($new_product->product->off_rial ==0): ?>
                                        <div class="price_box">

                                        </div>
                                    <?php else: ?>
                                        <div class="price_box">
                                            <?php if($new_product->product->off_rial): ?>
                                                <span class="old_price"><?php echo e(number_format($new_product->product->user_price)); ?> &nbsp; تومان </span>
                                                <span class="current_price"><?php echo e(number_format($new_product->product->off_rial)); ?> &nbsp; تومان </span>
                                            <?php else: ?>
                                                
                                                <span class="current_price"><?php echo e(number_format($new_product->product->user_price)); ?> &nbsp; تومان</span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="product_name"><a
                                                href="/single-product/<?php echo e($new_product->product->slug); ?>"><?php echo e($new_product->product->title); ?></a>
                                    </h3>
                                    <div class="add_to_cart">
                                        <a href="/single-product/<?php echo e($new_product->product->slug); ?>"
                                           >جزئیات
                                            محصول</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--featured product area end-->

    <!--banner area start-->
    <div class="banner_area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a><img src="/assets/img/bg/banner7.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="product_left_area">
                        <div class="section_title">
                            <h2>بزودی</h2>
                        </div>
                        <div class="product_carousel product_column4 owl-carousel">
                            <?php $__currentLoopData = $new_product_last; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img"
                                               href="/single-product/<?php echo e($latest_product->product->slug); ?>"><img
                                                        src="/<?php echo e($latest_product->product->image); ?>" alt=""></a>
                                            
                                            
                                            <div class="label_product">

                                                <span class="label_sale">جدید</span>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="add_to_cart">
                                                <a href="/single-product/<?php echo e($latest_product->product->slug); ?>"
                                                >جزئیات محصول</a>
                                            </div>
                                        </div>
                                        <figcaption class="product_content">
                                            <?php if($latest_product->product->user_price == 0): ?>
                                                <div class="price_box">

                                                </div>
                                            <?php else: ?>
                                                <div class="price_box">
                                                    <?php if($latest_product->product->off_rial): ?>
                                                        <span class="old_price"><?php echo e(number_format($latest_product->product->user_price)); ?> &nbsp; تومان </span>
                                                        <span class="current_price"><?php echo e(number_format($latest_product->product->off_rial)); ?> &nbsp; تومان </span>
                                                    <?php else: ?>
                                                        
                                                        <span class="current_price"><?php echo e(number_format($latest_product->product->user_price)); ?> &nbsp; تومان</span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <h3 class="product_name"><a
                                                        href="/single-product/<?php echo e($latest_product->product->slug); ?>"><?php echo e($latest_product->product->title); ?>

                                                </a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <!--testimonials section start-->
                    <div class="testimonial_are">
                        <div class="section_title">
                            <h2>دیدگاه مشتریان</h2>
                        </div>
                        <div class="testimonial_active owl-carousel">
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>محصولات متنوعی دارید.</p>
                                        <h3><a> آذر </a><span></span></h3>
                                    </figcaption>

                                </figure>
                            </article>
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>ممنون از ارسال سریع محصول</p>
                                        <h3><a>علی</a></h3>
                                    </figcaption>

                                </figure>
                            </article>
                            <article class="single_testimonial">
                                <figure>
                                    <div class="testimonial_thumb">
                                        <a><img src="/assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <figcaption class="testimonial_content">
                                        <p>محصول جدیداتون کی میرسن؟!</p>
                                        <h3><a>سعید</a></h3>
                                    </figcaption>

                                </figure>
                            </article>
                        </div>
                    </div>
                    <!--testimonials section end-->
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--blog area start-->
    <section class="blog_section mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>مقالات</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column4 owl-carousel">
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3">
                            <article class="single_blog">
                                <figure>
                                    <div class="blog_thumb">
                                        <a href="/article-single/<?php echo e($article->slug); ?>"><img
                                                    src="/<?php echo e($article->main_image); ?>" alt="<?php echo e($article->title); ?>"></a>
                                    </div>
                                    <figcaption class="blog_content">
                                        <p class="post_author"><a
                                            ></a><?php echo e(Verta::instance($article->created_at)->format('%d %B %Y')); ?>

                                        </p>
                                        <h3 class="post_title"><a
                                                    href="/article-single/<?php echo e($article->slug); ?>"><?php echo e($article->title); ?></a>
                                        </h3>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->

    <!--brand area start-->
    <div class="brand_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">

                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="brand_items">
                                <div class="single_brand">
                                    <a href="<?php echo e($brand->brand_link); ?>"><img src="/<?php echo e($brand->image); ?>"
                                                                          alt="<?php echo e($brand->title); ?>"></a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>