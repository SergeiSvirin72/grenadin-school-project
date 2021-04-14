function checkFiles(files) {       
	if(files.length>10) {
		alert("length exceeded");
		files.slice(0,10);
	return false;
}      