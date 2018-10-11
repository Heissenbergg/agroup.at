<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$details = $_POST['details'];


$db = new DB();
$db->action("UPDATE `all_articles` SET `title` = '{$title}', `price` = '{$price}', `details` = '{$details}'  WHERE id = '$id'");

