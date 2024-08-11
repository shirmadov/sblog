const mobileMenuIcon = document.getElementById('mobile-menu-icon');
const mobileCloseIcon = document.getElementById('mobile-close-icon');
const nav = document.getElementById('nav');

mobileMenuIcon.addEventListener('click', () => {
    nav.classList.toggle('nav--active');
    mobileMenuIcon.style.display = 'none';
    mobileCloseIcon.style.display = 'block';
});

mobileCloseIcon.addEventListener('click', () => {
    nav.classList.toggle('nav--active');
    mobileMenuIcon.style.display = 'flex';
    mobileCloseIcon.style.display = 'none';
});


function openProfileMenu(){
    document.addEventListener('click', async function(e){
        const target = e.target;

        if(!target.closest('.js__avatar')) return;
        document.querySelector('.js__drop__menu').classList.toggle('onOf')
    });


}



document.addEventListener("DOMContentLoaded", function(){
    openProfileMenu()
})
