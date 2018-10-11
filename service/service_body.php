<?php $value = getService(Input::get('id')); ?>
<div id="body">
	<div id="body_header">
		<h1>
            <?php echo $value['title']; ?>
        </h1>
	</div>
	<div id="body_body">
		<div class="images">
			<div class="image_part" id="image_wraper">
				<?php
				for($i=0; $i<count($value['images']); $i++){
					?>
						<img class="service_images rotated_image<?php echo $value['rotate'][$i]; ?>" src="all_images/<?php echo $value['images'][$i]; ?>">
					<?php
				}

				?>
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
		<p>
            <?php echo nl2br ($value['details']); ?>
        </p>
	</div>
</div>
