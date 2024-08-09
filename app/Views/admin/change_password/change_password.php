<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	Change Admin Password
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <form id="change_password_form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input type="text" name="current_pass" class="form-control form-control-sm" placeholder="Enter the password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="text" name="new_pass" class="form-control form-control-sm" placeholder="Enter the password">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="javascript:void(0)" class="btn btn-success" id="changePassBtn">Change</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript">
    var pageType = 'change_pass';
</script>
<script type="text/javascript" src="<?=base_url()?>/assets/admin/js/admin_common.js?v=1.0.0"></script>
<?= $this->endSection() ?>
