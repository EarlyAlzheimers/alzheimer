function printContent(el){
	var restorepage = document.body.innerHTML;
	document.body.innerHTML = "<img src='moca2.png' id=div2 width=800 height=1000>";
	window.print();
	document.body.innerHTML = restorepage;
}
