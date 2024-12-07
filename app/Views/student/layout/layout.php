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


<script>
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker
      .register("/service-worker.js")
      .then(() => console.log("Service Worker Registered"))
      .catch((error) => console.error("Service Worker Registration Failed:", error));
  }
</script>
	
</body>
</html>
