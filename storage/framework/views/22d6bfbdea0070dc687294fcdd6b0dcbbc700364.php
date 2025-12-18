<?php if (! $__env->hasRenderedOnce('908c23d2-6219-42df-b2c5-0524231cbe29')): $__env->markAsRenderedOnce('908c23d2-6219-42df-b2c5-0524231cbe29');
$__env->startPush('styles'); ?>

<style>
        :root {
            --primary: #5b47fb;
            --primary-dark: #4a3ac9;
            --light-bg: #f8f9fe;
            --dark-text: #2a2a3c;
            --light-text: #6c757d;
            --border-color: #e0e0ed;
        }

        .bg-primary{
            background-color: var(--primary) !important;
        }

        .profile-card {
            background: white;
            border: 1px solid var(--border-color);
            margin-bottom: 30px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.03);
        }

        .profile-header {
            padding: 30px;
            background: linear-gradient(to right, #ffffff 0%, var(--light-bg) 100%);
            border-bottom: 1px solid var(--border-color);
        }

        .li-none{
            margin-left: 8px;
            margin-bottom: 4px;
            list-style: none;
        }

        .profile-name {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--dark-text);
            margin-bottom: 5px;
            letter-spacing: -1px;
        }

        .profile-title {
            color: var(--light-text);
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .image-wrapper{
            max-width: 100%;
            overflow: hidden;
        }

        .profile-image {
            width: auto;
            height: 80px;
            border: 2px solid white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs {
            border-bottom: 1px solid var(--border-color);
            padding: 0 30px;
        }

        .nav-tabs .nav-link {
            color: var(--light-text);
            font-weight: 600;
            padding: 15px 20px;
            border: none;
            border-bottom: 3px solid transparent;
        }

        .nav-tabs .nav-link.active {
            color: var(--primary) !important;
            background: transparent;
            border-bottom: 3px solid var(--primary) !important;
        }

        .tab-content {
            padding: 30px;
        }

        .info-box {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .info-label {
            font-weight: 600;
            color: var(--light-text);
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark-text);
        }

        .info-value.highlight {
            color: var(--primary);
        }

        .btn-primary {
            background-color: var(--primary);
            border: 1px solid var(--primary);
            padding: 10px 25px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .btn-outline-primary {
            color: var(--primary);
            border: 1px solid var(--primary);
            padding: 10px 25px;
            font-weight: 600;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
        }

        .contact-info {
            background-color: var(--light-bg);
            padding: 15px;
            margin-top: 20px;
            border: 1px solid var(--border-color);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 30px;
            color: var(--primary);
        }

        .commission-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .commission-item:last-child {
            border-bottom: none;
        }

        .commission-category {
            font-weight: 600;
        }

        .commission-rate {
            font-weight: 700;
            color: var(--primary);
        }

        .terms-item {
            margin-bottom: 4px;
        }

        .terms-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .terms-title {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: var(--light-text);
            font-size: 0.9rem;
            border-top: 1px solid var(--border-color);
            margin-top: 30px;
        }
    </style>
<?php $__env->stopPush(); endif; ?>

<?php if (! $__env->hasRenderedOnce('2e7fc675-8722-4aff-bd99-6cfdd9013893')): $__env->markAsRenderedOnce('2e7fc675-8722-4aff-bd99-6cfdd9013893');
$__env->startPush('scripts'); ?>
    <script src="<?php echo e(\App\Helper\Static\Methods::staticAsset("vendor_assets/js/drawer.js")); ?>"></script>
    <script>
        function clickToCopy(id, msg)
        {
            copyToClipboard(document.getElementById(id))
            normalMsg({"message": msg, "success": true});
        }
        function prepareVoucherFormContent(id)
        {
            $.ajax({
                url: `/publisher/creatives/coupons/${id}`,
                type: 'GET',
                success: function (response) {
                    $("#voucherModalContent").html(response)
                },
                error: function (response) {

                }
            });
        }
        function changeLimit()
        {
            $.ajax({
                url: '<?php echo e(route("publisher.set-limit")); ?>',
                type: 'GET',
                data: {"limit": $("#limit").val(), "type": "coupon"},
                success: function (response) {
                    if(response) {
                        window.location.reload();
                    }
                },
                error: function (response) {

                }
            });
        }
        function fetch_data(page = 1)
        {
            $.ajax({
                url: '<?php echo e(route("publisher.creatives.coupons.list")); ?>',
                type: 'GET',
                data: {"search_by_name": "<?php echo e($advertiser->advertiser_id); ?>", page},
                beforeSend: function () {
                },
                success: function (response) {
                    $("#ap-overview").html(response.html);
                    $("#limit").change(function () {
                        changeLimit();
                    });
                },
                error: function (response) {

                }
            });
        }
        document.addEventListener("DOMContentLoaded", function () {
            $(document).on('click', '.atbd-pagination__item a', function(event){
                event.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });
            $("#coupons-tab").one( "click", function () {
                fetch_data();
            });
            $("#applyAdvertiser").submit(function () {
                $("#applyAdvertiserBttn").prop('disabled', true);
            });
        });
    </script>
<?php $__env->stopPush(); endif; ?>

<?php $__env->startSection("content"); ?>
<div class="az-content az-content-dashboard">
    <div class="container-fluid">
        <div class="az-content-body">
            <div class="profile-card">
            <!-- Profile Header -->
            <div class="profile-header">
                <div class="row align-items-center">
                    <div class="col-md-9 col-sm-12">
                        <h1 class="profile-name"><?php echo e($advertiser->name); ?></h1>
                        <p class="profile-title">ID: <?php echo e($advertiser->sid); ?></p>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-box">
                                    <div class="info-label">Commission Rate</div>
                                    <div class="info-value highlight"><?php echo e($advertiser->commission); ?> <?php echo e($advertiser->commission_type == "percentage" ? "%" : $advertiser->commission_type); ?></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <div class="info-label">Payout Days</div>
                                    <div class="info-value"><?php echo e($advertiser->average_payment_time ?? "30"); ?> <span class="fs-12">days</span></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box">
                                    <div class="info-label">Region</div>
                                    <div class="info-value">
                                        <?php
                                            $regions = $advertiser->primary_regions ?? [];
                                            if(count($regions) > 1) {
                                                $regions = "Multi";
                                            } elseif (count($regions) == 1 && $regions[0] == "00") {
                                                $regions = "All";
                                            } elseif (count($regions) == 1) {
                                                $regions = $regions[0]." Region ";
                                            } else {
                                                $regions = "Region Data is not available";
                                            }
                                        ?>
                                        <?php echo e($regions); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 text-center">
                        <div class="image-wrapper">
                            
                            <?php if(!empty($advertiser->fetch_logo_url)): ?>
                            <img loading="lazy" class="profile-image"
                                src="<?php echo e($advertiser->fetch_logo_url); ?>" alt="<?php echo e($advertiser->name); ?>">
                            <?php elseif(!empty($advertiser->logo)): ?>
                                <img src="<?php echo e(\App\Helper\Static\Methods::staticAsset("$advertiser->logo")); ?>"
                                    alt="<?php echo e($advertiser->name); ?>" class="profile-image">
                            <?php else: ?>
                                <img loading="lazy" class="profile-image"
                                    src="<?php echo e(\App\Helper\Static\Methods::isImageShowable($advertiser->logo)); ?>"
                                    alt="<?php echo e($advertiser->name); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="row mt-3">
                    <div class="col-md-6 mb-2">
                        <button class="btn btn-primary w-100" id="applyBtn">
                            <i class="fas fa-paper-plane me-2"></i> Apply to Promote
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-outline-primary w-100" id="messageBtn">
                            <i class="fas fa-envelope me-2"></i> Send Message
                        </button>
                    </div>
                </div>
            </div>

            <!-- Navigation Tabs -->
            <ul class="nav nav-tabs" id="profileTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="intro-tab" data-bs-toggle="tab" data-bs-target="#intro" type="button">Intro</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="commission-tab" data-bs-toggle="tab" data-bs-target="#commission" type="button">Commission Rates</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="terms-tab" data-bs-toggle="tab" data-bs-target="#terms" type="button">Terms</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="rules-tab" data-bs-toggle="tab" data-bs-target="#rules" type="button">Rules</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="profileTabContent">
                <!-- Intro Tab -->
                <div class="tab-pane fade" id="intro" role="tabpanel">
                    <div>
                        <h4 class="az-dashboard-title mb-2">About <?php echo e($advertiser->name); ?></h4>
                        <?php if($advertiser->short_description): ?>
                        <p class="az-dashboard-text m-0">
                            <?php echo \Illuminate\Support\Str::limit($advertiser->short_description, 1000); ?>

                        </p>
                        <?php else: ?>
                        <p class="az-dashboard-text m-0">
                            <?php echo \Illuminate\Support\Str::limit($advertiser->description, limit: 1000); ?>

                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="">
                        <h4 class="az-dashboard-title mb-2">Categories</h4>
                        <?php if($advertiser->categories): ?>
                            <?php $__currentLoopData = \App\Helper\PublisherData::getMixNames($advertiser->categories); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="li-none badge rounded-pill bg-primary p-2" style="font-size: 90%;">
                                    <?php echo e($category ?? "-"); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <li class="li-none badge rounded-pill bg-danger p-2" style="font-size: 90%;">
                                No Categories to show
                            </li>
                        <?php endif; ?>
                    </div>
                    <div class="contact-info">
                        <h5><i class="fas fa-address-card me-2"></i> Contact Information</h5>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <strong>Email:</strong> <?php echo e($advertiser->user->email ?? "-"); ?>

                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div>
                                <strong>Website:</strong> <?php echo $url; ?>

                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <strong>Response Time:</strong> Within 24-48 hours
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Commission Rates Tab -->
                <div class="tab-pane fade" id="commission" role="tabpanel">
                    <h4 class="az-dashboard-title mb-2">Commission Structure</h4>
                    <p class="az-dashboard-text mb-3">Our commission rates vary based on product category and performance tiers.</p>

                    <div class="table-responsive">
                        <table class="table table-primary table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Condition</th>
                                <th class="text-center">Commission Rate</th>
                                <th>Additional info</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php if(count($advertiser->commissions)): ?>
                                    <?php $__currentLoopData = $advertiser->commissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php if(empty($commission->date)): ?>
                                                <td><?php echo e(now()->format("Y-m-d")); ?></td>
                                            <?php else: ?>
                                                <td><?php echo e($commission->date); ?></td>
                                            <?php endif; ?>
                                            <td><?php echo e($commission->condition ?? "-"); ?></td>
                                            <td class="text-center"><?php echo e($commission->rate ?? "-"); ?><?php echo e($commission->type == "amount" ? $advertiser->currency_code : "%"); ?></td>
                                            <td><?php echo e($commission->info ?? "-"); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr class="border-0">
                                        <td class="text-center" colspan="4">
                                            <small>No Commission Rates Exist</small>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Terms Tab -->
                <div class="tab-pane fade show active" id="terms" role="tabpanel">
                    <h4 class="az-dashboard-title mb-2">Program Terms</h4>

                    <div class="terms-item">
                        <p><?php echo $advertiser->program_policies ?? "-"; ?></p>
                    </div>
                </div>

                <!-- Rules Tab -->
                <div class="tab-pane fade" id="rules" role="tabpanel">


                    <div class="border-bottom">
                        <div class="mb-4">
                            <h4 class="az-dashboard-title mb-2">Preferred Promotional Methods</h4>
                            <p class="az-dashboard-text">Promotional Traffic from these sources is allowed:</p>
                        </div>
                        <?php $__empty_1 = true; $__currentLoopData = \App\Helper\PublisherData::getMixNames($advertiser->promotional_methods ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="terms-item">
                                <p> > <?php echo e($method); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="terms-item">
                                <p>No Method Found.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mt-4">
                        <div class="mb-4">
                            <h4 class="az-dashboard-title mb-2">Restricted Promotional Methods</h4>
                            <p class="az-dashboard-text">Promotional Traffic from these sources are strictly not allowed:</p>
                        </div>
                        <?php $__empty_1 = true; $__currentLoopData = \App\Helper\PublisherData::getMixNames($advertiser->program_restrictions ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="terms-item">
                                <p><?php echo e($method); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="terms-item">
                                <p>No Method Found.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
</div>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.publisher.publisher_panel", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenovo\Downloads\application\resources\views/template/publisher/advertisers/detail.blade.php ENDPATH**/ ?>