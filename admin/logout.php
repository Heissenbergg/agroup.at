<?php
require_once '../class/db.php';
session_destroy();
Redirect::to('../login.php');