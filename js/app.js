document.addEventListener('DOMContentLoaded', ()=>{
    const productsSlider = new Swiper('.products__slider-swiper', {
        spaceBetween: 25,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 1.2,

            },
            768: {
                slidesPerView: 2.2,

            },
            920: {
                slidesPerView: 3.2,

            }, 
            1200: {
                slidesPerView: 4,
            }
        }
    })

    const catalogSlider = new Swiper('.catalog__slider-swiper', {
        spaceBetween: 25,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 2.5,

            }, 
            1200: {
                slidesPerView: 4,
            }
        }
    })

    const aboutSlider = new Swiper(".about__slider-swiper", {
        spaceBetween: 25,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 1.5,
            }, 
            768: {
                slidesPerView: 2.5,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    })

    const partnersSlider = new Swiper('.partners__slider-swiper', {
        spaceBetween: 25,
        breakpoints: {
            1: {
                slidesPerView: 2,
            },
            560: {
                slidesPerView: 3,
            },
            920: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 6,
            }
        }
    })

    const feedbackSlider = new Swiper('.feedback__slider-swiper', {
        spaceBetween: 25,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 1,
            },
            820: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    })
})