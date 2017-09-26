
function togglemenu(){
	var hamburger = document.getElementById('myHamburger');
	var menurow = document.getElementById('myLeftRow');
	var hamburger2 = document.getElementById('myHamburger2');

	if(menurow.style.display = "inline-block"){
			menurow.style.display = "none";
			hamburger2.style.display = "inline";
	}else{
		menurow.style.display = "inline-block";
		hamburger2.style.display = "none";
	}
	
}

function togglemenuback(){
	var hamburger = document.getElementById('myHamburger');
	var menurow = document.getElementById('myLeftRow');
	var hamburger2 = document.getElementById('myHamburger2');

	if(hamburger2.style.display = "inline"){
		menurow.style.display = "inline-block";
		hamburger2.style.display = "none";
	}
}