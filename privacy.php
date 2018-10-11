<?php require_once 'class/db.php'; ?>
<?php $db = new DB(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Datenschutz-Bestimmungen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/privacy.css">
        
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
        <div id="privacy_box">
            <div class="bigger_text">
                <h4>
                    Wenn Sie unsere Dienste nutzen, vertrauen Sie uns mit Ihren Informationen. Wir verstehen, dass dies eine große Verantwortung ist und arbeiten hart daran, Ihre Informationen zu schützen und Ihnen die Kontrolle zu geben.
                </h4>
            </div>
            <div class="smaller_text">
                <p>
                    Diese Datenschutzrichtlinie soll Ihnen helfen zu verstehen, welche Informationen wir sammeln, warum wir sie erfassen und wie Sie Ihre Informationen aktualisieren, verwalten, exportieren und löschen können.
                </p>
            </div>

            <div class="bigger_text">
                <h4>
                    Daten eingegeben
                </h4>
            </div>
            <div class="smaller_text">
                <p>
                    Upisivanje vašeg imena i broja telefona i / ili pošte na vaš poziv samo je potrebno za odgovor na vaša pitanja. Ne šalje se drugima, koristi se u reklamama itd. Vaši podaci su osigurani.
                </p>
            </div>

            <div class="bigger_text">
                <h4>
                    Kekse
                </h4>
            </div>
            <div class="smaller_text">
                <p>
                    Wir verwenden sie nicht, nur kurze Sitzung, die nach dem Schließen des Browsers brechen. Keine versteckten Daten verwendet.
                </p>
            </div>
            

            <div class="bigger_text">
                <h4>
                    GPS oder IP-Adresse
                </h4>
            </div>
            <div class="smaller_text">
                <p>
                    Da wir Ihre persönlichen Daten wie Adresse oder IP-Adresse nicht benötigen (nur wenn Sie ein System kaputt machen), besteht keine Notwendigkeit für eine versteckte Ortung und Verwendung Ihres Standortes. Sie sind anonym, bis Sie es nicht mehr wollen.
                </p>
            </div>
        </div>
    </body>
</html>
