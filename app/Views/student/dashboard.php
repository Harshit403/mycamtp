<?= $this->extend('student/layout/dashboard_layout') ?>
<?= $this->section('title') ?>Student Dashboard<?= $this->endSection() ?>
<?= $this->section('meta_description') ?><!-- Enter your meta description --><?= $this->endSection() ?>
<?= $this->section('meta_keywords') ?><!-- Enter your meta keywords --><?= $this->endSection() ?>
<?= $this->section('content') ?>

<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }

  .pd-header {
    background-color: #e63e58;
    color: white;
    padding: 15px;
    text-align: center;
  }

  .pd-header h1 {
    margin: 0;
    font-size: 20px;
  }

  .pd-menu {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 15px;
    justify-content: center;
  }

  .pd-menu-item {
    text-align: center;
    padding: 15px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    flex: 1 1 calc(25% - 20px);
    max-width: 150px;
  }

  .pd-menu-item p {
    margin: 0;
    font-size: 14px;
    color: #333;
  }

  .pd-countdown-card {
    margin: 15px auto;
    max-width: 90%;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
  }

  .pd-countdown-card button {
    width: 100%;
    padding: 10px;
    border: none;
    background: #e63e58;
    color: white;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
  }

  .unique-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: white;
    display: flex;
    justify-content: space-around;
    padding: 10px 0;
    border-top: 1px solid #ccc;
  }

  .unique-footer-item {
    text-align: center;
  }

  .unique-footer-item-icon {
    font-size: 20px;
    color: #666;
  }

  .unique-footer-item-text {
    margin: 0;
    font-size: 12px;
    color: #666;
  }

  .unique-footer-item.active .unique-footer-item-icon,
  .unique-footer-item.active .unique-footer-item-text {
    color: #e63e58;
  }

  #logoutModal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }

  .modal-content {
    background: white;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  }

  .modal-content h2 {
    margin: 0 0 10px;
    font-size: 20px;
    color: #333;
  }

  .modal-content p {
    margin: 0 0 20px;
    color: #555;
  }

  .modal-buttons {
    display: flex;
    justify-content: center;
    gap: 10px;
  }

  .modal-cancel,
  .modal-confirm {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
  }

  .modal-cancel {
    background: #ccc;
    color: #333;
  }

  .modal-confirm {
    background: #e63e58;
    color: white;
  }

  .modal-cancel:hover {
    background: #bbb;
  }

  .modal-confirm:hover {
    background: #d6374f;
  }
</style>

<div class="pd-header">
  <?php
  date_default_timezone_set('Asia/Kolkata');
  $studentData = session()->get('studentDetails') ?? '';
  $hour = date('H');
  $greeting = ($hour < 12) ? 'morning' : (($hour < 18) ? 'afternoon' : 'evening');
  ?>
  <h1>Good <?= $greeting ?>, <?= $studentData['student_name'] ?? 'Guest' ?></h1>
</div>

<div class="pd-countdown-card">
  <?php
  $date1 = date_create(EXAM_DATE);
  $date2 = date_create(date('Y-m-d'));
  $diff = date_diff($date1, $date2);
  $daysLeft = $diff->days;
  ?>
  <button><?= $daysLeft ?> days remaining for Exam</button>
</div>

<div class="pd-menu">
  <div class="pd-menu-item">
    <p>Menu Item 1</p>
  </div>
  <div class="pd-menu-item">
    <p>Menu Item 2</p>
  </div>
  <div class="pd-menu-item">
    <p>Menu Item 3</p>
  </div>
</div>

<div class="unique-footer">
  <a href="<?= base_url() ?>dashboard" class="unique-footer-item active">
    <i class="fas fa-home unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Home</p>
  </a>
  <a href="<?= base_url() ?>profile" class="unique-footer-item">
    <i class="fas fa-user unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Profile</p>
  </a>
  <a href="<?= base_url() ?>invoice" class="unique-footer-item">
    <i class="fas fa-file-invoice unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Invoice</p>
  </a>
  <a href="#" id="logoutButton" class="unique-footer-item">
    <i class="fas fa-sign-out unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Logout</p>
  </a>
</div>

<div id="logoutModal">
  <div class="modal-content">
    <h2>Confirm Logout</h2>
    <p>Are you sure you want to logout?</p>
    <div class="modal-buttons">
      <button id="cancelLogout" class="modal-cancel">Cancel</button>
      <button id="confirmLogout" class="modal-confirm">Logout</button>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.getElementById('logoutButton');
    const modal = document.getElementById('logoutModal');
    const cancelLogout = document.getElementById('cancelLogout');
    const confirmLogout = document.getElementById('confirmLogout');

    logoutButton.addEventListener('click', function (e) {
      e.preventDefault();
      modal.style.display = 'flex';
    });

    cancelLogout.addEventListener('click', function () {
      modal.style.display = 'none';
    });

    confirmLogout.addEventListener('click', function () {
      window.location.href = "<?= base_url() ?>logout";
    });

    window.addEventListener('click', function (e) {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  });
</script>
<?= $this->endSection() ?>
