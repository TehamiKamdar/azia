<?php if (! $__env->hasRenderedOnce('ccfa2396-fad3-4e38-9bba-b3b02745d128')): $__env->markAsRenderedOnce('ccfa2396-fad3-4e38-9bba-b3b02745d128');
$__env->startPush('styles'); ?>

<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('8374b706-d2cc-467a-8efa-1d2e87a0da97')): $__env->markAsRenderedOnce('8374b706-d2cc-467a-8efa-1d2e87a0da97');
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

<?php echo $__env->make("layouts.publisher.panel_app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Downloads\application\resources\views/template/publisher/tools/deeplink/view.blade.php ENDPATH**/ ?>