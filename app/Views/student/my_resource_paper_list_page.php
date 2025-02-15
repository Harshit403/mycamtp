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
                    <div class="subject-container">
                        <h2><?= $paperRow['paper_name'] ?></h2>
                        <p><strong>Duration:</strong> 30 - 180 Minutes</p>
                        <p><strong>Marks:</strong> 20 - 100</p>
                        <div class="btn-group">
                            <a href="<?=base_url().$paperRow['question_paper_upload']?>" class="download-btn" download>Download Question Paper</a>
                            <a href="<?=base_url().$paperRow['answer_paper_upload']?>" class="download-btn" download>Download Suggested Answer</a>
                        </div>
                        <?php if ($item_type!='free'): ?>
                            <div class="upload-section">
                                <input type="file" id="answersheet-<?= $paperRow['paper_id'] ?>" accept="application/pdf,image/*">
                                <button class="upload-btn" onclick="handleUpload('<?= $paperRow['paper_id'] ?>')">Upload</button>
                            </div>
                            <div class="progress-container" id="progress-<?= $paperRow['paper_id'] ?>">
                                <div class="progress-bar" id="progress-bar-<?= $paperRow['paper_id'] ?>"></div>
                            </div>
                            <p class="upload-status" id="upload-status-<?= $paperRow['paper_id'] ?>" style="display:none;">Successfully Uploaded!</p>
                            <button class="download-btn checked-answersheet" id="checked-<?= $paperRow['paper_id'] ?>" style="display:none;">Download Checked Answersheet</button>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No Paper Available</p>
            <?php endif; ?>
        </div>
    </section>
<?= $this->endSection() ?>
<?= $this->section('jsContent')?>
    <script>
        var pageType = 'paper-list';

        function handleUpload(paperId) {
    let fileInput = document.getElementById("answersheet-" + paperId);
    let progressBar = document.getElementById("progress-bar-" + paperId);
    let progressContainer = document.getElementById("progress-" + paperId);
    let uploadStatus = document.getElementById("upload-status-" + paperId);
    let checkedButton = document.getElementById("checked-" + paperId);
    let suggestedAnswerBtn = document.querySelector(`a[href*='${paperId}'][download]`);

    if (!fileInput.files.length) {
        bootbox.alert("Please select a file before uploading.");
        return;
    }

    bootbox.confirm({
        message: "Are you sure you want to upload this? You’ll get only one chance.",
        buttons: {
            cancel: {
                label: 'No',
                className: 'btn-secondary'
            },
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            }
        },
        callback: function(result) {
            if (result) {
                let file = fileInput.files[0];
                let formData = new FormData();
                let allowedExtensions = ['pdf', 'jpg', 'jpeg', 'png'];
                let extension = file.name.split('.').pop().toLowerCase();

                if (!allowedExtensions.includes(extension)) {
                    bootbox.alert("Please select a valid image or PDF file.");
                    return;
                }

                formData.append('paper_id', paperId);
                formData.append('assignment_file', file);

                progressContainer.style.display = "block";
                progressBar.style.width = "0%";
                uploadStatus.style.display = "none";

                // Simulated progress bar
                let progress = 0;
                let interval = setInterval(() => {
                    progress += 10;
                    progressBar.style.width = progress + "%";

                    if (progress >= 100) {
                        clearInterval(interval);
                    }
                }, 300);

                // AJAX request to upload file
                $.ajax({
                    url: baseUrl + 'upload/assignment-file',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            uploadStatus.style.display = "block";
                            checkedButton.style.display = "block";
                            fileInput.disabled = true;
                            if (suggestedAnswerBtn) {
                                suggestedAnswerBtn.style.display = "block";
                            }
                            uploadAssignmentStatus();
                        } else {
                            bootbox.alert("Upload failed. Please try again.");
                        }
                    },
                    error: function(xhr, status, error) {
                        bootbox.alert("Upload failed: File size must be under 30MB.");
                    }
                });
            }
        }
    });
}

function uploadAssignmentStatus() {
    $.ajax({
        url: baseUrl + 'fetch-assignment-status',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.length > 0) {
                $.each(response, function(i, v) {
                    let container = $("#assignmentConatianer" + v.paper_id);
                    if (v.assignment_status == 2) {
                        container.html('<div class="col-md-12 text-center"><a href="' + baseUrl + v.assignment_checked_file + '" class="btn btn-success" download><i class="fas fa-download"></i> Download Checked AnswerSheet</a></div>');
                    } else if (v.assignment_status == 1) {
                        container.html('<div class="col-md-12 text-warning font-weight-bold text-center">Assignment Submitted</div>');
                    } else {
                        container.html(`
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="assignmentFile${v.paper_id}" accept="application/pdf,image/*"/>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-info uploadAssignment" data-paper-id="${v.paper_id}" onclick="handleUpload('${v.paper_id}')">
                                    <i class="fas fa-upload"></i>
                                </button>
                            </div>
                        `);
                    }
                });
            } else {
                $(".answerBtnContainerClass").hide();
            }
        }
    });
}

if (pageType === 'paper-list') {
    uploadAssignmentStatus();
    setInterval(uploadAssignmentStatus, 20000);
}

    </script>
   
<?= $this->endSection() ?>
