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
