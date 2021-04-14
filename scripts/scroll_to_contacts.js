document.addEventListener("DOMContentLoaded", function() {
	var header_contacts_button = document.querySelector(".header-navigation nav a:nth-of-type(5)");
	var footer_contacts_button = document.querySelector(".footer-nav nav a:nth-of-type(5)");
	header_contacts_button.addEventListener("click", scroll_to_contacts);
	footer_contacts_button.addEventListener("click", scroll_to_contacts);
});

function scroll_to_contacts() {
	'use strict';
	if(window.location.href == "http://grenadin.test" || window.location.href.includes("http://grenadin.test/index.php")) {
		document.querySelector(".grenadin-contacts").scrollIntoView({
			behavior: 'smooth',
			block: 'start'
		});
	} else {
		window.location.href = "/index.php#contacts-bookmark";
	}	
}
