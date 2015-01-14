<?php

	function block_menu($menuFile, $blocks_per_page) {
		$menuitems = json_decode(file_get_contents($menuFile), true);
		$pages = ceil(count($menuitems)/$blocks_per_page);
		?>

		<div class="carousel">
			<div class="background">
				<div id="nav">
					<ul id="indicator"></ul>
				</div>
				<div id="wrapper">
					<div id="scroller" style="<?php echo 'width: '.($pages*100).'%;';?>">
						<div class="container-list">
							<?php for ($i = 0; $i < count($menuitems); $i++){ ?>
								<div class="page" name="page<?php echo floor($i/$blocks_per_page); ?>" style="width: <?php echo (100/$pages).'%';?>">
									<ul class="content-list">
										<?php	
											$j = $i;
											while($j < count($menuitems) && $j < ($i + $blocks_per_page)){ 
												$ival = $menuitems[$j];
												?>

												<li class="<?php echo $ival['type']; ?>">
													<div class="<?php echo 'li-container well';?>" href="<?php echo $ival['link']; ?>"> 
														<!--onclick="sendClick(this)"-->
													 	<div class="absolute-container">
													 		<div class="image-container">
																<img class="option-image" src="<?php echo $ival['image']; ?>" />
															</div>
															<div class="option-text-container">
																<div class="option-text-wrapper">
																	<h3 class="option-title"><?php echo $ival['title'];?></h3>
																	<p class="option-content"><?php echo $ival['body'];?></p>
																</div>
															</div>
														</div>
													</div>
												</li>

												<?php 
												$j++;
											} 
											$i = $j-1;
										?>
									</ul>
								</div> <!-- /page -->
							<?php } ?>
						</div>	<!-- /container-list -->
					</div> <!-- /scroller -->
				</div> <!-- /wrapper -->
			</div> <!-- /background -->
		</div> <!-- /carousel --> 
<?php
	}
?>