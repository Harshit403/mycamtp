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
      transition: transform 0.3s ease;
    }
    .pd-menu-item:hover {
      transform: translateY(-5px);
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
      transition: background 0.3s ease;
    }
    .pd-countdown-card button:hover {
      background: #d6374f;
    }
    .pd-switch-container {
      display: flex;
      align-items: center;
      justify-content: flex-end; 
      margin: 20px 0;
      font-size: 12px; 
    }
    .toggle-switch {
      position: relative;
      display: inline-block;
      width: 40px;
      height: 20px;
      margin-right: 10px;
    }

    .toggle-switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      transition: 0.4s;
      border-radius: 34px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      transition: 0.4s;
      border-radius: 50%;
    }

    input:checked + .slider {
      background-color: #e63e58;
    }

    input:checked + .slider:before {
      transform: translateX(26px);
    }

    .toggle-label {
      font-size: 12px;
      color: #333;
      font-weight: bold;
      margin-left: 8px;
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
      transition: color 0.3s ease;
    }
    .pd-social-media a:hover {
      color: #d6374f;
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
      transition: transform 0.3s ease;
    }
    .pd-course-card:hover {
      transform: translateY(-5px);
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
      transition: color 0.3s ease;
    }
    .unique-footer-item-text {
      margin: 0;
      font-size: 12px;
      color: #666;
      transition: color 0.3s ease;
    }
    .unique-footer-item.active .unique-footer-item-icon, 
    .unique-footer-item.active .unique-footer-item-text {
      color: #e63e58;
    }

    /* Modal styling */
    #logoutModal {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
      z-index: 1000;
    }

    #logoutModal.show {
      opacity: 1;
      visibility: visible;
    }

    .modal-content {
      background: white;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      transform: scale(0.8);
      transition: transform 0.3s ease;
      width: 90%;
      max-width: 400px;
    }

    #logoutModal.show .modal-content {
      transform: scale(1);
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
      transition: background 0.3s ease;
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

    @media screen and (min-width: 768px) {
      /* Desktop adjustments */

      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
      }

      .pd-header {
        text-align: left;
        padding: 20px 40px;
      }

      .pd-header h1 {
        font-size: 28px;
      }

      .pd-menu {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 items per row for desktops */
        gap: 20px;
        padding: 20px 40px;
      }

      .pd-menu-item {
        padding: 20px;
        font-size: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }

      .pd-countdown-card,
      .pd-social-media-card {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }

      .pd-courses-section {
        padding: 20px 40px;
      }

      .pd-courses {
        grid-template-columns: repeat(3, 1fr); /* 3 items per row for desktops */
        gap: 20px;
      }

      .pd-course-card {
        font-size: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      }

      .pd-footer {
        position: static;
        padding: 20px 40px;
        border-top: none;
        justify-content: flex-start;
        gap: 20px;
      }

      .pd-footer-item {
        text-align: left;
        font-size: 14px;
      }

      /* Modal scaling adjustment for larger screens */
      #logoutModal .modal-content {
        max-width: 400px;
      }
    }
  </style>
</head>
<body style="margin-top: 6rem;">

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

<!-- Toggle Switch for Free Content -->
<div class="pd-switch-container">
  <label class="toggle-switch">
    <input type="checkbox" id="contentToggle">
    <span class="slider"></span>
  </label>
  <span class="toggle-label" id="toggleLabel">Switch to Free Content</span>
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
  <a href="<?=base_url()?>my-resources/subject" class="menu-link" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-pencil" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Test Paper</p>
    </div>
  </a>
  <a href="<?=base_url()?>my-resources/notes/subject-list" class="menu-link" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-book-open" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Notes</p>
    </div>
  </a>
  <a href="<?=base_url()?>my-resources/amendment/subject-list" class="menu-link" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fas fa-book" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Amendments</p>
    </div>
  </a>
  <a href="<?=base_url()?>my-resources/qbank/subject-list" class="menu-link" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-book-open" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Que. Bank</p>
    </div>
  </a>
  <a href="<?=base_url()?>#category-section" class="menu-link" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-cart-shopping" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Buy Now</p>
    </div>
  </a>
  <a href="#" class="menu-link" style="text-decoration: none;">
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
    <a href="#" id="logoutButton" class="unique-footer-item" style="text-decoration: none;">
      <i class="fas fa-sign-out unique-footer-item-icon"></i>
      <p class="unique-footer-item-text">Logout</p>
    </a>
</div>

</body>
<?=$this->endSection()?>
<?=$this->section('jsContent')?>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.getElementById('logoutButton');
    const modal = document.getElementById('logoutModal');
    const cancelLogout = document.getElementById('cancelLogout');
    const confirmLogout = document.getElementById('confirmLogout');

    // Show modal with animation
    logoutButton.addEventListener('click', function (e) {
      e.preventDefault();
      modal.classList.add('show');
    });

    // Hide modal with animation
    cancelLogout.addEventListener('click', function () {
      modal.classList.remove('show');
    });

    confirmLogout.addEventListener('click', function () {
      window.location.href = "<?= base_url() ?>logout";
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', function (e) {
      if (e.target === modal) {
        modal.classList.remove('show');
      }
    });

    // Toggle Switch Functionality
    const toggle = document.getElementById("contentToggle");
    const toggleLabel = document.getElementById("toggleLabel");
    const menuLinks = document.querySelectorAll(".pd-menu a.menu-link");

    // Function to update URLs based on toggle state
    function updateMenuLinks(isFree) {
      menuLinks.forEach(link => {
        let href = link.getAttribute("href");
        // Remove any existing '/free' suffix
        href = href.replace(/\/free$/, "");
        if (isFree) {
          // Append '/free' if not already present
          if (!href.endsWith("/free")) {
            href += "/free";
          }
        }
        link.setAttribute("href", href);
      });

      // Update toggle label text
      toggleLabel.textContent = isFree ? "Free Content Enabled" : "Switch to Free Content";
    }

    // Event listener for toggle switch
    toggle.addEventListener("change", function () {
      const isFree = this.checked;
      updateMenuLinks(isFree);
      // Optionally, you can store the toggle state in localStorage to remember user preference
      localStorage.setItem("freeContent", isFree);
    });

    // Initialize toggle state based on localStorage or default
    (function initializeToggle() {
      const isFree = localStorage.getItem("freeContent") === "true";
      toggle.checked = isFree;
      updateMenuLinks(isFree);
    })();
  });
</script>
<?=$this->endSection()?>
