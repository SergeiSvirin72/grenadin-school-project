document.addEventListener("DOMContentLoaded", function() {	
	showMedia();
});

function showMedia() {
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			var tbody = document.querySelector('.media .table tbody');
			tbody.innerHTML = this.responseText;
			var delete_buttons = document.querySelectorAll('table .btn-danger');
			for(var i = 0; i < delete_buttons.length; i++) {
				delete_buttons[i].addEventListener("click", deleteMedia);
			}
			
		}
	};
	xmlhttp.open("GET", "ajax/show_media.php", true);
	xmlhttp.send();
}

function deleteMedia() {
	var articul = this.getAttribute("data");

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				showMedia();
		}
	};
	xmlhttp.open("GET", "ajax/delete_media.php?id=" + articul, true);
	xmlhttp.send();
}