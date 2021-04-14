document.addEventListener("DOMContentLoaded", function() {
	var hamb = document.querySelector(".navbar-hamb");
	hamb.addEventListener("click", function() {
		var sidebar = document.querySelector(".sidebar");
		var content = document.querySelector(".content");
		sidebar.classList.toggle("sidebar-show");
		content.classList.toggle("content-show");
	});
});