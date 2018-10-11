<?php require_once '../class/db.php'; ?>
<?php $category_id = Input::get('id'); ?>
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
		<h4>NAŠE USLUGE / <?php echo mb_strtoupper(category_name('our_services', Input::get('id'))); ?></h4>
	</div>
	<div id="working_area">
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="form_output_displaying">
			<?php
			$db = new DB();
			$dbQuery = $db->query('all_services');

			while($object = $dbQuery -> fetch()){
				if($object['cat_id'] == $category_id){
					?>
					<div class="form_output">
						<div class="form_output_left">
						<p><?php echo $object['title']; ?></p>
					</div>
					<div class="form_output_preview form_output_preview_single" title="Pogledajte sadržaj kategorije">
						<a target="_blank" href="../service.php?id=<?php echo $object['id']; ?>"><p>Pogledajte kao korisnik</p></a>
					</div>
					<div class="form_output_delete form_output_delete_single" title="Uredite uslugu">
						<a href="edit_service.php?id=<?php echo $object['id']; ?>"><i class="fa fa-edit"></i></a>
					</div>
					<div class="form_output_delete" title="Obrište kategoriju" onclick="deleteObject('all_services' , '<?php echo $object['id']; ?>');">
						<i class="fa fa-trash"></i>
					</div>
					</div>
					<?php
				}
			}

			?>
		</div>

		<div class="form_output form_output_add_ form_output_add_new">
			<a href="new_service.php?cat_id=<?php echo $category_id; ?>">UNESITE NOVU USLUGU</a>
		</div>
	</div>
</body>
</html>
