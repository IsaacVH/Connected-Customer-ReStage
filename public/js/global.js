// Here's the global 'onload' function
$(function() { 
	set_clock();
	setInterval(function(){ set_clock(); }, 1000);

	$("#menu-button").click(drawer_menu);
	$("#coverall").click(drawer_menu);
	$("#back-button").click(back_button);
});


//******************Scrolling for carousel*********************
var myScroll;
function loaded() {

	if($(".carousel-module").length > 0){

		var pages = document.getElementsByClassName('carousel-page');
		$(".carousel-module #scroller").css("width", (pages.length * 100) + "%");
		$(".carousel-module .carousel-page").css("width", (100/pages.length) + "%");
		
		for(var i = 1; i < pages.length+1; i++){
			var navitem = document.createElement("li");
			navitem.innerHTML = i.toString();
			if(i == 1){ navitem.className = "active"; }
			document.getElementById('indicator').appendChild(navitem);
		}

		myScroll = new iScroll('wrapper', {
			snap: true,
			momentum: false,
			hScrollbar: false,
			onScrollEnd: function () {
				document.querySelector('#indicator > li.active').className = '';
				document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
			}
		});
	}
}
document.addEventListener('DOMContentLoaded', loaded, false);
//**************************************************************


//**************Function for Header Clock***********************
function set_clock() {
	var currentTime = new Date();

	var hour = currentTime.getHours();
	var min = currentTime.getMinutes();
	if(min < 10){
		min = "0" + min;
	}

	var am_pm = "";
	if((hour / 12) < 1) am_pm = "am"
	else am_pm = "pm"

	hour = hour % 12;
	if(hour == 0){ hour = 12; }

	var date = currentTime.getDate();
	var month = currentTime.getMonth()+1;
	var year = currentTime.getFullYear()%100;

	$(".date").text(month+"/"+date+"/"+year);
	$("#hourmin").text(hour+":"+min);
	$("#am_pm").text(am_pm);

	var daynum = currentTime.getDay();
	var day = "";
	switch(daynum){
		case 0: day = "Sunday"; break;
		case 1: day = "Monday"; break;
		case 2: day = "Tuesday"; break;
		case 3: day = "Wednesday"; break;
		case 4: day = "Thursday"; break;
		case 5: day = "Friday"; break;
		case 6: day = "Saturday"; break;
	}
	$(".dayofweek").text(day);
}
//*************************************************************


// The function for the menu button in the header.
function drawer_menu() {
	if($(".menu").hasClass("show")){
	// if($(".nav-dropdown").css("display") == "block"){
		// $(".nav-dropdown").animate({width: "0px"}, 200, function(){ $(".nav-dropdown").css("display", "none"); });
		$("#menu-button .white-line").css("background-color", "#e02826");
		$(".menu").removeClass("show");
		$("#coverall").removeClass("show");
	} else {
		// $(".nav-dropdown").css("display", "block");
		// $(".nav-dropdown").animate({width: "230px"}, 200);
		$("#menu-button .white-line").css("background-color", "white");
		$(".menu").addClass("show");
		$("#coverall").addClass("show");
	}
}

// Execute when back button clicked.
function back_button() {
	alert("go back");
}

// Execute when 'Home' button is clicked.
function home_button() {
	alert("go home");
}
