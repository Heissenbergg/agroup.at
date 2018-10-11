function showDetails(id){
	var details = document.getElementById("our_product_details");
	var form = document.getElementById("our_product_form");
	var headers = document.getElementById("article_description_header").getElementsByClassName("article_parts");

	if(!id){
		details.style.display = 'block';
		form.style.display = 'none';
		headers[0].style.borderBottom = "2px solid #333";
		headers[1].style.borderBottom = "2px solid rgba(0,0,0,0.05)";
	}else{
		details.style.display = 'none';
		form.style.display = 'block';
		headers[0].style.borderBottom = "2px solid rgba(0,0,0,0.05)";
		headers[1].style.borderBottom = "2px solid #333";
	}
}


var currentImage = 0;

function loadImages(){
	var images = document.getElementById("image_part").getElementsByClassName("product_image");
	var images_wrapper = document.getElementById("image_part");

	for(var i=0; i<images.length; i++){
		if(i==0) images[i].style.display = 'block';
		else  images[i].style.display = 'none';

		if(images[i].className == 'product_image rotated_image90' || images[i].className == 'product_image rotated_image180'){
			images[i].style.width = images_wrapper.clientHeight + 'px';
			//console.log("height " + images_wrapper.clientHeight);
		}
		console.log(images[i].className + 'heee');
	}
}


function changeImage(id = null){
	var images = document.getElementById("image_part").getElementsByClassName("product_image");

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