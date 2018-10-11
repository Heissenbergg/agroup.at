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
	<div id="working_area_header">
		<h4>PRIMLJENI MAILOVI</h4>
	</div>
	<div id="working_area">
		<?php 
		$db = new DB();
		$dates_query = $db->DESCquery("mail_dates");
		while($date = $dates_query -> fetch()){
			echo '<div class="date"> <h4>Poruke od '.$date['day'].'. '.$date['month'].' '.$date['year'].'</h4> </div>';
			$mails_query = $db->DESCquery("mails");
			while($mail = $mails_query -> fetch()){
				if($mail['day'] == $date['day'] and $mail['month'] == $date['month'] and $mail['year'] == $date['year']){
					?>
						<div class="mail">
							<div class="mail_left">
								<p>From : <?php echo $mail['from']; ?></p>
							</div>
							<div class="mail_right">
								<p><?php echo $mail['hour'].':'.$mail['minute']; ?> h</p>
							</div>
							<div class="view_mail" title="Pogledajte poruku">
								<a href="view_mail.php?id=<?php echo $mail['id']; ?>">
									<img src="../images/file.png"></img>
								</a>
							</div>
						</div>				
					<?php
				}
			}
		}
		?>
		<!--
		<div class="date">
			<h4>Poruke od 24. July 2018</h4>
		</div>
		<div class="mail">
			<div class="mail_left">
				<p>From Aladin the Great Kapić</p>
			</div>
			<div class="mail_right">
				<p>16:56</p>
			</div>
			<div class="view_mail" title="Pogledajte poruku">
				<a href="view_mail.php">
					<img src="../images/file.png"></img>
				</a>
			</div>
		</div>
		-->
	</div>
</body>
</html>
