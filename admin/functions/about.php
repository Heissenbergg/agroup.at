<?php

function getAbout($product_id){
	$db = new DB();
	$dbQuery = $db->query("about");

	while($product = $dbQuery -> fetch()){
		if($product['id'] == $product_id){
			$title = $product['title'];
			$details = $product['text'];
			$imageHash = $product['hash'];

			return $details = array('title' => $title, 'details' => $details, 'image_hash' => $imageHash);
		}
	}
}
