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
        <title>DATENSCHUTZ- UND COOKIEERKLÄRUNG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/data_protection.css" type="text/css" />
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

        <div id="data_wrapper">
            <h1>DATENSCHUTZ- UND COOKIEERKLÄRUNG</h1>

            <h2>1.EINLEITUNG</h2>
            <p>
                Der Schutz Ihrer persönlichen Daten ist uns, A - Group Handels KG, Sankt Peter Straße 5,                9020 Klagenfurt am Wörthersee, Tel: 0463 329982, Fax: 0463 329982-4, E-Mail: office@a-group.at,          ein besonderes Anliegen. Wir verarbeiten Ihre personenbezogenen Daten daher ausschließlich auf Grundlage der gesetzlichen Bestimmungen, insbesondere der Datenschutzgrundverordnung („DSGVO“), des anwendbaren Datenschutzgesetzes 2018 („DSG“) und des Telekommunikationsgesetzes („TKG“). Im Folgenden erfahren Sie welche Informationen wir erheben, verarbeiten und nutzen, wenn Sie unsere Website www.a-group.at („Website“) besuchen und nutzen.

                <br>

                Gegebenenfalls müssen wir diese Datenschutz- und Cookiebestimmungen im Zuge der Weiterentwicklung des Internets von Zeit zu Zeit aktualisieren. Wir empfehlen Ihnen daher, diese Seite in regelmäßigen Abständen zu überprüfen, um sicherzustellen, dass Sie die aktuellste Version gelesen haben.
            </p>

            <h2>
                2. WAS SIND PERSONENBEZOGENE DATEN?
            </h2>
            <p>
                Personenbezogene Daten sind Informationen über Betroffene, deren Identität bestimmt oder zumindest bestimmbar ist. Darunter fallen etwa Ihr Name, Ihre E-Mail-Adresse, sowie Ihre IP Adresse.
            </p>

            <h2>3. WELCHE PERSONENBEZOGENEN DATEN ERFASSEN WIR VON IHNEN UND WIE LANGE SPEICHERN WIR SIE?</h2>

            <h3>3.1.KONTAKTAUFNAHME</h3>
            <p>
                Wenn Sie per E-Mail, Telefon, Fax, postalisch oder über unser Kontaktformular mit uns Kontakt aufnehmen, werden Ihre angegebenen personenbezogenen Daten (E-Mail, Anrede, Name, Title, Firma, Telefon, angefragten Leistungsbereiche) und der Inhalt Ihrer Anfrage zwecks Bearbeitung dieser und für den Fall von Anschlussfragen 36 Monate bei uns gespeichert (vorvertragliche Maßnahmen bzw. berechtigte Interessen). Diese Daten geben wir an unsere Konzerngesellschaften nur für die Bearbeitung der Anfrage weiter, sofern dies anhand Ihrer Anfrage zu deren Beantwortung erforderlich ist. Selbstverständlich übermitteln wir Ihre Anfrage nicht ohne Ihre Einwilligung an Dritte.
                <br>
                Wir speichern diese Daten nur für die Dauer der Erfüllung (vor-)vertraglicher Pflichten und anschließend, solange Rechtsansprüche gegen uns (drei Jahre oder dreißig Jahre) geltend gemacht werden können bzw uns gesetzliche Aufbewahrungspflichten (steuerrechtliche oder buchhalterische) treffen.

            </p>

            <h3>3.2.BESTELLUNGEN UND BUCHUNGEN</h3>
            <p>
                Zum Zweck der Vertragsabwicklung werden durch den Einsatz von Cookies die IP- Adresse, Name, Anrede, Anschrift, Telefonnummer, E-Mail-Adresse, Bank- und Kreditkartendaten und die ausgewählten Serviceleistungen bzw Waren des Bestellers gespeichert. Die von Ihnen bereit gestellten Daten sind zur Vertragserfüllung bzw. zur Durchführung vorvertraglicher Maßnahmen erforderlich. Ohne diese Daten können wir den Vertrag mit Ihnen nicht abschließen. Eine Datenübermittlung an Dritte erfolgt nicht, mit Ausnahme der Übermittlung der Anschrift an das von uns beauftragte Versandunternehmen zur Zustellung der Ware sowie an unseren Steuerberater zur Erfüllung unserer steuerrechtlichen Verpflichtungen.
                
                <br>

                Nach Abbruch des Einkaufsvorganges werden die bei uns gespeicherten Daten gelöscht. Im Falle eines Vertragsabschlusses werden Name, Anschrift, Telefonnummer und E-Mail-Adresse sowie sämtliche Daten aus dem Vertragsverhältnis bis zum Ablauf der unternehmens- und steuerrechtlichen Aufbewahrungsfrist (für 7 Jahre) gespeichert. Der Name, die Anschrift, die gekaufte Waren und das Kaufdatum werden darüber hinaus bis zum Ablauf der Produkthaftung (10 Jahre) gespeichert.

            </p>

            <h3>3.3.KOMMENTARE UND BEITRÄGE</h3>
            <p>Nutzer haben die Möglichkeit auf unserer Website Bewertungen zu unseren Blogbeiträgen zu hinterlassen, indem Sie sich über Disqus, Facebook, Twitter oder Google anmelden. Dabei verarbeiten wir nur den angezeigten Nicknamen, Ihren Kommentar sowie gegebenenfalls das Foto des jeweiligen Nutzerprofils und Ihre Empfehlung (durch Klick auf das Herz-Symbol), nicht jedoch weitere Profildetails der diversen sozialen Netzwerke. Für die Anmeldung zu diesen Profilen sind die eigenen Datenschutzhinweise dieser Anbieter zu berücksichtigen.
            
            <br>

            Sie räumen uns hiermit zudem das jederzeit widerrufbare, nicht-ausschließliche, unentgeltliche, zeitlich unbegrenzte Recht zur Nutzung Ihres Nicknamens, des Kommentars sowie Ihres Fotos und Ihrer Empfehlung weltweit auf unseren Websiten sowie unseren Social-Media-Auftritten auf Facebook und YouTube zu veröffentlichen, dies jedoch nur solange, als Sie die Inhalte löschen bzw das Löschen Ihrer Bewertung begehren. Ein Löschen der Inhalte ist jederzeit durch eine Mitteilung an uns unter den unten genannten Kontaktdaten möglich.
            
            <br>

            Daher speichern wir Ihre Kommentare jedenfalls bis auf Widerruf Ihrer Nutzungseinräumung, Löschung des Kommentars bzw Löschen des Blog-Beitrages durch uns.
</p>

            <h3>3.4.WERBLICHE KONTAKTAUFNAHME</h3>
            <p>
                Mit Ihrer erteilten Einwilligung zur werblichen Kontaktaufnahme durch uns, werden wir Ihre E-Mail-Adresse, Ihren Namen und Ihre Telefonnummer für die Zusendung von Direktmarketingmaterialien per E-Mail, Post und Telefon gemäß § 107 TKG im jeweils zugestimmten Umfang verarbeiten. Nähere Details zur Verarbeitung Ihrer personenbezogenen Daten für Marketingzwecke finden Sie in den gesonderten Datenschutzbedingungen.
                
                <br>

                Sie können Ihre Einwilligung zur werblichen Kontaktaufnahme jederzeit, ohne Angabe von Gründen für alle Zwecke und mit Wirkung für die Zukunft (z.B. über einen Link am Ende jeden Newsletters) widerrufen. Wir speichern die personenbezogenen Daten aufgrund der unternehmens- und steuerrechtlichen Aufbewahrungspflichten maximal sieben Jahre nach Vertragserfüllung. Sofern Sie sich nur für die beschriebenen Marketingzwecke angemeldet haben und kein Kunde von A - Group sind, werden Ihre Daten bis zum Widerruf Ihrer Einwilligung gespeichert.

                <br>

                Wenn Sie unsere Newsletter an Dritte weiterleiten, sind Sie verpflichtet, die rechtlichen Bestimmungen einzuhalten und sich die Vorabzustimmung des Empfängers einzuholen. Sofern ein Dritter wegen Weiterleitungen eines Newsletters durch Sie Ansprüche gegen uns erhebt, werden Sie uns hinsichtlich aller damit zusammenhängenden Ansprüche einschließlich Strafen und Kosten der Rechtsverteidigung schad- und klaglos halten.

            </p>

            <h3>3.5.ÜBERMITTLUNG AN DRITTE</h3>
            <p>
                Wir übermitteln Ihre personenbezogenen Daten im erforderlichen Ausmaß auch an externe Erfüllungsgehilfen oder Dienstleister: <br><br>

                an IT-Dienstleister und/oder Anbieter von Datenhosting oder Datenverarbeitung oder ähnlichen Diensten;
                an sonstige Dienstleister, Anbieter von Tools und Softwarelösungen, die uns ebenfalls bei der Erbringung unserer Leistungen unterstützen und in unserem Auftrag tätig werden (inkl Anbieter von Marketingtools, Marketingagenturen, Kommunikationsdienstleister und Callcenter);
                <br>
                an unsere Konzerngesellschaften zur Vertragserfüllung und Erfüllung gesetzlicher Verpflichtungen; <br>
                an etwaige Dritte, die an der Erfüllung unserer Verpflichtungen Ihnen gegenüber mitwirken (etwa Paketdienstleister bei der Zustellung Ihrer Webshop-Bestellung an Sie, Zahlungsdienstleister bei der Zahlungsabwicklung im Webshop, Banken zur Zahlungsabwicklung); <br>
                an sonstige externe Dritte im erforderlichen Ausmaß (zB Wirtschaftsprüfer, Versicherungen im Versicherungsfall, Rechtsvertreter im Anlassfall, etc); <br>
                an Behörden und sonstige öffentliche Stellen im gesetzlich verpflichtenden Ausmaß (zB Finanzbehörden, etc).
            </p>

            <h2>4.COOKIES</h2>
            <p>
                Unsere Website verwendet sogenannte Cookies, soweit dies technisch für die Nutzung der Website zwingend erforderlich ist oder Sie hierzu Ihre Einwilligung erklärt haben. Cookies sind kleine Textdateien, die mit Hilfe des Browsers auf Ihrem Endgerät abgelegt werden.
                <br>
                Wir nutzen Cookies dazu, die Website sowie unser Angebot nutzerfreundlich zu gestalten. Einige Cookies bleiben auf Ihrem Endgerät gespeichert, bis Sie diese löschen. Sie ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen. 
                <br>
                Wenn Sie dies nicht wünschen, so können Sie Ihren Browser so einrichten, dass er Sie über das Setzen von Cookies informiert und Sie dies nur im Einzelfall erlauben. Bei der Deaktivierung von Cookies kann die Funktionalität unserer Website eingeschränkt sein.
            </p>

            <h3>4.1.GOOGLE ANALYTICS</h3>
            <p>
                Unsere Website verwendet Funktionen des Webanalysedienstes Google Analytics der Google Inc. („Google“). Dieses Analysetool verwendet Cookies, um Standard-Protokollierungsinformationen sowie das Besucherverhalten unserer Website in aggregierter Form zu erfassen. Die durch die Google Analytics Cookies erfassten Informationen über Ihre Benutzung dieser Website werden an Server von Google (in der Regel in den USA oder in anderen Staaten außerhalb der EU) übertragen und dort gespeichert.
                <br><br>

                Die folgenden Informationen werden von Google Analytics gesammelt: IP-Adresse in anonymisierter Form, Browser, Gerätetyp, Gerätemodell, Land, Service-Provider, Bildschirmauflösung (auf mobilem Gerät), Verweildauer auf der Website, Sprache, Betriebssystem, besuchte Seiten auf der Website. Google wird diese Informationen insbesondere benutzen, um die Nutzung der Website durch die Nutzer auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben ist oder Dritte diese Daten im Auftrag von Google verarbeiten. Da uns die Privatsphäre unserer Nutzer wichtig ist, werden die IP-Adressen anonymisiert.
                <br><br>

                Falls Sie nicht wollen, dass unsere Website Ihre Aktivitäten über Google Analytics aufzeichnet, können Sie sich unter http://tools.google.com/dlpage/gaoptout ein entsprechendes Browser-Plugin herunterladen und installieren. <br>
                Die Nutzerdaten werden zeitlich unbegrenzt gespeichert bzw bis Sie das Löschen Ihrer Daten begehren. Google wird die Daten daraufhin so schnell wie möglich, in jedem Fall innerhalb von 50 Monaten, löschen.

            </p>
            <h3>4.2.GOOGLE REMARKETING</h3>
            <p>
                Diese Website verwendet Google Remarketing, ein Werbemittel, das von Google Inc. („Google“) angeboten wird. Durch den kombinierten Einsatz von Erstanbieter-Cookies (zB Google Analytics-Cookies) und Drittanbieter-Cookies (zB DoubleClick-Cookies) können Ihnen auf der Grundlage Ihrer früheren Besuche dieser Website Anzeigen unterbreitet sowie optimiert und ausgewertet werden. Mithilfe von Remarketing werden Informationen über Ihr Surfverhalten zu Marketingzwecken in anonymisierter Form gesammelt und mithilfe von Cookies auf Ihrem Computer gespeichert (Targeting/Retargeting). Anhand eines Algorithmus können wir Ihnen anschließend gezielte Produktempfehlungen als personalisierte Werbebanner auf anderen Webseiten (sog Publishern) angezeigt werden.
                <br>
                Die Anzeige von angepassten Anzeigen im Google Display-Netzwerk können Sie über den Anzeigenvorgaben-Manager (<a href="https://support.google.com/ads/answer/2662922?hl=de">link</a>) deaktivieren oder das Browser-Add-on zur Deaktivierung von Google Analytics installieren
            </p>
            <h3>4.3. FACEBOOK WEBSITE CUSTOM AUDIENCES</h3>
            <p>
                Diese Website verwendet „Website Custom Audiences“ Pixel des sozialen Netzwerks Facebook, 1601 South California Avenue, Palo Alto, CA 94304, USA. <br>

                Wenn Sie unsere Seiten besuchen, wird über diesen Zählpixel eine direkte Verbindung zwischen Ihrem Browser und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse diese Website besucht haben. Dadurch kann Facebook den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Die so erhaltenen Informationen können für die Anzeige von Facebook Ads genutzt werden. Wir weisen darauf hin, dass wir als Anbieter der Website keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Facebook erhalten. <br>
                Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Facebook unter https://www.facebook.com/about/privacy/. Falls Sie keine Datenerfassung via Custom Audience wünschen, können Sie Custom Audiences hier deaktivieren.

            </p>
            <h3>4.4.SOCIAL PLUGINS</h3>
            <p>
                Unsere Website verwendet folgende Social Plugins („Plugins“) diverser sozialer Netzwerke. Bei Interaktion mit dem Social Plugins verarbeiten ausschließlich die sozialen Netzwerke gegebenenfalls personenbezogene Daten wie folgt. Wir erhalten dabei in keinem Fall Kenntnis von etwaigen personenbezogenen Daten (zB IP-Adresse):
            </p>
            <h4>4.4.1.Nutzung von Facebook-Plugins </h4>
            <p>
                Auf unserer Website sind Plugins des sozialen Netzwerks Facebook, 1601 South California Avenue, Palo Alto, CA 94304, USA integriert. Die Facebook-Plugins erkennen Sie an dem Facebook-Logo (weißes „f“ auf grauer Kachel) oder den Begriffen „Like“, „Gefällt mir“ oder „Daumen-hoch“-Zeichen auf unserer Website. Eine Übersicht über die Facebook-Plugins finden Sie hier: <a href="https://developers.facebook.com/docs/plugins">link</a>. <br>
                Wenn Sie unsere Website besuchen, wird über das Plugin eine direkte Verbindung zwischen Ihrem Browser und dem Facebook-Server hergestellt. Facebook erhält dadurch die Information, dass Sie mit Ihrer IP-Adresse unsere Websites besucht haben. Wenn Sie den Facebook-Button anklicken während Sie in Ihrem Facebook-Account eingeloggt sind, können Sie die Inhalte unserer Websites auf Ihrem Facebook-Profil verlinken. Dadurch kann Facebook den Besuch unserer Websites Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir keine Kenntnis vom Inhalt der übermittelten Daten sowie deren Nutzung durch Facebook erhalten. Weitere Informationen hierzu finden Sie in der Datenschutzerklärung von Facebook unter <a href="https://www.facebook.com/policy.php">link</a>.

            </p>
            <h4>4.4.2.Nutzung von YouTube </h4>
            <p>
                Wir haben auch YouTube-Videos auf unserer Website eingebunden, die auf www.youtube.com gespeichert und von unserer Website direkt abspielbar sind. Diese sind derart eingebunden, dass keine personenbezogenen Daten über Sie als Nutzer an YouTube übertragen, wenn Sie die Videos nicht abspielen. Außerdem sind auch YouTube-Plugins auf der Website implementiert, die nur bei Betätigen des Buttons mit dem Server von YouTube interagieren. 
                <br>
                Wenn Sie die Videos abspielen oder auf den YouTube-Button klicken, werden auf Ihrem Rechner YouTube-Cookies gespeichert und Daten an Google, Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA, als YouTube-Betreiber übertragen. Beim Abspielen von bei YouTube gespeicherten Videos oder Klick auf den Follow-Button werden folgende personenbezogenen Daten an Google, Inc. übertragen: IP-Adresse und Cookie-ID, die spezifische Adresse der auf unseren Websites aufgerufenen Seite, Spracheinstellung des Browsers, Systemdatum und Zeit des Aufrufs sowie Kennung Ihres Browsers. Die Datenübermittlung erfolgt unabhängig davon, ob Sie bei Google registriert und eingeloggt sind. Wenn Sie eingeloggt sind, werden diese Daten direkt Ihrem Konto zugeordnet.
                <br>
                Wenn Sie die Zuordnung zu Ihrem Profil nicht wünschen, müssen Sie sich vor Aktivierung des Buttons ausloggen. YouTube bzw. Google, Inc. speichert diese Daten als Nutzungsprofile und nutzt diese für Zwecke der Werbung, Marktforschung und/oder bedarfsgerechten Gestaltung seiner Websites. Eine solche Auswertung erfolgt insbesondere (auch für nicht eingeloggte Nutzer) zur Erbringung von bedarfsgerechter Werbung und um andere Nutzer über Ihre Aktivitäten auf unserer Website zu informieren. Ihnen steht ein Widerspruchsrecht gegen die Bildung dieser Nutzerprofile zu, wobei Sie sich zur Ausübung dessen an Google Inc. als Betreiber von YouTube richten müssen. Weitere Informationen zu Zweck und Umfang der Datenerhebung und ihrer Verarbeitung durch Google, Inc. erhalten Sie auf http://www.google.at/intl/de/policies/privacy/. Eine Verarbeitung der erhobenen personenbezogenen Daten bei Abruf des YouTube-Videos durch uns findet nicht statt.

            </p>

            <h2>5.DATENSICHERHEIT</h2>
            <p>
                Wir treffen angemessene technische und organisatorische Sicherheitsmaßnahmen zum Schutz Ihrer personenbezogenen Daten vor unbeabsichtigter oder unberechtigter Löschung, Veränderung oder gegen Verlust, Diebstahl und unberechtigte Einsicht, Weitergabe, Reproduktion, Nutzung, Änderung oder Zugriff. Darüber hinaus sind wir und unsere Mitarbeiter zur Einhaltung des Datengeheimnisses und zur Verschwiegenheit verpflichtet. Ebenso werden unsere Erfüllungsgehilfen und Beauftragten, die zur Erfüllung Ihrer beruflichen Aufgaben Zugang zu Ihren personenbezogenen Daten haben müssen, Zugriff erhalten und sich denselben Verpflichtungen zur Einhaltung des Datengeheimnisses und zur Verschwiegenheit unterwerfen.
            </p>

            <h2>6.IHRE BETROFFENENRECHTE</h2>
            <p>
                Sie können jederzeit Auskunft über die zu Ihrer Person gespeicherten Daten verlangen. Darüber hinaus können Sie unter bestimmten Voraussetzungen die Berichtigung oder die Löschung Ihrer Daten verlangen. Ihnen kann weiterhin ein Recht auf Einschränkung der Verarbeitung Ihrer Daten sowie ein Recht auf Herausgabe der von Ihnen bereitgestellten Daten in einem strukturierten, gängigen und maschinenlesbaren Format zustehen.

                <br><br>
                Weiters haben Sie ein Recht auf Widerspruch der Datenverarbeitungen, wenn die Verarbeitung Zwecken des Direktmarketings dient. Soweit wir Ihre Daten zu berechtigten Zwecken verarbeiten werden, haben Sie zusätzlich das Recht jederzeit zu widersprechen, wenn sich aus Ihrer besonderen Situation Gründe dafür ergeben.
                <br>
                Sie haben die Möglichkeit, sich mit einer Beschwerde an eine Datenschutzaufsichtsbehörde zu wenden. Die für uns zuständige Datenschutzaufsichtsbehörde ist: Österreichische Datenschutzbehörde, Wickenburggasse 8, 1080 Wien.
                <br><br>
                Bei Fragen können Sie sich auch an A - Group wenden: <br>
                A - Group Handels KG <br>
                Sankt Peter Straße 5, 9020 Klagenfurt am Wörthersee <br>
                E-Mail: office@a-group.at <br>
                Telefonnummer: 0463 329982 <br> <br>
                Damit wir Ihre Anfrage zu Ihren oben genannten Rechten bearbeiten können und um sicherzustellen, dass personenbezogene Daten nicht an unberechtigte Dritte herausgegeben werden, richten Sie bitte die Anfrage unter eindeutiger Identifizierung Ihrer Person sowie mit kurzer Beschreibung über den Umfang der Ausübung Ihrer oben aufgelisteten Betroffenenrechte.<br><br>
                Stand: Mai2018 <br><br>
            </p>

            <h3>DATENSCHUTZHINWEISE FÜR MARKETINGZWECKE</h3>
            <p>
                A - Group Handels KG, St. Peter Straße 5, 9020 Klagenfurt am Wörthersee, <br>                                                
                E-Mail: office@a-group.at, Telefonnummer: +43 463 329982 („A-group“) ist es ein wichtiges Anliegen, Ihre personenbezogenen Daten ausreichend zu schützen. Wir beachten deshalb die anwendbaren Rechtsvorschriften, insbesondere die Datenschutzgrundverordnung („DSGVO“) und das Datenschutz-Anpassungsgesetz („DSG“), zum Schutz, rechtmäßigen Umgang und Geheimhaltung personenbezogener Daten sowie zur Datensicherheit. Im Folgenden erfahren Sie mehr über die Datenverarbeitung für Marketingzwecke im Sinne des § 107 TKG:
                <br><br>
                Sofern Sie uns Ihre ausdrückliche und freiwillige Einwilligung nach Art 6 Abs 1 lit a DSGVO zur Datenverarbeitung für näher erläuternden Werbezwecke erteilt haben (zB durch Ankreuzen des Häkchens und Unterzeichnung der Einwilligungserklärung bei Verwendung von Formblättern oder Klick auf den Button „Absenden“ bei elektronischer Einwilligung), verarbeiten wir Ihre personenbezogenen Daten wie folgt: <br><br>
            </p>
            <h4>1. WELCHE PERSONENBEZOGENEN DATEN VERARBEITEN WIR?</h4>
            <p>
                Zur werblichen Kontaktaufnahme verarbeiten wir den Namen, die Adresse, die Telefonnummer sowie die E-Mail-Adresse.
            </p>
            <h4>2. FÜR WELCHE WERBEZWECKE VERARBEITEN WIR IHRE PERSONENBEZOGENEN DATEN?</h4>
            <p>
                Mit Ihrer Einwilligung verarbeiten wir Ihre freiwillig zur Verfügung gestellten personenbezogenen Daten zu Zwecken von
                <br><br>
                Zufriedenheitsumfragen zu Service und Beratung <br>
                Bedarfsanalysen <br>
                Veranstaltungseinladungen, Gutscheinen und Rabattaktionen <br>
                Kontaktaufnahmen sowie Zusendung von Marketing- und Produktinformationen in Zusammenhang mit Waren und Dienstleistungen aus dem (neuen) Sortiment der A - Group <br>
                Kontaktaufnahme im Zusammenhang mit regionalen Bräuchen und Traditionen, wie Versendung von Weihnachts- oder Glückwunschkarten
                per E-Mail, Post und Telefon.
                <br><br>
                Ihre personenbezogenen Daten werden jedoch keinesfalls an unsere verbundenen Unternehmen oder anderen Dritten zu Werbezwecken übermittelt.
                <br><br>
                Die Einwilligung können Sie jederzeit mit Wirkung für die Zukunft für alle Zwecke durch Kontaktaufnahme mit A - Group  widerrufen.

            </p>
            <h4>3. WIE LANGE SPEICHERN WIR IHRE PERSONENBEZOGENEN DATEN?</h4>
            <p>
                Wir speichern die personenbezogenen Daten aufgrund der unternehmens- und steuerrechtlichen Aufbewahrungspflichten maximal sieben Jahre nach Vertragserfüllung. Sofern Sie sich nur für die beschriebenen Marketingzwecke angemeldet haben und kein Kunde von A - Group sind, werden Ihre Daten bis zum Widerruf Ihrer Einwilligung gespeichert.
            </p>
            <h4>4. WIE WERDEN IHRE DATEN GESCHÜTZT?</h4>
            <p>
                Wir treffen angemessene technische und organisatorische Sicherheitsmaßnahmen im Sinne des Art 5 Abs 1 lit f bzw Art 32 DSGVO, um Ihre personenbezogenen Daten gegen unbeabsichtigte oder unrechtmäßige Löschung, Veränderung, Schädigung oder gegen Verlust und gegen unberechtigte Weitergabe oder unberechtigten Zugriff zu schützen. Darüber hinaus sind wir und unsere Mitarbeiter zur Einhaltung des Datengeheimnisses verpflichtet.
            </p>
            <h4>5. WELCHE RECHTEN HABEN SIE ALS BETROFFENER?</h4>
            <p>
                Sie können jederzeit Auskunft über die zu Ihrer Person gespeicherten Daten verlangen. Darüber hinaus können Sie unter bestimmten Voraussetzungen die Berichtigung oder die Löschung Ihrer Daten verlangen. Ihnen kann weiterhin ein Recht auf Einschränkung der Verarbeitung Ihrer Daten sowie ein Recht auf Herausgabe der von Ihnen bereitgestellten Daten in einem strukturierten, gängigen und maschinenlesbaren Format zustehen.
                <br><br>
 

                Weiters haben Sie ein Recht auf Widerspruch der Datenverarbeitungen, wenn die Verarbeitung Zwecken des Direktmarketings dient. Soweit wir Ihre Daten zu berechtigten Zwecken verarbeiten werden, haben Sie zusätzlich das Recht jederzeit zu widersprechen, wenn sich aus Ihrer besonderen Situation Gründe dafür ergeben.
                <br><br>
 

                Sie haben die Möglichkeit, sich mit einer Beschwerde an eine Datenschutzaufsichtsbehörde zu wenden. Die für uns zuständige Datenschutzaufsichtsbehörde ist: Österreichische Datenschutzbehörde, Wickenburggasse 8, 1080 Wien.
                <br><br>
 

                Bei Fragen können Sie sich auch an A - Group wenden:
                <br><br>
                A - Group Handels KG <br>
                Sankt Peter Straße 5, 9020 Klagenfurt am Wörthersee <br>
                E-Mail: office@a-group.at <br>
                Telefonnummer: 0463 329982 <br><br><br><br><br>

            </p>
        </div>
        
        <script type="text/javascript">
            document.getElementById("about_body").onload = function() {otherLoad()};
        </script>
    </body>
</html>
