<?php require_once 'class/db.php'; ?>
<?php $db = new DB(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to a-group.at</title>
        <meta charset="UTF-8">
        <title>A Group Handels KG</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="A Group Handels KG" />
        <meta name="keywords" content="A group, Handel, Katrin, Import, Klagenfurt, Europa" />
        <meta name="Resource-type" content="document" />
        <meta http-equiv="imagetoolbar" content="no"/>
        <meta name="Rating" content="general" />
        <meta name="Copyright" content="Copyright - A-group, 2018. All rights reserved." />
        <meta name="Author" content="Aladin Kapic" />

        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="homepage/css/homepage.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <!-- loading gifs -->
        <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
        <script type="text/javascript" src="loading_bars/loading.js"></script>
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>

        <script type="text/javascript" src="homepage/js/home.js"></script>
        <!-- script for sending mails -->
        <link rel="stylesheet" href="mails/mails.css" type="text/css" />
        <script type="text/javascript" src="mails/mails.js"></script>
    </head>
    <body onresize="setFirst(); setTheMenu();">
        <?php require_once 'mails/mails_message.php'; ?>
        <?php require_once 'loading_bars/loading.php'; ?>
        
        <?php require_once 'menu/menu.php'; ?>
        <?php require_once 'homepage/home.php'; ?>
        <script type="text/javascript">
            window.onload = function() {
                setOnload();
                close_loading();
            }
        </script>
        <script type="text/javascript" src="menu/js/menu.js"></script>
    </body>
</html>
