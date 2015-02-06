<style>
	.carousel-module { }
	.carousel-module #nav { width: calc(100% - 40px); position: absolute; bottom: 20px; padding: 0; margin: 0; text-align: center; }
	.carousel-module #nav #indicator { display: inline-block; margin: 0 auto; list-style-type: none; padding: 0; }
	.carousel-module #nav #indicator li {
		border-radius: 6px; height: 12px; width: 12px; background-color: white;
		float: left; margin: 0 5px; text-indent: -5000px;
	}
	.carousel-module #nav #indicator li.active { background-color: #ee3d3b; }

	.carousel-module { width: 100%; overflow: hidden; }
	.carousel-module .carousel-wrapper { width: 100%; }
	.carousel-module .page-container { width: 100%; list-style-type: none; padding: 0; }
	.carousel-module .carousel-page { float: left; }
	.carousel-module .carousel-page > ul { list-style-type: none; padding: 0; margin: 0 auto; }
	.carousel-module .carousel-page > ul > li { 
		height: 250px; background-color: white; margin: 40px 30px; float: left; box-shadow: 0px 2px 8px gray;
	}
	.carousel-module .carousel-page > ul > li > div {
		margin: 15px;
	}

	.carousel-module .carousel-page .paper-heading h2 { display: inline-block; margin-top: 0; }
	.carousel-module .carousel-page .paper-heading img { display: inline-block; float: right; }

	.carousel-module .carousel-page .paper-body {  }
</style>

<!-- Carousel Module {{ $some }} -->
<div class="carousel-module">
	<div id="nav">
		<ul id="indicator"></ul>
	</div>
	<div id="wrapper" class="carousel-wrapper">
		<div id="scroller">
			<ul class="page-container">
			@for ($i=0; $i < 2; $i++)
				<li class="carousel-page">
					<ul>
						@for($j = $i; $j < $i+6; $j++) 
							<li>
								<div>
									<div class="paper-heading">
										<h2>Page {{ ($i * 5) + $j }}</h2>
										<img src="" />
									</div>
									<div class="paper-body">
										<p>Stuff and things.</p>
									</div>
								</div>
							</li> 
						@endfor
					</ul>
				</li>
			@endfor
			</ul>
		</div>
	</div>
</div>


