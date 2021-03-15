const fields = document.querySelectorAll("#register input[required]");
//password span n field
const passwordField = document.getElementById('password-register');
const passwordSpan  = document.querySelector('.error-password');
//confirmation password n span field
const confirmationField =  document.getElementById('confirmation-password');
const confirmationSpan  =  document.querySelector('.error-confirmation');
//email n span field 
const emailField = document.getElementById('email-register');
const emailSpan  = document.querySelector('.error-email');
//span error for the singup validation
const singUpSpan = document.querySelector('.error-singup')
//color error
var erroColor = '#b300b3';
//shows the validation message as custom 
function customValidation(event) {
    const field = event.target;
    //verify if exists erros
    function verifyErros() {
        let foundError = false;

        for (let error in field.validity) {
            if (error != "customError" && field.validity[error]) {
                foundError = error;
            }
        }

        return foundError;
    }

    const error = verifyErros();
    // change required message
    if (error) {
        field.setCustomValidity(" ");
        field.style.borderColor = erroColor;
        field.style.color = erroColor;
        singUpSpan.innerHTML = "All the fileds must to be inserted!"

    } else {
        field.setCustomValidity("");
        field.style.borderColor = "black";
        field.style.color = "black";
        singUpSpan.innerHTML = ""
    }

}
for (field of fields) {
    field.addEventListener("invalid", customValidation);
    if(field.id == 'password-register'){
    }
}
var error = false
document.getElementById("register-form")
    .addEventListener("submit", element => {
        if(passwordValidation(passwordField, passwordSpan)) element.preventDefault();
        if(passwordConfirmation(passwordField, confirmationField, confirmationSpan)) element.preventDefault();
        if(emailValidation(emailField, emailSpan)) element.preventDefault();

});

function passwordValidation(field, span){
    let value = field.value;
    let result = false;
    if(value.length < 6){
        result = "The password had to have at least 6 characters!";
        field.style.borderColor = erroColor;
        field.style.color = erroColor;
    }
    isNumber = false;
    arr = value.split('');
    arr.forEach(letter => {
        if(parseInt(letter)) isNumber = true;
        console.log(isNumber);

        if(!parseInt(letter) && !isUpperCase(letter)){
            result = "The password had to have a less one upper case characters!";
        }

    });
    if(!isNumber) result = "The password had to have a less one number!";

    function isUpperCase(letter){
        return letter === letter.toUpperCase();
    }

    if(result){
        field.style.borderColor = erroColor;
        field.style.color = erroColor;
        span.innerHTML = result;
        error = true;
    }else{
        span.innerHTML = ' ';
        field.style.borderColor = "black";
        field.style.color = "black";
    }
    
    return result;
}

function passwordConfirmation(password, confirmation, span){
    if(password.value === confirmation.value){
        confirmation.style.borderColor = "black";
        confirmation.style.color = "black";
        span.innerHTML = " ";

        return false;
    }else{
        confirmation.style.borderColor = erroColor;
        confirmation.style.color = erroColor;
        span.innerHTML = "The password confirmation field has to be the same as the password field!";
    }
}

function emailValidation(email, span){

    
    value = email.value;
    arr = value.split('');

    let error = false;
    let hasAt = false;
    arr.forEach(letter => {
        if(letter == '@') hasAt = '@';
    });
    if(!hasAt) error = true;

    if (value.substr(-4) !== '.com' || value.substr(-7) == '.com.br') error = true;

    if(error){
        email.style.borderColor = erroColor;
        email.style.color = erroColor;
        span.innerHTML = "Insert a valid email! Ex:'example@email.com'.";
        return true;
    }else{
        email.style.borderColor = "black";
        email.style.color = "black";
        span.innerHTML = " ";
        return false;
    }
}