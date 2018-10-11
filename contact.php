<?php require_once 'class/db.php'; ?>
<?php $db = new DB(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kontaktiere uns</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="contact/css/contact.css">
	<link rel="stylesheet" href="menu/css/menu.css" type="text/css" />

	<script type="text/javascript" src="menu/js/menu.js"></script>
	<script type="text/javascript" src="contact/js/map.js"></script>
	
    <!-- loading gifs -->
    <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
    <script type="text/javascript" src="loading_bars/loading.js"></script>
        
	<!-- script for sending mails -->
    <link rel="stylesheet" href="mails/mails.css" type="text/css" />
    <script type="text/javascript" src="mails/mails.js"></script>
</head>
<body onload="otherLoad();">
    <?php require_once 'loading_bars/loading.php'; ?>
        
	<?php require_once 'mails/mails_message.php'; ?>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAApiBLPehhhJkDFqzlfNGN99n18N4PZxA&callback=initMap" async defer></script>
	<?php require_once 'menu/menu.php'; ?>

	<div id="contactMainWrapper">
		<div id="contactMainWrapperMapa"></div>
		<div id="mapOverlay"></div>

		<!-- input forms -->
		<div id="contactMainWrapperFormWrapper">
			<div id="contactMainWrapperFormWrapperForm">
				<div id="contactHeader">
					<h1>Kontaktiere uns</h1>
				</div>
				<div id="contactFormWrapper">
					<div class="input_form">
						<input type="text" id="mail_name" placeholder="Dein Name" autocomplete="off">
					</div>
					<div class="input_form">
						<input type="text" id="mail_contact" placeholder="Ihr Telefon / Ihre E-Mail" autocomplete="off">
					</div>
					<div class="input_form input_form_area">
						<textarea id="mail_text" placeholder="Deine Nachricht" autocomplete="off"></textarea>
					</div>
					<div class="input_form input_form_submit" title="Send your message" onclick="sendMail();">
						<input type="submit" value="NACHRICHT SENDEN">
					</div>
				</div>
			</div>


			<!-- adress -->
			<div id="contactMainWrapperFormWrapperAdress">
				<div id="contactInfo">
					<div class="adressItems">
						<div id="adressItemsLocation">
							<div id="photo">
								<img src="contact/images/location.png">
							</div>
							<div id="description">
								<p>St. Peterstrasse 5a/2/221</p>
							</div>
						</div>
					</div>

					<div class="adressItems">
						<div id="adressItemsLocation">
							<div id="photo">
								<img src="contact/images/mail.png">
							</div>
							<div id="description">
								<p>office@a-group.at</p>
							</div>
						</div>
					</div>

					<div class="adressItems">
						<div id="adressItemsLocation">
							<div id="photo">
								<img src="contact/images/phone.png">
							</div>
							<div id="description">
								<p>+43 463 329982</p>
							</div>
						</div>
					</div>

					<div class="adressItems">
						<div id="adressItemsLocation">
							<div id="photo">
								<img src="contact/images/fax.png">
							</div>
							<div id="description">
								<p>+43 463 329983</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>