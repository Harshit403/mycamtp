<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	Examinar List
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="examinarListTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Edit</th>
                                    <th>Examinar Name</th>
                                    <th>Examinar Email</th>
                                    <th>Examinar Mobile No</th>
                                    <th>Assign</th>
                                    <th>View Assign Subject</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                        </table>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript" src="<?=base_url()?>//assets/admin/js/examinar.js?v=1.0.0"></script>
<script type="text/javascript">
    var pageType = 'examinar_list';
</script>
<?= $this->endSection() ?>
