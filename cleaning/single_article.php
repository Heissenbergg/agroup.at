<div id="cats_icon_mobile" onclick="all_categories();" title="Side menu">
    <img src="menu/icons/list.png">
</div>
<div id="articles">
	<div id="articles_header">
		<h4 id="main_article_header" > <a href="cleaning.php?cat_id=<?php echo Input::get('cat_id'); ?>&page=<?php echo Input::get('page'); ?>"> <?php echo categoryName('cleaning_agends', Input::get('cat_id')); ?> </a> / <a href="#"><?php echo $details['title']; ?></a></h4>
        <h4 id="small_article_header"><a href="#"><?php echo $details['title']; ?></h4>
	</div>
	<div id="articles_body">
		<div id="image_part">
			<img src="all_images/<?php echo $images[0]; ?>">
		</div>
		<div id="details_part">
			<div class="article_detail">
				<h4><?php echo $details['title']; ?></h4>
			</div>
			<div class="article_detail article_detail2" style="margin-top:20px;">
				<p>Price of article <?php echo $details['price']; ?></p>
			</div>
			<div class="mobile_article_details">
				<div class="mobile_article_details_left">
					<p>Price of </p>
				</div>
				<div class="mobile_article_details_right">
					<p><?php echo $details['price']; ?></p>
				</div>
			</div>

			<div class="article_detail article_detail2">
				<p>ID of <?php echo Input::get('id'); ?></p>
			</div>
			<div class="mobile_article_details mobile_article_details0">
				<div class="mobile_article_details_left">
					<p>ID of article </p>
				</div>
				<div class="mobile_article_details_right">
					<p>486</p>
				</div>
			</div>
			<div class="article_detail article_detail2">
				<p>Category - <?php echo categoryName('cleaning_agends', Input::get('cat_id')); ?></p>
			</div>
			<div class="mobile_article_details mobile_article_details0">
				<div class="mobile_article_details_left">
					<p>Category </p>
				</div>
				<div class="mobile_article_details_right">
					<p><?php echo categoryName('cleaning_agends', Input::get('cat_id')); ?></p>
				</div>
			</div>

			<div class="article_detail article_detail2">
				<p>Details</p>
			</div>
			<div class="article_detail article_all_details ">
				<p>
					<?php echo nl2br($details['details']); ?>
				</p>
			</div>
			<div class="article_detail article_detail2 last_one">
				<p>Number of views #</p>
			</div>
			<div class="mobile_article_details last_one">
				<div class="mobile_article_details_left">
					<p>Views </p>
				</div>
				<div class="mobile_article_details_right">
					<p>#</p>
				</div>
			</div>
		</div>
	</div>
</div>
