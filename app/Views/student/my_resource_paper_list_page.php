<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Paper List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
Most Trusted CS Test Series for CSEET CS Executive and CS Professional | Mission CS Test Series
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
cs test series, cstestseries , cs executive test series, cs professional test series, icsi test series, cs executive test series, cs online test Series, cs exam, cs exams test series, cs exams, best test series for cs exams
<?=$this->endSection()?>
<?= $this->section('content') ?>
    <section class="container mb-5 section mainContainer">
        <div class="text-center">
            <h2>Paper List</h2>
        </div>
        <div class="row my-4 paperContainer">
            <div class="col-md-12 text-center">
                <div class="container" style="overflow-x: auto;">
                <table class="table table-striped" id="paper_table">
                    <thead>
                        <tr>
                            <th>Paper Name</th>
                            <th>Download Question Paper</th>
                            <th>Download Suggested Answer</th>
                            <?php if ($item_type != 'free'): ?>
                                <th>Upload Assignment</th>
                            <?php endif ?>
                        <tr>
                    </thead>
                    <tbody>
                        <?php
                            if (!empty($getPaperDetails)) {
                                foreach ($getPaperDetails as $paperRow) {
                                    $paper_name = str_replace(' ', '_', trim($paperRow['paper_name']));
                                    ?>
                                    <tr class="test-paper">
                                        <td class="test-paper-title"><?=$paperRow['paper_name']?></td>
                                        <td>
                                            <a href="<?=base_url() . $paperRow['question_paper_upload']?>" class="btn btn-sm btn-gradient" download="<?=$paper_name?>_question_paper.pdf">
                                                <i class="fas fa-download"></i> Question Paper
                                            </a>
                                        </td>
                                        <td>
                                            <div id="answerBtnContainer<?=$paperRow['paper_id']?>" class="answerBtnContainerClass" style="display:<?=$item_type != 'free' ? 'none' : ''?>;">
                                                <a href="<?=base_url() . $paperRow['answer_paper_upload']?>" class="btn btn-sm btn-gradient" download="<?=$paper_name?>_answer_paper.pdf">
                                                    <i class="fas fa-lightbulb"></i> Suggested Answer
                                                </a>
                                            </div>
                                        </td>
                                        <?php if ($item_type != 'free'): ?>
                                            <td>
                                                <div class="upload-container">
                                                    <input type="file" class="form-control" id="assignmentFile<?=$paperRow['paper_id']?>" accept="application/pdf,image/*" style="font-size: 11px; padding: 4px;">
                                                    <button class="btn btn-gradient uploadAssignment" data-paper-id="<?=$paperRow['paper_id']?>">
                                                        <i class="fas fa-upload"></i> Upload
                                                    </button>
                                                </div>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="4">No Paper Available</td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
    <script>
        var pageType = 'paper-list';
    </script>
    <script src="<?=base_url()?>assets/student/js/view.js?v=1.0.3"></script>
<?= $this->endSection() ?>
