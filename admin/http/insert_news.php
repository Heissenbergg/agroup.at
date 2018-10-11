<?php
require_once '../../class/db.php';
require_once '../../class/user.php';
require_once '../functions/date.php';

$title = $_POST['title_of_news'];
$details = $_POST['details'];
$hash_session = $_POST['hash_session'];
//$cat_id = $_POST['cat_id'];

$user = new User(Session::getUsername());
$name_of_user = $user->nameAndSurname();
$day = date('j');
$month = date('F');
$year = date('Y');
$hour = date('H');
$minutes = date('i');

$db = new DB();
$db->action("INSERT INTO `news` (`title`, `details`,`image_hash`,`posted`,`day`,`month`,`year`,`hour`,`minutes`) VALUES ('{$title}','{$details}','{$hash_session}','{$name_of_user}','{$day}','{$month}','{$year}','{$hour}','{$minutes}')");
//$db->action("DELETE FROM `our_products` WHERE id = $id");
