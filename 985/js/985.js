$(document).ready(function() {
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1,
    spaceBetween: 0,
    effect: 'fade',
    grabCursor: true,
    loop: true,
    navigation: {
      nextEl: ".right",
      prevEl: ".left"
    }
  });
});
