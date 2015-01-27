<script>
	$(function() {			
		$(".carousel").swipe({
		  swipe:function(event, direction, distance, duration, fingerCount) {

		  	if(direction == "right"){
		  		moveLeft();
		  	} else if(direction == "left") {
		  		moveRight();
		  	}
		  	// alert("You swiped " + direction);
		    // $(this).text("You swiped " + direction );
		  }
		});
	});

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

		var pages = document.getElementsByClassName('container');
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
</script>
<div class="carousel">
	<div class="background">
		<div id="nav">
			<ul id="indicator"></ul>
		</div>
		<div id="wrapper">
			<div id="scroller">
				<ul class="container-list">
					<?php require($carouselpage); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
