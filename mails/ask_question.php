<?php
require_once '../class/db.php';
require_once '../class/mail.php';
$db = new DB();


$name = $_POST['name'];
$contact = $_POST['contact'];
$text = $_POST['text'];
$product_id = $_POST['product_id'];

//check product category
$productQuery = $db->query("all_products");
while($product = $productQuery -> fetch()){
    if($product['id'] == $product_id){
        $product_cat_id = $product['cat_id'];
        $product_title = $product['title'];
        break;
    }
}

$message = 'Frage uber <a target="_blank" href="../our_product.php?id='.$product_id.'&cat_id='.$product_cat_id.'&page=0">'.$product_title.'</a> <br> <br>';
$text = $message.$text;


$day = date('j');
$month = date('F');
$year = date('Y');
$hour = date('H');
$minutes = date('i');


$db->action("INSERT INTO `mails` (`from`,`contact`,`text`,`day`,`month`,`year`,`hour`,`minute`) VALUES ('{$name}','{$contact}','{$text}','{$day}','{$month}','{$year}','{$hour}','{$minutes}')");

$mails_query = $db->query('mail_dates');
$does_exist = false;

while($dates = $mails_query -> fetch()){
    if($dates['day'] == $day and $dates['month'] == $month and $dates['year'] == $year){
        $does_exist = true;
        break;
    }
}
if(!$does_exist) $db->action("INSERT INTO `mail_dates` (`day`,`month`,`year`) VALUES ('{$day}','{$month}','{$year}')");



$mailObj = new Mail();

$msg = 'Benutzer : '.$name.' hat Ihnen eine Nachricht uber den Dienst "Kontakt" geschickt."<br><br>';
$msg .= 'Kontaktinformationen : <br>';
$msg .= 'e-Mail : '.$contact.'<br><br><br>';
$msg .= 'Nachricht : <br>'.$text;

$mailObj->send('office@a-group.at', 'Anfrage von der Website', $msg, $contact);
