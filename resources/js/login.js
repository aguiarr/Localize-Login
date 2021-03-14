
const $btn_close = document.getElementById('btn_close') || null;
const $btn_singup = document.getElementById('singup') || null;
const $section_singup = document.getElementById('register') || null;

$btn_singup.addEventListener('click', () => {
        $section_singup.classList.add('active_register');
});
$btn_close.addEventListener("click", () => {
        $section_singup.classList.remove('active_register');
});
        
