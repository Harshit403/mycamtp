<head>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Banner and Contact Bar */
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

        .auth-buttons {
            display: flex;
            align-items: center;
        }

        .auth-button {
            background-color: white;
            color: #25c2c6;
            border: 1px solid transparent;
            padding: 8px 20px;
            margin-right: 10px;
            font-size: 14px;
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

        /* Navbar */
        .navbar {
            margin-top: 80px; /* Adjusts for banner height */
        }

        .navbar-toggler {
            border: none;
        }

        .offcanvas-header .btn-close {
            background: none;
            border: none;
            font-size: 1.5rem;
        }

        /* General Styling */
        .spacing {
            height: 80px; /* Adjusts spacing for top banner */
        }
    </style>
</head>

<body>
    <div class="spacing"></div>
    
    <!-- Banner -->
    <header class="banner">
        <div class="auth-buttons">
            <button class="auth-button">Login</button>
            <button class="auth-button">Signup</button>
        </div>

        <div class="social-icons">
            <a href="#" class="icon whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" class="icon youtube"><i class="fab fa-youtube"></i></a>
            <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="icon telegram"><i class="fab fa-telegram-plane"></i></a>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm p-3 bg-body rounded">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="<?=base_url()?>">
                <img src="<?=base_url()?>/assetItems/image/logo.jpg" style="height:3rem;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item forMobileSection">
                    <a class="nav-link showCartBtn" href="javascript:void(0)">
                        <div style="position: relative;">
                            <i class="bi bi-bag" style="font-size: 18px;"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary cartCount">0</span>
                        </div>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
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
                        <!-- Additional menu items here -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>
