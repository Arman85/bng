<!-- newsletter  -->
<div class="newsletter">
    <img src="/img/call-w.png">
    <p><b>Спасибо, что подписались <br> на нашу рассылку!</b></p>
    <p class="txt">Мы постараемя сделать рассылку, как <br>можно более интересной</p>
    <span class="hideNewsletter">На главную</span>
</div>
<!--  -->


<!-- <div class="connection">
    <div class="hideConnect"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path fill="#fff" d="M38 12.83L35.17 10 24 21.17 12.83 10 10 12.83 21.17 24 10 35.17 12.83 38 24 26.83 35.17 38 38 35.17 26.83 24z"/></svg></div>
    <p><b>Выберите способ связи</b></p>
    <img src="/img/call-w.png">
    <p class="text"><b>Позвонить</b> менеджеру</p>
    <img src="/img/wa-g.png">
    <p class="text"><b>Написать</b> сообщение по Whatsapp</p>
    <img src="/img/callme-o.png">
    <p class="text"><b>Заказать</b> звонок консультанта</p>
    <span>Показать офис на картах</span>
    <p class="lastt">Дорогие друзья! Напоминаем Вам что мы работаем с понедельника по пятницу</p>
</div> -->


<script>
    /* this script closes  popup window when click out of it  */
    $(document).mouseup(function (e) {
        var container = $(".phone-popup");
        if (container.has(e.target).length === 0){
            container.hide();
        }
    });
</script>