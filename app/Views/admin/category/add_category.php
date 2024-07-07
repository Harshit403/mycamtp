<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	<?=empty($categoryDetails) ? 'Add ' : 'Edit '?>Category
<?= $this->endSection() ?>
<?= $this->section('content') ?>
	<div class="row">
		<div class="col-lg-12 mb-4">
			<form id="category_form">
				<input type="hidden" name="category_id" value="<?=!empty($categoryDetails) ? $categoryDetails->category_id : '' ?>">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<label class="form-label">Category Name</label>
								<input type="text" id="category_name" name="category_name" class="form-control form-control-sm" placeholder="Category Name" value="<?=!empty($categoryDetails) ? $categoryDetails->category_name : '' ?>">
							</div>
							<div class="col-md-6">
								<label class="form-label">Category url Name</label>
								<input type="text" id="category_short_name" name="category_short_name" class="form-control form-control-sm" placeholder="Category Short Name" value="<?=!empty($categoryDetails) ? $categoryDetails->category_short_name : ''?>" oninput="this.value=this.value.toLowerCase()">
							</div>
							<div class="col-md-6">
	                            <label for="category_more_details_heading" class="form-label">Category More Details Heading</label>
	                            <input type="text" class="form-control form-control-sm" name="category_more_details_heading" placeholder="Category More Details Heading" aria-describedby="category_more_details_heading" value="<?=!empty($categoryDetails) ? $categoryDetails->category_more_details_heading : '';?>" >
	                        </div>
	                        <div class="col-md-12">
	                            <label for="category_more_details" class="form-label">Category More Details</label>
	                            <textarea class="form-control form-control-sm" name="category_more_details" id="category_more_details">
	                                <?=!empty($categoryDetails) ? $categoryDetails->category_more_details : '';?>
	                            </textarea>
	                        </div>
						</div>
					</div>
					<div class="card-footer d-flex justify-content-end">
	                    <a href="javascript:void(0)" class="btn btn-success" id="addCategoryBtn">Save</a>
	                </div>
				</div>
			</form>
		</div>
	</div>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript">
    var pageType = 'add_category';
</script>
<script type="text/javascript" src="<?=base_url()?>assets/admin/js/category.js?v=1.0.2"></script>
<?= $this->endSection() ?>