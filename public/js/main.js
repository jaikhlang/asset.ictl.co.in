

$(document).ready(function(){
  $('#owl-carousel1').owlCarousel({
    items:3,
    margin:20,
    loop:true,
    autoplay:true,
    autoplayTimeout: 2000,
    lazyLoad : true,
    responsive: true
  });
  $('#owl-carousel2').owlCarousel({
    items:1,
    margin:10,
    loop:true,
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
  });
  $('#owl-banner').owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout: 6000,
  });
});
