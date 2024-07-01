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
                                    <h5><?=$jsonDecoded[0]->order_id?></h5>
                                <?php
                                if (!empty($jsonDecoded)) {
                                    foreach ($jsonDecoded as  $value1) {
                                        ?>
                                            <div class="col-md-6">
                                                <div><?=$value1->subject_name?></div>
                                                <div><?=$value1->type_name?></div>
                                                <div><?=$value1->level_name?></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex" style="flex-direction: column;">
                                                    <p style="text-align: right;">&#x20B9;<?=$value1->offer_price?></p>
                                                    <p style="text-align: right;">&#x20B9;<?=$value1->amt_after_discount?></p>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                }
                                
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