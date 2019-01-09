$(document).ready( function() {
	
	// Choose city
	// Get the modal
	var modalChooseCity = document.getElementById('myModal-choose-city');

	// Get the button that opens the modal
	var btnChooseCity = document.getElementsByClassName("btn-choose-city");

	// Get the <span> element that closes the modal
	var spanChooseCity = document.getElementsByClassName("close-choose-city")[0];

	setTimeout( function(){
		$(modalChooseCity).fadeIn();
	}, 2000);

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

	// Call order
	// Get the modal
	var modalCallOrder = document.getElementById('myModal-call-order');

	// Get the button that opens the modal
	var btnCallOrder = document.getElementById("myBtn-call-order");

	// Get the <span> element that closes the modal
	var spanCallOrder = document.getElementsByClassName("close-call-order")[0];

	//When the user clicks on the button, open the modal 
	btnCallOrder.onclick = function() {
		modalCallOrder.style.display = "block";
	}

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

	// Service order
	// Get the modal
	var modalServiceOrder = document.getElementById('myModal-service-order');

	// Get the button that opens the modal
	var btnServiceOrder = $(".btn-what-interested");

	// Get the <span> element that closes the modal
	var spanServiceOrder = document.getElementsByClassName("close-service-order")[0];

	//When the user clicks on the button, open the modal 
	btnServiceOrder.click( function(e){
		e.preventDefault();
		$(modalServiceOrder).show();
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

});