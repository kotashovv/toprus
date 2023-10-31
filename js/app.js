document.addEventListener('DOMContentLoaded', () => {

    const locationBtn = document.querySelector('.location-btn');
    const blackModal = document.querySelector('.black-modal')
    const closeLocationBtn = document.querySelector('.close-location');



    if (locationBtn) {

        const locationPopup = document.querySelector('.header__location-body');

        closeLocationBtn.addEventListener('click', () => {
            CloseLocationPopup();
        })

        locationBtn.addEventListener("click", (e) => {
            OpenLocationPopup();
        })

        function OpenLocationPopup() {
            locationPopup.classList.add('active');
            blackModal.classList.add('_active');

            const clickOutsideHandler = (e) => {
                if (!e.target.closest('.location-btn') && !e.target.closest('.header__location-body')) {
                    CloseLocationPopup();
                    document.removeEventListener('click', clickOutsideHandler, true);
                }
            };

            document.addEventListener('click', clickOutsideHandler, true);
        }

        function CloseLocationPopup() {
            locationPopup.classList.remove('active');
            blackModal.classList.remove('_active');
        }
    }

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
    const aboutSlidersmall = new Swiper(".about__slider-swiper-small", {
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
    const feedbackSliderSmall = new Swiper('.feedback__slider-swiper-small', {
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
                slidesPerView: 2,
            }
        }
    })

    const newSlider = new Swiper('.news__slider-swiper', {
        spaceBetween: 25,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 2,
            },
            920: {
                slidesPerView: 3,
            },
        }
    })
    const papersSlider = new Swiper('.papers__slider-swiper', {
        spaceBetween: 25,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 2,
            },
            920: {
                slidesPerView: 3,
            },
        }
    })
    const papersSliderSmall = new Swiper('.papers__slider-swiper-small', {
        spaceBetween: 25,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            560: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 1.5,
            },
            920: {
                slidesPerView: 2,
            },
        }
    })

    const burgerBtn = document.querySelector('.burger-btn');

    if (burgerBtn) {
        burgerBtn.addEventListener('click', () => {
            OpenMobileMenu();
        })
        const mobileMenu = document.querySelector('.header__mobile-menu');
        const closeBtn = document.querySelector('.close-menu');
        closeBtn.addEventListener('click', CloseModal);
        blackModal.addEventListener('click', CloseModal);

        function OpenMobileMenu() {
            if (mobileMenu) {
                mobileMenu.classList.add('_active');
                blackModal.classList.add('_active');
                document.body.style.overflow = 'hidden';
            }
        }

        function CloseModal() {
            mobileMenu.classList.remove('_active');
            blackModal.classList.remove('_active');
            document.body.style.overflow = 'auto';

        }
    }


    const cities = ['Волгоград',
        'Воронеж',
        'Екатеринбург',
        'Казань',
        'Краснодар',
        'Красноярск',
        'Москва',
        'Нижний Новгород',
        'Омск',
        'Новосибирск',
        'Пермь',
        'Ростов-на-Дону',
        'Санкт-Петербург',
        'Челябинск',
        'Самара',
        'Уфа',
    ];
    const cityInput = document.getElementById('cityInput');
    const suggestions = document.getElementById('suggestions');

    cityInput.addEventListener('input', function () {
        const inputText = cityInput.value.toLowerCase();
        const filteredCities = cities.filter(city => city.toLowerCase().includes(inputText));
        displaySuggestions(filteredCities);
    });

    function displaySuggestions(suggestionsArray) {
        suggestions.innerHTML = '';
        suggestionsArray.forEach(city => {
            const listItem = document.createElement('li');
            listItem.textContent = city;
            listItem.addEventListener('click', function () {
                cityInput.value = city;
                suggestions.innerHTML = '';
                ChangeCity(listItem.innerHTML)
            });
            suggestions.appendChild(listItem);
        });
    }

    document.addEventListener('click', function (e) {
        if (e.target !== cityInput && e.target !== suggestions) {
            suggestions.innerHTML = '';
        }
    });



    function ChangeCity(item) {
        const currentCity = document.querySelector('.current-city');
        currentCity.innerHTML = `Ваш город: ` + item;
        localStorage.setItem('city-user', item);
    }

    const listCitys = document.querySelectorAll('.location__list-item li');

    if (listCitys.length != 0) {
        listCitys.forEach(function (item) {
            item.addEventListener('click', (e) => {
                const nameCity = e.target.innerHTML;
                ChangeCity(nameCity);
                CloseLocationPopup();

            })
        })
    }
    const savedCity = localStorage.getItem('city-user');

    if (savedCity) {
        ChangeCity(savedCity);
    }

    const searchBtn = document.querySelector('.search-btn');

    if (searchBtn) {
        searchBtn.addEventListener('click', () => {
            OpenSearchForm();
        })

        function OpenSearchForm() {
            const headerBot = document.querySelector('.header__bot');
            headerBot.classList.add('hide');
            blackModal.classList.add('_active')
            const searchForm = document.querySelector('.header__search-form');
            searchForm.classList.add('active');
            document.addEventListener('click', (e)=>{
                if (!e.target.closest('.search-btn') && !e.target.closest('.header__search-form')) {
                    closeSearchForm();
                }
            });

        }


        function closeSearchForm() {
            const headerBot = document.querySelector('.header__bot');
            headerBot.classList.remove('hide');
            blackModal.classList.remove('_active');
            const searchForm = document.querySelector('.header__search-form');
            searchForm.classList.remove('active');
        }

        function closeSearchFormOnce(event) {
            const searchForm = document.querySelector('.header__search-form');

            if (!searchForm.contains(event.target)) {
                closeSearchForm();
            }
        }

    }

    const moreBtn = document.querySelector('.paragraph-more');

    if (moreBtn) {

        const hideText = document.querySelector('.paragraph__hide-text')
        moreBtn.addEventListener('click', (e)=>{
            if (e.target.classList.contains('active')) {
                hideText.classList.remove('active');
                e.target.classList.remove('active');
                e.target.innerHTML = 'Показать ещё';
            } else {
                hideText.classList.add('active');
                e.target.classList.add('active');
                e.target.innerHTML = 'Скрыть';
            }
        })
    }

    const faqBtns = document.querySelectorAll('.faq__btn');

    if (faqBtns.length != 0) {
        
        faqBtns.forEach(function(item){
            item.addEventListener('click', (e)=>{
                if (e.target.classList.contains('active')) {
                    ClosesFaq()
                } else {
                    OpenFaq(item);
                }
            })
        })

        const faqtext = document.querySelectorAll('.faq__text');

        function OpenFaq(item) {
            faqBtns.forEach((i)=>{
                i.classList.remove('active');
            })
            faqtext.forEach((i)=>{
                i.classList.remove('active');
            })
            item.classList.add('active');
            item.nextElementSibling.classList.add('active');
        }
        function ClosesFaq(item) {
            faqBtns.forEach((i)=>{
                i.classList.remove('active');
            })
            faqtext.forEach((i)=>{
                i.classList.remove('active');
            })
        }
    }
})