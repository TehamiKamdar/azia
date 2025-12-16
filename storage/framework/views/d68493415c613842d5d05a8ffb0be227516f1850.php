<?php if (! $__env->hasRenderedOnce('e3093b35-89be-42ea-96a6-f7e564767067')): $__env->markAsRenderedOnce('e3093b35-89be-42ea-96a6-f7e564767067');
$__env->startPush('styles'); ?>

<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('0edc7bdd-8851-4435-b679-a43531e20db8')): $__env->markAsRenderedOnce('0edc7bdd-8851-4435-b679-a43531e20db8');
$__env->startPush('scripts'); ?>

<?php $__env->stopPush(); endif; ?>

<?php $__env->startSection("content"); ?>

    <div class="az-content az-content-dashboard">

        <div class="container-fluid">
            <div class="az-content-body">
                <div class="col-lg-12">

                        <?php
                            $title = "Deep Link Generator";
                            $description = "Create a Link with our super fast deep link generator tool and promote any brand easily.";
                        ?>
                        <?php echo $__env->make("template.publisher.widgets.deeplink", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div><!-- End: .col -->
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.publisher.publisher_panel", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Downloads\application\resources\views/template/publisher/tools/deeplink/view.blade.php ENDPATH**/ ?>