<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$table = $_POST['table'];
$title = $_POST['title'];

$db = new DB();
$db->action("DELETE FROM `$table` WHERE id = $id");

unlink('../../all_images/'.$title);