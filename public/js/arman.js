$(document).ready( function() {
	
/*==========================
 Common scripts

 1. Modal Choose city
 2. Modal Call order and call order footer
 3. Modal service order
 4. Choose service
 5. Validate forms
 6. AJAX sending forms
 7. Custom code
============================*/	

/*===========================
	1. Choose city
=============================*/
	// Get the modal
	var modalChooseCity = document.getElementById('myModal-choose-city');

	// Get the button that opens the modal
	var btnChooseCity = document.getElementsByClassName("btn-choose-city");

	// Get the <span> element that closes the modal
	var spanChooseCity = document.getElementsByClassName("close-choose-city")[0];

	//Если клик внутри этого блока по любому из елемнтов, то записываю куки на 1 час и скрываю модальное окно 
	$('.btns-listener').click( function(event) {
		event.stopPropagation();
		$.cookie("modalChooseCity", "1house", {expires: 0});
		$(modalChooseCity).fadeOut();
	});
	// Если в куки нет имени modalChooseCity или его значение равно null, то вывести модальное окно о выборе города.
	if ( $.cookie("modalChooseCity") == null )
		{
			setTimeout( function(){
				$(modalChooseCity).fadeIn();
			}, 1000);
		}
	// Иначе если куки есть то не показываем модальное окно 
	else
		{
			$(modalChooseCity).fadeOut();
		}

	// When the user clicks on <span> (x), close the modal 
	$(btnChooseCity).click( function(){
		$(modalChooseCity).fadeOut();
	});

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modalChooseCity) {
			modalChooseCity.style.display = "none";
			alert('Hello');
		}else alert(modalChooseCity);
	}

/*===========================
	2. Call order
=============================*/
	// Get the modal
	var modalCallOrder = document.getElementById('myModal-call-order');

	// Get the button that opens the modal
	var btnCallOrder = document.getElementById("myBtn-call-order");
	// in footer btn call order
	var btnCallOrderFooter = $(".btn-call-order-foter");

	// Get the <span> element that closes the modal
	var spanCallOrder = document.getElementsByClassName("close-call-order")[0];

	//When the user clicks on the button, open the modal 
	btnCallOrder.onclick = function() {
		modalCallOrder.style.display = "block";
	}

	//When the user clicks on the button call order in the footer, open the modal 
	$(btnCallOrderFooter).click( function(){
		$(modalCallOrder).fadeIn();
	});

	// When the user clicks on <span> (x), close the modal
	$(spanCallOrder).click( function (){
		$(modalCallOrder).fadeOut();
	});

	//When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modalCallOrder) {
			modalCallOrder.style.display = "none";
		}
	}

	/* ===========================
  3. Choose service 
  ==========================*/
  $('.myserv').click(function() {
  	//$('.myserv').removeClass('Act');
	  $('.myserv img').removeClass('BLUE'); /*У остальных элементов с классами myserv в которых есть тег img удаляем у img класс BLUE*/
	  $(this).find('img').addClass('BLUE'); /*А текущему по которому кликнули с классам myserv, в нутри него находим тег img и добавляем ему класс BLUE*/
	  servId = $(this).data('id');
	  var activeService = $(this).find('img').attr('class');
	  var currentServiceName = $(this).find('img').attr('title');
	  $('#current-serv').val(activeService);
	  $('.current-serv-name').val(currentServiceName);
	  //alert(currentServiceName);
	  /*sound();*/
	});

	/*===========================
	4. Service order
=============================*/
	// Get the modal
	var modalServiceOrder = document.getElementById('myModal-service-order');

	// Get the button that opens the modal
	var btnServiceOrder = $(".btn-what-interested");

	// Get the <span> element that closes the modal
	var spanServiceOrder = document.getElementsByClassName("close-service-order")[0];

	//When the user clicks on the button, open the modal 
	btnServiceOrder.click( function(e){
		e.preventDefault();
		var currentServiceName = $('.current-serv-name').val();
		//alert(currentServiceName);
		if ( currentServiceName ) {
			$('.serv-title').html(currentServiceName);
			$('input.current-serv-name').val(currentServiceName);
			$(modalServiceOrder).show();
		}
		else alert('Выберите вид услуги');
	});

	// When the user clicks on <span> (x), close the modal
	$(spanServiceOrder).click( function (){
		$(modalServiceOrder).fadeOut();
	});

	//When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modalServiceOrder) {
			modalServiceOrder.style.display = "none";
		}
	}

/*===========================
	5. Validate forms
=============================*/	
function validateFormService() {
    var name = document.forms["service-order-form"]["name"].value;
    var number = document.forms["service-order-form"]["number"].value;
    var shortDescription = document.forms["service-order-form"]["shortDescription"].value;

    if (name == "") {
        alert("Заполните имя");
        return false;
    } else if (number == "") {
    		alert("Заполните Телефон");
    		return false;
    } else if(shortDescription == "") {
    	alert("Заполните краткую информацию");
    	return false;
    } else return true;
}

function validateFormCallOrder() {
	var name = document.forms["call-order-form"]["name"].value;
	var number = document.forms["call-order-form"]["number"].value;
	if ( name == "" ){
		alert("Заполните имя");
		return false;
	} else if ( number =="" ){
		alert("Заполните номер телефона");
		return false;
	} else return true;
}

/*===========================
	6. AJAX sending forms
=============================*/
	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});
	// Sending order service
	$("#service-order").click(function(e){
		var valid = validateFormService();
		if(valid == false) {
			return false;
		}
		var serviceName = $(".current-serv-name").val();
		var name = $('#serv-client-name').val();
		var number = $('#serv-client-phone').val();
		var shortDescription = $('#serv-client-desc').val();
		var cityService = $('#city-service-order option:selected').val();
		//alert(city);

		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
	        url: '/send-mail-service', //Путь который прописан в файле web (route)
	        method: 'POST',
	        data: {
	        	name: name,
	        	number: number,
	        	shortDescription: shortDescription,
	        	cityService: cityService,
	        	serviceName: serviceName
	        },
	        success: function(data) {
	        	//alert(cityService);
	        	$.sweetModal({
	        		content: 'Заказ услуги успешно отправлен.',
	        		icon: $.sweetModal.ICON_SUCCESS
	        	});
	        	$('#myModal-service-order').fadeOut();
	        }
	      });
		e.preventDefault();
	});

	// Sending order call
	$("#call-order-btn").click( function(e) {
		var valid = validateFormCallOrder();
		if ( valid == false ) return false;

		var name = $("#call-name").val();
		var number = $("#call-phone").val();
		var cityCallOrder = $("#call-order-city option:selected").val();
		//alert(cityCallOrder);
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: '/send-mail-messages',
			method: 'POST',
			data: {
				name: name,
				number: number,
				cityCallOrder: cityCallOrder
			},
			success: function(data){
				$.sweetModal({
					content: 'Заказ звонка успшено отправлен.',
					icon: $.sweetModal.ICON_SUCCESS
				});
				$("#myModal-call-order").fadeOut();
			}
		});

		e.preventDefault();
	});

/*===========================
	7. Custom code
=============================*/
 $('input[name="number"]').mask('+7(000)-000-00-00');
 $('#sphone').mask('+7(000)-000-00-00');
 $('#mphone').mask('+7(000)-000-00-00');

});