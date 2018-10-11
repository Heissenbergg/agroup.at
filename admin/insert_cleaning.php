<?php require_once '../class/db.php'; ?>
<?php Session::setImageHash(); ?>
<?php $category_id = Input::get('cat_id'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Unesite artikal</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="menu/css/menu.css">

	<link rel="stylesheet" type="text/css" href="css/products.css">

	<!-- Font awesome -->
    <script src="https://use.fontawesome.com/85a780918f.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<?php require_once 'menu/menu.php'; ?>
	<div id="working_area_header">
		<h4>NAŠI PROIZVODI</h4>
	</div>
	<div id="working_area">
		<?php require_once 'loading_admin/loading.php'; ?>
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="images_part">
			<!-- <div class="single_image">
				<img src="/homepage/images/aa.jpg">
				<div class="delete_image_wrapper" title="Izbrišite sliku">
					<i class="fa fa-times"></i>
				</div>
				<div class="rotate_image">
					<i class="fa fa-undo"></i>
				</div>
			</div> -->
		</div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Naziv</p>
			</div>
			<div class="input_form_input">
				<input type="text" placeholder="Naziv .." id="name_of_article">
			</div>
		</div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Cijena</p>
			</div>
			<div class="input_form_input">
				<input type="text" placeholder="50 €" id="price_of_article">
			</div>
		</div>
		<div class="textarea_form">
			<div class="textarea_form_name">
				<p>Detaljni opis</p>
			</div>
			<div class="textarea_form_input">
				<textarea placeholder="Tekst .." id="details_of_article"></textarea>
			</div>
		</div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Sicherheitsdatenblatt</p>
			</div>
			<div class="input_form_input">
				<form enctype="multipart/form-data" title="Odaberite prvi PDF">
	                <label for="file" onclick="setOptions(1, 1);">
	                    <img src="../icons/pdf.png">
	                </label>
	                <input type="file" onchange="uploadAllPictures();" id="file" name="file[]" multiple="multiple"  style="display: none;">
	            </form>
	            <p class="preview_pdfs"><a class="preview_pdfs_links" id="preview_first_pdf" target="_blank" href="">Pogledajte PDF ovdje</a></p>
			</div>
		</div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Produktdatenblatt</p>
			</div>
			<div class="input_form_input">
				<form enctype="multipart/form-data" title="Odaberite drugi PDF">
	                <label for="file" onclick="setOptions(1, 2);">
	                    <img src="../icons/pdf.png">
	                </label>
	                <input type="file" onchange="uploadAllPictures();" id="file" name="file[]" multiple="multiple"  style="display: none;">
	            </form>
	            <p class="preview_pdfs"><a class="preview_pdfs_links" id="preview_second_pdf" target="_blank" href="">Pogledajte PDF ovdje</a></p>
			</div>
		</div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Techniches Datenblatt</p>
			</div>
			<div class="input_form_input">
				<form enctype="multipart/form-data" title="Odaberite treći PDF">
	                <label for="file" onclick="setOptions(1, 3);">
	                    <img src="../icons/pdf.png">
	                </label>
	                <input type="file" onchange="uploadAllPictures();" id="file" name="file[]" multiple="multiple"  style="display: none;">
	            </form>
	            <p class="preview_pdfs"><a class="preview_pdfs_links" id="preview_third_pdf" target="_blank" href="">Pogledajte PDF ovdje</a></p>
			</div>
		</div>
		<!-- insert images and save article -->
		<div class="insert_image_submit">
			<div class="insert_submit_button" title="Kliknite da odaberete slike">
				<form enctype="multipart/form-data">
	                <label for="file"  onclick="setOptions(0);">
	                    <p>ODABERITE SLIKE</p>
	                </label>
	                <input type="file" onchange="uploadAllPictures();" id="file" name="file[]" multiple="multiple"  style="display: none;">
	            </form>
			</div>
			<div class="insert_submit_button insert_submit_button2" title="Spremite unos" onclick="save_article('<?php echo Input::get('id'); ?>', '<?php echo Input::get('cat_id'); ?>');">
				<p>SPREMITE</p>
			</div>
		</div>
	</div>
</body>
</html>
