document.addEventListener("DOMContentLoaded", function() {
	var features = document.querySelectorAll(".participation .feature-name");
	for(var i=0; i<features.length; i++) {
		features[i].addEventListener("click", function() {
			this.nextElementSibling.classList.toggle("feature-show");
		});
	}
	
	var sponsors = document.querySelectorAll(".participation .outer-list a");
	for(var i=0; i<sponsors.length; i++) {
		sponsors[i].addEventListener("click", function() {
			this.nextElementSibling.classList.toggle("sponsor-show");
		});
	}
});

