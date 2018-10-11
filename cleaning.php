<?php require_once 'class/db.php'; ?>
<?php require_once 'functions/products.php'; ?>
<?php $db = new DB(); ?>

<?php $cat_id = Input::get('category'); ?>
<?php $firstId = get_first_articles_id('article_subcategories', $cat_id); ?>
<?php $id = Input::get('subcategory'); ?>
<?php $subcat_id = Input::get('subcategory'); ?>

<?php if(empty($id)) Redirect::to('cleaning.php?category='.$cat_id.'&subcategory='.$firstId.'&page=0'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo categoryName('cleaning_agends', Input::get('subcategory')); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="cleaning/css/cleaning.css">

        <!-- loading gifs -->
        <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
        <script type="text/javascript" src="loading_bars/loading.js"></script>
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>

        <script type="text/javascript" src="menu/js/menu.js"></script>
    </head>
    <body onload="otherLoad();" onresize="setTheMenu();">
        <?php require_once 'loading_bars/loading.php'; ?>
        
        <?php require_once 'menu/menu.php'; ?>

        <?php require_once 'cleaning/categories_menu.php'; ?>
        <?php require_once 'cleaning/articles.php'; ?>
        <?php require_once 'footer/small_footer.php'; ?>
    </body>
</html>
