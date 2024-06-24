<!DOCTYPE html>
<html>

<head>
    <title>
        <?= $this->renderSection('title') ?>
    </title>
    <?=view('admin/includes/header.php')?>
</head>

<body>
    <div id="overlay">
      <div class="cv-spinner">
        <span class="spinner"></span>
      </div>
    </div>
    <!-- Layout container -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?=view('admin/includes/sidebar.php')?>
            <div class="layout-page">
                <!-- Navbar -->
                <?=view('admin/includes/navbar.php')?>
                <!-- / Navbar -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?=view('admin/includes/footer.php')?>
    <?= $this->renderSection('jsContent') ?>
</body>

</html>