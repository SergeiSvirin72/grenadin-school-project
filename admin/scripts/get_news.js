document.addEventListener("DOMContentLoaded", function() {	
	showArticles();
});

function showArticles() {
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			var tbody = document.querySelector('.news .table tbody');
			tbody.innerHTML = this.responseText;
			var delete_buttons = document.querySelectorAll('table .btn-danger');
			for(var i = 0; i < delete_buttons.length; i++) {
				delete_buttons[i].addEventListener("click", deleteArticle);
			}
			
		}
	};
	xmlhttp.open("GET", "ajax/show_articles.php", true);
	xmlhttp.send();
}

function deleteArticle() {
	var articul = this.getAttribute("data");

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				showArticles();
		}
	};
	xmlhttp.open("GET", "ajax/delete_article.php?id=" + articul, true);
	xmlhttp.send();
}