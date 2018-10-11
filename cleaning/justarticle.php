<div id="just_article">
	<div id="just_article_header">
		<h4><a class="hidden_header" href="#"> <?php echo categoryName('cleaning_agends', Input::get('cat_id')).' /'; ?> </a> <a href="#"><?php echo $details['title']; ?></a><h4>
	</div>
	<div id="just_article_images">
		<div id="just_article_images_img">
			
			<?php 
				for($i=0; $i<count($images['title']); $i++){
					?>
						<img class="huge_images rotated_image<?php echo $images['deg'][$i]; ?>" onclick="set_huge('<?php echo $i; ?>');" src="all_images/<?php echo $images['title'][$i] ?>">
					<?php
					//echo '<img class="huge_images rotated_image'.$images['deg'][$i].'" id="small_image_" src="all_images/'.$images['title'][$i].'">';					
				}
			?>
		</div>
		<div id="just_article_images_arrows">
			<div class="image_arrows_part" title="Previous image" onclick="changeImage();">
				<img src="products/images/back.png">
			</div>
			<div class="image_arrows_part image_arrows_part2">
				<p>preview images</p>
			</div>
			<div class="image_arrows_part" title="Next image" onclick="changeImage(1);">
				<img src="products/images/next.png">
			</div>
		</div>
	</div>
	<div id="just_article_text">
		<div class="article_details">
			<h4><?php echo $details['title']; ?></h4>
		</div>
		<div class="article_details">
			<p>Price of : <?php echo $details['price']; ?></p>
		</div>
		<div class="article_details">
			<p>Category - <?php echo categoryName('cleaning_agends', Input::get('cat_id')); ?></p>
		</div>
		<div class="article_details article_details_detailed">
			<p>
				Details - <?php echo nl2br($details['details']); ?>
			</p>
		</div>
		<div class="article_details all_pdfs">
			<p>All pdf's</p>
			<?php 
			$db = new DB();
			$pdfs_query = $db->DESCquery("pdfs");
			while($pdf = $pdfs_query -> fetch()){
				if($pdf['hash'] == $details['image_hash']){
					if($pdf['sort'] == 1){
						echo '<a target="_blank" href="pdfs/'.$pdf['title'].'"><img class="first_pdf" src="icons/pdf.png" title="Sicherheitsdatenblatt"></a>';
					}
					else if($pdf['sort'] == 2){
						echo '<a target="_blank" href="pdfs/'.$pdf['title'].'"><img class="second_pdf" src="icons/pdf.png" title="Produktdatenblatt"></a>';
					}else if($pdf['sort'] == 3){
						echo '<a target="_blank" href="pdfs/'.$pdf['title'].'"><img class="third_pdf" src="icons/pdf.png" title="Techniches Datenblatt"></a>';
					}
				}
			}
			?>
		</div>
		
	</div>
</div>

<!-- huge images -->
<div id="huge_images_wrapper">
	<div id="exit_image" onclick="hide_huge_images();" title="Schliessen">
		<img src="icons/access-denied.png">
	</div>
	<?php 
		for($i=0; $i<count($images['title']); $i++){
			?>
				<img class="huge_image" id="id_of_huge<?php echo $i; ?>" src="all_images/<?php echo $images['title'][$i] ?>">
			<?php
			//echo '<img class="huge_images rotated_image'.$images['deg'][$i].'" id="small_image_" src="all_images/'.$images['title'][$i].'">';					
		}
	?>
	<div id="huge_image_article_name">
		<p><?php echo $details['title']; ?></p>
	</div>
</div>