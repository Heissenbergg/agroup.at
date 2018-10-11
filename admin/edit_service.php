<?php require_once '../class/db.php'; ?>

<?php $category_id = Input::get('cat_id'); ?>
<?php require_once '../functions/service.php'; ?>


<?php $details = getService(Input::get('id')); ?>
<?php Session::setImageHash($details['hash']); ?>
<?php $images = $details['hash']; ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $details['title']; ?></title>
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
		<h4>NAŠE USLUGE / <?php echo strtoupper($details['title']); ?></h4>
	</div>
	<div id="working_area">
		<?php require_once 'loading_admin/loading.php'; ?>
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="images_part">
			<?php 
			$db = new DB();
			$dbQuery = $db->query("images");
			while($img = $dbQuery -> fetch()){
				if($img['hash'] == $details['hash']){
					?>
					<div class="single_image" title="Izbrišite sliku">
						<img class="rotated_image<?php echo $img['rotate']; ?>" src="../all_images/<?php echo $img['title']; ?>">
						<div class="delete_image_wrapper" onclick="deleteImage('<?php echo $img['id']; ?>', '<?php echo $img['hash']; ?>', '<?php echo $img['title']; ?>');">
							<i class="fa fa-times"></i>
						</div>
						<div class="rotate_image" title="Rotirajte sliku za 90°" onclick="rotate_image('<?php echo $img['id']; ?>', '<?php echo $img['rotate']; ?>', '<?php echo $img['hash']; ?>');">
							<i class="fa fa-undo"></i>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
		<div class="input_form">
			<div class="input_form_name">
				<p>Naziv</p>
			</div>
			<div class="input_form_input">
				<input type="text" placeholder="Naziv usluge .." value="<?php echo $details['title']; ?>" id="service_title">
			</div>
		</div>
		<div class="textarea_form">
			<div class="textarea_form_name">
				<p>Detaljni opis</p>
			</div>
			<div class="textarea_form_input">
				<textarea placeholder="Detaljni opis usluge .." id="service_details"><?php echo $details['details']; ?></textarea>
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
			<div class="insert_submit_button insert_submit_button2" title="Spremite unos" onclick="update_service('<?php echo Input::get('id'); ?>');">
				<p>SPREMITE</p>
			</div>
		</div>
	</div>
</body>
</html>
