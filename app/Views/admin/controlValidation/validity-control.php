<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	Control Validity
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <?php if (!empty($fetchTypeList)): ?>
        <?php foreach ($fetchTypeList as $type): ?>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <?=$type->type_name?>
                </div>
                <div class="col-lg-3 mb-4">
                    <a href="javascript:void(0)" class="btn btn-sm btn-danger typeValidityBtn" data-type-id="<?=$type->type_id?>"><i class="bx bx-trash text-white"></i></a>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript">
    var pageType = 'control-validity';
</script>
<script type="text/javascript" src="<?=base_url()?>/assets/admin/js/validity.js?v=1.0.1"></script>
<?= $this->endSection() ?>