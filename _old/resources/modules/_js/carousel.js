var myScroll;
function loaded() {
	myScroll = new iScroll('wrapper', {
		snap: true,
		momentum: false,
		hScrollbar: false,
		onScrollEnd: function () {
			document.querySelector('#indicator > li.active').className = '';
			document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
		}
	});

	var pages = document.getElementsByClassName('page');
	if(pages.length > 1){
		for(var i = 1; i < pages.length+1; i++){
			var navitem = document.createElement("li");
			navitem.innerHTML = i.toString();
			if(i == 1){
				navitem.className = "active";
			}
			document.getElementById('indicator').appendChild(navitem);
		}
	}
}
document.addEventListener('DOMContentLoaded', loaded, false);

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
		url: "/resources/library/php/utilities/writeRSS.php",
		data: URLCompose,
		success: function(data){
			document.location.href=$(s_element).attr('href') + "&lp=" + encodeURI(window.location.pathname);
			// alert(data); 
		}
	});
}
