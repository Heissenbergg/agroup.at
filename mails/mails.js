function sendMail(id=null){
    var name = document.getElementById("mail_name").value;
    var contact = document.getElementById("mail_contact").value;
    var text = document.getElementById("mail_text").value;
    
    var xml = new XMLHttpRequest();

	xml.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      	console.log(this.responseText);
	      	document.getElementById("mails_wrapper").style.display = 'block';
	    }
	};
	if(id){
		console.log("we are here");
		xml.open('POST', 'mails/ask_question.php');
		xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xml.send("name="+name+'&contact='+contact+'&text='+text+'&product_id='+id);
	}else {
		xml.open('POST', 'mails/send_mail.php');
		xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xml.send("name="+name+'&contact='+contact+'&text='+text);
	}
}

function closeNotify(){
	document.getElementById("mails_wrapper").style.display = 'none';
	
	document.getElementById("mail_name").value = '';
    document.getElementById("mail_contact").value = '';
    document.getElementById("mail_text").value = '';
}