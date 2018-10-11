function save_product_category(table, path){
	var name_of_cat = document.getElementById("cat_name");

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	getContent(table, path);
	      	name_of_cat.value = "";
	    }
	};
	xml.open('POST', 'http/insert_article.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("name_of_cat="+name_of_cat.value+"&table="+table);
}


function getContent(table, path){
	var content_wrapper = document.getElementById("form_output_displaying");

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	//console.log(this.responseText);
	      	location.reload();
	    }
	};
	xml.open('POST', 'http/getContent.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("table="+table+"&path="+path);
}


function deleteObject(table, id = null){
	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	getContent(table);
	    }
	};
	xml.open('POST', 'http/delete_category.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+"&table="+table);
}

/*** SCRIPT FOR UPLOADING IMAGES ***/
var hash_session = 0;


var allImages = new Array(), pdf_or_image = 0, sort_images = 0;

function uploadAllPictures(){
	//set cover
	document.getElementById("loading_bar_admin").style.display = 'block';
	
	var data = new FormData();
	//files.length i file[] idu za mulitple files upload
	var ins = document.getElementById('file').files.length;
	for (var x = 0; x < ins; x++) {
	    data.append("file[]", document.getElementById('file').files[x]);
	}

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	if(!pdf_or_image){
	    		//console.log(this.responseText);
	    		getImages(this.responseText);
		    	hash_session = this.responseText;
	    	}else{
	    		updatePdfID(this.responseText);
	    	}
	    	document.getElementById("loading_bar_admin").style.display = 'none';
	    }
	};
	if(!pdf_or_image){
		xml.open('POST', 'http/insertImages.php');
		console.log("Sent for images");
	}
	else{
		xml.open('POST', 'http/insert_pdfs.php');
		console.log("Sent for pdfs");
	}
	//xml.setRequestHeader('Cache-Control', 'no-cache');
	xml.send(data);
}

function updatePdfID(id){
	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {

	      	if(sort_images == 1){
	      		//prvi
	      		var link = document.getElementById("preview_first_pdf");
	      		link.style.display = 'block';
	      		link.href = '../pdfs/' + this.responseText;
	      	}else if(sort_images == 2 ){
	      		//drugi
	      		var link = document.getElementById("preview_second_pdf");
	      		link.style.display = 'block';
	      		link.href = '../pdfs/' + this.responseText;
	      	}else if(sort_images == 3){
	      		//treci
	      		var link = document.getElementById("preview_third_pdf");
	      		link.style.display = 'block';
	      		link.href = '../pdfs/' + this.responseText;
	      	}
	    }
	};
	xml.open('POST', 'http/update_pdfs.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+'&sort_images='+sort_images);

}


//Upload catalog pdfs
//first upload file then update that file with name
var current_catalog_id = 0;
function uploadPDF(){
	document.getElementById("loading_bar_admin").style.display = 'block';
	var data = new FormData();
	//files.length i file[] idu za mulitple files upload
	var ins = document.getElementById('file').files.length;
	for (var x = 0; x < ins; x++) {
	    data.append("file[]", document.getElementById('file').files[x]);
	}

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
	      	current_catalog_id = this.responseText;
		    console.log(this.responseText);
		    //console.log("Jebemu miša !?????");
		    document.getElementById("uploaded_pdf").style.display = 'block';
		    document.getElementById("loading_bar_admin").style.display = 'none';
	    }else{
	    	console.log(this.readyState);
	    }
	};
	xml.open('POST', 'http/upload_catalog.php');
	xml.setRequestHeader('Cache-Control', 'no-cache');
	xml.send(data);
}

//update catalog name
function updateName(){
	var title = document.getElementById("name_of_product").value;
	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	//allImagesWrapper.innerHTML =  this.responseText;
	      	window.location = "catalogs.php";
	    }
	};
	xml.open('POST', 'http/update_catalog_title.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+current_catalog_id+'&title='+title);
}


function setOptions(what, sort = null){
	if(what){
		console.log("uploading pdfs");
		sort_images = sort
		pdf_or_image = 1;
	}else{
		pdf_or_image = 0;
		console.log("uploading images");
	}
}


function getImages(hash){
	var xml = new XMLHttpRequest();
	var allImagesWrapper = document.getElementById("images_part");

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	allImagesWrapper.innerHTML =  this.responseText;
	    }
	};
	xml.open('POST', 'http/get_images.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("hash="+hash);
}

function deleteImage(id, hash, title){
	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	//allImagesWrapper.innerHTML =  this.responseText;
	      	getImages(hash);
	    }
	};
	xml.open('POST', 'http/delete_images.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+'&table='+'images' + '&title='+title);
}


function rotate_image(id, deg, hash){
	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	//allImagesWrapper.innerHTML =  this.responseText;
	      	getImages(hash);
	    }
	};
	xml.open('POST', 'http/rotate_image.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+'&table='+'images' + '&deg='+deg);
}





//// SAVE PRODUCT
function save_product(cat_id){
	var name_of_product = document.getElementById("name_of_product").value;
	var details = document.getElementById("details_of_product").value;

	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	window.location = "view_products.php?id="+cat_id;
	    }
	};
	xml.open('POST', 'http/insert_product.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("name_of_product="+name_of_product+'&details='+ details + '&hash_session='+hash_session+ '&cat_id='+cat_id);
}


function save_article(cat_id, subcat_id){
	var title = document.getElementById("name_of_article").value;
	var price = document.getElementById("price_of_article").value;
	var details = document.getElementById("details_of_article").value;

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	//console.log(this.responseText);
	      	window.location = "view_articles.php?id=" + cat_id + "&cat_id="+subcat_id;
	    }
	};
	xml.open('POST', 'http/insert_single_article.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("title="+title+'&price='+price + '&details='+details + '&hash_session='+hash_session + '&cat_id='+cat_id);
}

function save_service(cat_id){
	var service_title = document.getElementById("service_title").value;
	var service_details = document.getElementById("service_details").value;

	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	window.location = "view_service.php?id="+cat_id;
	    }
	};
	xml.open('POST', 'http/insert_service.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("service_title="+service_title+'&details='+ service_details + '&hash_session='+hash_session+ '&cat_id='+cat_id);
}


function update_service(id){
	var service_title = document.getElementById("service_title").value;
	var service_details = document.getElementById("service_details").value;

	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	//window.location = "view_service.php?id="+cat_id;
	    }
	};
	xml.open('POST', 'http/update_service.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("service_title=" + service_title + '&details=' + service_details + '&id='+id);
}


function save_news(){
	var title_of_news = document.getElementById("news_title").value;
	var news_details = document.getElementById("news_details").value;

	var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	window.location = "news.php";
	    }
	};
	xml.open('POST', 'http/insert_news.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("title_of_news="+title_of_news+'&details='+ news_details + '&hash_session='+hash_session);
}
