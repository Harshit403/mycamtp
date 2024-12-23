<?= $this->extend('student/layout/dashboard_layout') ?>
<?=$this->section('title')?>
    Student Dashboard
<?=$this->endSection()?>
<?= $this->section('meta_description') ?>
<!-- enter your meta description -->
<?=$this->endSection()?>
<?= $this->section('meta_keywords') ?>
<!-- enter your meta keywords widthout tag -->
<?=$this->endSection()?>
<?=$this->section('content')?>
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
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
      gap: 10px;
      padding: 15px;
    }
    .pd-menu-item {
      text-align: center;
      padding: 15px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
    .pd-switch-content-button {
      margin-top: 10px;
      padding: 10px 20px;
      background: #fff;
      color: #e63e58;
      border: 2px solid #e63e58;
      border-radius: 25px;
      cursor: pointer;
      font-size: 14px;
      text-transform: uppercase;
      font-weight: bold;
      display: inline-block;
    }
    .pd-social-media-card {
      margin: 15px auto;
      max-width: 90%;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 15px;
    }
    .pd-social-media {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .pd-social-media a {
      text-decoration: none;
      color: #e63e58;
      font-size: 24px;
    }
    .pd-courses-section {
      padding: 15px;
    }
    .pd-courses-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    .pd-courses-header h2 {
      margin: 0;
      font-size: 18px;
    }
    .pd-courses {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 10px;
    }
    .pd-course-card {
      background: white;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .pd-course-card img {
      max-width: 40px;
      margin-bottom: 10px;
    }
    .pd-course-card h3 {
      margin: 0;
      font-size: 14px;
    }
    .pd-course-card p {
      margin: 0;
      font-size: 12px;
      color: #666;
    }
    .pd-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: white;
      display: flex;
      justify-content: space-around;
      padding: 10px 0;
      border-top: 1px solid #ccc;
    }
    .pd-footer-item {
      text-align: center;
    }
    .pd-footer-item i {
      font-size: 20px;
      color: #666;
    }
    .pd-footer-item p {
      margin: 0;
      font-size: 12px;
      color: #666;
    }
    .pd-footer-item.active i, .pd-footer-item.active p {
      color: #e63e58;
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
  </style>
</head>
<body style="margin-top: 6rem;">
<div class="pd-header">
    <?php
        date_default_timezone_set('Asia/Kolkata'); // Set your timezone here

        $studentData = (session()->get('studentDetails') !== null) ? session()->get('studentDetails') : '';
        $hour = date('H'); // Get the current hour in 24-hour format

        if ($hour < 12) {
            $greeting = 'morning';
        } elseif ($hour < 18) {
            $greeting = 'afternoon';
        } else {
            $greeting = 'evening';
        }
    ?>
    <h1>Good <?= $greeting ?>, <?= $studentData['student_name'] ?? 'Guest' ?></h1>
</div>

  <div class="pd-countdown-card">
   <?php
        $date1=date_create(EXAM_DATE);
        $date2=date_create(date('Y-m-d'));
        $diff=date_diff($date1,$date2);
        $daysLeft = $diff->days;
    ?>
    <button><?=$daysLeft?> days remaining for Exam</button>
  </div>

  <div class="pd-social-media-card">
    <div class="pd-social-media">
      <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://telegram.me/csmission" target="_blank"><i class="fab fa-telegram"></i></a>
      <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>
  </div>

  <div class="pd-menu">
    <a href="<?=base_url()?>my-resources/subject" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-pencil" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Test Paper</p>
    </div>
    </a>
    <a href="<?=base_url()?>my-resources/notes/subject-list" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-book-open" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Notes</p>
    </div>
    </a>
    <a href="<?=base_url()?>my-resources/amendment/subject-list" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fas fa-book" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Amendments</p>
    </div>
    </a>
    <a href="<?=base_url()?>my-resources/qbank/subject-list" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-book-open" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Que. Bank</p>
    </div>
    </a>
    <a href="<?=base_url()?>#category-section" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-cart-shopping" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Buy Now</p>
    </div>
    </a>
    <a href="#" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fas fa-user-tie" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Mentorship</p>
    </div>
    </a>
  </div>

 <div class="unique-footer" style="margin-top: 5rem;">
    <a href="<?=base_url()?>dashboard" class="unique-footer-item active" style="text-decoration: none;">
      <i class="fas fa-home unique-footer-item-icon"></i>
      <p class="unique-footer-item-text">Home</p>
    </a>
    <a href="<?=base_url()?>profile" class="unique-footer-item" style="text-decoration: none;">
      <i class="fas fa-user unique-footer-item-icon"></i>
      <p class="unique-footer-item-text">Profile</p>
    </a>
    <a href="<?=base_url()?>invoice" class="unique-footer-item" style="text-decoration: none;">
      <i class="fas fa-file-invoice unique-footer-item-icon"></i>
      <p class="unique-footer-item-text">Invoice</p>
    </a>
    <a href="<?=base_url()?>logout" class="unique-footer-item" style="text-decoration: none;">
      <i class="fas fa-sign-out unique-footer-item-icon"></i>
      <p class="unique-footer-item-text">Logout</p>
    </a>
 </div>

</body>
<?=$this->endSection()?>
<?=$this->section('jsContent')?>
<?=$this->endSection()?>
