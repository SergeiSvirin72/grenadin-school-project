document.addEventListener("DOMContentLoaded", function() {
	var hamb = document.querySelector(".header-hamb");
	hamb.addEventListener("click", function() {
		var menu = document.querySelector(".header-navigation");
		menu.classList.toggle("nav-open");
	});
});