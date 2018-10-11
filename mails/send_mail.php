<?php
require_once '../class/db.php';
require_once '../class/mail.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$text = $_POST['text'];

$day = date('j');
$month = date('F');
$year = date('Y');
$hour = date('H');
$minutes = date('i');

$db = new DB();
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
