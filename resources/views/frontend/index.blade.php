<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>BION - Оценочная компания в Казахстане</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="/css/mobile.css">
    <link rel="stylesheet" href="/css/desktop.css">
    <link rel="stylesheet" href="/css/vendor/lightbox.min.css">
    <meta name="theme-color" content="#008cd0">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <!-- 2gis include -->
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <!-- 2gis init -->
    <script type="text/javascript">
        var mapTwoGis;
        DG.then(function () {
            mapTwoGis = DG.map('map-2gis', {
                center: [42.317472, 69.585637],
                zoom: 17
            });
            DG.marker([42.317472, 69.585637]).addTo(mapTwoGis).bindPopup('ТОО Biongroup');
        });
    </script>
</head>
<body>
<!-- CLick sounds -->
<audio controls id="audio">  
    <source src="/audio/click.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
<!-- End of CLick sounds -->

<div class="firstbg"></div>
<div class="secondbg"></div>

@include('frontend.partials.order')
@include('frontend.partials.service')
@include('frontend.partials.message')
@include('frontend.partials.mobile_menu')
@include('frontend.partials.sent')
@include('frontend.partials.choose_city')
@include('frontend.partials.connection')
@include('frontend.partials.map')
@include('frontend.partials._header')


<!-- Start Popup welcome to site, and choose city -->
<!-- Trigger/Open The Modal -->
    <!-- Trigger/Open The Modal -->
    <!-- <button id="myBtn">Open Modal</button> -->

    <!-- The Modal choose city -->
    <div id="myModal-choose-city" class="modal-choose-city">
      <!-- Modal content -->
        <div class="modal-content-choose-city" id="modal-content-choose-city-id">
            <div class="modal-header">
              <h2 class="title-popup">Добро пожаловать!<!-- <span class="close-choose-city">&times;</span> --></h2>  
              <p class="sub-title-popup">Выберите свой регион для входа на сайт или просто нажмите на кнопку войти</p>
            </div>
            <div class="modal-body">
                <div class="btns-listener">
                    <p>
                        <button class="cityes shymkent-city"><img src="{{ asset('img/icons/choose-city.png') }}" alt="">Шымкент</button>
                        <br>
                        <button class="cityes almaty-city"><img src="{{ asset('img/icons/choose-city.png') }}" alt="">Алматы</button>
                    </p>
                    <!-- <button type="" class="btn-popup btn-choose-city">Войти<img src="{{ asset('img/icons/sign-in.png') }}" alt=""></span></button> -->
                </div>
                <p class="short-description-popup">Дорогие друзья! Добро пожаловать на сайт оценочной компании ТОО «БИОН Group»</p>
            </div>
            <div class="modal-footer">
                <h3><img src="{{ asset('img/bglogo.png') }}"></h3>
                <p class="copy-popup">ТОО «БИОН Group», 2019 (Все права защищены.)</p>
            </div>
        </div>
    </div>
    
    <!-- The Modal call order -->
    <div id="myModal-call-order" class="modal-call-order">
      <!-- Modal content -->
        <div class="modal-content-call-order">
            <form action="/send-mail-messages" method="POST" name="call-order-form" class="">
                {{ csrf_field() }}
                <div class="modal-header">
                  <h2 class="title-popup">Заказать звонок<span class="close-call-order">&times;</span></h2>
                </div>
                <div class="modal-body">
                    <p class="no-margin">
                        <input type="text" name="name" class="call-order-input" placeholder="Ваше имя" id="call-name">
                        <br>
                        <input type="text" name="number" class="call-order-input" placeholder="+7(ХХХ) ХХХ ХХ ХХ" id="call-phone">
                        <br>
                        <p class="city-select">
                            <select id="call-order-city" name="cityCallOrder">
                                <option value="Шымкент" selected>Шымкент</option>
                                <option value="Алматы">Алматы</option>
                            </select>
                        </p>
                        
                    </p>
                    <button type="submit" class="btn-popup" id="call-order-btn">Заказать<img src="{{ asset('img/icons/send-button.svg') }}" alt=""></button>
                    <p class="short-description-popup">Наши менеджеры свяжутся с Вами в ближайшее время! Мы работаем с 09:00 до 18:00 с Пн-Пт.</p>
                </div>    
            </form>
            <div class="modal-footer">
                <h3><img src="{{ asset('img/bglogo.png') }}"></h3>
                <p class="copy-popup">ТОО «БИОН Group», 2019 (Все права защищены.)</p>
            </div>
        </div>
    </div>

    <!-- The Modal service order -->
    <div id="myModal-service-order" class="modal-service-order">
      <!-- Modal content -->
        <div class="modal-content-service-order">
            <form action="/send-mail-service" name="service-order-form" method="POST">
                {{ csrf_field() }}
                <div class="modal-header">
                  <h2 class="title-popup">Заказ услуги<span class="close-service-order">&times;</span></h2>  
                  <p class="sub-title-popup serv-title"></p>
                  <input type="hidden" name="serviceName" value="" class="current-serv-name">
                </div>
                <div class="modal-body">
                    <p class="no-margin">
                        <input type="text" name="name" class="call-order-input" placeholder="Ваше имя" id="serv-client-name">
                        <br>
                        <input type="text" name="number" class="call-order-input" placeholder="+7(ХХХ) ХХХ ХХ ХХ" id="serv-client-phone">
                        <br>
                        <input type="text" name="shortDescription" placeholder="Место оценки, город, район, село(коротко)" class="call-order-input" id="serv-client-desc">
                        <br>
                        <p class="city-select">
                            <select name="cityService" id="city-service-order">
                                <option value="Шымкент" selected>Шымкент</option>
                                <option value="Алматы">Алматы</option>
                            </select>
                        </p>
                    </p>
                    <button type="" class="btn-popup" id="service-order">Заказать<img src="{{ asset('img/icons/send-button.svg') }}" alt=""></span></button>
                    <p class="short-description-popup">Наши менеджеры свяжутся с Вами в ближайшее время! Мы работаем с 09:00 до 18:00 с Пн-Пт.</p>
                </div>
            </form>
            <div class="modal-footer">
                <h3><img src="{{ asset('img/bglogo.png') }}"></h3>
                <p class="copy-popup">ТОО «БИОН Group», 2019 (Все права защищены.)</p>
            </div>
        </div>
    </div>

<!-- end Popup welcome to site, and choose city -->

<main>
    <!-- Row with slider and request form -->
    <div class="row mob">
        <div class="container-fluid responsive-container">
            <!-- Services menu и форма "Что вас интересует"-->
            <div class="services-menu-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="service-icons service-icons1">
                            @foreach ( $myservices as $myservice )
                            @if ( $loop->index <= 4 )
                            <li class="myserv">
                                <a href="#">
                                    <img src="img/services/{{ $myservice->img }}" alt="{{ $myservice->title }}" class="GREY" title="{{ $myservice->title }}" data-id="{{ $myservice->id }}">
                                    {{ $myservice->title }}
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="service-icons service-icons2">
                            @foreach ( $myservices as $myservice )  
                            @if ( $loop->index > 4 )  
                            <li class="myserv">
                                <a href="#">
                                    <img src="img/services/{{ $myservice->img }}" alt="{{ $myservice->title }}" class="GREY" title="{{ $myservice->title }}">
                                    {{ $myservice->title }}
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>  
            </div>
            <!-- Форма "Что вас интересует" -->
            <div class="what-interested">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <h2>Что Вас интересует?</h2>
                        <h3>Выберите и закажите услугу здесь!</h3>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <form action="#" name="form-what-interested" method="POST" class="form-what-interested">
                            <input type="text" name="your-name" placeholder="Ваше имя">
                            <input type="text" name="your-number" placeholder="+7 (ХХХ) ХХХ ХХ ХХ">
                            <input type="text" name="your-short-description" placeholder="Место оценки, город, район, село(коротко)">
                            <input type="hidden" name="" value="" id="current-serv">
                            <input type="hidden" name="" value="" class="current-serv-name">
                            <button type="submit" class="btn-what-interested">Заказать <img src="{{ asset('img/icons/send-button.svg') }}"></button> 
                        </form>
                    </div>
                </div>
            </div>
            <!-- Services menu Services menu и форма "Что вас интересует" end -->
        </div>
        <!-- Slider -->
        <div class="col-lg-12 col-12 slider carousel slide" data-ride="carousel"  id="mainCarousel">
            <div class="carousel-inner">
                {!! $mainSlider !!}
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
    </div>
    <!-- End of row -->
    <!-- How do we work block -->
    <div class="hww">
        <h3>Как мы работаем</h3>
        <h4>Выберите и закажите услугу здесь! </h4>
        <p>А специальный калькулятор рассчитает Вам стоимость услуги! Быстро и удобно! </p>
        {!! $hww !!}
    </div>
    <!-- End of How do we work block -->

    <!-- Profit -->
    <div class="profit">
        <h3>Почему выгодно работать с нами!</h3>
        <div class="row">
            {!! $why !!}
        </div>
    </div>
    <!-- End of Profit -->
    <!-- Our partners block -->
    <div class="partners client">       
        <div>
            <h3 class="title">Наши клиенты  и партнеры</h3>
            <div class="clients-slider">
                <div><img style="width:57%;margin-top: 0px;" src="/img/clients/autodom.png" alt="autodom"></div>
                <div><img style="width:65%;margin-top: 0px;" src="/img/clients/aksaigass.png" alt=""></div>
                <div><img style="width:70%;margin-top: 0px;" src="/img/clients/coc.png" alt=""></div>
                <div><img style="width:85%;margin-top: 15px;" src="/img/clients/eurasiamg.png" alt=""></div>
                <div><img style="width:40%;margin-top: 0px;" src="/img/clients/greenhb.png" alt=""></div>
                <div><img style="width:80%;margin-top: 20px;" src="/img/clients/isker.png" alt=""></div>
                <div><img style="width:50%;margin-top: 5px;" src="/img/clients/technok.png" alt=""></div>
                <div><img style="width:70%;margin-top: 20px;" src="/img/clients/rc.png" alt=""></div>
                <div><img style="width:70%;margin-top: 25px;" src="/img/clients/745638.png" alt=""></div>
                <div><img style="width:70%;margin-top: 10px;" src="/img/clients/logo.png" alt=""></div>
                <div><img style="width:70%;margin-top: 33px;" src="/img/clients/madlen.png" alt=""></div>
                <div><img style="width:70%;margin-top: 0px;" src="/img/clients/smai.png" alt=""></div>
                <div><img style="width:70%;margin-top: 0px;" src="/img/clients/spivo.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- End of Our partners block -->

    <!-- We are in figures block -->
    <div class="waif">
        <h3>Мы в цифрах:</h3>
        <div class="row">
            {!! $figures !!}
        </div>
    </div>
    <!-- End of We are in figures block -->
    
    <!-- We have already worked -->
    <div class="experience">
        <h3>Наши оценщики уже работали в следующих сферах:</h3>
        {!! $pricers !!}
    </div>
    <!-- End of We have already worked -->

    <!-- About -->
    <div class="about">
        <h3><img src="{{ asset('img/bglogo.png') }}" alt="bng-logo"></h3>
            {!! $about !!}      
        </div>
    </div>
    <!-- End of About -->
    <!-- Licence block -->
    <div class="licences">
        <h3 class="title hideOnMob"><span>Лицензии</span></span></h3>
            <div class="licWrap">
                
                <!-- slider -->
                <h3 class="title hideOnDesk"><span>Квалификационные <br> свидетельства</span></h3>
                <div class="lic-slider">
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid001.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid001.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid002.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid002.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid003.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid003.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid004.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid004.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid005.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid005.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid006.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid006.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid007.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid007.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid008.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid008.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid009.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid009.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid010.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid010.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid011.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid011.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid012.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid012.jpg') }}" class="lic"></a>
                    </div>
                    <div>
                        <a href="{{ asset('img/lic/big/1/kvalsvid013.jpg') }}" data-lightbox="road"><img src="{{ asset('img/lic/small/1/kvalsvid013.jpg') }}" class="lic"></a>
                    </div>

                </div>
                <!-- End of slider -->
            </div>            
    </div>
    <!-- End of Licence block -->
    <!-- Наши отчеты принимают -->
    <div class="our-reports-accept">

        <div>
            <h3 class="title">Наши отчеты принимают</h3>
            <img src="/img/banks/banks.png" class="banksImgMob">
            <img src="/img/banks/banks_d.png" class="banksImgDesk">
        </div>


    </div>
    <!-- Наши отчеты принимают конец -->
    <!-- Leave request block -->
    <div class="leavereq">
        <div class="row">
            <div class="col-lg-7 phonesite">
                <div class="col-lg-6 offset-lg-6" id="reqForm">
                    <h3>Оставьте заявку сейчас</h3>
                    <p>Выберите себе удобное время для разговора<br> с нашими консультантами</p>
                    <form name="cons">
                        <input type="text" name="name" placeholder="Имя" required id="cname">
                        <input type="text" name="phone" placeholder="Телефон" required id="cphone">
                        <select name="city" class="form-control" id="ccity">
                            <option value="Шымкент" selected>Шымкент</option>
                            <option value="Алматы">Алматы</option>
                        </select>
                        <select name="when" class="form-control" id="cwhen" required>
                            <option value="" selected>Когда вам позвонить?</option>
                            <option value="До обеда">До обеда</option>
                            <option value="После обеда">После обеда</option>
                            <option value="Завтра">Завтра</option>
                            <option value="В течение недели">В течение недели</option>
                        </select>
                        <select name="lang" class="form-control" id="clang">
                            <option value="" selected>Выберите язык (необяз.)</option>
                            <option value="Русский">Русский</option>
                            <option value="Казахский">Казахский</option>
                        </select>
                        {{ csrf_field() }}
                        <button id="sendConsButton">Отправить</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 phonesiteMob">
                <img src="/img/common/index/woman.png" class="woman">
            </div>
        </div>
    </div>
    <!-- End of Leave request block -->
    <!-- Start map -->
    <div class="mymap-2gis">

      <span class="hideMap2gis">Назад</span>   
      <iframe frameborder="no" style=" box-sizing: border-box;" class="mapHeight" src="http://widgets.2gis.com/widget?type=firmsonmap&amp;options=%7B%22pos%22%3A%7B%22lat%22%3A42.317444%2C%22lon%22%3A69.585614%2C%22zoom%22%3A16%7D%2C%22opt%22%3A%7B%22city%22%3A%22shymkent%22%7D%2C%22org%22%3A%2270000001025819458%22%7D"></iframe>
    </div>
    <div class="mobile-map-2gis">
        <div id="map-2gis"></div>     
    </div> 
    <!-- End map -->
</main>

<footer class="main-foot">
    {{--{!! $footer !!}--}}
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-lg-3">
                <a href="/" class="logo footer-logo"><img src="{{ asset('img/bglogo.png') }}" alt="Biongroup logo"></a>
                <p class="footer-about">Оценка любого имущества, активов, бизнеса, убытков, оспаривание кадастровой стоимости, ценных бумаг на всей территории КЗ.</p>
                <p class="footer-about">ТОО "BIONGROUP" © 2019</p>
            </div>
            <div class="col-md-3 col-md-push-7 col-sm-6 col-lg-3">
                <div class="text-center">
                    <div class="top-phone">
                        <span>
                            <i class="fa fa-phone"></i>
                             +7 (707)
                        </span>
                        <a href="tel:77077400825">740-08-25</a>
                    </div>
                    <div class="top-phone">
                        <span>
                            <i class="fa fa-phone"></i>
                             +7 (707)
                        </span>
                        <a href="tel:77077400825">740-08-25</a>
                    </div>
                    <div class="top-email">
                        <span>
                            <i class="fa fa-envelope"></i>
                              E-Mail:
                        </span>
                        <a href="mailto:almatiskakov@gmail.com">almatiskakov@gmail.com</a>
                    </div>
                    <div class="top-button">
                        <button class="btn-call-order-foter">Заказать звонок</button>
                    </div>
                    <a href=""><img src="http://www.urdis.ru/img/vk.png"></a>
                    <a href=""><img src="http://www.urdis.ru/img/vk.png"></a>
                    <a href=""><img src="http://www.urdis.ru/img/vk.png"></a>
                    <a href=""><img src="http://www.urdis.ru/img/vk.png"></a>
                    <a href=""><img src="http://www.urdis.ru/img/vk.png"></a>
                    <a href=""><img src="http://www.urdis.ru/img/vk.png"></a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 col-md-pull-3 col-sm-12 col-lg-3">
                <div class="top-pannel-box">
                    <h4>Адреса организации:</h4>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            г. Шымкент, ул. Бейбитшилик 4.
                        </li>
                    </ul>
                </div>
                <div class="top-pannel-box">
                    <h4>Время работы:</h4>
                    <ul>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            пн-пт c 09-00 - 18-00; 
                            <br>
                            сб-вс выходной день.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top-pannel-box">
                    <h4>Услуги компании:</h4>
                    <ul class="menu-type-2">
                        <li><a><span class="fa fa-check"></span>Оценка недвижимости</a></li>
                        <li><a><span class="fa fa-check"></span>Оценка транспорта</a></li>
                        <li><a><span class="fa fa-check"></span>Оценка оборудования</a></li>
                        <li><a><span class="fa fa-check"></span>Оценка бизнеса</a></li>
                        <li><a><span class="fa fa-check"></span>Оценка интелектуальной собсвенности</a></li>
                        <li><a><span class="fa fa-check"></span>Оценка для МСФО</a></li>
                        <li><a><span class="fa fa-check"></span>Оценка для кредитования</a></li>
                        <li><a><span class="fa fa-check"></span>Юридические и нотариал. услуги</a></li>
                        <li><a><span class="fa fa-check"></span>Регист. и Консульт. в гос.закупках</a></li>
                        <li><a><span class="fa fa-check"></span>Другой вид оценки</a></li>        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>






{{-- @include('frontend.partials.vue_templates')--}}


    <script src="/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="/js/vendor/popper.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/vendor/slick.min.js"></script>
    <script src="/js/vendor/vue.js"></script>
    <script src="/js/vendor/jquery.spincrement.min.js"></script>
    <script src="/js/vendor/lightbox.min.js"></script>
    <script src="/js/templates.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPpn49wLx9QuMcbiPuieWAZWRYBPRWZiE&callback=initMap"
    async defer></script>
    <script src="/js/app.js"></script>
    <script src="{{ asset('js/arman.js') }}"></script>
    <script src="{{ asset('js/jquery.sweet-modal.min.js') }}"></script>
</body>

</html>