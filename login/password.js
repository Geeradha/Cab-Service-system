var eye = document.getElementById("eye");
var password = document.getElementById("password");
var showpassword = false

eye.addEventListener("click", function(){
    if(showpassword == false){
        password.setAttribute("type", "text");
    eye.classList.add("fa-eye-slash");
    eye.classList.remove("fa-eye");
    showpassword = true;
    }
    else{
        password.setAttribute("type", "password");
    eye.classList.remove("fa-eye-slash");
    eye.classList.add("fa-eye");
    showpassword = false;
    }
});