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
        <title>ÜBER UNS</title>
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

        <div id="about_image">
            <?php
            for($i=0; $i<count($images['title']); $i++){
                ?>
                    <img class="product_image" onclick="set_huge('<?php echo $i; ?>');" src="all_images/<?php echo $images['title'][$i] ?>">
                <?php
            }
            ?>
        </div>

        <div id="about_text">
            <div id="about_text_header">
                <h1>
                    <?php echo $details['title']; ?>
                </h1>
            </div>
            <div id="about_text_body">
                <p>
                    <?php echo nl2br($details['details']); ?>
                </p>

                <div class="images">
                    <div class="images_team">
                        <h4>Unser Team</h4>
                    </div>
                    <div class="single_image">
                        <div class="single_image_img">
                            <img src="images/1.png">
                        </div>
                        <div class="single_image_text">
                            <p>Objektleiterin</p>
                        </div>
                    </div>
                    <div class="single_image single_image_middle">
                        <div class="single_image_img">
                            <img src="images/2.png">
                        </div>
                        <div class="single_image_text">
                            <p>DFG Meister</p>
                        </div>
                    </div>
                    <div class="single_image">
                        <div class="single_image_img">
                            <img src="images/3.png">
                        </div>
                        <div class="single_image_text">
                            <p>Vertrieb</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            document.getElementById("about_body").onload = function() {otherLoad()};
        </script>
    </body>
</html>
