<div id="cat_menu">
	<div id="total_articles">
		<p>insgesamt <?php echo getNumberOfarticles(Input::get('cat_id'), 'all_products'); ?> Artikel</p>
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
			$dbQuery = $db->query('our_products');

			while($object = $dbQuery -> fetch()){
				?>
				<div class="cat_menu_link">
					<div class="left_menu_submenu_circle">
			            <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
			        </div>
					<p>
						<a href="products.php?cat_id=<?php echo $object['id']; ?>&page=<?php echo Input::get('page'); ?>"><?php echo $object['title']; ?></a>
					</p>
				</div>
				<?php
			}
		?>
	</div>
</div>
