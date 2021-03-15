const email = document.getElementById('email');
const password = document.getElementById('password');
const loginSpan = document.querySelector('.error-login');

var erroColor = '#b300b3';

function verifyFields(){
    if(email.value == '' || password.value == ''){
        email.value == '' ? email.style.borderColor = erroColor : email.style.borderColor = "black";
        password.value == '' ? password.style.borderColor = erroColor : password.style.borderColor = "black";
        loginSpan.innerHTML = "All the fileds must to be inserted!"
        return true;
    }else{
        loginSpan.innerHTML = " "
        return false;
    }
}


document.getElementById("login-form")
    .addEventListener("submit", element => {
        if(verifyFields()){
            element.preventDefault();
        }
});