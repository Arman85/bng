<!-- service -->
<div class="service">
    <div class="sr1">
        <span class="closeOneServMenu"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path d="M38 12.83L35.17 10 24 21.17 12.83 10 10 12.83 21.17 24 10 35.17 12.83 38 24 26.83 35.17 38 38 35.17 26.83 24z"/></svg></span>
    </div> 
    <div class="sr2">
        <p class="srp json-title">
            <span class="svg"></span>
            <span class="afterSvg">Оценка недвижимости</span>
        </p>
        <div class="mtxt"></div>
        <form class="srb" name="serv" action="/send-mail-testi" method="POST">
            <input type="text" name="name" placeholder="Ваше имя" id="sname">
            <input type="hidden" name="service" value="" id="chosen">
            <input type="text" name="phone" placeholder="Номер телефона" id="sphone">
            <select name="cityServiceMobile" id="city-service-order-mobile">
                <option value="Шымкент" selected>Шымкент</option>
                <option value="Алматы">Алматы</option>
            </select>
            <button id="sendmail_service">Заказать услугу</button>
            {{ csrf_field() }}
        </form>
        <hr>
        <p class="text">
            Это самые распространенные виды оценочных услуг. Также, достаточно много , индивидуальных случаев и  разнообразных ситуаций, в которых требуется заключение оценщика.
        </p>
    </div>
    <div class="last">
        <img src="/img/mobilemenu/5.svg" class="_bion">
        <p>TOO BION Group 2018 (Все права защищены)</p>
    </div>
</div>