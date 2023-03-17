const menuIcon = document.querySelector('#btn-menu');
const modalNavbar = document.querySelector('.modal-navbar');
const closeMenu = document.querySelector('#close-menu');
const buttons = document.querySelectorAll('.link');

menuIcon.addEventListener('click', ()=> {

    modalNavbar.classList.add('navbar-movile')

})

closeMenu.addEventListener('click', ()=>{
    modalNavbar.classList.remove('navbar-movile')
})

buttons.forEach(button => button.addEventListener('click', ()=>{

    modalNavbar.classList.remove('navbar-movile');
    console.log("hola")
}))