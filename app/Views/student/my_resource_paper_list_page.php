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
        .download-btn, .upload-btn {
            background-color: #e63e58;
            color: white;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 12px;
            transition: 0.3s;
        }

        .download-btn:hover, .upload-btn:hover {
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
                            <a href="<?=base_url().$paperRow['question_paper_upload']?>" class="download-btn" download="<?= str_replace(' ', '_', trim($paperRow['paper_name'])) ?>_question_paper.pdf"><i class="bi bi-arrow-down-circle"></i> Download Question Paper</a>
                            <div id="answerBtnContainer<?= $paperRow['paper_id'] ?>" class="answerBtnContainerClass" style="display:<?= $item_type!='free' ? 'none' : '' ?>">
                                <a href="<?=base_url().$paperRow['answer_paper_upload']?>" class="download-btn" download="<?= str_replace(' ', '_', trim($paperRow['paper_name'])) ?>_answer_paper.pdf"><i class="bi bi-arrow-down-circle"></i> Download Suggested Answer</a>
                            </div>
                        </div>
                        <?php if ($item_type!='free'): ?>
                            <div class="upload-section" id="assignmentConatianer<?= $paperRow['paper_id'] ?>">
                                <input type="file" class="form-control" id="assignmentFile<?= $paperRow['paper_id'] ?>" accept="application/pdf,image/*"/>
                                <button class="upload-btn uploadAssignment" data-paper-id="<?= $paperRow['paper_id'] ?>"><i class="bi bi-file-arrow-up"></i> Upload</button>
                            </div>
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
