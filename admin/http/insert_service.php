<?php
require_once '../../class/db.php';

$name_of_product = $_POST['service_title'];
$details_of_product = $_POST['details'];
$hash_session = $_POST['hash_session'];
$cat_id = $_POST['cat_id'];

$db = new DB();
$db->action("INSERT INTO `all_services` (`cat_id`,`title`,`description`,`image_hash`) VALUES ('{$cat_id}','{$name_of_product}','{$details_of_product}','{$hash_session}')");
//$db->action("DELETE FROM `our_products` WHERE id = $id");
