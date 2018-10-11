<?php
require '../../class/db.php';
error_reporting(E_ALL); // or E_STRICT
ini_set("display_errors",1);
ini_set("memory_limit","1024M");


//Ukupan broj slika (niz)
$count = count($_FILES['file']['name']);
$db = new DB();
//$adminID = 22;
$postID = Session::getImageHash();

//Iteriraj kroz niz i ispiši svaki od elemenata
for ($i = 0; $i < $count; $i++) {
    $ext = pathinfo($_FILES['file']['name'][$i],PATHINFO_EXTENSION);
    $name = md5($_FILES['file']['name'][$i].time()).'.'.$ext;
    //$photo->insert($article_id, $name);
    $db->action("INSERT into `catalog` (`hash`) VALUES ('{$name}')");
    move_uploaded_file($_FILES['file']['tmp_name'][$i], '../../pdfs/'. $name);
    //array_push($images, $name);    
}

$catQuery = $db->DESCquery('catalog');
while($cat = $catQuery -> fetch()){
	echo $cat['id'];
	break;
}

//echo json_encode($images);