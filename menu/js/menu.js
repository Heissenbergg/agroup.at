var defaul_positions = new Array(), menuLinks, mainIndex = false;



//need this one caouse of loading images and gallery
function productsLoad(){
    menuLinks = document.getElementById("top_menu").getElementsByClassName("top_menu_link");
    getCoordinates(menuLinks, defaul_positions);
    setTheMenu();

    loadImages();
    close_loading();
}

window.onscroll = function(){
    setTheMenu();
}

function setTheMenu(){
    var scroll_position = document.documentElement.scrollTop || document.body.scrollTop;
    var window_w = window.innerWidth;
    if(!mainIndex) scroll_position = 300;

    var menu = document.getElementById("top_menu");
    var menu_icon = document.getElementById("menu_icon").getElementsByClassName("menu_icon_line");
    var contact_us_button = document.getElementById("contact_us_part");
    
    for(var i=0; i<menuLinks.length; i++){
        //Chanke text colors
        var singleLink = menuLinks[i].getElementsByClassName("top_menu_a_link");

        if (scroll_position || window_w <= 1000) {
            menu.style.height = "70px";
            menu.style.background ="#3A3A3A";

            if(i == 5){
                //menuLinks[i].style.left = (window.innerWidth - 160) + "px";
                //menuLinks[i].style.top = "12px";

                //show background of contact us button
                if(window_w > 1200){
                    contact_us_button.style.opacity = "1";
                    contact_us_button.style.transitionDelay = "0.5s";
                }else{
                    contact_us_button.style.opacity = "0";
                }
            }else{
                menuLinks[i].style.left = "20px";
                menuLinks[i].style.opacity = 0;
                menuLinks[i].style.top = "20px";
            }
            menuLinks[i].style.left = "-120px";
                menuLinks[i].style.opacity = 0;
                menuLinks[i].style.top = "20px";
            
            //singleLink[0].style.color = "#333";
            //fade out menu_icon
            if(i<4) menu_icon[i].style.opacity = 1;
        }else {
            menu.style.height = "180px";
            menu.style.background ="linear-gradient(to bottom, rgba(51, 51, 51, 4), rgba(0, 0, 0, 0))";

            menuLinks[i].style.left = defaul_positions[i] + 'px';
            menuLinks[i].style.opacity = 1;
            menuLinks[i].style.top = "80px";
            

            //hide  background of contact us button
            contact_us_button.style.opacity = "0";
            contact_us_button.style.transitionDelay = "0s";

            //singleLink[0].style.color = "#fff";
            //fade in menu_icon
            if(i<4) menu_icon[i].style.opacity = 0;
        }
    }
}


function getCoordinates(links, positions){
    for(var i=0; i<links.length; i++){
        positions[i] = links[i].offsetLeft;
    }
    console.log("weee");
}



//homepage onload
function setOnload(){
    menuLinks = document.getElementById("top_menu").getElementsByClassName("top_menu_link");
    getCoordinates(menuLinks, defaul_positions);
    
    //recognize the homepage
    mainIndex = true;
    setTheMenu();


    //Slider on home.php
    //set first image
    setFirst();
    //Keep rolling
    keepShowing();
}

//other pages onload
function otherLoad(){
    menuLinks = document.getElementById("top_menu").getElementsByClassName("top_menu_link");
    getCoordinates(menuLinks, defaul_positions);

    //set icon src cause of change of folder

    /* var icons = document.getElementById("left_menu_body").getElementsByClassName("links_icons");
    var icons_img = new Array("home", "products", "catalog", "news", "about", "contact");
    for(var i=0; i<icons.length; i++){
        icons[i].src = "../menu/icons/" + icons_img[i] + '.png';
    } */

    setTheMenu();
    close_loading();
}




var time_to_close = -1;

function show_current_submenu(index, btn_index){
    var submenus = document.getElementById("left_menu_body").getElementsByClassName("left_menu_submenu");
    var buttons = document.getElementById("left_menu_body").getElementsByClassName("left_menu_links");

    if(btn_index == time_to_close){
        close_submenus(submenus, buttons);
        time_to_close = -1;

        return;
    }

    for(var i=0; i<submenus.length; i++){
        if(i == index){
            var elements = submenus[i].getElementsByClassName("left_menu_submenu_link");
            submenus[i].style.height = (elements.length * 40) + "px";
            submenus[i].style.paddingTop = "4px";
            submenus[i].style.paddingBottom = "10px";
        }else{
            submenus[i].style.height = "0px";
            submenus[i].style.padding = "0px";
        }
    }

    for(var i=0; i<buttons.length; i++){
        if(i == btn_index){
            buttons[i].style.background = "rgba(0,0,0,0.1)";
        }else{
            buttons[i].style.background = "rgba(0,0,0,0.0)";
        }
    }

    time_to_close = btn_index;
}


function close_submenus(submenus, buttons){
    for(var i=0; i<submenus.length; i++) {
        submenus[i].style.padding = "0px";
        submenus[i].style.height = "0px";
    }
    for(var i=0; i<buttons.length; i++) buttons[i].style.background = "rgba(0,0,0,0.0)";
}


function showLeftMenu(){
    var menu = document.getElementById("left_menu");
    var shadow = document.getElementById("left_menu_shadow");

    menu.style.left = "0px";
    shadow.style.left = "340px";
}

function hideLeftMenu(){
    var menu = document.getElementById("left_menu");
    var shadow = document.getElementById("left_menu_shadow");

    menu.style.left = "-340px";
    shadow.style.left = (window.innerWidth) + "px";
}

function showNameOfLink(elem){
    var element = elem.getElementsByTagName("a");
    var linkAttr = document.getElementById("linkAtribute");
    console.log(element[0].innerHTML);

    linkAttr.innerHTML = element[0].innerHTML;

}

var openSubmenu = 0;


function all_categories(){
    var news_menu = document.getElementById("cat_menu");
    if(!openSubmenu){
        news_menu.style.left = (window.innerWidth - 320) + 'px';
        openSubmenu++;
    }else{
        news_menu.style.left = window.innerWidth + 'px';
        openSubmenu = 0;
    }
}


//top menu products
function get_top_products(){
    document.getElementById("top_all_products").style.display = 'block';
}

function hide_top_products() {
    document.getElementById("top_all_products").style.display = 'none';
}

//top menu products
function get_uber_uns(){
    document.getElementById("top_uber_uns").style.display = 'block';
}

function hide_uber_uns() {
    document.getElementById("top_uber_uns").style.display = 'none';
}