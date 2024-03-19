let nav, burger;

nav = document.querySelector('nav');
burger = document.querySelector('#mobile');

burger.addEventListener('click', function(){
    nav.classList.toggle('affichage');
});
