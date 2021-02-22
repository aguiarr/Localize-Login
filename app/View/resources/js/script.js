
var btn_close = document.getElementById('btn-close');
var singup = document.getElementById('singup');


singup.addEventListener('click', () => {
        document.getElementById('register').style.display = 'block';
});

btn_close.addEventListener("click", () => {
        document.getElementById('register').style.display = 'none';
});