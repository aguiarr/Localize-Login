//open the singup section 
const $btn_close = document.getElementById('btn_close') || null;
const $btn_singup = document.getElementById('singup') || null;
const $section_singup = document.getElementById('register') || null;

$btn_singup.addEventListener('click', () => {
        $section_singup.classList.add('active_register');



        const fields = document.querySelectorAll("[required]");

        function customValidation(event){
                const field = event.target;

                //verify if exists erros
                function verifyErros(){
                        let foundError = false;

                        for (let error in field.validity){
                                if(error != "customError" && field.validity[error]){
                                       foundError = error;
                                }
                        }

                        return foundError;
                }

                const error = verifyErros();

                // change required message
                if(error){               
                        field.setCustomValidity("teste");
                }else{
                        field.setCustomValidity("");
                }
                
        }
        for (field of fields){
                field.addEventListener("invalid", customValidation)
        }
        document.getElementById("register-form")
        .addEventListener("submit", element => {
                console.log("envia");
                element.preventDefault();
        })
});
$btn_close.addEventListener("click", () => {
        $section_singup.classList.remove('active_register');
});

//phone mask
function inputHandler(masks, max, event) {
    var c = event.target;
    var v = c.value.replace(/\D/g, '');
    var m = c.value.length > max ? 1 : 0;
    VMasker(c).unMask();
    VMasker(c).maskPattern(masks[m]);
    c.value = VMasker.toPattern(v, masks[m]);
}

var telMask = ['(99) 9999-99999', '(99) 9 9999-9999'];
var tel = document.querySelector('#phone');
VMasker(tel).maskPattern(telMask[0]);
tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);


var password = document.querySelector('#password');
var confirmation = document.querySelector('#confirmation');

confirmation.addEventListener("keyup", () => {
        verifyPassword(password.value, confirmation.value);
});
//verify the password confirmation
function verifyPassword(password, confirmation){
        if(password === confirmation){
                return false;
        }
}

