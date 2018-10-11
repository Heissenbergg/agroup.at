<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$table = $_POST['table'];
$deg = $_POST['deg'];

if(($deg + 90) == 360) $deg = 0;
else $deg+=90;

$db = new DB();
$db->action("UPDATE `$table` SET `rotate` = $deg WHERE id = '$id'");
