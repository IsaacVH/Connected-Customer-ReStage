<div id="footer">
	<div class="menu-bar">
		<div class="menu-bar-wrapper">
			<a href="#" onclick="backClicked()">
				<div class="back">< BACK</div>
			</a>
			<div class="menu-button" onclick="menu_button()">
				<span class="white-line-container">
					<div class="white-line"></div>
					<div class="white-line"></div>
					<div class="white-line"></div>
				</span>
			</div>
		</div>
		<div class="nav-dropdown">
			<ul>
				<li>TRANSACTION&nbsp</li>
				<li>MEET WITH A BANKER&nbsp</li>
				<li>ACCOUNT INFO&nbsp</li>
				<li>LOAN INFO&nbsp</li>
				<li>CREDIT CARD&nbsp</li>
				<li>PROBLEM RESOLUTION&nbsp</li>
				<li>FINANCIAL ADVICE&nbsp</li>
				<li>FINANCIAL HOW-TO'S&nbsp</li>
				<li>SAFETY DEPOSIT BOX&nbsp</li>
				<li>LOCAL EVENT&nbsp</li>
				<li>PLAY A GAME&nbsp</li>
				<li>FUN FACT&nbsp</li>
			</ul>
		</div>
	</div>
	<div class="footer-bar">
		<div class="footer-bar-wrapper">
			<div id="sliderFrame">
       		<div id="slider">
       			<?php
       				$json_ads = json_decode(file_get_contents($_SERVER["DOCUMENT_ROOT"]."/assets/json/footer/slides.json"), true);
       				foreach($json_ads as $ad_src) {
       					echo '<img src="'.$ad_src.'" />';
       				}
       			?>
          </div>
       	</div>
		</div>
	</div>
</div>
