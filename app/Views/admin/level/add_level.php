<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	<?=empty($levelDetails) ? 'Add ' : 'Edit '?>Level
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" id="level_id" value="<?=!empty($levelDetails) ? $levelDetails->level_id : '';?>">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="category_id" class="form-label">Category Name</label>
                            <select class="form-control form-control-sm form-select form-select-sm" id="category_id">
                                <?php if (!empty($category_list)): ?>
                                    <?php foreach ($category_list as $categoryRow): ?>
                                        <option value="<?=$categoryRow->category_id?>"><?=$categoryRow->category_name?></option>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="level_name" class="form-label">Level Name</label>
                            <input type="text" class="form-control form-control-sm" id="level_name" placeholder="Level Name" aria-describedby="level_name" value="<?=!empty($levelDetails) ? $levelDetails->level_name : '';?>">
                        </div>
                        <div class="col-md-6">
                            <label for="level_short_name" class="form-label">Level Url Short name</label>
                            <input type="text" class="form-control form-control-sm" id="level_short_name" placeholder="Level Name" aria-describedby="level_short_name" value="<?=!empty($levelDetails) ? $levelDetails->level_short_name : '';?>">
                        </div>
                        <div class="col-md-6">
                            <label for="level_more_details_heading" class="form-label">Level More Details Heading</label>
                            <input type="text" class="form-control form-control-sm" id="level_more_details_heading" placeholder="Level More Details Heading" aria-describedby="level_more_details_heading" value="<?=!empty($levelDetails) ? $levelDetails->level_more_details_heading : '';?>">
                        </div>
                        <div class="col-md-12">
                            <label for="level_short_name" class="form-label">Level More Details</label>
                            <textarea class="form-control form-control-sm" id="level_more_details">
                                <?=!empty($levelDetails) ? $levelDetails->level_more_details : '';?>
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="javascript:void(0)" class="btn btn-success" id="addLevelBtn">Save</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript" src="<?=base_url()?>/assets/admin/js/level.js?v=1.0.0"></script>
<?= $this->endSection() ?>
