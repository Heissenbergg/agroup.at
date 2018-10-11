function save_subcategory(category_id){
	var title = document.getElementById("subcategory_title").value;

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	console.log(this.responseText);
	    	location.reload();
	    }
	};
	xml.open('POST', 'http/insert_subcategory.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("cat_id="+category_id+"&title="+title);
}


function update_categories(id, table){
	var title = document.getElementById("title").value;

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	console.log(this.responseText);
	    	location.reload();
	    }
	};
	xml.open('POST', 'http/update_category.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+"&title="+title+"&table="+table);
}