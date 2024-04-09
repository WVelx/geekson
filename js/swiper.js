var swiper_employed = new Swiper(".swiper-employeed", {
    slidesPerView: 'auto',
    speed: 2000,
    easing: 'ease-in-out',
    loop: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination-employeed",
        clickable: true,
        dynamicBullets: true,
    },
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints: {
        768: {
            slidesPerView: 2
        },
        1000: {
            slidesPerView: 3,
            centeredSlides: true,
        }
    }
});

var swiper_clients = new Swiper(".swiper-clients", {
    slidesPerView: 'auto',
    speed: 2000,
    easing: 'ease-in-out',
    loop: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination-clients",
        clickable: true,
        dynamicBullets: true,
    },
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    breakpoints: {
        768: {
            slidesPerView: 2
        },
        1000: {
            slidesPerView: 4
        }
    }
});