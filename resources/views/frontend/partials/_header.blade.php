
<header id="vue-header">
    <!-- Top block -->
    <section class="top-pannel" style="display: block;">
        <div class="container header-container">
            <div class="top-pannel-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="mynav-wrapper">
                            <!-- Logo -->
                            <ul class="logos-list">
                                <li>
                                    <a href="/" class="logo" title="BIONGROUP">
                                        <!-- <img src="{{ asset('img/logo-footer.png') }}" alt="Biongroup"> -->
                                        <img src="{{ asset('img/bglogo.png') }}" alt="bion" id="logo1">
                                        <!-- <img src="/img/common/mobile/logo-m.png" alt="bion" id="logo2" class="hidelogo"> -->
                                    </a>
                                </li>
                                <li>
                                    <a href="/" class="logo-title1">
                                        Оценочная комания
                                    </a>   
                                    <br>
                                    <!-- <a href="/" class="logo-title2">
                                        Работаем на рынке с 2002 года
                                    </a> -->
                                </li>
                            </ul>
                            <!-- End logo -->
                            <!-- Hamburger mobile -->
                            <div id="nav-icon3" class='mymobileSwitch'>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <!-- End of Hamburger mobile -->
                        </div>
                    </div>
                    <div class="clear clearHeader"></div>
                    <div class="col-md-2 col-lg-offset-1">
                        <div class="top-pannel-box hidden-sm hidden-xs">
                            <div class="forDesktop">
                                <h4 class="marginBott">Время работы:</h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        пн-пт c 09-00 - 18-00
                                        <br>
                                        сб-вс выходной день.
                                    </li>
                                </ul>    
                            </div>
                            <div class="forMobile">
                                <h4 class="headerTitle marginBott">Контакты:</h4>
                                <ul>
                                    <li class="shymkent-contacts">
                                        <i class="fa fa-phone"></i>
                                        Рабочий тел: +7-(7252)-77-77-77
                                        <br style="margin-bottom: 15px;">
                                        <i class="fa fa-whatsapp"></i>
                                        Номер ватсап
                                        +7-(777)-777-77-77
                                    </li>
                                    <li class="almaty-contacts">
                                        <i class="fa fa-phone"></i>
                                        Рабочий тел: +7-(727)-395-22-96
                                        <br style="margin-bottom: 15px;">
                                        <i class="fa fa-whatsapp"></i>
                                        Номер ватсап
                                        +7-(702)-821-48-72
                                    </li>
                                </ul>    
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="top-pannel-box hidden-sm hidden-xs">
                            <h4 class="headerTitle marginBott">Адрес организации:</h4>
                            <ul>
                                <li class="shymkent-contacts">
                                    <i class="fa fa-map-marker"></i>
                                     г. Шымкент, ул. Бейбитшилик, 4.
                                </li>
                                <li class="almaty-contacts">
                                    <i class="fa fa-map-marker"></i>
                                     г. Алматы, ул. Жарокова, 153, офис 54.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="top-pannel-box hidden-sm hidden-xs">
                            <div class="forDesktop">
                                <h4 class="headerTitle marginBott">Контакты:</h4>
                                <ul>
                                    <li class="shymkent-contacts">
                                        <i class="fa fa-phone"></i>
                                        Рабочий тел: +7-(7252)-77-77-77
                                        <br style="margin-bottom: 15px;">
                                        <i class="fa fa-whatsapp"></i>
                                        Номер ватсап
                                        +7-(777)-777-77-77
                                    </li>
                                    <li class="almaty-contacts">
                                        <i class="fa fa-phone"></i>
                                        Рабочий тел: +7-(727)-395-22-96
                                        <br style="margin-bottom: 15px;">
                                        <i class="fa fa-whatsapp"></i>
                                        Номер ватсап
                                        +7-(702)-821-48-72
                                    </li>
                                </ul>    
                            </div>
                            
                            <div class="forMobile">
                                <h4 class="marginBott">Время работы:</h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        пн-пт c 09-00 - 18-00
                                        <br>
                                        сб-вс выходной день.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3" id="btnBoxContainer">
                        <div class="btn-box">
                            <!-- <button class="showOrderBox specialButton" id="">Заказать звонок</button> -->
                            <button class="" id="myBtn-call-order">Заказать звонок</button>
                            <a href="https://api.whatsapp.com/send?phone=77077400825" id="watsApp" target="_blank" title="Ответим на WhatsApp">Написать на WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top block end -->
    <!-- Menu -->
    <div class="menu mymenu"  :class="{ sShadow: shadow }">
        <!-- logo  -->
        <div class="container-bbb">
            <a class="show-logo">
                <img src="{{ asset('img/bglogo.png') }}" alt="Biongroup">
                <span>Оценочная компания</span> 
            </a>
            <!-- Hamburger mobile -->
            {{--<div id="nav-icon3" class='mymobileSwitch'>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>--}}
          <!-- End of Hamburger mobile -->
        </div> 
        <!-- end logo -->
        <!-- Search bar -->
        <div class="search">
            <p id="js-menuName">Главное меню</p>
        </div>
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
        <!-- Mobile buttons -->
        <!-- <div id="tel2" class='mobileSwitch'>
            <img src="/img/common/mobile/tel.png">
        </div> -->

        <!-- End of Mobile buttons -->

<!--         <div class="callCenter">
    <p class="phone showCity" @click="showPhone = !showPhone">+7 (725) 246 71 45</p>
    <p class="text">Call-center города Шымкент</p>

</div> -->
        <!-- End callcenter -->
        <!-- Nav -->
        <div class="nav">
           <!--  <a class="sub sm1" :class="{ subActive: sm1 }" @click="chooseMenu('mainmenu','sm1')">Главная</a> -->
            <a id="tomain">Главная</a>
            <a id="toservices">Услуги</a>
            <a id="toabout">О нас</a>
            <a id="tocontacts">Контакты</a>
        </div>
        <!-- End Nav -->
<!--         <div class="submenu">
    <component :is="currentSubMenu">
        
    </component>
</div> -->
    </div>
    <!-- End Menu -->
    <!-- Sub Menu -->

    <!-- End Sub Menu -->
    <!-- Hamburger -->
        <div id="mobile-nav-icon3" class='mobileSwitch'>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
    <!-- End of Hamburger -->
    
</header>