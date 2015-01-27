<?php
  $carouselpage = "/assets/json/pages/main-page/menu_item_page1.json";
	$json = file_get_contents($_SERVER['DOCUMENT_ROOT'].$carouselpage);
	$menuitems = json_decode($json, true);
?>

<link href="../css/six-block-menu.css" rel="stylesheet">
<ul class="content-list">
	<?php
		// Since we're pulling the info for these items from a separate file,
		// this loop will run through the json array and create the items.
		$j = -1;
		foreach($menuitems as $iname => $ival){
			$j++;

			// Based on whether $j is odd/even is how we know which
			// 'sideclass' (left or right) to assign.
			$sideclass = "";
			if($j%2 == 0)
				$sideclass = "left";
			else
				$sideclass = "right";
	?>
		<li class=<?php echo '"'.$ival['type'].'"' ?> >
			 <div class=<?php echo '"li-container '.$sideclass.' well"';?> 
			 		href=<?php echo '"'.$ival['link'].'"' ?> onclick="sendClick(this)" >
			 	<div class="absolute-container">
			 		<div class="image-container">
						<img class="option-image" src=<?php echo $ival['image'];?> />
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
	<?php } ?>
</ul>
