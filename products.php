<?php require_once 'class/db.php'; ?>
<?php require_once 'functions/products.php'; ?>
<?php $db = new DB(); ?>
<?php $firstId = getFirstId('our_products'); ?>
<?php $id = Input::get('cat_id'); if(empty($id)) Redirect::to('products.php?cat_id='.$firstId.'&page=0'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo categoryName('our_products', Input::get('cat_id')); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="products/css/products_css.css">
        <link rel="stylesheet" type="text/css" href="products/css/ourproducts.css">

        <!-- loading gifs -->
        <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
        <script type="text/javascript" src="loading_bars/loading.js"></script>
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>

        <script type="text/javascript" src="menu/js/menu.js"></script>
    </head>
    <body onload="otherLoad();">
        <?php require_once 'loading_bars/loading.php'; ?>
        
        <?php require_once 'menu/menu.php'; ?>

        <?php require_once 'products/categories_menu.php'; ?>
        <?php require_once 'products/articles.php'; ?>
        <?php require_once 'footer/small_footer.php'; ?>
    </body>
</html>
