<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Amendment List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?= $this->section('content') ?>
    <section class="container mb-5 section mainContainer">
        <div class="amendmentContainer">
            <div class="row">
                <?php if (!empty($amendment_list)): ?>
                    <?php $i = 0;?>
                    <div class="table-responsive">
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Amendment Name</th>
                                    <th>Download</th>
                                </tr>
                    <?php foreach ($amendment_list as $value): ?>
                            <?php $count = ($i+1)?>
                            <tr>
                                <td><?=$count;?></td>
                                <td><?=!empty($value->amendment_name) ? ($value->amendment_name) : ''?></td>
                                <td><a href="<?=base_url().$value->amendment_file?>" class="btn btn-info" download="<?=!empty($value->amendment_name) ? ($value->amendment_name) : ''?>"><i class="bi bi-arrow-down-circle"></i> <b>Download</b></a></td>
                            </tr>
                        <?php $i++;?>
                    <?php endforeach?>
                            </table>
                        </div>
                <?php else: ?>
                    <h1 class="text-center">No Amendment Available</h1>
                <?php endif ?>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
    <script type="text/javascript">
        var pageType="student_amendment_list";
    </script>
    <script src="<?=base_url()?>assets/js/custom_js/student_dashboard.js?v=1.0.2"></script>
<?= $this->endSection() ?>
