<div id="cats_icon_mobile" onclick="all_categories();" title="Side menu">
    <img src="menu/icons/list.png">
</div>
<div id="cat_menu">
	<div id="cat_menu_header">
		<p>OUR SERVICES</p>
	</div>
	<div id="cat_menu_all_links">
    <?php
    $db = new DB();
    $catsQuery = $db->query("our_services");
    $counter = 0;
    while($cat = $catsQuery -> fetch()){
      $serviceQuery = $db->query("all_services");
      //start html
      ?>
      <div class="cat_menu_link" onclick="showAditional('<?php echo $counter; ?>', '<?php echo $counter++; ?>');">
  			<div class="left_menu_submenu_circle">
            <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
          </div>
            <p class="category_name">
                <?php echo $cat['title']; ?>
            </p>
  			<!-- <p>
                <a class="category_name"><?php echo $cat['title']; ?></a>        
            </p> -->
  		</div>
      <div class="cat_menu_services">
      <?php
      //end html
      while($service = $serviceQuery -> fetch()){
        if($service['cat_id'] == $cat['id']){
          ?>
          <div class="cat_menu_service_single" onclick="//updateService('<?php echo $service['id']; ?>');">
      		<div class="cat_menu_service_single_line"></div>
      		<p class="">
            <a href="service.php?id=<?php echo $service['id']; ?>"><?php echo $service['title']; ?></a>  
          </p>
      	</div>
          <?php
        }
      }
      ?>
      </div>
      <?php
    }
    ?>

    <!--
		<div class="cat_menu_link" onclick="showAditional(1, 1);">
			<div class="left_menu_submenu_circle">
                <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
            </div>
			<a class="category_name">second service</a>
		</div>
		<div class="cat_menu_services">
			<div class="cat_menu_service_single">
				<div class="cat_menu_service_single_line"></div>
				<div class="cat_menu_service_single_text">
					<p>first subcategory</p>
				</div>
			</div>
			<div class="cat_menu_service_single">
				<div class="cat_menu_service_single_line"></div>
				<div class="cat_menu_service_single_text">
					<p>second subcategory</p>
				</div>
			</div>
		</div>
    -->

	</div>
</div>
