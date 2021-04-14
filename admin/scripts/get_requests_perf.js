document.addEventListener("DOMContentLoaded", function() {	
	showRequestsPerf();
	var search_button = document.querySelector(".requests .btn-success");
	search_button.addEventListener("click", showRequestsPerf)
});

function showRequestsPerf() {
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
				delete_buttons[i].addEventListener("click", deleteRequestPerf);
			}
			
		}
	};
	xmlhttp.open("GET", "ajax/show_requests_perf.php?q="+input.value, true);
	xmlhttp.send();
}

function deleteRequestPerf() {
	var articul = this.getAttribute("data");

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				showRequestsPerf();
		}
	};
	xmlhttp.open("GET", "ajax/delete_request_perf.php?id=" + articul, true);
	xmlhttp.send();
}