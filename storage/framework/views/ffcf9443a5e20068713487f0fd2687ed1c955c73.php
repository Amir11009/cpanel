<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>ویرایش قوانین و مقررات</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت قوانین ما</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش قوانین ما</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ویرایش قوانین ما </h5>
                        <form action="<?php echo e(route('policy.update',['id'=>$policy->id])); ?>" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>

                            <div class="form-group row">
                                <label for="inputTitle" class="col-sm-1 col-form-label">عنوان</label>
                                <div class="col-sm-11">
                                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="عنوان" value="<?php echo e($policy->title); ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputImage" class="col-sm-1 col-form-label">متن</label>
                                <div class="col-sm-11">
                                    <textarea name="text" class="form-control" id="inputImage" placeholder="متن قوانین"><?php echo e($policy->text); ?></textarea>
                                </div>
                            </div>

                            <script>
                                var editor = CKEDITOR.replace('text',{
                                    filebrowserBrowseUrl: '/ckeditor/ckfinder/ckfinder.html',
                                    filebrowserUploadUrl: '/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                                });
                                CKFinder.setupCKEditor( editor );
                            </script>
















                            <hr>
                            <button class="btn btn-primary" type="submit"> ویرایش </button>

                        </form>
                    </div>
                </div>

            </div>

        </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>