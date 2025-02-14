<?= $this->extend('student/layout/layout') ?>
<?= $this->section('title') ?>
    Paper List
<?= $this->endSection() ?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?= $this->endSection() ?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords without tag -->
<?= $this->endSection() ?>
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
<?= $this->section('jsContent') ?>
    <script>
        function handleUpload(paperId) {
            let fileInput = document.getElementById("answersheet-" + paperId);
            let progressBar = document.getElementById("progress-bar-" + paperId);
            let progressContainer = document.getElementById("progress-" + paperId);
            let uploadStatus = document.getElementById("upload-status-" + paperId);
            let checkedButton = document.getElementById("checked-" + paperId);

            if (!fileInput.files.length) {
                alert("Please select a file before uploading.");
                return;
            }

            let confirmUpload = confirm("Are you sure you want to upload this? You’ll get only one chance.");
            if (!confirmUpload) return;

            progressContainer.style.display = "block";
            uploadStatus.style.display = "none";
            progressBar.style.width = "0%";

            let progress = 0;
            let interval = setInterval(() => {
                progress += 10;
                progressBar.style.width = progress + "%";
                
                if (progress >= 100) {
                    clearInterval(interval);
                    uploadStatus.style.display = "block";
                    checkedButton.style.display = "block";
                    fileInput.disabled = true;
                }
            }, 300);
        }
    </script>
        <script src="<?=base_url()?>assets/student/js/view.js?v=1.0.3"></script>
<?= $this->endSection() ?>
