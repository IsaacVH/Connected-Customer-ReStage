$(function() { 
	set_clock();
	setInterval(function(){ tick_clock(); }, 500);
	//var loaderInterval = animateLoader("medium");
});

// This is a simple function that ticks the minute over.
function tick_clock() {
	var time = getTimeVars(new Date());
	if(time['min'] == "00"){
		set_clock();
	} else {
		$("#header .clock .time .hourmin").text(time['hour']+":"+time['min']);
		$("#header .clock .time .am_pm").text(time['am_pm']);
	}
}

// This function updates the clock with the computer's time.
// Since it takes a lot of processing, we only do it once per hour.
function set_clock() {
	var currentTime = new Date();

	var date = currentTime.getDate() + "/" + (currentTime.getMonth()+1) + "/" + (currentTime.getFullYear()%100);
	$(".clock .date").text(date);

	var time = getTimeVars(currentTime);
	$(".clock .time .hourmin").text(time['hour']+":"+time['min']);
	$(".clock .time .am_pm").text(time['am_pm']);

	var day = "";
	switch(currentTime.getDay()){
		case 0: day = "Sunday"; break;
		case 1: day = "Monday"; break;
		case 2: day = "Tuesday"; break;
		case 3: day = "Wednesday"; break;
		case 4: day = "Thursday"; break;
		case 5: day = "Friday"; break;
		case 6: day = "Saturday"; break;
	}

	$(".clock .dayofweek").text(day);
}

function getTimeVars(currentTime) {
	var hour = currentTime.getHours();
	var am_pm = ((hour / 12) < 1) ? "am" : "pm";
	hour = hour % 12;
	if(hour == 0)
		hour = 12;

	var min = currentTime.getMinutes();
	if(min < 10) 
		min = "0" + min;

	return {"hour": hour, "min": min, "am_pm": am_pm}
}


// Animated loader
function animateLoader(speed) {
	var canvas = document.getElementById("loader");
	canvas.setAttribute('data-startpoint', 0);
	var anglelength = 0.6;
	var delta = 0.01;

	switch(speed) {
		case "fast":   delta = 0.0100; break;
		case "medium": delta = 0.0075; break;
		case "slow":   delta = 0.0050; break;
		case "vslow":  delta = 0.0025; break;
		default:       delta = 0.0075; break;
	}

	return setInterval(function() {
		var startpoint = parseFloat(canvas.getAttribute('data-startpoint'));
		drawAngle(canvas, startpoint, anglelength, delta);
		if(startpoint >= 2.0){
			startpoint = -delta;
		}
		canvas.setAttribute("data-startpoint", startpoint + delta);
	}, 3.33);
}

function drawAngle(canvas, startpoint, anglelength, delta) {
	var ctx = canvas.getContext('2d');
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	ctx.beginPath();
	ctx.arc(60, 60, 50, startpoint*Math.PI, (startpoint + anglelength)*Math.PI);
	ctx.lineWidth=15;
	ctx.strokeStyle='red';
	ctx.stroke();
	ctx.closePath();
	ctx.beginPath();
	ctx.arc(60, 60, 50, (startpoint+1.0)*Math.PI, ((startpoint+1.0) + anglelength)*Math.PI);
	ctx.lineWidth=15;
	ctx.strokeStyle='red';
	ctx.stroke();
	ctx.closePath();
}

