<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	Dashboard
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php 
    $userData = session()->get('userData');
?>
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations <?=$userData['user_name']?>! 🎉</h5>
                            <p class="mb-4">
                                You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in
                                your profile.
                            </p>
                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?=base_url()?>/assets/admin_assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>