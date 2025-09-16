<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; url=https://personal-market.ru/basket.php">
    <title>Document</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Syle CSS -->
    <link rel="stylesheet" href="./assets/scss/style.css">
</head>
<body>
    
    <div class="wrapper">

        <!-- Header -->
        <header class="header">
            <div class="container header-container">
                <a href="/" class="header-logo">
                    <img src="./assets/images/logo.svg" alt="" class="header-logo__img">
                    <span class="header-logo__text">сервис №1 по подбору рабочего персонала </span>
                </a>
                <a href="#" class="header-location">
                    <img src="./assets/images/location-icon.svg" alt="">
                    <span>Москва</span>
                </a>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <a href="#" class="btn-black">
                            <span class="btn-text">Услуги</span>
                            <img src="./assets/images/btn-icon-2.svg" alt="" class="btn-icon">
                        </a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">физлицам</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">юрлицам</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">о нас</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#" class="header-nav__link">отзывы</a>
                    </li>
                </ul>
                <div class="header-contact">
                    <a href="tel:8 (800) 444-55-66" class="header-contact__link">8 (800) 444-55-66</a>
                    <p class="header-contact__text">8:00 - 22:00 без выходных</p>
                </div>
                <div class="header-network">
                    <a href="#" class="btn-yellow">
                        <img src="./assets/images/watsap-icon.svg" alt="">
                    </a>
                    <a href="#" class="btn-yellow">
                        <img src="./assets/images/telegram-icon.svg" alt="">
                    </a>
                    <a href="#" class="btn-dark">Обратный звонок</a>
                </div>
                <button class="header-bars btn-yellow">
                    <img src="./assets/images/bars.svg" alt="">
                    <img src="./assets/images/times.svg" alt="">
                </button>
            </div>
        </header>
        <!-- Header end -->

        <!-- Menu -->
        <section class="menu">
            <ul class="menu-nav">
                <li class="menu-nav__item">
                    <a href="#" class="btn-black">
                        <span class="btn-text">Услуги</span>
                        <img src="./assets/images/btn-icon-2.svg" alt="">
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="#" class="menu-nav__link">физлицам</a>
                </li>
                <li class="menu-nav__item">
                    <a href="#" class="menu-nav__link">юрлицам</a>
                </li>
                <li class="menu-nav__item">
                    <a href="#" class="menu-nav__link">о нас</a>
                </li>
                <li class="menu-nav__item">
                    <a href="#" class="menu-nav__link">отзывы</a>
                </li>
            </ul>
            <div class="menu-contact">
                <a href="tel:8 (800) 444-55-66" class="menu-contact__link">8 (800) 444-55-66</a>
                <p class="menu-contact__text">8:00 - 22:00 без выходных</p>
            </div>
            <div class="menu-network">
                <a href="#" class="btn-yellow">
                    <img src="./assets/images/watsap-icon.svg" alt="">
                </a>
                <a href="#" class="btn-yellow">
                    <img src="./assets/images/telegram-icon.svg" alt="">
                </a>
                <a href="#" class="btn-dark">Обратный звонок</a>
            </div>
        </section>
        <!-- Menu end -->
    
        <main>

            <!-- Basket -->
            <section class="basket">
                <img src="./assets/images/news-home-bg.png" alt="" class="basket-bg">
                <div class="container basket-container">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" class="breadcrumb-text">Главная</a>
                        </li>
                        <li>
                            <img src="./assets/images/breadcrumb-icon.svg" alt="">
                        </li>
                        <li>
                            <p class="breadcrumb-text text-grey">Корзина</p>
                        </li>
                    </ul>
                    <h1 class="text-h1">Моя корзина</h1>
                    <ul class="basket-card">
                        <li class="card">
                            <div class="card-id">Заказ №15459</div>
                            <div class="card-title">Грузчик в Москве круглосуточно на 1 час</div>
                            <ul class="card-data">
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-1.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Место: <b>г.Москва, ул.Баумана, 19</b> </p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-2.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Продложительность: <b>3 часа</b></p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-3.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Дата: <b>25 марта 2025г</b></p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-4.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Гендер: <b>Мужчина</b></p>
                                </li>
                            </ul>
                            <div class="alert alert-orange">Не оплачен</div>
                            <div class="card-price">
                                <div class="card-price__value">14 200 ₽</div>
                                <span>за 3 человека</span>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="btn-yellow">
                                    <span class="btn-text">Оплатить</span>
                                    <img src="./assets/images/play-icon.svg" alt="" class="btn-icon">
                                </a>
                            </div>
                        </li>
                        <li class="card">
                            <div class="card-id">Заказ №15459</div>
                            <div class="card-title">Грузчик в Москве круглосуточно на 1 час</div>
                            <ul class="card-data">
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-1.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Место: <b>г.Москва, ул.Баумана, 19</b> </p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-2.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Продложительность: <b>3 часа</b></p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-3.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Дата: <b>25 марта 2025г</b></p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-4.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Гендер: <b>Мужчина</b></p>
                                </li>
                            </ul>
                            <div class="alert alert-green">Оплачен</div>
                            <div class="card-price">
                                <div class="card-price__value">14 200 ₽</div>
                                <span>за 3 человека</span>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="btn-yellow">
                                    <span class="btn-text">Оплатить</span>
                                    <img src="./assets/images/play-icon.svg" alt="" class="btn-icon">
                                </a>
                            </div>
                        </li>
                        <li class="card">
                            <div class="card-id">Заказ №15459</div>
                            <div class="card-title">Грузчик в Москве круглосуточно на 1 час</div>
                            <ul class="card-data">
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-1.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Место: <b>г.Москва, ул.Баумана, 19</b> </p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-2.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Продложительность: <b>3 часа</b></p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-3.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Дата: <b>25 марта 2025г</b></p>
                                </li>
                                <li class="card-data__item">
                                    <div class="card-data__icon">
                                        <img src="./assets/images/card-data-icon-4.svg" alt="">
                                    </div>
                                    <p class="card-data__text">Гендер: <b>Мужчина</b></p>
                                </li>
                            </ul>
                            <div class="alert alert-grey">Выполнен</div>
                            <div class="card-price">
                                <div class="card-price__value">14 200 ₽</div>
                                <span>за 3 человека</span>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="btn-yellow">
                                    <span class="btn-text">Оплатить</span>
                                    <img src="./assets/images/play-icon.svg" alt="" class="btn-icon">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- Basket end -->

        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-left">
                        <a href="" class="footer-logo">
                            <img src="./assets/images/logo-light.svg" alt="">
                            <span>кадры решают все</span>
                        </a>
                        <div class="footer-title">Связаться</div>
                        <ul class="footer-contact__wrap">
                            <div class="footer-contact">
                                <div class="footer-contact__title">Узнать цену:</div>
                                <a href="tel:8 (800) 700-15-91" class="footer-contact__link">8 (800) 700-15-91</a>
                            </div>
                            <div class="footer-contact">
                                <div class="footer-contact__title">Для соискателей:</div>
                                <a href="tel:8 (800) 700-15-91" class="footer-contact__link">8 (800) 700-15-91</a>
                            </div>
                            <div class="footer-contact">
                                <div class="footer-contact__title">График работы:</div>
                                <div class="footer-contact__link">24/7 365 дней в году</div>
                            </div>
                            <div class="footer-contact">
                                <div class="footer-contact__title">Корпоративная почта</div>
                                <a href="mailto:info@personalmarket.ru" target="_blank" class="footer-contact__link">info@personalmarket.ru</a>
                            </div>
                            <div class="footer-contact">
                                <div class="footer-contact__title">Адрес</div>
                                <div class="footer-contact__link">115115, г.Москва, ул. Красная Площадь, <br> стр. 1, этаж1, офис 111</div>
                            </div>
                        </ul>
                        <ul class="footer-networks">
                            <li>
                                <a href="#" class="footer-networks__link">
                                    <img src="./assets/images/network-1.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer-networks__link">
                                    <img src="./assets/images/network-2.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer-networks__link">
                                    <img src="./assets/images/network-3.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer-networks__link">
                                    <img src="./assets/images/network-4.svg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-right">
                        <div class="footer-navs__wrap">
                            <div>
                                <h3 class="footer-title">
                                    <span>Аутсорсинг</span>
                                    <img src="./assets/images/play-icon-yellow.svg" alt="">
                                </h3>
                                <ul class="footer-navs">
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг персонала на склад</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг производственных процессов</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в ритейле</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в строительстве</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в сфере гостеприимства</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="footer-title">
                                    <span>Аутстаффинг</span>
                                    <img src="./assets/images/play-icon-yellow.svg" alt="">
                                </h3>
                                <ul class="footer-navs">
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутстаффинг на производство</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутстаффинг на сельскохоз предприятия</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в ритейле</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в строительстве</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Аутсорсинг в общественном питании</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-navs__wrap">
                            <div>
                                <h3 class="footer-title">
                                    <span>Услуги</span>
                                    <img src="./assets/images/play-icon-yellow.svg" alt="">
                                </h3>
                                <ul class="footer-navs">
                                    <li>
                                        <a href="#" class="footer-navs__link">Кадровое агентство</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Массовый подбор и рекрутинг</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Легализация и привоз иностранных рабочих</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Массовый подбор и рекрутинг</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Легализация и привоз иностранных рабочих</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="footer-title">
                                    <span>О нас</span>
                                    <img src="./assets/images/play-icon-yellow.svg" alt="">
                                </h3>
                                <ul class="footer-navs">
                                    <li>
                                        <a href="#" class="footer-navs__link">История компании</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Физическим лицам</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Юридическим лицам</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Контакты</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="footer-title">
                                    <span>Соискателям</span>
                                    <img src="./assets/images/play-icon-yellow.svg" alt="">
                                </h3>
                                <ul class="footer-navs">
                                    <li>
                                        <a href="#" class="footer-navs__link">Работа у нас</a>
                                    </li>
                                    <li>
                                        <a href="#" class="footer-navs__link">Найти подработку</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="footer-title">
                                    <span>Блог</span>
                                    <img src="./assets/images/play-icon-yellow.svg" alt="">
                                </h3>
                            </div>
                            <div>
                                <h3 class="footer-title">
                                    <span>Отзывы</span>
                                    <img src="./assets/images/play-icon-yellow.svg" alt="">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p class="footer-bottom__text">© 2025 г. «Персонал маркет». Все права защищены</p>
                    <a href="#" class="footer-bottom__text">Политика конфиденциальности</a>
                </div>
            </div>
        </footer>
        <!-- Footer end -->

    </div>

    <!-- iMask JS -->
    <script src="./assets/js/iMask.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JS file -->
    <script src="./assets/js/main.js"></script>

</body>
</html>