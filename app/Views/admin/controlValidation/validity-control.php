<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	Control Validity
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <?php if (!empty($fetchLevelList)): ?>
        <?php foreach ($fetchLevelList as $level): ?>
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <?=$level->level_name?>
                </div>
                <div class="col-lg-3 mb-4">
                    <input type="date" class="validity_date form-control form-control-sm" data-level-id="<?=$level->level_id?>">
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript">
    var pageType = 'control-validity';
</script>
<script type="text/javascript" src="<?=base_url()?>//assets/admin/js/validity.js?v=1.0.0"></script>
<?= $this->endSection() ?>