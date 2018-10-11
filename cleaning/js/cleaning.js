var currentImage = 0;

function loadImages(){
	var images = document.getElementById("just_article_images_img").getElementsByClassName("huge_images");
	var images_wrapper = document.getElementById("just_article_images_img");

	for(var i=0; i<images.length; i++){
		if(i==0) images[i].style.display = 'block';
		else  images[i].style.display = 'none';
		console.log(images[i].className);
		if(images[i].className == 'huge_images rotated_image90' || images[i].className == 'huge_images rotated_image180'){
			images[i].style.width = images_wrapper.clientHeight + 'px';
			//console.log("height " + images_wrapper.clientHeight);
		}
		
	}
}


function changeImage(id = null){
	var images = document.getElementById("just_article_images_img").getElementsByClassName("huge_images");

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


function set_huge(id){
	var wrapper = document.getElementById("huge_images_wrapper");
	var images = wrapper.getElementsByClassName("huge_image");
	var image = document.getElementById("id_of_huge" + id);

	//set it

	for(var i=0; i<images.length; i++){
		images[i].style.display = 'none';
	}	

	wrapper.style.display = 'block';
	image.style.display = 'block';
}

function hide_huge_images(){
	var wrapper = document.getElementById("huge_images_wrapper");
	var images = wrapper.getElementsByClassName("huge_image");

	for(var i=0; i<images.length; i++){
		images[i].style.display = 'none';
	}
	wrapper.style.display = 'none';
}