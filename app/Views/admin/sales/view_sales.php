<?= $this->extend('admin/layouts/layout') ?>
<?= $this->section('title') ?>
	Sales
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<style type="text/css">
    .table th,.table td {
        font-size: 9px !important;
    }
</style>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Select Statistics</label>
                            <select class="form-select form-select-sm" id="statistic_type">
                                <option value="sales">Sales</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Select Level</label>
                            <select class="form-select form-select-sm" id="level_id">
                                <option value="">All Levels</option>
                                <?php if (!empty($level_list)): ?>
                                    <?php foreach ($level_list as $levelRow): ?>
                                        <option value="<?=$levelRow->level_id?>"><?=$levelRow->level_name?></option>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Select Type</label>
                            <select class="form-select form-select-sm" id="type_id">
                                <option value="">All Types</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Select Subject</label>
                            <select class="form-select form-select-sm" id="subject_id">
                                <option value="">All Subjects</option>
                            </select>
                        </div>
                        <label>Purchase Date Range</label>
                        <div class="col-md-4">
                            <input type="date" id="from_date" class="form-control form-control-sm" value="<?=date('Y-m-d',strtotime('-1month'))?>">
                        </div>
                        <div class="col-md-1 d-flex align-items-center justify-content-center">
                            <div>&#x2010;</div>
                        </div>
                        <div class="col-md-4">
                            <input type="date" id="to_date" class="form-control form-control-sm" value="<?=date('Y-m-d')?>">
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end mb-3">
                        <a href="javascript:void(0)" class="btn btn-sm btn-success mt-2 getSalesBtn">Get Sales</a>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="card" style="width: 18rem; background-color: #FDA403;height: 100px;">
                            <h1 id="total_sales_amt" class="text-white d-flex align-items-center justify-content-center" style="height: 100%;">&#8377; 0</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Date Of Enrollment</th>
                                    <th>Student Name</th>
                                    <th>Merchant Reference Id</th>
                                    <th>Subject</th>
                                    <th>level</th>
                                    <th>Type</th>
                                    <th>Offer Price</th>
                                    <th>Promo Code Used</th>
                                    <th>Payment Mode</th>
                                    <th>Sale In &#8377;</th>
                                    <th>Purchase Date</th>
                                </thead>
                                <tbody id="sales_body">
                                    <td colspan="9" class="text-center">No Info Available</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script type="text/javascript" src="<?=base_url()?>//assets/admin/js/admin_common.js?v=1.0.0"></script>
<script type="text/javascript" src="<?=base_url()?>//assets/admin/js/sales.js?v=1.0.0"></script>
<?= $this->endSection() ?>