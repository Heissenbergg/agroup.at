<div id="cat_menu">
	<div id="total_articles">
		<p>insgesamt <?php echo getNumberOfarticles(Input::get('subcategory'), 'all_articles'); ?> Artikel</p>
		<div id="exit_menu" onclick="all_categories();" title="Close side menu">
			<img src="menu/icons/cancel.png">
		</div>
	</div>
	<div id="cat_menu_header">
		<p>KATEGORIEN</p>
	</div>
	<div id="cat_menu_all_links">
		<?php
			$db = new DB();
			$dbQuery = $db->query('article_subcategories');

			while($object = $dbQuery -> fetch()){
				if($object['category_id'] == $cat_id){
					?>
					<div class="cat_menu_link">
						<div class="left_menu_submenu_circle">
				            <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
				        </div>
				        <!--
						<a href="cleaning.php?cat_id=<?php echo $object['id']; ?>&page=0"><?php echo $object['title']; ?></a>
						-->
						<p>
							<a href="cleaning.php?category=<?php echo $cat_id; ?>&subcategory=<?php echo $object['id']; ?>&page=0">
								<?php echo $object['title']; ?>
							</a>
						</p>
					</div>
					<?php
				}
			}
		?>
	</div>
</div>
