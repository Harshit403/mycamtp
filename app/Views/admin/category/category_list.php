<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	Category List
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="category_table">
                        <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript">
    var pageType = 'category_list';
</script>
<script type="text/javascript" src="<?=base_url()?>/assets/admin/js/category.js?v=1.0.0"></script>
<?= $this->endSection() ?>
