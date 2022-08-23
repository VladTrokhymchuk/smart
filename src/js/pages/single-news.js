//qwe
var swiper = new Swiper(".news-swiper", {
    slidesPerView: 1,
    spaceBetween: 1,
    grabCursor: true,
    // slidesPerView: "auto",
    centeredSlides: true,
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".blog-more-news", {
    slidesPerView: 3,
    spaceBetween: 15,
    grabCursor: true,
    breakpoints: {
        320: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        1024: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 15,
        },
        1260: {
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
        el: ".swiper-scrollbar-news",
    },
});