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
            <?php if(!empty($getPaperDetails)): ?>
                <?php foreach($getPaperDetails as $paperRow): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border rounded p-3">
                            <div class="card-body">
                                <h5 class="card-title text-center font-weight-bold"><?= $paperRow['paper_name'] ?></h5>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <a href="<?= base_url().$paperRow['question_paper_upload'] ?>" class="btn btn-success btn-sm w-100 m-1" download="<?= str_replace(' ', '_', trim($paperRow['paper_name'])) ?>_question_paper.pdf">
                                        <i class="bi bi-arrow-down-circle"></i> Question Paper
                                    </a>
                                    <div id="answerBtnContainer<?= $paperRow['paper_id'] ?>" class="answerBtnContainerClass" style="display:<?= $item_type!='free' ? 'none' : '' ?>;">
                                        <a href="<?= base_url().$paperRow['answer_paper_upload'] ?>" class="btn btn-success btn-sm w-100 m-1" download="<?= str_replace(' ', '_', trim($paperRow['paper_name'])) ?>_answer_paper.pdf">
                                            <i class="bi bi-arrow-down-circle"></i> Answer Paper
                                        </a>
                                    </div>
                                </div>

                                <?php if ($item_type!='free'): ?>
                                    <hr>
                                    <div class="upload-container">
                                        <input type="file" class="form-control mb-2" id="assignmentFile<?= $paperRow['paper_id'] ?>" accept="application/pdf,image/*"/>
                                        <a href="javascript:void(0)" class="btn btn-info btn-sm uploadAssignment w-100" data-paper-id="<?= $paperRow['paper_id'] ?>">
                                            <i class="bi bi-file-arrow-up"></i> Upload Assignment
                                        </a>
                                        <div id="assignmentConatianer<?= $paperRow['paper_id'] ?>" class="mt-2"></div>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>No Paper Available</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('jsContent')?>
<script>
$(document).ready(function() {
    $(".uploadAssignment").on('click', function() {
        var paper_id = $(this).data('paper-id');
        var assignmentFilePath = $("#assignmentFile" + paper_id).val();
        if (assignmentFilePath == '') {
            bootbox.alert("Please select your assignment file");
            return false;
        }
        let dialog = bootbox.dialog({
            message: 'Are you sure you want to submit assignment?',
            size: 'medium',
            buttons: {
                no: {
                    label: 'No',
                    className: 'btn-secondary'
                },
                yes: {
                    label: 'Yes',
                    className: 'btn-success',
                    callback: function() {
                        uploadAssignmentFile(paper_id);
                    }
                }
            }
        });
    });

    function uploadAssignmentFile(paper_id) {
        var formdata = new FormData();
        var assignmentFile = $("#assignmentFile" + paper_id).prop('files')[0];
        formdata.append('paper_id', paper_id);
        formdata.append('assignment_file', assignmentFile);
        
        $.ajax({
            url: baseUrl + 'upload/assignment-file',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function() {
                $("#assignmentConatianer" + paper_id).html('<div class="text-warning font-weight-bold">Uploading...</div>');
            },
            success: function(response) {
                if (response.success) {
                    $("#assignmentConatianer" + paper_id).html('<div class="text-success font-weight-bold">Uploaded Successfully!</div>');
                }
            },
            error: function() {
                $("#assignmentConatianer" + paper_id).html('<div class="text-danger font-weight-bold">Upload Failed! Max file size: 30MB.</div>');
            }
        });
    }
});
</script>
<?= $this->endSection() ?>
