var swiper = new Swiper(".popular-product", {
    slidesPerView: 3.5,
    spaceBetween: 15,
    grabCursor: true,
    breakpoints: {
        320: {
            slidesPerView: 1.31,
            slidesPerGroup: 1,
        },
        1024: {
            slidesPerView: 3,
            slidesPerGroup: 1,
        },
        1260: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 24,
        },
        1900: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 32,
        },
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});