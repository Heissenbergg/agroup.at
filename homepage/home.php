<div id="slider">
	<img class="slider_images" src="homepage/images/aqua.jpg"></img>
	<img class="slider_images" src="homepage/images/thirdImg.jpg"></img>
    <img class="slider_images" src="homepage/images/firstImg.jpg"></img>
    <img class="slider_images" src="homepage/images/secondImg.jpg"></img>
    <div id="sliderShadow"></div>
    <div id="sliderNavigation">
    	<!--<div class="sliderNavigation_line">
    		<div class="sliderNavigation_just_line"></div>
    	</div>
    	<div class="sliderNavigation_line sliderNavigation_mline"></div>
    	<div class="sliderNavigation_line"></div> -->
    </div>

    <div id="textWrapper">
    	<div class="image_text">
    		<div class="image_text_header">
    			<h3>AQUA <span>902</span> </h3>
    		</div>
    		<div class="image_text_text">
    			<p>
    				<b>DAS BESTE VERHÄLTNIS ZWISCHEN QUALITÄT & PREIS: </b> 
					Kann mittels unserer eigenen Abfüllanlage erreicht werden. <br>

					<b>MINDESTMENGE AB 360 FLASCHEN:</b>
					Wasser mit Ihrem Logo wird ab der Mindestmenge von 360 Flaschen abgefüllt (Wettbewerber: 1200). <br>

					<b>SCHNELLSTE LIEFERUNG AUF DEM MARKT (SCHON INNERHALB VON 48 STUNDEN):</b>
					Mittels unserer eigenen Distribution wird Wasser innerhalb von 48 Stunden ab Ihrer Bestellung geliefert.

    			</p>
    		</div>
    	</div>
    	<div class="image_text">
    		<div class="image_text_header">
    			<h3>KATRIN PRODUKTE </h3>
    		</div>
    		<div class="image_text_text">
    			<p>
    				Unser Ziel ist es, dafür zu sorgen, dass die Kunden sich wenig Gedanken machen müssen.
    			</p>
    		</div>
    	</div>

    	<div class="image_text">
    		<div class="image_text_header">
    			<h3>Hygiene – Systeme von KATRIN</h3>
    		</div>
    		<div class="image_text_text">
    			<p>
    				-	Hygienische Lösung <br>
					-	Ökonomische Lösung <br>
					-	Umweltfreundliche Lösung

    			</p>
    		</div>
    	</div>

    	<div class="image_text">
    		<div class="image_text_header">
    			<h3>Schöner Komfort</h3>
    		</div>
    		<div class="image_text_text">
    			<p>
    				Die Katrin Inclusive Spenderlinie. Sauberkeit und Hygiene sind für ein gesundes Leben unerlässlich.
    			</p>
    		</div>
    	</div>
    </div>
</div>

<div id="littleAboutUs">
	<div id="littleAboutUs_header">
		<h4>Willkommen bei A Group</h4>
	</div>
	<div id="littleAboutUs_intro">
		<!-- <div class="littleAboutUs_intro_parts littleAboutUs_intro_parts0">
			<h4>
				
			</h4>
		</div> -->
		<div class="littleAboutUs_intro_parts">
			<p>
			A Group ist ein modernes, kundenorientiertes Unternehmen. <br><br>
			Gegenüber unserer Kunden sehen wir es als unsere Pflicht hochqualitative und konkurrenzfähige Produkte zu einem vernünftigen Preis anzubieten.
			
			</p>
		</div>
	</div>
	<div id="fancy_numbers">
		<div class="fancy_numbers_part">
			<div class="fancy_numbers_part_icon">
				<img src="homepage/images/clock.png">
			</div>
			<div class="fancy_numbers_part_howmanny">
				<h1>2002</h1>
			</div>
			<div class="fancy_numbers_part_text">
				<p> FIRMA GEGRÜNDET</p>
			</div>
		</div>
		<div class="fancy_numbers_part">
			<div class="fancy_numbers_part_icon">
				<img src="homepage/images/projects.png">
			</div>
			<div class="fancy_numbers_part_howmanny">
				<h1>470+</h1>
			</div>
			<div class="fancy_numbers_part_text">
				<p>PROJEKTE FERTIG</p>
			</div>
		</div>
		<div class="fancy_numbers_part">
			<div class="fancy_numbers_part_icon">
				<img src="homepage/images/partners.png">
			</div>
			<div class="fancy_numbers_part_howmanny">
				<h1>163+</h1>
			</div>
			<div class="fancy_numbers_part_text">
				<p> GESCHÄFTSPARTNER</p>
			</div>
		</div>
		<div class="fancy_numbers_part">
			<div class="fancy_numbers_part_icon">
				<img src="homepage/images/happy_clients.png">
			</div>
			<div class="fancy_numbers_part_howmanny">
				<h1>273+</h1>
			</div>
			<div class="fancy_numbers_part_text">
				<p>GLÜCKLICHE KUNDEN</p>
			</div>
		</div>
	</div>
</div>

<div id="news_contact">
	<div id="news_or_contact">
		<div id="rotatedText" onclick="contact_or_news();">
			<p id="news_contact_value">KONTAKTIERE UNS</p>
		</div>
	</div>

	<div id="contact_us">
		<div id="contact_us_header">
			<h3>Haben Sie Fragen?</h3>
		</div>
		<div id="contact_us_body">
			<div class="contact_us_body_input">
				<input type="text" id="mail_name" placeholder="* Dein Name ..">
			</div>
			<div class="contact_us_body_input">
				<input type="text" id="mail_contact" placeholder="* Ihr Telefon / Ihre E-Mail ..">
			</div>
			<div class="contact_us_body_input contact_us_body_input2">
				<textarea id="mail_text" placeholder="* Deine Nachricht .."></textarea>
			</div>
			<div class="contact_us_body_input contact_us_body_input_sendndlinks">
				<div id="send_button" onclick="sendMail();">
					<p>NACHRICHT SENDEN</p>
				</div>
				<div id="contact_options">
					<i class="fa fa-envelope" title="Unsere Post" onclick="showContactInfo(0);"></i>
					<i class="fa fa-map-marker" title="Unsere Position" onclick="showContactInfo(1);"></i>
					<i class="fa fa-phone-square" title="Unsere Telefonnummer" onclick="showContactInfo(2);"></i>
					<!--<img src="homepage/images/mail.png">
					<img src="homepage/images/marker.png">
					<img src="homepage/images/telephone.png"> -->
				</div>
			</div>
			<div class="contact_us_body_input contact_us_body_properties">
				<i class="fa fa-envelope" title="Our mail"></i>
				<p>office@a-group.at</p>
			</div>
			<div class="contact_us_body_input contact_us_body_properties contact_us_body_properties0">
				<i class="fa fa-map-marker" title="Our location"></i>
				<p>A-Group Handels KG, St. Peterstrasse 5a/2/221</p>
			</div>
			<div class="contact_us_body_input contact_us_body_properties contact_us_body_properties0">
				<i class="fa fa-phone-square" title="Our phone number"></i>
				<p>+43 463 329982</p>
			</div>
		</div>
	</div>
	<div id="news">
		<div id="news_header">
			<h3>NACHRICHTEN </h3>
		</div>
		<div id="news_body">
			<?php
			$i = 0;
			$newsQuery = $db->DESCquery("news");
			while($news = $newsQuery -> fetch()){
				if(++$i == 10) break;
				?>
				<div class="single_new">
					<div class="single_new_header">
						<img src="homepage/images/time.png">
						<h5><?php echo $news['day'].'. '.$news['month'].' '.$news['year'].' '; ?><clock>at <?php echo $news['hour'].':'.$news['minutes']; ?></clock></h5>
					</div>
					<div class="single_new_name">
						<h4>
							<a href="new.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
						</h4>
					</div>
					<div class="single_new_subscription">
						<p>posted by <who><?php echo $news['posted']; ?></who></p>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>

<div id="a_cms">
	<p>
		Besuchen Sie uns <a href="http://www.a-cms.eu">www.a-cms.eu</a>
	</p>
</div>

<?php require_once 'footer/footer.php'; ?>
