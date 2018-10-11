<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to a-group.at</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link rel="stylesheet" href="../menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="../footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="css/cleaning.css">
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>
        
        <script type="text/javascript" src="../menu/js/menu.js"></script>
    </head>
    <body onload="otherLoad();">
        <?php require_once '../menu/menu.php'; ?>
        
        <?php require_once 'categories_menu.php'; ?>        
        <?php require_once 'articles.php'; ?>

    </body>
</html>