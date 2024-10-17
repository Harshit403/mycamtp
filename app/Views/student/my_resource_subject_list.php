<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Subject List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?= $this->section('content') ?>
    <section class="container mainContainer mb-5 section" style="min-height:400px;">
        <div class="text-center">
            <h2>Subject List</h2>
        </div>
        <div class="row my-4 subjectContainer">
            <?php 
                $urlPart = '';
                if (!empty($item_type) && $item_type=='free') {
                    $urlPart = '/free';
                }
            ?>
            <?php if (!empty($fetchAvailbleSubject)): ?>
                <?php foreach ($fetchAvailbleSubject as $key => $subjectRow): ?>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5><b>Subject:</b><?=$subjectRow['subject_name']?></h5>
                                        <h5><b>Type:</b><?=$subjectRow['type_name']?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <a href="<?=base_url()?>/my-resources/paper<?=$urlPart?>?subject=<?=$subjectRow['subject_short_name']?>"class="btn btn-warning btn-sm"><i class="bi bi-book"></i> View Paper</a>
                                    <a href="<?=base_url().$subjectRow['schedule_file']?>"class="btn btn-custom btn-sm"><i class="bi bi-arrow-down-circle"></i> Schedule</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </section>
<?= $this->endSection() ?>
<?= $this->section('jsContent')?>
    <script src="<?=base_url()?>assets/js/custom_js/view.js?v=1.0.2"></script>
<?= $this->endSection() ?>
