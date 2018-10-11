<?php require_once 'class/db.php'; ?>
<?php $db = new DB(); ?>
<?php require_once 'admin/functions/about.php'; ?>
<?php require_once 'functions/products.php'; ?>


<!DOCTYPE html>
<html>
    <head>
        <title>TEAM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="cleaning/css/cleaning.css">
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

        <div id="main_wrapper" class="team_wrapper">
            <div class="team_header">
                <h1>Unser Team</h1>
            </div>
            <div class="team_member">
                <img src="about_us/images/mirsad.png">
                <div class="team_member_title">
                    <p> Mirsad Muric <br> <span> Vertrieb </span>  </p>
                </div>
            </div>
            <div class="team_member team_member2">
                <img src="about_us/images/armin.png">
                <div class="team_member_title">
                    <p> Armin Muric <br> <span> DFG MEISTER </span>  </p>
                </div>
            </div>
            <div class="team_member">
                <img src="about_us/images/ervina.png">
                <div class="team_member_title">
                    <p> Ervina Muric <br> <span> Objektleiterin </span>  </p>
                </div>
            </div>
            <div class="team_member">
                <img src="about_us/images/merisa.png">
                <div class="team_member_title">
                    <p> Merisa Buljic <br> <span> Marketing  </span>  </p>
                </div>
            </div>
            <div class="team_member">
                <img src="about_us/images/hamzalija.png">
                <div class="team_member_title">
                    <p> Hamzalija Kupinic <br> <span> Buchhaltung   </span>  </p>
                </div>
            </div>
        </div>        
        
        <script type="text/javascript">
            document.getElementById("about_body").onload = function() {otherLoad()};
        </script>
    </body>
</html>


