<style>
	.carousel-module { width: 100%; overflow: hidden; z-index: -2; }
	.carousel-module .carousel-wrapper { width: 500%; }
	.carousel-module .carousel-wrapper .carousel-page { width: 20%; }
</style>

<div class="carousel-module">
	<div class="carousel-wrapper">
		@for($i=0; $i<2; $i++)
			<div class="carousel-page">
				<ul style="list-style-type: none; padding: 0; ">
					@for($j = 0; $j < 6; $j++) 
						<li style="width: 500px; height: 300px; background-color: white; margin: 30px 10px; float: left;"></li> 
					@endfor
				</ul>
			</div>
			Carousel Module
			{{ $some }}
		@endfor
	</div>
</div>