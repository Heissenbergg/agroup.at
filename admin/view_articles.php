<?php require_once '../class/db.php'; ?>
<?php $category_id = Input::get('id'); ?>
<?php require_once 'functions/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikli</title>
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
		<h4>KATEGORIJE ARTIKALA / <?php echo mb_strtoupper(category_name('article_categories', Input::get('cat_id'))); ?> / <?php echo strtoupper(category_name('article_subcategories', Input::get('id'))); ?></h4>
	</div>
	<div id="working_area">
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="form_output_displaying">
			<?php
			$db = new DB();
			$dbQuery = $db->query('all_articles');

			while($object = $dbQuery -> fetch()){
				if($object['cat_id'] == $category_id){
					?>
					<div class="form_output">
						<div class="form_output_left">
						<p><?php echo $object['title']; ?></p>
					</div>
					<div class="form_output_preview form_output_preview_single" title="Pogledajte sadržaj kategorije">
						<a target="_blank" href="../just_article.php?id=<?php echo $object['id']; ?>&cat_id=<?php echo $object['cat_id']; ?>&page=0">
							<p>Pogledajte kao korisnik</p>
						</a>
					</div>
					<div class="form_output_delete form_output_delete_single" title="Uredite artikal">
						<a href="edit_cleaning.php?id=<?php echo $object['id']; ?>"><i class="fa fa-edit"></i></a>
					</div>
					<div class="form_output_delete" title="Obrište artikal" onclick="deleteObject('all_articles' , '<?php echo $object['id']; ?>');">
						<i class="fa fa-trash"></i>
					</div>
					</div>
					<?php
				}
			}

			?>
		</div>

		<div class="form_output form_output_add_ form_output_add_new">
			<a href="insert_cleaning.php?cat_id=<?php echo Input::get('cat_id'); ?>&id=<?php echo Input::get('id'); ?>">UNESITE PROIZVOD</a>
		</div>
	</div>
</body>
</html>
