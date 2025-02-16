<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Paper List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords without tag -->
<?=$this->endSection()?>
<?= $this->section('content') ?>
    <section class="container mb-5 section mainContainer">
        <div class="text-center">
            <h2>Paper List</h2>
        </div>
        
        <div class="row my-4 paperContainer">
            <?php if(!empty($getPaperDetails)): ?>
                <?php foreach($getPaperDetails as $paperRow): ?>
                    <div class="col-md-4">
                        <div class="card shadow-sm p-3 mb-4">
                            <div class="card-body">
                                <h5 class="card-title text-center"> <?= $paperRow['paper_name'] ?> </h5>
                                <div class="d-flex justify-content-between my-3">
                                    <a href="<?= base_url().$paperRow['question_paper_upload'] ?>" class="btn btn-sm btn-success" download><i class="bi bi-arrow-down-circle"></i> Question</a>
                                    <a href="<?= base_url().$paperRow['answer_paper_upload'] ?>" class="btn btn-sm btn-success" download><i class="bi bi-arrow-down-circle"></i> Answer</a>
                                </div>
                                
                                <?php if ($item_type != 'free'): ?>
                                    <div class="upload-section mt-3">
                                        <input type="file" class="form-control" id="assignmentFile<?= $paperRow['paper_id'] ?>" accept="application/pdf,image/*"/>
                                        <button class="btn btn-info btn-sm uploadAssignment mt-2" data-paper-id="<?= $paperRow['paper_id'] ?>">
                                            <i class="bi bi-file-arrow-up"></i> Upload Assignment
                                        </button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-md-12 text-center">
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
            var assignmentFile = $("#assignmentFile" + paper_id).prop('files')[0];
            if (!assignmentFile) {
                bootbox.alert("Please select your assignment file");
                return false;
            }
            
            let formData = new FormData();
            formData.append('paper_id', paper_id);
            formData.append('assignment_file', assignmentFile);

            $.ajax({
                url: baseUrl + 'upload/assignment-file',
                type: 'POST',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                dataType: 'json',
                beforeSend: function() {
                    bootbox.alert("Uploading...");
                },
                success: function(response) {
                    if (response.success) {
                        bootbox.alert("Assignment uploaded successfully!");
                    } else {
                        bootbox.alert("Upload failed. Try again.");
                    }
                },
                error: function() {
                    bootbox.alert("Error in uploading file. Max 30MB allowed.");
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>
