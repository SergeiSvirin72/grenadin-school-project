document.addEventListener("DOMContentLoaded", function() {
	document.forms.add_media_form.elements.add_media_submit.addEventListener("click", add_media.bind(add_media_form));
});

function add_media() {
	var formData = new FormData(this);
	var files_input = this.elements[1];
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var alert_danger = document.querySelector(".add-media .alert-danger");
			var alert_success = document.querySelector(".add-media .alert-success");
			alert_danger.classList.remove("alert-show");
			alert_success.classList.remove("alert-show");
			console.log(this.responseText);
			switch (this.responseText) {
				case "0":
					alert_danger.classList.add("alert-show");
					alert_danger.innerHTML = "При добавлении фотографий произошла ошибка!";
					break;
				default:
					alert_success.classList.add("alert-show");
					files_input.value="";
			}
		}
	};
	xmlhttp.open("POST", "ajax/add_media.php", true);
	xmlhttp.send(formData);
}