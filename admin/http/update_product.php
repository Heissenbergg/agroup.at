<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$details = $_POST['details'];


$db = new DB();
$db->action("UPDATE `all_products` SET `title` = '{$title}', `description` = '{$details}'  WHERE id = '$id'");

