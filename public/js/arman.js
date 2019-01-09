$(document).ready( function() {
	
	// Choose city
	// Get the modal
	var modalChooseCity = document.getElementById('myModal-choose-city');

	// Get the button that opens the modal
	//var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var spanChooseCity = document.getElementsByClassName("close-choose-city")[0];

	// When the user clicks on the button, open the modal 
	// btn.onclick = function() {
	// 	modalChooseCity.style.display = "block";
	// }

	// When the user clicks on <span> (x), close the modal
	spanChooseCity.onclick = function() {
		modalChooseCity.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modalChooseCity) {
			modalChooseCity.style.display = "none";
		}
	}

});