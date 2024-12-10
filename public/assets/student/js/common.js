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
