function validoMeRegex(){
    var usernameRegex = /[a-zA-Z]{5,}$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    var useri = document.getElementById('user').value;
    var pw = document.getElementById('pass').value;
    
    if(!usernameRegex.test(useri)){
        username_error.style.display = "block";
    }
    if(!passwordRegex.test(pw)){
        password_error.style.display = "block";
    }
}