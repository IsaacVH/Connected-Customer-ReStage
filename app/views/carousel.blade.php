<style>
	.carousel-module {
		width: 100%;
		height: 520px;
		overflow: hidden;
		z-index: -2;
	}

	.carousel-module .wrapper {
		width: 500%;
	}
</style>

<div class="carousel-module">
	<div class="carousel-wrapper">
		<div class="carousel-page">
			<ul style="list-style-type: none; padding: 0; ">
				@for($i = 0; $i < 10; $i++) <li style="width: 200px; height: 100px; background-color: white; margin: 10px; float: left;"></li> @endfor
			</ul>
		</div>
		Carousel Module
		{{ $some }}
	</div>
</div>