<?php
require_once '../../class/db.php';

$title = $_POST['title'];
echo $price = $_POST['price'];
$details = $_POST['details'];
$hash_session = $_POST['hash_session'];
$cat_id = $_POST['cat_id'];

$db = new DB();
$db->action("INSERT INTO `all_articles` (`cat_id`,`title`,`price`,`details`,`image_hash`) VALUES ('{$cat_id}','{$title}','{$price}','{$details}','{$hash_session}')");
//$db->action("DELETE FROM `our_products` WHERE id = $id");