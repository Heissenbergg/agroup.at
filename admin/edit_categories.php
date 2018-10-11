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
		<h4><?php echo strtoupper(category_name(Input::get('table'), Input::get('id'))); ?></h4>
	</div>
	<div id="working_area">
		<div class="form_output form_output_add_">
			<div class="form_output_left">
				<input type="text" id="title" value="<?php echo (category_name(Input::get('table'), Input::get('id'))); ?>">
			</div>
			<div class="form_output_add" title="Spremite kategoriju">
				<input type="submit" value="SPREMITE" onclick="update_categories('<?php echo Input::get('id') ?>', '<?php echo Input::get('table'); ?>');">
			</div>
		</div>
	</div>
</body>
</html>
