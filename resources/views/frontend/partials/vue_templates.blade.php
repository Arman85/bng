
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
                {!! $howToPay !!}
</template>
<template id="vacanciesTab">
                {!! $vacancies !!}
</template>
<template id="actionsTab">
             {!! $services !!}
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