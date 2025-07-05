(function ($) {
  "use strict";

  $(document).ready(function () {

    // ✅ Highlight active menu item for multipage
    var currentPath = window.location.pathname.split("/").pop();

    if (currentPath === "") {
      currentPath = "index.html"; // default to home page
    }

    $(".nav-link").each(function () {
      var linkPath = $(this).attr("href");

      if (linkPath === currentPath) {
        $(this).addClass("active");
      }
    });

    // ✅ Toggle navbar style on scroll
    function toggleNavbarState() {
      if ($(window).scrollTop() > 10) {
        $(".navbar").addClass("scrolled");
      } else {
        $(".navbar").removeClass("scrolled");
      }
    }

    toggleNavbarState(); // Run on page load
    $(window).on("scroll", toggleNavbarState);

    // ✅ Portfolio Section Filter
    $('.filter-btn').on('click', function () {
      var filterValue = $(this).attr('data-filter');

      $('.filter-btn').removeClass('active');
      $(this).addClass('active');

      $('.portfolio-item').each(function () {
        var itemCategory = $(this).data('category');
        if (filterValue === 'all' || itemCategory === filterValue) {
          $(this).fadeIn(400);
        } else {
          $(this).fadeOut(400);
        }
      });
    });

    // ✅ Scroll to top button
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('#scrollTopBtn').fadeIn();
      } else {
        $('#scrollTopBtn').fadeOut();
      }
    });

    $('#scrollTopBtn').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 600);
      return false;
    });
  });

  // ✅ AOS animation (outside document.ready is okay)
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true
  });

})(jQuery);
