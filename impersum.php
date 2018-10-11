<?php require_once 'class/db.php'; ?>
<?php $db = new DB(); ?>
<?php require_once 'admin/functions/about.php'; ?>
<?php require_once 'functions/products.php'; ?>

<?php $details = getAbout(1); ?>
<?php Session::setImageHash(777); ?>
<?php $images = getImages($details['image_hash']); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Impresum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/impresum.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="about_us/css/about.css">

        <!-- loading gifs -->
        <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
        <script type="text/javascript" src="loading_bars/loading.js"></script>
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>

        <script type="text/javascript" src="menu/js/menu.js"></script>
    </head>
    <body id="about_body">
        <?php require_once 'loading_bars/loading.php'; ?>
        <?php require_once 'menu/menu.php'; ?>

        <div id="impresum_wrapper">
            <h1>IMPRESUM </h1>
            <h4>
                A-Group Handels KG <br>
                Sankt Peter Straße 5 <br>
                9020 Klagenfurt am Wörthersee <br>
            </h4>
            <h4>
                Tel:   0463 329982 <br>
                Fax:  0463 329982-4 <br>
                <a href="contact.php">office@a-group.at</a> <br>
            </h4>

            <h4>
                Fn 260046 x LG Klagenfurt <br>
                Gerichtsstand: Handelsgericht Klagenfurt <br>
                Kammer: Wirtschaftskammer Kärnten <br>
                UID-Nr. ATU61524979

            </h4>

            <h4>Development by <a target="_blank" href="https://www.linkedin.com/in/aladin-kapić-776704b6/">Aladin Kapic</a></h4>
        </div>
        
        <script type="text/javascript">
            document.getElementById("about_body").onload = function() {otherLoad()};
        </script>
    </body>
</html>
