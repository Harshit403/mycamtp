<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	<?=empty($blog_data) ? 'Add ' : 'Edit '?>Blog
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" id="blog_id" value="<?=!empty($blog_data) ? $blog_data->blog_id : '';?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Heading</label>
                            <input type="text" id="blog_heading" class="form-control form-control-sm" placeholder="Blog Heading" value="<?=!empty($blog_data) ? $blog_data->blog_heading : '' ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Short Blog Name</label>
                            <input type="text" id="blog_short_name" class="form-control form-control-sm" placeholder="Blog Short Name" value="<?=!empty($blog_data) ? $blog_data->blog_short_name : '' ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Add Image</label>
                            <input type="file" id="preview_image" class="form-control form-control-sm" accept="image/*">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Blog Body</label>
                            <textarea id="blog_body" placeholder="Blog Text">
                                <?php if (!empty($blog_data)): ?>
                                    <?=$blog_data->blog_text?>
                                <?php endif ?>
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="javascript:void(0)" class="btn btn-success" id="addBlogBtn">Save</a>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript">
    var pageType = 'add_blog';
</script>
<script type="text/javascript" src="<?=base_url()?>/assets/admin/js/blog.js?v=1.0.1"></script>
<?= $this->endSection() ?>
