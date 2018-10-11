<?php require_once 'class/db.php'; ?>
<?php $title = false; $product_id = Input::get('id'); ?>
<?php require_once 'functions/products.php'; ?>
<?php $db = new DB(); ?>
<?php $details = getDetails($product_id); ?>
<?php $images = getImages($details['image_hash']); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $details['title']; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="products/css/products_css.css">
        <link rel="stylesheet" type="text/css" href="products/css/single_product.css">

        <!-- loading gifs -->
        <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
        <script type="text/javascript" src="loading_bars/loading.js"></script>
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>

        <script type="text/javascript" src="menu/js/menu.js"></script>
        <script type="text/javascript" src="products/js/products.js"></script>
        
        <!-- script for sending mails -->
        <link rel="stylesheet" href="mails/mails.css" type="text/css" />
        <script type="text/javascript" src="mails/mails.js"></script>
    </head>
    <body onload="productsLoad();">
        <?php require_once 'loading_bars/loading.php'; ?>
        
        <?php require_once 'mails/mails_message.php'; ?>
        
        <?php require_once 'menu/menu.php'; ?>

        <?php //require_once 'products/categories_menu.php'; ?>
        <?php require_once 'products/single_product.php'; ?>
    </body>
</html>
