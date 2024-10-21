<!-- navbar -->
<style>
        .navbar {
    top: 50px; /* Adjust to prevent overlapping with the banner */
                }
        .contact {
            display: flex;
            align-items: center;
        }

        .contact i {
            margin-right: 15px; /* Add space between phone icon and number */
            font-size: 1.2em;
            display: inline-block;
            vertical-align: middle;
        }

        .contact span {
            font-size: 1.2em;
            vertical-align: middle;
        }
        
       .auth-buttons {
            display: flex;
            align-items: center;
        }

        .auth-button {
            background-color: white;
            color: #25c2c6;
            border: 1px solid transparent;
            padding: 6.8px 17px;
            margin-right: 10px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .auth-button:hover {
            background-color: #1a9ea1;
            color: white;
            border-color: white;
}
        .banner {
            background-color: #2FBCCD;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
        }

        .social-icons {
            display: flex;
            gap: 20px;
        }

        .icon {
            color: white;
            font-size: 1.5em;
            text-decoration: none;
        }

        .icon:hover {
            color: #ddd;
        }
</style>


<style>
        
/* Navbar customization */
.navbar {
    font-family: 'Poppins', sans-serif; /* Clean and modern font */
    background-color: #ffffff;
}

.navbar a {
    color: #2fbccd; /* Primary color */
    font-size: 1rem;
    font-weight: 400; /* Normal weight for professional look */
    transition: color 0.3s ease;
}

.navbar a:hover {
    color: #004d40; /* Darker teal for hover */
}

.navbar-brand img {
    /* No effect on logo image */
}

.btn-custom {
    background-color: #2fbccd;
    border: none;
    transition: background-color 0.3s ease;
}

.btn-custom:hover {
    background-color: #004d40; /* Darker teal on hover */
}

/* Offcanvas customization */
.offcanvas {
    background-color: #f8f9fa;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    box-shadow: 0px -5px 15px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

.offcanvas-header {
    background-color: #2fbccd;
    color: #fff;
    padding: 1rem;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

.offcanvas-title a {
    font-size: 1.5rem;
    color: #fff;
    font-weight: 400; /* No bold text */
    text-decoration: none;
}

.btn-close {
    background-color: #fff;
    border-radius: 50%;
    padding: 5px;
}

.offcanvas-body {
    padding: 2rem 1.5rem;
    color: #333;
    font-family: 'Poppins', sans-serif;
}

.offcanvas-body a {
    color: #2fbccd;
    font-size: 1rem; /* Reduced font size for a cleaner look */
    font-weight: 400; /* No bold */
    transition: color 0.3s ease;
}

.offcanvas-body a:hover {
    color: #004d40;
}

.dropdown-menu {
    background-color: #f0f4f5;
    border-radius: 8px;
    border: none;
}

.dropdown-item {
    color: #2fbccd;
    font-size: 1rem;
    font-weight: 400; /* No bold */
    transition: background-color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #e3f2f2;
}

.badge {
    background-color: #004d40;
    font-size: 0.8rem;
}

/* Additional styling */
.forMobileSection, .forDesktopSection {
    margin-top: 1rem;
}

/* Remove background color from the menu button */
.navbar-toggler {
    border: none;
    background-color: transparent; /* Transparent background */
}

.navbar-toggler-icon {
    background-color: transparent; /* Remove background */
        }


</style>
<style>
        /* Make drawer font thinner */
.offcanvas-body .nav-link {
  font-weight: 300; /* Thinner font weight */
  font-size: 16px;
  font-family: 'Roboto', sans-serif; /* Update to a professional font */
  color: #333; /* A clean, professional color */
}

.offcanvas-body .nav-link:hover {
  color: #2fbccd; /* Match hover color with the theme */
}

/* Fix overlapping issue between cart and profile image */
.nav-item.forMobileSection {
  margin-right: 1rem; /* Add space between cart and profile image */
}

/* Profile image specific styles */
.signinDropdown a.dropdown-main {
  margin-left: 1rem; /* Add space to the left of profile image */
}

/* Ensure the cart and profile image remain distinct in layout */
.navbar-nav .showCartBtn {
  margin-right: 1.5rem; /* Increased margin for clarity */
}

.signinDropdown img {
  border-radius: 50%; /* Ensures profile image remains circular */
}

/* Mobile adjustments */
@media (max-width: 992px) {
  .signinDropdown.forMobileSection {
    margin-right: 1.5rem; /* Ensure spacing on smaller screens */
  }
}
</style>

<meta property="og:title" content="Mission CS Test Series: Company Secretary, CSEET, CS Executive & CS Professional Exams" />
<meta property="og:type" content="Website" />
<meta property="og:url" content="https:/missioncstestseries.com/" />
<meta property="og:image" content="https://missioncstestseries.com//assetItems/image/logo.jpg" />
<meta property="og:description"
content="Boost Your CS Exam Success with Our Comprehensive Test Series. Prepare for Company Secretary (CS) exams with specialized modules for CS Executive and CS Professional." />
<link rel="canonical" href="https://missioncstestseries.com" />
<link rel="icon" sizes="16x16" href="https://missioncstestseries.com/favicon.ico">

<div style="height: 80px;" class="spacing"></div>

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

  <!-- <nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm p-3 bg-body rounded">
      <div class="container-fluid">
        <a class="navbar-brand fs-4" href="<?=base_url()?>">
          <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item forMobileSection">
            <a class="nav-link showCartBtn" href="javascript:void(0)" class="btn">
              <div style="position: relative;">
                <i class="bi bi-bag" style="font-size: 18px;"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary cartCount">0</span>
              </div>
            </a>
          </li>
        </ul>
        <?php if (session()->get('studentDetails')!==null): ?>
            <div class="dropdown signinDropdown forMobileSection">
              <a class="dropdown-main" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <img src="<?=base_url()?>assetItems/image/image1.jpg" class="img-circle" style="height: 40px; width:40px;">
              </a>
              <ul class="dropdown-menu dropdown-menu-end" style="left: -118px;">
                <li><a class="dropdown-item" href="<?=base_url()?>dashboard">Dashboard</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>profile">Profile</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>invoice">Invoice</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>logout">Logout</a></li>
              </ul>
            </div>
        <?php endif ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="margin-left: -4rem!important;border: none;margin-right: -1rem;">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="height: 40vh;">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              <a href="<?=base_url()?>">
                <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
              </a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=base_url();?>">Home</a>
                  </li>
                  <?php if (session()->get('studentDetails')===null): ?>
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
                  <li class="nav-item forDesktopSection">
                    <a class="nav-link showCartBtn" href="javascript:void(0)" class="btn">
                      <div style="position: relative;">
                        <i class="bi bi-bag" style="font-size: 18px;"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary cartCount">0</span>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item" style="margin-left:1rem !important; ">
                    <?php if (session()->get('studentDetails')==null): ?>
                        <div class="d-flex justify-content-center align-items-center" style="gap:10px;">
                            <a href="<?=base_url()?>auth?auth=login" class="btn text-white btn-sm btn-custom">Login <i class="bi bi-arrow-right"></i></a>
                            <a href="<?=base_url()?>auth?auth=register" class="btn text-white btn-sm btn-custom">Sign Up <i class="bi bi-arrow-right"></i></a>
                        </div>
                        
                          
                      <?php endif ?>
                  </li>
                </ul>
          </div>
        </div>
        <?php if (session()->get('studentDetails')!==null): ?>
            <div class="dropdown signinDropdown forDesktopSection">
              <a class="dropdown-main" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <img src="<?=base_url()?>assetItems/image/image1.jpg" class="img-circle" style="height: 40px; width:40px;">
              </a>
              <ul class="dropdown-menu dropdown-menu-end" style="left: -118px;">
                <li><a class="dropdown-item" href="<?=base_url()?>dashboard">Dashboard</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>profile">Profile</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>invoice">Invoice</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>logout">Logout</a></li>
              </ul>
            </div>
        <?php endif ?>
      </div>
</nav> -->

<nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm p-3 bg-body rounded">
  <div class="container-fluid">
    <a class="navbar-brand fs-4" href="<?=base_url()?>">
      <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
    </a>
    <ul class="navbar-nav">
      <li class="nav-item forMobileSection">
        <a class="nav-link showCartBtn" href="javascript:void(0)" class="btn">
          <div style="position: relative;">
            <i class="bi bi-bag" style="font-size: 18px;"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary cartCount">0</span>
          </div>
        </a>
      </li>
    </ul>

    <!-- Only show if user is logged in -->
    <?php if (session()->get('studentDetails')!==null): ?>
        <div class="dropdown signinDropdown forMobileSection">
          <a class="dropdown-main" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <img src="<?=base_url()?>assetItems/image/image1.jpg" class="img-circle" style="height: 40px; width:40px;">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" style="left: -118px;">
            <li><a class="dropdown-item" href="<?=base_url()?>dashboard">Dashboard</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>profile">Profile</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>invoice">Invoice</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>logout">Logout</a></li>
          </ul>
        </div>
    <?php endif ?>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="border: none;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Adjusted Offcanvas Section -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="height: 50vh;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <a href="<?=base_url()?>">
            <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
          </a>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url();?>">Home</a>
          </li>
          <?php if (session()->get('studentDetails')===null): ?>
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
          <li class="nav-item forDesktopSection">
            <a class="nav-link showCartBtn" href="javascript:void(0)" class="btn">
              <div style="position: relative;">
                <i class="bi bi-bag" style="font-size: 18px;"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary cartCount">0</span>
              </div>
            </a>
          </li>
          <li class="nav-item" style="margin-left:1rem !important;">
            <?php if (session()->get('studentDetails')==null): ?>
                <div class="d-flex justify-content-center align-items-center" style="gap:10px;">
                    <a href="<?=base_url()?>auth?auth=login" class="btn text-white btn-sm btn-custom">Login <i class="bi bi-arrow-right"></i></a>
                    <a href="<?=base_url()?>auth?auth=register" class="btn text-white btn-sm btn-custom">Sign Up <i class="bi bi-arrow-right"></i></a>
                </div>
              <?php endif ?>
          </li>
        </ul>
      </div>
    </div>
    <!-- End of Adjusted Offcanvas Section -->
    
    <?php if (session()->get('studentDetails')!==null): ?>
        <div class="dropdown signinDropdown forDesktopSection">
          <a class="dropdown-main" type="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <img src="<?=base_url()?>assetItems/image/image1.jpg" class="img-circle" style="height: 40px; width:40px;">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" style="left: -118px;">
            <li><a class="dropdown-item" href="<?=base_url()?>dashboard">Dashboard</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>profile">Profile</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>invoice">Invoice</a></li>
            <li><a class="dropdown-item" href="<?=base_url()?>logout">Logout</a></li>
          </ul>
        </div>
    <?php endif ?>
  </div>
</nav>

</header>
   
