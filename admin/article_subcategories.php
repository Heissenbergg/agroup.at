<?php require_once '../class/db.php'; ?>
<?php require_once 'functions/functions.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo strtoupper(category_name('article_categories', Input::get('id'))); ?></title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="menu/css/menu.css">

	<link rel="stylesheet" type="text/css" href="css/products.css">

	<!-- Font awesome -->
    <script src="https://use.fontawesome.com/85a780918f.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/articles.js"></script>
</head>
<body>
	<?php require_once 'menu/menu.php'; ?>
	<div id="working_area_header">
		<h4>KATEGORIJE ARTIKALA / <?php echo strtoupper(category_name('article_categories', Input::get('id'))); ?></h4>
	</div>
	<div id="working_area">
		<!-- div form_output_displaying is just for http for not to copy add me -->
		<div id="form_output_displaying">
			<?php
			$db = new DB();
			$dbQuery = $db->query('article_subcategories');
			$category_id = Input::get('id');
			while($object = $dbQuery -> fetch()){
				if($object['category_id'] == $category_id){
					?>
					<div class="form_output">
						<div class="form_output_left">
						<p><?php echo $object['title']; ?></p>
					</div>
					<div class="form_output_preview form_output_preview_single" title="Pogledajte sadržaj kategorije">
						<a href="view_articles.php?id=<?php echo $object['id']; ?>&cat_id=<?php echo Input::get('id'); ?>"><p>PREGLED KATEGORIJE</p></a>
					</div>
					<div class="form_output_delete form_output_delete_single" title="Uredite podkategoriju">
						<a href="edit_categories.php?id=<?php echo $object['id']; ?>&table=article_subcategories"><i class="fa fa-edit"></i></a>
					</div>
					<div class="form_output_delete" title="Obrište kategoriju" onclick="deleteObject('article_subcategories' , '<?php echo $object['id']; ?>');">
						<i class="fa fa-trash"></i>
					</div>
					</div>
					<?php
				}
				}

			?>
		</div>
		<div class="form_output form_output_add_">
			<div class="form_output_left">
				<input type="text" id="subcategory_title" placeholder="Naziv kategorije">
			</div>
			<div class="form_output_add" title="Spremite kategoriju">
				<input type="submit" value="SPREMITE" onclick="save_subcategory('<?php echo $category_id; ?>');">
			</div>
		</div>
	</div>
</body>
</html>
