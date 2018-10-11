<?php
require_once '../../class/db.php';

$cat_id = $_POST['cat_id'];
$title = $_POST['title'];


$db = new DB();
$db->action("INSERT INTO `article_subcategories` (`category_id`,`title`) VALUES ('{$cat_id}','{$title}')");
//$db->action("DELETE FROM `our_products` WHERE id = $id");