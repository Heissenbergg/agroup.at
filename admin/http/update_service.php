<?php
require_once '../../class/db.php';

echo $id = $_POST['id'];
$title = $_POST['service_title'];
$details = $_POST['details'];


$db = new DB();
$db->action("UPDATE `all_services` SET `title` = '{$title}', `description` = '{$details}'  WHERE id = '$id'");

