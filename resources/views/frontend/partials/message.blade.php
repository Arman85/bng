<!-- message -->
<div class="message">
    <div class="ms1">
        <span class="closeMessageFromMM"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path d="M38 12.83L35.17 10 24 21.17 12.83 10 10 12.83 21.17 24 10 35.17 12.83 38 24 26.83 35.17 38 38 35.17 26.83 24z"/></svg></span>
    </div> 
    <div class="ms2">
        <p class="msp">Сообщение</p>
        <form class="msb" name="mess">
            <input type="text" name="name" placeholder="Имя" id="mname">
            <input type="text" name="phone" placeholder="Номер телефона" id="mphone">
            <textarea class="form-control" name="text" id="mtext"></textarea>
            <button id="sendmail_message_from_mobile_menu">Отправить сообщение</button>
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
<!--  -->

