<?php require_once 'class/db.php'; ?>
<?php $db = new DB(); ?>
<?php require_once 'admin/functions/about.php'; ?>
<?php require_once 'functions/products.php'; ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Handel</title>
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
                <h1>Handel</h1>
            </div>
            <div id="main_wrapper_body">
                <p>
                    A Group - Anbieter für Hygiene- und  Reinigungsprodukte  mit System <br> <br>
                    A - Group Hygiene System ist ein Familienunternehmen mit Standort in Klagenfurt am Wörthersee. Seit über 16 Jahren handeln wir europaweit mit Einwegartikeln, Hygieneprodukte und Arbeitsschutzprodukten.  <br>
                </p>
                <p class="with_tab">• Top-Marken: </p>
                <p>
                    <b>HYGOSTAR</b> (eine hochwertige, innovative Qualitätsmarke) <br>
                    <b>HYGONORM</b> (bewährte, zuverlässige Ware zum Discountpreis) <br>
                    <b>DEISS</b> (Marktführer bei Müllsäcken und - beuteln europaweit mit höchste Qualität)  <br>
                    <b>BINGOLD</b> ( für Hände mit Verantwortung, EINWEG- UND MEHRWEGHANDSCHUH – SORTIMENT)  <br>
                    <b>KATRIN  Eine verantwortungsvolle Forstindustriegruppe </b> <br>
                    Die Produkte und Lösungen unserer Marke Katrin werden von Metsä Tissue hergestellt - einem führenden europäischen Hersteller für Tissue-, Back- und Kochpapier. Egal ob Sie Endverbraucher oder professioneller Käufer sind, Metsä Tissue verbessert Ihre Gesundheit, Hygiene und Wohlbefinden zu Hause, bei der Arbeit oder in der Freizeit. Außer der Marke Katrin gehören Lambi, Mola, Serla, Tento und SAGA zu unseren Marken.
                </p>
                <p class="with_tab">•   innovatives und wachsendes Unternehmen</p>
                <p class="with_tab">•   jährliches Wachstum</p>
                <p class="with_tab">•   jährlich bis zu 10% neue Artikel im Sortiment</p>
                <p>
                    <b>Ziele:</b> Kontinuierlich besser werden, unser Produktsortiment erweitern, <br>
                    Arbeitsplätze in der Region schaffen. <br><br>

                    A - Group Hygiene System legt großen Wert auf Nachhaltigkeit und Umweltschutz. <br><br>
                    Seit der Gründung des Unternehmens im Jahr 2002 stehen hochwertige und innovative Produkte zum Schutz des Menschen von Kopf bis Fuß und der Produktschutz im Mittelpunkt. <br>
                    Die Vertriebskompetenz basiert auf jahrzehntelanger Erfahrung. Unser Familienunternehmen steht für klare Werte und vertritt ein Leitbild, das das tägliche Handeln unserer Mitarbeiter auszeichnet. Das ist die Basis für den Erfolg der A - Group Hygiene System seit mehr als 15 Jahren. <br>
                    Die meisten Produkte werden weltweit eingekauft oder exklusiv für A - Group Hygiene System produziert. Als echtes Familienunternehmen achtet die Geschäftsführung vor allem auf Qualität und Vertrauen: <br><br>

                    "Wir kennen unsere Hersteller und Lieferanten und handeln nur mit Produkten, von denen wir wirklich überzeugt sind." <br><br>
                    Deshalb erhalten A - Group Kunden: <br><br>
                </p>
                <p class="with_tab">•   hochwertige Produkte </p>
                <p class="with_tab">•   super Preis-Leistungsverhältnis </p>
                <p class="with_tab">•   Verlässlichkeit, Kompetenz und Freundlichkeit </p>
                <p><b>alles aus EINER Hand.</b></p>
                <p>
                    Einem strikten Qualitätsanspruch verpflichtet, Hersteller und Lieferanten von A - Group Hygiene System über ein nach EN ISO 9001zertifiziertes Qualitätsmanagement zu verfügen. Dies ermöglicht die Sicherung einer konstant hohen Leistungsqualität und bietet ein Höchstmaß an Dokumentation und Rückverfolgbarkeit.
                </p>
                <p>
                    Kunden aus den unterschiedlichsten Branchen nutzen die umfassende A - Group Hygiene System Produkt- und Leistungspalette:
                </p>
                <p class="with_tab">•   Produktschutz (HACCP, IFS) </p>
                <p class="with_tab">•   Arbeitsschutz (PSA) </p>
                <p class="with_tab">•   Gesundheit & Sicherheit (Vorsorge, Notfall, Pandemie) </p>

                <p>Folgende Branchen vertrauen A - Group Hygiene System Produkten:</p>

                <p class="with_tab">•   Lebensmittelindustrie </p>
                <p class="with_tab">•   Gastronomie und Hotel </p>
                <p class="with_tab">•   Pflege und Krankenhaus </p>
                <p class="with_tab">•   Industrie und Handwerk </p>
                <p class="with_tab">•   Gebäudereiniger & Facility Management </p>

                <br><br><br>
            </div>
        </div>
        
        <script type="text/javascript">
            document.getElementById("about_body").onload = function() {otherLoad()};
        </script>
    </body>
</html>
