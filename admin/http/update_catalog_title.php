<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$title = $_POST['title'];


$db = new DB();
$db->action("UPDATE `catalog` SET `title` = '{$title}' WHERE id = '$id'");


