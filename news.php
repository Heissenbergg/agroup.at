<?php require_once 'class/db.php'; ?>
<?php require_once 'functions/products.php'; ?>
<?php $db = new DB(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nachrichten</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="footer/css/footer.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="news/css/news_css.css">

        <!-- loading gifs -->
        <link rel="stylesheet" href="loading_bars/loading.css" type="text/css" />
        <script type="text/javascript" src="loading_bars/loading.js"></script>
        
        <!-- Font awesome -->
        <script src="https://use.fontawesome.com/85a780918f.js"></script>

        <script type="text/javascript" src="menu/js/menu.js"></script>
        <script type="text/javascript" src="news/js/news.js"></script>
    </head>
    <body onload="otherLoad();">
        <?php require_once 'loading_bars/loading.php'; ?>
        
        <?php require_once 'menu/menu.php'; ?>
        <div id="news_icon_mobile" onclick="allNews();">
            <img src="menu/icons/news.png">
        </div>
        <div id="all_news">
            <div id="all_news_header">
                <div id="all_news_well_header">
                    <h2>Neueste Nachrichten</h2>
                </div>
                <div id="all_news_small_header">
                    <h2>ALLE NACHRICHTEN ANSEHEN</h2>
                </div>
            </div>
            <div id="all_news_huge">
                <div id="list_of_most_recent_news">
                    <?php
                    $hugeQuery = $db->DESCquery("news");
                    $i = 1;
                    while($news = $hugeQuery -> fetch()){
                        ?>
                        <a href="new.php?id=<?php echo $news['id']; ?>">
                            <div class="huge_single_new <?php if($i == 2)echo 'huge_single_new_middle'; else if($i > 3) echo "huge_single_new_small"; ?>">
                                <div class="huge_single_new_header">
                                    <h1> <?php echo mb_strtoupper($news['title']); ?> </h1>
                                </div>
                                <div class="huge_single_new_image">
                                    <img src="all_images/<?php echo single_image($news['image_hash']); ?>"></img>
                                </div>
                                <div class="huge_single_new_text">
                                    <p><?php echo $news['details']; ?></p>
                                </div>
                                <div class="huge_single_new_date">
                                    <p><?php echo $news['day'].'. '.$news['month'].' '.$news['year'].' '; ?></p>
                                </div>
                            </div>
                        </a>
                        <?php
                        if($i++ == 7) break;
                    }
                    ?>
                    <!--
                    <div class="huge_single_new huge_single_new_middle">
                        <div class="huge_single_new_header">
                            <h1>SECOND POST</h1>
                        </div>
                        <div class="huge_single_new_image">
                            <img src="homepage/images/background.jpg"></img>
                        </div>
                        <div class="huge_single_new_text">
                            <p>this is some custom text. It can be visible or not, we can make it better :D</p>
                        </div>
                        <div class="huge_single_new_date">
                            <p>24. Juni 2018</p>
                        </div>
                    </div>
                    <div class="huge_single_new">
                        <div class="huge_single_new_header">
                            <h1>WELL, THIRD POST</h1>
                        </div>
                        <div class="huge_single_new_image">
                            <img src="homepage/images/background.jpg"></img>
                        </div>
                        <div class="huge_single_new_text">
                            <p>this is some custom text. It can be visible or not, we can make it better :D</p>
                        </div>
                    </div>

                    <div class="huge_single_new huge_single_new_small">
                        <div class="huge_single_new_header">
                            <h1>THIS IS FIRST POST sad sad sad as dsa ds</h1>
                        </div>
                        <div class="huge_single_new_image">
                            <img src="homepage/images/background.jpg"></img>
                        </div>
                        <div class="huge_single_new_text">
                            <p>this is some custom text. It can be visible or not, we can make it better :D</p>
                        </div>
                        <div class="huge_single_new_date">
                            <p>24. Juni 2018</p>
                        </div>
                    </div>
                    <div class="huge_single_new huge_single_new_small">
                        <div class="huge_single_new_header">
                            <h1>THIS IS FIRST POST sad sad sad as dsa ds</h1>
                        </div>
                        <div class="huge_single_new_image">
                            <img src="homepage/images/background.jpg"></img>
                        </div>
                        <div class="huge_single_new_text">
                            <p>this is some custom text. It can be visible or not, we can make it better :D</p>
                        </div>
                        <div class="huge_single_new_date">
                            <p>24. Juni 2018</p>
                        </div>
                    </div>
                    <div class="huge_single_new huge_single_new_small">
                        <div class="huge_single_new_header">
                            <h1>THIS IS FIRST POST sad sad sad as dsa ds</h1>
                        </div>
                        <div class="huge_single_new_image">
                            <img src="homepage/images/background.jpg"></img>
                        </div>
                        <div class="huge_single_new_text">
                            <p>this is some custom text. It can be visible or not, we can make it better :D</p>
                        </div>
                        <div class="huge_single_new_date">
                            <p>24. Juni 2018</p>
                        </div>
                    </div>
                    <div class="huge_single_new huge_single_new_small">
                        <div class="huge_single_new_header">
                            <h1>THIS IS FIRST POST sad sad sad as dsa ds</h1>
                        </div>
                        <div class="huge_single_new_image">
                            <img src="homepage/images/background.jpg"></img>
                        </div>
                        <div class="huge_single_new_text">
                            <p>this is some custom text. It can be visible or not, we can make it better :D</p>
                        </div>
                        <div class="huge_single_new_date">
                            <p>24. Juni 2018</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div id="all_news_rightSide">
                <?php require_once 'news/all_news.php'; ?>
            </div>
        </div>
        <?php require_once 'footer/small_footer.php'; ?>
    </body>
</html>
