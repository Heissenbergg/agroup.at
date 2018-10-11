var time_to_close = -1;

function showAditional(index, btn_index){
    var submenus = document.getElementById("cat_menu_all_links").getElementsByClassName("cat_menu_services");
    var buttons = document.getElementById("cat_menu_all_links").getElementsByClassName("cat_menu_link");


    if(btn_index == time_to_close){
        close_service_submenus(submenus, buttons);
        time_to_close = -1;

        return;
    }

    for(var i=0; i<submenus.length; i++){
        if(i == index){
            var elements = submenus[i].getElementsByClassName("cat_menu_service_single");
            
            submenus[i].style.height = "auto";
            //submenus[i].style.paddingTop = "4px";
            //submenus[i].style.paddingBottom = "10px";
        }else{
            submenus[i].style.height = "0px";
            submenus[i].style.padding = "0px";
        }
    }

    for(var i=0; i<buttons.length; i++){
        if(i == btn_index){
            buttons[i].getElementsByClassName("category_name")[0].style.color = "#333";
            buttons[i].getElementsByClassName("category_name")[0].style.fontWeight = "bolder";
        }else{
            buttons[i].getElementsByClassName("category_name")[0].style.color = "grey";
            buttons[i].getElementsByClassName("category_name")[0].style.fontWeight = "lighter";
        }
    }

    time_to_close = btn_index;
}


function close_service_submenus(submenus, buttons){
    for(var i=0; i<submenus.length; i++) {
        submenus[i].style.padding = "0px";
        submenus[i].style.height = "0px";
    }
    for(var i=0; i<buttons.length; i++) buttons[i].style.background = "rgba(0,0,0,0.0)";
}



function updateService(id){
    var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	//console.log(this.responseText);
	      	document.getElementById("body").innerHTML = this.responseText;
	    }
	};
	xml.open('POST', 'service/update_service.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id);
}

var currentImage = 0;

function changeImage(id = null){
    var images = document.getElementById("body_body").getElementsByClassName("service_images");

    if(id){
        if((currentImage +1) < images.length){
            currentImage ++;
            for(var i=0; i<images.length; i++){
                if(i==currentImage) images[currentImage].style.display = 'block';
                else images[i].style.display = 'none';
            }
        }
    }else{
        if(currentImage > 0){
            currentImage--;
            for(var i=0; i<images.length; i++){
                if(i==currentImage) images[currentImage].style.display = 'block';
                else images[i].style.display = 'none';
            }
        }
    }
}



function loadImages(){
    var images = document.getElementById("body_body").getElementsByClassName("service_images");
    var images_wrapper = document.getElementById("image_wraper");

    for(var i=0; i<images.length; i++){
        if(i==0) images[i].style.display = 'block';
        else  images[i].style.display = 'none';

        if(images[i].className == 'service_images rotated_image90' || images[i].className == 'product_image rotated_image180'){
            images[i].style.width = images_wrapper.clientHeight + 'px';
            //console.log("height " + images_wrapper.clientHeight);
        }
        console.log(images[i].className + 'heee');
    }
}