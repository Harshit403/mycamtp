<!-- navbar -->
<meta property="og:title" content="Mission CS Test Series: Company Secretary, CSEET, CS Executive & CS Professional Exams" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="https:/missioncstestseries.com/" />
<meta property="og:image" content="https://missioncstestseries.com//assetItems/image/logo.jpg" />
<meta property="og:description" content="Best online CS Test Series Plateform, Experience the best quality question, personlised feedback" />
<link rel="canonical" href="https://missioncstestseries.com" />
<link rel="icon" sizes="16x16" href="https://missioncstestseries.com/favicon.ico">
<title>
Mission CS Test Series |ICSI DEC 2024 Exams 
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
<div style="height: 60px;" class="spacing"></div>

    <div style="display: none;">
        <div class="cartPopUpContainer"></div>
    </div>
    
<header class="banner">
<?php if (session()->get('studentDetails') !== null): ?>
    <div class="contact">
        <i class="fas fa-phone-alt"></i>
        <span>+91-9873045724</span>
    </div>
<?php else: ?>
   <div class="auth-buttons">
        <a href="<?= base_url() ?>auth?auth=login" class="auth-button">Login</a>
        <a href="<?= base_url() ?>auth?auth=register" class="auth-button">Register</a>
    </div>
<?php endif; ?>
<div class="social-icons">
            <a href="https://wa.me/919873045724/" class="icon whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
            <a href="https://instagram.com/mission.cs" class="icon instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://telegram.me/csmission" class="icon telegram"><i class="fab fa-telegram-plane"></i></a>
        </div>
</header>

<!-- Navbar and Drawer -->
<nav class="navbar navbar-expand-lg fixed-top shadow-sm p-3" style="background-color: white;">
  <div class="container-fluid">
    <a class="navbar-brand fs-4" href="<?=base_url()?>">
      <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
    </a>

    <!-- Cart Button -->
    <ul class="navbar-nav">
      <li class="nav-item forMobileSection">
        <a class="nav-link showCartBtn" href="javascript:void(0)" style="margin-right: 1rem;"> 
          <div style="position: relative;">
            <i class="bi bi-bag" style="font-size: 18px;"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary cartCount">0</span>
          </div>
        </a>
      </li>
    </ul>

    <!-- Profile Dropdown -->
    <?php if (session()->get('studentDetails') !== null): ?>
      <div class="dropdown signinDropdown forMobileSection">
        <a class="dropdown-main" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left: 1rem;"> 
          <img src="<?=base_url()?>assetItems/image/image1.jpg" class="img-circle" style="height: 40px; width:40px;">
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="<?=base_url()?>dashboard">Dashboard</a></li>
          <li><a class="dropdown-item" href="<?=base_url()?>profile">Profile</a></li>
          <li><a class="dropdown-item" href="<?=base_url()?>invoice">Invoice</a></li>
          <li><a class="dropdown-item" href="<?=base_url()?>logout">Logout</a></li>
        </ul>
      </div>
    <?php endif ?>

    <!-- Menu Button for Drawer -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Offcanvas Drawer -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="height: 53vh;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <a href="<?=base_url()?>">
            <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
          </a>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-start">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=base_url();?>">Home</a>
          </li>
          <?php if (session()->get('studentDetails') === null): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>/auth?auth=register">Register/Login</a>
            </li>
          <?php endif ?>
          <li class="nav-item">
            <a class="nav-link" href="#">Plans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>/blog-list">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>#faq-section">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</header>
   
