<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Invoice
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <section class="container mb-5 section mainContainer">
        <div class="invoiceSubContainer my-3">
            <div class="row">
                <?php if (!empty($invoiceDetails)): ?>
                    <?php foreach ($invoiceDetails as $value): ?>
                        <?php
                            $invoiceJson = $value->invoice_json;
                            if (!empty($invoiceJson)) {
                                $jsonDecoded = json_decode($invoiceJson);
                                ?>
                                    <div class="d-flex justify-content-between">
                                        <?php $order_id = $jsonDecoded[0]->order_id; ?>
                                        <h5><?=$order_id?></h5>
                                        <div class="d-flex" style="flex-direction:column;">
                                            <?=$jsonDecoded[0]->payment_status?>
                                            <a href="<?=base_url()?>download-invoice?order_id=<?=$order_id?>" class="btn btn-sm btn-success"><i class="bi bi-arrow-down-circle"></i> Download</a>
                                        </div>
                                    </div>

                                <?php
                            }
                        ?>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
    <script type="text/javascript">
        var pageType="student_invoice_list";
    </script>
    <script src="<?=base_url()?>assets/js/custom_js/student_dashboard.js?v=1.0.2"></script>
<?= $this->endSection() ?>