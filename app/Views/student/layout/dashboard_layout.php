<!DOCTYPE html>
<html lang="en">
<?=view('student/includes/header')?>

<body>
    <?=view('student/includes/script')?>
    <?=view('student/includes/header-section')?>
    <?= $this->renderSection('content') ?>
    <?= $this->renderSection('jsContent') ?>
</body>

</html>