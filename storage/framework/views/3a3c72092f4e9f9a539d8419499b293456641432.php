<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست سایت ها</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت مقالات</a></li>
                        <li class="breadcrumb-item"><a href="#">مدیریت دسته بندی مقالات</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست دسته بندی مقالات</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/category/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/category/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست دسته بندی مقالات</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>دامنه</th>
                        <th>نام مشتری</th>
                        <th>کانسپت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $cpanels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cpanel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($cpanel->site_name); ?></td>
                            <td><?php echo e($cpanel->domain); ?></td>
                            <td><?php echo e($cpanel->user_name); ?></td>
                            <td>
                                <?php if($cpanel->site_type ==1): ?>
                                    <span class="badge badge-success"><a href="http://<?php echo e($cpanel->site_url); ?>"target="_blank" style="color: white">شرکتی</a></span>
                                <?php elseif($cpanel->site_type ==0): ?>
                                    <span class="badge badge-danger"><a href="http://<?php echo e($cpanel->site_url); ?>" target="_blank" style="color: white">فروشگاهی</a></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('category.edit',['id'=>$cpanel->id])); ?>" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="<?php echo e(route('category.destroy',['id'=>$cpanel->id])); ?>">
                                    <?php echo e(method_field('DELETE')); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <button type="submit" class="btn btn-danger">
                                        <i class="ti-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        <?php if(session()->get('category_delete')=='success'): ?>
            swal.fire({
            text: "دسته بندی مقاله با موفقیت حذف شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        <?php endif; ?>
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>