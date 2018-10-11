<div id="single_product">
	<div id="articles_header">
		<h4 id="main_article_header" > <a href="products.php?cat_id=<?php echo Input::get('cat_id'); ?>&page=<?php echo Input::get('page'); ?>"><?php echo categoryName('our_products', Input::get('cat_id')); ?></a> / <a href="#"><?php echo $details['title']; ?></a></h4>
		<h4 id="small_article_header"> <a href="#"><?php echo $details['title']; ?></a></h4>
	</div>
	<div id="articles_body">
		<div id="all_images">
			<div id="image_part">
				<?php

				for($i=0; $i<count($images['title']); $i++){
					?>
						<img class="product_image rotated_image<?php echo $images['deg'][$i]; ?>" onclick="set_huge('<?php echo $i; ?>');" src="all_images/<?php echo $images['title'][$i] ?>">
					<?php
				}

				?>

				<!-- <img class="product_image" src="products/images/aa.png"> -->
			</div>
			<div id="image_arrows">
				<div class="image_arrows_part" title="Vorheriges Bild" onclick="changeImage();">
					<img src="products/images/back.png">
				</div>
				<div class="image_arrows_part image_arrows_part2">
					<p>Vorschaubilder</p>
				</div>
				<div class="image_arrows_part" title="Nächstes Bild" onclick="changeImage(1);">
					<img src="products/images/next.png">
				</div>
			</div>
		</div>

		<div id="article_description">
			<div id="article_description_header">
				<div class="article_parts article_parts0" onclick="showDetails(0);">
					<p>Produktubersicht</p>
				</div>
				<div class="article_parts" onclick="showDetails(1);">
					<p>Erfahren Sie mehr Details</p>
				</div>
			</div>
			<div id="article_description_body">
				<div id="our_product_details">
					<p>
						<?php echo nl2br($details['details']); ?>
					</p>
				</div>

				<div id="our_product_form">
					<div id="contact_info">
						<div class="contact_info_part contact_info_part_h">
							<h4>Contact details </h4>
						</div>
						<div class="contact_info_part">
							<i class="fa fa-phone"></i>
							<p>+43 463 329982</p>
						</div>
						<div class="contact_info_part">
							<i class="fa fa-phone"></i>
							<p>+43 463 329983</p>
						</div>
						<div class="contact_info_part">
							<i class="fa fa-envelope"></i>
							<p>office@a-group.at</p>
						</div>
						<div class="contact_info_part">
							<i class="fa fa-map-marker"></i>
							<p>A-Group Handels KG,  <br> St. Peterstrasse 5a/2/224 <br> AUT-9020 Klagenfurt am Worthersee</p>
						</div>
					</div>
					<div id="form_info">
						<div class="form_info_part form_info_part_h">
							<h4>Schick uns eine Nachricht</h4>
						</div>
						<div class="form_info_part">
							<input type="text" id="mail_name" placeholder="* Dein Name ..">
						</div>
						<div class="form_info_part">
							<input type="text" id="mail_contact" placeholder="* Ihr Telefon / Ihre E-Mail ..">
						</div>
						<div class="form_info_part form_info_part_t">
							<textarea id="mail_text" placeholder="* Deine Nachricht .."></textarea>
						</div>
						<div class="form_info_part form_info_part_s" onclick="sendMail('<?php echo Input::get('id'); ?>');">
							<p>NACHRICHT SENDEN</p>
						</div>
					</div>
				</div>
				<?php require_once 'footer/small_footer.php'; ?>
			</div>


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