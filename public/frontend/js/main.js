(function ($) {
    "use strict";

    // Initiate the wowjs
    new WOW().init();


    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            992:{
                items:2
            }
        }
    });
    
      /**
   * Porfolio isotope and filter
   */
      window.addEventListener('load', function() {
        const portfolioContainer = document.querySelector('.portfolio-container');
        
        if (portfolioContainer) {
          const portfolioIsotope = new Isotope(portfolioContainer, {
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
          });
      
          const portfolioFilters = document.querySelectorAll('#portfolio-flters li');
      
          portfolioFilters.forEach(function(filter) {
            filter.addEventListener('click', function(event) {
              event.preventDefault();
              
              portfolioFilters.forEach(function(item) {
                item.classList.remove('filter-active');
              });
      
              this.classList.add('filter-active');
      
              const filterValue = this.getAttribute('data-filter');
              portfolioIsotope.arrange({ filter: filterValue });
            });
          });
        }
      });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

})(jQuery);


