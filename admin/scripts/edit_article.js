document.addEventListener("DOMContentLoaded", function() {
	document.forms.edit_article_form.elements.edit_article_submit.addEventListener("click", edit_article.bind(edit_article_form));
});

function edit_article() {
	var formData = new FormData(this);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var alert_danger = document.querySelector(".edit-article .alert-danger");
			var alert_success = document.querySelector(".edit-article .alert-success");
			alert_danger.classList.remove("alert-show");
			alert_success.classList.remove("alert-show");
			console.log(this.responseText);
			switch (this.responseText) {
				case "Заполните все поля!":
					alert_danger.classList.add("alert-show");
					alert_danger.innerHTML = "Заполните все поля!";
					break;
				case "1":
					alert_success.classList.add("alert-show");
					break;
				default:
					alert_danger.classList.add("alert-show");
					alert_danger.innerHTML = "При редактировании новости произошла ошибка!";
			}
		}
	};
	xmlhttp.open("POST", "ajax/edit_article.php", true);
	xmlhttp.send(formData);
}