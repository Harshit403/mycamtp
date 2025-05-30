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
    /* Base styles for all devices */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    
    .wrapper {
      padding-bottom: 80px;
    }
    
    .pd-header {
      background-color: #e63e58;
      color: white;
      padding: 15px;
      text-align: center;
      margin-bottom: 20px;
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
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }
    
    .pd-menu-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }
    
    .pd-menu-item p {
      margin: 10px 0 0;
      font-size: 14px;
      color: #333;
      font-weight: 500;
    }
    
    .pd-menu-item i {
      color: #e63e58;
      font-size: 24px;
      margin-bottom: 5px;
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
      justify-content: center;
      margin: 20px 0;
      background: white;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 90%;
      margin-left: auto;
      margin-right: auto;
    }
    
    .toggle-switch {
      position: relative;
      display: inline-block;
      width: 50px;
      height: 24px;
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
      border-radius: 24px;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 18px;
      width: 18px;
      left: 3px;
      bottom: 3px;
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
      font-size: 14px;
      color: #333;
      font-weight: 500;
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
      transition: color 0.3s ease, transform 0.3s ease;
    }
    
    .pd-social-media a:hover {
      color: #d6374f;
      transform: scale(1.1);
    }
    
    .referral-section {
      margin: 15px auto;
      max-width: 90%;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }
    
    .referral-section h3 {
      margin: 0 0 15px;
      color: #333;
      font-size: 18px;
    }
    
    .referral-section h4 {
      margin: 15px 0;
      color: #333;
      font-size: 16px;
    }
    
    .referral-actions {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    
    .referral-actions input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
      text-align: center;
    }
    
    .action-buttons {
      display: flex;
      gap: 10px;
    }
    
    .action-button {
      padding: 10px 15px;
      background: #e63e58;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.3s ease;
      flex: 1;
    }
    
    .action-button:hover {
      background: #d0344c;
    }
    
    .action-button i {
      margin-right: 5px;
    }
    
    .action-button.withdraw {
      width: 100%;
      margin-top: 10px;
    }
    
    .unique-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: white;
      display: flex;
      justify-content: space-around;
      padding: 10px 0;
      border-top: 1px solid #ddd;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      z-index: 100;
    }
    
    .unique-footer-item {
      text-align: center;
      padding: 5px;
      border-radius: 5px;
      transition: background 0.3s ease;
    }
    
    .unique-footer-item:hover {
      background: #f5f5f5;
    }
    
    .unique-footer-item-icon {
      font-size: 20px;
      color: #666;
      transition: color 0.3s ease;
    }
    
    .unique-footer-item-text {
      margin: 3px 0 0;
      font-size: 12px;
      color: #666;
      transition: color 0.3s ease;
    }
    
    .unique-footer-item.active .unique-footer-item-icon, 
    .unique-footer-item.active .unique-footer-item-text {
      color: #e63e58;
    }
    
    /* Modal styles */
    .modal {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }
    
    .modal-content {
      background: #fff;
      width: 90%;
      max-width: 500px;
      border-radius: 10px;
      padding: 25px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
      position: relative;
    }
    
    .close-modal {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 30px;
      color: #333;
      cursor: pointer;
      background: none;
      border: none;
      transition: color 0.3s ease;
    }
    
    .close-modal:hover {
      color: #e63e58;
    }
    
    .modal-header {
      font-size: 20px;
      font-weight: bold;
      color: #e63e58;
      text-align: center;
      margin-bottom: 20px;
    }
    
    select {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }
    
    .btn-submit {
      background-color: #e63e58;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      transition: background 0.3s ease;
    }
    
    .btn-submit:hover {
      background-color: #d0344c;
    }
    
    /* Logout modal */
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
    
    .logout-modal-content {
      background: white;
      border-radius: 10px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
      transform: scale(0.9);
      transition: transform 0.3s ease;
      width: 90%;
      max-width: 400px;
    }
    
    #logoutModal.show .logout-modal-content {
      transform: scale(1);
    }
    
    .logout-modal-content h2 {
      margin: 0 0 15px;
      font-size: 20px;
      color: #333;
    }
    
    .logout-modal-content p {
      margin: 0 0 25px;
      color: #555;
      font-size: 15px;
    }
    
    .logout-modal-buttons {
      display: flex;
      justify-content: center;
      gap: 15px;
    }
    
    .logout-modal-cancel,
    .logout-modal-confirm {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
      transition: background 0.3s ease;
      flex: 1;
    }
    
    .logout-modal-cancel {
      background: #f0f0f0;
      color: #333;
    }
    
    .logout-modal-confirm {
      background: #e63e58;
      color: white;
    }
    
    .logout-modal-cancel:hover {
      background: #e0e0e0;
    }
    
    .logout-modal-confirm:hover {
      background: #d6374f;
    }
    
    /* Mentorship modal */
    .mentorship-modal {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      display: flex;
      justify-content: center;
      align-items: center;
      visibility: hidden;
      opacity: 0;
      transition: visibility 0.3s ease, opacity 0.3s ease;
      z-index: 1000;
    }
    
    .mentorship-modal.show {
      visibility: visible;
      opacity: 1;
    }
    
    .mentorship-modal-content {
      background: white;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
      transform: scale(0.9);
      transition: transform 0.3s ease;
      position: relative;
    }
    
    .mentorship-modal.show .mentorship-modal-content {
      transform: scale(1);
    }
    
    .mentorship-lock-content, 
    .mentorship-whatsapp-content {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .mentorship-lock-icon, 
    .mentorship-whatsapp-icon {
      font-size: 50px;
      margin-bottom: 15px;
      color: #e63e58;
    }
    
    .mentorship-modal-content h2 {
      font-size: 20px;
      margin: 10px 0;
      color: #333;
    }
    
    .mentorship-modal-content p {
      color: #555;
      margin-bottom: 20px;
      font-size: 15px;
    }
    
    .mentorship-modal-button {
      padding: 12px 25px;
      background: #e63e58;
      color: white;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    
    .mentorship-modal-button:hover {
      background: #d6374f;
    }
    
    .mentorship-close-button {
      position: absolute;
      top: 15px;
      right: 15px;
      font-size: 24px;
      color: #555;
      background: none;
      border: none;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    
    .mentorship-close-button:hover {
      color: #e63e58;
    }
    
    /* Withdraw popup */
    #withdrawPopup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 90%;
      max-width: 400px;
      background: white;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      padding: 25px;
      z-index: 1001;
    }
    
    #withdrawPopup h3 {
      margin-top: 0;
      margin-bottom: 20px;
      font-size: 18px;
      color: #e63e58;
      text-align: center;
    }
    
    #withdrawPopup input {
      width: 100%;
      margin-bottom: 15px;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }
    
    #withdrawPopup button {
      padding: 12px;
      margin: 5px 0;
      background: #e63e58;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.3s ease;
    }
    
    #withdrawPopup button:hover {
      background: #d0344c;
    }
    
    #withdrawPopup button.cancel {
      background: #f0f0f0;
      color: #333;
    }
    
    #withdrawPopup button.cancel:hover {
      background: #e0e0e0;
    }
    
    #withdrawPopup .button-group {
      display: flex;
      gap: 10px;
    }
    
    #popupOverlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }
    
    /* Share popup */
    #sharePopup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 25px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
      z-index: 1001;
      width: 90%;
      max-width: 350px;
      text-align: center;
    }
    
    #sharePopup h3 {
      margin-bottom: 20px;
      font-size: 18px;
      color: #333;
    }
    
    .share-icons {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 20px;
    }
    
    .share-icons a {
      color: inherit;
      font-size: 28px;
      transition: transform 0.3s ease;
    }
    
    .share-icons a:hover {
      transform: scale(1.1);
    }
    
    #closePopup {
      padding: 10px 20px;
      border: none;
      background: #e63e58;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      transition: background 0.3s ease;
    }
    
    #closePopup:hover {
      background: #d0344c;
    }
    
    /* Desktop styles */
    @media (min-width: 768px) {
      body {
        padding-bottom: 0;
      }
      
      .wrapper {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        display: grid;
        grid-template-columns: 1fr 300px;
        gap: 20px;
        align-items: start;
      }
      
      .main-content {
        grid-column: 1;
      }
      
      .sidebar {
        grid-column: 2;
        position: sticky;
        top: 20px;
      }
      
      .pd-header {
        border-radius: 10px;
        margin-bottom: 30px;
      }
      
      .pd-menu {
        grid-template-columns: repeat(3, 1fr);
      }
      
      .pd-countdown-card,
      .pd-social-media-card,
      .pd-switch-container,
      .referral-section {
        max-width: 100%;
        margin-left: 0;
        margin-right: 0;
      }
      
      .unique-footer {
        display: none;
      }
      
      /* Sidebar navigation for desktop */
      .desktop-sidebar {
        display: flex;
        flex-direction: column;
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 15px 0;
      }
      
      .desktop-sidebar-item {
        padding: 15px 20px;
        display: flex;
        align-items: center;
        color: #666;
        text-decoration: none;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
      }
      
      .desktop-sidebar-item:hover {
        background: #f9f9f9;
        color: #e63e58;
      }
      
      .desktop-sidebar-item.active {
        color: #e63e58;
        border-left: 3px solid #e63e58;
        background: #fdf2f4;
      }
      
      .desktop-sidebar-item i {
        margin-right: 10px;
        font-size: 18px;
        width: 20px;
        text-align: center;
      }
      
      .desktop-sidebar-item-text {
        font-size: 14px;
      }
    }
    
    @media (min-width: 992px) {
      .pd-menu {
        grid-template-columns: repeat(3, 1fr);
      }
      
      .wrapper {
        grid-template-columns: 1fr 350px;
      }
    }
</style>

<body style="margin-top: 6rem;">
<div class="wrapper">
  <div class="main-content">
    <div class="pd-header">
      <?php
        date_default_timezone_set('Asia/Kolkata');
        $studentData = (session()->get('studentDetails') !== null) ? session()->get('studentDetails') : '';
        $hour = date('H');
        
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
        if ($date2 > $date1) {
          $daysLeft = "Exam has passed!";
        }
      ?>
      <button><?= ($daysLeft === "Exam has passed!") ? $daysLeft : "⏳ $daysLeft Days Left For Exam" ?></button>
    </div>

    <div class="pd-menu">
      <a href="<?=base_url()?>my-resources/subject" class="menu-link" style="text-decoration: none;">
        <div class="pd-menu-item">
          <i class="fa-solid fa-pencil"></i>
          <p>Test Paper</p>
        </div>
      </a>
      <a href="<?=base_url()?>my-resources/notes/subject-list" class="menu-link" style="text-decoration: none;">
        <div class="pd-menu-item">
          <i class="fa-solid fa-book-open"></i>
          <p>Notes</p>
        </div>
      </a>
      <a href="<?=base_url()?>my-resources/amendment/subject-list" id="amendmentMenu" class="menu-link" style="text-decoration: none;">
        <div class="pd-menu-item">
          <i class="fas fa-book"></i>
          <p>Amendments</p>
        </div>
      </a>
      <a href="<?=base_url()?>my-resources/qbank/subject-list" id="qbankMenu" class="menu-link" style="text-decoration: none;">
        <div class="pd-menu-item">
          <i class="fa-solid fa-book-open"></i>
          <p>Que. Bank</p>
        </div>
      </a>
      <a href="javascript:void(0)" class="menu-link" onclick="openModal()" style="text-decoration: none;">
        <div class="pd-menu-item">
          <i class="fa-solid fa-cart-shopping"></i>
          <p>Buy Now</p>
        </div>
      </a>
      <a href="#" id="mentorshipMenu" class="menu-link" style="text-decoration: none;">
        <div class="pd-menu-item">
          <i class="fas fa-user-tie"></i>
          <p>Mentorship</p>
        </div>
      </a>
    </div>
  </div>
  
  <!-- Sidebar for desktop -->
  <div class="sidebar">
    <div class="pd-social-media-card">
      <div class="pd-social-media">
        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://telegram.me/csmission" target="_blank"><i class="fab fa-telegram"></i></a>
        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    
    <div class="referral-section">
      <h3>Your Referral Link</h3>
      <div class="referral-actions">
        <input type="text" id="referralLink" value="<?= base_url() ?>auth?auth=register&ref=<?= $studentData['id'] ?>" readonly>
        <div class="action-buttons">
          <button onclick="copyReferralLink()" class="action-button">
            <i class="fas fa-copy"></i> Copy
          </button>
          <button id="shareButton" class="action-button share">
            <i class="fas fa-share-alt"></i> Share
          </button>
        </div>
      </div>
      <h4>Referral Balance: ₹<span id="referralBalance"><?= number_format($balance, 2) ?></span></h4>
      <button onclick="openWithdrawPopup()" class="action-button withdraw">
        Withdraw
      </button>
    </div>
    
    <!-- Desktop sidebar navigation -->
    <div class="desktop-sidebar">
      <a href="<?=base_url()?>dashboard" class="desktop-sidebar-item active">
        <i class="fas fa-home"></i>
        <span class="desktop-sidebar-item-text">Home</span>
      </a>
      <a href="<?=base_url()?>profile" class="desktop-sidebar-item">
        <i class="fas fa-user"></i>
        <span class="desktop-sidebar-item-text">Profile</span>
      </a>
      <a href="<?=base_url()?>invoice" class="desktop-sidebar-item">
        <i class="fas fa-file-invoice"></i>
        <span class="desktop-sidebar-item-text">Invoice</span>
      </a>
      <a href="#" id="desktopLogoutButton" class="desktop-sidebar-item">
        <i class="fas fa-sign-out-alt"></i>
        <span class="desktop-sidebar-item-text">Logout</span>
      </a>
    </div>
  </div>
</div>

<!-- Mobile footer -->
<div class="unique-footer">
  <a href="<?=base_url()?>dashboard" class="unique-footer-item active">
    <i class="fas fa-home unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Home</p>
  </a>
  <a href="<?=base_url()?>profile" class="unique-footer-item">
    <i class="fas fa-user unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Profile</p>
  </a>
  <a href="<?=base_url()?>invoice" class="unique-footer-item">
    <i class="fas fa-file-invoice unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Invoice</p>
  </a>
  <a href="#" id="logoutButton" class="unique-footer-item">
    <i class="fas fa-sign-out-alt unique-footer-item-icon"></i>
    <p class="unique-footer-item-text">Logout</p>
  </a>
</div>

<!-- Modals -->
<div class="modal" id="modal">
  <div class="modal-content">
    <button class="close-modal" onclick="closeModal()">×</button>
    <div class="modal-header">Select Your Options</div>
    <div>
      <select id="select1"></select>
      <select id="select2"></select>
      <button class="btn btn-submit" id="submit">Submit</button>
    </div>
    <div id="contentArea"></div>
  </div>
</div>

<div id="logoutModal">
  <div class="logout-modal-content">
    <h2>Confirm Logout</h2>
    <p>Are you sure you want to logout?</p>
    <div class="logout-modal-buttons">
      <button id="cancelLogout" class="logout-modal-cancel">Cancel</button>
      <button id="confirmLogout" class="logout-modal-confirm">Logout</button>
    </div>
  </div>
</div>

<!-- Mentorship Modal -->
<div id="mentorshipModal" class="mentorship-modal">
  <div class="mentorship-modal-content">
    <?php if (!empty($notes_sub)): ?>
      <div class="mentorship-whatsapp-content">
        <i class="fab fa-whatsapp mentorship-whatsapp-icon"></i>
        <h2>Contact Mentor</h2>
        <p>Reach out to your mentor for assistance.</p>
        <a href="#" class="mentorship-modal-button">Contact Mentor</a>
      </div>
    <?php else: ?>
      <div class="mentorship-lock-content">
        <i class="fas fa-lock mentorship-lock-icon"></i>
        <h2>Mentorship Locked</h2>
        <p>Enroll now to unlock mentorship!</p>
        <a href="javascript:void(0)" onclick="openModal()" class="mentorship-modal-button">Enroll Now</a>
      </div>
    <?php endif; ?>
    <button id="closeMentorshipModal" class="mentorship-close-button">&times;</button>
  </div>
</div>

<!-- Withdraw Popup -->
<div id="popupOverlay" onclick="closeWithdrawPopup()"></div>
<div id="withdrawPopup">
  <h3>Withdraw Balance</h3>
  <input type="number" name="amount" id="amount" placeholder="Enter Amount" required>
  <input type="text" id="upiId" name="upiId" placeholder="Enter UPI ID" required>
  <div class="button-group">
    <button id="requestPayout">Submit</button>
    <button class="cancel" onclick="closeWithdrawPopup()">Cancel</button>
  </div>
</div>

<!-- Share Popup -->
<div id="sharePopup">
  <h3>Share Referral Link</h3>
  <div class="share-icons">
    <a id="shareWhatsApp" target="_blank" title="Share on WhatsApp">
      <i class="fab fa-whatsapp" style="color: #25D366;"></i>
    </a>
    <a id="shareFacebook" target="_blank" title="Share on Facebook">
      <i class="fab fa-facebook" style="color: #4267B2;"></i>
    </a>
    <a id="shareTwitter" target="_blank" title="Share on Twitter">
      <i class="fab fa-twitter" style="color: #1DA1F2;"></i>
    </a>
    <a id="shareEmail" target="_blank" title="Share via Email">
      <i class="fas fa-envelope" style="color: #DD4B39;"></i>
    </a>
  </div>
  <button id="closePopup">Close</button>
</div>

</body>
<?=$this->endSection()?>
<?=$this->section('jsContent')?>
<script type="text/javascript" src="<?= base_url() ?>assets/student/js/buy-now-modal.js?v=1"></script>
<script>
  // Initialize referral link sharing
  const referralLink = document.getElementById('referralLink').value;

  // Update share links dynamically
  document.getElementById('shareWhatsApp').href = `https://wa.me/?text=Check%20out%20this%20website%20%3A%20${encodeURIComponent(referralLink)}`;
  document.getElementById('shareFacebook').href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(referralLink)}`;
  document.getElementById('shareTwitter').href = `https://twitter.com/intent/tweet?url=${encodeURIComponent(referralLink)}&text=Join%20now%20via%20my%20referral%20link!`;
  document.getElementById('shareEmail').href = `mailto:?subject=Join this amazing website&body=Use my referral link to join: ${encodeURIComponent(referralLink)}`;

  // Share button functionality
  const shareButton = document.getElementById('shareButton');
  const sharePopup = document.getElementById('sharePopup');
  const closePopup = document.getElementById('closePopup');

  shareButton.addEventListener('click', async () => {
    if (navigator.share) {
      try {
        await navigator.share({
          title: 'Join via Referral Link',
          text: 'Check out this CS Test Series website!',
          url: referralLink
        });
        console.log('Content shared successfully');
      } catch (error) {
        console.error('Error sharing:', error);
      }
    } else {
      // Show fallback popup if Web Share API is not supported
      sharePopup.style.display = 'block';
    }
  });

  closePopup.addEventListener('click', () => {
    sharePopup.style.display = 'none';
  });

  // Withdraw popup functions
  function openWithdrawPopup() {
    document.getElementById("popupOverlay").style.display = "block";
    document.getElementById("withdrawPopup").style.display = "block";
  }

  function closeWithdrawPopup() {
    document.getElementById("popupOverlay").style.display = "none";
    document.getElementById("withdrawPopup").style.display = "none";
  }

  // Copy referral link
  function copyReferralLink() {
    const link = document.querySelector("#referralLink").value;
    navigator.clipboard.writeText(link).then(() => {
      alert("Referral link copied!");
    }).catch((err) => {
      console.error("Failed to copy the link: ", err);
    });
  }

  // Logout modal functionality
  document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.getElementById('logoutButton');
    const desktopLogoutButton = document.getElementById('desktopLogoutButton');
    const modal = document.getElementById('logoutModal');
    const cancelLogout = document.getElementById('cancelLogout');
    const confirmLogout = document.getElementById('confirmLogout');

    // Show modal with animation
    function showLogoutModal(e) {
      if (e) e.preventDefault();
      modal.classList.add('show');
    }

    logoutButton.addEventListener('click', showLogoutModal);
    desktopLogoutButton.addEventListener('click', showLogoutModal);

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

    // Mentorship modal functionality
    const mentorshipMenu = document.getElementById("mentorshipMenu");
    const mentorshipModal = document.getElementById("mentorshipModal");
    const closeMentorshipModal = document.getElementById("closeMentorshipModal");

    if (mentorshipMenu) {
      mentorshipMenu.addEventListener("click", function (e) {
        e.preventDefault();
        mentorshipModal.classList.add("show");
      });
    }

    closeMentorshipModal.addEventListener("click", function () {
      mentorshipModal.classList.remove("show");
    });

    window.addEventListener("click", function (e) {
      if (e.target === mentorshipModal) {
        mentorshipModal.classList.remove("show");
      }
    });
  });

  // Request payout functionality
  $('#requestPayout').on('click', function() {
    let upiId = $('#upiId').val().trim();
    let amount = $('#amount').val().trim();
    
    if (upiId === '') {
      alert('Please enter a valid UPI ID.');
      return;
    }
    
    let upiRegex = /^[a-zA-Z0-9.\-_]{2,}@[a-zA-Z]{2,}$/;
    if (!upiRegex.test(upiId)) {
      alert('Please enter a valid UPI ID (e.g., abc@upi).');
      return;
    }
    
    if (amount === '' || isNaN(amount) || amount <= 0) {
      alert('Please enter a valid amount.');
      return;
    }
    
    let maxBalance = <?= json_encode(number_format($balance, 2)) ?>;
    if (amount > maxBalance) {
      alert('Entered amount exceeds your available balance.');
      return;
    }
    
    let studentData = {
      amount: amount,
      upi_id: upiId
    };
    
    $.ajax({
      url: baseUrl + 'requestPayout',
      type: 'POST',
      data: JSON.stringify(studentData),
      contentType: 'application/json',
      success: function(response) {
        if (response.success) {
          alert(response.message);
          closeWithdrawPopup();
          // Optionally update the balance display
          $('#referralBalance').text(response.newBalance || <?= json_encode(number_format($balance, 2)) ?>);
        } else {
          alert(response.message);
        }
      },
      error: function(error) {
        console.error('Error:', error);
        alert('Something went wrong.');
      }
    });
  });
</script>
<?=$this->endSection()?>
