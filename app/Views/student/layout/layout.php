<!DOCTYPE html>
<html lang="en">
<?=view('student/includes/header')?>
<body>
	<div id="overlay">
      <div class="cv-spinner">
        <span class="spinner"></span>
      </div>
    </div>
    <?=view('student/includes/header-section')?>
    <?= $this->renderSection('content') ?>
    <?=view('student/includes/script')?>
    <?=view('student/includes/footer')?>
    <?= $this->renderSection('jsContent') ?>
</body>
</html>