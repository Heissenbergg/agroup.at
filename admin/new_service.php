<?php require_once '../class/db.php'; ?>
<?php Session::setImageHash(); ?>
<?php $category_id = Input::get('cat_id'); ?>
<?php require_once 'functions/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
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
		<h4>NAŠE USLUGE / <?php echo mb_strtoupper(category_name('our_services', Input::get('cat_id'))); ?> / UNOS USLUGE</h4>
	</div>
	<div id="working_area">
		<?php require_once 'loading_admin/loading.php'; ?>
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="images_part"> </div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Naziv</p>
			</div>
			<div class="input_form_input">
				<input type="text" placeholder="Naziv usluge .." id="service_title">
			</div>
		</div>
		<div class="textarea_form">
			<div class="textarea_form_name">
				<p>Detaljni opis</p>
			</div>
			<div class="textarea_form_input">
				<textarea placeholder="Detaljni opis usluge .." id="service_details"></textarea>
			</div>
		</div>
		<!-- insert images and save article -->
		<div class="insert_image_submit">
			<div class="insert_submit_button" title="Kliknite da odaberete slike">
				<form enctype="multipart/form-data">
	                <label for="file">
	                    <p>ODABERITE SLIKE</p>
	                </label>
	                <input type="file" onchange="uploadAllPictures();" id="file" name="file[]" multiple="multiple"  style="display: none;">
	            </form>
			</div>
			<div class="insert_submit_button insert_submit_button2" title="Spremite unos" onclick="save_service('<?php echo $category_id; ?>');">
				<p>SPREMITE</p>
			</div>
		</div>
	</div>
</body>
</html>
