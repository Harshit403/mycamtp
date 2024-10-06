<head>
    <style>
        /* CSS for Header Banner */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .banner {
            background-color: #2FBCCD;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: white;
            position: fixed; /* Keeps the banner at the top */
            top: 0;
            width: 100%;
            z-index: 1000; /* Ensure it stays above other content */
        }

        .contact {
            display: flex;
            align-items: center;
        }

        .contact i {
            margin-right: 15px; /* Space between phone icon and number */
            font-size: 1.2em;
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

        /* Navbar styles */
        .navbar {
            background-color: white;
            position: fixed; /* Keep the navbar fixed */
            top: 60px; /* Adjust position below the banner */
            width: 100%;
            z-index: 999; /* Ensure it is below the banner */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        /* Add margin to body content to avoid being covered by the fixed navbar */
        .content {
            margin-top: 120px; /* Adjust this based on the combined height of the banner and navbar */
        }
    </style>
    <!-- FontAwesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous"></script>
</head>
    <!-- Header Banner -->
    <header class="banner">
        <div class="contact">
            <i class="fas fa-phone-alt"></i>
            <span>99999999</span>
        </div>
        <div class="social-icons">
            <a href="#" class="icon whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
            <a href="https://Instagram.com/mission.cs" class="icon instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="icon telegram"><i class="fab fa-telegram-plane"></i></a>
        </div>
    </header>

    <!-- Original navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm p-3 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="<?=base_url()?>">
                <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item forMobileSection">
                    <a class="nav-link showCartBtn" href="javascript:void(0)" class="btn">
                        <div style="position: relative;">
                            <i class="bi bi-bag" style="font-size: 18px;"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color: #2FBCCD;">0</span>
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
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
