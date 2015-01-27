// Drop-down menu function
function menu_button() {
	var nvdrop = $(".nav-dropdown");
	if(nvdrop.hasClass("show")){
		nvdrop.removeClass("show");
		$(".menu").removeClass("show");
		$(".menu .menu-button").removeClass("darker");
		$(".menu-button .white-line").css("background-color", "#e02826");
		$("#coverall").css("display", "none");
	} else {
		nvdrop.addClass("show");
		$(".menu").addClass("show");
		$(".menu .menu-button").addClass("darker");
		$(".menu-button .white-line").css("background-color", "white");
		$("#coverall").css("display", "block");
	}
}


function sendClick(s_element) {
	// ga('send', 'event', 'button', 'click', 'shopping', 1);
	ga('send', {
	  'hitType': 'event',          // Required.
	  'eventCategory': 'button',   // Required.
	  'eventAction': 'click',      // Required.
	  'eventLabel': 'nav buttons',
	  'eventValue': 4,
	  'hitCallback' : function () {
	  	// alert("Event received");
  	}
	});
		
	var buttontitle = s_element.getElementsByClassName('option-title')[0].textContent;
	var URLCompose = "user="+Math.floor(Math.random()*100000)+"&button="+buttontitle+"&page="+document.URL;
	$.ajax({
		type: "GET",
		url: "/htdocs/pages/page-pieces/writeRSS.php",
		data: URLCompose,
		success: function(data){
			document.location.href=$(s_element).attr('href') + "?lp=" + encodeURI(window.location.pathname);
			// alert(data); 
		}
	});
}


pageWidth = 1000;
pageWidth2 = 1080;

// Move the menu to the Right
function moveRight() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-(4*pageWidth))){
		x = parseInt($('.container-list').css('left'))-pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar(x);
	}
}

function moveRight2() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-pageWidth)){
		x = parseInt($('.container-list').css('left'))-pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar2(x);
	}
}

function moveRight3() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-(3*pageWidth2))){
		x = parseInt($('.container-list').css('left'))-pageWidth2;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar3(x);
	}
}
// Move the menu to the left
function moveLeft() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar(x);
	}
}

function moveLeft2() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar2(x);
	}
}
function moveLeft3() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+pageWidth2;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar3(x);
	}
}
// Update Navbar
function update_navbar(position) {
	x = position;

	var navcircles = document.getElementsByClassName('nav-circle');
	for(var i = 0; i < 5; i++){
		navcircles[i].className = "nav-circle";
	}

	x = x/pageWidth;
	if(x < 0)
		x = -x;

	x = 4 - x;
	navcircles[x].className = "nav-circle highlight";
}

function update_navbar2(position) {
	x = position;

	var navcircles = document.getElementsByClassName('nav-circle');
	for(var i = 0; i < 2; i++){
		navcircles[i].className = "nav-circle";
	}

	x = x/pageWidth;
	if(x < 0)
		x = -x;

	x = 1 - x;
	navcircles[x].className = "nav-circle highlight";
}
function update_navbar3(position) {
	x = position;

	var navnumbers = document.getElementsByClassName('nav-number');
	for(var i = 0; i < 4; i++){
		navnumbers[i].className = "nav-number";
	}

	x = x/pageWidth2;
	if(x < 0)
		x = -x;

	x = 3 - x;
	navnumbers[x].className = "nav-number highlight";
}
