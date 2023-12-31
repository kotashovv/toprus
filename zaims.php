<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="assets/libs/cdn.jsdelivr.net_npm_swiper@10.3.1_swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>TopRus | Project</title>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="container">
          <div class="row header__top">
            <div class="header__title">
              <a href="#">
                <img src="assets/imgs/Image.png" alt="" />
                <span> Независимый рейтинг кредитов и микрозаймов России </span>
              </a>
            </div>
            <div class="header__money">
              <div class="text">
                <span> Курс биржи: </span>
              </div>
              <div class="items">
                <div class="item">
                  <img src="assets/imgs/usa.png" alt="" />
                  <span class="money_up"> USD 90,1757 </span>
                </div>
                <div class="item">
                  <img src="assets/imgs/euro.png" alt="" />
                  <span class="money_down"> EUR 100,1688 </span>
                </div>
              </div>
            </div>
            <div class="header__action">
              <a class="main-btn trans-btn" href="#"> Подобрать кредит </a>
            </div>
          </div>
          <div class="row header__bot">
            <div class="header__title header__mobile-title">
              <a href="#">
                <img src="assets/imgs/Image.png" alt="" />
                <span> Независимый рейтинг кредитов и микрозаймов России </span>
              </a>
            </div>
            <nav class="header__nav">
              <ul>
                <li>
                  <a href="#">Займы</a>
                </li>
                <li>
                  <a href="#">Карты</a>
                </li>
                <li>
                  <a href="#">Кредиты</a>
                </li>
                <li>
                  <a href="#">Ипотека</a>
                </li>
                <li>
                  <a href="#">Бизнесу</a>
                </li>
                <li>
                  <a href="#">Банки</a>
                </li>
                <li>
                  <a href="#">Вклады</a>
                </li>
                <li>
                  <a href="#">Страхование</a>
                </li>
              </ul>
            </nav>
            <div class="header__btns">
              <button class="location-btn">
                <img src="assets/imgs/location.png" alt="" />
              </button>
              <button class="search-btn">
                <img src="assets/imgs/search.png" alt="" />
              </button>
            </div>
            <div class="header__mobile-menu-btn">
              <button class="burger-btn">
                <span></span>
              </button>
            </div>
          </div>
          <div class="row header__search-form">
            <form
              role="search"
              method="get"
              class="search-form"
              action="<?php echo esc_url(home_url('/')); ?>"
            >
              <label>
                <input placeholder="Поиск по сайту" type="search">
                <button type="submit" class="search-btn-action"><img src="assets/imgs/search-white.svg" alt=""></button>
              </label>
            </form>
            <div id="search-results"></div>
          </div>
        </div>
        <div class="header__mobile-menu">
          <button class="close-menu"></button>
          <nav class="mobile-menu__nav">
            <ul>
              <li>
                <a href="#">Займы</a>
              </li>
              <li>
                <a href="#">Карты</a>
              </li>
              <li>
                <a href="#">Кредиты</a>
              </li>
              <li>
                <a href="#">Ипотека</a>
              </li>
              <li>
                <a href="#">Бизнесу</a>
              </li>
              <li>
                <a href="#">Банки</a>
              </li>
              <li>
                <a href="#">Вклады</a>
              </li>
              <li>
                <a href="#">Страхование</a>
              </li>
              <li>
                <a href="#">Курсы валют</a>
              </li>
              <li>
                <a href="#">Новости</a>
              </li>
              <li>
                <a href="#">Статьи</a>
              </li>
              <li>
                <a href="#">Рейтинги</a>
              </li>
              <li>
                <a href="#">Отзывы</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header__location-pop">
          <div class="header__location-body">
            <button class="close-btn close-location"></button>
            <div class="location__header">
              <span class="current-city"> Ваш город </span>
            </div>
            <div class="location__search">
              <input
                id="cityInput"
                type="text"
                placeholder="Введите название города"
              />
              <ul id="suggestions"></ul>
            </div>

            <div class="location__list">
              <ul class="location__list-item">
                <li>Волгоград</li>
                <li>Воронеж</li>
                <li>Екатеринбург</li>
                <li>Казань</li>
                <li>Краснодар</li>
                <li>Красноярск</li>
                <li>Москва</li>
                <li>Нижний Новгород</li>
                <li>Омск</li>
                <li>Новосибирск</li>
                <li>Пермь</li>
                <li>Ростов-на-Дону</li>
                <li>Санкт-Петербург</li>
                <li>Челябинск</li>
                <li>Самара</li>
                <li>Уфа</li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <main class="main for-zaims">
        <div class="black-modal"></div>
        <div class="container">
            <div class="breadcrumbs">
                <a href="#">Главная</a>
                <a href="#">Займы</a>
            </div>
        </div>
        <div class="section-title">
            <div class="container">
                <h1>
                    ЗАЙМЫ
                </h1>
            </div>
        </div>
        <div class="wrap-body">
            <div class="container">
                <div class="content">
                    <div class="form-filter">
                        <div class="form__tabs">
                            <button class="form__item active">
                                Все
                            </button>
                            <button class="form__item">
                                На карту
                            </button>
                            <button class="form__item">
                                Без СНИЛС и ИНН
                            </button>
                            <button class="form__item">
                                100% одобрение
                            </button>
                            <button class="form__item">
                                С моментальным одобрением
                            </button>
                            
                            <button class="form__item">
                                Показать все
                            </button>
                            
                        </div>
                        <div class="form-body">
                            <form action="#">
                                <label>
                                    <span>Я ищу</span>
                                    <input placeholder="сумма" type="text">
                                </label>
                                <label>
                                    <span>Срок</span>
                                    <input placeholder="Любой" type="text">
                                </label>
                                <label>
                                    <button class="setting-btn">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23" fill="none">
                                        <g clip-path="url(#clip0_440_11145)">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1283 3.46366H21.9302C22.6227 3.46366 23.1841 4.03333 23.1841 4.73603C23.1841 5.43872 22.6227 6.00838 21.9302 6.00838H10.1283C9.61067 7.4893 8.21691 8.55309 6.58225 8.55309C4.9476 8.55309 3.55379 7.4893 3.03617 6.00838H1.26564C0.573123 6.00838 0.0117188 5.43872 0.0117188 4.73603C0.0117188 4.03333 0.573123 3.46366 1.26564 3.46366H3.03617C3.55383 1.98274 4.9476 0.918945 6.58225 0.918945C8.21691 0.918945 9.61067 1.98274 10.1283 3.46366ZM5.32961 4.73657C5.32961 5.43815 5.89211 6.00894 6.58352 6.00894C7.27493 6.00894 7.83744 5.43815 7.83744 4.73657C7.83744 4.03499 7.27493 3.46421 6.58352 3.46421C5.89211 3.46421 5.32961 4.03499 5.32961 4.73657ZM10.1283 17.7142H21.9302C22.6227 17.7142 23.1841 18.2839 23.1841 18.9866C23.1841 19.6894 22.6227 20.2589 21.9302 20.2589H10.1283C9.61067 21.7399 8.21691 22.8037 6.58225 22.8037C4.9476 22.8037 3.55379 21.7399 3.03617 20.2589H1.26564C0.573123 20.2589 0.0117188 19.6894 0.0117188 18.9866C0.0117188 18.2839 0.573123 17.7142 1.26564 17.7142H3.03617C3.55383 16.2334 4.9476 15.1696 6.58225 15.1696C8.21691 15.1696 9.61071 16.2334 10.1283 17.7142ZM5.32961 18.9869C5.32961 19.6884 5.89211 20.2592 6.58352 20.2592C7.27493 20.2592 7.83744 19.6884 7.83744 18.9869C7.83744 18.2852 7.27493 17.7145 6.58352 17.7145C5.89211 17.7145 5.32961 18.2852 5.32961 18.9869ZM21.9302 10.5891H20.1597C19.642 9.10812 18.2483 8.04433 16.6136 8.04433C14.9789 8.04433 13.5852 9.10812 13.0675 10.5891H1.26564C0.573123 10.5891 0.0117188 11.1587 0.0117188 11.8614C0.0117188 12.5641 0.573123 13.1338 1.26564 13.1338H13.0675C13.5851 14.6147 14.9789 15.6784 16.6136 15.6784C18.2483 15.6784 19.642 14.6147 20.1597 13.1338H21.9302C22.6227 13.1338 23.1841 12.5641 23.1841 11.8614C23.1841 11.1587 22.6227 10.5891 21.9302 10.5891ZM16.6148 13.134C15.9234 13.134 15.3608 12.5632 15.3608 11.8616C15.3608 11.16 15.9234 10.5893 16.6148 10.5893C17.3062 10.5893 17.8687 11.16 17.8687 11.8616C17.8687 12.5632 17.3062 13.134 16.6148 13.134Z" />
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_440_11145">
                                            <rect width="24" height="23" fill="white"/>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    </button>
                                </label>
                                <label>
                                    <button class="main-btn blue-btn">Показать предложения</button>
                                </label>
                             </form>
                             <div class="items">
                                <ul>
                                    <li>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.521 8.904 12.713 8.712C12.905 8.52 13.0007 8.28267 13 8C13 7.71667 12.904 7.479 12.712 7.287C12.52 7.095 12.2827 6.99933 12 7C11.7167 7 11.479 7.096 11.287 7.288C11.095 7.48 10.9993 7.71733 11 8C11 8.28333 11.096 8.521 11.288 8.713C11.48 8.905 11.7173 9.00067 12 9ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="black"/>
                                        </svg><span>Информация о рекламодателях </span>
                                    </li>
                                    <li>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.521 8.904 12.713 8.712C12.905 8.52 13.0007 8.28267 13 8C13 7.71667 12.904 7.479 12.712 7.287C12.52 7.095 12.2827 6.99933 12 7C11.7167 7 11.479 7.096 11.287 7.288C11.095 7.48 10.9993 7.71733 11 8C11 8.28333 11.096 8.521 11.288 8.713C11.48 8.905 11.7173 9.00067 12 9ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="black"/>
                                        </svg><span>2 000 000 пользователей в месяц</span>
                                    </li>
                                    <li>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11 17H13V11H11V17ZM12 9C12.2833 9 12.521 8.904 12.713 8.712C12.905 8.52 13.0007 8.28267 13 8C13 7.71667 12.904 7.479 12.712 7.287C12.52 7.095 12.2827 6.99933 12 7C11.7167 7 11.479 7.096 11.287 7.288C11.095 7.48 10.9993 7.71733 11 8C11 8.28333 11.096 8.521 11.288 8.713C11.48 8.905 11.7173 9.00067 12 9ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6867 5.825 19.9743 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26333 14.6833 2.00067 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31333 6.88333 4.02567 5.825 4.925 4.925C5.825 4.025 6.88333 3.31267 8.1 2.788C9.31667 2.26333 10.6167 2.00067 12 2C13.3833 2 14.6833 2.26267 15.9 2.788C17.1167 3.31333 18.175 4.02567 19.075 4.925C19.975 5.825 20.6877 6.88333 21.213 8.1C21.7383 9.31667 22.0007 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6867 17.1167 19.9743 18.175 19.075 19.075C18.175 19.975 17.1167 20.6877 15.9 21.213C14.6833 21.7383 13.3833 22.0007 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" fill="black"/>
                                        </svg><span>1000+ предложений в каталоге</span>
                                    </li>
                                </ul>
                             </div>
                        </div>
                    </div>
                    <section class="allitems">
                      <div class="allitems__sort">
                        <span>
                          Сортировать:
                        </span>
                        <button class="active sort-btn">
                          по рейтингу
                        </button>
                        <button class="sort-btn">
                          по сумме
                        </button>
                        <button class="sort-btn">
                          по сроку
                        </button>
                        <button class="sort-btn">
                          по процентной ставке
                        </button>
                      </div>
                      <div class="allitems__body">
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                      </div>
                      <div class="more-btn">
                        <button class="main-btn blue-btn">
                          Показать ещё
                        </button>
                      </div>
                    </section>
                    <section class="bester">
                      <div class="bester__title">
                        <h2>
                          Лучшие предложения
                        </h2>
                      </div>
                       <div class="allitems__body">
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                        <article class="allitems__item">
                          <a href="#" class="allitems__item-head">
                              <div class="img">
                                <img src="assets/imgs/prod.png" alt="">
                              </div> 
                              <div class="name">
                                <h2>
                                  Веб-Займ
                                </h2>
                              </div>
                          </a>
                          <div class="rating">
                            <div class="stars stars-4">
                            </div>
                            <div class="valuble">
                              <span>5.0</span>
                              <a href="#">(12 отзывов)</a>
                            </div>
                          </div>
                          <div class="params">
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p1.png" alt="">
                              </div>
                              <div class="text">
                                <span>Срок</span>
                                <span>5 - 30 Дней</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p2.png" alt="">
                              </div>
                              <div class="text">
                                <span>Ставка в день</span>
                                <span>1,15 %</span>
                              </div>
                            </div>
                            <div class="param">
                              <div class="img">
                                <img src="assets/imgs/p3.png" alt="">
                              </div>
                              <div class="text">
                                <span>Сумма</span>
                                <span>1 500 ₽ — 30 000 ₽</span>
                              </div>
                            </div>
                          </div>
                          <div class="action">
                            <a class="main-btn blue-btn" href="#">
                              Оформить
                            </a>
                          </div>
                        </article>
                      </div>
                      <div class="more-btn">
                        <a class="main-btn white-btn" href="#">Показать ещё</a>
                      </div>
                    </section>

                    <section class="about about-small">
                      <div class="about__title">
                        <h2>О нашем сервисе</h2>
                      </div>
                      <div class="about__slider">
                        <div class="about__slider-swiper-small swiper">
                          <div class="about__slider-wrapper swiper-wrapper">
                            <article class="about__slider-slide swiper-slide">
                              <div class="img">
                                <img src="assets/imgs/a1.png" alt="" />
                              </div>
                              <div class="text">
                                <h3>ТопРусКредит — не банк</h3>
                                <p>
                                  Мы не выдаем кредиты и карты. Данный сервис создан чтобы
                                  помочь вам найти и сравнить самые выгодные условия по
                                  финансовым продуктам банков
                                </p>
                              </div>
                            </article>
                            <article class="about__slider-slide swiper-slide">
                              <div class="img">
                                <img src="assets/imgs/a2.png" alt="" />
                              </div>
                              <div class="text">
                                <h3>Независимый сервис сравнения</h3>
                                <p>
                                  Мы не принадлежим ни одному банку, полностью сводобны и
                                  предоставляем честное мнение для наших посетителей. Наш
                                  контент объективен и непредвзят
                                </p>
                              </div>
                            </article>
                            <article class="about__slider-slide swiper-slide">
                              <div class="img">
                                <img src="assets/imgs/a3.png" alt="" />
                              </div>
                              <div class="text">
                                <h3>Бесплатное использование</h3>
                                <p>
                                  Мы не берем с вас деньги за свои услуги, вся информация
                                  бесплатна. ТопРусКредит — это рекламно-поддерживаемый
                                  сервис с партнёрскими ссылками
                                </p>
                              </div>
                            </article>
                          </div>
                        </div>
                        <div class="dop-slide">
                          <div class="img">
                            <img src="assets/imgs/zaims-img.png" alt="">
                          </div>
                          <div class="text">
                            <h3>
                              Займы
                            </h3>
                            <span>
                              Люди активно используют кредитные продукты для удовлетворения потребностей. Кто-то оформляет заем для приобретения недвижимости или дорогостоящего актива, а кто-то берет в долг до зарплаты. Правила одни: вовремя и с процентами погасить задолженность, не портя кредитную историю и не уплачивая огромные проценты. При нарушении условий договора нужно оплатить пеню, штраф, неустойку. Иногда придется отстаивать свои интересы в суде. Но если грамотно использовать подобный финансовый продукт, можно даже сэкономить. Время обесценивает деньги, а с учетом постоянного роста цен, выгодно подобранная ставка решает проблему.
                            </span>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section class="feedback feedback-small">
                      <div class="feedback__title">
                        <h2>Отзывы</h2>
                          <a href="#"> Читать все отзывы → </a>
                      </div>
                      <div class="feedback__slider feedback-small">
                        <div class="feedback__slider-swiper-small swiper">
                          <div class="feedback__slider-wrapper swiper-wrapper">
                            <article class="feedback__slider-slide swiper-slide">
                              <div class="name">
                                <p>Отзыв о Веб-займ</p>
                              </div>
                              <div class="raiting">
                                <div class="stars stars-5"></div>
                                <div class="value">5.0</div>
                              </div>
                              <div class="text">
                                <p>
                                  Веб-займ предоставляет услуги быстрых микрозаймов,
                                  которые мне очень удобны. Процесс получения займа
                                  довольно прост и быстр. Я могу легко подать заявку
                                  онлайн, а затем получить одобрение и деньги на свой
                                  банковский счет в течение нескольких часов.
                                </p>
                              </div>
                              <div class="date">
                                <span> 18 июля 2023 г. </span>
                              </div>
                            </article>
                            <article class="feedback__slider-slide swiper-slide">
                              <div class="name">
                                <p>Отзыв о Веб-займ</p>
                              </div>
                              <div class="raiting">
                                <div class="stars stars-5"></div>
                                <div class="value">5.0</div>
                              </div>
                              <div class="text">
                                <p>
                                  Веб-займ предоставляет услуги быстрых микрозаймов,
                                  которые мне очень удобны. Процесс получения займа
                                  довольно прост и быстр. Я могу легко подать заявку
                                  онлайн, а затем получить одобрение и деньги на свой
                                  банковский счет в течение нескольких часов.
                                </p>
                              </div>
                              <div class="date">
                                <span> 18 июля 2023 г. </span>
                              </div>
                            </article>
                            <article class="feedback__slider-slide swiper-slide">
                              <div class="name">
                                <p>Отзыв о Веб-займ</p>
                              </div>
                              <div class="raiting">
                                <div class="stars stars-5"></div>
                                <div class="value">5.0</div>
                              </div>
                              <div class="text">
                                <p>
                                  Веб-займ предоставляет услуги быстрых микрозаймов,
                                  которые мне очень удобны. Процесс получения займа
                                  довольно прост и быстр. Я могу легко подать заявку
                                  онлайн, а затем получить одобрение и деньги на свой
                                  банковский счет в течение нескольких часов.
                                </p>
                              </div>
                              <div class="date">
                                <span> 18 июля 2023 г. </span>
                              </div>
                            </article>
                            <article class="feedback__slider-slide swiper-slide">
                              <div class="name">
                                <p>Отзыв о Веб-займ</p>
                              </div>
                              <div class="raiting">
                                <div class="stars stars-5"></div>
                                <div class="value">5.0</div>
                              </div>
                              <div class="text">
                                <p>
                                  Веб-займ предоставляет услуги быстрых микрозаймов,
                                  которые мне очень удобны. Процесс получения займа
                                  довольно прост и быстр. Я могу легко подать заявку
                                  онлайн, а затем получить одобрение и деньги на свой
                                  банковский счет в течение нескольких часов.
                                </p>
                              </div>
                              <div class="date">
                                <span> 18 июля 2023 г. </span>
                              </div>
                            </article>
                          </div>
                        </div>
                        <div class="feedback__navigation">
                          <button class="feedback__prev"><img src="assets/imgs/arrow-slider.png" alt=""></button>
                          <button class="feedback__next"><img src="assets/imgs/arrow-slider.png" alt=""></button>
                        </div>

                      </div>
                    </section>

                    <section class="paragraph">
                      <div class="paragraph__title">
                        <h2>
                          Займ или кредит - разница
                        </h2>
                      </div>
                      <div class="paragraph__text">
                        <p>
                          На рынке есть два крупных игрока кредитного рынка:
                          <ul>
                            <li>
                              Банки. Финансовые учреждения, имеющие лицензию. Всю работу осуществляют исключительно под контролем Центробанка. Обслуживают физических и юридических лиц. Предлагают, как кредиты, так и депозиты, расчетно-кассовое обслуживание, инвестирование. Это крупные компании, имеющие огромный учредительный фонд.     
                            </li>
                            <li>
                              Микрофинансовые компании (МКК). Небольшие фирмы, которые часто не имеют офлайн офисов. Их работа реализуется через специальные сервисы онлайн кредитования. Большинство клиентов – простые люди. Иногда услугами подобных МФО пользуются небольшие ИП, ООО. В спектре услуг – кредитование. Они не предлагают расчетно-кассовое обслуживание, крупное кредитование (ипотека, автокредит). Также они не являются игроками инвестиционного рынка.
                            </li>
                          </ul>
                          Так вот займы выдают именно микрофинансовые организации. Они специализируются на таких услугах, а банки расширяют кредитный портфель за счет иных опций.
                          Займ – это кредитная услуга, предоставляемая в большинстве случаев МФО на кратковременной основе и в небольшой сумме. Только небольшая часть банков готова выдавать займы через интернет. И то опция доступна для постоянных клиентов, которые прошли проверку.
                        </p>
                      </div>
                      <div class="paragraph__hide-text">
                        <h3>
В чем же разница?
                        </h3>
                        <p>
                          Принципиальные отличия займа:
                          <ul>
                            <li>
                              выдается в онлайн формате без посещения отделения учреждения. Для подачи заявки достаточно иметь мобильный телефон, интернет и паспорт. Воспользоваться предложением можно 24 часа в сутки. Небольшая часть МФО имеет офисы. И если у заемщика нет банковской карты или электронного кошелька, он может прийти лично. 
                            </li>
                            <li>
                              оперативность предоставления средств. Банки могут проверять заявку до 5 рабочих дней. Займы выдаются или мгновенно, или в течение часа. Сервисы проверяют личность через интернет. Частая практика – с использованием авторизации через портал Госуслуги. Взять деньги можно моментально и круглосуточно без поручителей и залога, дополнительных страховок.
                            </li>
                            <li>
                              лояльность политики кредитования. Банки часто отказывают в выдаче заемных средств. Причин несколько: плохая КИ, низкая платежеспособность, высокий лимит. МФО устанавливают минимальные требования для населения. Вероятность положительного ответа – до 98%.
                            </li>
                            <li>
                              выгодные условия кредитования. Для новых клиентов организации предлагают нулевые ставки. Занять средства можно бесплатно. Переплата отсутствует. Если у заемщика нет денег вовремя погасить онлайн кредит, он может оформить рассрочку.
                            </li>
                          </ul>
                          Вывод: микрозаймы – это упрощенная форма кредита, которую можно оформить через интернет за считанные минуты большей части населения без отказа.
                        </p>
                      </div>
                      <div class="paragraph__action">
                        <button class="main-btn blue-btn paragraph-more">Показать ещё </button>
                      </div>
                      
                    </section>
                    

                    <section class="faq">
                      <div class="faq__title">
                        <h2>
                          Ответы на вопросы
                        </h2>
                      </div>
                      <div class="faq__items">
                        <div class="faq__item">
                          <button class="faq__btn">
                            На какие цели можно оформить займ?
                          </button>
                          <div class="faq__text">
                            <p>
                              Кредитование, как правило, имеет целевой характер. Деньги выдают на покупку техники, оплату образования, ремонта. Ипотеку или автокредит оформляют под залог недвижимости или транспортного средства. Выдача займа не имеет целевого характера. Кредит можно получить наличными без дополнительного подтверждения цели использования.
                            </p>
                          </div>
                        </div>
                        <div class="faq__item">
                          <button class="faq__btn">
                            Какие документы необходимы
                          </button>
                          <div class="faq__text">
                            <p>
                              Кредитование, как правило, имеет целевой характер. Деньги выдают на покупку техники, оплату образования, ремонта. Ипотеку или автокредит оформляют под залог недвижимости или транспортного средства. Выдача займа не имеет целевого характера. Кредит можно получить наличными без дополнительного подтверждения цели использования.
                            </p>
                          </div>
                        </div>
                        <div class="faq__item">
                          <button class="faq__btn">
                            Какие документы необходимы
                          </button>
                          <div class="faq__text">
                            <p>
                              Кредитование, как правило, имеет целевой характер. Деньги выдают на покупку техники, оплату образования, ремонта. Ипотеку или автокредит оформляют под залог недвижимости или транспортного средства. Выдача займа не имеет целевого характера. Кредит можно получить наличными без дополнительного подтверждения цели использования.
                            </p>
                          </div>
                        </div>
                        <div class="faq__item">
                          <button class="faq__btn">
                            Какие документы необходимы
                          </button>
                          <div class="faq__text">
                            <p>
                              Кредитование, как правило, имеет целевой характер. Деньги выдают на покупку техники, оплату образования, ремонта. Ипотеку или автокредит оформляют под залог недвижимости или транспортного средства. Выдача займа не имеет целевого характера. Кредит можно получить наличными без дополнительного подтверждения цели использования.
                            </p>
                          </div>
                        </div>
                      </div>
                    </section>

                    <section class="papers-small">
                      <div class="papers__title">
                        <h2>
                          Финансовые новости
                        </h2>
                        <a href="#">
                          Читать больше новостей → 
                        </a>
                      </div>
                      <div class="papers__slider-swiper-small swiper">
                        <div class="papers__slider-wrapper swiper-wrapper">
                          <a class="papers__slider-slide swiper-slide" href="#">
                            <div class="img">
                              <img src="assets/imgs/paper1.png" alt="" />
                            </div>
                            <div class="text">
                              <span class="date"> 14 августа 2023 г. </span>
                              <p class="papers-name">
                                Pocт ипoтeчнoгo кpeдитoвaния coxpaняeтcя тpeтий мecяц
                                пoдpяд
                              </p>
                            </div>
                          </a>
                          <a class="papers__slider-slide swiper-slide" href="#">
                            <div class="img">
                              <img src="assets/imgs/paper1.png" alt="" />
                            </div>
                            <div class="text">
                              <span class="date"> 14 августа 2023 г. </span>
                              <p class="papers-name">
                                Pocт ипoтeчнoгo кpeдитoвaния coxpaняeтcя тpeтий мecяц
                                пoдpяд
                              </p>
                            </div>
                          </a>
                          <a class="papers__slider-slide swiper-slide" href="#">
                            <div class="img">
                              <img src="assets/imgs/paper1.png" alt="" />
                            </div>
                            <div class="text">
                              <span class="date"> 14 августа 2023 г. </span>
                              <p class="papers-name">
                                Pocт ипoтeчнoгo кpeдитoвaния coxpaняeтcя тpeтий мecяц
                                пoдpяд
                              </p>
                            </div>
                          </a>
                          <a class="papers__slider-slide swiper-slide" href="#">
                            <div class="img">
                              <img src="assets/imgs/paper1.png" alt="" />
                            </div>
                            <div class="text">
                              <span class="date"> 14 августа 2023 г. </span>
                              <p class="papers-name">
                                Pocт ипoтeчнoгo кpeдитoвaния coxpaняeтcя тpeтий мecяц
                                пoдpяд
                              </p>
                            </div>
                          </a>
                          <a class="papers__slider-slide swiper-slide" href="#">
                            <div class="img">
                              <img src="assets/imgs/paper1.png" alt="" />
                            </div>
                            <div class="text">
                              <span class="date"> 14 августа 2023 г. </span>
                              <p class="papers-name">
                                Pocт ипoтeчнoгo кpeдитoвaния coxpaняeтcя тpeтий мecяц
                                пoдpяд
                              </p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </section>

                    <section class="quest">
                      <div class="quest__item">
                        <div class="text">
                          <p>
                            Не можете выбрать или есть вопросы?
                          </p>
                          <p>
                            Мы можем провести для вас бесплатную консультацию!
                          </p>
                          <a class="main-btn blue-btn" href="#">
                            Оставить заявку в VK
                          </a>
                        </div>
                        <div class="img">
                          <img src="assets/imgs/quest-img.svg" alt="">
                        </div>
                      </div>
                      <a class="main-btn trans-btn" href="#">
                        Подобрать кредит
                      </a>
                    </section>

                </div>
                <div class="sidebar">
                  <div class="chart">
                    <div class="chart__title">
                      <h2>
                        рейтинг МФО
                      </h2>
                    </div>
                    <div class="chart__list">
                      <ul>
                        <li>
                          <a class="top-chart" href="#">
                            Займер
                          </a>
                        </li>
                        <li>
                          <a class="" href="#">
                            Веб-Займ
                          </a>
                        </li>
                        <li>
                          <a class="bot-chart" href="#">
                            МигКредит
                          </a>
                        </li>
                        <li>
                          <a class="" href="#">
                            Е-капуста
                          </a>
                        </li>
                        <li>
                          <a class="bot-chart" href="#">
                            Webbankir
                          </a>
                        </li>
                        <li>
                          <a class="top-chart" href="#">
                            MoneyMan
                          </a>
                        </li>
                        <li>
                          <a class="" href="#">
                            Быстроденьги
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="sidebar-filter">
                    <div class="filter-items">
                      <p>
                        Категория заемщика
                      </p>
                      <button data-filter="bezrab" class="btn-filter">
                        Безработным
                      </button> 
                      <button data-filter="pens" class="btn-filter">
                        Пенсионерам
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Студентам
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Бизнес
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Домохозяйкам
                      </button> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="6" viewBox="0 0 38 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="19" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="35" cy="3" r="3" fill="#507BE9"/>
                      </svg>
                    </div>
                    <div class="filter-items">
                      <p>
                        Срок займа
                      </p>
                      <button data-filter="bezrab" class="btn-filter">
                        Любой
                      </button> 
                      <button data-filter="pens" class="btn-filter">
                        1 день
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        2 дня
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        3 дня
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        5 дней
                      </button> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="6" viewBox="0 0 38 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="19" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="35" cy="3" r="3" fill="#507BE9"/>
                      </svg>
                    </div>
                    <div class="filter-items">
                      <p>
                        Срок принятия решения
                      </p>
                      <button data-filter="bezrab" class="btn-filter">
                        Быстрый
                      </button> 
                      <button data-filter="pens" class="btn-filter">
                        За 5 минут
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Мгновенный
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Срочный
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Сразу
                      </button> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="6" viewBox="0 0 38 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="19" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="35" cy="3" r="3" fill="#507BE9"/>
                      </svg>
                    </div>
                    <div class="filter-items">
                      <p>
                        Способ получения
                      </p>
                      <button data-filter="bezrab" class="btn-filter">
                        На кошелек
                      </button> 
                      <button data-filter="pens" class="btn-filter">
                        На Яндекс Деньги
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        На Киви
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        На счет
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Наличными
                      </button> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="6" viewBox="0 0 38 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="19" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="35" cy="3" r="3" fill="#507BE9"/>
                      </svg>
                    </div>
                    <div class="filter-items">
                      <p>
                        Сумма займа
                      </p>
                      <button data-filter="bezrab" class="btn-filter">
                        100 рублей
                      </button> 
                      <button data-filter="pens" class="btn-filter">
                        500 рублей
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        1 000 рублей
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        2 0000 рублей
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        3 000 рублей
                      </button> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="6" viewBox="0 0 38 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="19" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="35" cy="3" r="3" fill="#507BE9"/>
                      </svg>
                    </div>
                    <div class="filter-items">
                      <p>
                        Условия
                      </p>
                      <button data-filter="bezrab" class="btn-filter">
                        Новые
                      </button> 
                      <button data-filter="pens" class="btn-filter">
                        Без поручителей
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Под залог
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        ПТС
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Без отказа
                      </button> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="6" viewBox="0 0 38 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="19" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="35" cy="3" r="3" fill="#507BE9"/>
                      </svg>
                    </div>
                    <div class="filter-items">
                      <p>
                        Процентная ставка
                      </p>
                      <button data-filter="bezrab" class="btn-filter">
                        Без процентов
                      </button> 
                      <button data-filter="pens" class="btn-filter">
                        0 процентов годовых
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        1 процент в день
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Выгодные
                      </button> 
                      <button data-filter="bezrab" class="btn-filter">
                        Низкие проценты
                      </button> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="6" viewBox="0 0 38 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="19" cy="3" r="3" fill="#507BE9"/>
                        <circle cx="35" cy="3" r="3" fill="#507BE9"/>
                      </svg>
                    </div>
                   
                  </div>
                </div>
            </div>
            
        </div>

      </main>

      <footer class="footer">
        <div class="container">
          <div class="footer__body">
            <div class="footer__title">
              <a href="#">
                <img src="assets/imgs/Image.png" alt="" />
                <div class="text">
                  <h2>Независимый рейтинг кредитов и микрозаймов России</h2>
                </div>
              </a>
              <div class="links">
                <a href="#">Пользовательское соглашение</a>
                <a href="#">Использование cookies</a>
                <a href="#">Политика конфиденциальности</a>
              </div>
            </div>
            <div class="footer__col">
              <p>Меню</p>
              <ul>
                <li>
                  <a href="#"> О сервисе </a>
                </li>
                <li>
                  <a href="#"> Перечень услуг </a>
                </li>
                <li>
                  <a href="#"> Отзывы о нас </a>
                </li>
                <li>
                  <a href="#"> Вакансии </a>
                </li>
                <li>
                  <a href="#"> Реклама </a>
                </li>
                <li>
                  <a href="#"> Наши эксперты </a>
                </li>
                <li>
                  <a href="#"> Карта сайта </a>
                </li>
              </ul>
            </div>
            <div class="footer__col">
              <p>Популярное</p>
              <ul>
                <li>
                  <a href="#"> Новости </a>
                </li>
                <li>
                  <a href="#"> Займы онлайн </a>
                </li>
                <li>
                  <a href="#"> Займы на карту </a>
                </li>
                <li>
                  <a href="#"> Курсы валют </a>
                </li>
              </ul>
            </div>
            <div class="footer__col">
              <p>Cоциальные сети</p>
              <ul>
                <li>
                  <a class="link-ico vk-ico" href="#"> ВКонтакте </a>
                </li>
                <li>
                  <a class="link-ico tg-ico" href="#"> Telegram </a>
                </li>
              </ul>
            </div>
            <div class="footer__col">
              <p>Контакты</p>
              <ul>
                <li>
                  <a class="link-ico phone-ico" href="#"> 8-800-123-24-55 </a>
                </li>
                <li>
                  <a class="link-ico email-ico" href="#">
                    info@topruscredit.ru
                  </a>
                </li>
                <li>
                  <span class="link-ico time-ico"> Пн-Вс: Круглосуточно </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer__copy">
            <div class="links">
              <a href="#">Пользовательское соглашение</a>
              <a href="#">Использование cookies</a>
              <a href="#">Политика конфиденциальности</a>
            </div>
            <span> @2023 ТопРусКредит </span>
          </div>
        </div>
      </footer>
    </div>
  </body>
  <script src="assets/libs/cdn.jsdelivr.net_npm_swiper@10.3.1_swiper-bundle.min.js"></script>
  <script src="js/app.js"></script>
</html>
