<?php
require_once '../../class/db.php';

$id = $_POST['id'];
$table = $_POST['table'];

$db = new DB();
$db->action("DELETE FROM `$table` WHERE id = $id");