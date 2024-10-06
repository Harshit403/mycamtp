<head>
    <style>
        /* CSS for Header Banner */
        .banner {
            margin-bottom: 0; /* Removed the large bottom margin */
            background-color: #2FBCCD;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: white;
            position: fixed; /* Keeps the banner at the top */
            top: 0;
            width: 100%;
            z-index: 1100; /* Ensure it stays above the navbar and drawer */
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
            z-index: 1050; /* Ensure it's below the banner but above body content */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
        }

        /* Add margin to body content to avoid being covered by the fixed navbar */
        body {
            margin-top: 130px; /* Adjust this based on the combined height of the banner and navbar */
        }

        .offcanvas {
            z-index: 1200; /* Ensure drawer stays above banner and navbar */
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
    <nav class="navbar navmar navbar-expand-lg shadow-sm p-3 bg-body rounded">
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
            <!-- Drawer and other navbar elements remain the same -->
        </div>
    </nav>
