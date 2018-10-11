<?php
require_once '../../class/db.php';

$category = $_POST['name_of_cat'];
$table = $_POST['table'];
//$id = 4;
$db = new DB();
$db->action("INSERT INTO `$table` (`title`) VALUES ('{$category}')");
//$db->action("DELETE FROM `our_products` WHERE id = $id");