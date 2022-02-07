
function openProfileMenu(){
    console.log('Came')
    document.addEventListener('click', async function(e){
        const target = e.target;

        if(!target.closest('.js__avatar')) return;
        console.log('Came')
        document.querySelector('.js__drop__menu').classList.toggle('onOf')
    });



}



document.addEventListener("DOMContentLoaded", function(){
    openProfileMenu()
})
