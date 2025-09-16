<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; url=https://personal-market.ru/spacific-service.php">
    <title>Document</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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

        <!-- modals -->
        <section class="modal service-modal">
            <div class="modal-bg">
                <img src="./assets/images/service-modal-bg.png" alt="">
            </div>
            <div class="modal-dialog__wrap">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-head">
                            <h2>Заказать услугу:</h2>
                            <button class="modal-close">
                                <img src="./assets/images/times.svg" alt="">
                            </button>
                        </div>
                        <div class="form-control">
                            <label for="" class="form-label">Ваше имя:</label>
                            <input type="text" placeholder="имя" class="form-inp">
                        </div>
                        <div class="form-wrap">
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="" class="form-label">Ваш телефон:</label>
                                    <input type="tel" placeholder="+7" class="form-inp">
                                </div>
                                <div class="form-control">
                                    <label for="" class="form-label">Ваш e-mail:</label>
                                    <input type="email" placeholder="Введите вашу почту" class="form-inp">
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="" class="form-label">На какую дату</label>
                                <div class="form-control__in">
                                    <input type="text" class="form-inp form-date" placeholder="__/__/____">
                                    <button class="btn-yellow">
                                        <img src="./assets/images/btn-icon-3.svg" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="" class="form-label">Город:</label>
                                    <input type="text" placeholder="Город" class="form-inp">
                                </div>
                                <div class="form-control">
                                    <label for="" class="form-label">Улица:</label>
                                    <input type="text" placeholder="Улица" class="form-inp">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="" class="form-label">№ дома:</label>
                                    <input type="text" placeholder="№ дома" class="form-inp">
                                </div>
                                <div class="form-control">
                                    <label for="" class="form-label">Корпус/литера:</label>
                                    <input type="text" placeholder="Корпус" class="form-inp">
                                </div>
                                <div class="form-control">
                                    <label for="" class="form-label">Квартира/офис:</label>
                                    <input type="text" placeholder="Квар./офис" class="form-inp">
                                </div>
                            </div>
                            <div class="form-contorl">
                                <label for="" class="form-label">Ваши пожелания и уточнения:</label>
                                <textarea name="" id="" placeholder="Ваш комментарий" class="form-inp textarea"></textarea>
                            </div>
                            <button class="btn-yellow">
                                <span class="btn-text">Отправить заявку</span>
                                <img src="./assets/images/play-icon.svg" alt="" class="btn-icon">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="modal callback-modal">
            <div class="modal-bg">
                <img src="./assets/images/service-modal-bg.png" alt="">
            </div>
            <div class="modal-dialog__wrap">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-head">
                            <h2>Обратный звонок</h2>
                            <button class="modal-close">
                                <img src="./assets/images/times.svg" alt="">
                            </button>
                        </div>
                        <div class="form-control">
                            <label for="" class="form-label">Ваше имя:</label>
                            <input type="text" placeholder="имя" class="form-inp">
                        </div>
                        <div class="form-control">
                            <label for="" class="form-label">Ваш телефон:</label>
                            <input type="tel" placeholder="+7" class="form-inp">
                        </div>
                        <button class="btn-yellow">
                            <span class="btn-text">Отправить заявку</span>
                            <img src="./assets/images/play-icon.svg" alt="" class="btn-icon">
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- modals end -->
    
        <main>

            <!-- Specific -->
            <section class="specific">
                <div class="container specific-container">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/" class="breadcrumb-text">Главная</a>
                        </li>
                        <li>
                            <img src="./assets/images/breadcrumb-icon.svg" alt="">
                        </li>
                        <li>
                            <a href="#" class="breadcrumb-text">Вакансии</a>
                        </li>
                        <li>
                            <img src="./assets/images/breadcrumb-icon.svg" alt="">
                        </li>
                        <li>
                            <a href="#" class="breadcrumb-text">Вакансии в Москве</a>
                        </li>
                        <li>
                            <img src="./assets/images/breadcrumb-icon.svg" alt="">
                        </li>
                        <li>
                            <a href="#" class="breadcrumb-text">Вакансии грузчиков в Москве</a>
                        </li>
                        <li>
                            <img src="./assets/images/breadcrumb-icon.svg" alt="">
                        </li>
                        <li>
                            <p class="breadcrumb-text text-grey">Вакансия грузчика в Москве круглосуточно на 1 час</p>
                        </li>
                    </ul>
                    <div class="specific-head">
                        <h2 class="text-h1">Услуга <span>грузчика</span> в&nbsp;Москве круглосуточно на 1 час</h2>
                        <img src="./assets/images/specific-main-img.png" alt="" class="main-img">
                        <ul class="specific-head__right">
                            <li class="specific-head__right-item">
                                <div class="icon">
                                    <img src="./assets/images/location.svg" alt="">
                                </div>
                                <p class="specific-head__right-text">Место: офис, в квартире, переезд </p>
                            </li>
                            <li class="specific-head__right-item">
                                <div class="icon">
                                    <img src="./assets/images/clock.svg" alt="">
                                </div>
                                <p class="specific-head__right-text">Продложительность: от 1 часа</p>
                            </li>
                            <li class="specific-head__right-item">
                                <div class="icon">
                                    <img src="./assets/images/gender.svg" alt="">
                                </div>
                                <p class="specific-head__right-text">Гендер: Мужчина</p>
                            </li>
                        </ul>
                    </div>
                    <div class="specific-foot">
                        <div class="specific-foot__left">
                            <img src="./assets/images/specific-main-img.png" alt="" class="main-img">
                            <ul class="job-foot">
                                <li class="job-foot__item">
                                    <img src="./assets/images/specific-foot-icon-1.svg" alt="">
                                    <div class="job-foot__text">Гарантия сохранности <br> груза</div>
                                </li>
                                <li class="job-foot__item">
                                    <img src="./assets/images/specific-foot-icon-2.svg" alt="">
                                    <div class="job-foot__text">Своевременный <br> приезд</div>
                                </li>
                                <li class="job-foot__item">
                                    <img src="./assets/images/specific-foot-icon-3.svg" alt="">
                                    <div class="job-foot__text">Опыт работы <br> от 8 лет</div>
                                </li>
                            </ul>
                        </div>
                        <div class="job-right">
                            <h3 class="job-right__title">Сколько я смогу зарабатывать:</h3>
                            <div class="form-group">
                                <label class="form-label">Кол-во часов в день:</label>
                                <ul class="form-radio__wrap">
                                    <li class="form-radio">
                                        <input type="radio" name="hours" id="">
                                        <div class="form-radio__text">1</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="hours" id="">
                                        <div class="form-radio__text">2</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="hours" id="">
                                        <div class="form-radio__text">3</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="hours" checked id="">
                                        <div class="form-radio__text">4</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="hours" id="">
                                        <div class="form-radio__text">5</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="hours" id="">
                                        <div class="form-radio__text">6</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="hours" id="">
                                        <div class="form-radio__text">7</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Нас колько часов:</label>
                                <ul class="form-radio__wrap">
                                    <li class="form-radio">
                                        <input type="radio" checked name="day" id="">
                                        <div class="form-radio__text">4</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="day" id="">
                                        <div class="form-radio__text">8</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="day" id="">
                                        <div class="form-radio__text">10</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="day" id="">
                                        <div class="form-radio__text">12</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="day" id="">
                                        <div class="form-radio__text">16</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="day" id="">
                                        <div class="form-radio__text">20</div>
                                    </li>
                                    <li class="form-radio">
                                        <input type="radio" name="day" id="">
                                        <div class="form-radio__text">24</div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="form-label">Рассчитать стоимость работ:</div>
                                <ul class="form-checkbox__wrap">
                                    <li class="form-checkbox">
                                        <input type="checkbox" checked name="" id="">
                                        <div class="form-checkbox__icon">
                                            <img src="./assets/images/check-icon.svg" alt="">
                                        </div>
                                        <div class="form-checkbox__text">Сколько грузчиков вам нужно:</div>
                                    </li>
                                    <li class="form-checkbox">
                                        <input type="checkbox" name="" id="">
                                        <div class="form-checkbox__icon">
                                            <img src="./assets/images/check-icon.svg" alt="">
                                        </div>
                                        <div class="form-checkbox__text">Нас колько часов:</div>
                                    </li>
                                    <li class="form-checkbox">
                                        <input type="checkbox" name="" id="">
                                        <div class="form-checkbox__icon">
                                            <img src="./assets/images/check-icon.svg" alt="">
                                        </div>
                                        <div class="form-checkbox__text">Пронос одного предмета до автомобиля</div>
                                    </li>
                                    <li class="form-checkbox">
                                        <input type="checkbox" name="" id="">
                                        <div class="form-checkbox__icon">
                                            <img src="./assets/images/check-icon.svg" alt="">
                                        </div>
                                        <div class="form-checkbox__text">Деликатная укладка в кузове</div>
                                    </li>
                                    <li class="form-checkbox">
                                        <input type="checkbox" name="" id="">
                                        <div class="form-checkbox__icon">
                                            <img src="./assets/images/check-icon.svg" alt="">
                                        </div>
                                        <div class="form-checkbox__text">Крупногабаритные предметы</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="job-right__price">Итого: 12 000</div>
                            <button class="btn-yellow">
                                <span class="btn-text">Заказать услугу</span>
                                <img src="./assets/images/play-icon.svg" alt="" class="btn-icon">
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Specific end -->

            <!-- Vacancy list -->
            <section class="vacancy-list">
                <div class="container vacancy-list__container">
                    <h3 class="vacancy-list__title">Вакансия грузчика в Москве круглосуточно на 1 час</h3>
                    <p class="vacancy-list__description">
                        есомненно на 100% можем Вам сказать, что на стоимость одного часа работы грузчика открыто влияет характер выполняемых работ. Если на заре прошлого века в обязанности грузчиков в основном входило лишь совершение погрузочно-разгрузочных мероприятий. То в настоящее время в перечне работ, выполняемых грузчиками числится внушительный список, в числе которого значится не только погрузка-выгрузка. Современный грузчик отличается своей многофункциональностью, обладает навыками сборщика мебели и упаковщика, может работать с бытовыми приборами и сложной техникой, в совершенстве владеет навыками такелажника. Именно поэтому стоимость 1 час работы грузчика в зависимости от типа выполняемых работ может варьироваться в диапазоне от 250 до 450 рублей. Если проводить параллели по оценке стоимости по данному критерию, то можно привести наглядный пример работы грузчиков по спуску легковесных коробок на грузовом лифте и подъему пианино вручную по этажам. Вполне логично, что стоимость 1 часа работы грузчиков будет отличаться ввиду отличительного характера выполняемых работ.
                    </p>
                    <a href="#" class="text-more">
                        <span>Показать статью</span>
                        <img src="./assets/images/play-blue-icon.svg" alt="">
                    </a>
                </div>
            </section>
            <!-- Vacancy list end -->

            <!-- About -->
            <section class="about vacancy-about">
                <div class="container">
                    <div class="text-subtitle">[ о нас говорят ]</div>
                    <h2 class="text-h2">Мы в СМИ</h2>
                    <div class="about-swp">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="about-card__wrap">
                                        <div class="about-card__video">
                                            <img src="./assets/images/about-card.png" alt="" class="main-img">
                                            <img src="./assets/images/about-card-icon.png" alt="" class="icon">
                                            <a href="#" class="play-btn btn-yellow">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.81663 1.6024C5.15385 1.13846 4.24316 1.61261 4.24316 2.42163V12.5803C4.24316 13.3893 5.15385 13.8635 5.81663 13.3996L13.0728 8.32021C13.6415 7.92211 13.6415 7.07985 13.0728 6.68174L5.81663 1.6024Z" fill="#0A0F24"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-1.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-2.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-card__wrap">
                                        <div class="about-card__video">
                                            <img src="./assets/images/about-card.png" alt="" class="main-img">
                                            <img src="./assets/images/about-card-icon.png" alt="" class="icon">
                                            <a href="#" class="play-btn btn-yellow">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.81663 1.6024C5.15385 1.13846 4.24316 1.61261 4.24316 2.42163V12.5803C4.24316 13.3893 5.15385 13.8635 5.81663 13.3996L13.0728 8.32021C13.6415 7.92211 13.6415 7.07985 13.0728 6.68174L5.81663 1.6024Z" fill="#0A0F24"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-1.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-2.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-card__wrap">
                                        <div class="about-card__video">
                                            <img src="./assets/images/about-card.png" alt="" class="main-img">
                                            <img src="./assets/images/about-card-icon.png" alt="" class="icon">
                                            <a href="#" class="play-btn btn-yellow">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.81663 1.6024C5.15385 1.13846 4.24316 1.61261 4.24316 2.42163V12.5803C4.24316 13.3893 5.15385 13.8635 5.81663 13.3996L13.0728 8.32021C13.6415 7.92211 13.6415 7.07985 13.0728 6.68174L5.81663 1.6024Z" fill="#0A0F24"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-1.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-2.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="about-card__wrap">
                                        <div class="about-card__video">
                                            <img src="./assets/images/about-card.png" alt="" class="main-img">
                                            <img src="./assets/images/about-card-icon.png" alt="" class="icon">
                                            <a href="#" class="play-btn btn-yellow">
                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.81663 1.6024C5.15385 1.13846 4.24316 1.61261 4.24316 2.42163V12.5803C4.24316 13.3893 5.15385 13.8635 5.81663 13.3996L13.0728 8.32021C13.6415 7.92211 13.6415 7.07985 13.0728 6.68174L5.81663 1.6024Z" fill="#0A0F24"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-1.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                        <div class="about-card">
                                            <div>
                                                <img src="./assets/images/about-logo-2.svg" alt="" class="logo">
                                                <h3 class="about-card__title">Автоматизация найма складского персонала <br> в г. Королев, Московской области</h3>
                                            </div>
                                            <a href="#" class="about-card__link">
                                                <span>Читать статью</span>
                                                <img src="./assets/images/play-blue-icon.svg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-swp__control">
                            <button class="swp-btn swp-btn__prev">
                                <img src="./assets/images/swp-prev.svg" alt="">
                            </button>
                            <div class="swp-fraction">
                                <span>1</span> / 23
                            </div>
                            <button class="swp-btn swp-btn__next">
                                <img src="./assets/images/swp-next.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About end -->

            <!-- Review -->
            <section class="review">
                <div class="container">
                    <div class="review-head">
                        <div>
                            <div class="text-subtitle">[ отзывы ]</div>
                            <h2 class="text-h2">Выбирайте «Персонал маркет»</h2>
                        </div>
                        <div class="review-swp__control">
                            <button class="swp-btn swp-btn__prev dark">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.58967 9.01928L11.4805 15.9101L12.9997 14.3909L7.6294 9.02066L12.9569 3.69319L11.4363 2.17264L4.58967 9.01928Z" fill="#ECF100"/>
                                </svg>
                            </button>
                            <div class="swp-fraction dark">
                                <span>1</span> / 23
                            </div>
                            <button class="swp-btn swp-btn__next dark">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4103 9.01928L6.5195 15.9101L5.00032 14.3909L10.3706 9.02066L5.04313 3.69319L6.56369 2.17264L13.4103 9.01928Z" fill="#242440"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="swiper review-swp">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide review-card">
                                <div class="review-card__left">
                                    <img src="./assets/images/review-logo-1.svg" alt="" class="main-img">
                                    <a href="#" class="more-link">
                                        <span>Читать полностью</span>
                                        <img src="./assets/images/play-blue-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="review-card__right">
                                    <h3 class="review-card__title">Игорь Хворостовский</h3>
                                    <h4 class="review-card__alert">ООО «Ростелеком»</h4>
                                    <p class="review-card__text">Обратились в компанию по подбору грузчиков на аутсорс для погрузочно-разгрузочных работ на нашем складе. Задача стояла непростая: нужно было оперативно найти команду для разгрузки большого объема строительных материалов. Результат превзошел наши ожидания! Грузчики приехали точно в срок, были профессиональны и очень слаженно работали. Весь процесс занял минимум времени, никаких простоев или недоразумений. </p>
                                </div>
                            </div>
                            <div class="swiper-slide review-card">
                                <div class="review-card__left">
                                    <img src="./assets/images/review-logo-1.svg" alt="" class="main-img">
                                    <a href="#" class="more-link">
                                        <span>Читать полностью</span>
                                        <img src="./assets/images/play-blue-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="review-card__right">
                                    <h3 class="review-card__title">Игорь Хворостовский</h3>
                                    <h4 class="review-card__alert">ООО «Ростелеком»</h4>
                                    <p class="review-card__text">Обратились в компанию по подбору грузчиков на аутсорс для погрузочно-разгрузочных работ на нашем складе. Задача стояла непростая: нужно было оперативно найти команду для разгрузки большого объема строительных материалов. Результат превзошел наши ожидания! Грузчики приехали точно в срок, были профессиональны и очень слаженно работали. Весь процесс занял минимум времени, никаких простоев или недоразумений. </p>
                                </div>
                            </div>
                            <div class="swiper-slide review-card">
                                <div class="review-card__left">
                                    <img src="./assets/images/review-logo-1.svg" alt="" class="main-img">
                                    <a href="#" class="more-link">
                                        <span>Читать полностью</span>
                                        <img src="./assets/images/play-blue-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="review-card__right">
                                    <h3 class="review-card__title">Игорь Хворостовский</h3>
                                    <h4 class="review-card__alert">ООО «Ростелеком»</h4>
                                    <p class="review-card__text">Обратились в компанию по подбору грузчиков на аутсорс для погрузочно-разгрузочных работ на нашем складе. Задача стояла непростая: нужно было оперативно найти команду для разгрузки большого объема строительных материалов. Результат превзошел наши ожидания! Грузчики приехали точно в срок, были профессиональны и очень слаженно работали. Весь процесс занял минимум времени, никаких простоев или недоразумений. </p>
                                </div>
                            </div>
                            <div class="swiper-slide review-card">
                                <div class="review-card__left">
                                    <img src="./assets/images/review-logo-1.svg" alt="" class="main-img">
                                    <a href="#" class="more-link">
                                        <span>Читать полностью</span>
                                        <img src="./assets/images/play-blue-icon.svg" alt="">
                                    </a>
                                </div>
                                <div class="review-card__right">
                                    <h3 class="review-card__title">Игорь Хворостовский</h3>
                                    <h4 class="review-card__alert">ООО «Ростелеком»</h4>
                                    <p class="review-card__text">Обратились в компанию по подбору грузчиков на аутсорс для погрузочно-разгрузочных работ на нашем складе. Задача стояла непростая: нужно было оперативно найти команду для разгрузки большого объема строительных материалов. Результат превзошел наши ожидания! Грузчики приехали точно в срок, были профессиональны и очень слаженно работали. Весь процесс занял минимум времени, никаких простоев или недоразумений. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-foot">
                        <div class="swp-pagination"></div>
                        <a href="#" class="text-more">
                            <span>Все отзывы</span>
                            <img src="./assets/images/play-blue-icon.svg" alt="">
                        </a>
                    </div>
                </div>
            </section>
            <!-- Review end -->

            <!-- Article -->
            <section class="article">
                <div class="container">
                    <div class="text-subtitle">[ польза ]</div>
                    <div class="text-h2">Статьи и новости </div>
                    <div class="article-content">
                        <div class="article-content__left">
                            <div>
                                <h3 class="article-title">Полезное</h3>
                                <ul class="article-list">
                                    <li class="article-list__item">
                                        <div class="article-list__date">21.04.2025</div>
                                        <div class="article-list__text">Алгоритм отбора резюме для складского персонала</div>
                                    </li>
                                    <li class="article-list__item">
                                        <div class="article-list__date">21.04.2025</div>
                                        <div class="article-list__text">Что спросить упаковщика на собеседовании</div>
                                    </li>
                                    <li class="article-list__item">
                                        <div class="article-list__date">21.04.2025</div>
                                        <div class="article-list__text">Автоматизация найма складского персонала</div>
                                    </li>
                                    <li class="article-list__item">
                                        <div class="article-list__date">21.04.2025</div>
                                        <div class="article-list__text">Новые технологии в рекрутинге рабочих специальностей</div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="article-title">Последние новости</h3>
                                <ul class="article-list">
                                    <li class="article-list__item">
                                        <div class="article-list__date">21.04.2025</div>
                                        <div class="article-list__text">Автоматизация найма складского персонала</div>
                                    </li>
                                    <li class="article-list__item">
                                        <div class="article-list__date">21.04.2025</div>
                                        <div class="article-list__text">Что такое аутстафинг простыми словами, название статьи в две строки, можно и в одну</div>
                                    </li>
                                    <li class="article-list__item">
                                        <div class="article-list__date">21.04.2025</div>
                                        <div class="article-list__text">Как нанимать грузчиков на сезонную работу</div>
                                    </li>
                                </ul>
                                <a href="#" class="text-more">
                                    <span>Все новости</span>
                                    <img src="./assets/images/play-blue-icon.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="article-content__right">
                            <div class="article-card__wrap">
                                <img src="./assets/images/article-card-1.png" alt="" class="main-img">
                                <div class="article-card">
                                    <div class="article-card__date">21.04.2025</div>
                                    <div class="article-card__title">Что такое аутстафинг простыми словами, название статьи в две строки, можно и в одну</div>
                                    <div class="article-card__text">Что такое аутстафинг простыми словами, название статьи в две строки, можно и в одну</div>
                                    <a href="#" class="text-more">
                                        <span>Читать статью</span>
                                        <img src="./assets/images/play-blue-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <ul class="article-news__wrap">
                                <li class="article-news">
                                    <img src="./assets/images/article-card-2.png" alt="" class="main-img">
                                    <div class="article-news__date">21.04.2025</div>
                                    <div class="article-news__text">Что такое аутстафинг простыми словами, название статьи в две строки, можно и в одну</div>
                                </li>
                                <li class="article-news">
                                    <img src="./assets/images/article-card-3.png" alt="" class="main-img">
                                    <div class="article-news__date">21.04.2025</div>
                                    <div class="article-news__text">Что такое аутстафинг простыми словами, название статьи в две строки, можно и в одну</div>
                                </li>
                                <li class="article-news">
                                    <img src="./assets/images/article-card-4.png" alt="" class="main-img">
                                    <div class="article-news__date">21.04.2025</div>
                                    <div class="article-news__text">Что такое аутстафинг простыми словами, название статьи в две строки, можно и в одну</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Article end -->

            <!-- Work -->
            <section class="work">
                <div class="container">
                    <div class="text-subtitle">[ работа у нас ]</div>
                    <h2 class="text-h2">Вакансии <span>/</span> Подработка <span>/</span> Неофициальная работа </h2>
                    <div class="work-content">
                        <ul class="work-content__left">
                            <li class="work-content__left-text">Если вы ищете возможность <b>дополнительного заработка или гибкий график работы,</b> мы предлагаем вам рассмотреть вариант подработки на условиях неофициального трудоустройства. </li>
                            <li class="work-content__left-text alert">
                                <div class="line"></div>
                                <b>Это идеальное решение для тех, кто хочет совмещать работу с учёбой, семьёй или другими проектами.</b>
                            </li>
                            <li class="work-content__left-text"><b>Мы предоставляем разовые или регулярные задачи, которые не требуют длительного обучения и позволяют сразу приступить к работе.</b> Оплата производится своевременно, а объем заданий можно корректировать под ваше свободное время.</li>
                            <li class="work-content__left-text"><b>Это отличная возможность получить опыт, дополнительный доход и работать в удобном для вас режиме.</b> Если вы заинтересованы, свяжитесь с нами — обсудим детали и найдем подходящий для вас формат сотрудничества!</li>
                        </ul>
                        <div class="work-content__right">
                            <img src="./assets/images/work-card.png" alt="" class="main-img">
                            <div class="logo">
                                <img src="./assets/images/work-card-logo.svg" alt="">
                            </div>
                            <ul class="work-tags__wrap">
                                <li>
                                    <a href="#" class="work-tags">#упаковщики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#грузчики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#водители погрузчиков</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#комплектовщики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#кладовщики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#разноробочие</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="work-foot">
                        <div class="work-foot__text">
                            <span>
                                1497
                                <img src="./assets/images/work-text-line.svg" alt="">
                            </span>  
                            вакансий на сайте прямо сейчас
                        </div>
                        <a href="#" class="btn-black">
                            <span class="btn-text">Найти работу</span>
                            <img src="./assets/images/play-icon-white.svg" alt="" class="btn-icon">
                        </a>
                    </div>
                </div>
            </section>
            <!-- Work end -->

            <!-- Work -->
            <section class="work bg-light">
                <div class="container">
                    <div class="text-subtitle">[ работа у нас ]</div>
                    <h2 class="text-h2">Вакансии <span>/</span> Подработка <span>/</span> Неофициальная работа </h2>
                    <div class="work-content">
                        <ul class="work-content__left">
                            <li class="work-content__left-text">Если вы ищете возможность <b>дополнительного заработка или гибкий график работы,</b> мы предлагаем вам рассмотреть вариант подработки на условиях неофициального трудоустройства. </li>
                            <li class="work-content__left-text alert">
                                <div class="line"></div>
                                <b>Это идеальное решение для тех, кто хочет совмещать работу с учёбой, семьёй или другими проектами.</b>
                            </li>
                            <li class="work-content__left-text"><b>Мы предоставляем разовые или регулярные задачи, которые не требуют длительного обучения и позволяют сразу приступить к работе.</b> Оплата производится своевременно, а объем заданий можно корректировать под ваше свободное время.</li>
                            <li class="work-content__left-text"><b>Это отличная возможность получить опыт, дополнительный доход и работать в удобном для вас режиме.</b> Если вы заинтересованы, свяжитесь с нами — обсудим детали и найдем подходящий для вас формат сотрудничества!</li>
                        </ul>
                        <div class="work-content__right">
                            <img src="./assets/images/work-card.png" alt="" class="main-img">
                            <div class="logo">
                                <img src="./assets/images/work-card-logo-2.svg" alt="">
                            </div>
                            <ul class="work-tags__wrap">
                                <li>
                                    <a href="#" class="work-tags">#упаковщики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#грузчики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#водители погрузчиков</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#комплектовщики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#кладовщики</a>
                                </li>
                                <li>
                                    <a href="#" class="work-tags">#разноробочие</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="work-foot">
                        <div class="work-foot__text">
                            <span>
                                1497
                                <img src="./assets/images/work-text-line.svg" alt="">
                            </span>  
                            вакансий на сайте прямо сейчас
                        </div>
                        <a href="#" class="btn-black">
                            <span class="btn-text">Найти работу</span>
                            <img src="./assets/images/play-icon-white.svg" alt="" class="btn-icon">
                        </a>
                    </div>
                </div>
            </section>
            <!-- Work end -->

            <!-- Tags block -->
            <section class="tags-block">
                <ul class="container tags-block__container">
                    <li>
                        <a href="#" class="tags-block__link">#упаковщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#грузчики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#водители погрузчиков</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#комплектовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#кладовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#упаковщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#грузчики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#водители погрузчиков</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#комплектовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#кладовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">показать еще</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#упаковщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#грузчики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#водители погрузчиков</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#комплектовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#кладовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#упаковщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#грузчики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#водители погрузчиков</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#комплектовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#кладовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">показать еще</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#упаковщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#грузчики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#водители погрузчиков</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#комплектовщики</a>
                    </li>
                    <li>
                        <a href="#" class="tags-block__link">#кладовщики</a>
                    </li>
                </ul>
            </section>
            <!-- Tags block end -->

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