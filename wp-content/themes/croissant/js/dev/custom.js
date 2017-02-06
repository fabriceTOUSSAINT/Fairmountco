jQuery(function($) {

    $('#homeSlide').owlCarousel({
      loop:true,
      center:true,
      items:1,
      autoplay:true,
      responsive: {
        0: {
          items: 1,
          stagePadding: 15,
          margin: 5
        },
        648: {
          margin:30,
          stagePadding: 200
        }
      }
  });
});
