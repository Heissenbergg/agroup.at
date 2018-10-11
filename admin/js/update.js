function update_article(id){
	var title = document.getElementById("name_of_article").value;
	var price = document.getElementById("price_of_article").value;
	var details = document.getElementById("details_of_article").value;

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	alert("Spremljeno !!");
	    }
	};
	xml.open('POST', 'http/update_article.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+"&title="+title+"&price="+price+"&details="+details);
}



function update_product(id){
	var title = document.getElementById("name_of_article").value;
	var details = document.getElementById("details_of_article").value;

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	alert("Spremljeno !!");
	    }
	};
	xml.open('POST', 'http/update_product.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+"&title="+title+"&details="+details);
}


function update_about(id){
	var title = document.getElementById("title").value;
	var details = document.getElementById("text").value;

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	alert("Spremljeno !!");
	    }
	};
	xml.open('POST', 'http/update_about.php');
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send("id="+id+"&title="+title+"&details="+details);	
}