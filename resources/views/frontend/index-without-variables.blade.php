<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>BION - Оценочная компания в Казахстане</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/mobile.css">
</head>
<body>
<div class="firstbg"></div>
<div class="secondbg"></div>
    
<header id="vue-header">
    <!-- Blueline -->
    <div class="line">
        <div class="bg">
            
        </div>
        <div class="sign">
            <a href="#sign-in">Войти</a>
            <a href="#sign-up">Зарегистрироваться</a>
        </div>
    </div>
    <!-- Blueline end -->
    <!-- Menu -->
    <div class="menu"  :class="{ sShadow: shadow }">
        <!-- Logo -->
        <a href="/" class="logo">
            <img src="/img/common/logo.png" alt="bion" id="logo1">
            <img src="/img/common/mobile/logo-m.png" alt="bion" id="logo2" class="hidelogo">
        </a>
        <!-- End logo -->
        <!-- Select city -->
        <div class="bion-select city">
          <select>
            <option value="1">Шымкент</option>
            <option value="2">Алматы</option>
            <option value="3">Астана</option>
          </select>
        </div>
        <!-- End select city -->
        <!-- Search bar -->
        <form action="#search" class="search">
            <input type="text" name="search" placeholder="Например: Оценка по сайту">
        </form>
        <!-- End of search -->
        <!-- Mobile phone buttons -->
        <div class="phoneMore">
            <div class='phoneButtons'>
                <img src="/img/common/icons/phone.png">
                <p><span>Позвонить</span> менеджеру</p>
            </div>
            <div class='phoneButtons'>
                <img src="/img/common/icons/whatsapp.png">
                <p><span>Написать</span> сообщение по Whatsapp</p>
            </div>
            <div class='phoneButtons'>
                <img src="/img/common/mobile/oran.png">
                <p><span>Заказать</span> звонок консультанта</p>
            </div>            
        </div>
        <!-- End of Mobile phone buttons -->
        <!-- Hamburger -->
        <div id="nav-icon3" class='mobileSwitch'>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <!-- End of Hamburger -->
        <!-- Mobile buttons -->
        <div id="tel2" class='mobileSwitch'>
            <img src="/img/common/mobile/tel.png">
        </div>
        <div id="loop2" class='mobileSwitch'>
            <img src="/img/common/mobile/loop.png">
        </div>
        <!-- End of Mobile buttons -->
        <!-- Call Center -->
        <div class="callCenter">
            <p class="phone" @click="showPhone = !showPhone">+7 (725) 246 71 45</p>
            <p class="text">Call-center города Шымкент</p>

            <!-- Popup that appears when clicking on the phone number -->
            <div class="phone-popup" v-show="showPhone">
                    <p class="phone" @click="showPhone = !showPhone">+7 (725) 246 71 45</p>
                    <p class="text">Call-center города Шымкент</p>
                <hr>
                <div class="phone-wrap">
                    <div class="phone-inner-wrap">
                        <p class="l-phone">+7 (727) 395 22 96</p>
                        <p class="l-text">Call-center города Алматы</p>
                    </div>
                    <span class="callBtn">
                        <img src="/img/common/icons/phone.png">
                    </span>
                </div>
                <hr>
                <div class="phone-wrap">
                    <div class="phone-inner-wrap">
                        <p class="l-phone">+7 (702) 821 48 72</p>
                        <p class="l-text">Мобильный рабочий номер <br>менеджеров города Алматы</p>
                    </div>
                    <span class="callBtn">
                        <a href="https://api.whatsapp.com/send?phone=77077400825">
                            <img src="/img/common/icons/whatsapp.png">
                        </a>
                    </span>
                    <span class="callBtn">
                        <img src="/img/common/icons/phone.png">
                    </span>
                </div>
                <hr>
                <div class="phone-wrap">
                    <div class="phone-inner-wrap">
                        <p class="l-phone">+7 (727) 546 71 45</p>
                        <p class="l-text">Call-center города Шымкент</p>
                    </div>
                    <span class="callBtn">
                        <img src="/img/common/icons/phone.png">
                    </span>
                </div>
                <hr>
                <div class="phone-wrap">
                    <div class="phone-inner-wrap">
                        <p class="l-phone">+7 (777) 777 00 00</p>
                        <p class="l-text">Мобильный рабочий номер<br> менеджеров города Шымкент</p>
                    </div>
                    <span class="callBtn">
                        <a href="https://api.whatsapp.com/send?phone=77077400825"><img src="/img/common/icons/whatsapp.png"></a>
                    </span>
                    <span class="callBtn">
                        <img src="/img/common/icons/phone.png">
                    </span>
                </div>
                <hr>
                <p class="socials">Мы в социальных сетях</p>
                <a href="#sc" class="soc-buttons">
                    <img src="/img/common/icons/insta.png">
                </a>
                <a href="#sc" class="soc-buttons">
                    <img src="/img/common/icons/vk.png">
                </a>
                <a href="#sc" class="soc-buttons">
                    <img src="/img/common/icons/mail.png">
                </a>
                <a href="#sc" class="soc-buttons">
                    <img src="/img/common/icons/youtube.png">
                </a>
                <a href="#sc" class="soc-buttons">
                    <img src="/img/common/icons/map.png">
                </a>
                <button class="share-btn">
                    Поделиться
                    <span></span>
                </button>
            </div>
            <!-- End of phone Popup window -->
        </div>
        <!-- End callcenter -->
        <!-- Nav -->
        <div class="nav">
            <a class="sub sm1" :class="{ subActive: sm1 }" @click="chooseMenu('mainmenu','sm1')">Главная</a>
            <a class="sub sm2" :class="{ subActive: sm2 }" @click="chooseMenu('servicesmenu','sm2')">Услуги</a>
            <a>О нас</a>
            <a>Проекты</a>
            <a>Контакты</a>
        </div>
        <!-- End Nav -->
        <div class="submenu">
            <component :is="currentSubMenu">
                
            </component>
        </div>
    </div>
    <!-- End Menu -->
    <!-- Sub Menu -->

    <!-- End Sub Menu -->
    
</header>







<main>
    <!-- Row with slider and request form -->
    <div class="row mob">
        <!-- Slider -->
        <div class="col-lg-9 col-12 slider carousel slide" data-ride="carousel"  id="mainCarousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url(img/common/index/slide.jpg);">
                    <h3>Лидеры в области качественной оценки</h3>
                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>
                </div>
                <div class="carousel-item" style="background-image: url(img/common/index/slide.jpg);">
                    <h3>Лидеры в области качественной оценки</h3>
                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>
                </div>
                <div class="carousel-item" style="background-image: url(img/common/index/slide.jpg);">
                    <h3>Лидеры в области качественной оценки</h3>
                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>
                </div>
                <div class="carousel-item" style="background-image: url(img/common/index/slide.jpg);">
                    <h3>Лидеры в области качественной оценки</h3>
                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>
                </div>
                <div class="carousel-item" style="background-image: url(img/common/index/slide.jpg);">
                    <h3>Лидеры в области качественной оценки</h3>
                    <p>Оценка эффективности деятельности orem ipsum dolor sit amet, consectetur adipisicing elit. Neque necessitatibus repudiandae praesentium asperiores animi sunt quia quo modi in! Corporis et porro expedita nesciunt corrupti similique unde dolores enim, obcaecati amet accusantium quis numquam temporibus quaerat, impedit culpa fuga voluptates. Officia molestiae ullam ut sequi</p>
                </div>
            </div>
            <ol class="carousel-indicators">
               <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#mainCarousel" data-slide-to="1"></li>
               <li data-target="#mainCarousel" data-slide-to="2"></li>
               <li data-target="#mainCarousel" data-slide-to="3"></li>
               <li data-target="#mainCarousel" data-slide-to="4"></li>
            </ol>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End of slider -->
    
        <!-- ReQUEST form -->
        <div class="col-lg-3">
            <div class="rf">

                <!-- First window -->
                <div class="recall" v-show="showFirstWindow">
                    <p class="title">Перезвонить вам?</p>
                    <p class="subtitle">Выберите удобное себе время для консультации с нашими операторами или оставьте сообщение и мы обязательно перезвонят Вам!</p>
                    <p class="subtitle">Заказав услугу "Обратный звонок" Вы получите: консультации специалиста, выезд на объект и анализ документов бесплатно!</p>
                    <button class="r-btn" @click="hideFirstWindow()">Заказать!</button>
                </div>
                <!-- End of window -->

                <!-- Window that appears when click on free message -->
                <div class="sendMessage" v-show="showMsgWindow">
                    <p class="title">Отправьте <br>нам сообщение</p>
                    <hr>
                    <p class="subtitle">И получите пакет услуг бесплатно: консультации специалиста, выезд на объект и анализ документов</p>
                    <form action="{{ route('messages_store')}}" method="post">
                        <input type="text" name="name" placeholder="Имя" class="form-control" required>
                        <input type="text" name="phone" placeholder="Телефон" class="form-control" required>
                        <select name="city" class="form-control">
                            <option value="Шымкент" selected>Шымкент</option>
                            <option value="Алматы">Алматы</option>
                            <option value="Астана">Астана</option>
                        </select>
                        <textarea name="text" class="form-control" required></textarea>
                        <input type="submit" value="Отправить" class="form-control">
                        {{ csrf_field() }}
                    </form>
                    <p class="garanty">Гарантируем конфиденциальность и соблюдение коммерческой тайны</p>
                    <button class="form-control" @click="changeWindow()">Заказать бесплатную консультацию</button>
                </div>
                <!-- End of  window -->

                <!-- Window that appears when click on free callback -->
                <div class="sendMessage2" v-show="showRecallWindow">
                    <p class="title">Закажите <br>бесплатную консультацию</p>
                    <hr>
                    <p class="subtitle">И получите пакет услуг бесплатно: консультации специалиста, выезд на объект и анализ документов</p>
                    <form action="{{ route('cons_store')}}" method="post">
                        <input type="text" name="name" placeholder="Имя" class="form-control" required>
                        <input type="text" name="phone" placeholder="Телефон" class="form-control" required>
                        <select name="city" class="form-control">
                            <option value="Шымкент" selected>Шымкент</option>
                            <option value="Алматы">Алматы</option>
                            <option value="Астана">Астана</option>
                        </select>
                        <select name="when" class="form-control" required>
                            <option value="" selected>Когда вам позвонить?</option>
                            <option value="До обеда">До обеда</option>
                            <option value="После обеда">После обеда</option>
                            <option value="Завтра">Завтра</option>
                            <option value="В течение недели">В течение недели</option>
                        </select>
                        <select name="interest" class="form-control">
                            <option value="" selected>Что вас интересует?</option>
                            <option value="Дом">Дом</option>
                            <option value="Машина">Машина</option>
                        </select>
                        <select name="lang" class="form-control">
                            <option value="" selected>Выберите язык (необяз.)</option>
                            <option value="Русский">Русский</option>
                            <option value="Казахский">Казахский</option>
                        </select>
                        {{ csrf_field() }}
                        <input type="submit" value="Отправить" class="form-control">
                    </form>
                    <p class="garanty">Гарантируем конфиденциальность и соблюдение коммерческой тайны</p>
                    <button class="form-control" @click="changeWindow()">Отправьте нам сообщение с сайта</button>
                </div>
                <!-- End of window -->
            </div>
        </div>
    </div>
    <!-- End of row -->
    <!-- Tabs -->
    <div class="tabs"  id="vue-tab">
        <div class="row tab">
            <!-- <a @click="chooseTab('news')">Новости</a> -->
            <a @click="chooseTab('actions')">Наши услуги <span class="blink">3</span></a>
            <a @click="chooseTab('howToPay')" class="active">Как оплатить</a>
            <a @click="chooseTab('vacancies')">Новые вакансии <span class="blink">1</span></a>
        </div>
        <div class="tab-content">

                            <component :is="currentTab"></component>

        </div>
    </div>
    <!-- End of Tabs -->
    <!-- What are you interested in block -->
    <div class="waii row">
        <div class="col-lg-3 offset-lg-2 hideMob">
            <img src="/img/common/index/waii.png">
        </div>
        <div class="col-lg-6 hideMob">
            <h3 class="title">Что вас интересует?</h3>
            <h4>Выберите и закажите услугу здесь!</h4>
            <p class="title">А специальный калькулятор рассчитает Вам стоимость услуги! Быстро и удобно!</p>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut voluptatibus, molestias eum dolor adipisci voluptatum, placeat praesentium cumque error totam aspernatur beatae esse obcaecati quibusdam ducimus odit quis alias sapiente tempore at sed? Neque ipsam ad vero assumenda, a iste recusandae molestias minima ea deleniti quisquam odit repellendus vitae, doloremque nam autem magnam laudantium enim necessitatibus possimus accusamus? Sit, expedita minima dolorem saepe ipsa explicabo ullam officiis quidem omnis doloremque vitae quisquam, perferendis? Quasi ipsum, distinctio sunt sequi beatae minus eveniet velit debitis dolores omnis eaque, voluptates veritatis illo, minima doloribus natus culpa itaque. Commodi nemo adipisci perferendis quos itaque?</p>
            <button>Заказать услугу</button>
        </div>
        <div class="col-12 showMob">
            <h3 class="title">Что вас интересует?</h3>
            <h4>Выберите и закажите услугу здесь!</h4>
            <img src="/img/common/index/waii.png">
            <button>Заказать услугу</button>
        </div>
    </div>
    <!-- End of What are you interested in block -->
    <!-- How do we work block -->
    <div class="hww">
        <h3>Как мы работаем</h3>
        <h4>Выберите и закажите услугу здесь!</h4>
        <p class="top">А специальный калькулятор рассчитает Вам стоимость услуги! Быстро и удобно!</p>
        <div class="row top">
            <div class="step">
                <span class="num">1</span>
                <p class="title">Ваш заказ</p>
                <div class="desc">
                    <p>Вы выбираете наиболее подходящий вариант решения задачи</p>
                    <img src="/img/common/index/hww1.png">
                </div>
            </div>
            <div class="step">
                <span class="num">2</span>
                <p class="title">Изучаем вашу документацию</p>
                <div class="desc">
                    <p>Мы изучаем вашу документацию, рассчитываем цену услуги и выбираем оптимальный вариант решения вашей проблемы</p>
                    <img src="/img/common/index/hww2.png">
                </div>
            </div>
            <div class="step">
                <span class="num">3</span>
                <p class="title">Заключение договора</p>
                <div class="desc">
                    <p>Вы выбираете наиболее подходящий вариант решения задачи</p>
                    <img src="/img/common/index/hww4.png">
                </div>
            </div>
        </div>
        <div class="row bot">
            <div class="step">
                <span class="num">4</span>
                <p class="title">Выезд на объект</p>
                <div class="desc">
                    <p>Вы выбираете наиболее подходящий вариант решения задачи</p>
                    <img src="/img/common/index/hww5.png">
                </div>
            </div>
            <div class="step">
                <span class="num">5</span>
                <p class="title">Работа над заданием</p>
                <div class="desc">
                    <p>Вы выбираете наиболее подходящий вариант решения задачи</p>
                    <img src="/img/common/index/hww6.png">
                </div>
            </div>
            <div class="step">
                <span class="num">6</span>
                <p class="title">Готово!</p>
                <div class="desc">
                    <p>Вы выбираете наиболее подходящий вариант решения задачи</p>
                    <img src="/img/common/index/hww7.png">
                </div>
            </div>     
        </div>
    </div>
    <!-- End of How do we work block -->
    <!-- Our partners block -->
    <div class="partners">
        <div class="partners-slider">
            <div>
                <h3 class="title">Нашими услугами уже воспользовались </h3>
                <!-- slider -->
                <div class="carousel slide" data-ride="carousel" id="ps1">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 col-4 pi  offset-lg-1">
                                            <img src="/img/common/index/kcell.png" class="partner">
                                        </div>
                                        <div class="col-lg-8 col-8">
                                            <p><b>Kcell</b></p>
                                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>
                                            <p>Объект: Движимое имущество</p>
                                            <p>Цель: Определение рыночной стоимости</p>
                                            <p>Назначение: Для принятия управленческих решений</p>
                                            <p>Срок оценки: 10 рабочих дней</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-4 pi  offset-lg-1">
                                            <img src="/img/common/index/kcell.png" class="partner">
                                        </div>
                                        <div class="col-lg-8 col-8">
                                            <p><b>Kcell</b></p>
                                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>
                                            <p>Объект: Движимое имущество</p>
                                            <p>Цель: Определение рыночной стоимости</p>
                                            <p>Назначение: Для принятия управленческих решений</p>
                                            <p>Срок оценки: 10 рабочих дней</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-4 pi  offset-lg-1">
                                            <img src="/img/common/index/kcell.png" class="partner">
                                        </div>
                                        <div class="col-lg-8 col-8">
                                            <p><b>Kcell</b></p>
                                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>
                                            <p>Объект: Движимое имущество</p>
                                            <p>Цель: Определение рыночной стоимости</p>
                                            <p>Назначение: Для принятия управленческих решений</p>
                                            <p>Срок оценки: 10 рабочих дней</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#ps1" role="button" data-slide="prev">
                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#ps1" role="button" data-slide="next">
                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                               <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- End of slider -->
            </div>
            <div>
                <h3 class="title">Наши партнеры</h3>
                <!-- slider -->
                <div class="carousel slide" data-ride="carousel" id="ps2">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-lg-3 col-4 pi  offset-lg-1">
                                            <img src="/img/common/index/kcell.png" class="partner">
                                        </div>
                                        <div class="col-lg-8 col-8">
                                            <p><b>Kcell</b></p>
                                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>
                                            <p>Объект: Движимое имущество</p>
                                            <p>Цель: Определение рыночной стоимости</p>
                                            <p>Назначение: Для принятия управленческих решений</p>
                                            <p>Срок оценки: 10 рабочих дней</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-4 pi  offset-lg-1">
                                            <img src="/img/common/index/kcell.png" class="partner">
                                        </div>
                                        <div class="col-lg-8 col-8">
                                            <p><b>Kcell</b></p>
                                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>
                                            <p>Объект: Движимое имущество</p>
                                            <p>Цель: Определение рыночной стоимости</p>
                                            <p>Назначение: Для принятия управленческих решений</p>
                                            <p>Срок оценки: 10 рабочих дней</p>
                                        </div>  
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-4 pi  offset-lg-1">
                                            <img src="/img/common/index/kcell.png" class="partner">
                                        </div>
                                        <div class="col-lg-8 col-8">
                                            <p><b>Kcell</b></p>
                                            <p>Заказчик: Транспортный отдел АО “Кселл” АО «Кселл» является оператором сотовой связи, оказывающим услуги в стандарте GSM-900/1800 и UMTS/WCDMA (2100 МГц)</p>
                                            <p>Объект: Движимое имущество</p>
                                            <p>Цель: Определение рыночной стоимости</p>
                                            <p>Назначение: Для принятия управленческих решений</p>
                                            <p>Срок оценки: 10 рабочих дней</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#ps2" role="button" data-slide="prev">
                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#ps2" role="button" data-slide="next">
                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                               <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- End of slider -->
            </div>
            <div>
                <h3 class="title">Наши отчеты принимают</h3>
                <div class="row banks">
                    <div class="col-4 col-md-3"><img src="/img/banks/halykbank.svg" alt="bank" class="bank"></div>
                    <div class="col-4 col-md-3"><img src="/img/banks/sberbank.svg" alt="bank" class="bank"></div>
                    <div class="col-4 col-md-3"><img src="/img/banks/cesna.png" alt="bank" class="bank"></div>
                    <div class="col-4 col-md-3"><img src="/img/banks/fortebank.png" alt="bank" class="bank"></div>
                    <div class="col-4 col-md-3"><img src="/img/banks/vtb.png" alt="bank" class="bank"></div>
                    <div class="col-4 col-md-3"><img src="/img/banks/nurbank.png" alt="bank" class="bank"></div>
                    <div class="col-6 col-md-3"><img src="/img/banks/centercredit.png" alt="bank" class="bank"></div>
                    <div class="col-6 col-md-3"><img src="/img/banks/asiacredit.jpg" alt="bank" class="bank"></div>
                    <div class="col-12 col-md-3"><img src="/img/banks/eurasian.png" alt="bank" class="bank eur_bank"></div>
                </div>
            </div>
            
            
        </div>
    </div>
    <!-- End of Our partners block -->
    <!-- Leave request block -->
    <div class="leavereq">
        <div class="row">
            <div class="col-lg-7 phonesite">
                <div class="col-lg-6 offset-lg-6">
                    <h3>Оставьте заявку сейчас</h3>
                    <p>Выберите себе удобное время для разговора<br> с нашими консультантами</p>
                    <form action="{{ route('cons_store')}}" method="post">
                        <input type="text" name="name" placeholder="Имя" required>
                        <input type="text" name="phone" placeholder="Телефон" required>
                        <select name="city" class="form-control">
                            <option value="Шымкент" selected>Шымкент</option>
                            <option value="Алматы">Алматы</option>
                            <option value="Астана">Астана</option>
                        </select>
                        <select name="when" class="form-control">
                            <option value="" selected>Когда вам позвонить?</option>
                            <option value="До обеда">До обеда</option>
                            <option value="После обеда">После обеда</option>
                            <option value="Завтра">Завтра</option>
                            <option value="В течение недели">В течение недели</option>
                        </select>
                        <select name="lang" class="form-control">
                            <option value="" selected>Выберите язык (необяз.)</option>
                            <option value="Русский">Русский</option>
                            <option value="Казахский">Казахский</option>
                        </select>
                        {{ csrf_field() }}
                        <button>Отправить</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 phonesiteMob">
                <img src="/img/common/index/woman.png" class="woman">
            </div>
        </div>
    </div>
    <!-- End of Leave request block -->
    <!-- We are in figures block -->
    <div class="waif">
        <h3>Мы в цифрах:</h3>
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="figure">
                    <img src="/img/common/index/waif1.png" alt="">
                    <div class="right">
                        <p class="first">До<span class="spinNumber1">15</span></p>
                        <p class="text">Опыт лицензированных оценщиков</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="figure">
                    <img src="/img/common/index/waif2.png" alt="">
                    <div class="right">
                        <p class="first"><span class="spinNumber2">10</span>лет</p>
                        <p class="text">Успешной работы в сфере оценочного бизнеса</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="figure">
                    <img src="/img/common/index/waif3.png" alt="">
                    <div class="right">
                        <p class="first">До<span class="spinNumber3">8500</span></p>
                        <p class="text">Довольных клиентов за 10 лет</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="figure">
                    <img src="/img/common/index/waif4.png" alt="">
                    <div class="right">
                        <p class="first">До<span class="spinNumber4">35%</span></p>
                        <p class="text">Составляет прирост числа клиентов за прошедший год</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="figure">
                    <img src="/img/common/index/waif5.png" alt="">
                    <div class="right">
                        <p class="first">До<span class="spinNumber5">559</span></p>
                        <p class="text">Миллиардов тенге общая стоимость объектов за последние 3 года</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="figure">
                    <img src="/img/common/index/waif6.png" alt="">
                    <div class="right">
                        <p class="first">До<span class="spinNumber6">1500</span></p>
                        <p class="text">Компаний работают с нами каждый год</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of We are in figures block -->
    <!-- Profit -->
    <div class="profit">
        <h3>Почему выгодно работать с нами!</h3>
        <div class="row">
            <div class="col-lg-3 col-6 prof">
                <img src="/img/common/index/profit1.png" alt="">
                <p class="title">До 20% экономии</p>
                <p class="text">при заказе оценки у нас</p>
            </div>
            <div class="col-lg-3 col-6 prof">
                <img src="/img/common/index/profit2.png" alt="">
                <p class="title">15 лицензированных</p>
                <p class="text">оценщиков и помощников узкой специализации</p>
            </div>
            <div class="col-lg-3 col-6 prof">
                <img src="/img/common/index/profit3.png" alt="">
                <p class="title">3500 проектов</p>
                <p class="text">принято без претензий</p>
            </div>
            <div class="col-lg-3 col-6 prof">
                <img src="/img/common/index/profit4.png" alt="">
                <p class="title">85% заказчиков</p>
                <p class="text">становятся нашими клиентами</p>
            </div>
        </div>
    </div>
    <!-- End of Profit -->
    <!-- We have already worked -->
    <div class="experience">
        <h3>Наши оценщики уже работали в следующих сферах:</h3>
        <div class="row">
            <div class="exp">
                <img src="/img/common/index/profit1.png" alt="">
                <p class="title">Сторительство</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit2.png" alt="">
                <p class="title">Электроэнергетика</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit3.png" alt="">
                <p class="title">Крупный ретейл</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit4.png" alt="">
                <p class="title">Машиностроение</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit4.png" alt="">
                <p class="title">Сфера услуг</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
        </div>  
        <div class="row">
            <div class="exp">
                <img src="/img/common/index/profit1.png" alt="">
                <p class="title">Добыча полезных ископаемых</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit2.png" alt="">
                <p class="title">Интеллектуальная собственность</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit3.png" alt="">
                <p class="title">Медицина и фармацевтика</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit4.png" alt="">
                <p class="title">Сельское хозяйство</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
            <div class="exp">
                <img src="/img/common/index/profit4.png" alt="">
                <p class="title">Оптовая и розничная торговля</p>
                <a href="#exp">
                    <p class="text">подробнее</p>
                </a>
            </div>
        </div>
    </div>
    <!-- End of We have already worked -->
    <!-- Licence block -->
    <div class="partners">
        <div class="partners-slider">
            <!-- Big slider slide-->
            <div>
                <h3 class="title">Лицензии</h3>
                <!-- slider -->
                <div class="license-slider">
                    <div>
                        <img src="/img/common/slide/lic-1.jpg" alt="" class="lic">
                    </div>
                    <div>
                        <img src="/img/common/slide/lic-1.jpg" alt="" class="lic">
                    </div>
                    <div>
                        <img src="/img/common/slide/lic-1.jpg" alt="" class="lic">
                    </div>
                    <div>
                        <img src="/img/common/slide/lic-1.jpg" alt="" class="lic">
                    </div>
                    <div>
                        <img src="/img/common/slide/lic-1.jpg" alt="" class="lic">
                    </div>
                    <div>
                        <img src="/img/common/slide/lic-1.jpg" alt="" class="lic">
                    </div>
                </div>
                        <!-- End of slider -->
            </div>
            <!-- End of big slider slide -->
            <!-- Big slider slide-->
            <div>
                <h3 class="title">Лицензии 2</h3>
                <!-- slider -->
                
                        <!-- End of slider -->
            </div>
            <!-- End of big slider  slide -->
            
        </div>
    </div>
    <!-- End of Licence block -->
    <!-- About -->
    <div class="about">
        <h3>О компании</h3>
        <p>Оценочная компания "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p>Гражданско-правовая ответственность "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p class="hideMobAbout">Оценочная компания "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p class="hideMobAbout">Филиалы компании "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p class="hideMobAbout">Оценочная компания "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <span id="moreInfo"></span>
        <div class="hideAbout">
        <p>Оценочная компания "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p>Гражданско-правовая ответственность "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p>Оценочная компания "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p>Филиалы компании "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>
        <p>Оценочная компания "Бион" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam reiciendis omnis aspernatur est odio nulla, veniam accusamus, recusandae labore exercitationem voluptatum praesentium ea vero placeat corporis nostrum debitis ad</p>            
        </div>
    </div>
    <!-- End of About -->
    <!-- Testimonials -->
    <div class="testimonials row">
        <div class="col-lg-7 row">
            <div class="col-lg-6 offset-lg-6">
            <h3>Благодарность! <br> <b>за работу</b></h3>
            <p class="text">Благополучное развитие компании во многом зависит не только от действий руководства, но и от того насколько продуктивна работа сотрудников. Когда есть поощрения, люди будут обязательно стараться. Компания может стимулировать не только материально, но и морально - объявить благодарность за работу.</p>
            <p class="author">
                С уважением, <br> Жаркынбк Темирлан
            </p>                
            </div>
        </div>
        <div class="col-lg-5 writeCeo">
            <p class="title">Оставьте отзыв о нашей работе</p>
            <p class="text">Дорогие друзья! Мы работаем Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laudantium, quibusdam atque vero impedit cupiditate quod doloribus ratione iure et sint, saepe, minima ut possimus minus in, dolorum nesciunt corporis eveniet neque. Vitae obcaecati perferendis, saepe quae suscipit temporibus, adipisci neque ducimus ad quia voluptatem mollitia quo harum. Reiciendis, animi.</p>
            <form action="#">
                <textarea name="text" class="form-control testi" placeholder=""></textarea>
                <button class="sendReview testi">Отправить</button>
            </form>
        </div>
    </div>
    <!-- End of Testimonials -->
    <!-- Quiz -->
    <div class="quiz">
        <h3>Уделите немного времени!</h3>
        <h4>на опросы нашей компании и социальной среды</h4>
        <div class="row">
            <div class="col-lg-3">
                <p class="title">А откуда вы узнали о нашей компании?</p>
                <label class="radio">Поисковая система
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Соц. сети
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">От друзей
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">СМИ
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Другое
                  <input type="radio" name="radio">
                  <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-lg-3">
                <p class="title">Сколько этажные городы будут на новом городе Shynkent City?</p>
                <label class="radio">Поисковая система
                  <input type="radio" name="floor">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Соц. сети
                  <input type="radio" name="floor">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">От друзей
                  <input type="radio" name="floor">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">СМИ
                  <input type="radio" name="floor">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Другое
                  <input type="radio" name="floor">
                  <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-lg-3">
                <p class="title">Как сказывается на вашем бизнесе курс доллара?</p>
                <label class="radio">Поисковая система
                  <input type="radio" name="dollar">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Соц. сети
                  <input type="radio" name="dollar">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">От друзей
                  <input type="radio" name="dollar">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">СМИ
                  <input type="radio" name="dollar">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Другое
                  <input type="radio" name="dollar">
                  <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-lg-3">
                <p class="title">Какой иностранный язык вы хотели бы изучать?</p>
                <label class="radio">Поисковая система
                  <input type="radio" name="lang">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Соц. сети
                  <input type="radio" name="lang">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">От друзей
                  <input type="radio" name="lang">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">СМИ
                  <input type="radio" name="lang">
                  <span class="checkmark"></span>
                </label>
                <label class="radio">Другое
                  <input type="radio" name="lang">
                  <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
    <!-- End of Quiz -->
    <!-- Map 2gis -->
    <div class="dg-widget-link">
        <!-- <a href="http://2gis.kz/shymkent/center/69.585614,42.317444/zoom/16/routeTab/rsType/bus/to/69.585614,42.317444╎БИОН, ТОО, бюро по инвентаризации и оценки недвижимости?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до БИОН, ТОО, бюро по инвентаризации и оценки недвижимости</a> -->
        <iframe frameborder="no" style=" box-sizing: border-box;" width="100%" height="600" src="http://widgets.2gis.com/widget?type=firmsonmap&amp;options=%7B%22pos%22%3A%7B%22lat%22%3A42.317444%2C%22lon%22%3A69.585614%2C%22zoom%22%3A16%7D%2C%22opt%22%3A%7B%22city%22%3A%22shymkent%22%7D%2C%22org%22%3A%2270000001025819458%22%7D"></iframe>
    </div>  
    <!-- End of Map 2gis -->
</main>

<footer>
    <div class="row footerRow">
        <div class="col-lg-12"></div>
        <div class="col-lg-6 leftFooter">
            <p class="text">Современные сайты Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius doloribus laborum libero odit commodi dolores at. Illo quas sit molestias modi impedit delectus nemo, nesciunt adipisci perspiciatis ut, eos.</p>
            <div class="f-soc">
                <a href="#"><span></span></a>
                <a href="#"><span></span></a>
                <a href="#"><span></span></a>
            </div>
            <p class="beforeForm">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima? Ab consequatur deserunt laudantium, obcaecati iste accusamus adipisci saepe dolorum.
            </p>
            <form action="#">
                <input type="text" name="email" class="form-control" placeholder="Подпишитесь на нашу рассылку">
                <button class="signb">Подписаться</button>
            </form>
            <p class="afterForm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consequatur, rem commodi magni neque deserunt.</p>
        </div>
        <div class="col-lg-6 row rightFooter">
            <div class="col-lg-4">
                <p class="title">Главное меню</p>
                <a href="#" class="f-link">О компании</a>
                <a href="#" class="f-link">Наши услуги</a>
                <a href="#" class="f-link">Проекты</a>
                <a href="#" class="f-link">Контакты</a>
                <a href="#" class="f-link">Документы</a>
                <a href="#" class="f-link">Карта сайта</a>
                <a href="#" class="f-link">Оставить отзыв</a>
            </div>
            <div class="col-lg-8">
                <p class="title">Полезные ссылки</p>
                <a href="#" class="f-link">bilim.kz - сайт грантов для жителей Азии</a>
                <a href="#" class="f-link">facebook.com - сайт грантов для жителей Азии</a>
                <a href="#" class="f-link">vc.com - сайт грантов для жителей Азии</a>
                <a href="#" class="f-link">gradustudyabroad.com - сайт грантов для жителей Азии</a>
                <a href="#" class="f-link">bilim.kz - сайт грантов для жителей Азии</a>
                <a href="#" class="f-link">bilim.kz - сайт грантов для жителей Азии</a>
                <a href="#" class="f-link">bilim.kz - сайт грантов для жителей Азии</a>
            </div>
        </div>
    </div>
    <p class="afterRow">В этом разделе материалы размещаются Lorem ipsum dolor sit amet. <span>BION Group, 2018</span></p>
    <div class="row lastRow">
        <div>
        </div>
            <a href="#">Разработано в Lab Graphics</a>
    </div>
</footer>












<!---------- Templates of VUE.JS ---------->
<!---------- Header templates ---------->
<template id="mainmenu">
    <transition name="fade">
            <div class="mainSubmenu">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
    </transition>
</template>
<template id="servicesmenu">
    <transition name="fade">
    
        <div class="servicesSubmenu">
            <a href="#">Link 4</a>
            <a href="#">Link 5</a>
            <a href="#">Link 6</a>
        </div>

    </transition>
</template>

<!---------- Tab templates ---------->
<template id="howToPayTab">
    
                <div class="my-tab row">
                    <div class="col-lg-4 col-12">
                        <img src="/img/common/index/pay1.png" class="htp">
                        <div>
                            <p class="pay-title">Через банк и карты <br>путем перечисления</p>
                            <ul class="pay-ul">
                                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                                <li>- Оценка транспорта и оборудования</li>
                                <li>- Оценка основных средств</li>
                                <li>- Оценка других видов имущества</li>
                                <li>- Определение справедливой стоимости основных средств для целей учета</li>
                            </ul>                       
                        </div>

                    </div>
                    <div class="col-lg-4 col-12">
                        <img src="/img/common/index/pay2.png" class="htp">
                        <div>
                            <p class="pay-title">Через банк и карты путем перечисления</p>
                            <ul class="pay-ul">
                                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                                <li>- Оценка транспорта и оборудования</li>
                                <li>- Оценка основных средств</li>
                                <li>- Оценка других видов имущества</li>
                                <li>- Определение справедливой стоимости основных средств для целей учета</li>
                            </ul>                       
                        </div>

                    </div>
                    <div class="col-lg-4 col-12">
                        <img src="/img/common/index/pay3.png" class="htp">
                        <div>
                            <p class="pay-title">Через банк и карты путем перечисления</p>
                            <ul class="pay-ul">
                                <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                                <li>- Оценка транспорта и оборудования</li>
                                <li>- Оценка основных средств</li>
                                <li>- Оценка других видов имущества</li>
                                <li>- Определение справедливой стоимости основных средств для целей учета</li>
                            </ul>                       
                        </div>
                    </div>

                    <p class="payline">А также вы можете оплатить наши услуги через терминалы Qiwi. <a href="#">Подробнее</a></p>
                </div>

</template>
<template id="vacanciesTab">

            <div class="my-tab row">
                <div class="col-lg-4 col-12">
                    <img src="/img/common/index/vacancy.png" class="htp">
                    <div>
                        <p class="pay-title">Требуется оценщик с опытом работы в банках</p>
                        <ul class="pay-ul ul2">
                            <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                            <li>- Оценка транспорта и оборудования</li>
                            <li>- Оценка основных средств</li>
                            <li>- Оценка других видов имущества</li>
                            <li>- Определение справедливой стоимости основных средств для целей учета</li>
                        </ul>
                        <button class="reqBtn">Оставить заявку</button>                     
                    </div>

                </div>
                <div class="col-lg-4 col-12">
                    <img src="/img/common/index/vacancy.png" class="htp">
                    <div>
                        <p class="pay-title">Требуется оценщик с опытом работы в банках</p>
                        <ul class="pay-ul ul2">
                            <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                            <li>- Оценка транспорта и оборудования</li>
                            <li>- Оценка основных средств</li>
                            <li>- Оценка других видов имущества</li>
                            <li>- Определение справедливой стоимости основных средств для целей учета</li>
                        </ul>
                        <button class="reqBtn">Оставить заявку</button>                     
                    </div>

                </div>
                <div class="col-lg-4 col-12">
                    <img src="/img/common/index/vacancy.png" class="htp">
                    <div>
                        <p class="pay-title">Требуется оценщик с опытом работы в банках</p>
                        <ul class="pay-ul ul2">
                            <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                            <li>- Оценка транспорта и оборудования</li>
                            <li>- Оценка основных средств</li>
                            <li>- Оценка других видов имущества</li>
                            <li>- Определение справедливой стоимости основных средств для целей учета</li>
                        </ul>
                        <button class="reqBtn">Оставить заявку</button>                     
                    </div>
                </div>

                <p class="payline">Вы можете  предложить свою кандидатуру <a href="#">здесь</a> или напишите на  <a href="#">электронную почту</a>  и прикрепите резюме</p>
            </div>

</template>
<template id="actionsTab">

            <div class="my-tab row actions">
                <div class="col-lg-6 col-12">
                    <img src="/img/common/index/action1.png" class="htp">
                    <div>
                        <p class="pay-title">Оценка имущества <br>от 4000 тенге</p>
                        <ul class="pay-ul ul2">
                            <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                            <li>- Оценка транспорта и оборудования</li>
                            <li>- Оценка основных средств</li>
                            <li>- Оценка других видов имущества</li>
                            <li>- Определение справедливой стоимости основных средств для целей учета</li>
                        </ul>
                        <button class="reqBtn">Заказать эту услугу</button>                     
                    </div>

                </div>
                <div class="col-lg-6 col-12">
                    <img src="/img/common/index/action2.png" class="htp auto">
                    <div>
                        <p class="pay-title">Оценка транспорта <br>от 2500 тенге</p>
                        <ul class="pay-ul ul2">
                            <li>- Оценка недвижимости (квартир, домов, производственных и коммерческих)</li>
                            <li>- Оценка транспорта и оборудования</li>
                            <li>- Оценка основных средств</li>
                            <li>- Оценка других видов имущества</li>
                            <li>- Определение справедливой стоимости основных средств для целей учета</li>
                        </ul>
                        <button class="reqBtn">Заказать эту услугу</button>                     
                    </div>
                </div>
            </div>

</template>


<template id="newsTab">

            <div class="my-tab row news-tab">
                <div class="col-lg-2">
                    <img src="/img/news/new2.jpg" class="news-img">
                    <p class="news-text">Cложность оценки как процесса и результата познавательной деятельности обусловливает проблему статуса категории оценки ...</p>
                    <span class="views-icon"></span>
                    <span class="number">299</span>
                    <span class="comments-icon"></span>
                    <span class="number">17</span>
                </div>
                <div class="row col-lg-8">
                    <div class="col-lg-4">
                        <a href="#" class="news-link">
                            <span class="date">20.06</span>
                            Железная дорога в обход Алматы: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">03.06</span>
                            Единая база данных оценки недвижи...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">10.05</span>
                            Цены на нефть снижаются...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">20.04</span>
                            Нацбанк Казахстана выступил: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">07.03</span>
                            О зарплате Шымкентских чиновников...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">09.01</span>
                            Как полцучить страховку...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">31.12</span>
                            Железная дорога в обход Алматы: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">27.12</span>
                            Цены на нефть снижаются...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">04.10</span>
                            Единая база данных оценки недвижи...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">15.11</span>
                            Нацбанк Казахстана выступил: за...
                            <span class="more">Подробнее</span>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="news-link">
                            <span class="date">20.06</span>
                            Железная дорога в обход Алматы: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">03.06</span>
                            Единая база данных оценки недвижи...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">10.05</span>
                            Цены на нефть снижаются...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">20.04</span>
                            Нацбанк Казахстана выступил: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">07.03</span>
                            О зарплате Шымкентских чиновников...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">09.01</span>
                            Как полцучить страховку...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">31.12</span>
                            Железная дорога в обход Алматы: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">27.12</span>
                            Цены на нефть снижаются...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">04.10</span>
                            Единая база данных оценки недвижи...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">15.11</span>
                            Нацбанк Казахстана выступил: за...
                            <span class="more">Подробнее</span>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="news-link">
                            <span class="date">20.06</span>
                            Железная дорога в обход Алматы: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">03.06</span>
                            Единая база данных оценки недвижи...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">10.05</span>
                            Цены на нефть снижаются...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">20.04</span>
                            Нацбанк Казахстана выступил: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">07.03</span>
                            О зарплате Шымкентских чиновников...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">09.01</span>
                            Как полцучить страховку...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">31.12</span>
                            Железная дорога в обход Алматы: за...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">27.12</span>
                            Цены на нефть снижаются...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">04.10</span>
                            Единая база данных оценки недвижи...
                            <span class="more">Подробнее</span>
                        </a>
                        <a href="#" class="news-link">
                            <span class="date">15.11</span>
                            Нацбанк Казахстана выступил: за...
                            <span class="more">Подробнее</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="toNews">
                        <img src="/img/common/index/news.png">
                        <span>Перейти в раздел новости ></span>
                    </a>
                </div>
            </div>

</template>


<!---------- Ebd of Templates of VUE.JS ---------->






<script src="/js/vendor/jquery-3.3.1.min.js"></script>
<script src="/js/vendor/popper.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/vendor/slick.min.js"></script>
<script src="/js/vendor/vue.js"></script>
<script src="/js/vendor/jquery.spincrement.min.js"></script>

<script>
    /*---------- Slick scripts ----------*/
    $('.partners-slider').slick({
        swipe: false
    });
    $('.ps-1').slick();
    $('.license-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]
    });
</script>
<script>
    /*---------- Vue.js scripts ----------*/
    /* Header components*/
    Vue.component('mainmenu', {
        template: '#mainmenu'
    });
    Vue.component('servicesmenu', {
        template: '#servicesmenu'
    });
    var headerApp = new Vue({
        el: "#vue-header",
        data: {
            currentSubMenu: '',
            sm1: false,
            sm2: false,
            shadow: true,
            showPhone: false,
            showMsgWindow: false,
            showRecallWindow: false
        },
        methods: {
            chooseMenu: function(view, menu) {
                this.currentSubMenu = view;
                switch(menu) {
                    case 'sm1': 
                        this.sm1 = true;
                        this.sm2 = false;
                        this.shadow = false;
                        break;
                    case 'sm2': 
                        this.sm1 = false;
                        this.sm2 = true;
                        this.shadow = false;
                        break;
                }
            },
            requestWindow: function() {
                showMsgWindow = !showMsgWindow;
                showRecallWindow = !showRecallWindow;
            }
        }
    });

    var requestApp = new Vue({
        el: ".rf",
        data: {
            showMsgWindow: false,
            showRecallWindow: false,
            showFirstWindow: true
        },
        methods: {
            changeWindow: function() {
                this.showMsgWindow = !this.showMsgWindow;
                this.showRecallWindow = !this.showRecallWindow;
            },
            hideFirstWindow: function() {
                this.showFirstWindow = !this.showFirstWindow;
                this.showRecallWindow = !this.showRecallWindow;
            }
        }
    });

    /* Tabs components*/
    Vue.component('howToPay', {
        template: '#howToPayTab'
    });
    Vue.component('news', {
        template: '#newsTab'
    });
    Vue.component('vacancies', {
        template: '#vacanciesTab'
    });
    Vue.component('actions', {
        template: '#actionsTab'
    });
    var tabsApp = new Vue({
        el: "#vue-tab",
        data: {
            currentTab: 'howToPay'
        },
        methods: {
            chooseTab: function(view) {
                this.currentTab = view;
            }
        }
    });
</script>
<script src="js/app.js"></script>
<script>
    $(window).scroll(function() {
        if($(window).scrollTop() > 30) {
            $('.menu').css('position','fixed');
            $('.submenu div').css('top','0px');
            $('main').css('padding-top','60px');
        } else {
            $('.menu').css('position','static');
            $('.submenu div').css('top','0px');
            $('main').css('padding-top','0px');
        }
    }); 
</script>
<script>
    var startHeight = document.documentElement.clientHeight * 0.85;
    var isPlayed = false;
    $(window).scroll(function() {
        if(document.getElementsByClassName('waif')[0].getBoundingClientRect().top < startHeight && isPlayed == false) {
                isPlayed = true;
                $('.spinNumber1').spincrement({
                        from: 0,
                        duration: 8000
                    });
                    $('.spinNumber2').spincrement({
                        from: 0,
                        duration: 8000
                    });
                    $('.spinNumber3').spincrement({
                        from: 0,
                        duration: 4000,
                        thousandSeparator: ''
                    });
                    $('.spinNumber4').spincrement({
                        from: 0,
                        duration: 8000
                    });
                    $('.spinNumber5').spincrement({
                        from: 0,
                        duration: 6000
                    });
                    $('.spinNumber6').spincrement({
                        from: 0,
                        duration: 4000,
                        thousandSeparator: ''
                    });         
        }
    });
    
</script>
<script>
    $('.tab a').click(function() {
        $('.tab a').removeClass('active');
        $(this).addClass('active');
        $('span.blink', this).hide();
    })
</script>
<script>
    $(document).mouseup(function (e) {
        var container = $(".phone-popup");
        if (container.has(e.target).length === 0){
            container.hide();
        }
    });
</script>
<script>
    $('#moreInfo').click(function() {
        $('.hideAbout').slideDown(1500);
        $('.hideMobAbout').show();
        $(this).hide();
    });
</script>

<script>

$(window).scroll(function(e){
    parallax();
});

function parallax(){
    var scrolled = $(window).scrollTop();
    console.log(scrolled);
    $('.firstbg').css('top', -450+(scrolled * 0.05) + 'px');
    $('.secondbg').css('top', -1000-(scrolled * 0.05) + 'px');

}
</script>
<!-- <script>
    function validateFormCons2() {
        var name = document.forms["cons2"]["name"].value;
        var phone = document.forms["cons2"]["phone"].value;

        if (name == "") {
            alert("Заполните Имя");
            return false;
        }

        if (phone == "") {
            alert("Заполните Телефон");
            return false;
        }
    }

    function validateFormCons() {
        var name = document.forms["cons"]["name"].value;
        var phone = document.forms["cons"]["phone"].value;

        if (name == "") {
            alert("Заполните Имя");
            return false;
        }

        if (phone == "") {
            alert("Заполните Телефон");
            return false;
        }
    }

    function validateFormMessage() {
        var name = document.forms["msg"]["name"].value;
        var phone = document.forms["msg"]["phone"].value;
        var Text = document.forms["msg"]["text"].value;

        if (name == "") {
            alert("Заполните Имя");
            return false;
        }

        if (phone == "") {
            alert("Заполните Телефон");
            return false;
        }

        if (text == "") {
            alert("Напишите сообщение");
            return false;
        }
    }
</script> -->
</body>

</html>