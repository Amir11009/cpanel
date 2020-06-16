<?php $__env->startSection('content'); ?>
    <!-- Content area -->

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>افزودن سایت</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت مقالات</a></li>
                        <li class="breadcrumb-item"><a href="#">مدیریت دسته بندی مقالات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">افزودن دسته بندی مقالات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/cpanel" class="btn btn-danger text-light rounded"> بازگشت </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">افزودن دسته بندی مقالات </h5>

                        <form action="<?php echo e(route('cpanel.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label ">نام مشتری :</label>
                                    <input type="text" class="form-control" name="user_name" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="control-label ">نام سایت :</label>
                                    <input type="text" class="form-control" name="site_name" required placeholder="سایت ساز">


                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="control-label ">نام دامنه :</label>
                                    <input type="text" class="form-control" name="domain" required placeholder="ima-web">
                                    <span class="mt-1"
                                          style="color: red"> آدرس سایت را بدون پسوند ir. , com. وارد کنید</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="control-label ">آدرس دامنه :</label>
                                    <input type="text" class="form-control" name="site_url" required placeholder="www.ima-web.com">
                                    <span class="mt-1"
                                          style="color: red"> آدرس کامل سایت را  با .www وارد کنید</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <select class="js-example-basic-single" dir="rtl" name="tag_id">
                                        <option value="0">کد قالب</option>
                                        
                                        
                                        <option value="1">6420</option>
                                        <option value="2">6430</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="mt-4 custom-control custom-switch custom-checkbox-success"
                                     select value="1">
                                    <label class="control-label ml-2">کانسپت :</label>
                                    <input type="checkbox" class="custom-control-input"
                                           id="customSwitch2_" name="status">
                                    فروشگاهی
                                    <label class="custom-control-label" for="customSwitch2_"
                                           style="margin-right:50px">
                                        شرکتی</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="mt-4 custom-control custom-switch custom-checkbox-success"
                                     select value="1">
                                    <label class="control-label ml-2">وضعیت :</label>
                                    <input type="checkbox" class="custom-control-input"
                                           id="customSwitch3_" name="status">
                                    غیر فعال
                                    <label class="custom-control-label" for="customSwitch3_"
                                           style="margin-right:50px">
                                        فعال</label>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">افزودن<i
                                            class="icon-arrow-left13 position-right"></i></button>
                                <a href="<?php echo e(route('cpanel.index')); ?>" class="btn btn-danger" type="submit">بازگشت</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>