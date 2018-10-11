var current = 0, timeout;

function keepShowing(){
	timeout = setTimeout(mainSlider, 8000);
}


function mainSlider(forced = null){
	var images = document.getElementById("slider").getElementsByClassName("slider_images");
	var wrapper = document.getElementById("sliderNavigation").getElementsByClassName("sliderNavigation_line");
	var text = document.getElementById("textWrapper").getElementsByClassName("image_text");

	//Text property
	var slider = document.getElementById("slider");
	var window_w = (slider.clientWidth - 800);
	var window_h = (slider.clientHeight - 820);

	var slider_height = slider.clientHeight;

	if(current == (images.length)) current = 0;
	for(var i=0; i<images.length; i++){
		if(i == current){
			images[i].style.display = 'block';
			wrapper[i].className = "sliderNavigation_line sliderNavigation_mline";
			//slider text style
			text[i].style.left = ((Math.random()*window_w)) + 'px';
			text[i].style.top = ((Math.random()*window_h)) + 'px';
			if(window.innerWidth > 1200){
				text[i].style.width = '600px';
				text[i].style.height = '320px';
			}
			else if(window.innerWidth > 800 && window.innerWidth < 1200){
				text[i].style.width = '500px';
				text[i].style.height = '270px';
			}else if(window.innerWidth > 600 && window.innerWidth <= 800){
				text[i].style.width =  (slider_height - 100) + 'px';
				text[i].style.height = '80px';
				//console.log(text[i].getElementsByClassName("image_text_text")[0].innerHTML);
				text[i].style.left = '0px';
				text[i].style.top = (slider_height - 320) + 'px';
			}else if(window.innerWidth <= 600){
				text[i].style.width =  (slider_height - 50) + 'px';
				text[i].style.height = '70px';
				text[i].style.left = '0px';
				text[i].style.top = (slider_height - 350) + 'px';
			}
			text[i].style.opacity = 1;
		}
		else{
			images[i].style.display = 'none';
			wrapper[i].className = "sliderNavigation_line";

			text[i].style.left = ((Math.random()*window_w)) + 'px';
			text[i].style.top = ((Math.random()*window_h)) + 'px';
			text[i].style.width = '0px';
			text[i].style.height = '0px';
			text[i].style.opacity = 0;
		}
	} current++;
	if(!forced) keepShowing();
}


function setFirst(){
	current = 0;
	var images = document.getElementById("slider").getElementsByClassName("slider_images");
	var wrapper = document.getElementById("sliderNavigation");
	var text = document.getElementById("textWrapper").getElementsByClassName("image_text");

	var slider = document.getElementById("slider");

	// clear all navigation lines
	wrapper.innerHTML = "";
	for(var i=0; i<images.length; i++){
		//Image property
		if(i == current) images[i].style.display = 'block';
		else images[i].style.display = 'none';

		//Line property
		var line = document.createElement("div");
		line.index = i;
		line.addEventListener( 'click', function(){
		  showCurrentImage(this.index);
		});
		var colored_line = document.createElement("div");
		colored_line.className = "sliderNavigation_just_line";
		
		if(i == current){
			line.className = "sliderNavigation_line sliderNavigation_mline";	
		}else line.className = "sliderNavigation_line";
		
		line.appendChild(colored_line);
		wrapper.appendChild(line);
	}// current++;


	//Text property
	var window_w = (slider.clientWidth - 800);
	var window_h = (slider.clientHeight - 820);

	text[0].style.left = ((Math.random()*window_w)) + 'px';
	text[0].style.top = ((Math.random()*window_h)) + 'px';

	for(var i=0; i<images.length; i++){
		if(i == current){
			text[i].style.left = ((Math.random()*window_w)) + 'px';
			text[i].style.top = ((Math.random()*window_h)) + 'px';
			if(window.innerWidth > 1200){
				text[i].style.width = '600px';
				text[i].style.height = '320px';
			}
			else if(window.innerWidth > 800 && window.innerWidth <= 1200){
				text[i].style.width = '500px';
				text[i].style.height = '270px';
			}else if(window.innerWidth > 600 && window.innerWidth <= 800){
				text[i].style.width =  (slider.clientWidth - 100) + 'px';
				text[i].style.height = '80px';
				//console.log(text[i].getElementsByClassName("image_text_text")[0].innerHTML);
				text[i].style.left = '0px';
				text[i].style.top = (slider.clientHeight - 320) + 'px';
			}else if(window.innerWidth <= 600){
				text[i].style.width =  (slider.clientWidth - 50) + 'px';
				text[i].style.height = '70px';
				text[i].style.left = '0px';
				text[i].style.top = (slider.clientHeight - 350) + 'px';
			}
			text[i].style.opacity = 1;
		}else{
			text[i].style.left = ((Math.random()*window_w)) + 'px';
			text[i].style.top = ((Math.random()*window_h)) + 'px';
			text[i].style.width = '0px';
			text[i].style.height = '0px';
			text[i].style.opacity = 0;
		}
	}current ++;
}


function showCurrentImage(index){
	current = index;
	mainSlider(1);
}


function showContactInfo(index){
	var info = document.getElementById("contact_us_body").getElementsByClassName("contact_us_body_properties");
	for(var i=0; i<3;i++){
		if(i == index){
			info[i].className = "contact_us_body_input contact_us_body_properties";
		}else{
			info[i].className = "contact_us_body_input contact_us_body_properties contact_us_body_properties0";
		}
	}
}

contact_or_new = 0;

function contact_or_news(){
	var width = window.innerWidth;
	var news_button = document.getElementById("news_or_contact");
	var news_button_value = document.getElementById("news_contact_value");
	var contact_form = document.getElementById("contact_us");
	var home_news = document.getElementById("news");

	if(!contact_or_new){
		news_button.style.left = (width - 40) + 'px';
		news_button_value.innerHTML = "NEWS";

		if(width >= 600) contact_form.style.width = (width - 200) + 'px';
		else contact_form.style.width = (width - 50) + 'px';
		home_news.style.width = '0px';

		contact_or_new++;
	}else{
		news_button.style.left = '0px';
		news_button_value.innerHTML = "CONTACT US";

		contact_form.style.width = '0px';
		if(width >= 600) home_news.style.width = (width - 200) + 'px';
		else  home_news.style.width = (width - 50) + 'px';

		contact_or_new = 0;
	}
}