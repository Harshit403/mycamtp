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
      justify-content: center;
      margin: 20px 0;
    }
    .toggle-switch {
      position: relative;
      display: inline-block;
      width: 30px;
      height: 17px;
      margin-right: 5px;
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
      border-radius: 17px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 13px;
      width: 13px;
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
      transform: translateX(13px);
    }

    .toggle-label {
      font-size: 8px;
      color: #333;
      font-weight: bold;
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

/* Unique CSS */
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
  padding: 20px;
  text-align: center;
  width: 90%;
  max-width: 400px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  transform: scale(0.8);
  transition: transform 0.3s ease;
}

.mentorship-modal.show .mentorship-modal-content {
  transform: scale(1);
}

.mentorship-lock-content, .mentorship-whatsapp-content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.mentorship-lock-icon, .mentorship-whatsapp-icon {
  font-size: 50px;
  margin-bottom: 10px;
  color: #e63e58;
}

.mentorship-modal-content h2 {
  font-size: 20px;
  margin: 10px 0;
}

.mentorship-modal-content p {
  color: #555;
  margin-bottom: 20px;
}

.mentorship-modal-button {
  padding: 10px 20px;
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
  top: 10px;
  right: 10px;
  font-size: 20px;
  color: #555;
  background: none;
  border: none;
  cursor: pointer;
  transition: color 0.3s ease;
}

.mentorship-close-button:hover {
  color: #e63e58;
      }
  </style>
</head>
<body style="margin-top: 6rem;">




  <style>
      
    .button-buy-now-hyper-unique {
      background-color: #e63e58;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      margin: 20px auto;
      display: block;
      text-align: center;
      width: 200px;
      text-transform: uppercase;
    }
    .button-buy-now-hyper-unique:hover {
      background-color: #d0344c;
    }
    .overlay-modal-ultra-unique {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: none;
      justify-content: center;
      align-items: flex-start;
      z-index: 1000;
      overflow-y: auto;
      padding-top: 10px;
    }
    .modal-box-super-unique {
      background: #fff;
      width: 90%;
      max-width: 500px;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      position: relative;
    }
    .modal-title-mega-unique {
      font-size: 20px;
      font-weight: bold;
      color: #e63e58;
      text-align: center;
      margin-bottom: 20px;
    }
    .dropdown-select-absolutely-unique {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
    .submit-button-extremely-unique {
      background-color: #e63e58;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      text-align: center;
    }
    .submit-button-extremely-unique:hover {
      background-color: #d0344c;
    }
    .container-plans-super-unique {
      margin-top: 20px;
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.5s ease;
    }
    .container-plans-super-unique.active {
      opacity: 1;
      transform: translateY(0);
    }
    .card-plan-ultra-unique {
      background: linear-gradient(135deg, #fff, #f8f9fa);
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-plan-ultra-unique:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }
    .title-plan-extra-unique {
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .price-tag-ultra-unique {
      font-size: 16px;
      color: #e63e58;
      margin: 10px 0;
      font-weight: bold;
    }
    .button-add-to-cart-unique {
      background: #e63e58;
      color: white;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      margin-top: 10px;
    }
    .button-add-to-cart-unique:hover {
      background: #d0344c;
    }
    .button-close-modal-extremely-unique {
      position: absolute;
      top: 10px;
      right: 20px;
      font-size: 18px;
      cursor: pointer;
      color: #fff;
    }
    .button-back-to-plans-unmatched {
      background: #e63e58;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
      display: block;
      text-align: center;
      margin: 10px auto;
      max-width: 150px;
    }
    .button-back-to-plans-unmatched:hover {
      background: #d0344c;
    }
    .button-dummy-hidden-special {
      background: green;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      z-index: 2000;
    }
    .button-dummy-hidden-special:hover {
      background: #d0344c;
    }
    @media (max-width: 768px) {
      .modal-box-super-unique {
        width: 95%;
      }
    }
  </style>


<!-- Modal -->
<div class="overlay-modal-ultra-unique" id="overlay-modal-ultra-unique">
  <div class="modal-box-super-unique">
    <span class="button-close-modal-extremely-unique" onclick="closeModal()">&times;</span>
    <div class="modal-title-mega-unique">Select Your Options</div>
    <div>
      <select class="dropdown-select-absolutely-unique" id="select1">

       <?php 
          foreach ($CategoryDetails as $categoryRow) {
          echo "<option value='{$categoryRow}'>{$categoryRow}</option>";
         }
         ?>

      </select>
      <select class="dropdown-select-absolutely-unique" id="select2">
          <?php 
            foreach ($level_list as $levelRow) {
              echo "<option value='{$levelRow}'>{$levelRow}</option>";
            }
          ?>
      </select>
      <button class="submit-button-extremely-unique" onclick="showPlans()">Submit</button>
    </div>
    <div id="contentArea"></div>
  </div>
</div>

<!-- Dummy Button -->
<button class="button-dummy-hidden-special" id="dummyBtn">Checkout</button>

<script>
  const planArray = ['Chapter Wise Plan', 'Detailed Plan', 'Unit Plan'];
  const productArray = [
    { name: 'Taxation', price: '$50' },
    { name: 'Accounting', price: '$60' },
    { name: 'Law', price: '$40' },
    { name: 'Costing', price: '$45' }
  ];

  const contentArea = document.getElementById('contentArea');
  const dummyBtn = document.getElementById('dummyBtn');

  // Show plans on submit
  function showPlans() {
    const planContainer = document.createElement('div');
    planContainer.classList.add('container-plans-super-unique');
    planArray.forEach(plan => {
      const card = document.createElement('div');
      card.classList.add('card-plan-ultra-unique');
      card.innerHTML = `
        <div class="title-plan-extra-unique">${plan}</div>
        <button class="button-add-to-cart-unique" onclick="showProducts()">View Products</button>
        <button class="button-add-to-cart-unique"><i class="fas fa-download"></i> Download Schedule</button>
      `;
      planContainer.appendChild(card);
    });
    contentArea.innerHTML = '';
    contentArea.appendChild(planContainer);
    setTimeout(() => planContainer.classList.add('active'), 10);
  }

  // Show products on plan click
  function showProducts() {
    const productContainer = document.createElement('div');
    productContainer.classList.add('container-plans-super-unique');
    productArray.forEach(product => {
      const card = document.createElement('div');
      card.classList.add('card-plan-ultra-unique');
      card.innerHTML = `
        <div class="title-plan-extra-unique">${product.name}</div>
        <div class="price-tag-ultra-unique">Price: ${product.price}</div>
        <button class="button-add-to-cart-unique"><i class="fas fa-cart-plus"></i> Add to Cart</button>
      `;
      productContainer.appendChild(card);
    });
    const backButton = document.createElement('button');
    backButton.classList.add('button-back-to-plans-unmatched');
    backButton.textContent = 'Go Back';
    backButton.onclick = showPlans;

    productContainer.insertBefore(backButton, productContainer.firstChild);
    contentArea.innerHTML = '';
    contentArea.appendChild(productContainer);
    dummyBtn.style.display = 'block'; // Show the dummy button
    setTimeout(() => productContainer.classList.add('active'), 10);
  }

  // Open the modal
  function openModal() {
    document.getElementById('overlay-modal-ultra-unique').style.display = 'flex';
  }

  // Close the modal
  function closeModal() {
    document.getElementById('overlay-modal-ultra-unique').style.display = 'none';
  }
</script>








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


<!-- Mentorship Modal -->
<div id="mentorshipModal" class="mentorship-modal">
  <div class="mentorship-modal-content">
     <?php if (!isset($subject_id_details) || empty($subject_id_details)): ?>
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
        <a href="<?=base_url()?>#category-section" class="mentorship-modal-button">Enroll Now</a>
      </div>
    <?php endif; ?>
    <button id="closeMentorshipModal" class="mentorship-close-button">&times;</button>
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
  <a href="<?=base_url()?>my-resources/amendment/subject-list" id="amendmentMenu"class="menu-link" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fas fa-book" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Amendments</p>
    </div>
  </a>
  <a href="<?=base_url()?>my-resources/qbank/subject-list" id="qbankMenu" class="menu-link" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-book-open" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Que. Bank</p>
    </div>
  </a>
  <a href="#" class="menu-link" onclick="openModal()" style="text-decoration: none;">
    <div class="pd-menu-item">
      <i class="fa-solid fa-cart-shopping" style="color: #e63e58; margin-bottom: 10px; font-size: 24px;"></i>
      <p>Buy Now</p>
    </div>
  </a>
  <a href="#" id="mentorshipMenu" class="menu-link" style="text-decoration: none;">
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
<script>
  document.addEventListener('DOMContentLoaded', function () {
  const contentToggle = document.getElementById('contentToggle');
  const amendmentMenu = document.getElementById('amendmentMenu');
  const qbankMenu = document.getElementById('qbankMenu');
  const mentorshipMenu = document.getElementById('mentorshipMenu');
  const menuItems = document.querySelectorAll('.pd-menu-item p');
  const icons = document.querySelectorAll('.pd-menu-item i');

  // Restore the toggle state and color from localStorage
  const toggleState = localStorage.getItem('contentToggleState');
  const iconColor = localStorage.getItem('iconColor');

  if (toggleState === 'true') {
    contentToggle.checked = true;
    toggleContent(true);
  } else {
    contentToggle.checked = false;
    toggleContent(false);
  }

  // Add event listener for the toggle
  contentToggle.addEventListener('change', function () {
    const isChecked = this.checked;
    localStorage.setItem('contentToggleState', isChecked); // Save the state in localStorage
    toggleContent(isChecked);
  });

  function toggleContent(isChecked) {
    if (isChecked) {
      amendmentMenu.style.display = 'none';
      qbankMenu.style.display = 'none';
      mentorshipMenu.style.display = 'none';

      // Change menu item text and icon color to black
      menuItems.forEach(item => {
        item.style.color = 'black';
      });
      icons.forEach(icon => {
        icon.style.color = 'black';
      });

      // Save the black icon color to localStorage
      localStorage.setItem('iconColor', 'black');
    } else {
      amendmentMenu.style.display = '';
      qbankMenu.style.display = '';
      mentorshipMenu.style.display = '';

      // Reset menu item text and icon color
      menuItems.forEach(item => {
        item.style.color = '';
      });
      icons.forEach(icon => {
        icon.style.color = '#e63e58';
      });

      // Save the default icon color to localStorage
      localStorage.setItem('iconColor', '#e63e58');
    }
  }
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const mentorshipMenu = document.getElementById("mentorshipMenu");
  const mentorshipModal = document.getElementById("mentorshipModal");
  const closeModal = document.getElementById("closeMentorshipModal");

  // Ensure mentorshipMenu exists
  if (!mentorshipMenu) {
    console.error('Mentorship menu not found!');
    return;
  }

  // Event to show the modal
  mentorshipMenu.addEventListener("click", function (e) {
    e.preventDefault();
    mentorshipModal.classList.add("show");
  });

  // Event to close the modal
  closeModal.addEventListener("click", function () {
    mentorshipModal.classList.remove("show");
  });

  // Close modal on outside click
  window.addEventListener("click", function (e) {
    if (e.target === mentorshipModal) {
      mentorshipModal.classList.remove("show");
    }
  });
});
</script>
<?=$this->endSection()?>
