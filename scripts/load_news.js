document.addEventListener("DOMContentLoaded", function() {
	var offset = 0, limit = 3, order = "ASC";
	loadNews(limit, offset, order);
	
	document.querySelector(".form-control").addEventListener("change", function() {
		order = this.value;
		offset = 0;
		document.querySelector(".load-more a").innerHTML = "Загрузить еще...";
		document.querySelector(".load-more a").style.display = "inline-block";
		document.querySelector(".content").innerHTML = "";
		loadNews(limit, offset, order);
	});
	
	document.querySelector(".load-more a").addEventListener("click", function(){
		document.querySelector(".load-more a").innerHTML = "<img src='images/Rolling-1.5s-100px.svg'> Загрузка...";
		setTimeout(function(){
			loadNews(limit, offset, order);
		}, 500);
		offset = offset + 3;
		
	});
	
	function loadNews(limit, offset, order) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if(parseInt(this.responseText) <= 3) {
					document.querySelector(".load-more a").style.display = "none";
				}
				console.log(this.responseText);
			}
		};
		xmlhttp.open("GET", "ajax/count_news.php?offset=" + offset, true);
		xmlhttp.send();			
		
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.querySelector(".content").insertAdjacentHTML("beforeEnd", this.responseText);
				document.querySelector(".load-more a").innerHTML = "Загрузить еще...";
			}
		};
		xmlhttp.open("GET", "ajax/get_news.php?limit=" + limit + "&offset=" + offset + "&order=" + order, true);
		xmlhttp.send();	
	}
});

