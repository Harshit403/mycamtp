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
    body {

        flex-direction: column;
        align-items: center;
    }

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
    <div class="row my-4 paperContainer">
        <?php if (!empty($getPaperDetails)): ?>
            <?php foreach ($getPaperDetails as $paperRow){
              echo '<pre>';  print_r($paperRow);
                $paper_name = str_replace('','_',trim($paperRow['paper_name']));
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
                        <button class="download-btn checked-answersheet" id="checked-<?= $paperRow['paper_id'] ?>" style="display:none;">Download Checked Answersheet</button>
                    <?php endif; ?>
                </div>
            <?php } ?>
        <?php else: ?>
            <p>No Paper Available</p>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('jsContent')?>
    <script>
        var pageType = 'paper-list';
    </script>
    <script> 

$(document).ready(function() {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    $(".uploadAssignment").on('click', function() {
        var paper_id = $(this).data('paper-id');
        var assignmentFilePath = $("#assignmentFile" + paper_id + "").val();
        if (assignmentFilePath == '') {
            bootbox.alert("Please select your assginment file");
            return false;
        }
        let dialog = bootbox.dialog({
            message: 'Are you sure you want to submit assignment',
            size: 'medium',
            onEscape: true,
            backdrop: true,
            buttons: {
                no: {
                    label: 'No',
                    className: 'btn-secondary',
                    callback: function() {

                    }
                },
                yes: {
                    label: 'Yes',
                    className: 'btn-success',
                    callback: function() {
                        uploadAssignmentFile(paper_id);
                    }
                },
            }
        })
    });

    function uploadAssignmentFile(paper_id = '') {
        var formdata = new FormData();
        var errors = new Array;
        var assginmentFile = $("#assignmentFile" + paper_id + "").prop('files')[0];
        var extension = assginmentFile['name'].split(".");
        if (jQuery.inArray(extension[1], ['pdf', 'jpg', 'jpeg', 'png']) == -1) {
            errors.push('Please select a image or pdf file to upload');
            return false;
        }
        formdata.append('paper_id', paper_id);
        formdata.append('assignment_file', assginmentFile);
        $.ajax({
            url: baseUrl + 'upload/assignment-file',
            type: 'POST',
            data: formdata,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function() {
                html = '<div class="col-md-12 text-warning font-weight-bold d-flex align-items-center justify-content-center">Upload In Progress <i class="fa-solid fa-spin fa-spinner ml-2"></i></div>';
                $("#assignmentConatianer" + paper_id + "").html(html);
            },
            success: function(response) {
                if (response.success) {
                    $("#assignmentConatianer" + paper_id + "").html('');
                    uploadAssigmentStatus();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                html = '<div class="col-md-12 text-danger font-weight-bold d-flex align-items-center justify-content-center">Upload Process Failed<br>(File size limit exceed) Use max 30mb file <i class="fas fa-times ml-2"></i></div>';
                $("#assignmentConatianer" + paper_id + "").html(html);
            }
        });
    }

    if (pageType != null && pageType == 'paper-list') {
        uploadAssigmentStatus();
        setInterval(function() {
            uploadAssigmentStatus();
        }, 20000);
    }


    function uploadAssigmentStatus() {
        $.ajax({
            url: baseUrl + 'fetch-assignment-status',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.length > 0) {
                    var assignmentStatus = 'Assignment Submitted';
                    var statusColor = 'text-warning';
                    $.each(response, function(i, v) {
                        if (v.assignment_status == 2) {
                            html = '<div class="col-md-12 text-center"><a href="' + baseUrl + v.assignment_checked_file + '" class="btn btn-success" download title="Download Checked AnswerSheet"><i class="fas fa-download"></i> Download</a></div>';
                            $("#answerBtnContainer" + v.paper_id + "").show();
                        } else if (v.assignment_status == 1) {
                            html = '<div class="col-md-12 ' + statusColor + ' font-weight-bold d-flex align-items-center justify-content-center">' + assignmentStatus + '</div>';
                            $("#answerBtnContainer" + v.paper_id + "").show();
                        } else {
                            html = '<div class="col-md-8">' +
                                '<input type="file" class="form-control mr-2" id="assignmentFile' + response.paper_id + '" accept="application/pdf,image/*"/>' +
                                '</div>' +
                                '<div class="col-md-4">' +
                                '<a href="javascript:void(0)" class="btn btn-info uploadAssignment" data-paper-id="' + response.paper_id + '"><i class="fas fa-upload"></i></a></a>' +
                                '</div>';
                        }
                        $("#assignmentConatianer" + v.paper_id + "").html(html);
                    });
                } else {
                    $(".answerBtnContainerClass").hide();
                }
            }
        })
    }

    $(".addNewsLetterBtn").on('click', function() {
        var email = $(".newsLetterForm").val();
        if (!regex.test(email)) {
            bootbox.alert('Please enter a valid mail');
            return false;
        }

        $.ajax({
            url: baseUrl + 'newsletter/add-newsletter',
            type: 'POST',
            data: {
                newsletter_email: email,
            },
            dataType: 'json',
            success: function(res) {
                bootbox.alert({
                    message: res.message,
                    closeButton: false,
                    callback: function() {
                        if (res.success) {}
                    }
                })
            }
        })

    })
})
    </script>
<?= $this->endSection() ?>
