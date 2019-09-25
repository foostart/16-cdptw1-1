$(document).ready(function () {
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 'auto',
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            thumbs: {
                swiper: galleryThumbs
            }
        });
     
        var gallerybotton = new Swiper('.gallery-botton', {
            slidesPerView: 3,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
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