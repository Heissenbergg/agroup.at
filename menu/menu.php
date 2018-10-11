<div id="top_menu">
    <div class="top_menu_link" id="top_home">
        <a class="top_menu_a_link" href="index.php">Starteseite</a>
    </div>
    <div class="top_menu_link" id="top_products" onmouseover="get_top_products();" onmouseleave="hide_top_products();">
        <a class="top_menu_a_link" href="#">Produkte</a>
    </div>
    <div id="top_all_products"  onmouseover="get_top_products();"  onmouseleave="hide_top_products();">
        <!--<div class="product_link">
            <a href="products.php">Our products</a>
        </div> -->
        <?php 
            $categories = new DB();
            $catQuery = $categories->query("article_categories");
            while ($cat = $catQuery -> fetch()) {
                ?>
                <div class="product_link">
                    <a href="cleaning.php?category=<?php echo $cat['id'];?>">
                        <?php echo $cat['title']; ?>
                    </a>
                </div>
                <?php
            }
            ?>
    </div>
    <div class="top_menu_link" id="top_catalog">
        <a class="top_menu_a_link" href="service.php">Dienstleistungen</a>
    </div>
    <div class="top_menu_link" id="top_news">
        <a class="top_menu_a_link" href="news.php">Nachrichten</a>
    </div>
    <div class="top_menu_link" id="top_about" onmouseover="get_uber_uns();"  onmouseleave="hide_uber_uns();">
        <a class="top_menu_a_link" href="#">Über uns</a> 
    </div>
    <div id="top_uber_uns"  onmouseover="get_uber_uns();"  onmouseleave="hide_uber_uns();">
        <div class="product_link">
            <a href="about_service.php">Dienstleistungen</a>
        </div>
        <div class="product_link">
            <a href="handel.php">Handel</a>
        </div>
        <div class="product_link">
            <a href="team.php">Team</a>
        </div>
    </div>
    <div class="top_menu_link" id="top_contact">
        <a class="top_menu_a_link" href="contact.php">Kontakte</a>
    </div>

    <div id="contact_us_part">
        <a href="contact.php">KONTAKTE</a>
    </div>

    <div id="menu_icon" onclick="showLeftMenu();">
        <div id="menu_icon_top_left" class="menu_icon_line"></div>
        <div id="menu_icon_top_right" class="menu_icon_line"></div>
        <div id="menu_icon_bottom_left" class="menu_icon_line"></div>
        <div id="menu_icon_bottom_rigth" class="menu_icon_line"></div>
    </div>
</div>


<div id="left_menu">
    <div id="left_menu_header">
        <h4>a-group.at</h4>
        <i onclick="hideLeftMenu();" class="fa fa-times" title="Close this menu"></i>
    </div>
    <div id="left_menu_body">
        <div class="left_menu_links" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/home.png">
            <a href="index.php"> Starteseite </a>
        </div>
        <div class="left_menu_links" onclick="show_current_submenu(0, 1);" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/products.png">
            <a> Produkte </a>
        </div>
        <!-- All products submenu -->
        <div class="left_menu_submenu">
            <!-- <div class="left_menu_submenu_link">
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <a href="products.php">Our products</a>
            </div> -->
            <?php 
            $categories = new DB();
            $catQuery = $categories->query("article_categories");
            while ($cat = $catQuery -> fetch()) {
                ?>
                <div class="left_menu_submenu_link">
                    <!-- fancy circles -->
                    <div class="left_menu_submenu_circle">
                        <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                    </div>
                    <!-- link -->
                    <a href="cleaning.php?category=<?php echo $cat['id'];?>">
                        <?php echo $cat['title']; ?>
                    </a>
                </div>
                <?php
            }
            ?>
        </div> 

        <div class="left_menu_links" onclick="show_current_submenu(1, 2);" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/catalog.png">
            <a> Katalog </a>
        </div>
        <!-- Catalog submenu -->
        <div class="left_menu_submenu">
            <?php 
            $catalogDB = new DB();
            $catalogQuery = $db-> query("catalog");
            while($catalog = $catalogQuery -> fetch()){
                ?>
                <div class="left_menu_submenu_link">
                    <!-- fancy circles -->
                    <div class="left_menu_submenu_circle">
                        <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                    </div>
                    <!-- link -->
                    <a target="_blank" href="pdfs/<?php echo $catalog['hash']; ?>"><?php echo $catalog['title']; ?></a>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="left_menu_links" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/businesswoman.png">
            <a href="service.php"> Dienstleistungen </a>
        </div>

        <div class="left_menu_links" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/news.png">
            <a href="news.php"> Nachrichten </a>
        </div>
        <div class="left_menu_links" onclick="show_current_submenu(2, 5);" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/about.png">
            <a> Über uns </a>
        </div>
        <div class="left_menu_submenu">
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="about_service.php"> Service/ Dienstleistungen </a>
            </div>

            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="handel.php"> Handel </a>
            </div>

            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="team.php"> Team </a>
            </div>
        </div>


        <div class="left_menu_links" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/contact.png">
            <a href="contact.php"> Kontakte </a>
        </div>
        <div class="left_menu_links" onclick="show_current_submenu(3, 7);" onmouseover="showNameOfLink(this);">
            <img class="links_icons" src="menu/icons/text.png">
            <a> AGB </a>
        </div>
        <div class="left_menu_submenu">
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a target="_blank" href="pdfs/reinung.pdf"> AGB für Reinigungs Pflegemittel & Zubehör </a>
            </div>

            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a target="_blank" href="pdfs/Winterdienst.pdf"> AGB Winterdienst A-GROUP </a>
            </div>
        </div>
    </div> 
</div>
<div id="left_menu_shadow" onclick="hideLeftMenu();">
    <h4 id="linkAtribute">Willkommen zu a-group.at</h4>
</div>
