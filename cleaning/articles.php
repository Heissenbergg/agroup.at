<div id="cats_icon_mobile" onclick="all_categories();" title="Side menu">
    <img src="menu/icons/list.png">
</div>
<div id="articles">
	<div id="articles_header">
		<h4 id="main_article_header"><?php echo categoryName('article_subcategories', Input::get('subcategory')); ?></h4>
		<h4 id="small_article_header"><?php echo categoryName('article_subcategories', Input::get('subcategory')); ?></h4>
	</div>
	<div id="articles_body">
        <?php
        $articles = getProducts('all_articles', $subcat_id, Input::get('page'));

        for($i=0; $i<count($articles['title']); $i++){
            ?>
            <a href="just_article.php?id=<?php echo $articles['id'][$i]; ?>&cat_id=<?php echo Input::get('subcategory'); ?>&page=<?php echo Input::get('page'); ?>">
                <div class="single_article">
        			<div class="single_article_image">
        				<img src="all_images/<?php echo $articles['images'][$i]; ?>">
        			</div>
                    <!--
        			<div class="single_article_cat">
        				<p><?php echo categoryName('article_subcategories', Input::get('subcategory')); ?></p>
        			</div> -->
        			<div class="single_article_name">
        				<a><?php echo $articles['title'][$i]; ?></a>
        			</div>
        			<div class="single_article_price">
        				<p><?php echo $articles['price'][$i]; ?></p>
        			</div>
        		</div>
            </a>
            <?php
        }
        ?>

        <div id="number_of_pages">
            <?php
            for($i=0; $i<$articles['number_of_pages']; $i++){
                if($i == Input::get('page')){
                    echo '<a href="cleaning.php?category='.$cat_id.'&subcategory='.$subcat_id.'&page='.$i.'"><div class="number_of_page number_of_page_select"><p>'.($i + 1).'</p></div></a>';
                }else{
                    echo '<a href="cleaning.php?category='.$cat_id.'&subcategory='.$subcat_id.'&page='.$i.'"><div class="number_of_page"><p>'.($i + 1).'</p></div></a>';
                }
            }
            ?>
		</div>
	</div>
</div>
