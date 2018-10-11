<?php
	function getDetails($product_id){
		$db = new DB();
		$dbQuery = $db->query("all_products");

		while($product = $dbQuery -> fetch()){
			if($product['id'] == $product_id){
				$title = $product['title'];
				$details = $product['description'];
				$imageHash = $product['image_hash'];

				return $details = array('title' => $title, 'details' => $details, 'image_hash' => $imageHash);
			}
		}
	}

	function getArticleDetails($product_id){
		$db = new DB();
		$dbQuery = $db->query("all_articles");

		while($product = $dbQuery -> fetch()){
			if($product['id'] == $product_id){
				$title = $product['title'];
				$details = $product['details'];
				$imageHash = $product['image_hash'];
				$price = $product['price'];

				return $details = array('title' => $title, 'details' => $details, 'image_hash' => $imageHash, 'price' => $price);
			}
		}
	}

	function getImages($hash){
		$db = new DB();
		$dbQuery = $db->query("images");

		$images = array('title' => array(), 'deg' => array());

		while($img = $dbQuery -> fetch()){
			if($img['hash'] == $hash){
				array_push($images['title'], $img['title']);
				array_push($images['deg'], $img['rotate']);
			}
		}
		return $images;
	}

	function single_image($hash){
		$db = new DB();
		$dbQuery = $db->query("images");

		while($img = $dbQuery -> fetch()){
			if($img['hash'] == $hash){
				return $img['title'];
			}
		}
	}


	function get_news_details($news_id){
		$db = new DB();
		$dbQuery = $db->query("news");

		while($new = $dbQuery -> fetch()){
			if($new['id'] == $news_id){
				$title = $new['title'];
				$details = $new['details'];
				$imageHash = $new['image_hash'];
				$date = $new['day'].'. '.$new['month'].' '.$new['year'].' ';
				$time = $new['hour'].':'.$new['minutes'];
				$posted = $new['posted'];

				return $details = array('title' => $title, 'details' => $details, 'image_hash' => $imageHash, 'date' => $date, 'time' => $time, 'posted' => $posted);
			}
		}
	}

	function getFirstCatId($table){
		$db = new DB();
		if($table = 'all_products') $table = 'our_products';
		else if($table = 'all_articles') $table = 'cleaning_agends';
		$dbQuery = $db->query($table);
		while($row = $dbQuery -> fetch()){
			return $row['id'];
		}
	}

	function getFirstId($table){
		$db = new DB();
		$dbQuery = $db->query($table);
		while($row = $dbQuery -> fetch()){
			return $row['id'];
		}
	}

	function get_first_articles_id($table, $category_id){
		$db = new DB();
		$dbQuery = $db->query($table);
		while($row = $dbQuery -> fetch()){
			if($row['category_id'] == $category_id){
				return $row['id'];
			}
		}
	}

	function categoryName($table, $id){
		$db = new DB();
		$dbQuery = $db->query($table);
		while($row = $dbQuery -> fetch()){
			if($row['id'] == $id) return $row['title'];
		}
	}

	function firstCategory($table, $cat_id = null){
		if(!$cat_id) $cat_id = getFirstId($table);
		$db = new DB;
		$dbQuery = $db->query($table);
	}


	function getProducts($table, $category, $page){
		$db = new DB();
		$dbQuery = $db->query($table);
		$counter = 0;
		$all_articles = array('title' => array(), 'id' => array(), 'number_of_pages', 'price' => array(), 'images' => array());
		while($article = $dbQuery -> fetch()){
			if($article['cat_id'] ==  $category){
				if($counter >= 6*($page) and $counter < 6*($page + 1)){
					array_push($all_articles['title'], $article['title']);
					array_push($all_articles['id'], $article['id']);
					array_push($all_articles['images'], single_image($article['image_hash']));
					if($table == 'all_articles'){
						array_push($all_articles['price'], $article['price']);
					}
				}$counter++;
			}
		}
		$all_articles['number_of_pages'] = floor((($counter / 6) + 1));
		return $all_articles;
	}


	function getNumberOfarticles($cat_id, $table){
		$db = new DB();
		$dbQuery = $db->query($table);
		$counter = 0;
		while($art = $dbQuery -> fetch()){
			if($art['cat_id'] == $cat_id){
				$counter++;
			}
		}
		return $counter;
	}

?>
