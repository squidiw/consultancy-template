jQuery(document).ready(function ($) {
   $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 4500,
      responsive: {
         0: {
            items: 1,
         },
         600: {
            items: 2,
         },
         1000: {
            items: 2,
         },
      },
   });
});
