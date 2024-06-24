<!DOCTYPE html>
<html lang="en">
<?=view('student/includes/header')?>
<body>
    <?=view('student/includes/header-section')?>
    <?= $this->renderSection('content') ?>
    <?=view('student/includes/script')?>
    <?=view('student/includes/footer')?>
    <?= $this->renderSection('jsContent') ?>
</body>
</html>