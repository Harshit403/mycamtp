<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Paper List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
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
                            <th>Download Question paper</th>
                            <th>Download Answer paper</th>
                            <?php if ($item_type!='free'): ?>
                                <th>Upload Assignment</th>
                            <?php endif ?>
                        <tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($getPaperDetails)){
                                foreach($getPaperDetails as $paperRow){
                                    $paper_name = str_replace('','_',trim($paperRow['paper_name']));
                                    ?>
                                        <tr>
                                            <td><?=$paperRow['paper_name']?></td>
                                            <td>    
                                                <a href="<?=base_url().$paperRow['question_paper_upload']?>" class="btn btn-sm btn-success" download="<?=$paper_name?>question_paper.pdf"><i class="bi bi-arrow-down-circle"></i> Download</a>
                                            </td>
                                            <td> 
                                                <div id="answerBtnContainer<?=$paperRow['paper_id']?>" class="answerBtnContainerClass" style="display:<?=$item_type!='free' ? 'none' : ''?>?;">
                                                    <a href="<?=base_url().$paperRow['answer_paper_upload']?>" class="btn btn-sm btn-success" download="<?=$paper_name?>answer_paper.pdf"><i class="bi bi-arrow-down-circle"></i> Download</a>
                                                </div>   
                                            </td>
                                            <?php if ($item_type!='free'): ?>
                                                <td>  
                                                    <div class="row" id="assignmentConatianer<?=$paperRow['paper_id']?>">
                                                        <div class="col-md-8">
                                                            <input type="file" class="form-control mr-2" id="assignmentFile<?=$paperRow['paper_id']?>" accept="application/pdf,image/*"/>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a href="javascript:void(0)" class="btn btn-info btn-sm uploadAssignment" data-paper-id="<?=$paperRow['paper_id']?>"><i class="bi bi-file-arrow-up"></i></a></a>
                                                        </div>
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
<?= $this->section('jsContent')?>
    <script>
        var pageType = 'paper-list';
    </script>
    <script src="<?=base_url()?>assets/student/js/view.js?v=1.0.3"></script>
<?= $this->endSection() ?>
