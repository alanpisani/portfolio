const menuIcon = document.querySelector('#btn-menu');
const modalNavbar = document.querySelector('.modal-navbar');
const closeMenu = document.querySelector('#close-menu');
const modalButtons = document.querySelectorAll('.m-link');
const buttons = document.querySelectorAll('.link');

menuIcon.addEventListener('click', ()=> {

    modalNavbar.classList.add('navbar-movile')

})

closeMenu.addEventListener('click', ()=>{
    modalNavbar.classList.remove('navbar-movile')
})

modalButtons.forEach(button => 
    
    button.addEventListener('click', ()=>{

        modalNavbar.classList.remove('navbar-movile');
}));

buttons.forEach(button => 
    button.addEventListener('click', (e)=>{
        buttons.forEach(button => button.classList.remove('active'));
        e.currentTarget.classList.add('active');
    })
    
    

)

