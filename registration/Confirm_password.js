function checkPassword(){
	if(document.getElementById("pwd").value != document.getElementById("cmdpwd").value){
		alert("Password Mismatch!!");
	}
	else{
		alert("Password Match!!");
	}
}


function enableButton(){
		var checkBox = document.getElementById("checkbox");
		if(checkBox.checked == true){
			document.getElementById("submitbn").disabled = false;
		}
		else{
			document.getElementById("submitbn").disabled = true;
		}


}