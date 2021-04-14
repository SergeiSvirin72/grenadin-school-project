document.addEventListener("DOMContentLoaded", function() {
	document.querySelector(".request .form-group select").addEventListener("change", function() {
		forms_array = document.querySelectorAll(".request form");
		for(var i=0; i<forms_array.length; i++) {
			forms_array[i].classList.toggle("form-show");
		}
		var alert_danger = document.querySelector(".request .alert-danger");
		var alert_success = document.querySelector(".request .alert-success");
		alert_danger.classList.remove("alert-show");
		alert_success.classList.remove("alert-show");
	});
	
	document.getElementsByName("rent_submit")[0].addEventListener("click", send_request.bind(rent_form));
	document.getElementsByName("perf_submit")[0].addEventListener("click", send_request.bind(perf_form));
});

function send_request() {
	var formData = new FormData(this);
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			console.log(this.responseText);

			var alert_danger = document.querySelector(".request .alert-danger");
			var alert_success = document.querySelector(".request .alert-success");
			alert_danger.classList.remove("alert-show");
			alert_success.classList.remove("alert-show");
			
			switch (this.responseText) {
				case "Заполните все поля!":
					alert_danger.classList.add("alert-show");
					alert_danger.innerHTML = "Заполните все поля, отмеченные звездочкой*";
					break;
				case "Неверный формат E-mail!":
					alert_danger.classList.add("alert-show");
					alert_danger.innerHTML = "Неверный формат E-mail!";
					break;
				case "1":
					alert_success.classList.add("alert-show");
					break;
				default:
					alert_danger.classList.add("alert-show");
					alert_danger.innerHTML = "При отправке заявки произошла ошибка!";
			}
			
			window.scrollTo({
				behavior: 'smooth',
				top: 0
			});

		}
	};
	xmlhttp.open("POST", "ajax/send_request.php", true);
	xmlhttp.send(formData);
}
