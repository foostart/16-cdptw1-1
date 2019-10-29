$(document).ready(function() {
  var galleryThumbs = new Swiper(".gallery-thumbs", {
    direction: "vertical",
    spaceBetween: 10,
    slidesPerView: "auto",
    touchRatio: 0.2,
    slideToClickedSlide: true,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true
  });
  var galleryTop = new Swiper(".gallery-top", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });

  var gallerybotton = new Swiper(".gallery-botton", {
    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: '#swiper_btn_next',
      prevEl: '#swiper_btn_prev',
    },
   
    breakpoints: {
      1200: {
        slidesPerView: 3,
        spaceBetween: 0
      },
      990: {
        slidesPerView: 2,
        spaceBetween: 0
      },
      770: {
        slidesPerView: 1,
        spaceBetween: 60
      },
      500:{
        slidesPerView: 1,
        spaceBetween: 60
      }
    }
  });
});
