<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$sort_images = $_POST['sort_images'];


$db = new DB();
$db->action("UPDATE `pdfs` SET `sort` = $sort_images WHERE id = '$id'");

$dbQuery = $db->DESCquery("pdfs");
while($pdf = $dbQuery -> fetch()){
	if($pdf['id'] == $id){
		echo $pdf['title'];
		break;
	}
}

