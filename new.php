<?php require_once 'class/db.php'; ?>
<?php require_once 'functions/products.php'; ?>
<?php $value = get_news_details(Input::get('id')); ?>
<?php $db = new DB(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $value['title']; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="news/css/new_css.css">
        <link rel="stylesheet" type="text/css" href="news/css/news_css.css">
    
        <!-- loading gifs -->
        <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
        <script type="text/javascript" src="loading_bars/loading.js"></script>
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>

        <script type="text/javascript" src="menu/js/menu.js"></script>
        <script type="text/javascript" src="news/js/news.js"></script>
    </head>
    <body onload="otherLoad(); newLoad();">
        <?php require_once 'loading_bars/loading.php'; ?>
        
        <?php require_once 'menu/menu.php'; ?>
        <div id="news_icon_mobile" onclick="allNews();">
            <img src="menu/icons/news.png">
        </div>
        <div id="news_shadow"></div>
        <div id="all_news">
            <div id="all_news_header">
                <div id="all_news_well_header">
                    <h2><?php echo mb_strtoupper($value['title']); ?> </h2>
                </div>
                <div id="all_news_small_header">
                    <h2>ALLE NACHRICHTEN ANSEHEN</h2>
                </div>
            </div>
            <div id="all_news_huge">
                <div id="news_preview">
                    <div id="news_preview_image">
                        <?php
                        $images = getImages($value['image_hash']);
                        for($i=0; $i<count($images['title']); $i++){
        					echo '<img class="news_image" src="all_images/'.$images['title'][$i].'">';
        				}
                        ?>
                        <!--<img class="news_image" src="homepage/images/aa.png"> -->
                    </div>
                    <div id="new_preview_change">
                        <div class="image_arrows_part" title="Previous image" onclick="changeImage(0);">
                            <img src="products/images/back.png">
                        </div>
                        <div class="image_arrows_part image_arrows_part2">
                            <p>Vorschaubilder</p>
                        </div>
                        <div class="image_arrows_part" title="Next image" onclick="changeImage(1);">
                            <img src="products/images/next.png">
                        </div>
                    </div>
                    <div id="post_description">
                        <p>
                            <?php echo nl2br($value['details']); ?>
                        </p>
                    </div>
                    <div id="date_posted">
                        <div id="date_time">
                            <p><?php echo $value['date'].' at '.$value['time']; ?></p>
                        </div>
                        <div id="posted_by">
                            <p>Geschrieben von : <?php echo $value['posted']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="all_news_rightSide">
                <?php require_once 'news/all_news.php'; ?>
            </div>
        </div>
        <?php require_once 'footer/small_footer.php'; ?>
    </body>
</html>
