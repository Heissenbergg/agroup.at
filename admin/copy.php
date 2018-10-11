<?php
require_once '../class/db.php';
$db = new DB();

$dbQuery = $db->query("cleaning_agends");

while($art = $dbQuery -> fetch()){
	$db->action("INSERT INTO `article_subcategories` (`id`,`title`) VALUES ('{$art['id']}', '{$art['title']}')");
}