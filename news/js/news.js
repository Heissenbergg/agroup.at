var currentImage = 0;

function changeImage(id = null){
	var images = document.getElementById("news_preview_image").getElementsByClassName("news_image");
	console.log("called");
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

function newLoad(){
	var images = document.getElementById("news_preview_image").getElementsByClassName("news_image");
	for(var i=1; i<images.length; i++){
		images[i].style.display = 'none';
	}
}


var open = 0;

function allNews(){
	var news_menu = document.getElementById("all_news_rightSide");
	if(!open){
		news_menu.style.right = '0px';
		open++;
	}else{
		news_menu.style.right = '-320px';
		open = 0;
	}
}
