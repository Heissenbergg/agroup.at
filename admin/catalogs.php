<?php require_once '../class/db.php'; ?>
<?php require_once 'functions/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Katalozi</title>
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
		<h4>PREGLED KATALOGA</h4>
	</div>
	<div id="working_area">
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="form_output_displaying">
			<?php
			$db = new DB();
			$dbQuery = $db->query('catalog');

			while($object = $dbQuery -> fetch()){
				?>
				<div class="form_output">
					<div class="form_output_left">
					<p><?php echo $object['title']; ?></p>
				</div>
				<div class="form_output_preview form_output_preview_single" title="Pogledajte sadržaj kategorije">
					<a target="_blank" href="../pdfs/<?php echo $object['hash']; ?>"><p>Pogledajte kao korisnik</p></a>
				</div>
				<div class="form_output_delete" title="Obrište artikal" onclick="deleteObject('catalog' , '<?php echo $object['id']; ?>');">
					<i class="fa fa-trash"></i>
				</div>
				</div>

				<?php
			}

			?>
		</div>

		<div class="form_output form_output_add_ form_output_add_new">
			<a href="insert_catalogs.php">UNESITE PROIZVOD</a>
		</div>
	</div>
</body>
</html>
