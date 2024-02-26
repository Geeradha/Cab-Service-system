function checkPassword() {
    var password = document.getElementById("Password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    var hasSymbol = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(password);

    if (password !== confirm_password) {
        document.getElementById("message").innerHTML = "Passwords do not match";
        return false; 
    } else if (password.length < 7) {
        document.getElementById("message").innerHTML = "Password must be at least 7 characters long";
        return false;
    } else if (!hasSymbol) {
        document.getElementById("message").innerHTML = "Password must contain at least one symbol";
        return false; 
    } else {
        return true;
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