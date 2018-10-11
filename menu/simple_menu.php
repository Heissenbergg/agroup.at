<div id="top_menu">
    <div id="contact_us_part">
        <a href="#">CONTACT US</a>
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
            <img src="menu/icons/home.png">
            <a href=""> Home </a>
        </div>
        <div class="left_menu_links" onclick="show_current_submenu(0, 1);" onmouseover="showNameOfLink(this);">
            <img src="menu/icons/products.png">
            <a> Products </a>
        </div>
        <!-- All products submenu -->
        <div class="left_menu_submenu">
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="">House fences</a>
            </div>
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="cleaning/">Cleaning agents</a>
            </div>
        </div>


        <div class="left_menu_links" onclick="show_current_submenu(1, 2);" onmouseover="showNameOfLink(this);">
            <img src="menu/icons/catalog.png">
            <a> Catalog </a>
        </div>
        <!-- Catalog submenu -->
        <div class="left_menu_submenu">
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="">Name of first catalog</a>
            </div>
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="">Name of second catalog</a>
            </div>
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="">Look at that, it's beautiful </a>
            </div>
            <div class="left_menu_submenu_link">
                <!-- fancy circles -->
                <div class="left_menu_submenu_circle">
                    <div class="top_line"></div> <div class="middle_circle"></div> <div class="bottom_line"></div>
                </div>
                <!-- link -->
                <a href="">Sometimes, i suprise myself </a>
            </div>
        </div>

        <div class="left_menu_links" onmouseover="showNameOfLink(this);">
            <img src="menu/icons/news.png">
            <a href=""> News </a>
        </div>
        <div class="left_menu_links" onmouseover="showNameOfLink(this);">
            <img src="menu/icons/about.png">
            <a href=""> About us </a>
        </div>
        <div class="left_menu_links" onmouseover="showNameOfLink(this);">
            <img src="menu/icons/contact.png">
            <a href=""> Contact us </a>
        </div>
    </div>
</div>
<div id="left_menu_shadow" onclick="hideLeftMenu();">
    <h4 id="linkAtribute">Welcome to a-group.at</h4>
</div>