<?php if (! $__env->hasRenderedOnce('67818f15-837e-4535-a8e7-0b45906c9c35')): $__env->markAsRenderedOnce('67818f15-837e-4535-a8e7-0b45906c9c35');
$__env->startPush('styles'); ?>

<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('ca6d3901-05e1-432f-b821-15bf7134df75')): $__env->markAsRenderedOnce('ca6d3901-05e1-432f-b821-15bf7134df75');
$__env->startPush('scripts'); ?>

<?php $__env->stopPush(); endif; ?>

<?php $__env->startSection("content"); ?>

    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="col-xxl-6 col-lg-6 offset-3 col-sm-12 m-bottom-50 m-top-50">

                        <?php
                            $title = "Deep Link Generator";
                            $description = "Create a Link with our super fast deep link generator tool and promote any brand easily.";
                        ?>
                        <?php echo $__env->make("template.publisher.widgets.deeplink", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                </div><!-- End: .col -->
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.publisher.publisher_panel", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Downloads\application\resources\views/template/publisher/tools/deeplink/view.blade.php ENDPATH**/ ?>