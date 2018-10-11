<?php
require 'class/db.php';
error_reporting(E_ALL); // or E_STRICT
ini_set("display_errors",1);
ini_set("memory_limit","1024M");

$ini_val = ini_get('upload_tmp_dir');
$upload_tmp_dir = $ini_val ? $ini_val : sys_get_temp_dir();


//Ukupan broj slika (niz)
//$count = count($_FILES['file']['name']);

if(isset($_POST["submit"])){
	$count = count($_FILES['file']['name']);
	$db = new DB();


	//$adminID = 22;
	echo $postID = Session::getImageHash();


	//Iteriraj kroz niz i ispiši svaki od elemenata
	for ($i = 0; $i < $count; $i++) {
	    $ext = pathinfo($_FILES['file']['name'][$i],PATHINFO_EXTENSION);
	    $name = md5($_FILES['file']['name'][$i].time()).'.'.$ext;
	    echo $name = "Imeslikeaaaaaaaaaaaa.".$ext;
	    //$photo->insert($article_id, $name);
	    $db->action("INSERT into `images` (`hash`, `title`) VALUES ('{$postID}', '{$name}')");
	    copy($_FILES['file']['tmp_name'][$i], 'all_images/'. $name);
	    //array_push($images, $name);    
	}	
	die();
}


//echo json_encode($images);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="file[]" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>