let name1 = document.forms['form']['username'];
let password = document.forms['form']['password'];
let repeat_password = document.forms['form']['repeat_password'];
let email = document.forms['form']['email'];

let name1_error = document.getElementById('name1_error');
let password_error = document.getElementById('password_error');
let repeat_password_error = document.getElementById('repeat_password_error');
let email_error = document.getElementById('email_error');

name1.addEventListener('textInput', name1_Verify);
password.addEventListener('textInput', password_Verify);
repeat_password.addEventListener('textInput', repeatPassword_Verify);
email.addEventListener('textInput', email_Verify);

function validated() {
    if (!email.value.includes("@")) {
        email_error.style.display = "block"
        email.focus();
        return false 
    }
    if (name1.value.length < 6) {
        name1_error.style.display = "block"
        name1.focus();
        return false 
    }
    if (password.value.length < 6) {
        password_error.style.display = "block"
        password.focus();
        return false 
    }
    if (repeat_password.value !== password.value) {
        repeat_password_error.style.display = "block"
        repeat_password.focus();
        return false 
    }
}

function email_Verify() {
    if (email.value.includes("@")) {
        email_error.style.display = "none"
        return true ;
    }
}

function name1_Verify() {
    if (name1.value.length >= 6) {
        name1_error.style.display = "none"
        return true ;
    }
}

function password_Verify() {
    if (password.value.length >= 6) {
        password_error.style.display = "none"
        return true ;
    }
}

function repeatPassword_Verify() {
    if (repeat_password.value === password.value) {
        repeat_password_error.style.display = "none"
        return true ;
    }
}
