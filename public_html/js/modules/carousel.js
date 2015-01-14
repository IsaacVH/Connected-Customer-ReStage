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
	for(var i = 1; i < pages.length+1; i++){
		var navitem = document.createElement("li");
		navitem.innerHTML = i.toString();
		if(i == 1){
			navitem.className = "active";
		}
		document.getElementById('indicator').appendChild(navitem);
	}
}
document.addEventListener('DOMContentLoaded', loaded, false);
