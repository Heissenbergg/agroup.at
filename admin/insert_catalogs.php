<?php require_once '../class/db.php'; ?>
<?php Session::setImageHash(); ?>
<?php $category_id = Input::get('cat_id'); ?>
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
		<h4>NAŠI PROIZVODI</h4>
	</div>
	<div id="working_area">
		<?php require_once 'loading_admin/loading.php'; ?>
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="images_part">
			<!-- empty file -->
		</div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Naziv</p>
			</div>
			<div class="input_form_input">
				<input type="text" placeholder="Naziv .." id="name_of_product">
			</div>
		</div>
		<div class="input_form" id="uploaded_pdf">
			<div class="input_form_name">
				<p>Response : </p>
			</div>
			<div class="input_form_input" title="Pogledajte fajl">
				<a target="_blank" id="uploaded_pdf_file" href=""><img src="../icons/pdf.png"></a>
				<p>Fajl uploadovan !</p>
			</div>
		</div>
		<!-- insert images and save article -->
		<div class="insert_image_submit">
			<div class="insert_submit_button" title="Kliknite da odaberete slike">
				<form enctype="multipart/form-data">
	                <label for="file">
	                    <p>ODABERITE PDF</p>
	                </label>
	                <input type="file" onchange="uploadPDF();" id="file" name="file[]" multiple="multiple"  style="display: none;">
	            </form>
			</div>
			<div class="insert_submit_button insert_submit_button2" title="Spremite unos" onclick="updateName();">
				<p>SPREMITE</p>
			</div>
		</div>
	</div>
</body>
</html>
