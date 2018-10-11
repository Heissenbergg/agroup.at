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
	      	content_wrapper.innerHTML = this.responseText;
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