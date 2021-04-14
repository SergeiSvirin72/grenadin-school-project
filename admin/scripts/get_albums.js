document.addEventListener("DOMContentLoaded", function() {	
	showAlbums();
});

function showAlbums() {
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var tbody = document.querySelector('.albums .table tbody');
			tbody.innerHTML = this.responseText;
			var delete_buttons = document.querySelectorAll('table .btn-danger');
			for(var i = 0; i < delete_buttons.length; i++) {
				delete_buttons[i].addEventListener("click", deleteAlbum);
			}
		}
	};
	xmlhttp.open("GET", "ajax/show_albums.php", true);
	xmlhttp.send();
}

function deleteAlbum() {
	var articul = this.getAttribute("data");

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				showAlbums();
		}
	};
	xmlhttp.open("GET", "ajax/delete_album.php?id=" + articul, true);
	xmlhttp.send();
}