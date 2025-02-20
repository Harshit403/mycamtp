<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
Paper List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?= $this->endSection() ?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<style>
    /* General Styles */

    /* Subject Container */
    .subject-container {
        background-color: white;
        padding: 15px;
        width: 90%;
        max-width: 400px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid #e63e58;
        margin-bottom: 20px;
        font-size: 14px;
        text-align: center;
    }

    /* Headings */
    h2 {
        color: #e63e58;
        font-size: 18px;
        margin: 5px 0;
    }

    p {
        font-size: 12px;
        margin: 5px 0;
        color: #555;
    }

    /* Button Group for Downloads */
    .btn-group {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
    }

    .btn-group .download-btn {
        width: 48%;
        font-size: 12px;
        padding: 8px;
    }

    /* Upload Section */
    .upload-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 5px;
        margin: 12px 0;
    }

    .upload-section input {
        flex: 2;
        max-width: 65%;
        padding: 4px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 11px;
    }

    .upload-btn {
        flex: 1;
        font-size: 12px;
        padding: 8px;
        white-space: nowrap;
    }

    /* Progress Bar */
    .progress-container {
        width: 100%;
        background-color: #ddd;
        border-radius: 5px;
        margin-top: 10px;
        display: none;
    }

    .progress-bar {
        width: 0%;
        height: 8px;
        background-color: #e63e58;
        border-radius: 5px;
    }

    .upload-status {
        font-size: 12px;
        color: green;
        display: none;
        margin-top: 5px;
    }

    /* Buttons */
    .download-btn,
    .upload-btn {
        background-color: #e63e58;
        color: white;
        border: none;
        padding: 8px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 12px;
        transition: 0.3s;
    }

    .download-btn:hover,
    .upload-btn:hover {
        background-color: #c93048;
    }

    /* Hide Download Checked Answersheet Button */
    .checked-answersheet {
        display: none;
        margin-top: 10px;
    }

    /* Responsive Design */
    @media (max-width: 400px) {
        .btn-group {
            flex-direction: column;
        }

        .btn-group .download-btn {
            width: 100%;
            margin-bottom: 5px;
        }

        .upload-section {
            flex-direction: row;
            align-items: center;
        }

        .upload-section input {
            flex: 2;
            max-width: 65%;
        }

        .upload-btn {
            flex: 1;
        }
    }
</style>
<?php

?>
<section class="container mb-5 section mainContainer">
    <div class="text-center">
        <h2>Paper List</h2>
    </div>
    <div class="row my-4 paperContainer is-flex is-justify-content-center">
        <?php if (!empty($getPaperDetails)): ?>
            <?php foreach ($getPaperDetails as $paperRow) {
                $paper_name = str_replace('', '_', trim($paperRow['paper_name']));
            ?>
                <div class="subject-container">
                    <h2><?= $paperRow['paper_name'] ?></h2>
                    <p><strong>Duration:</strong> 30 - 180 Minutes</p>
                    <p><strong>Marks:</strong> 20 - 100</p>
                    <div class="btn-group">
                        <a href="<?= base_url() . $paperRow['question_paper_upload'] ?>" class="download-btn" download>Download Question Paper</a>
                        <div id="answerBtnContainer<?= $paperRow['paper_id'] ?>" class="answerBtnContainerClass" style="display:<?= $item_type != 'free' ? 'none' : '' ?>;">
                            <a href="<?= base_url() . $paperRow['answer_paper_upload'] ?>" class="download-btn" download="<?= $paper_name ?>answer_paper.pdf">Download Suggested Answer</a>
                        </div>
                    </div>
                    <?php if ($item_type != 'free'): ?>
                        <div class="upload-section">
                            <input type="file" id="answersheet-<?= $paperRow['paper_id'] ?>" accept="application/pdf,image/*">
                            <button class="upload-btn" onclick="handleUpload('<?= $paperRow['paper_id'] ?>')">Upload</button>
                        </div>
                        <div class="progress-container" id="progress-<?= $paperRow['paper_id'] ?>">
                            <div class="progress-bar" id="progress-bar-<?= $paperRow['paper_id'] ?>"></div>
                        </div>
                        <p class="upload-status" id="upload-status-<?= $paperRow['paper_id'] ?>" style="display:none;">Successfully Uploaded!</p>
                        <a href="#" class="download-btn checked-answersheet" id="checked-<?= $paperRow['paper_id'] ?>" style="display:none;" download>Download Checked Answersheet</a>

                    <?php endif; ?>
                </div>
            <?php } ?>
        <?php else: ?>
            <p>No Paper Available</p>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
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

                    let progress = 0;
                    let interval = setInterval(() => {
                        progress += 10;
                        progressBar.style.width = progress + "%";

                        if (progress >= 100) {
                            clearInterval(interval);
                        }
                    }, 300);

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
                        let checkedButton = document.getElementById("checked-" + v.paper_id);
                        let fileInput = document.getElementById("answersheet-" + v.paper_id);
                        let answerBtnContainer = document.getElementById("answerBtnContainer" + v.paper_id);


                        if (v.assignment_status >= 1 && answerBtnContainer) {
                            answerBtnContainer.style.display = "block";
                        } else if (answerBtnContainer) {
                            answerBtnContainer.style.display = "none";
                        }


                        if (v.assignment_status == 2 && checkedButton) {
                            checkedButton.style.display = "block";

                            let fileUrl = baseUrl + v.assignment_checked_file;
                            let fileExtension = fileUrl.split('.').pop().toLowerCase();

                            checkedButton.setAttribute("href", fileUrl);

                            if (fileExtension === "pdf") {
                                checkedButton.setAttribute("download", "Checked_AnswerSheet.pdf");
                            } else if (["jpg", "jpeg", "png"].includes(fileExtension)) {
                                checkedButton.removeAttribute("download");
                                checkedButton.setAttribute("target", "_blank");
                            }
                        } else if (checkedButton) {
                            checkedButton.style.display = "none";
                        }


                        if (v.assignment_status > 0 && fileInput) {
                            fileInput.disabled = true;
                            let uploadBtn = fileInput.nextElementSibling;
                            if (uploadBtn && uploadBtn.classList.contains("upload-btn")) {
                                uploadBtn.disabled = true;
                                uploadBtn.style.opacity = "0.6";
                                uploadBtn.style.cursor = "not-allowed";
                            }
                        }

                    });
                }
            }
        });
    }

    // Page load hone pe function run karo
    uploadAssignmentStatus();
    setInterval(uploadAssignmentStatus, 20000);
</script>

<?= $this->endSection() ?>
