<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>لیست نمونه کار</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">مدیریت نمونه کار</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لیست نمونه کار</li>
                    </ol>
                </nav>
            </div>
            <div class="btn-group" role="group">
                <a href="/admin/sample/create" class="btn btn-primary text-light rounded">ایجاد</a>
                &nbsp;
                <a href="/admin/sample/create" class="btn btn-danger text-light rounded"> حذف </a>
            </div>
        </div>
        <!-- end::page header -->

        <div class="card">
            <div class="card-header">لیست نمونه کار</div>
            <div class="card-body">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th>تصویر</th>
                        <th>عنوان</th>
                        <th>نامک</th>
                        <th>خدمات</th>
                        <th>وضعیت</th>
                        <th>مشاهده</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $samples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sample): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td>
                                <a href="/<?php echo e($sample->image); ?>" target="_blank">
                                    <img src="/<?php echo e($sample->image); ?>" width="50" class="rounded">
                                </a>
                            </td>
                            <td><?php echo e($sample->title); ?></td>
                            <td><?php echo e($sample->slug); ?></td>
                            <td>
                                <?php if($sample->services): ?>
                                    <?php echo e($sample->services->title); ?>

                                    <br>
                                <?php else: ?>
                                    ---
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($sample->status==1): ?>
                                    فعال
                                <?php else: ?>
                                    غیرفعال
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('sample.show',['id'=>$sample->id])); ?>" class="btn btn-success">
                                    <i class="ti-search text-light"></i>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('sample.edit',['id'=>$sample->id])); ?>" class="btn btn-primary">
                                    <i class="ti-pencil text-light"></i>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="<?php echo e(route('sample.destroy',['id'=>$sample->id])); ?>">
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
        <?php if(session()->get('sample_create')=='success'): ?>
            swal.fire({
            text: "نمونه کار با موفقیت افزوده شد.",
            icon: "success",
            button: "تایید",
            allowOutsideClick: true
        });
        <?php endif; ?>

        function myFunction(a){
            var s=$(a);
            var pro_id=s.attr('data-val');
            $.ajax({
                        datatype: 'json',
                        type: "POST",
                        url: "<?php echo e(route('addSpecialPro')); ?>",
                        data: {pro_id: pro_id, '_token': '<?php echo e(csrf_token()); ?>'},
                        success: function (res) {
                            if(res['addSpecialPro']=='success'){
                                swal({
                                    buttons: {
                                        confirm: true
                                    },
                                    title: 'نمونه کار اضافه شد',
                                    text: "نمونه کار با موفقیت به نمونه کار ویژه افزوده شد",
                                    type: 'success',
                                    confirmButtonClass: 'btn btn-success',
                                    confirmButtonText: 'بله'
                                })
                            }
                            else if(res['delSpecialPro']=='success'){
                                swal({
                                    buttons: {
                                        confirm: true
                                    },
                                    title: 'نمونه کار حذف شد',
                                    text: "نمونه کار با موفقیت از نمونه کار ویژه حذف شد",
                                    type: 'success',
                                    confirmButtonClass: 'btn btn-success',
                                    confirmButtonText: 'بله'
                                })
                            }
                        }
                    }
            )
        }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>