$(document).ready(function() {
    $(document).ajaxStart(function() {
        $("#overlay").fadeIn(300);
    });
    $(document).ajaxStop(function() {
        setTimeout(function() {
            $("#overlay").fadeOut(300);
        }, 500);
    });
});


    const sliderWrapper = document.querySelector('.slider-wrapper');
    const paginationDots = document.querySelectorAll('.slider-pagination span');
    let currentIndex = 0;
    let autoSlide;

    function slideImages(index) {
      const slideWidth = sliderWrapper.querySelector('img').clientWidth;
      sliderWrapper.style.transform = `translateX(-${index * slideWidth}px)`;

      paginationDots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
      });

      currentIndex = index;
    }

    function startAutoSlide() {
      autoSlide = setInterval(() => {
        currentIndex = (currentIndex + 1) % paginationDots.length;
        slideImages(currentIndex);
      }, 3000);  // Slide every 3 seconds
    }

    function stopAutoSlide() {
      clearInterval(autoSlide); // Stop the interval
    }

    sliderWrapper.addEventListener('touchstart', stopAutoSlide);
    sliderWrapper.addEventListener('touchend', startAutoSlide);
    sliderWrapper.addEventListener('mousedown', stopAutoSlide);
    sliderWrapper.addEventListener('mouseup', startAutoSlide);

    paginationDots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        slideImages(index);
        stopAutoSlide();
        startAutoSlide();
      });
    });

    startAutoSlide(); // Start auto sliding on page load


    let deferredPrompt;

    // Listen for the beforeinstallprompt event
    window.addEventListener('beforeinstallprompt', (e) => {
      // Prevent the default mini-infobar
      e.preventDefault();
      // Save the event for triggering later
      deferredPrompt = e;

      // Show the custom install bar with animation
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.display = 'block';
      installBar.style.bottom = '0'; // Slide in the mini bar
    });

    // Handle the install button click
    document.getElementById('install-app-button').addEventListener('click', () => {
      if (deferredPrompt) {
        // Show the default install prompt
        deferredPrompt.prompt();

        // Handle the user's choice
        deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the install prompt');
          } else {
            console.log('User dismissed the install prompt');
          }
          deferredPrompt = null;
        });
      }

      // Hide the custom install bar with slide-out animation
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.bottom = '-50px'; // Slide out the mini bar
      setTimeout(() => {
        installBar.style.display = 'none';
      }, 300); // Hide after animation
    });

    // Hide the bar once the app is installed
    window.addEventListener('appinstalled', () => {
      console.log('PWA was installed');
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.display = 'none';
    });

    // Close the install bar when the close button is clicked
    document.getElementById('close-install-bar').addEventListener('click', () => {
      const installBar = document.getElementById('custom-install-bar');
      installBar.style.bottom = '-50px'; // Slide out the mini bar
      setTimeout(() => {
        installBar.style.display = 'none';
      }, 300); // Hide after animation
    });

