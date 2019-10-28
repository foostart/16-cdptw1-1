$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        nextButton: '#swiper_btn_next',
        prevButton: '#swiper_btn_prev',
        breakpoints: {

            1200: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
            990: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            770: {
                slidesPerView: 1,
                spaceBetween: 60,
            },
        }
    });
});

