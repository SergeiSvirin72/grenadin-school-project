document.addEventListener("DOMContentLoaded", function() {
	let slides = document.querySelectorAll(".slide");
	let slider = [];
	for (let i=0; i<slides.length; i++) {
		slider[i] = slides[i].src;
		slides[i].remove();
	}

	var step = 0;
	var offset = -1;

	for(var i=0; i<4; i++) {
		let img = document.createElement("img");
		img.src = slider[step];
		img.classList.add("slide");
		img.style.left = offset*600 + "px";
		document.querySelector(".slider").appendChild(img);
		step++;
		offset++;	
	}

	function draw() {
		let img = document.createElement("img");
		img.src = slider[step];
		img.classList.add("slide");
		img.style.left = 1200 + "px";
		document.querySelector(".slider").appendChild(img);
		if(step + 1 == slider.length) {
			step = 0;
		} else {
			step++;
		}
	}

	function left(){
		let slides2 = document.querySelectorAll(".slide");
		draw();
		for (let i=0; i<slides2.length; i++) {
			slides2[i].style.left = parseInt(slides2[i].style.left, 10) - 600 + "px";
		}
		setTimeout(function(){
			slides2[0].remove();
		}, 1000);
	}

	setTimeout(function run() {
		left();
		setTimeout(run, 5000);
	}, 5000);	
});
