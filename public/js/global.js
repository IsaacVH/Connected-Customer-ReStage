// Here's the global default function
$(function() { 
	set_clock();
	setInterval(function(){ set_clock(); }, 1000);

	$("#menu-button").click(drawer_menu);
	$("#coverall").click(drawer_menu);
	$("#back-button").click(back_button);
});


// This function controls the clock in the header.
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

// The function for the menu button in the header.
function drawer_menu() {
	if($(".nav-dropdown").css("display") == "block"){
		$(".nav-dropdown").animate({width: "0px"}, 200, function(){ $(".nav-dropdown").css("display", "none"); });
		$("#menu-button .white-line").css("background-color", "#e02826");
		$(".menu").removeClass("show");
		$("#coverall").css("display", "none");
	} else {
		$(".nav-dropdown").css("display", "block");
		$(".nav-dropdown").animate({width: "230px"}, 200);
		$(".menu").addClass("show");
		$("#menu-button .white-line").css("background-color", "white");
		$("#coverall").css("display", "block");
	}
}

function back_button() {
	alert("go back");
}

function home_button() {
	alert("go home");
}
