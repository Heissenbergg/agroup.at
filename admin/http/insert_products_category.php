<?php
require_once '../../class/db.php';

$category = $_POST['name_of_cat'];
//$id = 4;
$db = new DB();
$db->action("INSERT INTO `our_products` (`title`) VALUES ('{$category}')");
//$db->action("DELETE FROM `our_products` WHERE id = $id");