<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$table = $_POST['table'];


$db = new DB();
$db->action("UPDATE `$table` SET `title` = '{$title}' WHERE id = '$id'");

