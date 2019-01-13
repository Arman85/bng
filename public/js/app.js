/* ===========================
  Common scripts

1. Slick scripts 
2. Scroll
3. Spincrement
4. Choose tab 
5. Show full text of About us
6. Parallax
7. Validate forms
8. AJAX Send forms
9. Audio
10. services text
11. hamburger
12. Phone button on Mobile version
12.1 Phone button on Mobile version 
13. Mobile menu 
14. Choose service 
15. Service choice block
16. A service block 
17. Map choice
17.1 Yandex maps API
17.2 Google Maps API
18. Writing to CEO
19. City choice
20. Connection choice on mobile
21. Message sent 


==============================*/


/* ===========================
  1. Slick scripts 
  ==========================*/

$('.partners-slider').slick({
    swipe: false
});

$('.ps-1').slick();

$(document).ready( function() {
  $('.lic-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 3000
  });
});

$('.lic2-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1
});

$('.lic3-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1
});


$('.actions-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
});



$('#ACTION').click(function() {
    $('.actions-slider').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
  });
});


$('.clients-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
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

/* ===========================
  2. Scroll 
  ==========================*/

$(window).scroll(function() {
    if($(window).scrollTop() > 30) {
        $('.menu').css('position','fixed');
        $('.submenu div').css('top','0px');
        $('main').css('padding-top','60px');
        $('.chooseCity').css('top','60px');
        $('.show-logo').css('visibility', 'visible');

        $('.order').css('top','60px');
        $('.mobile-menu').css('top','60px');
        $('.service').css('top','60px');
        $('.choose-map').css('top','60px');
        $('.map-2gis').css('top','60px');
        $('.map-google').css('top','60px');
        $('.map-yandex').css('top','60px');
        $('.message').css('top','60px');

        $('.order').css('height','calc(100vh - 60px)');
        $('.choose-map').css('height','calc(100vh - 60px)');
        $('.service').css('height','calc(100vh - 60px)');
        $('.mobile-menu').css('height','calc(100vh - 60px)');
        $('.map-2gis').css('height','calc(100vh - 60px)');
        $('.map-yandex').css('height','calc(100vh - 60px)');
        $('.map-google').css('height','calc(100vh - 60px)');
        $('.message').css('height','calc(100vh - 60px)');
    } else {
        $('.menu').css('position','static');
        $('.submenu div').css('top','0px');
        $('main').css('padding-top','0px');
        $('.chooseCity').css('top','90px');
        $('.show-logo').css('visibility', 'hidden');

        $('.order').css('top','90px');
        $('.mobile-menu').css('top','90px');
        $('.service').css('top','90px');
        $('.choose-map').css('top','90px');
        $('.map-yandex').css('top','90px');
        $('.map-google').css('top','90px');
        $('.map-2gis').css('top','90px');
        $('.message').css('top','90px');

        $('.order').css('height','calc(100vh - 90px)');
        $('.choose-map').css('height','calc(100vh - 90px)');
        $('.service').css('height','calc(100vh - 90px)');
        $('.mobile-menu').css('height','calc(100vh - 90px)');
        $('.map-yandex').css('height','calc(100vh - 90px)');
        $('.map-google').css('height','calc(100vh - 90px)');
        $('.map-2gis').css('height','calc(100vh - 90px)');
        $('.message').css('height','calc(100vh - 90px)');
    }
}); 




$(document).ready(function () {
    $('#tomain').click(function() {
      $('html, body').animate({
        scrollTop: $("main").offset().top
      }, 2000)
    }), 
    $('#toservices').click(function() {
      $('html, body').animate({
        scrollTop: $("#vue-tab").offset().top - 90
      }, 2000)
    }), 
    $('#toabout').click(function() {
      $('html, body').animate({
        scrollTop: $(".about").offset().top - 60
      }, 2000)
    }),
    $('#tocontacts').click(function() {
      $('html, body').animate({
        scrollTop: $("footer").offset().top - 60
      }, 2000)
    })
});
/* ===========================
  3. Spincrement  
  ==========================*/

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
  

/* ===========================
  4. Choose tab 
  ==========================*/

$('.tab a').click(function() {
    $('.tab a').removeClass('active');
    $(this).addClass('active');
    $('span.blink', this).hide();
});
/* ===========================
  5. Show full text of About us
  ==========================*/

$('#moreInfo').click(function() {
    $('.hideAbout').slideDown(1500);
    $('.hideMobAbout').show();
    $(this).hide();
});

/* ===========================
  6. Parallax
  ==========================*/
$(window).scroll(function(e){
    parallax();
});

function parallax(){
    var scrolled = $(window).scrollTop();/*
    $('.firstbg').css('top', -450+(scrolled * 0.05) + 'px');*/
    $('.secondbg').css('top', -1000-(scrolled * 0.05) + 'px');

}
/* ===========================
  7. Validate forms
  ==========================*/

function validateFormMessageInMobileMenu() {
    var name = document.forms["mess"]["name"].value;
    var phone = document.forms["mess"]["phone"].value;
    var text = document.forms["mess"]["text"].value;

    if (name == "") {
        alert("Заполните Имя");
        return false;
    }

    if (phone == "") {
        alert("Заполните Телефон");
        return false;
    }

    if (text == "") {
        alert("Напишите что-нибудь");
        return false;
    }
}


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

function validateFormService() {
    var phone = document.forms["serv"]["phone"].value;

    if (phone == "") {
        alert("Заполните Телефон");
        return false;
    }
}

function validateFormMessageInMobileMenu() {
    var name = document.forms["mess"]["name"].value;
    var phone = document.forms["mess"]["phone"].value;
    var text = document.forms["mess"]["text"].value;

    if (name == "") {
        alert("Заполните Имя");
        return false;
    }

    if (phone == "") {
        alert("Заполните Телефон");
        return false;
    }

    if (text == "") {
        alert("Напишите что-нибудь");
        return false;
    }
}

function validateCeo() {
    var name = document.forms["ceo"]["ceoname"].value;
    var phone = document.forms["ceo"]["ceophone"].value;
    var text = document.forms["ceo"]["ceotext"].value;

    if (name == "") {
        alert("Заполните Имя");
        return false;
    }

    if (phone == "") {
        alert("Заполните Телефон");
        return false;
    }

    if (text == "") {
        alert("Напишите что-нибудь");
        return false;
    }
}


function validateMessageFromPage() {
    var name = document.forms["message"]["mesname"].value;
    var phone = document.forms["message"]["mesphone"].value;
    var text = document.forms["message"]["mestext"].value;

    if (name == "") {
        alert("Заполните Имя");
        return false;
    }

    if (phone == "") {
        alert("Заполните Телефон");
        return false;
    }

    if (text == "") {
        alert("Напишите что-нибудь");
        return false;
    }
}


/* ===========================
  8. AJAX Send forms
  ==========================*/
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$("#sendConsButton").click(function(e){

    validateFormCons();
    var cname = $('#cname').val();
    var cphone = $('#cphone').val();
    var cwhen = $('#cwhen').val();
    var ccity = $('#ccity').val();
    var clang = $('#clang').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/send-mail-req',
        method: 'POST',
        data: {
            name: cname,
            phone: cphone,
            when: cwhen,
            lang: clang,
            city: ccity
        },
        success: function() {
          $.sweetModal({
            content: 'Заявка на консультацию успешно отправлена.',
            icon: $.sweetModal.ICON_SUCCESS
          });
            // $('.sent').fadeIn();
            // $('.sentMob').fadeIn();
        }
    });
    e.preventDefault();
});

$("#sendConsButton2").click(function(e){

    validateFormCons2();
    var cname = $('#cname2').val();
    var cphone = $('#cphone2').val();
    var cwhen = $('#cwhen2').val();
    var ccity = $('#ccity2').val();
    var clang = $('#clang2').val();
    var cint = $('#cint').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/send-mail-consul',
        method: 'POST',
        data: {
            name: cname,
            phone: cphone,
            when: cwhen,
            lang: clang,
            city: ccity,
            cint: cint
        },
        success: function() {
            $('.sent').fadeIn();
            $('.sentMob').fadeIn();
        }
    });
    e.preventDefault();
});


$("#sendmail_service").click(function(e){

    var valid = validateFormService();
    if(valid == false) {
      return false;
    }
    var sservice = $('#chosen').val();
    var sphone = $('#sphone').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/send-mail-service', //Путь который прописан в файле web (route)
        method: 'POST',
        data: {
            service: sservice,
            phone: sphone
        },
        success: function() {
            alert(sservice);
            $('.sent').fadeIn();
            $('.sentMob').fadeIn();
        }
    });
    e.preventDefault();
});


$("#sendmail_message_from_mobile_menu").click(function(e){

    var valid = validateFormMessageInMobileMenu();
    if(valid == false) {
      e.preventDefault();
      return false;
    }
    var mname = $('#mname').val();
    var mphone = $('#mphone').val();
    var mtext = $('#mtext').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/send-mail-message-from-mobile-menu',
        method: 'POST',
        data: {
            name: mname,
            phone: mphone,
            text: mtext
        },
        success: function() {
            $('.sent').fadeIn();
            $('.sentMob').fadeIn();
        }
    });
    e.preventDefault();
});



$("#sendmail_message_to_ceo").click(function(e){

    var valid = validateCeo();
    if(valid == false) {
      e.preventDefault();
      return false;
    }
    var ceoname = $('#ceoname').val();
    var ceophone = $('#ceophone').val();
    var ceotext = $('#ceotext').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/send-mail-to-ceo',
        method: 'POST',
        data: {
            name: ceoname,
            phone: ceophone,
            text: ceotext
        },
        success: function() {
            $('.sent').fadeIn();
            $('.sentMob').fadeIn();
        }
    });
    e.preventDefault();
});


$("#sendMessageFromPage").click(function(e){

    var valid = validateMessageFromPage();
    if(valid == false) {
      e.preventDefault();
      return false;
    }
    var mesname = $('#mesname').val();
    var mesphone = $('#mesphone').val();
    var mescity = $('#mescity').val();
    var mestext = $('#mestext').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/send-mail-messages',
        method: 'POST',
        data: {
            name: mesname,
            phone: mesphone,
            city: mescity,
            text: mestext
        },
        success: function() {
            $('.sent').fadeIn();
            $('.sentMob').fadeIn();
        }
    });
    e.preventDefault();
});



/* ===========================
  9. Audio 
  ==========================*/

/*var audio = document.getElementById("audio");
function sound() {
  audio.currentTime = 0;
  audio.volume = 0.1;
  audio.play();
}
*/

/* ===========================
  10. SERVICES TEXT 
  ==========================*/

var service = {
  "n1": {
      "svg" : "<img src='/img/services/1.svg'>",
      "title": "Оценка недвижимости",
      "text": "",
  },
  "n2": {
    "svg" : "<img src='/img/services/2.svg'>",
      "title": "Оценка транспорта",
      "text": "56oArman",
  },
  "n3": {
    "svg" : "<img src='/img/services/3.svg'>",
      "title": "Оценка оборудования",
      "text": "5ko",
  },
  "n4": {
    "svg" : "<img src='/img/services/4.svg'>",
      "title": "Оценка бизнеса",
      "text": "5ko",
  },
  "n5": {
    "svg" : "<img src='/img/services/5.svg'>",
      "title": "Оценка интеллектуальной собственности",
      "text": "5ko",
  },
  "n6": {
    "svg" : "<img src='/img/services/6.svg'>",
      "title": "Оценка для МСФО",
      "text": "5ko",
  },
  "n7": {
    "svg" : "<img src='/img/services/7.svg'>",
      "title": "Оценка для кредитования",
      "text": "5ko",
  },
  "n8": {
    "svg" : "<img src='/img/services/8.svg'>",
      "title": "Юридические и нотариал. услуги",
      "text": "5ko",
  },
  "n9": {
    "svg" : "<img src='/img/services/9.svg'>",
      "title": "Регист. и консульт. в гос.закупках",
      "text": "5ko",
  }
}
var servId = 1; //Устанавливаем начальный id.
$('.goServ').click(function() {
 
  $('.order').fadeOut();
  $('.service').fadeIn();
  //alert(service["smm"+servId].svg);
  $('span.svg').html(service["n"+servId].svg); /* Здесь вставляем в элемент span с классом svg,  html эелемнт img и путь к файлу svg. service это json массив далее в квадратных скобках обращаюсь к имени ячейки которая называется "n", в самом массиве их 10, и далее как бы циклом пробежится по всему массиву и далее через знак + указываем счечик который начинается с 1, и указываем имя свойства svg, в котором указан путь к файлу изображения. */
  $('span.afterSvg').html(service["n"+servId].title);
  $('#chosen').val(service["n"+servId].title);/*Здесь передаем в форму в тег инпут в его value имя выбранного сервиса, что бы в последующем передать его в отправку на емайл*/
  $('div.mtxt').html(service["n"+servId].text);


  $('#js-menuName').text('Услуга');

  /*sound();*/
   $('.goServ').removeClass('orangeChoose');
});

function goServ1() {
    servId = 1;
  $('.order').fadeOut();
  $('.service').fadeIn();

  $('span.svg').html(service["n"+servId].svg);
  $('span.afterSvg').html(service["n"+servId].title);
  $('#chosen').val(service["n"+servId].title);
  $('div.mtxt').html(service["n"+servId].text);
allClosed = false;
        $('#nav-icon3').addClass('open');

  $('#js-menuName').text('Услуга');

  /*sound();*/
}

function goServ2() {
    servId = 1;
  $('.order').fadeOut();
  $('.service').fadeIn();

  $('span.svg').html(service["n"+servId].svg);
  $('span.afterSvg').html(service["n"+servId].title);
  $('#chosen').val(service["n"+servId].title);
  $('div.mtxt').html(service["n"+servId].text);

allClosed = false;
        $('#nav-icon3').addClass('open');
  $('#js-menuName').text('Услуга');

  /*sound();*/
}

/* ===========================
  11. Hamburger 
  ==========================*/



var allClosed = true;
var callCenterClosed = false;

    $('#nav-icon3').click(function() {
      if(allClosed == true) {
        allClosed = false;
        $('#nav-icon3').addClass('open');
        $('#loop2').hide();
        $('#tel2').hide();
        /*sound();*/
        $('.search').show();
        $('#js-menuName').text('');
        $('.mobile-menu').fadeIn();
      } else {
        $('#logo1').show();
        $('#logo2').hide();
        $('#loop2').show();
        $('#tel2').show();
        $('.nav').show();
        $('.mobile-menu').fadeOut();
        $('.order').fadeOut();
        $('.service').fadeOut();
        $('.message').fadeOut();
        $('.choose-map').fadeOut();
        $('.map-2gis').fadeOut();
        $('.map-google').fadeOut();
        $('.map-yandex').fadeOut();
        $('#js-menuName').text('');
        $('.phoneMore').hide();
        $(this).removeClass('open');
        allClosed = true;
        /*sound();*/
        $('.search').hide();
        if(callCenterClosed == true) {
          $('.bion-select').show();
        }
      }

    });

/* ===========================
  12. Phone button on Mobile version 
  ==========================*/
    $('#tel2').click(function() {
        $('#logo1').show();
        $('#logo2').hide();
        $('#loop2').show();
        $('#tel2').show();
        $('.search').hide();
        $('.phoneMore').hide();
        $(this).removeClass('open');
        $('.bion-select').show();
        allClosed = true;
        allClosed = false;
        /*sound();*/
    });


/* ===========================
  12.1 Phone button on Mobile version 
  ==========================*/
    $('.select-items div:first-child').addClass('shymkent');
    $('.select-items div:last-child').addClass('almaty');

    $('.shymkent').click(function() {
        $('.bion-select').hide();
        $('.phoneMore').show();
        $('#nav-icon3').addClass('open');
        allClosed = false;
        /*sound();*/
    })
    $('.almaty').click(function() {
        $('.bion-select').hide();
        $('.phoneMore').show();
        $('#nav-icon3').addClass('open');
        allClosed = false;
        /*sound();*/
    })

$('.showCity').click(function() {
  $('.bion-select').show();
  $('.callCenter').hide();
  callCenterClosed = true;
});

/* ===========================
  13. Mobile menu 
  ==========================*/


$('.closeMenu').click(function() {
  $('.mobile-menu').fadeOut();
  $('#logo1').show();
        $('#logo2').hide();
        $('#loop2').show();
        $('#tel2').show();
        $('.search').hide();
        $('.phoneMore').hide();
  $('#nav-icon3').removeClass('open');  
   allClosed = true;
   /*sound();*/
});

/* ===========================
  14. Choose service 
  ==========================*/

$('.serv').click(function() {
  $('.goServ').addClass('orangeChoose');
  $('.serv').removeClass('Act');
  $('.serv').removeClass('ORANGE'); //У остальных элементов с классами serv удаляем класс BLUE
  $(this).addClass('ORANGE'); //А текущему по которому кликнули с классам serv добавляем класс BLUE

  servId = $(this).data('id');
  /*sound();*/
});


/* ===========================
  15. Service choice block 
  ==========================*/
$('.closeServMenu').click(function() {
    $('.mobile-menu').show();
    $('.order').fadeOut();
    $('#js-menuName').text('');
    /*sound();*/
});

$('.showOrderBox').click(function() {
  $('.order').fadeIn();
  $('#nav-icon3').addClass('open');
  allClosed = false;
  $('.mobile-menu').fadeOut();
  $('#js-menuName').text('Список услуг');
  /*sound();*/
});

/* ===========================
  16. A service block 
  ==========================*/

$('.closeOneServMenu').click(function() {
    $('.order').show();
    $('.service').fadeOut();
    $('#js-menuName').text('Список услуг');
    /*sound();*/
});


/* ===========================
  17. Map choice 
  ==========================*/
$('.hideMapChoose').click(function() {
    $('.mobile-menu').fadeIn();
    $('.choose-map').fadeOut();
    $('#js-menuName').text('');
    /*sound();*/
});

$('.showMapChoose').click(function() {
    $('.mobile-menu').fadeOut();
    $('.choose-map').fadeIn();
    $('#js-menuName').text('Выбор карты');
    $('.popup').hide();
        $('#nav-icon3').addClass('open');

    allClosed = false;
    /*sound();*/
});

$('.map1').click(function() {
    $('.choose-map').fadeOut();
    $('.map-2gis').fadeIn();
    $('#js-menuName').text('2GIS');
    /*sound();*/
    $('#nav-icon3').addClass('open');
  allClosed = false;
});

$('.map2').click(function() {
    $('.choose-map').fadeOut();
    $('.map-google').fadeIn();
    $('#js-menuName').text('Google Maps');
    $('#nav-icon3').addClass('open');
  allClosed = false;
    /*sound();*/
});

$('.map3').click(function() {
    $('.choose-map').fadeOut();
    $('.map-yandex').fadeIn();
    $('#js-menuName').text('Yandex Maps');
    $('#nav-icon3').addClass('open');
  allClosed = false;
    /*sound();*/
});

$('.hideMap2gis').click(function() {
    $('.choose-map').fadeIn();
    $('.map-2gis').fadeOut();
    $('#js-menuName').text('Выбор карты');
    /*sound();*/
});

$('.hideMapYandex').click(function() {
    $('.choose-map').fadeIn();
    $('.map-yandex').fadeOut();
    $('#js-menuName').text('Выбор карты');
    /*sound();*/
});

$('.hideMapGoogle').click(function() {
    $('.choose-map').fadeIn();
    $('.map-google').fadeOut();
    $('#js-menuName').text('Выбор карты');
    /*sound();*/
});

/* ===========================
  17.1 Yandex Maps API 
  ==========================*/
ymaps.ready(init);

function init(){ 
    var myMap = new ymaps.Map("map", {
        center: [42.317472, 69.585637],
        zoom: 17
    }); 
    
    var myPlacemark = new ymaps.Placemark([42.317472, 69.585637], {
        hintContent: 'Мы здесь'
    });
    
    myMap.geoObjects.add(myPlacemark);
}

$('iframe#myFrame').contents().find('div.myClass').append("Hallo, Welt!");

/* ===========================
  17.2 Google Maps API 
  ==========================*/

var map;
var cityLoc = {lat: 42.317472, lng: 69.585637};
function initMap() {
  map = new google.maps.Map(document.getElementById('googlemap'), {
    center: cityLoc,
    zoom: 17
  });
  
  var marker = new google.maps.Marker({position: cityLoc, map: map});
}

/* ===========================
  18. Writing to CEO
  ==========================*/
 $('#showCeo').click(function() {
    $('.writeCeo').show();
    $('.hideTesti').hide();
    /*sound();*/
});
 $('.hideCeo').click(function() {
    $('.writeCeo').hide();
    $('.hideTesti').show();
    /*sound();*/
});

/* ===========================
  19. City choice
  ==========================*/

$('.hideChooseCity').click(function() {
    $('.chooseCity').fadeOut();
    allClosed = true;
    /*sound();*/
});
 $('.chooseShymkent').click(function() {
    $('.chooseCity').fadeOut();
    $('.aa_htcity_items').fadeOut();
    $('.aa_showcities').text('Шымкент');
    allClosed = true;
    /*sound();*/
});
 $('.chooseAlmaty').click(function() {
    $('.chooseCity').fadeOut();
    $('.aa_htcity_items').fadeOut();
    $('.aa_showcities').text('Алматы');
    allClosed = true;
    /*sound();*/
});   

/* ===========================
  20. Connection choice on mobile
  ==========================*/
$('.hideConnect').click(function() {
    $('.connection').fadeOut();
    /*sound();*/
    allClosed = true;
}); 
$('#tel2').click(function() {
    $('.connection').fadeIn();
    /*sound();*/
}); 


/* ===========================
  21. Message sent 
  ==========================*/
/* close you message  sent block */

$('#closeThanks').click(function() {
    $('.sent').fadeOut();
    $('.sentMob').fadeOut();
    $('.message').fadeOut();
});

$('#closeThanksMob').click(function() {
    $('.sentMob').fadeOut();
    $('.sent').fadeOut();
    $('.message').fadeOut();
});


/* ===========================
  21. Message in mobile menu
  ==========================*/

$('.closeMessageFromMM').click(function() {
    $('.message').fadeOut();
    $('.mobile-menu').fadeIn();
});

$('.showMessageForm').click(function() {
    $('.message').fadeIn();
    $('.mobile-menu').fadeOut();
    $('.popup').hide();
    $('#nav-icon3').addClass('open');

    allClosed = false;
});

/** menu Popup */


$('#showPopup').click(function() {

      if(allClosed == true) {
        allClosed = false;
        $('#nav-icon3').addClass('open');
        $('#loop2').hide();
        $('#tel2').hide();
        /*sound();*/
        $('.search').show();
        $('#js-menuName').text('');
        $('.mobile-menu').fadeIn();
      } else {
        $('#logo1').show();
        $('#logo2').hide();
        $('#loop2').show();
        $('#tel2').show();
        $('.nav').show();
        $('.mobile-menu').fadeOut();
        $('.order').fadeOut();
        $('.service').fadeOut();
        $('.message').fadeOut();
        $('.choose-map').fadeOut();
        $('.map-2gis').fadeOut();
        $('.map-google').fadeOut();
        $('.map-yandex').fadeOut();
        $('#js-menuName').text('');
        $('.phoneMore').hide();
        $('#nav-icon3').removeClass('open');
        allClosed = true;
        /*sound();*/
        $('.search').hide();
        if(callCenterClosed == true) {
          $('.bion-select').show();
        }
      }

});

$(document).mouseup(function (e){ // событие клика по веб-документу
        var div = $(".popup"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.fadeOut(); // скрываем его
        }
});



/***city **///


$('.aa_showcities').click(function() {
    $('.hahahah').fadeToggle();
    $('.jq_ab_select_city').fadeOut();
});

$('.jq_ab_close_city').click(function() {
    $('.jq_ab_select_city').fadeOut();
});
