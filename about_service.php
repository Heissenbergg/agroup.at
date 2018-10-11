<?php require_once 'class/db.php'; ?>
<?php $db = new DB(); ?>
<?php require_once 'admin/functions/about.php'; ?>
<?php require_once 'functions/products.php'; ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Service / Dienstleistungen</title>
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

        <div id="main_wrapper">
            <div id="main_wrapper_header">
                <h1>Service / Dienstleistungen</h1>
            </div>
            <div id="main_wrapper_body">
                <p>
                    Wir sind kompetente Partner in Sachen infrastrukturelles Gebäude Service Management. <br> <br>
                    A-Group ist ein internationales Unternehmen in der Reinigungsbranche. <br> <br>
                    Wir bieten unseren Geschäftspartnern eine langfristige und vertrauensvolle Zusammenarbeit in offener Kommunikation an. Oberste Priorität ist die Kundenzufriedenheit und Kundennähe. <br> <br>
                    Verlässlichkeit und tadelloses Auftreten unseres Personals, sind für uns selbstverständlich. <br> <br> 
                </p>
                <h3>Unsere Tätigkeitsbereiche</h3>
                <p class="with_tab">• Büros und Verwaltungen</p>
                <p class="with_tab">•   Schulen</p>
                <p class="with_tab">•   Kindergärten</p>
                <p class="with_tab">•   Alten- und Pflegeheim</p>
                <p class="with_tab">•   Krankenhäuser</p>
                <p class="with_tab">•   Kauf- und Warenhäuser</p>
                <p class="with_tab">•   Supermärkte</p>
                <p class="with_tab">•   Parkhäuser</p>
                <p class="with_tab">•   Industrie</p>
                <p class="with_tab">•   Wohnungsbaugesellschaften</p>

                <p class="in_middle">
                    Wir sind.. freundlich, flexibel, zuverlässig und hilfsbereit.
                </p>
                <h4  class="in_middle">
                    Wir geben unser „Bestes“ um Kundenwünsche zu erfüllen!
                </h4>
                <p class="in_middle">
                    BEI INTERESSE BITTEN WIR SIE UNS PER E-MAIL ZUVERSTÄNDIGEN !
                </p>
                <p class="in_middle">
                    Weitere Fragen beantworten wir Ihnen gerne!!
                </p>
                <br><br><br>
            </div>
        </div>
        
        <script type="text/javascript">
            document.getElementById("about_body").onload = function() {otherLoad()};
        </script>
    </body>
</html>
