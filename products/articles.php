<div id="cats_icon_mobile" onclick="all_categories();" title="Side menu">
    <img src="menu/icons/list.png">
</div>
<div id="articles">
	<div id="articles_header">
		<h4 id="main_article_header"><?php echo categoryName('our_products', Input::get('cat_id')); ?></h4>
		<h4 id="small_article_header"><?php echo categoryName('our_products', Input::get('cat_id')); ?></h4>
	</div>
	<div id="articles_body">
		<!-- link to all -->
        <?php
        $articles = getProducts('all_products', Input::get('cat_id'), Input::get('page'));
        for($i=0; $i<count($articles['title']); $i++){
            ?>
            <a href="our_product.php?id=<?php echo $articles['id'][$i]; ?>&cat_id=<?php echo Input::get('cat_id'); ?>&page=<?php echo Input::get('page'); ?>">
                <div class="single_article">
                    <div class="single_article_image">
                        <img src="all_images/<?php echo $articles['images'][$i]; ?>">
                    </div>
                    <!--0
                    <div class="single_article_cat">
                        <p><?php echo categoryName('our_products', Input::get('cat_id')); ?></p>
                    </div>
                    -->
                    <div class="single_article_name">
                        <a href="our_product.php?id=<?php echo $articles['id'][$i]; ?>&cat_id=<?php echo Input::get('cat_id'); ?>&page=<?php echo Input::get('page'); ?>"><?php echo $articles['title'][$i]; ?></a>
                    </div>
                    <div class="single_article_price">
                        <p>#a-group</p>
                    </div>
                </div>
            </a>
            <?php
        }
        ?>
        <!--
        <a href="our_product.php?id=">
			<div class="single_article">
				<div class="single_article_image">
					<img src="products/images/inox.png">
				</div>
				<div class="single_article_cat">
					<p>first category</p>
				</div>
				<div class="single_article_name">
					<a href="">This is name of article</a>
				</div>
				<div class="single_article_price">
					<p>#a-group</p>
				</div>
			</div>
		</a> -->

		<div id="number_of_pages">
            <?php
            for($i=0; $i<$articles['number_of_pages']; $i++){
                if($i == Input::get('page')){
                    echo '<a href="products.php?cat_id='.Input::get('cat_id').'&page='.$i.'"><div class="number_of_page number_of_page_select"><p>'.($i + 1).'</p></div></a>';
                }else{
                    echo '<a href="products.php?cat_id='.Input::get('cat_id').'&page='.$i.'"><div class="number_of_page"><p>'.($i + 1).'</p></div></a>';
                }
            }
            ?>
		</div>
	</div>
</div>
