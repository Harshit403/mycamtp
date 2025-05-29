<!-- navbar -->
<header>
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
  <style>
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: #e63e58;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    #preloader.hidden {
      display: none !important;
    }
    dotlottie-player {
      width: 150px;
      height: 150px;
    }
    #main-content {
      display: none;
      animation: fadeIn 0.8s ease-in-out;
    }
    #main-content.active {
      display: block;
    }
    #preloader p {
     color: white;
     font-size: 18px;
     margin-top: 10px;
     font-family: Arial, sans-serif;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>

<script>
window.addEventListener('DOMContentLoaded', () => {
  // Check if the app is running in PWA mode
  if (window.matchMedia('(display-mode: standalone)').matches) {
    // If in PWA mode, inject preloader
    const preloaderHTML = `
      <div id="preloader">
        <div style="text-align: center;">
          <dotlottie-player
            src="https://lottie.host/e9ab34df-5bf4-4002-8133-b43d78b8fa5b/NJ8yWP7naE.lottie"
            background="transparent"
            speed="1"
            loop
            autoplay>
          </dotlottie-player>
          <p>Mission CS Test Series</p>
        </div>
      </div>
    `;
    
    // Insert the preloader HTML into the body
    document.body.insertAdjacentHTML('afterbegin', preloaderHTML);
    
    const preloader = document.getElementById('preloader');

    // Hide the preloader after 1.5 seconds
    setTimeout(() => {
      preloader.classList.add('hidden');
      document.body.style.overflow = 'auto'; // Allow scrolling after preloader
    }, 1500); // Adjust delay as needed
  } else {
    // For website, skip adding the preloader and enable scrolling immediately
    document.body.style.overflow = 'auto';
  }
});
</script>
  
<?php 
  $uri = service('uri'); 
  $segment1 = $uri->getSegment(1);
?>
    <div style="display: none;">
        <div class="cartPopUpContainer"></div>
    </div>
  <!-- Header -->
    <header class="mcs-header">
        <div class="mcs-container mcs-header-container">
            <div class="mcs-logo">
                <img src="<?=base_url()?>/assetItems/image/logo.png" alt="Mission CS Logo">
              <!-- <h1>Mission CS</h1> -->
            </div>
            
            <nav class="mcs-nav">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#">Test Series</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Success Stories</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            
            <div class="mcs-header-actions">
          <?php if (session()->get('studentDetails')==null): ?>
            <a href="<?=base_url()?>auth?auth=login"> <button class="mcs-btn mcs-btn-secondary">Login</button></a>
            <a href="<?=base_url()?>auth?auth=register"> <button class="mcs-btn mcs-btn-primary">Sign Up</button></a>
          <?php else: ?>
              <a href="<?=base_url()?>dashboard"> <button class="mcs-btn mcs-btn-secondary">Dashboard</button></a>
            <a href="<?=base_url()?>logout"> <button class="mcs-btn mcs-btn-primary">Logout</button></a>
          <?php endif ?>
                <div class="mcs-cart-button">
                   <a href="javascript:void(0)" <i class="fas fa-shopping-cart showCartBtn"></i> </a>
                    <span class="mcs-cart-count cartCount">0</span>
                </div>
                <div class="mcs-menu-toggle" id="mcsMenuToggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mcs-mobile-menu" id="mcsMobileMenu">
        <div class="mcs-mobile-menu-header">
            <div class="mcs-logo">
             <h1>Mission CS</h1> 
            </div>
            <div class="mcs-close-menu" id="mcsCloseMenu">
                <i class="fas fa-times"></i>
            </div>
        </div>
        
        <div class="mcs-mobile-nav">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Test Series</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Success Stories</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        
        <div class="mcs-mobile-actions">
          <?php if (session()->get('studentDetails')==null): ?>
            <a href="<?=base_url()?>auth?auth=login"> <button class="mcs-btn mcs-btn-secondary">Login</button></a>
            <a href="<?=base_url()?>auth?auth=register"> <button class="mcs-btn mcs-btn-primary">Sign Up</button></a>
          <?php else: ?>
              <a href="<?=base_url()?>dashboard"> <button class="mcs-btn mcs-btn-secondary">Dashboard</button></a>
            <a href="<?=base_url()?>logout"> <button class="mcs-btn mcs-btn-primary">Logout</button></a>
          <?php endif ?>
        </div>
    </div>
