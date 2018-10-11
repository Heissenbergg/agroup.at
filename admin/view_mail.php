<?php require_once '../class/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Primljeni mailovi</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="menu/css/menu.css">

	<link rel="stylesheet" type="text/css" href="css/mails.css">

	<!-- Font awesome -->
    <script src="https://use.fontawesome.com/85a780918f.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<?php require_once 'menu/menu.php'; ?>
	<?php 
	$db = new DB();
	$mails_query = $db->query("mails");
	while($mail = $mails_query -> fetch()){
		if($mail['id'] == Input::get('id')){
			?>
			<div id="working_area_header">
				<h4>Primljeni mailovi / <?php echo $mail['from']; ?></h4>
			</div>
			<div id="working_area">
				<div class="mail_preview">
				    <p>From : < <?php echo $mail['contact']; ?> > <?php echo $mail['from']; ?></p>
				</div>
				<div class="mail_preview">
				    <p>Date : <?php echo $mail['day'].'. '.$mail['month'].' '.$mail['year'].' '.$mail['hour'].':'.$mail['minute']; ?>h</p>
				</div>
				<div class="mail_preview">
				    <p class="mail_text">
				        <?php echo $mail['text']; ?>
				    </p>
				</div>
			</div>
			<?php
		}
	}
	?>
</body>
</html>
