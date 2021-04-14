document.addEventListener("DOMContentLoaded", function() {	
	showRequestsRent();
	var search_button = document.querySelector(".requests .btn-success");
	search_button.addEventListener("click", showRequestsRent)
});

function showRequestsRent() {
	var input = document.querySelector('.requests .form-control');
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			var tbody = document.querySelector('.requests .table tbody');
			tbody.innerHTML = this.responseText;
			var delete_buttons = document.querySelectorAll('table .btn-danger');
			for(var i = 0; i < delete_buttons.length; i++) {
				delete_buttons[i].addEventListener("click", deleteRequestRent);
			}
			
		}
	};
	xmlhttp.open("GET", "ajax/show_requests_rent.php?q="+input.value, true);
	xmlhttp.send();
}

function deleteRequestRent() {
	var articul = this.getAttribute("data");

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				showRequestsRent();
		}
	};
	xmlhttp.open("GET", "ajax/delete_request_rent.php?id=" + articul, true);
	xmlhttp.send();
}